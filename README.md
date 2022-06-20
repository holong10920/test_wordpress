WEB_PORT=3000
SHOP_PORT=5000
ADMIN_PORT=3002

APP_URL=http://localhost:${WEB_PORT}
SHOP_URL=http://localhost:${SHOP_PORT}

NEXT_TELEMETRY_DISABLED=1

DATABASE_URL="mysql://root:password@127.0.0.1:3308/main"

# For Auth
NEXTAUTH_URL="http://localhost:3001"
## Crediential
SECRET_KEY="secret"
## By email
EMAIL_SERVER=smtp://test.shopme2021@gmail.com:shopme2021@smtp.gmail.com:587
EMAIL_FROM=test.shopme2021@gmail.com

## Github
GITHUB_CLIENT_ID="796b79a005dd0bb21e93"
GITHUB_CLIENT_SECRET="83e8ab4a05f96fed1019160a019cdfda680da0b1"

## Google
GOOGLE_CLIENT_ID="288588331095-uveqg5si8lm5muoj5p7gmikvrtm6d7d3.apps.googleusercontent.com"
GOOGLE_CLIENT_SECRET="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"

## AWS S3
AWS_ACCESS_KEY=SB3YHJMCC6321C9RK6D9
AWS_SECRET=wQGCS7FyLtMpAfnW5B0BPtAjL8oGmu8a1sesQlcD
AWS_REGION=hn
AWS_BUCKET=shopme-dev
AWS_ENDPOINT=https://hn.ss.bfcplatform.vn
AWS_REWRITE_PATH=/images/
