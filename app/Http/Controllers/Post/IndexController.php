<?php


namespace App\Http\Controllers\Post;


use App\Models\PostModel;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Controllers\Post\BaseController;
use App\Http\Resources\post\postresource;

class IndexController extends BaseController
{
    
    
    public function __invoke(FilterRequest $request)
    {
        //AdminPolicy
        //$this->authorize('view', auth()->user());

        $data = $request->validated();

        $page = $data['page'] ?? 1;
        $perPage = $data['per_page'] ?? 10;
        
        $filter = app()->make(PostFilter::class,['queryParams' => array_filter($data)]);
        $posts = PostModel::filter($filter)->paginate($perPage, ['*'], 'page', $page);

        //return postresource::collection($posts);

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


