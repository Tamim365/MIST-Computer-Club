<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function index(){

        $member = Member::all()->toArray();
        return view('member/index',compact('member'));
    }
}
