<?php


namespace App\Http\Controllers\Post;

use App\Http\Controllers\Post\BaseController;





class HomeController extends BaseController
{
    public function __invoke()
    {
        return view('post.home');
    }
}


