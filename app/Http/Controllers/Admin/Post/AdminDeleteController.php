<?php


namespace App\Http\Controllers\Admin\Post;


use App\Models\PostModel;
use App\Http\Controllers\Post\BaseController;



class AdminDeleteController extends BaseController
{
    public function __invoke(PostModel $post)
    {
        $post->delete();
        return redirect()->route('baseAdmin');
    }
}