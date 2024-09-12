<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]
class LoginPage extends Component
{
    public $email;
    public $password;


    public function save()
    {
        $this->validate([
            'email' => 'required|email|max:255|exists:users,email',
            'password' => 'required|min:6|max:255',
        ]);

        // Attempt to authenticate the user
        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // Flash a session error message if credentials are invalid
            session()->flash('error', 'Invalid credentials');
            return;
        }

        // Redirect to intended page after successful login
        return redirect()->intended();
    }

    public function render()
    {
        return view('livewire.auth.login-page');
    }
}
