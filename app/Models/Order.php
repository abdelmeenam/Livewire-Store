<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'grand_total',
        'payment_method',
        'payment_status',
        'status',
        'currency',
        'shipping_amount',
        'shipping_method',
        'notes',

    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // order has addresses
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_item', 'order_id', 'product_id');
    }
}