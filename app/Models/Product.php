<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Product extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'snippet',
        'price',
        'sale_price',
        'is_featured',
        'cover',
        'epub',
        'create_at',
        'updated_at'
    ];

    protected $attributes = [
        'is_featured' => 0
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFeatured() {
        return $query->where('is_featured', true);
    }






}
