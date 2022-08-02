<!--SECTION1 SLIDER FROM HERE-->
<div class="container-fluid section1">
          <div class="container mx-auto align-self-center">
            <div class="row text-center justify-content-center align-items-center">
              <div class="carousel slide col-10 col-md-6 pb-n5 pb-lg-0 mb-n5 mb-lg-4" data-ride="carousel" data-pause="false" data-interval="5500">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('frontend/images/speed1.png') }}" class="img-fluid d-block w-100" alt="No queue, No waiting!"/>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('frontend/images/phone.png') }}" class="img-fluid d-block w-100" alt="No queue, No waiting!"/>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('frontend/images/schedule.png') }}" class="img-fluid d-block w-100" alt="No queue, No waiting!"/>
                  </div>
                </div>
              </div>
              <div class="carousel slide carousel-fade col-10 col-md-6 mt-4 mt-md-0 pt-4 pt-md-0 pb-n5 pb-lg-0 text-light text-wrap" data-ride="carousel" data-pause="false" data-interval="5450">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div>
                          <p class="h2 h1-lg font-weight-bolder"><b>{{ __('msg.Noqueue')}}</b></p>
                          <p class="text-left">{{ __('msg.Noqueue1')}}</p>
                          <p class="text-left">{{ __('msg.Noqueue2')}}</p>
                          <br>
                           <a href="login" role="button" class="btn btn-warning btn-lg mr-0" id="slider1-btn">{{ __('msg.Getstarted')}}</a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div>
                          <p class="h2 h1-lg font-weight-bolder"><b>{{ __('msg.onthego')}}</b></p>
                          <p class="text-left">{{ __('msg.onthego1')}}</p>
                          <p class="text-left">{{ __('msg.onthego2')}}</p>
                          <br>
                           <a href="register" role="button" class="btn btn-warning btn-lg mr-0 my-1" id="slider1-btn">{{ __('msg.register')}}</a>
                           <a href="buy-ticket" role="button" class="btn btn-warning btn-lg mr-0 my-1" id="slider1-btn">{{ __('msg.buyticket')}}</a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div>
                          <p class="h2 h1-lg font-weight-bolder"><b>{{ __('msg.checktrain')}}</b></p>
                          <p class="text-left">{{ __('msg.checktrain1')}}</p>
                          <p class="text-left">{{ __('msg.checktrain2')}}</p>
                          <br>
                           <a href="schedule" role="button" class="btn btn-warning btn-lg mr-0 my-1" id="slider1-btn">{{ __('msg.trainschedule')}}</a>
                           <a href="faqs" role="button" class="btn btn-warning btn-lg mr-0 my-1" id="slider1-btn">{{ __('msg.help')}}</a>
                        </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  <!--SECTION1 SLIDER ENDS HERE-->
