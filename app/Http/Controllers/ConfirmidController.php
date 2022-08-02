<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmidController extends Controller
{
    public function comfirmid(Request $request)
    {
        print_r($request->input('comfirmid'));
        // $request->validate([
        // 'comfirmid'=>"required|string|max:255"
        // ]);


        // $emp = $request->input('comfirmid');
        // if($emp == Auth::user()->admin_id){
        //     session(['adminid' => $emp]);
        //     return redirect('admin');
        // }else{
        // return redirect('confirmuser')->with('invalid','Admin ID is incorrect. Try again');
        // }

    }
}
