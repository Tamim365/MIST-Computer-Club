<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // public function index(){
    //     $member = Member::all()->toArray();
    //     $table_name = '';
    //     return view('admin/tables',['member'=>$member, 'table_name'=>$table_name]);
    // }
    function load(Request $request){
        $table_name = '';
        $member = [];
        if ($request->isMethod('post')) {
            $table_name = $request->input('Tables');
            $member = DB::table($table_name)->get();
        }
        $all_table_names = DB::table('user_tables')->orderBy('table_name')->pluck('table_name');
        return view('admin/tables',['member'=>$member, 'table_name'=>$table_name, 'all_table_names'=>$all_table_names]);
    }
}
