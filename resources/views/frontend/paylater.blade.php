@extends('frontend.master')

@section('title')
Generated_Tickets_Unpaid
@endsection

@section('content')
    <div class="container mb-4">
        <div class="row my-5">
            <div class="col-10">
            <h1 class="display-4 md-display-2">You have <span class="text-danger">{{ session()->get('unpaid','0') }} unpaid</span> tickets</h1>
            </div>
        </div>
        <div class="row">
                <div class="col-12 col-md-6">
                    <a href="ticket-history" class="btn btn-lg btn-info mt-3 mt-md-5" role="button">
                        {{ __('Ticket History') }}
                    </a>
                    <a href="unpaid-ticket" class="btn btn-lg btn-success mt-3 mt-md-5" role="button">
                        {{ __('Pay Now') }}
                    </a>
                    <a href="home" class="btn btn-lg btn-danger mt-3 mt-md-5" role="button">
                        {{ __('Home') }}
                    </a>
                </div>
        </div>
    </div>
@endsection
