<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;
use App\Http\Requests\Requests\Admin\AdmStoreRequest;
use App\Http\Resources\Resources\admin\AdminResource;


class AdminStoreController extends BaseController

{
    public function __invoke(AdmStoreRequest $request)
    {
        
        $data = $request -> validated();

        $post = $this -> service -> store($data);

        return new AdminResource($post);

        

        //return redirect()->route('index.indexPost');
    }
}