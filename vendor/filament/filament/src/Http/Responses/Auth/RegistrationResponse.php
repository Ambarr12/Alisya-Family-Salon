<?php

namespace Filament\Http\Responses\Auth;

use Filament\Facades\Filament;
use Filament\Http\Responses\Auth\Contracts\RegistrationResponse as Responsable;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;

class RegistrationResponse implements Responsable
{
    public function toResponse($request): RedirectResponse | Redirector
    {
        if (auth()->user()->role == "User") {
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
