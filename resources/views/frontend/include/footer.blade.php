<!--FOOTER FROM HERE-->
<footer class="container-fluid" style="background-color: rgb(241, 241, 241);">
        <div class="row no-gutters text-success justify-content-around p-2">
          <div class="col-12 col-md-3 mt-3">
            <p style="font-family: 'Open Sans Bold'; font-size: 18px; text-transform:uppercase;">
              {{ __('msg.link') }}
            </p>
            <ul id="footerlink" class="list-unstyled" style="font-family: 'Open Sans SemiBold'; font-size: 13px;">
              <li>
                <a href="{{ route('/') }}" class="text-success">{{ __('msg.home') }}</a>
              </li>
              <li>
                <a href="buy-ticket" class="text-success">{{ __('msg.buyticket') }}</a>
              </li>
              <li>
                <a href="schedule" class="text-success">{{ __('msg.trainschedule') }}</a>
              </li>
              <li class="text-muted" style="font-size: 16px;">{{ __('msg.help') }}</li>
              <li>
                <a href="faqs#faq-tickets" class="text-success">{{ __('msg.ticket') }}</a>
              </li>
              <li>
                <a href="faqs#faq-train" class="text-success">{{ __('msg.train') }}</a>
              </li>
              <li>
                <a href="faqs#faq-station" class="text-success">{{ __('msg.station') }}</a>
              </li>
              <li class="text-muted" style="font-size: 16px;">{{ __('msg.user') }}</li>
              <li>
                <a href="register" class="text-success">{{ __('msg.register') }}</a>
              </li>
              <li>
                <a href="login" class="text-success">{{ __('msg.login') }}</a>
              </li>
            </ul>

          </div>
          <div class="col-12 col-md-3 mt-3">
            <p style="font-family: 'Open Sans Bold'; font-size: 18px;">
              SOCIAL MEDIA
            </p>
            <p style="color: grey;">
              <i class="fa fa-facebook" style="width: 30px; height: auto;"></i>
              <i class="fa fa-twitter" style="width: 30px; height: auto;"></i>
              <i class="fa fa-instagram" style="width: 30px; height: auto;"></i>
            </p>
            <p>
              <span style="font-family: 'Open Sans Bold'; font-size: 18px;">SUBSCRIBE</span>

              <form class="form-inline" method="POST" action="">
                <label class="sr-only" for="inlineFormInputGroup">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <input type="email" class="form-control input-group-text bg-white" placeholder="Your Email@mail" required>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
              </form>
            </p>
          </div>
          <div class="col-12 col-md-3 mt-3">
            <p style="font-family: 'Open Sans Bold'; font-size: 18px; text-transform:uppercase;">{{ __('msg.disclaimer') }}</p>
            <p style="font-family: 'Open Sans SemiBold'; font-size: 13px;">
                {{ __('msg.disclaimerbody') }}
            </p>
          </div>
        </div>
        <div class="w-100 text-center text-grey">
          <p><span>&copy;</span> 2019.{{ __('msg.proudly') }}<img src="{{ asset('frontend/images/flag.png') }}">
          </p>
        </div>
      </footer>
    <!--FOOTER ENDS HERE-->
