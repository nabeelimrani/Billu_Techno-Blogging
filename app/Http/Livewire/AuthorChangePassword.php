<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthorChangePassword extends Component
{

    public $cpass,$npass,$cfpass;
    public $author;

    public function mount()
    {
        $this->author = User::find(auth('web')->id());
        $this->password = $this->author->password;
     
    }

    public function ChangePassword()
    {
        $this->validate([
            'cpass' =>[
                'required', function($attribute, $value, $fail)
                {
                    if(!Hash::check($value, User::find(auth('web')->id())->password))
                    {
                        return $fail(__('The Current Password is incorrect'));
                    }
                },
            ],
             
            'npass' => 'required|min:6',
            'cfpass' => 'required|min:6|same:npass'
        ],
        [
            'cpass.required' => 'Please Enter Current Password *',
            'npass.required' => 'Please Enter New Password *',
            'npass.min' => 'Password must be at least 6 characters long *',
            'cfpass.required' => 'Please Enter Confirm Password *',
            'cfpass.min' => 'Confirm Password must be at least 6 characters long *',
            'cfpass.same' => 'Confirm Password does not match the New Password *',
        ]);
        
        
        User::where('id', auth('web')->id())->update([
            'password' => bcrypt($this->npass),
        ]);
    
        session()->flash('success','Your Password Successfully Updated');
        return redirect()->route('author.profile'); 
    }
  

    public function render()
    {
        return view('livewire.author-change-password');
    }
}
