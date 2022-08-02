@extends('frontend.master')

@section('title')
{{ Auth::user()->surname }} Confirm-Ticket
@endsection

@section('content')
<div class="container" style="font-size:16px;">
    <p class="h1 text-grey mt-5"><b>CONFIRM TICKET/PAY</b></p>
    <!--ZERO-->
    {{-- <div class="row mt-4">
        <div class="col-6 p-4">
<img src="{{ session()->get('qrcode', "Couldn't generate Ticket ID") }}">
        </div>
    </div> --}}
    <div class="row mt-4">
        <div class="col-12 col-md-7">
                Ticket ID:
            <div class="col-12 py-2 rounded" style="color:black; background-color:khaki;">
                <h2>{{ session()->get('tid', "Couldn't generate Ticket ID") }}</h2>
            </div>
        </div>
        <div class="col-12 col-md-5">
                Amount:
            <div class="col-12 py-2 rounded" style="color:black; background-color:khaki;">
                <h2>N {{ session()->get('price', "Couldn't get Ticket price please refresh") }}:00 K</h2>
            </div>
        </div>
    </div>
    <!--ONE-->
    <div class="row mt-4">
        <div class="col-12 col-md-8">
                Name:
            <div class="col-12 py-2 rounded" style="color:black; background-color:khaki;">
                    <strong>{{ Auth::user()->title }} {{ ' ' }} {{ Auth::user()->surname }}</strong> {{ Auth::user()->firstname }} {{ '  ' }} {{ Auth::user()->othername }}
            </div>
        </div>
        <div class="col-12 col-md-4">
                UID:
            <div class="col-12 col-md-8 py-2 rounded" style="color:black; background-color:khaki;">
                {{ Auth::user()->uniqueid }}
            </div>
        </div>
    </div>
    <!--TWO-->
    <div class="row mt-2">
        <div class="col-12 col-md-6">
            Email:
                <div class="col-12 col-md-6 py-2 rounded" style="color:black; background-color:khaki;">
                    {{ Auth::user()->email }}
            </div>
        </div>
        <div class="col-12 col-md-2">
            Sex:
            <div class="col-12 col-md-8 py-2 rounded" style="color:black; background-color:khaki;">
                {{ Auth::user()->sex }}
            </div>
        </div>
        <div class="col-12 col-md-4">
            Phone number:
            <div class="col-12 col-md-8 py-2 rounded" style="color:black; background-color:khaki;">
                {{ Auth::user()->phonenumber }}
            </div>
        </div>
    </div>
    <!--THREE-->
    <div class="row mt-2">
        <div class="col-12 col-md-6">
            Address:
                <div class="col-12 py-2 rounded" style="color:black; background-color:khaki;">
                    {{ Auth::user()->address }}
            </div>
        </div>
        <div class="col-12 col-md-2">
            Boarding Station:
            <div class="col-12 py-2 rounded" style="color:black; background-color:khaki;">
                {{ session()->get('boarding', "Please select station") }}
            </div>
        </div>
        <div class="col-12 col-md-4">
            Destination Station:
            <div class="col-12 col-md-10 py-2 rounded" style="color:black; background-color:khaki;">
                {{ session()->get('destination', "Please select station") }}
            </div>
        </div>
    </div>
    <!--FOUR-->
    <div class="row mt-2">
        <div class="col-12 col-md-6">
            Usage start date:
                <div class="col-12 col-md-6 py-2 rounded" style="color:black; background-color:khaki;">
                    {{ session()->get('usagedate', "Please select station") }}
            </div>
        </div>
        <div class="col-12 col-md-2">
            Ticket type:
            <div class="col-12 col-md-8 py-2 rounded" style="color:black; background-color:khaki;">
                {{ session()->get('tickettype', "Please select station") }}
            </div>
        </div>
        <div class="col-12 col-md-4">
            Number of passenger:
            <div class="col-12 col-md-8 py-2 rounded" style="color:black; background-color:khaki;">
                {{ session()->get('passengernumber', "Please select station") }}
            </div>
        </div>
    </div>
    <!--FIVE-->
    <div class="row mt-2">
        <div class="col-12 col-md-6">
            Ticket duration:
                <div class="col-12 col-md-6 py-2 rounded" style="color:black; background-color:khaki;">
                    {{ session()->get('ticketduration', "Please select station") }}
            </div>
        </div>
        <div class="col-12 col-md-2">
            Boarding with luggages
            <div class="col-12 col-md-8 py-2 rounded" style="color:black; background-color:khaki;">
                {{ session()->get('luggage', "Please select station") }}
            </div>
        </div>
        <div class="col-12 col-md-4">
            Luggage weight:
            <div class="col-12 col-md-8 py-2 rounded" style="color:black; background-color:khaki;">
                {{ session()->get('luggageweight', "Please select station") }}
            </div>
        </div>
    </div>

    <form method="POST" action="pay-ticket" >
        @csrf
        <div class="form-group row justify-content-end">
            <div class="col-12 col-md-6">
                    <button type="submit" class="btn btn-lg btn-success mt-3 mt-md-5">
                        {{ __('Pay now') }}
                    </button>
                <a href="unpaid-ticket" class="btn btn-lg btn-danger mt-3 mt-md-5" role="button">
                    {{ __('Pay later') }}
                </a>
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')
    <script>
        function toggleInput(){
            var mySelect = document.getElementById('luggageweight');
            var displaySetting = mySelect.style.display;
            if(displaySetting == 'block'){
                mySelect.style.display = 'none';

            }else{
                mySelect.style.display = 'block';
                }
            }
    </script>
    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1;
        var yyyy = today.getFullYear();
        var fm = mm+1;
         if(dd<10){
             dd='0'+dd
         }
         if(mm<10){
             mm='0'+mm
         }
        today = yyyy+'-'+mm+'-'+dd;
        fday = yyyy+'-'+fm+'-'+dd;
        document.getElementById("usagedate").setAttribute("min", today);
        document.getElementById("usagedate").setAttribute("value", today);
    </script>
    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+2;
        var yyyy = today.getFullYear();
         if(dd<10){
             dd='0'+dd
         }
         if(mm<10){
             mm='0'+mm
         }
        fday = yyyy+'-'+mm+'-'+dd;
        document.getElementById("usagedate").setAttribute("max", fday);
    </script>
@endsection
