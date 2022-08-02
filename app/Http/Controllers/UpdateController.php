<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Staff;

class UpdateController extends Controller
{
    public function index()
    {
        return view ('frontend.update');
    }
    public function update(Request $request)
    {
        $request->validate([
            $request->surname =>'required'|'string',
            $request->firstname=>'required'|'string',
            $request->othername=>'required'|'string',
            $request->title=>'required'|'string',
            $request->sex=>'required'|'string',
            $request->soo=>'required'|'string',
            $request->locgov=>'required'|'string',
            $request->dob=>'required'|'string',
            $request->sor=>'required'|'string',
            $request->lor=>'required'|'string',
            $request->address=>'required'|'string'|'max:255',
            $request->occupation=>'required'|'string',
            $request->phonenumber=>'required'|'min:11'| 'max:11',
         ]);

         if($request->input('sex') == 'Female' && $request->input('title') == 'Mr.'){
            return redirect('editprofile')->with('infoerror','Mr. can not be a female');
        }
        $flight = User::where('uniqueid',Auth::user()->uniqueid)->update(['surname' => ucfirst($request->input('surname')),
                                                                        'firstname'=>ucfirst($request->input('firstname')),
                                                                        'othername'=>ucfirst($request->input('othername')),
                                                                        'title'=>$request->input('title'),
                                                                        'sex'=>$request->input('sex'),
                                                                        'soo'=>$request->input('soo'),
                                                                        'locgov'=>ucwords($request->input('locgov')),
                                                                        'dob'=>$request->input('dob'),
                                                                        'sor'=>$request->input('sor'),
                                                                        'lor'=>ucwords($request->input('lor')),
                                                                        'address'=>ucwords($request->input('address')),
                                                                        'occupation'=>$request->input('occupation'),
                                                                        'phonenumber'=>$request->input('phonenumber'),
                                                                        ]);
        return redirect('home')->with('infosuccess','Profile Updated');
    }
}
