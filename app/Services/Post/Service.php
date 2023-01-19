<?php

namespace App\Services\Post;

use App\Models\PostModel;


class Service 
{

    public function store($data)
    {
        $tags = $data['tags'];
        unset ($data['tags']);
        
        $post = PostModel::create($data);

        $post->tags()->attach($tags);

        return $post;

       /* ТАК ДЕЛАТЬ НЕНАДО, НЕПРАВИЛЬНО
        foreach($tags as $tag){
            PostTag::firstOrCreate([
                'tag_id' => $tag,
                'post_id' => $post->id,
            
            ]);
        }*/
    }

    public function update($post, $data)
    {
        $tags = $data['tags'];
        unset ($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);
        return $post->fresh();
    }


}