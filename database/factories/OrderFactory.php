<?php

namespace cronv\LaravelTaskExample\Database\Factories;

use cronv\LaravelTaskExample\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class OrderFactory
 *
 * Factory for creating instances of the Order model.
 *
 * @package cronv\LaravelTaskExample\Database\Factories
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    /** @var string The name of the model that this factory is for */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [];
    }
}
