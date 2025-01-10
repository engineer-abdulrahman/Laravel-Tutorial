<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExportController;

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


class Car
{
    static function getName()
    {
        return "Mercedes";
    }
}

$mercedes = new Car();
$mercedes->getName();

Car::getName();

/*
    url [Uniform Resource Locator]
*/

/*
    Route Types

    - get [View Data]
    - post [Receive Data From A Form]
    - put [Edit Data] Latest, The Fastest
    - patch [Edit Data] Oldest
    - delete [Delete Data]
*/

// Route::get('/', function () {
//     return "Home Page Online Store";
// });

// Anonymous Function
// Closure Function
// Call Back Function

// Route::get('/categories', function () {
//     return "Categories Page Online Store";
// });

// Route::get('/product', function () {
//     return "Product Page Online Store";
// });

// Route::get('/cart', function () {
//     return "Cart Page Online Store";
// });

// Route::get('/login', function () {
//     return "Login Page Online Store";
// });

// Route::get('/register', function () {
//     return "Register Page Online Store";
// });

// Route::get('/privacy-policy', function () {
//     return "Privacy Policy Page Online Store";
// });

// Regular Expression
Route::get('/user/{name}/{age}', function ($name, $age) {
    return "Welcome <b>$name</b> To Our Website Your Age is <b>$age</b>.";
})->where('name', '[A-Ma-m]+')->whereNumber('age');

// whereAlpha('name);


// Local Scope
// Global Scope

class User
{
    private $name;
    private $age;
    function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    function setAge($age)
    {
        $this->age = $age;
        return $this;
    }
}

$user = new User();
$user->setName("Weal");
$user->setAge(25);
// Method Chaining
$user->setName("Weal")->setAge(25);

// https://bakkah.com/sessions/ecba
// https://bakkah.com/sessions/ecba/class-room
// https://bakkah.com/sessions/ecba/self-study

Route::get('/sessions/{course}/{type?}', function ($course, $type = "online") {
    if ($type == "self-study" || $type == "selfstudy") {
        return "Course: <b>$course</b> <br> Type: <b>Self Study</b>";
    } elseif ($type == "classroom" || $type == "class-room") {
        return "Course: <b>$course</b> <br> Type: <b>Classroom</b>";
    } elseif ($type == "online") {
        return "Course: <b>$course</b> <br> Type: <b>Online</b>";
    } else {
        return "Course: <b>$course</b> <br> Type: <b>$type</b>";
    }
});

Route::match(['put', 'patch', 'get'], 'edit', function () {
    return "Edit Data Page";
});

Route::any('/greeting', function () {
    return "Hello World";
});

Route::redirect('/', '/welcome');

Route::view('/welcome', 'welcome');

// ==

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/resume', function () {
    // Helper Methods
    // $url = url('/resume/projects');
    $url = route('projects');
    return '<h1>Profile</h1> <br> <a href="' . $url . '">Projects</a>';
})->name('profile');

Route::get('/resume/my-projects', function () {
    return '<h1>Projects</h1> <br> <a href="/resume">Resume</a>';
})->name('projects');


Route::get('calculator/{num1}/{op}/{num2}', [TestController::class, 'calculator']);


// index, about, contact, services

Route::get('/home', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/project/{id?}', [MainController::class, 'project'])->name('project');

// Before Laravel 8
// Route::get('/home', 'MainController@index')->name('index');
$str = 'MasterController@index';
// $controller = strstr($str, '@', true);
// echo $controller;
$str = explode('@', $str);
// $controllerClass = new $str[0];
// $controllerClass->$str[1];

Route::get('/export', ExportController::class)->name('export'); // Invokable


Route::get('/user/{name}/{age}', [UserController::class, 'user'])->where('name', '[A-Za-z]+')->whereNumber('age')->name('user');



// include('admin.php');

// 404 => Not Found 


// Domain   => mohamednaji.com
// Sub Domain => new.mohamednaji.com
// Sub Directory => mohamednaji.com/new
