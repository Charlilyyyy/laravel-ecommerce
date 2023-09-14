<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MemberProfileController extends Controller
{
    public function index(){
        $user = \Auth::user();
        return view('dashboard-member.member-profile.profile',compact('user'));
    }
}
