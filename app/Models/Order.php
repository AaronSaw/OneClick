<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_id'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
