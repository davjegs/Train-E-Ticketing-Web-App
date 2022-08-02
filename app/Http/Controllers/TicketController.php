<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\User;
use App\Ticket;
use App;


class TicketController extends Controller
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
        return view('frontend.ticket');
    }

    public function create(Request $request)
    {
        $request->validate([
            'usagedate'=>'required',
        ]);

        $tidnumber1 = mt_rand(1000000000000,9999999999999);
        $tidmonth = date('M');
        $first = $tidmonth[0];
        $third = ucfirst($tidmonth[2]);
        $uidletter = Auth::user()->uniqueid[10];
        //print_r($first.$third.$uidletter);

        if($request->input('destination')=="Rigasa"){
            $tidletterthird = 'R';
            $tidnumber2 = mt_rand(100,199);
            $tid = $tidnumber1.$first.$third.$uidletter.$tidletterthird.$tidnumber2;
    }elseif($request->input('destination')=="Kubwa"){
            $tidletterthird = 'K';
            $tidnumber2 = mt_rand(200,299);
            $tid = $tidnumber1.$first.$third.$uidletter.$tidletterthird.$tidnumber2;
    }else{
            $tidletterthird = 'I';
            $tidnumber2 = mt_rand(300,399);
            $tid = $tidnumber1.$first.$third.$uidletter.$tidletterthird.$tidnumber2;
    }

    //session()->put('qrcode', $qrCode->writeString());

      if($request->input('boarding')==$request->input('destination')){
            return  redirect('buy-ticket')->with('infodanger',"Boarding and Destination stations can't be the same");
        }
        if($request->input('luggage')=='No' && $request->input('luggageweight')!='0'){
            return  redirect('buy-ticket')->with('infodanger',"Please refresh page");
        }
        if($request->input('luggage')=='Yes' && $request->input('luggageweight')=='0'){
            return  redirect('buy-ticket')->with('infodanger',"Please Select Weight");
        }
        if($request->input('boarding')== 'Rigasa' && $request->input('destination')== 'Idu'){
            $price = '1500';
        }elseif($request->input('boarding')== 'Idu' && $request->input('destination')== 'Rigasa'){
            $price = '1500';
        }else{
            $price = '1000';
        }
        if($request->input('tickettype')== "One Way"){
            $price = $price * 1;
        }else{
            $price = $price * 2;
        }
        if($request->input('ticketduration')== "Two days"){
            $price = $price * 2;
        }elseif($request->input('ticketduration')== "One week"){
            $price = $price * 7;
        }elseif($request->input('ticketduration')== "Two weeks"){
            $price = $price * 14;
        }elseif($request->input('ticketduration')== "One month"){
            $price = $price * 28;
        }else{
            $price = $price;
        }

        $request->session()->put('boarding', $request->input('boarding'));
        $request->session()->put('destination', $request->input('destination'));
        $request->session()->put('tickettype', $request->input('tickettype'));
        $request->session()->put('passengernumber', $request->input('passengernumber'));
        $request->session()->put('ticketduration', $request->input('ticketduration'));
        $request->session()->put('luggage', $request->input('luggage'));
        $request->session()->put('luggageweight', $request->input('luggageweight'));
        $request->session()->put('usagedate', $request->input('usagedate'));
        $request->session()->put('price', $price);
        $request->session()->put('tid', $tid);

        $ticketgen = new Ticket;
        $ticketgen->ticket_id = $tid;
        $ticketgen->uniqueid = Auth::user()->uniqueid;
        $ticketgen->boarding_station = $request->input('boarding');
        $ticketgen->destination_station = $request->input('destination');
        $ticketgen->usage_date = $request->input('usagedate');
        $ticketgen->ticket_type = $request->input('tickettype');
        $ticketgen->ticket_duration = $request->input('ticketduration');
        $ticketgen->number_of_passenger = $request->input('passengernumber');
        $ticketgen->luggage = $request->input('luggage');
        $ticketgen->luggage_weight = $request->input('luggageweight');
        $ticketgen->save();

        $updateuser = User::where('uniqueid',Auth::user()->uniqueid)->update(['gen_tickets'=> +'1']);


        return redirect('confirm-ticket');
    }
    public function confirmticket()
    {
        return view('frontend.confirmticket');
    }
    public function paylater(){
        $userrecords = Ticket::where(['uniqueid'=> Auth::user()->uniqueid, 'payment_status' => 'Unpaid'])->get()->count();
        session()->put('unpaid', $userrecords);
        $updateuser = User::where('uniqueid',Auth::user()->uniqueid)->update(['unpaid_ticket'=>$userrecords]);
        return view('frontend.paylater');

        //print_r($userrecords);
    }
    public function history(){
        $unpaidticket = Ticket::where(['uniqueid'=> Auth::user()->uniqueid, 'payment_status' => 'Unpaid'])->get();
        session()->put('unpaidlist', $unpaidticket);
        $paidticket = Ticket::where(['uniqueid'=> Auth::user()->uniqueid, 'payment_status' => 'Paid'])->get();
        session()->put('paidlist', $paidticket);
        $paidticketcount = $paidticket->count();
        session()->put('paid', $paidticketcount);
        session()->forget('tid');
        return view('frontend.history');
    }
    public function paynow(Request $request){

        if($request->session()->get('tid') == '' || null){
        $updateuser = Ticket::where('ticket_id',$request->maintid)->update(['payment_status' => 'Paid']);
        $request->session()->put('tid', $request->maintid);
        $userrecords = Ticket::where(['uniqueid'=> Auth::user()->uniqueid, 'payment_status' => 'Unpaid'])->get()->count();
        session()->put('unpaid', $userrecords);
        $updateuser = User::where('uniqueid',Auth::user()->uniqueid)->update(['unpaid_ticket'=>$userrecords]);
        return redirect('ticket-paid');
        }else{
        session()->get('tid');
        $updateuser = Ticket::where('ticket_id',session()->get('tid'))->update(['payment_status' => 'Paid']);
        session()->forget('tid');
        return redirect('ticket-paid');
        }
    }
    public function delete(Request $request){

        session()->forget('tid');
        $deleteticket = Ticket::where('ticket_id',$request->maintid)->delete();
        $userrecords = Ticket::where(['uniqueid'=> Auth::user()->uniqueid, 'payment_status' => 'Unpaid'])->get()->count();
        session()->put('unpaid', $userrecords);
        $updateuser = User::where('uniqueid',Auth::user()->uniqueid)->update(['unpaid_ticket'=>$userrecords]);
        return redirect('ticket-history');
    }

    public function paid(){

        return view('frontend.paid');
    }
    public function pdf(){
        $pdf = App::make('dompdf.wrapper');
        $data = "
        <div style='background-color:green; padding:5px; width:100%; color:white; text-align:center;'>
            <h3>AMTS - PAID TICKET</h3>
        </div>
        <div style='padding:5px; width:100%; color:black; text-align:center;'>
            <h4><span style='color:red;'>Note:</span> Please take this ticket with you either as is or printed</h4>
        </div>
        <div style='width: 100%; padding: 5px 10px; float:left;'>
        NAME:    <span style='margin-left: 40%;'>FROM:<span>
        <br/>
        TICKET ID:      <span style='margin-left: 40%;'>TO:<span>
        <br/>
        TICKET TYPE:    <span style='margin-left: 30%;'>EXPIRY DATE:<span>
        <br/>
        TICKET DURATION:    <span style='margin-left: 30%;'>No OF PASSENGER:<span>
        <br/>
        USAGE START DATE:       <span style='margin-left: 30%;'>EXPIRY DATE:<span>
        <br/>
        EXPIRY DATE:        <span style='margin-left: 30%;'>EXPIRY DATE:<span>
        <br/>
        </div>

        ";
        $pdf->loadHTML($data);
        return $pdf->download('AMTS_Ticket_'.session()->get('tid').'.pdf');
    }
}

