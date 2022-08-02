<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fonts/fontawesome/css/font-awesome.min.css')}}">
    <title>Ticket - Print</title>
</head>
<body>
    <div class="container-fluid">
        <header>
            <div class="row bg-success P-2 P-md-4 text-white justify-content-center">
                <h3>AMTS - PAID TICKET</h3>

            </div>
        </header>
    </div>
    <div class="container mb-4">
        <div class="row my-5">
            <div class="col-10">
            <h1 class="display-4 md-display-2">You have successfully paid for your ticket - <h2>{{ session()->get('tid', "Couldn't generate Ticket ID") }}</h2></h1>
            <form method="GET" action="ticket-pdf" >
                @csrf
                <button type="submit" class="btn btn-success">Download <i class="fa fa-download"></i></button>
                <a href="home" class="btn btn-primary" role="button">Home</i></a>
            </form>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-10">
            <p><h2>You can download your ticket here now.</h2></p>
            </div>
        </div>

    </div>

    <!--SCRIPTS FROM HERE-->

    <script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>
