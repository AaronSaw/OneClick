<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';

    protected $fillable = ['ctitle'];

    public function product()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function order()
    {
        return $this->hasManyThrough(Order::class, product::class);
    }
}
