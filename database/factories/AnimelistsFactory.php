<?php

namespace Database\Factories;

use App\Models\Animelists;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimelistsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Animelists::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'AnimeTitle' => $this->faker->word,
        'Genre' => $this->faker->word,
        'Episodes' => $this->faker->word,
        'Released' => $this->faker->word,
        'Description' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
