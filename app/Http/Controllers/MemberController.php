<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function index(){

        $member = Member::all()->toArray();
        $table_name = 'Customer';
        return view('member/index',['member'=>$member, 'table_name'=>$table_name]);
    }
}
