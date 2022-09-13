<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function addTwoNumbers($num1, $num2)
    {
        $result = $num1 + $num2;
        return view('index', ['result' => $result]);
    }
}
