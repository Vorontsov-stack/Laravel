<?php


namespace App\Http\Controllers\Post;


use App\Models\PostModel;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Controllers\Post\BaseController;



class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, PostModel $post)
    {
        $data = $request -> validated();

        $this -> service -> update($post, $data);

        return redirect()->route('show', $post->id);
    }
}


