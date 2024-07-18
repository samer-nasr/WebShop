<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path' => $this->faker->unique()->randomElement([
                'media/image2.webp',
                'media/image3.webp',
                'media/image4.webp',
                'media/image1.webp',
                'media/image5.webp',
                'media/image6.webp',
                'media/image7.webp',
                'media/image8.webp',
                'media/image9.webp',
                'media/image10.webp',
                'media/image11.webp',
                'media/image12.webp'
            ]),
        ];
    }
}
