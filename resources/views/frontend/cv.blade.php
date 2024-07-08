@extends('layouts.app')
@section('contents')
@section('styles')
<style>
input[type="file"] {
  /* display: none; */
}

.custom-file-upload {
  border: 1px solid #ccc;
  display: inline-block;
  padding: 20px 20px;
  cursor: pointer;
  width:100%;
  border-radius: 50px;
}
</style>
@endsection
<section class="page-title page-title-layout1 bg-overlay text-center pb-0">
    <div class="bg-img"><img src="{{asset('/assets/images/page-titles/3.jpg')}}" alt="background"></div>
    <div class="container">

    </div><!-- /.container -->
  </section><!-- /.page-title -->
  <section class="contact-layout1 pt-0 mt--100">
	<div class="container">
	  <div class="row">
	
		<div class="col-12">
		
		  <div class="contact-panel d-flex flex-wrap">
			<form class="contact-panel__form" method="post" action="{{route('store.cv')}}" id="contactForm">
				@csrf
			  <div class="row">
				<div class="col-sm-12">
					@if(Session::has('message'))
					<p class="p-3">
					<span class="alert alert-{{Session::get('alert')}} "> {{Session::get('message')}}</span>
				</p>
					@endif 
				  <h4 class="contact-panel__title">Easily Register with us</h4>
				  <p class="contact-panel__desc mb-30">Get access to all our job posting, register with us and our team will contact you once we have offer for you
				  </p>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
				  <div class="form-group">
					<i class="icon-user form-group-icon"></i>
					<input type="text" class="form-control" placeholder="Name" value="{{old('name')}}" id="contact-name" name="name"
					  required>
				  </div>
				</div><!-- /.col-lg-6 -->
				<div class="col-sm-6 col-md-6 col-lg-6">
				  <div class="form-group">
					<i class="icon-email form-group-icon"></i>
					<input type="email" class="form-control" placeholder="Email"  value="{{old('email')}}"  id="contact-email"
					  name="email" required>
				  </div>
				</div><!-- /.col-lg-6 -->
				<div class="col-sm-6 col-md-6 col-lg-6">
				  <div class="form-group">
					<i class="icon-phone form-group-icon"></i>
					<input type="text" class="form-control" placeholder="Phone"   value="{{old('phone')}}"  id="contact-Phone"
					  name="phone" required>
				  </div>
				</div><!-- /.col-lg-6 -->
			
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-phone form-group-icon"></i>
                      Attach Your CV (doc,docx,pdf,ppt,jpg,png)
                      <input type="file" class="form-control" name="cv" placeholder="cv*" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
				<div class="col-12">
				  <div class="form-group">
					<i class="icon-alert form-group-icon"></i>
					<textarea class="form-control" placeholder="Cover Letter" id="contact-message"
					  name="cover_letter"> {{old('cover_letter')}} </textarea>
				  </div>
				</div>

				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="form-group"> @php echo captcha_img() @endphp
					  <i class="icon-phone form-group-icon"></i>
					  <input type="text" class="form-control @error('captcha') is-invalid  @enderror" class="form-control" placeholder="Enter captcha" name="captcha" required>
					</div>
				  <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
					<span>Submit Request</span> <i class="icon-arrow-right"></i>
				  </button>
				  <div class="contact-result"></div>
				</div><!-- /.col-lg-12 -->
				
			  </div><!-- /.row -->
			</form>
			<div
			  class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
			  <div>
				<h4 class="contact-panel__title color-white">Contact {{$settings->site_name}}</h4>
				<p class="contact-panel__desc font-weight-bold color-white mb-30">Please feel free to contact our
				  friendly staff with any medical enquiry.
				</p>
				<ul class="contact__list list-unstyled mb-10">
					<li>
					  <i class="icon-phone"></i><a href="tel:+5565454117">Phone Number: {{$settings->site_phone}}</a>
					</li>
					<li>
					  <i class="icon-phone"></i><a href="tel:+5565454117">Phone Number: {{$settings->site_email}}</a>
					</li>
					<li>
					  <i class="icon-location"></i><a href="#">Location: {{$settings->address}}</a>
					</li>
				  </ul>
			  </div>
			  <div>
				

			  </div>
			</div>
		  </div>
		</div><!-- /.col-lg-6 -->
	  </div><!-- /.row -->
	</div><!-- /.container -->
  </section><!-- /.contact layout 1 -->
@endsection