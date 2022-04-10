<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use \Laravel\Sanctum\HasApiTokens, \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'create_at',
        'updated_at',
        'user_id',
        'product_id'
    ];


    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }



}
