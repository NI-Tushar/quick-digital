<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuickShopOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_code',
        'product_name',
        'product_image',
        'color',
        'size',
        'qty',
        'price',
        'discount',
        'total',
        'delivery_status',
        'payment_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
