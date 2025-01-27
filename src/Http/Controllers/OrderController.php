<?php

namespace cronv\LaravelTaskExample\Http\Controllers;

use cronv\LaravelTaskExample\Models\Order;
use Sajya\Server\Procedure;

class OrderController extends Procedure
{
    /** @var string The name of the procedure that will be displayed and taken into account in the search. */
    public static string $name = 'order';

    /**
     * Retrieve a list of orders, optionally limited to a specified number.
     *
     * This method fetches orders from the database, applying any limit
     * specified by the caller. If the limit is not provided, all orders
     * will be retrieved.
     *
     * @param int|null $limit The maximum number of orders to retrieve.
     *                        If null, retrieves all orders.
     *
     * @return array An array of orders, where each order is represented
     *               as an associative array.
     */
    public function get(?int $limit = null): array
    {
        $orders = Order::getOrdersWithManagers($limit);
        return $orders->toArray();
    }
}
