<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class Frontends extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function faqs()
    {
        return view('frontend.faqs');
    }
    public function schedule()
    {
        return view('frontend.schedule');
    }
    public function ticket()
    {
        return view('frontend.ticket');
    }
    public function confirmaccount()
   {
       return view('frontend.confirmacct');
   }

    public function comfirmid(Request $request)
    {

        $men = Auth::user()->admin_id;
        //print_r($men);

        $dan = $request->input('confirmid');
        //print_r($dan);

        if($dan == $men){
            $request->session()->put('adminid', $dan);
            return redirect('admindashboard');
        }else{
            return redirect('confirmuser')->with('invalid','Admin ID is incorrect. Try again');
        }
    }

    // protected function update(Request $request)
    // {

    //     $request->validate([
    //         'surname' => "required|string|max:255",
    //         'firstname' => "required|string|max:255",
    //         'othername' => "required|string|max:255",
    //         'title' => "required|string|max:10",
    //         'sex' => "required|string|max:10",
    //         'soo' => "required|string|max:255",
    //         'locgov' => "required|string|max:255",
    //         'dob' => "required|string|max:255",
    //         'address' => "required|string|max:255",
    //         'altaddress' => "string|max:255",
    //         'occupation' => "required|string|max:255",
    //         'phonenumber' => "required|int|max:11|min:11"
    //     ]);


    //     $ema = Auth::user()->email;

    //     $flight = User::where('email', $ema);
    //     $flight->surname=$request->surname;
    //     $flight->firstname=$request->firstname;
    //     $flight->othername=$request->othername;
    //     $flight->title=$request->title;
    //     $flight->sex=$request->sex;
    //     $flight->soo=$request->soo;
    //     $flight->locgov=$request->locgov;
    //     $flight->dob=$request->dob;
    //     $flight->address=$request->address;
    //     $flight->altaddress=$request->altaddress;
    //     $flight->occupation=$request->occupation;
    //     $flight->phonenumber=$request->phonenumber;
    //     //$flight->save();
    //     //return redirect('home');
    //     print_r($flight);
    // }
}
