<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(4),
            'post_id' => $this->faker->numberBetween(2, 10),
            'kategori_jasa' => $this->faker->randomElement(['Layanan', 'Tukang', 'Reparasi', 'Bimbel', 'Katering']),
            // 'kategori_jasa' => $ 
            'body' => $this->faker->sentence(10),
            'price' => $this->faker->numberBetween(10000, 250000),
            // 'image' => $this->faker->imageUrl(400, 300),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
