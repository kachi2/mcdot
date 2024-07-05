
@extends('layouts.app')
@section('contents')


@include('frontend.minimal.slider')

<section class="features-layout4 py-0">
  <div class="carousel-container">
	<div class="slick-carousel m-slides-0"
	  data-slick='{"slidesToShow": 2, "slidesToScroll": 4,  "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
	  <!-- feature item #1 -->
	  <div class="feature-item d-flex">
		<div class="feature__icon">
		  <i class="icon-care"></i>
		</div><!-- /.feature__icon -->
		<div class="feature__content">
		  <h4 class="feature__title">LOOKING FOR STAFF?</h4>
		  <p class="feature__desc">If you are in need of quality nursing staff for short notice shifts, long term contracts, temporary to permanent work, permanent placements and specialist roles we can help..</p>
		  <a href="#" class="btn btn__link btn__secondary">
			<span>Start Hiring Now</span>
			<i class="icon-arrow-right"></i>
		  </a>
		</div><!-- /.feature-content -->
	  </div><!-- /.feature-item -->
	  <!-- fancybox item #2 -->
	  <div class="feature-item d-flex">
		<div class="feature__icon">
		  <i class="icon-broken2"></i>
		</div><!-- /.feature__icon -->
		<div class="feature__content">
		  <h4 class="feature__title">LOOKING FOR WORK?</h4>
		  <p class="feature__desc">We are fast becoming a national company with a local feel and we believe strongly in investing in our workforce, whether they be our internal staff or our candidates. </p>
		  <a href="#" class="btn btn__link btn__secondary">
			<span>Register with Us</span>
			<i class="icon-arrow-right"></i>
		  </a>
		</div><!-- /.feature-content -->
	  </div><!-- /.feature-item -->
	  <!-- fancybox item #3 -->
	</div><!-- /.slick-carousel -->
  </div><!-- /.carousel-container -->
</section><!-- /.features-layout4 -->

<!-- ========================
  About Layout 4
=========================== -->

<!-- ======================
Features Layout 1
========================= -->
<section class="features-layout1 pt-130 pb-50 mt--90">
  <div class="bg-img"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>
  <div class="container">
	<div class="row mb-40">
	  <div class="col-sm-12 col-md-12 col-lg-5">
		<div class="heading__layout2">
		  <img src="{{asset('/assets/dash.jpg')}}">
		</div>
	  </div><!-- /col-lg-5 -->
	  <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
		<h6>Effective, Efficient, Streamlined Healthcare Recruitment</h6>
		<p class="heading__desc font-weight-bold">We take great pride in serving as your dependable ally in the field of healthcare recruitment. Our achievements stem from the meticulous choice of skilled, committed, and devoted recruitment professionals. We pledge to align skilled individuals with suitable positions and work closely with our experienced advisors to identify the most suitable candidates for every project. With unwavering excellence in our services, we are capable of fulfilling your healthcare staffing requirements and beyond.
		</p>
		<div class="d-flex flex-wrap align-items-center mt-40 mb-30">
		  <a href="#" class="btn btn__secondary btn__link">
			<i class="icon-arrow-right icon-filled"></i>
			<span> Find Jobs</span>
		  </a>


		  <a href="#" class="btn btn__secondary btn__link">
			<i class="icon-arrow-right icon-filled"></i>
			<span> Hire Top Candidates </span>
		  </a>
		</div>
	  </div><!-- /.col-lg-6 -->
	</div><!-- /.row -->
	<div class="row">
	  <!-- Feature item #1 -->

	  @forelse($tags as $tag)
	  <div class="col-sm-6 col-md-6 col-lg-4">
		<div class="feature-item">
		  <div class="feature__content">
			<div class="feature__icon">
			  <i class="icon-heart"></i>
			  <i class="icon-heart feature__overlay-icon"></i>
			</div>
			<h4 class="feature__title">{{$tag->content}}</h4>
		  </div><!-- /.feature__content -->
		  <a href="#" class="btn__link">
			<i class="icon-arrow-right icon-outlined"></i>
		  </a>
		</div><!-- /.feature-item -->
	  </div><!-- /.col-lg-3 -->
	  <!-- Feature item #2 -->
	  @empty
	  @endforelse
	

	
	
	
	</div><!-- /.row -->

  </div><!-- /.container -->
</section><!-- /.Features Layout 1 -->

<!-- ======================
 Work Process 
========================= -->
<section class="work-process work-process-carousel pt-130 pb-0 bg-overlay bg-overlay-secondary">
  <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
  <div class="container">
	<div class="row heading-layout4">
	  <div class="col-12">
		<h2 class="heading__subtitle color-primary"> HealthCare Job Categories.</h2>
	  </div><!-- /.col-12 -->
	  <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
		<h3 class="heading__title color-white">Popular Healthcare Jobs!
		</h3>
	  </div>
	</div><!-- /.row -->
	<div class="row">
	  <div class="col-12">
		<div class="carousel-container mt-90">
		  <div class="slick-carousel"
			data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "infinite":false, "arrows": false, "dots": false, "responsive": [{"breakpoint": 1200, "settings": {"slidesToShow": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
			<!-- process item #1 -->
			@forelse($categories as $cat)
			<div class="process-item">
			  <div class="process__icon">
				<img src="{{asset('assets/'.$cat->image)}}">
			  </div><!-- /.process__icon -->
			  <h4 class="process__title">{{$cat->name}}</h4>
			  <p class="process__desc">{{$cat->title}}</p>
			  <a href="{{route('users.jobs.category', $cat->hashid)}}" class="btn btn__secondary btn__link">
				<span>Browse Jobs</span>
				<i class="icon-arrow-right"></i>
			  </a>
			</div><!-- /.process-item -->
			@empty 
			@endforelse
	
		  </div><!-- /.carousel -->
		</div>
	  </div><!-- /.col-12 -->
	</div><!-- /.row -->
  </div><!-- /.container -->
  <div class="cta bg-primary">
	<div class="container">
	  <div class="row align-items-center">
		<div class="col-sm-12 col-md-2 col-lg-2">
		  <img src="assets/images/icons/alert.png" class="cta__img" alt="alert">
		</div><!-- /.col-lg-2 -->
		<div class="col-sm-12 col-md-7 col-lg-7">
		  <h4 class="cta__title">Calling all Healthcare Assistants!</h4>
		  <p class="cta__desc">
			Are you an HCA looking for a new temporary contract or extra shifts? If so, we have opportunities in care homes nationwide with fantastic rates. Get in touch today for more information!</p>
		</div><!-- /.col-lg-7 -->
		<div class="col-sm-12 col-md-3 col-lg-3">
		  <a href="appointment.html" class="btn btn__secondary btn__secondary-style2 btn__rounded mr-30">
			<span>Register with Us</span>
			<i class="icon-arrow-right"></i>
		  </a>
		</div><!-- /.col-lg-3 -->
	  </div><!-- /.row -->
	</div><!-- /.container -->
  </div><!-- /.cta -->
</section><!-- /.Work Process -->

<!-- ======================
  Team
========================= -->
<section class="team-layout2 pb-80">
  <div class="container">
	<div class="row">
	  <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
		<div class="heading text-center mb-40">
		  <h3 class="heading__title">Latest Healthcare Jobs</h3>
		</div><!-- /.heading -->
	  </div><!-- /.col-lg-6 -->
	
	</div><!-- /.row -->
<div class="row mb-4">
	<a href="#" class="btn btn__secondary btn__link">
		<span> Browse all Jobs </span>
		<i class="icon-arrow-right icon-filled"></i>
	  </a> 
	  @php 
	  $array =['primary', 'secondary', 'warning', 'success', 'primary', 'secondary', 'info', 'primary', 'secondary', 'warning', 'success', 'primary', 'secondary', 'info'];

	  @endphp
	  @foreach ($categories as $cc )

	  <span class="btn-sm btn-{{$array[$cc->id]}} btn__rounded p-2 pr-3 pl-3 m-1 "> <a href="{{route('users.jobs.category', $cc->hashid)}}" style="color:#fff"> {{$cc->name}}</a></span>  
	  @endforeach
</div>
<div class="row">
	<!-- service item #1 -->
	@forelse ($jobs as $job)
	<div class="col-sm-12 col-md-6 col-lg-4">
	  <div class="service-item">
		<div class="service__icon pl-5" style="margin-bottom: 0px">
			<span><img src="{{asset('assets/'.$settings->logo)}}" width="50px"> </span>
			<span style="float:right; font-size:20px " class="pr-5 pt-4">
				<span class="badge bg-info" style="color:#fff"> {{$job->job_type}}  </span> 
			  </span>
		</div><!-- /.service__icon -->
		<div class="service__contnt pl-5 pb-5 pr-2" style="padding-left:20px">
		  <h4 class="service__title">{!! $job->title !!}</h4>
		  {{-- <p class="service__desc">
			<p>Category: <span style="color: brown">  {{$job->category->name}}</span> </p>
			Job Location: <span  class="p-1" > {{$job->location_id}}</span>  <br>
		 Job Type: <span class="p-1" > {{$job->job_type}}</span><br>  
		  Salary:<span class="p-1"> {{$job->salary_range}} </span> <br>
		
		  </p> --}}
		  <ul class="list-items list-items-layout1 list-unstyled">
			<li>Location: {{$job->location_id}}</li>
			<li>Job Type: {{$job->job_type}} </li>
			<li>Salary: {{$job->salary_range}}</li>
		  </ul>
		  <p class="">{!! substr($job->job_details,0,200) !!}...</p>
		  <a href="{{route('job-details', $job->hashid)}}" class="btn btn__secondary btn__outlined btn__rounded">
			<span>Read More</span>
			<i class="icon-arrow-right"></i>
		  </a>
		</div><!-- /.service__content -->
	  </div><!-- /.service-item -->
	</div><!-- /.col-lg-4 -->
@empty
@endforelse

  </div>
	{{-- <div class="row">
		<div class="fancybox-layout1">
			<div class="row">

				@foreach ($jobs as $job)
			  <div class="col-md-4">
				<!-- fancybox item #1 -->
			<div style="border:2px solid #e6e8eb" class="m-2" >
				<div class="card-header border-0 bg-transparent pt-3" style="display: flex;justify-content: space-between;">
					<span><img src="{{asset('assets/'.$settings->logo)}}" width="50px"> </span>
	
					<span style="float:right; top:2px;">
					  <span class="badge bg-info" style="color:#fff"> {{$job->job_type}}  </span> 
					</span>
				</div>
				<div class="fancybox-item d-flex" style="border:1px solid #e6e8eb6e">
				
				  <div class="fancybox__content">
					<h4 style="font-family:Arial, Sans-serif; font-weight:bold;">{!! $job->title !!}</h4> 
					<p>Category: <span style="color: brown">  {{$job->category->name}}</span> </p>
					Job Location: <span  class="p-1" > {{$job->location_id}}</span>  <br>
				 Job Type: <span class="p-1" > {{$job->job_type}}</span><br>  
				  Salary:<span class="p-1"> {{$job->salary_range}} </span> <br>
				 <p class="pt-2">{!! substr($job->job_details,0,200) !!}...</p>
				 <a href="{{route('job-details', $job->hashid)}}" class=" btn_rounded btn-primary pr-4 pl-4 py-2 px-3" style="color:#fff; border-radius:5px">read more</a> 
				  </div><!-- /.fancybox-content -->
				</div><!-- /.fancybox-item -->
			  </div><!-- /.col-md-6 -->		
			</div>	
			  @endforeach
			</div><!-- /.row -->
		  </div>
	</div><!-- /.row --> --}}
  </div><!-- /.container -->
</section><!-- /.Team -->

<!-- ==========================
	contact layout 5

  Testimonials layout 2
  =========================  -->
{{-- <section class="testimonials-layout2 pt-130 pb-40">
  <div class="container">
	<div class="testimonials-wrapper">
	  <div class="row">
		<div class="col-sm-12 col-md-12 col-lg-5">
		  <div class="heading-layout2">
			<h3 class="heading__title">Inspiring Stories!</h3>
		  </div><!-- /.heading -->
		</div><!-- /.col-lg-5 -->
		<div class="col-sm-12 col-md-12 col-lg-7">
		  <div class="slider-with-navs">
			<!-- Testimonial #1 -->
			<div class="testimonial-item">
			  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
				range of backgrounds and bring with them a diversity of skills and special interests. They also have
				registered nurses on staff who are available to triage any urgent matters, and the administration
				and support staff all have exceptional people skills”
			  </h3>
			</div><!-- /. testimonial-item -->
			<!-- Testimonial #2 -->
			<div class="testimonial-item">
			  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
				range of backgrounds and bring with them a diversity of skills and special interests. They also have
				registered nurses on staff who are available to triage any urgent matters, and the administration
				and support staff all have exceptional people skills”
			  </h3>
			</div><!-- /. testimonial-item -->
			<!-- Testimonial #3 -->
			<div class="testimonial-item">
			  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
				range of backgrounds and bring with them a diversity of skills and special interests. They also have
				registered nurses on staff who are available to triage any urgent matters, and the administration
				and support staff all have exceptional people skills”
			  </h3>
			</div><!-- /. testimonial-item -->
		  </div><!-- /.slick-carousel -->
		  <div class="slider-nav mb-60">
			<div class="testimonial__meta">
			  <div class="testimonial__thmb">
				<img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
			  </div><!-- /.testimonial-thumb -->
			  <div>
				<h4 class="testimonial__meta-title">Sami Wade</h4>
				<p class="testimonial__meta-desc">7oroof Inc</p>
			  </div>
			</div><!-- /.testimonial-meta -->
			<div class="testimonial__meta">
			  <div class="testimonial__thmb">
				<img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
			  </div><!-- /.testimonial-thumb -->
			  <div>
				<h4 class="testimonial__meta-title">Ahmed</h4>
				<p class="testimonial__meta-desc">Web Inc</p>
			  </div>
			</div><!-- /.testimonial-meta -->
			<div class="testimonial__meta">
			  <div class="testimonial__thmb">
				<img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
			  </div><!-- /.testimonial-thumb -->
			  <div>
				<h4 class="testimonial__meta-title">Sonia Blake</h4>
				<p class="testimonial__meta-desc">Web Inc</p>
			  </div>
			</div><!-- /.testimonial-meta -->
		  </div><!-- /.slider-nav -->
		</div><!-- /.col-lg-7 -->
	  </div><!-- /.row -->
	</div><!-- /.testimonials-wrapper -->
  </div><!-- /.container -->
</section> --}}

<!-- ========================
 gallery
=========================== -->


@endsection
