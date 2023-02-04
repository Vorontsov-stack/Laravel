<?php


namespace App\Http\Controllers\Admin\Post;

use App\Models\PostModel;
use App\Http\Filters\PostFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Controllers\Post\BaseController;



class AdminController extends BaseController
{
    
    
    public function __invoke()
    {
        return view('admin.post.index');
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

    

    /*


class AdminController extends Controller
{
    public function __invoke()
    {
        $posts = PostModel::paginate(10);
        return view('admin.post.index', compact('posts'));

        
    }
}
*/

