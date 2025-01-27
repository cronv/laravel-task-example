<?php

namespace cronv\LaravelTaskExample\Models;

use cronv\LaravelTaskExample\Database\Factories\ManagerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Manager
 *
 * Represents a manager in the application.
 *
 * This model is responsible for managing the data related to a manager,
 * including their first name, last name, and associated orders.
 *
 * @package cronv\LaravelTaskExample\Models
 */
class Manager extends Model
{
    use HasFactory;

    /** @var bool Indicates if the model should be timestamped */
    public $timestamps = false;

    /** @var string[] The attributes that are mass assignable */
    public $fillable = [
        'firstname',
        'lastname',
    ];

    /**
     * Get the orders associated with the manager.
     *
     * This method defines a one-to-many relationship between the Manager
     * and Order models, indicating that a manager can have multiple orders.
     *
     * @return HasMany Returns the orders associated with the manager.
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    /**
     * Create a new factory instance for the Manager model.
     *
     * @return ManagerFactory Returns a new instance of the ManagerFactory.
     */
    protected static function newFactory(): ManagerFactory
    {
        return ManagerFactory::new();
    }
}
