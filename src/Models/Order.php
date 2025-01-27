<?php

namespace cronv\LaravelTaskExample\Models;

use cronv\LaravelTaskExample\Database\Factories\OrderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

/**
 * Class Order
 *
 * Represents an order in the application.
 *
 * This model is responsible for managing the data related to an order,
 * including its association with a manager.
 *
 * @package cronv\TaskExample\Models
 */
class Order extends Model
{
    use HasFactory;

    /** @var bool Indicates if the model should be timestamped */
    public $timestamps = false;

    /**
     * Get the manager associated with the order.
     *
     * This method defines a one-to-one relationship between the Order
     * and Manager models, indicating that each order is associated with a single manager.
     *
     * @return BelongsTo Returns the manager associated with the order.
     */
    public function manager(): BelongsTo
    {
        return $this->belongsTo(Manager::class, 'manager_id');
    }

    /**
     * Create a new factory instance for the Order model.
     *
     * @return OrderFactory Returns a new instance of the OrderFactory.
     */
    protected static function newFactory(): OrderFactory
    {
        return OrderFactory::new();
    }

    /**
     * Retrieve a collection of orders with their associated managers.
     *
     * This method loads orders along with their managers, limiting the results
     * to a specified number. The manager's full name is constructed from their
     * first and last names. The collection of orders returned includes the
     * manager's full name as an attribute.
     *
     * @param int|null $limit The maximum number of orders to retrieve.
     * @return Collection<Order> Returns a collection of orders with their associated managers,
     *                           where each order includes the manager's full name.
     */
    public static function getOrdersWithManagers(?int $limit = null): Collection
    {
        $orders = self::with(['manager' => function ($query) {
            $query->select([
                'id',
                DB::raw("CONCAT(firstname, ' ', lastname) AS full_name")
            ]);
        }]);

        if ($limit) {
            $orders->take($limit);
        }

        return $orders->get();
    }
}
