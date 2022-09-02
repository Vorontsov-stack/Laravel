<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }

}
