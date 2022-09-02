<?php


namespace App\Http\Controllers;


use App\Models\Tag;
use App\Models\Category;
use App\Models\PostModel;
use Illuminate\Http\Request;



class PostController extends Controller
{
    /*
    public function indexPost(){
        $posts = PostModel::all();
        return view('post.index', compact('posts'));
        
        
    }
    */
    public function all(){
        $posts = PostModel::all();
        return view('allread', compact('posts'));
    }

    public function test(){
        $post = PostModel::where('is_published', 1)->first();
        dump($post->title);

    }

    public function create()
    {
        $postArr = [
            [
                'title' => 'first a vscode',
                'content' => 'first a vscode content',
                'image' => 'first a vscode imagelabla.jpg',
                'likes' => 10,
                'is_published' => 1,
            ],
            [
                'title' => 'two_title',
                'content' => 'two_content',
                'image' => 'two_imagelabla.jpg',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'three_title',
                'content' => 'three_content',
                'image' => 'three_imagelabla.jpg',
                'likes' => 30,
                'is_published' => 1,
            ],
            [
                'title' => 'four_title',
                'content' => 'four_content',
                'image' => 'four_imagelabla.jpg',
                'likes' => 40,
                'is_published' => 1,
            ],
            [
                'title' => 'five_title',
                'content' => 'five_content',
                'image' => 'five_imagelabla.jpg',
                'likes' => 50,
                'is_published' => 1,
            ]
        ];

        foreach($postArr as $item){
            PostModel::create($item);
        }
        dd('created');
  
    }

    public function updateTest()
    {
        $post = PostModel::find(5);
        $post->update([
            'title' => 'AAAAAAA',
            'content' => 'BBBBB',
            'image' => 'update',
        ]);
        dd('update');
    }

    public function delete(){
        $post = PostModel::find(2);
        $post->delete();
        dump('deleted');
    }

/*
* мягкое удаление, удалил объект с базы, с возможностью восстановить
* softDeletes - зарезервированное атрибут, при создании миграции
* withTrashed - мусорка где можно найти удаленный объект
* [как сделать что бы в restore падал id удаленного объекта,
* что бы в ручную не писать ?]
*/
    public function restore(){
        $post = PostModel::withTrashed()->find(7);
        $post->restore();
        dd('restore');
    }

/* 
* firstOrCreate - комбинированный метод
* если в базе уже существует объект с таким же именем, контент, титулом...
* то он не создаст новый, своего рода проверка.
*/
    public function firstOrCreate()
    {
        $anotherPost = 
        [
                'title' => 'firstOrCreate_title',
                'content' => 'firstOrCreate_content',
                'image' => 'firstOrCreate.jpg',
                'likes' => 30,
                'is_published' => 1,
        ];

        $post = PostModel::firstOrCreate(
            ['title' => 'firstOrCreate_title'],
        [
                'title' => 'firstOrCreate_title',
                'content' => 'firstOrCreate_content',
                'image' => 'firstOrCreate.jpg',
                'likes' => 30,
                'is_published' => 1,
        ]);
        dump($post->content);
        dd('finished');
    }


/* 
updateOrCreate - комбинированный метод
если в базе уже существует объект с таким же именем, контент, титулом...
то он его изменит(update), если не существует 
то он создаст новый объект(create).
*/
    public function updateOrCreate()
    {
        $anotherPost = 
        [
                'title' => 'updateOrCreate_title',
                'content' => 'updateOrCreate_content',
                'image' => 'updateOrCreate.jpg',
                'likes' => 40,
                'is_published' => 1,
        ];
        $post = PostModel::updateOrCreate(
            ['title' => 'updateOrCreate_title'],
        [
            'title' => 'updateOrCreate_title',
            'content' => 'updateOrCreate_content',
            'image' => 'updateOrCreate.jpg',
            'likes' => 40,
            'is_published' => 1,
        ]);
        dump($post->image);
        dd('finished');
}

public function connections(){

    /* 
    * Связи один ко многим, многие ко многим.
    */
    $category = Category::find(2);
    $post = PostModel::find(2);
    $tag = Tag::find(4);
    
    dump($tag->posts);
    //dump($category->posts);
}


///////// test layouts view ////////////////
////////////CRUD///////////////


public function indexPost(){

    $posts = PostModel::all();
    return view('post.index', compact('posts'));
        
}

public function indexHome(){
    return view('home');
}

    public function indexCreate()
    {
        $categories = Category::all();
        $tags = Tag::all();
        

        return view('post.create', compact('categories', 'tags'));
    }

    public function Store(){
        $data = request()->validate([
            'title'=> 'required|string',
            'post_content'=>'required|string',
            'image'=>'required|string',
            'category_id'=> '',
            'tags'=> '',
        ]);
        $tags = $data['tags'];
        unset ($data['tags']);
        
        
        $post = PostModel::create($data);

        $post->tags()->attach($tags);

        /* ТАК ДЕЛАТЬ НЕНАДО, НЕПРАВИЛЬНО
        foreach($tags as $tag){
            PostTag::firstOrCreate([
                'tag_id' => $tag,
                'post_id' => $post->id,
            
            ]);
        }*/
        return redirect()->route('index.indexPost');
            
    }

    public function show(PostModel $post){
        
        return view('post.show', compact('post'));
    }

    public function editIndex(PostModel $post){
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(PostModel $post){
        $data = request()->validate([
            'title'=> 'string',
            'post_content'=>'string',
            'image'=>'string',
            'category_id'=> '',
            'tags'=> '',
        ]);
        $tags = $data['tags'];
        unset ($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('show', $post->id);
    }

    public function destroy(PostModel $post){
        $post->delete();
        return redirect()->route('index.indexPost');
    }

    public function indexAbout(){
        return view('about');
    }
/////////////////////////////////////////




}