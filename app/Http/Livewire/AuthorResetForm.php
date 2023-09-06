<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthorResetForm extends Component
{
    public $email, $newpassword, $confirmpassword, $token;

    public function mount()
    {
        $this->email = request()->email;
        $this->token = request()->token;
    }
    public function ResetHandler()
{

   
    $this->validate([
        'email' =>'required|email|exists:users,email',
        'newpassword' =>'required|between:5,10',
        'confirmpassword' => 'same:newpassword'
    ],[
        'email.required' => 'Email is Required *',
        'email.email' => 'Invalid Email Address Format *',
        'email.exists' => 'This Email Address is not Registered *',
        'newpassword.required' => 'Enter New Password *',
        'newpassword.between' => 'Password must be between 5 and 10 Characters *',
        'confirmpassword' => 'New Password & Confirm Password does not match *',
       
    ]);

    $check_token = DB::table('password_resets')->where(['email'=>$this->email,'token'=>$this->token])->first();

    if(!$check_token)
    {
       session()->flash('fail','In-Valid Token');
    }
    else
    {
        User::where('email',$this->email)->update([
            'password' => Hash::make($this->newpassword)
        ]);

        DB::table('password_resets')->where(['email'=>$this->email])->delete();
        $success_token = Str::random(64);
        session()->flash('success','Your Password has been Update Successfully.');
        $this->redirectRoute('author.login',['tkn'=>$success_token,'Uemail'=>$this->email]);
    }
}

    public function render()
    {
        return view('livewire.author-reset-form');
    }
}
