@extends('layouts.app')
@section('contents')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/3.jpg)">
    	<div class="auto-container">
        	<h4 class="text-white">Contact Us</h4>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Form Section -->
	<section class="contact-form-section">
		<div class="auto-container">
			
			<!-- Title Box -->
			<div class="title-box">
				<h2>Contact {{$settings->site_name}}</h2>
				<div class="fw-bold">We are more than happy to speak to you regarding any of our services or for some general advice. To speak to a member of staff at Kare Plus, use the contact details below, alternatively leave us an email using the contact form to the right:</div>
				
			</div>
			
			<div class="row clearfix">
				
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Default Form -->
						<div class="default-form contact-form">
							<form method="post" action="" id="contact-form">
								
								<div class="form-group">
									<input type="text" name="username" value="" placeholder="Name*" required>
                                    <small> Enter your full Name</small>
								</div>
								
								<div class="form-group">
									<input type="text" name="phone" value="" placeholder="Phone Number*" required>
                                    <small> Enter Phone  Number</small>
								</div>
                                <div class="form-group">
									<select>
                                        <option> Select Services</option>
                                        @forelse($services as $service)
                                        <option> {{$service->title}} </option>
                                        @empty 
                                        @endforelse

                                    </select>
                                    <small> Select Services you need from us</small>
								</div>
								
								<div class="form-group">
									<input type="text" name="email" value="" placeholder="Email*" required>
                                    <small>Enter Email</small>
								</div>
								
								<div class="form-group">
									<textarea name="message" placeholder="Your Message"></textarea>
                                    <small> Please state your request</small>
								</div>
                                
								
                                <div class="col-lg-6 pt-6">  @php echo captcha_img() @endphp
                                    <div class="form-input-item form-group">
                                        <input type="text" class="form-control" placeholder="Enter captcha" name="captcha" required>
                                    </div>
                                </div>
								
								<div class="form-group">
									<button type="submit" class="theme-btn btn-style-one"><span class="txt">Submit now</span></button>
								</div>                                     
								
							</form>
						</div>
						<!--End Default Form-->
						
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="{{asset('asset/images/resource/contact-1.jpg')}}" alt="" />
						</div>
						<h3>Head Office:</h3>
						<div class="text">{{$settings->address}}</div>
						<ul>
							<li>Tel: <a href="tel:{{$settings->phone}}">{{$settings->site_phone}}</a></li>
							<li>Email: <a href="{{$settings->email}}<">{{$settings->site_email}}</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Form Section -->
	
	<!-- Map Section -->
    <section class="map-section">
        <div class="outer-container">
            <div class="map-outer">
                <div class="map-canvas"
                    data-zoom="12"
                    data-lat="-37.817085"
                    data-lng="144.955631"
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title=""
                    data-icon-path="images/icons/map-marker.png"
                    data-content="256, Victory Street,, New York <br> City, AZ 550067 <br> (1800) 456 7890 <br> Mon-Sat: 7.00an - 9.00pm <br> Sunday closed">
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->

@endsection