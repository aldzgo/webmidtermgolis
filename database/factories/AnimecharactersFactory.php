<?php

namespace Database\Factories;

use App\Models\Animecharacters;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimecharactersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Animecharacters::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'img' => $this->faker->word,
        'name' => $this->faker->word,
        'FromAnime' => $this->faker->word,
        'Description' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
