<?php

namespace Filament\Http\Responses\Auth;

use Filament\Facades\Filament;
use Filament\Http\Responses\Auth\Contracts\LoginResponse as Responsable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Livewire\Features\SupportRedirects\Redirector;

class LoginResponse implements Responsable
{
    public function toResponse($request): RedirectResponse | Redirector
    {
        if (auth()->user()->role == "Admin") {
            return redirect()->intended(Filament::getUrl());
        } else {
            // Generate a new CSRF token
            $csrfToken = csrf_token();

            // Pass the token as a session flash or redirect data
            session()->flash('csrf_token', $csrfToken);

            return redirect()->to("/");
        }
    }
}
