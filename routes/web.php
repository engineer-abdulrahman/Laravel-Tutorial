<?php

use Illuminate\Support\Facades\Route;

/*
    Online-Store.com

    - Online-Store/
    - Online-Store/categories
    - Online-Store/product
    - Online-Store/cart
    - Online-Store/login
    - Online-Store/register
    - Online-Store/privacy-policy
*/


// class Car
// {
//     static function getName()
//     {
//         return "Mercedes";
//     }
// }

// $mercedes = new Car();
// $mercedes->getName();

// Car::getName();

/*
    url [Uniform Resource Locator]
*/

/*
    Route Types

    - get [View Data]
    - post [Receive Data From A Form]
    - put [Edit Data]
    - patch [Edit Data]
    - delete [Delete Data]
*/

Route::get('/', function () {
    return "Home Page Online Store";
});

// Anonymous Function
// Closure Function
// Call Back Function

Route::get('/categories', function () {
    return "Categories Page Online Store";
});

Route::get('/product', function () {
    return "Product Page Online Store";
});

Route::get('/cart', function () {
    return "Cart Page Online Store";
});

Route::get('/login', function () {
    return "Login Page Online Store";
});

Route::get('/register', function () {
    return "Register Page Online Store";
});

Route::get('/privacy-policy', function () {
    return "Privacy Policy Page Online Store";
});
