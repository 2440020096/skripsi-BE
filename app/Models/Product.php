<?php

namespace App\Models;

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
        'subname',
        'origin',
        'type',
        'price',
        'description',
        'image'
    ];


    protected $primaryKey = 'id';
    public $incrementing = true;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    public function productAttribute()
    {
        return $this->hasOne(ProductAttribute::class, 'product_id');
    }
    public function cart()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }
}
