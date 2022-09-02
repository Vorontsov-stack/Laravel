<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\PostModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostModel>
 */
class PostModelFactory extends Factory
{


    protected $model = PostModel::class; 
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return 
        [
            'title' => $this->faker->sentence(3),
            'post_content' => $this->faker->text,
            'image' => $this->faker->imageUrl(),
            'likes' => random_int(1, 100),
            'is_published' => 1,
            'category_id' => Category::get()->random()->id
        ];
    }
}
