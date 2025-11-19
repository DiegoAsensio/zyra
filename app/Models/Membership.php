<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{

    protected $fillable = ['name', 'tier_id', 'price', 'daypass', 'credits'];

    public function price():Attribute{
        return Attribute::make(
           get: fn($value) => $value / 100,
           set: fn($value) => $value * 100
        );
    }

    public function tier(){
        return $this->belongsTo(Tier::class, 'tier_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
