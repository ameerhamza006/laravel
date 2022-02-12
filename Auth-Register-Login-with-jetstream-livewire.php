

1.Create Laravel Project

//Go to Providers Folder and open AppServiceProvider.php
//And Add This Trande on Top -> use Illuminate\Support\Facades\Schema;
//After Adding Trade Scroll Down and find boot() Function
//And Add This Class -> Schema::defaultstringLength(191);

2.Create Database

//After Creating a Database
//go to .env file and connect Application with database

//Enter in Terminal 
3.composer require laravel/jetstream

//Enter in Terminal
4.php artisan jetstream:install livewire

//Enter in Terminal
5.npm install

//Enter in Terminal
6.npm run dev

//Enter in Terminal
7.php artisan migrate

//Enter in Terminal
8.php artisan serve
