# Laravel 7 create or generate excel document with Maatwebsite/Laravel-Excel

# Installation
1. Clone this repo
```
https://github.com/samironbarai/laravel-7-excel-document.git
```

2. Install composer packages
```
cd laravel-7-excel-document
$ composer install
```

3. Create and setup .env file
```
make a copy of .env.example and rename to .env
$ php artisan key:generate
put database credentials in .env file
```

4. Migrate and insert dummy data
```
$ php artisan migrate
$ php artisan tinker
$ factory(App\User::class, 30)->create()
$ factory(App\Post::class, 100)->create()
```

See the video tutorial

[![](https://img.youtube.com/vi/tfnHFi_KIBU/0.jpg)](https://www.youtube.com/watch?v=tfnHFi_KIBU) 
