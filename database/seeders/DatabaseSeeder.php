<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
use App\Models\Category;
use App\Models\PostModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

     
        Category::factory(10)->create();
        $tags = Tag::factory(5)->create();
        $posts = PostModel::factory(20)->create();

        foreach ($posts as $post){
            $tagsids = $tags->random(5)->pluck('id');
            $post->tags()->attach($tagsids);
        }
        
            
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
