
@extends('layouts.app')
@section('contents')

@include('frontend.minimal.slider')
{{-- <section class="location-form-section">
	<div class="auto-container">
		<div class="inner-container">
			<div class="inner-content">
				<h3>Find Jobs</h3>
				<!-- Postal Form Two -->
				<div class="postal-form-two">
					<form method="post" action="http://t.commonsupport.com/care-giver/contact.html">
						<div class="form-group">
							<input type="email" name="email" value="" placeholder="Enter job type, categories or city" required="">
							<button type="submit" class="theme-btn btn-style-three"><span class="txt"> <i class="fa fa-search"></i> Search  Jobs</span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section> --}}
	<section class="services-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Senior Home Care & Elder Care Services</h2>
				<div class="pt-0 pb-3">Our team of registered nurses and skilled healthcare professionals provide in-home nursing to help manage and coordinate recovery at home.</div>
				{{-- <div class="text">Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close
					 the loop on focusing solely on the bottom line digital divide with additional clickthroughs from DevOps immersion along. additional clickthroughs from DevOps. </div>
			
					</div> --}}
			<div class="clearfix">
				
				<!-- Service Block -->
				@forelse($tags as $tag)
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{asset('images/'.$tag->image)}}" alt="" />
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<div class="content-inner">
											<h4><a href="" class="text-white text-bold">{{$tag->title}}</a></h4>
											<div class="text">{{$tag->content}}</div>
											<div class="btn-box">
												{{-- <a href="{{route('users.jobs')}}" class="theme-btn care-btn">Search Jobs<span class="icon flaticon-logout"></span></a> --}}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@empty
				@endforelse
				
			
				
			</div>
		</div>
	</section>
	<!-- End Services Section -->
	
	<!-- Services Section Two -->
	<section class="services-section-two">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title">
				<h2>What Services We offer</h2>
				<div class="text">A dependable, compassionate presence you can trust.</div>
			</div>
			
			<div class="services-carousel owl-carousel owl-theme">
				
				<!-- Service Block Two -->
			@forelse($services as $service)
				<div class="service-block-two">
					<div class="inner-box">
						<div class="image">
							<a href="{{route('users.service.category',$service->hashid)}}"><img src="{{asset('images/'.$service->image)}}" alt="" /></a>
						</div>
						
						<div class="lower-content">
							<h5 style="color:#000; border-bottom: 2px dashed #000; font-weight:500"  class="pb-1 "> {{$service->name}}</h5>
							<a   style="color:rgba(0, 0, 0, 0.622)" href="{{route('users.service.category',$service->hashid)}}">{{$service->title}}  <br> 
								<span class="  btn-outline-info"> ASK FOR SERVICE  <i class="fa fa-arrow-alt-circle-right"> </i></span> </a>
						
						</div>
					</div>
				</div>

				@empty 
				@endforelse
				
			</div>
			
		</div>
	</section>
	<!-- End Services Section Two -->
	
	<!-- Fluid Section One -->
    <section class="fluid-section-one">
    	<div class="outer-container clearfix">
        	
			<!--Content Column-->
			<div class="content-column">
				<div class="image-layer" style="background-image:url({{asset('asset/images/background/pattern-1.png')}}); " ></div>
				<div class="content-box">
				{!!$settings->about!!}
				{{-- <a href="{{route('contact')}}" class="btn btn-primary"> Begin Registration</a> --}}
				</div>
				
			</div>
			
			<!--Image Column-->
        	<div class="image-column" style="background-image: url({{asset('asset/images/resource/video-img.jpg')}}); ">
			
            </div>
            <!--End Image Column-->
			
		</div>
	</section>

	<section class="call-to-action-section-two p-3">
		<div class="auto-container">
			<div class="inner-container">
				<h2>Are You A Nurse Or A Health Care Assistant Looking For Work?</h2>
				<div class="text pb-3">Upload your details and we will contact you once you are qualified</div>
				<a href="contact.html" class="btn btn-info p-2">Get Started now and join our team</a>
			</div>
		</div>
	</section>
	
	<!-- Services Section Three -->
	<section class="trust-section" >
		<div class="auto-container p-3" style="background:rgb(239, 239, 246)" >
			<!-- Title Box -->
			<div class="title-box">
				<h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:2em">Latest Healthcare Jobs.</h2>
				<div> Apply with your correct documents</div>
			</div>
			<div class="row clearfix">
				
				<!-- Service Block Four -->
		@forelse ($jobs as $job)
	 <div class="col-sm-6 col-lg-4 pt-5">
        <div class="featured-card card h-100 hover-tiltY shadow-md">
            <div class="card-header border-0 bg-transparent pt-3" style="display: flex;justify-content: space-between;">
                <span><img src="{{asset('assets/'.$settings->logo)}}" width="100px"> </span>

                <span style="float:right; top:2px;">
                  <span class="badge bg-info" style="color:#fff"> {{$job->job_type}}  </span> 
                </span>
            </div>
            <div class="card-body py-0 py-lg-2">
				<h4 style="font-family:Arial, Sans-serif; font-weight:bold;">{!! $job->title !!}</h4> 
				<p>Category: <span style="color: brown">  {{$job->category->name}}</span> </p> 
				  {{-- <p style="color:#0099ff">{{$jo->company}}</p> --}}
				<span  class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a"> {{$job->location}}</span>  
				 <span class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a"> {{$job->job_type}}</span>  
				  <span class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a"> {{$job->salary_range}} </span> <br>
				 <p class="pt-2">{!! substr($job->job_details,0,200) !!}...</p>
            </div>
            <div class="card-footer bg-transparent border-0 pb-2 pb-lg-4">
                <span class="">
                  <a href="{{route('job-details', $job->hashid)}}" class="badge w-50 bg-info p-3" style="color:#fff">View Job Details</a> 
                </span>
  
			</div>
		</div>
	</div> 

			
	@empty
			
	@endforelse

			
		</div>
	</section>
	<!-- End Services Section Three -->
	

	
	<!-- Testimonial Section -->
	@if(count($testimonials) > 0)
	<section class="testimonial-section">
		<div class="auto-container">
			<!-- Sec Title Two -->
			<div class="sec-title-two light centered">
				<h2>What Our Clients Says</h2>
			</div>
			
			<div class="testimonial-carousel owl-carousel owl-theme">
				
				<!-- Testimonial Block -->
				@foreach ($testimonies as $testimony )
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content-box">
							<div class="text">{{$testimony->content}}</div>
						</div>
						<div class="lower-box">
							<div class="box-inner">
								<div class="image">
									<img src="images/resource/author-1.jpg" alt="" />
								</div>
								<h3> <span>{{$testimony->name}}</span></h3>
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
					</div>
				</div>	
				@endforeach
				
				
			
			
			
			</div>
			
		</div>
	</section>
	@endif

	
	<!-- News Section -->
	@if(count($blogs) > 0)
	<section class="news-section style-two">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title style-two">
				<div class="clearfix">
					<div class="pull-left">
						<h2>Latest Articles & Blogs</h2>
						{{-- <div class="text">CareGiver Community Reviews</div> --}}
					</div>
					{{-- <div class="pull-right">
						<a href="company-news.html" class="view-blogs">View all blogs</a>
					</div> --}}
				</div>
			</div>
			
			
			<div class="row clearfix">
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="company-news.html"><img src="images/resource/news-1.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="post-date">July 12, 2018</div>
							<h3><a href="company-news.html">Top 5 Tips for Caregivers During the Holidays </a></h3>
							<div class="text">Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis.</div>
							<a href="company-news.html" class="read-more">Continue Reading ...</a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="company-news.html"><img src="{{asset('asset/images/resource/news-2.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="post-date">July 12, 2018</div>
							<h3><a href="company-news.html">Caregiving Checklist for a New <br> Year</a></h3>
							<div class="text">Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis.</div>
							<a href="company-news.html" class="read-more">Continue Reading ...</a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				{{-- @forelse($blogs as $blog)
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="{{route('users.blogs.details', $blog->hashid)}}"><img src="{{asset('images/'.$blog->image)}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="post-date">{{$blog->created_at->format('M d, Y')}}</div>
							<h3><a href="{{route('users.blogs.details', $blog->hashid)}}">{{$blog->title}} </a></h3>
							<div class="text">{!!substr($blog->contents, 0,100)!!}</div>
							<a href="{{route('users.blogs.details', $blog->hashid)}}" class="read-more">Continue Reading ...</a>
						</div>
					</div>
				</div>
				@empty 
				@endforelse --}}
				
			</div>
			
		</div>
	</section>
	
	@endif
	<!-- End News Section -->
	
	


@endsection
