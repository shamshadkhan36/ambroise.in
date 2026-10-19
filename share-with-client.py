import subprocess
import re
import time
import threading
import http.server
import socketserver
import os

PORT = 8000

def run_server():
    os.chdir(os.path.dirname(os.path.abspath(__file__)))
    handler = http.server.SimpleHTTPRequestHandler
    with socketserver.TCPServer(("", PORT), handler) as httpd:
        httpd.serve_forever()

def main():
    print("=" * 65)
    print("  AMBROISE - INSTANT PUBLIC CLIENT SHARING LINK")
    print("=" * 65)
    print("Starting local server...")
    
    # Start local server in background thread
    t = threading.Thread(target=run_server, daemon=True)
    t.start()
    time.sleep(1)
    
    print("Connecting secure public tunnel via Pinggy...")
    cmd = [
        "C:\\Windows\\System32\\OpenSSH\\ssh.exe",
        "-p", "443",
        "-R0:localhost:8000",
        "-o", "StrictHostKeyChecking=no",
        "-o", "ServerAliveInterval=30",
        "a.pinggy.io"
    ]
    
    try:
        proc = subprocess.Popen(
            cmd,
            stdout=subprocess.PIPE,
            stderr=subprocess.STDOUT,
            text=True,
            bufsize=1
        )
        
        public_url = None
        for line in iter(proc.stdout.readline, ''):
            # Look for http:// or https:// tunnel URL
            match = re.search(r'(https?://[a-zA-Z0-9.-]+\.pinggy\.link)', line)
            if match:
                public_url = match.group(1)
                break
            # Also check alternative pinggy output format
            if 'http' in line and '.link' in line:
                for token in line.split():
                    if token.startswith('http') and '.link' in token:
                        public_url = token.strip()
                        break
                if public_url:
                    break
        
        if public_url:
            print("\n" + "=" * 65)
            print("  PUBLIC CLIENT LINK READY! SEND THIS TO YOUR CLIENT:")
            print("=" * 65)
            print(f"\n👉 Master Showcase:   {public_url}/")
            print(f"👉 The Prop Shop:     {public_url}/thepropshopindia/")
            print(f"👉 Experience SOL:    {public_url}/experiencesol/")
            print(f"👉 First Rain:        {public_url}/firstrain/")
            print(f"👉 Inoways:           {public_url}/inoways/")
            print(f"👉 Brade Events:      {public_url}/brade/\n")
            print("=" * 65)
            print("Keep this window OPEN while your client is browsing.")
            print("Press Ctrl+C to stop sharing.")
            print("=" * 65 + "\n")
            
            # Keep process running
            proc.wait()
        else:
            print("Could not retrieve tunnel URL. Please check your internet connection.")
            
    except KeyboardInterrupt:
        print("\nSharing stopped.")
    except Exception as e:
        print(f"Error starting tunnel: {e}")

if __name__ == "__main__":
    main()
