<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $data = [
            "css" => "index"
        ];

        return view('home', $data);
    }
}
