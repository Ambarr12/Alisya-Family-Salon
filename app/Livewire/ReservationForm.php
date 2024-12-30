<?php

namespace App\Livewire;

use App\Models\Service;
use App\Models\Product;
use App\Models\Prices;
use Livewire\Component;
use Filament\Facades\Filament;

class ReservationForm extends Component
{
    public $service_name;
    public $service_type;
    public $phone;
    public $date_booking;

    // Tambahan properti untuk select options
    public $products;
    public $prices = [];
    public $selectedProduct = '';
    public $selectedPrice = '';

    protected $rules = [
        'service_name' => 'required|string|max:255',
        'service_type' => 'required|string|max:255',
        'phone' => 'nullable|string|max:20',
        'date_booking' => 'required|date',
    ];

    public function mount()
    {
        // Load semua produk saat komponen dimuat
        $this->products = Product::all();
    }

    // Method untuk update prices ketika produk dipilih
    public function updatedSelectedProduct($value)
    {
        if (!empty($value)) {
            $this->prices = Prices::where('product_id', $value)->get();
            $this->selectedPrice = ''; // Reset selected price
            $this->service_name = Product::find($value)->name;
        }
    }

    // Method untuk update service_type ketika price dipilih
    public function updatedSelectedPrice($value)
    {
        if (!empty($value)) {
            $this->service_type = Prices::find($value)->name;
        }
    }

    public function submit()
    {
        if (!Filament::auth()->check()) {
            session()->flash('error', 'Please login first to make a reservation.');
            return redirect()->route('filament.auth.login');
        }

        $this->validate();

        Service::create([
            'service_name' => $this->service_name,
            'service_type' => $this->service_type,
            'phone' => $this->phone,
            'date_booking' => $this->date_booking,
            'user' => auth()->user()->email,
        ]);

        session()->flash('message', 'Reservation created successfully!');

        $this->reset(['service_name', 'service_type', 'phone', 'date_booking', 'selectedProduct', 'selectedPrice']);

        redirect()->to("/#services");
    }

    public function render()
    {
        return view('livewire.reservation-form');
    }
}
