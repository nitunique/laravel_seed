<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Usermodel;
use App\Rolemodel;

class UserController extends Controller
{
    function list()
    {
        $users = DB::table('usermodels')
        ->join('rolemodels', 'rolemodels.id', '=', 'usermodels.role_id')
        ->select('rolemodels.role', DB::raw('count(*) as total'))
        ->groupBy('role_id','role')
        ->get();
        //dd($users[0]); 
        return view('list',compact('users'));
    }
}
