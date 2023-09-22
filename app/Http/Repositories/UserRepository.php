<?php

namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserRepository
{
    public function updateUser(Request $request){
        return User::where('id',\Auth::user()->id)->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
        // 'email' => $request->input('email'),
        ]);

    }

    
}