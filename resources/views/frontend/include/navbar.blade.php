<!--NAV FROM HERE-->
<nav id="mainnavbar" class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="{{ route('/') }}">
            <div class="d-inline-block rounded" style="width: 36px; height: 36px; background-color: white;">
              <img src="{{ asset('frontend/images/logo.png' )}}" id="navbar-img" width="30" height="30" class="d-inline-block rounded" alt="logo">
            </div>
              AMTS
          </a>
        <div class="row d-lg-none">
        <ul class="list-unstyled list-inline">
        <li class="list-inline-item">
            <a href="buy-ticket" class="btn btn-warning mr-0 pb-n4" id="navdownloadbtn" role="button">{{ __('msg.buyticket')}}</a>
        </li>
        @php $locale = session()->get('locale'); @endphp
        <li class="nav-item list-inline-item dropdown">
          <a id="navbarDropdown" class="btn btn-outline-light my-2 my-sm-0 dropdown-toggle" href="#" id="navbtn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              @switch($locale)
                              @case('ha')
                              Hausa
                              @break
                              @case('ig')
                              Igbo
                              @break
                              @case('yor')
                              Yoruba
                              @break
                              @default
                              Language
                          @endswitch
              <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
              @php $active = 'active'; @endphp
              <a class="dropdown-item" href="lang/yor" >
                  {{ __('Yoruba') }}
              </a>
              <a class="dropdown-item" href="lang/en" >
                  {{ __('English') }}
              </a>
          </div>
      </li>
        </ul>
          </div>


          <button class="navbar-toggler btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#navbartoggler" aria-controls="navbartoggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbartoggler">
            <ul class="navbar-nav list-inline ml-auto my-2 my-lg-0 d-lg-none">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item list-inline-item">
                        <a class="btn btn-outline-light my-2 my-sm-0 mr-0 mr-md-1" href="{{ route('login') }}" id="navbtn" role="button">{{ __('msg.login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item list-inline-item">
                            <a class="btn btn-outline-light mt-3" href="{{ route('register') }}" id="navbtn" role="button">{{ __('msg.register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item list-inline-item dropdown">
                        <a id="navbarDropdown" class="btn btn-outline-light my-2 my-sm-0 mr-3 dropdown-toggle" href="#" id="navbtn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->surname }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="home">
                                {{ __('msg.myprofile') }}
                            </a>
                            <a class="dropdown-item" href="editprofile">
                                {{ __('msg.editprofile') }}
                            </a>
                            <a class="dropdown-item" href="buy-ticket">
                                {{ __('msg.buyticket') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('ticket-history')}}#unpaid">
                                {{ __('Unpaid Tickets') }}
                                <span class="badge badge-danger font-weight-bold"> {{ Auth::user()->unpaid_ticket }} </span>
                            </a>
                            <a class="dropdown-item" href="ticket-history">
                                {{ __('msg.tickethistory') }}
                            </a>
                            {{-- <a class="dropdown-item" href="#">
                                {{ __('msg.printticket') }}
                            </a> --}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('msg.logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-sm-0 ml-lg-5">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('/') }}">{{ __('msg.home')}} <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="schedule">{{ __('msg.trainschedule')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buy-ticket">{{ __('msg.buyticket')}}</a>
              </li>
              <li class="nav-item d-block d-lg-none">
                <a class="nav-link" href="faqs">{{ __('msg.help')}}</a>
                {{-- <span class="text-white" style="font-family: 'Open Sans SemiBold';">{{ __('msg.help')}}</span>
                  <hr class="w-85 mr-0" style="background-color:yellow;">
                    <ul class="list-unstyled navbar-nav ml-5">
                      <li class="list-unstyled-item nav-item p-0">
                        <a class="nav-link" href="faqs#faq-tickets">{{ __('msg.ticket')}}</a>
                        <hr class="w-85 mr-0" style="background-color:yellow;">
                      </li>
                      <li class="list-unstyled-item nav-item p-0">
                        <a class="nav-link" href="faqs#faq-train">{{ __('msg.train')}}</a>
                        <hr class="w-85 mr-0" style="background-color:yellow;">
                      </li>
                      <li class="list-unstyled-item nav-item p-0">
                        <a class="nav-link" href="faqs#faq-station">{{ __('msg.station')}}</a>
                      </li>
                    </ul>
                  <hr class="w-85 mr-0" style="background-color:yellow;"> --}}
              </li>
              <li class="dropdown nav-item d-none d-lg-inline-block">
                <a class="dropdown-toggle nav-link" href="faqs" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                    {{ __('msg.help')}}
                </a>
                <div class="dropdown-menu text-success" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="faqs#faq-tickets">{{ __('msg.ticket')}}</a>
                  <a class="dropdown-item" href="faqs#faq-train">{{ __('msg.train')}}</a>
                  <a class="dropdown-item" href="faqs#faq-station">{{ __('msg.station')}}</a>
                </div>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="{{ route('/') }}#section2-about">{{ __('msg.about')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('/') }}#section2-about">{{ __('msg.contact')}}</a>
              </li>
              @php $locale = session()->get('locale'); @endphp
              <li class="nav-item list-inline-item dropdown d-none d-lg-block ml-4">
                <a id="navbarDropdown" class="btn btn-outline-light my-2 my-sm-0 dropdown-toggle" href="#" id="navbtn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    @switch($locale)
                                    @case('ha')
                                    Hausa
                                    @break
                                    @case('ig')
                                    Igbo
                                    @break
                                    @case('yor')
                                    Yoruba
                                    @break
                                    @default
                                    Language
                                @endswitch
                    <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                    @php $active = 'active'; @endphp
                    <a class="dropdown-item" href="lang/yor" >
                        {{ __('Yoruba') }}
                    </a>
                    <a class="dropdown-item" href="lang/en" >
                        {{ __('English') }}
                    </a>
                </div>
            </li>
            </ul>

              <ul class="navbar-nav list-inline ml-auto my-2 my-lg-0 d-none d-lg-block">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item list-inline-item">
                        <a class="btn btn-outline-light my-2 my-sm-0 mr-0 mr-md-1" href="{{ route('login') }}" id="navbtn" role="button">{{ __('msg.login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item list-inline-item">
                            <a class="btn btn-outline-light my-2 my-sm-0" href="{{ route('register') }}" id="navbtn" role="button">{{ __('msg.register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item list-inline-item dropdown">
                        <a id="navbarDropdown" class="btn btn-outline-light my-2 my-sm-0 mr-3 dropdown-toggle" href="#" id="navbtn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->surname }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="home">
                                {{ __('msg.myprofile') }}
                            </a>
                            <a class="dropdown-item" href="editprofile">
                                {{ __('msg.editprofile') }}
                            </a>
                            <a class="dropdown-item" href="buy-ticket">
                                {{ __('msg.buyticket') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('ticket-history')}}#unpaid">
                                {{ __('Unpaid Tickets') }}
                                <span class="badge badge-danger font-weight-bold"> {{ Auth::user()->unpaid_ticket }} </span>
                            </a>
                            <a class="dropdown-item" href="ticket-history">
                                {{ __('msg.tickethistory') }}
                            </a>
                            {{-- <a class="dropdown-item" href="#">
                                {{ __('msg.printticket') }}
                            </a> --}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('msg.logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

          </div>
      </nav>
    <!--NAV ENDS HERE-->
