<?php


namespace App\Http\Controllers\Post;


use App\Models\PostModel;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Controllers\Post\BaseController;



class IndexController extends BaseController
{
    
    
    public function __invoke()
    {

        $posts = PostModel::paginate(10);
        return view('post.index', compact('posts'));
    }
    
    
    /*FILTERRRRRRRRRRRRRRRRRRRRRRRRR*/
    /*
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        //dd($request);
        $filter = app()->make(PostFilter::class,['queryParams' => array_filter($data)]);
        //dd($filter);
        $posts = PostModel::filter($filter)->paginate(5);
        //return view('post.index', compact('posts'));
        dd($posts);
    }
*/
        
        /*
        public function __invoke()
        {

                $posts = PostModel::paginate(10);
        return view('post.index', compact('posts'));
        */
    

    }


