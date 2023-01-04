<?php


namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;





class AdminHomeController extends Controller
{
    public function __invoke()
    {
       return view('admin.post.homeAdmin');
    }
}
