@extends('frontend.master')

@section('title')
  Create-login-details
@endsection

@section('content')
<div class="container mb-5">
    <p class="h1 text-grey mt-5 w-100"><b>CREATE LOGIN DETAILS</b></p>
    <div id="notice" class="col-10 bg-danger p-3 mt-3 text-white rounded">
        First, you need to create a login details.This allow you to have access to our exclusive
        services. Simple!
    </div>
    @if(session('infoerror'))
        <div class="col-10 text-danger p-3 mt-3">
            <h3>{{ session('infoerror') }}</h3>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}" class="mt-5" >
        @csrf

        <div class="form-group row">
            <div class="col-12 col-md-4">
                <legend for="email" class="text-success">Email</legend>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-12 col-md-4">
                <legend for="password"  class="text-success">Password</legend>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-12 col-md-4">
                <legend for="password-confirm" class="text-success">Confirm Password</legend>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
        <!--SECOND LEVEL-->
        {{-- <p class="h1 text-grey mt-5"><b>REGISTER DETAILS</b></p>
        <div id="notice" class="col-10 col-md-6 bg-danger p-3 my-3 text-white rounded">
                Okay! You are almost done. Just fill in the form below. Voila!
        </div>
        <div class="form-group row">
            <div class="form-group col-12 col-md-4">
                <legend for="surname" class="text-success">Surname</legend>
                <input type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" id="surname" placeholder="Surname" value="{{ old('surname') }}" required autocomplete="surname">
                @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
            <div class="form-group col-12 col-md-4">
                <legend for="firstname" class="text-success">First name</legend>
                <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" id="firstname" placeholder="First name" value="{{ old('firstname') }}" required autocomplete="firstname">
                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-12 col-md-4">
                <legend for="othername" class="text-success">Other name</legend>
                <input type="text" class="form-control @error('othername') is-invalid @enderror" name="othername" id="othername" placeholder="Other name" value="{{ old('othername') }}" required autocomplete="othername">
                @error('othername')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="form-group col-12 col-md-1">
                <legend for="title" class="text-success">Title</legend>
                <select class="form-control" name="title" id="title" value="{{ old('title') }}">
                    <option value="Mr." selected>Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Miss">Miss</option>
                    <option value="Ms.">Ms.</option>
                </select>
            </div>
            <div class="form-group col-12 col-md-1">
                <legend for="sex" class="text-success">Sex</legend>
                <select class="form-control" name="sex" id="sex" value="{{ old('sex') }}">
                    <option value="Male" selected>Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group col-12 col-md-2">
                <legend for="soo" class="text-success">State of Origin</legend>
                <select class="form-control" name="soo" id="soo" value="{{ old('soo') }}">
                    <option value = "Abia" selected> Abia</option>
                    <option value = "Adamawa"> Adamawa</option>
                    <option value = "Akwa Ibom"> Akwa Ibom</option>
                    <option value = "Anambra"> Anambra</option>
                    <option value = "Bauchi"> Bauchi</option>
                    <option value = "Bayelsa"> Bayelsa</option>
                    <option value = "Benue"> Benue</option>
                    <option value = "Borno"> Borno</option>
                    <option value = "Cross River"> Cross River</option>
                    <option value = "Delta"> Delta</option>
                    <option value = "Ebonyi"> Ebonyi</option>
                    <option value = "Edo"> Edo</option>
                    <option value = "Enugu"> Enugu</option>
                    <option value = "Ekiti"> Ekiti</option>
                    <option value = "Gombe"> Gombe</option>
                    <option value = "Imo"> Imo</option>
                    <option value = "Jigawa"> Jigawa</option>
                    <option value = "Kaduna"> Kaduna</option>
                    <option value = "Kano"> Kano</option>
                    <option value = "Kastina"> Katsina</option>
                    <option value = "Kebbi"> Kebbi</option>
                    <option value = "Kogi"> Kogi</option>
                    <option value = "Kwara"> Kwara</option>
                    <option value = "Lagos"> Lagos</option>
                    <option value = "Nasarawa"> Nasarawa</option>
                    <option value = "Niger"> Niger</option>
                    <option value = "Ogun"> Ogun</option>
                    <option value = "Ondo"> Ondo</option>
                    <option value = "Osun"> Osun</option>
                    <option value = "Oyo"> Oyo</option>
                    <option value = "Plateau"> Plateau</option>
                    <option value = "Rivers"> Rivers</option>
                    <option value = "Sokoto"> Sokoto</option>
                    <option value = "Taraba"> Taraba</option>
                    <option value = "Yobe"> Yobe</option>
                    <option value = "Zamfara"> Zamfara</option>
                </select>
            </div>
            <div class="form-group col-12 col-md-4">
                <legend for="locgov" class="text-success">Local Govt</legend>
                <input type="text" class="form-control @error('locgov') is-invalid @enderror" name="locgov" id="locgov" placeholder="Local Govt" value="{{ old('locgov') }}" required autocomplete="locgov">
                @error('locgov')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-12 col-md-4">
                <legend for="dob" class="text-success">D.O.B</legend>
                <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" id="dob" min="1920-01-01" max="2010-12-31" required/>
                @error('dob')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="form-group col-12 col-md-4">
                <legend for="sor" class="text-success">State of Residence</legend>
                <select class="form-control" name="sor" id="sor" value="{{ old('sor') }}">
                    <option value = "Abia" selected> Abia</option>
                    <option value = "Adamawa"> Adamawa</option>
                    <option value = "Akwa Ibom"> Akwa Ibom</option>
                    <option value = "Anambra"> Anambra</option>
                    <option value = "Bauchi"> Bauchi</option>
                    <option value = "Bayelsa"> Bayelsa</option>
                    <option value = "Benue"> Benue</option>
                    <option value = "Borno"> Borno</option>
                    <option value = "Cross River"> Cross River</option>
                    <option value = "Delta"> Delta</option>
                    <option value = "Ebonyi"> Ebonyi</option>
                    <option value = "Edo"> Edo</option>
                    <option value = "Enugu"> Enugu</option>
                    <option value = "Ekiti"> Ekiti</option>
                    <option value = "Gombe"> Gombe</option>
                    <option value = "Imo"> Imo</option>
                    <option value = "Jigawa"> Jigawa</option>
                    <option value = "Kaduna"> Kaduna</option>
                    <option value = "Kano"> Kano</option>
                    <option value = "Kastina"> Katsina</option>
                    <option value = "Kebbi"> Kebbi</option>
                    <option value = "Kogi"> Kogi</option>
                    <option value = "Kwara"> Kwara</option>
                    <option value = "Lagos"> Lagos</option>
                    <option value = "Nasarawa"> Nasarawa</option>
                    <option value = "Niger"> Niger</option>
                    <option value = "Ogun"> Ogun</option>
                    <option value = "Ondo"> Ondo</option>
                    <option value = "Osun"> Osun</option>
                    <option value = "Oyo"> Oyo</option>
                    <option value = "Plateau"> Plateau</option>
                    <option value = "Rivers"> Rivers</option>
                    <option value = "Sokoto"> Sokoto</option>
                    <option value = "Taraba"> Taraba</option>
                    <option value = "Yobe"> Yobe</option>
                    <option value = "Zamfara"> Zamfara</option>
                </select>
            </div>
            <div class="form-group col-12 col-md-4">
                <legend for="lor" class="text-success">LG of Residence</legend>
                <input type="text" class="form-control @error('lor') is-invalid @enderror" name="lor" id="lor" placeholder="LG of Residence" value="{{ old('lor') }}" required autocomplete="lor">
                @error('lor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-12 col-md-4">
                <legend for="address" class="text-success">Resident Address</legend>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="Address" value="{{ old('address') }}" required autocomplete="address">
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>--}}
        <div class="form-group row">
            <div class="form-group col-12 col-md-4">
                <legend class="text-success">Occupation</legend>
                <select class="form-control" name="occupation" id="occupation" value="{{ old('occupation') }}">
                    <option value="Trader" selected>Trader</option>
                    <option value="Student">Student</option>
                </select>
            </div>
            <div class="form-group col-12 col-md-4">
                <legend for="phonenumber" class="text-success">Mobile number</legend>
                <input type="number" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" id="phonenumber" placeholder="Eg. 08160962664" value="{{ old('phonenumber') }}" required>
                @error('phonenumber')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-2 offset-9 offset-md-8 mt-n4">
            <button type="submit" class="btn btn-lg btn-success mt-3 mt-md-5">
                {{ __('Submit') }}
            </button>
        </div>
    </form>
        <div class="mt-n5"><span>Already registered? <a href="login" class="text-decoration-underline text-success"> Login here</a></span></div>
</div>
@endsection
