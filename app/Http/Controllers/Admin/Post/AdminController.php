<?php


namespace App\Http\Controllers\Admin\Post;

use App\Models\PostModel;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;



class AdminController extends Controller
{
    public function __invoke()
    {
        $posts = PostModel::paginate(10);
        return view('admin.post.index', compact('posts'));

        
    }
}


