<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'orders';
    protected $primaryKey = 'order_id';

    protected $fillable = [
        'account_id',
        'item_id',
        'price',
        'status'
    ];

    /**
     * Get the account that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'account_id', 'account_id');
    }

    /**
     * Get the item associated with the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function item(): HasOne
    {
        return $this->hasOne(Item::class, 'item_id', 'item_id');
    }
}
