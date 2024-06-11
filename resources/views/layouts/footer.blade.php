<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">
                
                <!--big column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">
                    
                        <!--Footer Column-->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('assets/'.$settings->logo)}}"  alt=""  width="150px"/></a>
                                </div>
                                <div class="text">{!!substr($settings->about, 0,100) !!}.</div>
                                <ul class="social-icons">
                                    <li><a href="{{$settings->facebook}}"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="{{$settings->linkedIn}}"><span class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="{{$settings->twitter}}"><span class="fab fa-twitter"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2>Quick links</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        @foreach ($menus as $menu )
                                        <li > 
                                        @if($menu->name == 'Home') <a style="color:#d6d2d2" href="{{route('index')}}">{{$menu->name}}</a> @else <a style="color:#d6d2d2" href="{{route('pages', encrypt($menu->id))}}">{{$menu->name}}</a> @endif
                                       </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                
                <!--big column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">
                    
                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h2>Contact Info</h2>
                                <div class="widget-content">
                                    <p style="color:#d6d2d2"><i class="fa fa-map-marker"></i> {{$settings->address}}.</p>
                                    <p style="color:#d6d2d2"><i class="fa fa-phone"></i>  {{$settings->site_phone}}</p>
                                    <p style="color:#d6d2d2"><i class="fa fa-envelope-o"></i>  {{$settings->site_email}}</p>
                                    <p style="color:#d6d2d2"><i class="fa fa-clock-o"></i>  {{$settings->opening_hours}}</p>
                                </div>
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <h2>Newsletter</h2>
                                <div class="text">Get Special offers & Discounts</div>
                                <!-- Newsletter Form -->
                                <div class="newsletter-form">
                                    <form method="post" action="http://t.commonsupport.com/care-giver/contact.html">
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="Enter your email address" required>
                                            <button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom clearfix">
            <div class="pull-left">
                <div class="copyright">    {{$settings->site_copyright}}</div>
            </div>
        </div>
        
    </div>
</footer>

</div>  
@include('layouts.js')