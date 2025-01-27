<?php

namespace Tests\Feature;

use cronv\LaravelTaskExample\Models\Manager;
use cronv\LaravelTaskExample\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrdersTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function itDisplayOrderWithManagers(): void
    {
        $orderWidth = 10;
        $managerWidth = 30;

        $managers = Manager::factory()
        ->count(50)
        ->create()
        ->each(function ($manager) {
            Order::factory()
                ->count(1)
                ->create(['manager_id' => $manager->id]);
        });

        $orders = Order::getOrdersWithManagers(50)->collect();

        printf("%-{$orderWidth}s %-{$managerWidth}s\n", "Заказ (№)", "Менеджер");
        foreach ($orders as $order) {
            printf("%-{$orderWidth}d %-{$managerWidth}s\n", $order->id, $order->manager->full_name ?? 'Не указан');
        }

        $this->assertEquals(50, count($orders));
    }
}
