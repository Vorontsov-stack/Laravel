<?php


namespace App\Http\Controllers\Admin\Post;


use App\Models\Tag;
use App\Models\Category;
use App\Models\PostModel;
use App\Http\Controllers\Post\BaseController;



class AdminEditController extends BaseController
{
    public function __invoke(PostModel $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }
}
