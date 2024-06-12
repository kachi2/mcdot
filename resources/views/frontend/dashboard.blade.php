
@extends('layouts.app')
@section('contents')

@include('frontend.minimal.slider')
<section class="location-form-section">
	<div class="auto-container">
		<div class="inner-container">
			<div class="inner-content">
				<h3>Find CareGivers Jobs</h3>
				<!-- Postal Form Two -->
				<div class="postal-form-two">
					<form method="post" action="http://t.commonsupport.com/care-giver/contact.html">
						<div class="form-group">
							<input type="email" name="email" value="" placeholder="Enter city or state" required="">
							<button type="submit" class="theme-btn btn-style-three"><span class="txt"> <i class="fa fa-search"></i> Search  Jobs</span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
	<section class="services-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Senior Home Care & Elder Care Services</h2>
				<div class="bold-text">Our team of registered nurses and skilled healthcare professionals provide in-home nursing to help manage and coordinate recovery at home.</div>
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
											<h3><a href="elderly-service.html">{{$tag->title}}</a></h3>
											<div class="text">{{$tag->content}}</div>
											<div class="btn-box">
												<a href="elderly-service.html" class="theme-btn care-btn">Types of Cares<span class="icon flaticon-logout"></span></a>
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
							<a href="elderly-service.html"><img src="{{asset('images/'.$service->metas)}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="elderly-service.html">{{$service->title}}</a></h3>
							<div class="text">{!! substr($service->contents, 0, 150) !!}... read More</div>
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
				<div class="image-layer" style="background-image:url({{asset('asset/images/background/pattern-1.png')}}); border-radius:5%" ></div>
				<div class="content-box">
				{!!$settings->about!!}
				<a href="" class="btn btn-primary"> Begin Registration</a>
				</div>
				
			</div>
			
			<!--Image Column-->
        	<div class="image-column" style="background-image: url({{asset('asset/images/resource/video-img.jpg')}}); border-radius:5%">
			
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
				<span  class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a"> {{$job->location_id}}</span>  
				 <span class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a"> {{$job->job_type}}</span>  
				  <span class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a"> {{$job->salary_range}} </span> <br>
				 <p class="pt-2">{!! substr($job->job_details,0,200) !!}...</p>
            </div>
            <div class="card-footer bg-transparent border-0 pb-2 pb-lg-4">
                <span class="">
                  <a href="{{route('job-details', $job->hashid)}}" class="badge w-100 bg-info p-3" style="color:#fff">View Job Details</a> 
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
	{{-- <section class="testimonial-section">
		<div class="auto-container">
			<!-- Sec Title Two -->
			<div class="sec-title-two light centered">
				<h2>What Our Clients Says</h2>
			</div>
			
			<div class="testimonial-carousel owl-carousel owl-theme">
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content-box">
							<div class="text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, psam volu ptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolorqui dolorem ipsum quia dolo.</div>
						</div>
						<div class="lower-box">
							<div class="box-inner">
								<div class="image">
									<img src="images/resource/author-1.jpg" alt="" />
								</div>
								<h3>Mark John - <span>CEO Falcon</span></h3>
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
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content-box">
							<div class="text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, psam volu ptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolorqui dolorem ipsum quia dolo.</div>
						</div>
						<div class="lower-box">
							<div class="box-inner">
								<div class="image">
									<img src="images/resource/author-1.jpg" alt="" />
								</div>
								<h3>Mark John - <span>CEO Falcon</span></h3>
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
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content-box">
							<div class="text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, psam volu ptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolorqui dolorem ipsum quia dolo.</div>
						</div>
						<div class="lower-box">
							<div class="box-inner">
								<div class="image">
									<img src="images/resource/author-1.jpg" alt="" />
								</div>
								<h3>Mark John - <span>CEO Falcon</span></h3>
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
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content-box">
							<div class="text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, psam volu ptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolorqui dolorem ipsum quia dolo.</div>
						</div>
						<div class="lower-box">
							<div class="box-inner">
								<div class="image">
									<img src="images/resource/author-1.jpg" alt="" />
								</div>
								<h3>Mark John - <span>CEO Falcon</span></h3>
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
			
			</div>
			
		</div>
	</section> --}}

	
	<!-- News Section -->
	<section class="news-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title style-two">
				<div class="clearfix">
					<div class="pull-left">
						<h2>Latest Blogs</h2>
						{{-- <div class="text">CareGiver Community Reviews</div> --}}
					</div>
					<div class="pull-right">
						<a href="blog.html" class="view-blogs">View all blogs</a>
					</div>
				</div>
			</div>
			
			
			<div class="row clearfix">
				
				<!-- News Block -->
				@forelse($blogs as $blog)
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="blog-detail.html"><img src="{{asset('images/'.$blog->image)}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="post-date">{{$blog->created_at->format('M d, Y')}}</div>
							<h3><a href="blog-detail.html">{{$blog->title}} </a></h3>
							<div class="text">{!!substr($blog->contents, 0,100)!!}</div>
							<a href="blog-detail.html" class="read-more">Continue Reading ...</a>
						</div>
					</div>
				</div>
				@empty 
				@endforelse
				
				<!-- News Block -->
			
			</div>
			
		</div>
	</section>
	<!-- End News Section -->
	
	


@endsection
