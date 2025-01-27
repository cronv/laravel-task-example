<?php

namespace cronv\LaravelTaskExample\Database\Seeders;

use cronv\LaravelTaskExample\Models\Manager;
use cronv\LaravelTaskExample\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $orders = [];
        $managers = Manager::all();

        foreach ($managers as $manager) {
            $orders[] = ['manager_id' => $manager->id];
        }

        Order::insert($orders);
    }
}
