## How to Install

- Copy .env.example file to .env
- Edit database credentials in .env
- Run composer install
- Run php artisan key:generate (jika perlu)

## How to Use Frontend asset js / css

- npm install
- npm run dev (1x compile)
- npm run watch (compile otomatis setiap ada perubahan)
- edit di file /resources/js atau /resources/css

## Before Commit
 - npm run prod

note: jangan edit langsung (app.css, main.css, app.js, main.js) di folder public, edit/update di folder resource