<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthorController extends Controller
{
    public function index(Request $request)
    {
        return view('back.pages.home');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect()->route('author.login');
    }

    public function ResetForm(Request $request , $token = null)
    {
        $data = [
            'pageTitle' => 'Reset Password'
        ];
 
        return view('back.pages.auth.reset',$data)->with(['token'=>$token,'email'=>$request->email]);
    }

    public function profile()
    {
        
        return view ('back.pages.profile');
    }
}
