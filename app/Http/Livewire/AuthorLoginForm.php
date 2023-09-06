<?php

 namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthorLoginForm extends Component
{
    public $login_id;
  
    public $password;

    public function LoginHandler()
    {

        $fieldType = filter_var($this->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if($fieldType == 'email')
        {
            $this->validate([
                'login_id' => 'required|email|exists:users,email',
                'password' => 'required|between:5,10'
            ],
        [
            'login_id.required' => 'Email Address or Username is required.',
            'login_id.email' => 'Invalid Email Address format.',
            'login_id.exists' => 'This Email Address is not registered.',
            'password.required' => 'Password is required.',
            'password.between' => 'Password must be between 5 and 10 characters.'
        ]);
        }
        else
        {
            $this->validate([
                'login_id' => 'required|exists:users,username',
                'password' => 'required|between:5,10'
            ],
        [
            'login_id.required' => 'Email Address or Username is required.',
            'login_id.exists' => 'This Username is not registered.',
            'password.required' => 'Password is required.',
            'password.between' => 'Password must be between 5 and 10 characters.'
        ]);
        }

        if (filter_var($this->login_id, FILTER_VALIDATE_EMAIL)) {
            $credentials = [
                'email' => $this->login_id,
                'password' => $this->password,
            ];
        } else {
            $credentials = [
                'username' => $this->login_id,
                'password' => $this->password,
            ];
        }

        $userdata = User::where($fieldType,$this->login_id)->first();
       $name = $userdata->name;
        
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            if ($user->blocked == 1) {
                Auth::logout();
                return redirect()->route('author.login')->with('fail', 'Your account has been blocked.');
            } else {
                return redirect()->route('author.home')->with('success','Welcome Back <strong> Mr:' . $name . '</strong>');
                
            }
        } else {
            Session::flash('fail', 'Incorrect Email/Username or Password.');
        }
    }

    public function render()
    {
        return view('livewire.author-login-form');
    }
}
