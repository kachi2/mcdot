@extends('layouts.app')
@section('contents')
	
<section class="page-title page-title-layout1 bg-overlay">
	<div class="bg-img"><img src="assets/images/page-titles/1.jpg" alt="background"></div>
	<div class="container">
	  <div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
		  <h1 class="pagetitle__heading">GET TO KNOW US</h1>
		  <p class="pagetitle__desc">About MCDot Healthcare Services Ltd
		  </p>
	
		</div><!-- /.col-xl-5 -->
	  </div><!-- /.row -->
	</div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- ========================
	About Layout 1
  =========================== -->
  <section class="about-layout1 pb-0">
	<div class="container">
	  <div class="row">
		<div class="col-sm-12 col-md-12 col-lg-6">
		  <div class="heading-layout2">
			<h3 class="heading__title mb-40">What Do We Do?</h3>
		  </div><!-- /heading -->
		</div><!-- /.col-12 -->
	  </div><!-- /.row -->
	  <div class="row">
		<div class="col-sm-12 col-md-12 col-lg-6">
		  <div class="about__Text">
			<p class="mb-30">We offer temporary staffing solutions for the health and care industry. The lack of personnel in this field is a well-known issue. We've identified this gap in the market and have leveraged our expertise to start a business that effectively meets the staffing needs of health and care organizations, regardless of their size, during their peak times.

				MCDot Healthcare recognizes the difficulties in dealing with staff shortages, and as a result, we provide temporary staffing services to aid healthcare organizations during their most critical moments. Dedicated to enabling individuals and organizations to achieve outstanding healthcare services and staffing solutions that pave the way for better, healthier lives.</p>
			<p class="mb-30">We will work with you to develop individualised care plans. We are committed to being the region’s premier healthcare network providing patient
			  centered care that inspires clinical and service excellence.</p>
			<div class="d-flex align-items-center mb-30">
			  <a href="doctors-grid.html" class="btn btn__primary btn__outlined btn__rounded mr-30">
				Meet Our Doctors</a>
			  <img src="assets/images/about/singnture.png" alt="singnture">
			</div>
		  </div>
		</div><!-- /.col-lg-6 -->
		<div class="col-sm-12 col-md-12 col-lg-6">
		  <div class="video-banner">
			<img src="{{asset('/assets/mans.jpg')}}" alt="about">
		
		  </div><!-- /.video-banner -->
		</div><!-- /.col-lg-6 -->
	  </div><!-- /.row -->
	</div><!-- /.container -->
  </section><!-- /.About Layout 1 -->

  <!-- ======================
  Features Layout 1
  ========================= -->
  <section class="features-layout1 pt-130 pb-50 mt--90">
	<div class="bg-img"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>
	<div class="container">
	  <div class="row mb-40">
		<div class="col-sm-12 col-md-12 col-lg-5">
		  <div class="heading__layout2">
			<h3 class="heading__title">Our Core Values.</h3>
		  </div>
		</div><!-- /col-lg-5 -->
		<div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
		  <p class="heading__desc font-weight-bold">Our company is an ecosystem with a group of people within different sections of the business that work towards a common goal. It is important for the company to identify and promote its core values. These core values drive critical actions and behaviours within the organisation. The company’s core values will be visible in every aspect of the organisation and its culture.
		  </p>
	
		</div><!-- /.col-lg-6 -->
	  </div><!-- /.row -->
	  <div class="row">
		<!-- Feature item #1 -->
		<div class="col-sm-6 col-md-6 col-lg-3">
		  <div class="feature-item">
			<div class="feature__content">
		
			  <h4 class="feature__title">Disruptive Innovation to challenge convention, continually seeking new and innovative approaches to improve services</h4>
			</div><!-- /.feature__content -->
			<a href="#" class="btn__link">
			  <i class="icon-arrow-right icon-outlined"></i>
			</a>
		  </div><!-- /.feature-item -->
		</div><!-- /.col-lg-3 -->
		<!-- Feature item #2 -->
		<div class="col-sm-6 col-md-6 col-lg-3">
		  <div class="feature-item">
			<div class="feature__content">
	
			  <h4 class="feature__title">Collaboration and power of teamwork, working together to achieve shared success </h4>
			</div><!-- /.feature__content -->
			<a href="#" class="btn__link">
			  <i class="icon-arrow-right icon-outlined"></i>
			</a>
		  </div><!-- /.feature-item -->
		</div><!-- /.col-lg-3 -->
		<!-- Feature item #3 -->
		<div class="col-sm-6 col-md-6 col-lg-3">
		  <div class="feature-item">
			<div class="feature__content">
	
			  <h4 class="feature__title">Opportunity to inspire, support, and invest in people, recognising that our growth contributes to our collective accomplishments</h4>
			</div><!-- /.feature__content -->
			<a href="#" class="btn__link">
			  <i class="icon-arrow-right icon-outlined"></i>
			</a>
		  </div><!-- /.feature-item -->
		</div><!-- /.col-lg-3 -->
		<!-- Feature item #4 -->
		<div class="col-sm-6 col-md-6 col-lg-3">
		  <div class="feature-item">
			<div class="feature__content">
		
			  <h4 class="feature__title">
				Relentless to be the best, pursuing excellence in everything we do</h4>
			</div><!-- /.feature__content -->
			<a href="#" class="btn__link">
			  <i class="icon-arrow-right icon-outlined"></i>
			</a>
		  </div><!-- /.feature-item -->
		</div><!-- /.col-lg-3 -->
		<!-- Feature item #5 -->

	
	  </div><!-- /.row -->

	</div><!-- /.container -->
  </section><!-- /.Features Layout 1 -->

  <!-- ======================
   Work Process 
  ========================= -->
  <section class="work-process work-process-carousel pt-130 pb-5 bg-overlay bg-overlay-secondary ">
	<div class="bg-img"><img src="{{asset('assets/images/banners/1.jpg')}}" alt="background"></div>
	<div class="container ">
	  <div class="row heading-layout2">
		<div class="col-12">
		  <h2 class="heading__subtitle color-primary">What we offer?.</h2>
		</div><!-- /.col-12 -->
		<div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
		  <h3 class="heading__title color-white">Our Solutions.!
		  </h3>
		</div><!-- /.col-xl-5 -->
	  </div><!-- /.row -->
	  <div class="row">
		<div class="col-12">
		  <div class="carousel-container mt-90">
			<div class="slick-carousel"
			  data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "infinite":false, "arrows": false, "dots": false, "responsive": [{"breakpoint": 1200, "settings": {"slidesToShow": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
			  <!-- process item #1 -->
			  <div class="process-item">
				<h4 class="process__title">Recruitment and Staff Development</h4>
				<p class="process__desc">
					To address staff shortages and build a strong workforce, SEED Healthcare can invest in comprehensive recruitment strategies and prioritise staff development. By attracting qualified healthcare professionals through competitive compensation packages and growth opportunities, the business can ensure a skilled and motivated team to meet growing demands. .</p>
			
			  </div><!-- /.process-item -->
			  <!-- process-item #2 -->
			  <div class="process-item">
				
				<h4 class="process__title">Quality Training Programs</h4>
				<p class="process__desc">
					Recognising the importance of continuous training and education, Seed Healthcare can further establish robust training programs for its staff. Already having partnered with reputable organisations like the Crisis Prevention Institute (CPI) and Continuing Professional Development (CPD), Seed Healthcare can ensure that its trainers deliver exceptional training, further enhancing the expertise and skills of the workforce.</p>
		
			  </div><!-- /.process-item -->
			  <!-- process-item #3 -->
			  <div class="process-item">
				<h4 class="process__title">Diversified Home Care Services</h4>
				<p class="process__desc">
					To capitalise on the expanding presence in the healthcare sector and cater to the aging population, SEED Healthcare can diversify its home care services to address a wide range of needs. By offering specialised care plans for seniors, individuals with chronic conditions, and those requiring post-hospitalisation support, the business can create tailored solutions that cater to diverse client requirements.</p>
		
			  </div><!-- /.process-item -->
			  <!-- process-item #4 -->
			  <div class="process-item">
		
				<h4 class="process__title">Innovative Technology Integration</h4>
				<p class="process__desc">
					To stay at the forefront of the healthcare industry, Seed Healthcare can leverage innovative technologies. By incorporating telehealth solutions, remote monitoring tools, and digital health platforms, the business can enhance the efficiency of its services, expand reach, and improve client outcomes.</p>
		
			  </div><!-- /.process-item -->
			  <!-- process-item #5 -->
			</div><!-- /.carousel -->
		  </div>
		</div><!-- /.col-12 -->
	  </div><!-- /.row -->
	</div><!-- /.container -->
  </section><!-- /.Work Process -->
  <div class="p-5">

  </div>



@endsection