<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    //
    function users(){
        $users= DB::select('select * from users');
        return view('users',['users'=>$users]);
        // return "users function called";
    }

    function remove(){
        $ids=DB::select('select id from users');
        // return $ids;
        return view('remove', ['ids' => $ids]);
    }
}
