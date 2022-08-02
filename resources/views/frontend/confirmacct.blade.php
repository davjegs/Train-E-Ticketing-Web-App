@extends('frontend.master')

@section('title')
{{ Auth::user()->surname}} {{ ' ' }} confirm_id
@endsection

@section('content')
<!--LOGIN HERE-->
<div class="container mb-5">
    <p class="h1 text-grey mt-5"><b>CONFIRM ADMIN ID</b></p>
    <div id="notice" class="col-10 bg-danger p-3 mt-3 text-white rounded">
        You need to confirm your admin ID to continue.
    </div>
    @if(session('invalid'))
        <div class="col-10 bg-warning p-3 mt-3 text-white rounded">
            {{ session('invalid') }}
        </div>
    @endif
                    <form method="POST" action="admin_confirmed" class="mt-5">
                        @csrf

                        <div class="form-group row">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                            <div class="col-12 col-md-3">
                                <legend for="confirmid" class="text-success">Confirm ID</legend>
                                <input type="text" class="form-control @error('confirmid') is-invalid @enderror" name="confirmid" required autofocus>

                                @error('confirmid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-3">
                                <button type="submit" class="btn btn-lg btn-success mt-3 mt-md-5">Confirm</button>
                            </div>
                        </div>
                    </form>
</div>

@endsection
