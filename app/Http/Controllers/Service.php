<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Service extends Controller
{
    public function service()
    {

        // Fetch products with their related prices
        $products = Product::with(['pricesOne', 'pricesTwo'])->get();

        // Transform the data to match the desired structure
        $cards = $products->map(function ($product) {
            return [
                'image' => $product->image,
                'titleOne' => $product->title_one,
                'titleTwo' => $product->title_two,
                'pricesOne' => $product->pricesOne->map(function ($price) {
                    return [
                        'name' => $price->name,
                        'price' => $this->formatPrice($price->price)
                    ];
                })->toArray(),
                'pricesTwo' => $product->pricesTwo->map(function ($price) {
                    return [
                        'name' => $price->name,
                        'price' => $this->formatPrice($price->price)
                    ];
                })->toArray(),
            ];
        })->toArray();

        return view('welcome', ['cards' => $cards,]);
    }

    private function formatPrice($price)
    {
        // Convert price from database (assuming it's stored in thousands)
        // For example, 130000 becomes "130k"
        return (floor($price / 1000)) . 'k';
    }
}
