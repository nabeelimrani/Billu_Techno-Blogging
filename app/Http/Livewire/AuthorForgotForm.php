<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AuthorForgotForm extends Component
{
    public $email;
    
    public function ForgotHandler()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email'
        ],
    [
        'email.required' => 'Email is Required *',
        'email.email' => 'Invalid Email Address Format *',
        'email.exists' => 'This Email Address is not Registered *'
    ]);

    $token = base64_encode(Str::random(64));
    DB::table('password_resets')->insert([
        'email' => $this->email,
        'token' => $token,
        'created_at' => Carbon::now(),
    ]);
    $user = User::where('email', $this->email)->first();
    $links = route('author.reset-form',['token'=>$token, 'email'=>$this->email]);
    $body_message = '<html>
    <head>
        <style>
            /* Add your custom CSS styles here for formatting */
            /* For example, you can style headings, paragraphs, links, etc. */
        </style>
    </head>
    <body>
        <p>Dear valued user,</p>
        
        <p>We have received a request to reset the password for your <strong>Billu Techno</strong> account associated with the email address: <strong>' . $this->email . '</strong>.</p>
        
        <p>To reset your password, please click the button below:</p>
        
        <p style="text-align: center;">
            <a href="' . $links . '" target="_blank" style="display: inline-block; padding: 10px 20px; background-color: #22bc66; color: #ffffff; text-decoration: none; border-radius: 3px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);">Reset Password</a>
        </p>
        
        <p>If you did not request a password reset, please ignore this email. Your account security is important to us.</p>
        
        <p>Thank you for using Billu Techno.</p>
        
        <p>Sincerely,<br>Your Billu Techno Team</p>
    </body>
</html>';


    $data= array(
        'name' => $user->name,
        'body_message' => $body_message,
    );

    Mail::send('forgot-email-template', $data, function($message) use ($user){
        $message->from('noreply@gmail.com','Billu Techno');
        $message->to($user->email, $user->name)
                ->subject('Reset Password');
    });

     $this->email = null;
     session()->flash('success','We have e-mailed your password reset link');

    }



    public function render()
    {
        return view('livewire.author-forgot-form');
    }
}
