<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showWelcome(){
        return 'Hello Nguyen Bao Lam';
    }
}
