<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home', ['title' => '- Home Page', 'status' => 'active']);
    }

    public function product() {
        return view('product', ['title' => '- Products Page', 'status' => 'active']);
    }

    public function about() {
        return view('about', ['title' => '- About Page', 'status' => 'active']);
    }

    public function contact() {
        return view('contact', ['title' => '- Contact Page', 'status' => 'active']);
    }
}
