<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SignupController extends Controller
{
    public function index(){
        return view('signup');
    }

    public function register(RegisterRequest $request) {
        $validatedData = $request->validated();
        
        if ($validatedData) {
            $user = User::create($validatedData);
            \Auth::login($user);
            return redirect()->route('dashboard-member');
        } else {
            return redirect()->back()->withErrors($request->validated())->withInput();
        }
    }
    
}
