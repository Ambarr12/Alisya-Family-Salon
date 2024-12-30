<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'title_one',
        'title_two'
    ];

    public function pricesOne(): HasMany
    {
        return $this->hasMany(Prices::class)->where('price_type', 'one');
    }

    public function pricesTwo(): HasMany
    {
        return $this->hasMany(Prices::class)->where('price_type', 'two');
    }
}
