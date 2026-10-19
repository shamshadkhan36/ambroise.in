@echo off
title Deploy Ambroise Inspired Websites to Vercel
echo =================================================================
echo        DEPLOY TO VERCEL (INSTANT LIVE PUBLIC URL)
echo =================================================================
echo.
echo This will deploy all 5 inspired websites and the showcase portal
echo to Vercel with a free, high-speed HTTPS public link for your client.
echo.
echo If not logged in, Vercel will ask you to login with GitHub or Email.
echo.
npx vercel --prod
pause
