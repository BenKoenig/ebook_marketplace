<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function where(string $string, string $string1, $username)
    {
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }


/*    public function findProducts(i) {
        $user = User::find(i);

        foreach ($user->products as $product) {

            return $product;

        }
    }*/

    public function orders()
    {
        return $this->hasMany(Order::class);
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    protected function firstname(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
        );
    }



}
