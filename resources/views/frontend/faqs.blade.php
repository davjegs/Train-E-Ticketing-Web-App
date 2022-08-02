@extends('frontend.master')

@section('title')
  FAQs
@endsection

@section('style')
  <style>
  footer
  {
    display: none;
  }
  </style>
@endsection

@section('navbtn')
  <a href="login" class="btn btn-outline-light my-2 my-sm-0 mr-3" id="navbtn" role="button">Login</a>
  <a href="register" class="btn btn-outline-light my-2 my-sm-0" id="navbtn" role="button">Register</a>
@endsection

@section('content')
  <!--FAQs START HERE-->
        <div class="container-fluid mb-5" style="overflow: hidden;">
            <div class="container w-40">
                <div class="row">
                    <p class="h1 mt-5"><b>FAQs</b></p>
                </div>
            </div>
            <div class="row no-gutters">

            <!--FAQs MAIN START HERE-->
                <div class="col-12 col-lg-8 offset-md-1 pl-3">
                    <!--FAQS-TICKETS SECTION-->
                    <p id="faq-tickets" class="h2 mt-5 text-success"><b>Tickets</b></p>

                    <div class="accordion col-10 col-lg-12" id="faq-questions">
                        <div class="card" id="card1">
                          <div class="card-header" id="headingone" role="button" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
                            <h4 class="mb-0" id="what-is-an-e-ticket">
                                What is an E-ticket?
                            </h4>
                          </div>

                          <div id="collapseone" class="collapse show" aria-labelledby="headingone" data-parent="#faq-questions">
                            <div class="card-body">
                                E-ticketing is a method for documenting sale, tracking usage and accounting for a passenger’s transportation without requiring the issue of paper. It is a commerce method that enable passengers to pay and book tickets for themselves
                                using a computer or mobile phone from anywhere.
                            </div>
                          </div>
                        </div>

                        <div class="card" id="card2">
                            <div class="card-header" id="headingtwo" role="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                              <h4 class="mb-0" id="why-use-an-e-ticket">
                                  Why use an E-ticket?
                              </h4>
                            </div>

                            <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#faq-questions">
                              <div class="card-body">
                               It’s <b>convenient</b> , <b>faster</b> and it’s a better <b>secured</b> way of travelling.
                              </div>
                            </div>
                          </div>

                          <div class="card" id="card3">
                            <div class="card-header" id="headingthree" role="button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                              <h4 class="mb-0" id="types-of-e-ticket">
                                  Types of our Train E-ticket
                              </h4>
                            </div>

                            <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#faq-questions">
                              <div class="card-body">
                                <b>One way Ticket</b>
                               <ul class="list-unstyled">
                                   <li>A day</li>
                                   <li>Two days</li>
                                   <li>A Week</li>
                                   <li>Two Weeks</li>
                                   <li>A Month</li>
                                </ul>

                                <b>Two way Ticket</b>
                               <ul class="list-unstyled">
                                   <li>A day</li>
                                   <li>Two days</li>
                                   <li>A Week</li>
                                   <li>Two Weeks</li>
                                   <li>A Month</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="card" id="card4">
                            <div class="card-header" id="headingfour" role="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                              <h4 class="mb-0" id="how-to-book-an-e-ticket">
                                  How to book/purchase an E-ticket
                              </h4>
                            </div>

                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#faq-questions">
                              <div class="card-body">
                               <ol>
                                   <li>First you need to login into our train eTicketng system. If you aren't a user <a href="register" class="text-decoration-underline text-success"> Register here</a></li>
                                   <li>Login with your login details (email and password)</li>
                                   <li>On the navigation bar or profile dropdown menu, click on buy ticket</li>
                                   <li>On ticket page, select ticket type and fill appopriate forms</li>
                                   <li>click on generate ticket</li>
                                   <li>A ticket will be generated containing your travel information. You then need to pay for the generated ticket using
                                       online payment method.
                                   </li>
                                   <li>After payment is confirmed your eticket (.pdf file format) is now available for download via your profile or email address</li>
                                   <li>Ticket can be redownloaded anytime as long as the ticket is valid/active </li>
                              </div>
                            </div>
                          </div>

                          <div class="card" id="card5">
                            <div class="card-header" id="headingfive" role="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                              <h4 class="mb-0" id="how-to-use-an-e-ticket">
                                  How to use an E-ticket
                              </h4>
                            </div>

                            <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#faq-questions">
                              <div class="card-body">
                                   Tickets can be printed or used as-is, the pdf format. Just show either of both to ticket collector/conductor when asked for your ticket.
                              </div>
                            </div>
                          </div>

                          <div class="card" id="card6">
                            <div class="card-header" id="headingsix" role="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                              <h4 class="mb-0" id="how-to-use-an-e-ticket">
                                  Verifying Authenticity of an E-ticket
                              </h4>
                            </div>

                            <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#faq-questions">
                              <div class="card-body">
                                   Going digital also means improving security and lower rate of falsification. There are 4 verification items
                                   on your ticket. The primary item is the QR Code on the ticket. The QR Code contains your ticket information.
                              </div>
                            </div>
                          </div>

                      </div>

                      <!--FAQS-TRAIN SECTION-->
                    <p id="faq-train" class="h2 mt-5 text-success"><b>Trains</b></p>

                    <div class="accordion col-10 col-lg-12" id="faq-questions2">
                        <div class="card" id="card7">
                          <div class="card-header" id="headingseven" role="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                            <h4 class="mb-0" id="what-is-an-e-ticket">
                                About Train
                            </h4>
                          </div>

                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#faq-questions2">
                            <div class="card-body">
                                We currently operate eight (8) trains (Train codes: KA1-KA4 and AK1-AK4) per day with each train having a minimum of six standard coaches.
                            </div>
                          </div>
                        </div>
                      </div>

                      <!--FAQS-STATIONS SECTION-->
                    <p id="faq-station" class="h2 mt-5 text-success"><b>Stations</b></p>

                    <div class="accordion col-10 col-lg-12" id="faq-questions3">
                        <div class="card" id="card8">
                          <div class="card-header" id="headingeight" role="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                            <h4 class="mb-0" id="what-is-an-e-ticket">
                                Idu Station
                            </h4>
                          </div>

                          <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#faq-questions3">
                            <div class="card-body">

                            </div>
                          </div>
                        </div>

                        <div class="card" id="card9">
                            <div class="card-header" id="headingnine" role="button" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                              <h4 class="mb-0" id="why-use-an-e-ticket">
                                  Kubwa station
                              </h4>
                            </div>

                            <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#faq-questions3">
                              <div class="card-body">

                              </div>
                            </div>
                          </div>

                          <div class="card" id="card10">
                            <div class="card-header" id="headingten" role="button" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                              <h4 class="mb-0" id="types-of-e-ticket">
                                  Rigasa station
                              </h4>
                            </div>

                            <div id="collapseten" class="collapse" aria-labelledby="headingten" data-parent="#faq-questions3">
                              <div class="card-body">

                              </div>
                            </div>
                          </div>
                      </div>

                </div>
            <!--FAQs MAIN ENDS HERE-->

            <!--FAQs ASIDE STARTS HERE-->
                <div id="faq-aside" class="d-none d-lg-block col-lg-4 offset-9 border border-right-0 border-top-0 border-bottom-0 border-dark">
                    <ul class="section-nav">
                        <li class="faq-list list-unstyled"><a href="#faq-tickets"><b>Tickets</b></a>
                            <ul>
                            <li class="faq-list list-unstyled"><a href="#card1">What is an E-ticket?</a></li>
                            <li class="faq-list list-unstyled"><a href="#card2">Why use an E-ticket</a></li>
                                <li class="faq-list list-unstyled"><a href="#card3">Types of our Train E-ticket</a></li>
                                <li class="faq-list list-unstyled"><a href="#card4">How to book/purchase<br/> <span class="offset-1">an E-ticket</span></a></li>
                                <li class="faq-list list-unstyled"><a href="#card5">How to use an E-ticket</a></li>
                                <li class="faq-list list-unstyled"><a href="#card6">Verifying Authenticity of an E-ticket</a></li>
                            </ul>
                        </li>

                        <li class="faq-list list-unstyled"><a href="#"><b>Trains</b></a>
                            <ul>
                            <li class="faq-list list-unstyled"><a href="#card7">About Train</a></li>
                            </ul>
                        </li>

                        <li class="faq-list list-unstyled"><a href="#"><b>Stations</b></a>
                            <ul>
                            <li class="faq-list list-unstyled"><a href="#card8">Idu Station</a></li>
                            <li class="faq-list list-unstyled"><a href="#card9">Kubwa Station</a></li>
                            <li class="faq-list list-unstyled"><a href="#card10">Rigasa Station</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <!--FAQs ASIDE ENDS HERE-->
            </div>
        </div>
  <!--FAQs ENDS HERE-->
@endsection
