<?php


namespace App\Http\Controllers\Post;


use App\Models\Tag;
use App\Models\Category;
use App\Models\PostModel;
use App\Http\Controllers\Post\BaseController;



class EditController extends BaseController
{
    public function __invoke(PostModel $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }
}


