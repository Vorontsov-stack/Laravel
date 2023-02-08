<?php


namespace App\Http\Controllers\Admin\Post;


use App\Models\PostModel;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\post\postresource;
use App\Http\Controllers\Post\BaseController;



class AdminUpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, PostModel $post)
    {
        $data = $request -> validated();

        $post = $this -> service -> update($post, $data);

        //return new postresource($post);

        return redirect()->route('show', $post->id);
    }
}