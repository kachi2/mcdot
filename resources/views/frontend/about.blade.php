@extends('layouts.app')
@section('contents')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/3.jpg)">
    	<div class="auto-container">
        	<h2>About us</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{route('index')}}">home</a></li>
                <li>About us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Mission Section -->
    <section class="mission-section style-two">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
			{!!  $about->about!!}
		</div>
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-3 col-md-4 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="{{asset('/asset/images/resource/mission.jpg')}}" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-9 col-md-8 col-sm-12">
					<div class="inner-column">
						{!! $about->aims_objective!!}
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Mission Section -->
	
	<!-- Call To Action Section -->
	<section class="call-to-action-section" style="background-image: url({{asset('/asset/images/background/1.png')}});">
		<div class="auto-container">
			<h2>Share Your Cares. Inspire Others.</h2>
			<div class="text">Join our movement to make the world a better place for seniors.</div>
			<a href="{{route('users.contact')}}" class="theme-btn btn-style-two"><span class="txt">contact us</span></a>
		</div>
	</section>
	<!-- End Call To Action Section -->
	
	<!-- Healthcare Section -->
	<section class="healthcare-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
					{!! $about->core_values!!}
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="{{asset('/asset/images/resource/care-1.jpg')}}" alt="" />
						</div>
						<div class="row clearfix">
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<div class="image image-2 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
									<img src="{{asset('/asset/images/resource/care-2.jpg')}}" alt="" />
								</div>
							</div>
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<div class="image image-3 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
									<img src="{{asset('/asset/images/resource/care-3.jpg')}}" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Healthcare Section -->
	
	<!-- Testimonial Section -->

	
	<!-- Team Section -->

	<!-- End Team Section -->

@endsection