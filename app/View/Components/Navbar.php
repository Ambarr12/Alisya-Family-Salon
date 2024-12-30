<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Http\Request;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public $brand;
    public $links;
    public function __construct($brand = 'MyApp', $links = [])
    {
        $this->brand = $brand;
        $this->links = $links;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }

    public function logout(Request $request)
    {
        // Logout dari Filament dan regular auth
        Filament::auth()->logout();
        Auth::logout();

        // Invalidate session dan regenerate CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login atau home
        return redirect()->route('filament.admin.auth.login');
    }
}
