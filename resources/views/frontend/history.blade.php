@extends('frontend.master')

@section('title')
{{ Auth::user()->surname}} Ticket History
@endsection

@section('content')
<div class="container">
    <p class="h1 text-grey mt-5"><b>TICKET HISTORY</b></p>

    <div class="row justify-content-start my-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><strong>Paid Tickets</strong> <span class="badge badge-success font-weight-bold"> {{ session()->get('paid','0') }} </span></div>

                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Ticket ID</th>
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                                <th scope="col">Usage Date</th>
                                <th scope="col">Type</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Passenger</th>
                                <th scope="col">Luggage</th>
                                <th scope="col">Luggage Weight</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (session()->get('paidlist') as $unpaidlists)
                            <tr>
                                <td>{{ $unpaidlists->ticket_id }}</td>
                                <td>{{ $unpaidlists->boarding_station}}</td>
                                <td>{{ $unpaidlists->destination_station}}</td>
                                <td>{{ $unpaidlists->usage_date}}</td>
                                <td>{{ $unpaidlists->ticket_type}}</td>
                                <td>{{ $unpaidlists->ticket_duration}}</td>
                                <td>{{ $unpaidlists->number_of_passenger }}</td>
                                <td>{{ $unpaidlists->luggage}}</td>
                                <td>{{ $unpaidlists->luggage_weight}}</td>
                                <td><form method="GET" action="ticket-pdf" >
                                    @csrf
                                    <button type="submit" class="btn badge badge-success mt-2 p-2 text-white" >Download <i class="fa fa-download"></i></button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-start my-5" id="unpaid">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Unpaid Tickets <span class="badge badge-danger font-weight-bold"> {{ Auth::user()->unpaid_ticket }} </span></div>

                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Ticket ID</th>
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                                <th scope="col">Usage Date</th>
                                <th scope="col">Type</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Passenger</th>
                                <th scope="col">Luggage</th>
                                <th scope="col">Luggage Weight</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (session()->get('unpaidlist') as $unpaidlists)
                            <tr>
                                <td>{{ $unpaidlists->ticket_id }}</td>
                                <td>{{ $unpaidlists->boarding_station}}</td>
                                <td>{{ $unpaidlists->destination_station}}</td>
                                <td>{{ $unpaidlists->usage_date}}</td>
                                <td>{{ $unpaidlists->ticket_type}}</td>
                                <td>{{ $unpaidlists->ticket_duration}}</td>
                                <td>{{ $unpaidlists->number_of_passenger }}</td>
                                <td>{{ $unpaidlists->luggage}}</td>
                                <td>{{ $unpaidlists->luggage_weight}}</td>

                                <td><span class="badge badge-success mt-2 p-2"><a href="{{ route('pay-ticket') }}" class="text-white" onclick="event.preventDefault();
                                    document.getElementById('pay-form').submit();">Pay now</a>
                                    <form id="pay-form" action="{{ route('pay-ticket') }}" method="POST" style="display: none;">
                                        <input type="text" name="maintid" id="maintid" value="{{ $unpaidlists->ticket_id }}">
                                        @csrf
                                    </form></span>

                                  <span class="badge badge-danger mt-2 mt-xlg-0 p-2 "><a href="{{ route('delete-ticket') }}" class="text-white" onclick="event.preventDefault();
                                    document.getElementById('del-form').submit();">Delete</a>
                                    <form id="del-form" action="{{ route('delete-ticket') }}" method="POST" style="display: none;">
                                        <input type="text" name="maintid" id="maintid" value="{{ $unpaidlists->ticket_id }}">
                                        @csrf
                                    </form></span>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
