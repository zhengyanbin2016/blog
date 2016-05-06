<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
//        echo "it is Admin's index11";
        echo route('index');
    }
}
