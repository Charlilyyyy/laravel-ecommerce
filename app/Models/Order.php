<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'seller_id',
        'total_amount',
        'total_discount',
        'status',
        'order_tine',
        'posted_time',
        'arrived_time',
        'order_no',
    ];
}
