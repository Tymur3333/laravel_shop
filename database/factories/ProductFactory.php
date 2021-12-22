<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this -> faker -> word,
            'price' => rand(200.00, 1500.00),
            'in_stock' => 1,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aliquid, asperiores aspernatur blanditiis earum enim est exercitationem labore odio odit omnis optio quae quaerat quis totam unde ut. Pariatur, quasi.',
        ];
    }
}
