<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        $name = "Weal"; // Pass Variable For index Page
        $email = "weal@example.com";
        $address = "Palestine Gaza Strip Khan Yunis Jalal Street";
        // return view('index')->with('name', $name)->with('email', $email)->with('clientAddress', $address);
        // return view(
        //     'index',
        //     [
        //         'name' => $name,
        //         'email' => $email,
        //         'clientAddress' => $address // $clientAddress = $address;
        //     ]
        // );
        return view('index', compact('name', 'email', 'address'));
        /*
            with

            - Pass Variables 
            - Add Value For Session
            - Add Relation in Queries Databases
        */
    }

    function about()
    {
        return "about";
    }

    function contact()
    {
        return "contact";
    }

    function services()
    {
        $services = [
            [1, 'Service Name One ', '700$'],
            [2, 'Service Name Two', '600$'],
            [3, 'Service Name Three', '800$'],
            [4, 'Service Name Four', '900$'],
            [5, 'Service Name Five', '400$'],
            [6, 'Service Name Six', '200$'],
            [7, 'Service Name Seven', '500$'],
            [8, 'Service Name Eight', '800$'],
        ];
        return view('service', compact('services'));
    }

    function project($id = '100'): String // Return Type
    {
        return $id;
    }
}
