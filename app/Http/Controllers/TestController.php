<?php

namespace App\Http\Controllers;

class TestController
{
    function calculator($num1, $op, $num2)
    {
        switch ($op) {
            case "*":
                echo $num1 * $num2;
                break;
            case "/":
                echo $num1 / $num2;
                break;
            case "+":
                echo $num1 + $num2;
                break;
            case "-":
                echo $num1 - $num2;
                break;
            default:
                echo "Invalid Operation";
        }
    }
}


/*
    Controller Type

    - Empty Controller
    - Resource Controller
    - API Controller 
    - Invokable Controller [Invoke] [One Method Only]
    - Singleton
*/
