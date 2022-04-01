<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Http\Resources\Json\JsonResource;

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
        'description',
        'snippet',
        'price',
        'sale_price',
        'is_featured',
        'cover',
        'banner',
        'epub',
        'create_at',
        'updated_at',
        'user_id'
    ];

    public static function where(string $string, string $string1)
    {
    }

    public static function find($slug, string $string)
    {
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['name', 'id'],
                'onUpdate'=>true
            ]
        ];
    }

/*    public function setSlugAttribute($name){
        $this->attributes['slug'] = $this->uniqueSlug($name);
    }

    private function uniqueSlug($name){
        $slug = Str::slug($name, '-');
        $count = Product::where('slug', 'LIKE', "{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;
    }*/

    protected $attributes = [
        'is_featured' => 0
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }














}
