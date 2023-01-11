<?php


namespace App\Http\Controllers\Post;


use App\Models\PostModel;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Controllers\Post\BaseController;



class IndexController extends BaseController
{
    
    
    public function __invoke(FilterRequest $request)
    {
        //AdminPolicy
        //$this->authorize('view', auth()->user());

        $data = $request->validated();
        
        $filter = app()->make(PostFilter::class,['queryParams' => array_filter($data)]);
        $posts = PostModel::filter($filter)->paginate(10);

        return view('post.index', compact('posts'));
        
    }



    /*
    public function __invoke()
    {
        //AdminPolicy
        //$this->authorize('view', auth()->user());

        $posts = PostModel::paginate(10);
        return view('post.index', compact('posts'));
    }
    */
    

    

    }


