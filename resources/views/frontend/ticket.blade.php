@extends('frontend.master')

@section('title')
Buy Ticket
@endsection

@section('content')
<div class="container">
    <p class="h1 text-grey mt-5"><b>BUY TICKET</b></p>
    <div id="notice" class="col-8 p-3 mt-3 text-danger">
        <h3>Only one (1) week reservation is allowed. One week Reservation is not available in last week of December.</h3>
    </div>
    @if(session('infodanger'))
        <div class="col-5 bg-danger p-3 mt-3 text-white rounded">
            {{ session('infodanger') }}
        </div>
    @endif
    <form method="POST" action="create-ticket" class="mt-3" >
        @csrf
        <div class="form-group row">
            <div class="form-group col-12 col-md-4">
                <legend for="boarding" class="text-success">Boarding Station</legend>
                <select class="form-control" name="boarding" id="boarding" value="{{ old('boarding') }}">
                    <option value = "Rigasa" selected> Rigasa</option>
                    <option value = "Kubwa"> Kubwa</option>
                    <option value = "Idu"> Idu</option>
                </select>
            </div>
            <div class="form-group col-12 col-md-4">
                <legend for="destination" class="text-success">Destination Station</legend>
                <select class="form-control" name="destination" id="destination" value="{{ old('destination') }}">
                    <option value = "Rigasa"> Rigasa</option>
                    <option value = "Kubwa" selected> Kubwa</option>
                    <option value = "Idu"> Idu</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="form-group col-12 col-md-3">
                <legend for="tickettype" class="text-success">Ticket type</legend>
                <select class="form-control" name="tickettype" id="tickettype" value="{{ old('tickettype') }}">
                    <option value = "One Way" selected> One Way</option>
                    <option value = "Two way"> Two way (Return)</option>
                </select>
            </div>
            <div class="form-group col-12 col-md-3">
                <legend for="passengernumber" class="text-success">Passengers</legend>
                <select class="form-control" name="passengernumber" id="passengernumber" value="{{ old('passengernumber') }}">
                    <option value = "One" selected> Just me</option>
                    <option value = "Couple">couple</option>
                    <option value = "Two">Two</option>
                    <option value = "Three">Three</option>
                    <option value = "Four">four</option>
                </select>
            </div>
            <div class="form-group col-12 col-md-3">
                <legend for="ticketduration" class="text-success">Ticket Duration</legend>
                <select class="form-control" name="ticketduration" id="ticketduration" value="{{ old('ticketduration') }}">
                    <option value = "One day" selected> One day</option>
                    <option value = "Two days"> Two days</option>
                    <option value = "One week"> One week</option>
                    <option value = "Two weeks"> Two weeks</option>
                    <option value = "One month"> One month</option>
                </select>
            </div>
            <div class="form-group col-12 col-md-3">
                <legend for="usagedate" class="text-success">Usage start date</legend>
                <div class="row">
                <!--DAYS-->
                <select id="usagedate" class="form-control col-6" name="usagedate" value="{{ old('usagedate') }}">
                    @php
                    date_default_timezone_set('UTC');
                    $fday = date('d',strtotime("+7 Days"));
                    $days = array();
                    for ($d=date('d'); $d<=$fday ; $d++)
                    {
                        $time = mktime(12,0,0,date('m'),$d,date('Y'));
                        if(date('m',$time)==date('m'))
                            $days[]=date('d-M', $time);
                    }
                    @endphp
                    @foreach ($days as $day)
                <option value="{{ $day }}">{{ $day }}</option>
                    @endforeach
                </select>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="form-group col-12 col-md-3">
                <legend for="luggage" class="text-success">Do you travel with Luggages?</legend>
                <select onchange="toggleInput()" id="luggage" class="form-control" name="luggage">
                    <option value = "No" selected> No</option>
                    <option value = "Yes"> Yes</option>
                </select>
            </div>

            <div class="form-group col-12 col-md-3" id="luggageweight" style="display: none;">
                <legend for="luggageweight" class="text-success">If yes, select Luggage weight</legend>
                <select class="form-control" name="luggageweight" id="luggageweight" value="{{ old('luggageweight') }}">
                    <option value = "0"> Select weight</option>
                    <option value = "below 10kg"> less than 10kg</option>
                    <option value = "10-20kg"> 10Kg~20Kg</option>
                    <option value = "20-30kg"> 20Kg~30Kg</option>
                    <option value = "30-40kg"> 30Kg~40Kg</option>
                    <option value = "40-50kg"> 40Kg~50kg</option>
                    <option value = "above 50kg"> above 50kg</option>
                </select>
            </div>
            <div class="col-3 ml-auto float-right">
                <button type="submit" class="btn btn-lg btn-success mt-3 mt-md-5">
                    {{ __('Generate Ticket') }}
                </button>
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
