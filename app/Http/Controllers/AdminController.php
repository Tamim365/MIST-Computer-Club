<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function index(){
    //     $member = Member::all()->toArray();
    //     $table_name = '';
    //     return view('admin/tables',['member'=>$member, 'table_name'=>$table_name]);
    // }
    function load(Request $request){
        $table_name = '';
        if ($request->isMethod('post')) {
            $table_name = $request->input('Tables');
        }
        $member = Member::all()->toArray();
        return view('admin/tables',['member'=>$member, 'table_name'=>$table_name]);
    }
}
