@extends('frontend.master')

@section('title')
{{ Auth::user()->surname}} {{ ' ' }} {{  Auth::user()->firstname }}
@endsection

@section('content')
<div class="container">
    <p class="h1 text-grey mt-5"><b>DASHBOARD</b></p>
    @if(session('infosuccess'))
        <div class="col-10 text-success p-3 mt-3">
            <h3 class="display-4">{{ session('infosuccess') }}</h3>
        </div>
    @endif
    <div class="row justify-content-start my-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Profile <span class="offset-1 badge badge-danger p-2"><a href="editprofile" class="text-white">Edit Profile</a></span></div>

                <div class="card-body">
                    <div class="media pb-2">
                            <img src="{{ asset('frontend/images/logo.png' )}}" alt="Profile image" width="80" height="80" class="img-fluid bg-success text-white mr-3" style="border-radius:50%">
                        <div class="media-body align-self-center">
                            <h3 style="color: black">{{ Auth::user()->title}} {{ ' ' }}{{ Auth::user()->surname}} {{ ' ' }} {{  Auth::user()->firstname }} {{ ' ' }} {{ Auth::user()->othername }}</h3>
                            <h4>UID: {{ Auth::user()->uniqueid}} </h4>
                        </div>
                    </div>
                    <div>
                        <ul class="list-unstyled P-0">
                                <li class="col- mt-1">
                                    EMAIL: <span style="color:black !important;">{{ Auth::user()->email }}</span>
                                </li>
                                <li class="col- mt-1">
                                    SEX: <span style="color:black !important;">{{ Auth::user()->sex }}</span>
                                </li>
                                <li class="col- mt-1">
                                    STATE of ORGIN: <span style="color:black !important;">{{ Auth::user()->soo }}</span>
                                </li>
                                <li class="col- mt-1">
                                    LOCAL GOVT.: <span style="color:black !important;">{{ Auth::user()->locgov }}</span>
                                </li>
                                <li class="col- mt-1">
                                    STATE of RESIDENCE: <span style="color:black !important;">{{ Auth::user()->sor }}</span>
                                </li>
                                <li class="col- mt-1">
                                    LOCAL GOVT. of RESIDENCE: <span style="color:black !important;"><span style="color:black !important;">{{ Auth::user()->lor }}</span></span>
                                </li>
                                <li class="col- mt-1">
                                    ADDRESS: <span style="color:black !important;">{{ Auth::user()->address }}</span>
                                </li>
                                <li class="col- mt-1">
                                    OCCUPATION: <span style="color:black !important;">{{ Auth::user()->occupation }}</span>
                                </li>
                                <li class="col- mt-1">
                                    PHONE NUMBER: <span style="color:black !important;">{{ Auth::user()->phonenumber }}</span>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-2 mt-md-0">
            <div class="card">
                <div class="card-header">My Tickets <span class="offset-1 badge badge-danger p-2"><a href="ticket-history" class="text-white">Ticket History</a></span></div>
                <div class="card-body">
                        <ul class="list-unstyled P-0">
                                <li class="col- mt-1">
                                    <h3 style="color: black">Current Ticket</h3>
                                </li>
                                <li class="col- mt-1">
                                    Ticket ID: <span style="color:black !important;">{{ session()->get('htid') }}</span>
                                </li>
                                <li class="col- mt-1">
                                    Ticket Type: <span style="color:black !important;">{{ session()->get('hticket_type', "Not Available") }}</span>
                                </li>
                                <li class="col- mt-1">
                                    Ticket Duration: <span style="color:black !important;">{{ session()->get('hticket_duration', "Not Available") }}</span>
                                </li>
                                <li class="col- mt-1">
                                    Generated Date: <span style="color:black !important;">{{ session()->get('hgenerated', "Not Available") }}</span>
                                </li>
                                <li class="col- mt-1">
                                    Usage Date: <span style="color:black !important;">{{ session()->get('husagedate', "Not Available") }}</span>
                                </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
