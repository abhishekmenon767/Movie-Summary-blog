<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'category_id'=> Category::factory(),
            'title'=>$this->faker->sentence(),
            'slug'=>$this->faker->slug(),
            'excerpt'=>$this->faker->sentence(),
            'body'=>$this->faker->paragraph()
        ];
    }
}
