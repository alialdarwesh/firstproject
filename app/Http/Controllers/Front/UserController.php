<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function showAdminName(): string
    {
        return 'Ali Al Dariush';
    }

    public function showIndex(){
//        $data=[];
//        $data['id']=27;
//        $data['name']='Ali Al Darwesh';

//        $another=[];
//        $another['age']=40;
//        $another['salary']=5000;

        $obj = new \stdClass();

        $obj -> name = 'Ali';
        $obj -> gender = 'male';
        $obj -> age = 27;
        return view('weltest',compact('obj'));
    }

    public function showLanding(){
        return view('landing');
    }
}
