@extends('frontend.master')

@section('title')
{{ __('msg.schedule') }}
@endsection

@section('navbtn')
  <a href="login" class="btn btn-outline-light my-2 my-sm-0 mr-3" id="navbtn" role="button">{{ __('login') }}</a>
  <a href="register" class="btn btn-outline-light my-2 my-sm-0" id="navbtn" role="button">Register</a>
@endsection

@section('content')
    <!--SCHEDULE STARTS HERE-->
            <div class="container mb-5" style="overflow:hidden;">
                <p class="h1 text-grey mt-5"><b>TRAIN SCHEDULE</b></p>
                <div class="row">
                    <div class="col-12 table-responsive-sm">
                        <p class="h2 mt-5 text-success"><b>Monday to Saturday</b></p>
                        <table class="table table-striped table-bordered table-hover">
                            <caption>Schedule for Kaduna to Abuja train services</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Kd to Abj</th>
                                    <th scope="col">Train Code</th>
                                    <th scope="col">Rigasa (Departure)</th>
                                    <th scope="col">Kubwa (Arrival)</th>
                                    <th scope="col">Kubwa (Departure)</th>
                                    <th scope="col">Idu (Arrival)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1st trip</th>
                                    <td>KA1</td>
                                    <td>06:40 am</td>
                                    <td>08:28 am</td>
                                    <td>08:31 am</td>
                                    <td>08:43 am</td>
                                </tr>
                                <tr>
                                    <th scope="row">2nd trip</th>
                                    <td>KA2</td>
                                    <td>10:35 am</td>
                                    <td>12:59 pm</td>
                                    <td>01:04 pm</td>
                                    <td>01:20 pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">3rd trip</th>
                                    <td>kA3</td>
                                    <td>02:00 pm</td>
                                    <td>03:58 pm</td>
                                    <td>04:03 pm</td>
                                    <td>04:16 pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">4th trip</th>
                                    <td>KA4</td>
                                    <td>06:00 pm</td>
                                    <td>08:04 pm</td>
                                    <td>08:07 pm</td>
                                    <td>08:20 pm</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-striped table-bordered table-hover">
                            <caption>Schedule for Abuja to Kaduna train services</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Abj to Kd</th>
                                    <th scope="col">Train Code</th>
                                    <th scope="col">Idu (Departure)</th>
                                    <th scope="col">Kubwa (Arrival)</th>
                                    <th scope="col">Kubwa (Departure)</th>
                                    <th scope="col">Rigasa (Arrival)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1st trip</th>
                                    <td>AK1</td>
                                    <td>07:00 am</td>
                                    <td>07:14 am</td>
                                    <td>07:17 am</td>
                                    <td>09:15 am</td>
                                </tr>
                                <tr>
                                    <th scope="row">2nd trip</th>
                                    <td>AK2</td>
                                    <td>09:50 am</td>
                                    <td>10:02 am</td>
                                    <td>10:07 am</td>
                                    <td>12:01 pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">3rd trip</th>
                                    <td>AK3</td>
                                    <td>02:20 pm</td>
                                    <td>02:36 pm</td>
                                    <td>02:41 pm</td>
                                    <td>05:00 pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">4th trip</th>
                                    <td>AK4</td>
                                    <td>06:00 pm</td>
                                    <td>06:12 pm</td>
                                    <td>06:15 pm</td>
                                    <td>07:56 pm</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                        <div class="col-12 table-responsive-sm">
                            <p class="h2 mt-5 text-success"><b>Sunday</b></p>
                            <table class="table table-striped table-bordered table-hover">
                                <caption>Schedule for Kaduna to Abuja train services</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">Kd to Abj</th>
                                        <th scope="col">Train Code</th>
                                        <th scope="col">Rigasa (Departure)</th>
                                        <th scope="col">Kubwa (Arrival)</th>
                                        <th scope="col">Kubwa (Departure)</th>
                                        <th scope="col">Idu (Arrival)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1st trip</th>
                                        <td>KA2</td>
                                        <td>01:00 pm</td>
                                        <td>02:49 pm</td>
                                        <td>02:54 pm</td>
                                        <td>03:06 pm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2nd trip</th>
                                        <td>KA4</td>
                                        <td>04:00 pm</td>
                                        <td>06:02 pm</td>
                                        <td>06:07 pm</td>
                                        <td>06:21 pm</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-striped table-bordered table-hover">
                                <caption>Schedule for Abuja to Kaduna train services</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">Abj to Kd</th>
                                        <th scope="col">Train Code</th>
                                        <th scope="col">Idu (Departure)</th>
                                        <th scope="col">Kubwa (Arrival)</th>
                                        <th scope="col">Kubwa (Departure)</th>
                                        <th scope="col">Rigasa (Arrival)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1st trip</th>
                                        <td>AK1</td>
                                        <td>12:30 pm</td>
                                        <td>12:44 pm</td>
                                        <td>12:49 pm</td>
                                        <td>03:02 pm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2nd trip</th>
                                        <td>AK3</td>
                                        <td>05:00 pm</td>
                                        <td>05:12 pm</td>
                                        <td>05:17 pm</td>
                                        <td>07:05 pm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    <!--LOGIN ENDS HERE-->
@endsection
