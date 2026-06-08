<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //validate
        $credentails = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //attempts
        if(Auth::attempt($credentails, $request->boolean('remember'))){
            //regenerate key
            $request->session()->regenerate();
            //redirect
            return redirect()->intended('/')->with('success', 'You are log in!');
        }
        return back()
        ->withErrors(['email'=>'The provided credentails do not much our record'])
        ->onlyInput('email');
    }
}
