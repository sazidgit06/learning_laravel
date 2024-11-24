<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //faker php
            'title' => $fake->sentence,
            'author' => $fake->name,
            'isbn '=> $fake->isbn13(),
            'stock'=>$fake->numberBetween(1,100),
            'price'=>$fake->randomFloat(1,100),
        ];
    }
}
