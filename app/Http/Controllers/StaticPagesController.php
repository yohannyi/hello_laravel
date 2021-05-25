<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //添加一个静态页面
    public function home()
    {
        return view('static_pages/home');
    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function about()
    {
        return view('static_pages/about');
    }


}
