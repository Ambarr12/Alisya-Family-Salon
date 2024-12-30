<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Welcome extends Controller
{
    public function welcome()
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

        $portofolio = [
            [
                'image' => '/storage/images/peekabooelectricxbabypink.jpg',
                'description' => "Peek a boo blue electric x baby pink"
            ],
            [
                'image' => '/storage/images/Brown copper balayage.jpg',
                'description' => "Brown copper balayage"
            ],
            [
                'image' => '/storage/images/Colouring medium red.jpg',
                'description' => "Colouring medium red"
            ],
            [
                'image' => '/storage/images/Red violet darkblonde.jpg',
                'description' => "Red violet darkblonde"
            ],
            [
                'image' => '/storage/images/Hightlight blue electric and ash blue.jpg',
                'description' => "Hightlight blue electric and ash blue"
            ],
        ];

        $testimonials = [
            [
                'message' => 'Puass bgt aku nyalon disini, Rambut singaku di sulap dg smoothing jepang. Asli keren, Murah, puas bgt sm pelayanan nya, ownernya Luar biasa Ramah.',
                'user' => [
                    'name' => 'Fitriana Rahman',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Bagus, tempatnya nyaman walaupun gak terlalu besar. Owner ramah banget dan mau turun tangan langsung. Recommended.',
                'user' => [
                    'name' => 'Ari Nurarofah',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'bagussssss potongggan rambutnyaaa.',
                'user' => [
                    'name' => 'Tia',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Pokoknya recommended, kakaknya ramah-ramah, best service, hair cutnya sesuai sama yang diminta. Sukses selalu kak.',
                'user' => [
                    'name' => 'Eca Adisti Muhva',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Setelah pindah2 salon utk mewarnai rambut akhirnya nemu salon yg hasilnya sesuai dan harga bersahabat dikantong..terimakasih alisya salon jd langganan dechh.',
                'user' => [
                    'name' => 'Sapto Hendra',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Selalu puas dan amaze colouring disini. No pricy tapi hasil gak kalah sama salon2 di mall. Tengkyuu mb bella luvv.',
                'user' => [
                    'name' => 'Maria Etik',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Asli sih... selalu sukak sama hasilnya tiap kesana... ownernya ramah... pegawai nya juga seru.. pokoknya nyaman banget...',
                'user' => [
                    'name' => 'Abimanyu Putra Wijaya',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Pelayanan baik cepat dan ramah, sesuai request model rambut yg kita mau. Lancar dan sukses teruss alisya family salon.',
                'user' => [
                    'name' => 'Pradika Shopee',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Hasilnya sangat memuaskan sekalii, tempatnya nyaman, dan pelayanannya ramah.',
                'user' => [
                    'name' => 'Cindy Aulia Wardani',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Tempat kecil tapi nyaman mbaknya juga diajak sharing enak pelayanan bagus warna colouring bagus.',
                'user' => [
                    'name' => 'Annisa Waskitha',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ]
        ];

        $location = "Alisya Family Salon";

        $query = str_replace(" ", "+", $location);

        return view('welcome', [
            'cards' => $cards,
            'portofolio' => $portofolio,
            'testimonials' => $testimonials,
            'query' => $query
        ]);
    }

    private function formatPrice($price)
    {
        // Convert price from database (assuming it's stored in thousands)
        // For example, 130000 becomes "130k"
        return (floor($price / 1000)) . 'k';
    }
}
