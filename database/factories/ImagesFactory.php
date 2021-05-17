<?php

namespace Database\Factories;

use App\Models\Images;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Illminate\Support\Str;

class ImagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Images::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $post = Post::factory()->create();

        return [
            'imageble_id' => $post->id,
            'imageble_type' => 'App\Models\Post',
            'original' => $this->faker->imageUrl(1024, 800),
            'large' => $this->faker->imageUrl(1024, 800),
            'medium' => $this->faker->imageUrl(600, 375),
            'small' => $this->faker->imageUrl(100, 100),
        ];
    }
}
