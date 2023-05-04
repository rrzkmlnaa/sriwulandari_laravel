<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Berita extends Controller
{
    public function index()
    {
        $data = [
            'css' => 'berita'
        ];
        return view('berita', $data);
    }

    public function detail($id)
    {
        $data = [
            "css" => 'detail-berita'
        ];

        return view('detail_berita', $data);
    }
}
