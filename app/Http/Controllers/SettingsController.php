<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordRequest;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class SettingsController extends Controller
{
    public function settings(){
        return view('settings.settings');
    }

    public function forgotPassword(){
        return view('settings.forgot-password');
    }

    public function changedPassword(PasswordRequest $request){
        // dd($request);
        $validatedPassword = $request->validated();
        if($validatedPassword){
            User::where('id',\Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('settings')->with('status', 'success')->with('message', 'Password changed successfully');
        }
        return redirect()->route('settings')->with('status', 'failure')->with('code', 'Password change failed, please try again later');
    }
}
