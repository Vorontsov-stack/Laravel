<?php


namespace App\Http\Controllers\Admin\Post;


use App\Models\PostModel;
use App\Http\Controllers\Post\BaseController;



class AdminShowController extends BaseController
{
    public function __invoke(PostModel $post)
    {
        return view('admin.post.show', compact('post'));
    }
}
