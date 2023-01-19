<?php


namespace App\Http\Controllers\Post;


use App\Models\PostModel;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\post\postresource;
use App\Http\Controllers\Post\BaseController;



class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        
        $data = $request -> validated();

        $post = $this -> service -> store($data);

        return new postresource($post);

        

        //return redirect()->route('index.indexPost');
    }
}


