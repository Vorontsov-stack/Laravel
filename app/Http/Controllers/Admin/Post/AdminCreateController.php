<?php


namespace App\Http\Controllers\Post;


use App\Models\Tag;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;



class AdminCreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        

        return view('admin.post.createAdmin', compact('categories', 'tags'));
    }
}