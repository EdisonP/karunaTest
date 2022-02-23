# karunaTest

Laravel 8

startup:

1. run xampp and enable Apache & MySQL
2. create an empty db named "karunatest"
3. rename ".env.example" to ".env"

run commands at terminal in order:

1. npm install (adds node_modules)
2. composer update (adds vendor)
3. npm run dev
4. php artisan migrate:fresh
5. php artisan db:seed --class=ProductSeeder
6. php artisan serve
7. go to http://127.0.0.1:8000/