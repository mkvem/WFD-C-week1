<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    // Parameter bisa ditentukan type datanya atau tidak
    // Kalau ditentukan harus pakai type data tersebut
    public function show(string $param1, int $param2): View {
        return view('halo1', [
            'param1' => $param1,
            'param2' => $param2
        ]);
    }

    public function home(): View {
        return view('welcome');
    }

    public function test()   {
        return "Test URL";
    }

}
