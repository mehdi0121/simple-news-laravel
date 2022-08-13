<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostCategoryFactory extends Factory
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
            "title"=>$this->faker->word(),
            "slug"=>$this->faker->slug(3),
            "description"=>$this->faker->paragraph(2),
            "image"=>$this->faker->imageUrl()
        ];
    }
}
