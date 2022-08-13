<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            //
            "title"=>$this->faker->title(),
            "body"=>$this->faker->paragraph(8),
            "slug"=>$this->faker->slug(3),
            "image"=>$this->faker->imageUrl()
        ];
    }
}
