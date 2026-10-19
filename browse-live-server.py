import http.server
import urllib.request
import webbrowser
import threading
import sys

PORT = 8080
TARGET_HOST = "97.74.191.91"
VHOST = "ambroise.in"

class LiveServerBridge(http.server.BaseHTTPRequestHandler):
    def do_GET(self):
        remote_url = f"http://{TARGET_HOST}{self.path}"
        req = urllib.request.Request(
            remote_url,
            headers={
                "Host": VHOST,
                "User-Agent": self.headers.get("User-Agent", "Mozilla/5.0")
            }
        )
        try:
            with urllib.request.urlopen(req, timeout=15) as resp:
                self.send_response(resp.status)
                for header, val in resp.headers.items():
                    if header.lower() not in ["transfer-encoding", "content-length", "connection"]:
                        self.send_header(header, val)
                content = resp.read()
                self.send_header("Content-Length", str(len(content)))
                self.end_headers()
                self.wfile.write(content)
        except urllib.error.HTTPError as e:
            self.send_response(e.code)
            self.end_headers()
            self.wfile.write(e.read())
        except Exception as e:
            self.send_response(500)
            self.end_headers()
            self.wfile.write(f"Bridge Error: {e}".encode("utf-8"))

    def log_message(self, format, *args):
        # Clean compact logging
        print(f"[Live Server Request] {args[0]}")

def open_browser():
    import time
    time.sleep(1)
    url = f"http://localhost:{PORT}/showcase/"
    print(f"\nOpening {url} in your default browser...\n")
    webbrowser.open(url)

if __name__ == "__main__":
    print("=" * 65)
    print("  Ambroise.in Live Server Bridge (Direct to 97.74.191.91)")
    print("=" * 65)
    print(f"Bypasses shared-IP vhost routing so you can view the live server directly.")
    print(f"Bridge running at: http://localhost:{PORT}/")
    print(f"Targeting server:  http://{TARGET_HOST}/ (Host: {VHOST})")
    print("=" * 65)
    
    threading.Thread(target=open_browser, daemon=True).start()
    
    server = http.server.HTTPServer(("127.0.0.1", PORT), LiveServerBridge)
    try:
        server.serve_forever()
    except KeyboardInterrupt:
        print("\nBridge stopped.")
