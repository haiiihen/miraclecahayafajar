<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPageController extends Controller
{
    public function home() {
        return view('webpage/home');
    }

    public function about() {
        return view('webpage/about');
    }

    public function products() {
        return view ('webpage/products');
    }

    public function articles() {
        return view ('webpage/article/articles');
    }

    public function article($slug) {
        return view ('webpage/article/article', ['slug' => $slug]);
    }

    public function contact() {
        return view ('webpage/contact');
    }
}
