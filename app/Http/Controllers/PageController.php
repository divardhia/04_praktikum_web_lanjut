<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Partner;
use App\Models\Product;

use Illuminate\Http\Request;



class PageController extends Controller
{
    public function home() {
        return view('home', ['title' => '- Home Page', 'status' => 'active']);
    }

    public function product() {
        return view('product', ['products' =>Product::product(), 'title' => '- Products Page', 'status' => 'active']);
    }

    public function about() {
        return view('about', ['partners' =>Partner::partner(), 'members' => Member::index(), 'title' => '- About Page', 'status' => 'active']);
    }

    public function contact() {
        return view('contact', ['partners' =>Partner::partner(), 'title' => '- Contact Page', 'status' => 'active']);
    }
}
