<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class MemberProfileController extends Controller
{
    public function index(){
        $user = \Auth::user();
        return view('dashboard-member.member-profile.profile',compact('user'));
    }

    public function saveProfile(Request $request){
        // dd($req);
        (new UserRepository())->updateUser($request);
        return redirect()->back();
    }

    // public function approvedPayment(Request $request, $id){
    //     return (new PaymentRepositories())->approvePayment($request, $id);
    // }
}
