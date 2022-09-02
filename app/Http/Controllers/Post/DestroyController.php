<?php


namespace App\Http\Controllers\Post;


use App\Models\PostModel;
use App\Http\Controllers\Post\BaseController;



class DestroyController extends BaseController
{
    public function __invoke(PostModel $post)
    {
        $post->delete();
        return redirect()->route('index.indexPost');
    }
}


