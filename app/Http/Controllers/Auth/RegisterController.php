<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            //'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'surname' => ['required', 'string'],
            /*'firstname' => ['required', 'string'],
            'othername' => ['required', 'string'],
            'title' => ['required', 'string'],
            'sex' => ['required', 'string'],
            'soo' => ['required', 'string'],
            'locgov' => ['required', 'string'],
            'dob' => ['required', 'string'],
            'sor' => ['required', 'string', 'max:255'],
            'lor' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            //'altaddress' => ['required', 'string', 'max:255'],
            'occupation' => ['required', 'string'],
            'phonenumber' => ['required', 'min:11', 'max:11']*/
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        /*$idnumber = mt_rand(1000000000,9999999999);
        $fname = $data['firstname'];
        $fnamefirst = ucfirst("$fname[1]");
        $dobc = $data['dob'];
        $dobfirst = "$dobc[5]";
        $dobsecond = "$dobc[6]";

        if($dobfirst=='0'&&$dobsecond=='1'){
            $month = 'J';
         }elseif($dobfirst=='0'&&$dobsecond=='2'){
             $month = 'F';
         }
         elseif($dobfirst=='0'&&$dobsecond=='3'){
             $month = 'M';
         }
         elseif($dobfirst=='0'&&$dobsecond=='4'){
             $month = 'A';
         }
         elseif($dobfirst=='0'&&$dobsecond=='5'){
             $month = 'M';
         }
         elseif($dobfirst=='0'&&$dobsecond=='6'){
             $month = 'J';
         }
         elseif($dobfirst=='0'&&$dobsecond=='7'){
             $month = 'J';
         }
         elseif($dobfirst=='0'&&$dobsecond=='8'){
             $month = 'A';
         }
         elseif($dobfirst=='0'&&$dobsecond=='9'){
             $month = 'S';
         }
         elseif($dobfirst=='1'&&$dobsecond=='0'){
             $month = 'O';
         }
         elseif($dobfirst=='1'&&$dobsecond=='1'){
             $month = 'N';
         }
         else{
             $month = 'D';
        }

        $idletter = $fnamefirst.$month;
        $uid = $idnumber.$idletter;
        //$request->session()->put('uid', $uid);
        // $checkuid = User::where('uniqueid',$request->session()->get('uid'))->count();
        // if($checkuid >= 1){
        //     return number();
        // }
        if($data['sex'] == 'Female' && $data['title'] == 'Mr.'){
            return redirect('register')->with('infoerror','Mr. can not be a female');
        }*/
        return User::create([
            //'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'surname' => ucfirst($data['surname']),
            /*'firstname' => ucfirst($data['firstname']),
            'othername' => ucfirst($data['othername']),
            'title' => $data['title'],
            'sex' => $data['sex'],
            'soo' => $data['soo'],
            'locgov' => ucwords($data['locgov']),
            'dob' => $data['dob'],
            'sor' => $data['sor'],
            'lor' => ucwords($data['lor']),
            'address' => ucwords($data['address']),
            //'altaddress' => $data['altaddress'],
            'occupation' => $data['occupation'],
            'phonenumber' => $data['phonenumber'],
            'uniqueid' => $uid,*/
        ]);
    }
}
