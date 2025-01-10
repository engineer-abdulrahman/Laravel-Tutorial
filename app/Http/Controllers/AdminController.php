<?php

namespace App\Http\Controllers;

class AdminController
{

    function index()
    {
        return "Dashboard";
    }

    function categories()
    {
        return "Dashboard Categories";
    }

    function products()
    {
        return "Dashboard Products";
    }

    function orders()
    {
        return "Dashboard Orders";
    }
}
