<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){

      /* $pdo = DB::connection()->getPdo();
        dd($pdo);*/
        /*$users = DB::table('user')->where('user_id',1)->get();
        dd($users);*/
        /*$users = User::where('user_id',2)->get();
        dd($users);*/
        $users = User::find(2);
        $users->user_name = 'wangwu';
        $users->update();
        dd($users);

        return view('welcome');
    }
}
