<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Ticket;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // $activeticket = Ticket::where(['uniqueid'=> Auth::user()->uniqueid, 'active_status' => 'Active'])->first()->get();
        // foreach ($activeticket as $activelist) {
        //         session()->put('htickettype', $activelist->ticket_type);
        //         session()->put('hticketduration', $activelist->ticket_duration);
        //         session()->put('husagedate', $activelist->usage_date);
        //         session()->put('htid', $activelist->ticket_id);
        //         session()->put('hgenerated', $activelist->created_at);
        // }
        return view('home');
    }
}
