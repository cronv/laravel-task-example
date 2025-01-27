<?php

namespace cronv\LaravelTaskExample\Database\Factories;

use cronv\LaravelTaskExample\Models\Manager;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class ManagerFactory
 *
 * Factory for creating instances of the Manager model.
 *
 * @package cronv\LaravelTaskExample\Database\Factories
 * @extends Factory<Manager>
 */
class ManagerFactory extends Factory
{
    /** @var string The name of the model that this factory is for */
    protected $model = Manager::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('ru_RU');
        return [
            'firstname' => $faker->lastName(),
            'lastname' => $faker->firstName(),
        ];
    }
}
