<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;

class AdminHomeController extends BaseController
{
    public function __invoke()
    {
        return view('admin.post.homeAdmin');
    }
}
