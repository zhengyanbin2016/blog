<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
class ArticleController extends Controller
{
    public function index(){
        $data = array(
            'id' => '22',
            'name' => 'yanbin',
            'str' => "<script>alert('111');</script>",
            'article' => array(
            'new1' => 1,
            'new2' => 2,
            'new3' => 3,
            'new4' => 4,
            'new5' => 5,
        )
        );
//        return view('admin/index',compact('data'));
        return view('admin/index',$data);
    }
}
