<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prices extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'price_type',
        'name',
        'price'
    ];

    public function getProduct(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
