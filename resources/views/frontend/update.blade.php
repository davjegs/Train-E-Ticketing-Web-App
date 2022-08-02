@extends('frontend.master')

@section('title')
  Edit {{ Auth::user()->surname }}'s Profile
@endsection

@section('content')
<div class="container mb-5">
    <p class="h1 text-grey mt-5 w-100"><b>EDIT PROFILE - </b>{{ Auth::user()->uniqueid }}</p>
    <div id="notice" class="col-10 bg-danger p-3 mt-3 text-white rounded">
        You can edit your profile here. Changes are saved instantly.
    </div>
    @if(session('infoerror'))
        <div class="col-10 text-danger p-3 mt-3">
            <h3>{{ session('infoerror') }}</h3>
        </div>
    @endif
    {{-- <p><h2 class="text-danger">{{Session::get('email')}}</h2></p>
    <div>
        <ul>
            @foreach ($errors->all() as $es)
                <li class="col-10 bg-danger p-3 mt-3 text-white rounded">
                    {{ $es }}
                </li>
            @endforeach
        </ul>
    </div> --}}
                    <form method="POST" action="profileupdated" class="mt-5" >
                        @csrf

                        <div class="form-group row">
                            <div class="form-group col-12 col-md-4">
                                <legend for="surname" class="text-success">Surname</legend>
                                <input type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" id="surname" placeholder="Surname" value="{{ Auth::user()->surname }}" required autocomplete="surname" autofocus>
                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-12 col-md-4">
                                <legend for="firstname" class="text-success">First name</legend>
                                <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" id="firstname" placeholder="First name" value="{{ Auth::user()->firstname }}" required autocomplete="firstname">
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-12 col-md-4">
                                <legend for="othername" class="text-success">Other name</legend>
                                <input type="text" class="form-control @error('othername') is-invalid @enderror" name="othername" id="othername" placeholder="Other name" value="{{ Auth::user()->othername }}" required autocomplete="othername">
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
                                <select class="form-control" name="title" id="title" value="{{ Auth::user()->title }}">
                                    <option selected>Mr.</option>
                                    <option>Mrs.</option>
                                    <option>Miss</option>
                                    <option>Ms.</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-1">
                                <legend for="sex" class="text-success">Sex</legend>
                                <select class="form-control" name="sex" id="sex" value="{{ Auth::user()->sex }}">
                                    <option selected>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-2">
                                <legend for="soo" class="text-success">State of Origin</legend>
                                <select class="form-control" name="soo" id="soo" value="{{ Auth::user()->soo }}">
                                    <option value = "Abia"> Abia</option>
                                    <option value = "Abia"> Abuja</option>
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
                                <input type="text" class="form-control @error('locgov') is-invalid @enderror" name="locgov" id="locgov" placeholder="Local Govt" value="{{ Auth::user()->locgov }}" required autocomplete="locgov">
                                @error('locgov')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-12 col-md-4">
                                <legend for="dob" class="text-success">D.O.B</legend>
                                <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" id="dob" min="1920-01-01" max="2010-12-31" value="{{ Auth::user()->dob }}" required/>
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
                                <select class="form-control" name="sor" id="sor" value="{{ Auth::user()->sor }}">
                                    <option value = "Abia"> Abia</option>
                                    <option value = "Abia"> Abuja</option>
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
                                <input type="text" class="form-control @error('lor') is-invalid @enderror" name="lor" id="lor" placeholder="LG of Residence" value="{{ Auth::user()->lor }}" required autocomplete="lor">
                                @error('lor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-12 col-md-4">
                                <legend for="address" class="text-success">Resident Address</legend>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="Address" value="{{ Auth::user()->address }}" required autocomplete="address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="form-group col-12 col-md-4">
                                <legend for="altaddress" class="text-success">Alternative Address</legend>
                                <input type="text" class="form-control" name="altaddress" id="altaddress" placeholder="**optional" value="{{ old('altaddress') }}" autocomplete="altaddress">
                            </div> --}}
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-12 col-md-4">
                                <legend class="text-success">Occupation</legend>
                                <select class="form-control" name="occupation" id="occupation" value="{{ Auth::user()->occupation }}">
                                    <option selected>Trader</option>
                                    <option>Student</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-4">
                                <legend for="phonenumber" class="text-success">Mobile number</legend>
                                <input type="number" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" id="phonenumber" placeholder="Mobile number" value="{{ Auth::user()->phonenumber }}" required>
                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 offset-md-4">
                            <button type="submit" class="btn btn-lg btn-success mt-3 mt-md-5">
                                {{ __('Update') }}
                            </button>
                            <button type="button" class="btn btn-lg btn-danger ml-3 mt-3 mt-md-5" data-toggle="modal" data-target="#cancelmodal">
                                {{ __('Cancel') }}
                            </button>
                        </div>
                    </form>

                    <!-- Modal -->
<div class="modal fade" id="cancelmodal" tabindex="-1" role="dialog" aria-labelledby="cancelmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title display-4" id="cancelmodal" style="color:black;">Exit?</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Do you really want to exit without saving changes?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
        <a href="home" class="btn btn-success" role="button">Yes</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
