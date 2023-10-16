<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthorSignForm extends Component
{
    public $name, $email, $password, $terms;

    public function SignHandler()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email:filter|unique:users,email',
            'password' => 'required|min:5',
            'terms' => 'required',
        ], [
            'name.required' => 'Please Enter Your Name *',
            'email.required' => 'Please Enter Your Email Address *',
            'email.email' => 'In-Valid Email Address Format *',
            'email.unique' => 'This Email Address is already Registered * ',
            'password.required' => 'Please enter a Password *',
            'password.min' => 'Password must be at least 5 Characters Long *',
            'terms.required' => 'You must agree to the terms and conditions.',
        ]);
        

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        auth()->login($user);

        return redirect()->route('author.home');
    }

    public function render()
    {
        return view('livewire.author-sign-form');
    }
}
