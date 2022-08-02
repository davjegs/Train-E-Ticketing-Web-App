<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Staff;
use App\Ticket;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkaid');
    }

    /**
     * Creates admin dashboard
     */
   public function index()
   {
       session()->forget('userscount');

       $userscount = User::all()->count();
       session()->put('userscount', $userscount);
       $genticket = Ticket::all()->count();
        session()->put('genticket', $genticket);
       /*$admincount = User::where('role' === 'admin')->count();
        session()->put('admincount', $admincount);
        $nonadmincount = User::where('role' === 'Non-Admin')->count();
        session()->put('nonadmincount', $nonadmincount);
       $activeuser = User::where('status' == 'online')->count();
         session()->put('activeuser', $activeuser);
        $activestaff = User::where('status' == 'online')->count();
         session()->put('activestaff', $activestaff);
       $paidticket = Ticket::where('payment_status' == 'Paid')->count();
        session()->put('paidticket', $paidticket);*/

       return view('admin.admin');
   }
   public function newadmin()
   {
       return view('admin.newadmin');
   }
   public function uidconfirmed(Request $request)
   {
    $retrieve ='';
    $retrieves = User::where('uniqueid', $request->input('confirmuid'))->get();
    $dan = $retrieves->count();
    foreach ($retrieves as $retrieve){
        $request->session()->put('uniqueid',$retrieve->uniqueid);
        $request->session()->put('email',$retrieve->email);
        $request->session()->put('title',$retrieve->title);
        $request->session()->put('surname',$retrieve->surname);
        $request->session()->put('firstname',$retrieve->firstname);
        $request->session()->put('othername',$retrieve->othername);
        $request->session()->put('sex',$retrieve->sex);
        $request->session()->put('phonenumber',$retrieve->phonenumber);
        $request->session()->put('soo',$retrieve->soo);
        $request->session()->put('locgov',$retrieve->locgov);
        $request->session()->put('sor',$retrieve->sor);
        $request->session()->put('lor',$retrieve->lor);
        $request->session()->put('address',$retrieve->address);
        $request->session()->put('dob',$retrieve->dob);
    }

    if($request->input('confirmuid')==Auth::user()->uniqueid||$retrieve->role==('admin'||'non-admin')){
        return back()->with('invalid','The UID is already a staff, choose a new UID');
    }

    if($dan == 0){
            return redirect('addstaff')->with('invalid','UID does not exist. Try again or contact user');
        }elseif($dan == 1){
      return redirect('addstaff_page2');
        }else{
           return redirect('addstaff')->with('invalid','More than one user uses this UID, Please rectify.');
        }
   }
   public function newadminpage2()
   {
    return view('admin.newadmin2');
   }
   public function detailsconfirmed(Request $request)
   {
    return redirect('addstaff_page3');
   }
   public function newadminpage3()
   {
       return view('admin.newadmin3');
   }
   public function roleupdate(Request $request)
   {
       $request->validate([
        $request->createstaffid =>  'required'|'min:8'|'max:10',
       ]);

        $flight = User::where('uniqueid',$request->session()->get('uniqueid'))->update(['admin_id' => $request->input('createadminid'),'role'=>$request->input('createrole')]);

        $checkstaff = Staff::where('uniqueid',$request->session()->get('uniqueid'))->count();
        if($checkstaff >= 1){
        $flight2 = Staff::where('uniqueid',$request->session()->get('uniqueid'))->update(['staffid' => $request->input('createstaffid')]);
        }else{
        $flight2 = new Staff;
        $flight2->uniqueid = $request->session()->get('uniqueid');
        $flight2->staffid = $request->input('createstaffid');
        $flight2->save();
        $request->session()->forget(['uniqueid','title','surname','firstname','othername','email','sex','phonenumber','soo','locgov','sor','lor','address','dob',]);
        return redirect('addstaff_page4')->with('infosuccess','Staff has been created successfully.');
        }
    }
    public function newadminpage4()
   {
       return view('admin.newadmin4');
   }
}
