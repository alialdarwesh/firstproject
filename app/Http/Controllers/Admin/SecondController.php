<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SecondController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('showString3');
    }
    public function showString(){
        return 'Static String';
    }

    public function showString1(){
        return 'Static String 1';
    }

    public function showString2(){
        return 'Static String 2';
    }

    public function showString3(){
        return 'Static String 3';
    }
}
