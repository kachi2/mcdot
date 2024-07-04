<footer class="footer">
    <div class="footer-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-3">
            <div class="footer-widget-about">
                <a href="{{route('index')}}"><img src="{{asset('assets/whitelogo.png')}}"  alt=""  width="150px"/></a>
              <p class="color-gray">{!!substr($settings->about, 0,100) !!}
              </p>
            
            </div><!-- /.footer-widget__content -->
          </div><!-- /.col-xl-2 -->
          <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">
            <div class="footer-widget-nav">
              <h6 class="footer-widget__title"></h6>
              <nav>
                <ul class="list-unstyled">
                    @foreach ($menus as $menu )
                    <li > 
                    @if($menu->name == 'Home') <a style="color:#d6d2d2" href="{{route('index')}}">{{$menu->name}}</a> @else <a style="color:#d6d2d2" href="{{route('pages', encrypt($menu->id))}}">{{$menu->name}}</a> @endif
                   </li>
                    @endforeach
                </ul>
              </nav>
            </div><!-- /.footer-widget__content -->
          </div><!-- /.col-lg-2 -->
          <div class="col-sm-6 col-md-6 col-lg-2">
            <div class="footer-widget-nav">
              <h6 class="footer-widget__title">Links</h6>
              <nav>
                <ul class="list-unstyled">
                    @foreach ($menus as $menu )
                    <li > 
                    @if($menu->name == 'Home') <a style="color:#d6d2d2" href="{{route('index')}}">{{$menu->name}}</a> @else <a style="color:#d6d2d2" href="{{route('pages', encrypt($menu->id))}}">{{$menu->name}}</a> @endif
                   </li>
                    @endforeach
                </ul>
              </nav>
            </div><!-- /.footer-widget__content -->
          </div><!-- /.col-lg-2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="footer-widget-contact" style="background: #1d2a4d; color:#fff">
              <h6 class="footer-widget__title" style="color:#fff">Quick Contacts</h6>
              <ul class="contact-list list-unstyled">
                <li>If you have any questions or need help, feel free to contact with our team.</li>
                <li>
                  <a href="tel:01061245741" class="phone__number" style="color:#fff">
                    <i class="icon-phone"></i> <span>{{$settings->site_phone}}</span>
                  </a>
                </li>
                <p style="color:#d6d2d2"><i class="fa fa-map-marker"></i> {{$settings->address}}.</p>
              </ul>
              <div class="d-flex align-items-center">
                <ul class="social-icons list-unstyled mb-0">
                    <p style="color:#d6d2d2"><i class="fa fa-envelope-o"></i>  {{$settings->site_email}}</p>
               
                </ul><!-- /.social-icons -->
              </div>
            </div><!-- /.footer-widget__content -->
          </div><!-- /.col-lg-2 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.footer-primary -->
    <div class="footer-secondary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <span class="fz-14">  {{$settings->site_copyright}}</span>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-6 col-lg-6">
            <nav>
              <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end mb-0">
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Cookies</a></li>
              </ul>
            </nav>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.footer-secondary -->
  </footer><!-- /.Footer -->

  @include('layouts.js')