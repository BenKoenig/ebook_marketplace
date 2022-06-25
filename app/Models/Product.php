<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Product extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'snippet',
        'price',
        'is_featured',
        'is_public',
        'cover',
        'epub',
        'create_at',
        'updated_at',
        'user_id'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['name', 'id'],
                'onUpdate'=>true
            ]
        ];
    }

    protected $attributes = [
        'is_featured' => 0,
        'is_public' => 0
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    static function detail($id)
    {
        return self::find($id)->toArray();
    }
}
