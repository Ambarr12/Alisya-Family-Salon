<?php

use App\Http\Controllers\Service;
use App\Http\Controllers\Welcome;
use App\View\Components\Navbar;
use Filament\Facades\Filament;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Welcome::class, 'welcome'])->name('home');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/services', [Service::class, 'service'])->name('services');

// Route::get('/porthofolio', function () {
//     $portofolio = [
//         [
//             'image' => 'https://placehold.co/400x400',
//             'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
//         ],
//         [
//             'image' => 'https://placehold.co/400x400',
//             'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
//         ],
//         [
//             'image' => 'https://placehold.co/400x400',
//             'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
//         ],
//         [
//             'image' => 'https://placehold.co/400x400',
//             'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
//         ],
//         [
//             'image' => 'https://placehold.co/400x400',
//             'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
//         ],
//     ];
//     return view('portofolio', ['portofolio' => $portofolio]);
// })->name('portofolio');

Route::get('/testimonials', function () {
    $testimonials = [
        [
            'message' => 'Pelayanan yang luar biasa! Saya merasa sangat nyaman dan puas dengan potongan rambut saya. Staf salon sangat ramah dan profesional.',
            'user' => [
                'name' => 'Sarah Johnson',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Salon ini benar-benar membuat saya merasa istimewa. Tidak hanya rambut saya yang jadi lebih bagus, tapi suasana di sini juga sangat menyenangkan.',
            'user' => [
                'name' => 'Maria S.',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Sangat puas dengan perawatan kuku dan rambut saya. Hasilnya sempurna dan tahan lama! Tempatnya juga sangat bersih dan nyaman.',
            'user' => [
                'name' => 'Jessica Brown',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Ini adalah salon terbaik yang pernah saya coba! Saya selalu merasa lebih percaya diri setelah setiap kunjungan.',
            'user' => [
                'name' => 'Linda White',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Saya selalu merasa puas setelah melakukan perawatan wajah di salon ini. Tenaga ahli yang sangat berpengalaman membuat saya merasa aman.',
            'user' => [
                'name' => 'Anne Lee',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Layanan yang sangat memuaskan! Saya datang untuk treatment rambut dan hasilnya luar biasa. Wajib coba!',
            'user' => [
                'name' => 'Sophia Kim',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Salon ini benar-benar tahu bagaimana cara merawat rambut. Setelah perawatan di sini, rambut saya jadi lebih sehat dan berkilau!',
            'user' => [
                'name' => 'Emily Carter',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Saya suka dengan pelayanan di salon ini. Mereka selalu memberikan tips yang berguna tentang perawatan rambut dan kulit.',
            'user' => [
                'name' => 'Olivia Turner',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Hasil potongan rambut saya luar biasa! Salon ini sangat mengerti apa yang saya inginkan. Saya pasti akan kembali lagi.',
            'user' => [
                'name' => 'Amelia Harris',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Saya melakukan perawatan wajah di sini, dan hasilnya sangat memuaskan. Stafnya sangat ramah dan ahli dalam bidangnya.',
            'user' => [
                'name' => 'Isabella Martinez',
                'profile' => 'https://placehold.co/250x250'
            ]
        ]
    ];

    return view('testimonials', ['testimonials' => $testimonials]);
})->name('testimonials');

// Route::get('/contact', function () {
//     return view('contact', ['query' => 'alisya family salon']);
// })->name('contact');

Route::get('/reservasi', function () {
    return view('reservasi');
})->name('reservasi');


// Fungsi Klik Booking
Route::get('/check-auth', function () {
    if (Filament::auth()->check()) {
        return response()->json(['auth' => true, 'user' => auth()->user()]);
    } else {
        return response()->json(['auth' => false, 'user' => null]);
    }
})->name('check-auth');

Route::post('/booking', function () {
    if (Filament::auth()->check()) {
        return response()->json(['status' => "success", 'message' => 'Booking berhasil dilakukan']);
    } else {
        return response()->json(['status' => "error", 'message' => 'Anda Belum Login']);
    }
})->name('booking');

Route::get('/logout', [Navbar::class, 'logout'])->name('logout');
