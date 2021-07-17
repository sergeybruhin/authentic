<?php

namespace Database\Factories;

use App\Models\WordCollection;
use Illuminate\Database\Eloquent\Factories\Factory;

class WordCollectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WordCollection::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => 'https://picsum.photos/id/' . $this->faker->numberBetween(1, 1000) . '/640/480',
        ];
    }
}
