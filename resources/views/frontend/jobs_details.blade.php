@extends('layouts.app')
@section('contents')
@section('styles')
<style>
input[type="file"] {
  display: none;
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
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
          <p class="pagetitle__desc mb-30">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">   
             <input type="text" placeholder="Enter search terms" class="form-control">  
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3"> 
                    <select name="" id="">
                    <option> Select Job Type</option>
                    @forelse($types as $type)
                  <option value=""><span><a href="{{route('users.jobs.category', $type->hashid)}}"> {{$type->name}}</a> </option> 
                    @empty 
                    @endforelse 
                </select>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">  
                <button class="btn btn-primary btn__rounded"> Search Jobs</button>
                </div>  
             </div>
          </p>
          <a href="#content" class="scroll-down"><i class="fas fa-long-arrow-alt-down"></i></a>
        </div><!-- /.col-xl-8 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <section id="content" class=" pb-80">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar has-marign-left sticky-top">
              <div class="widget widget-schedule">
                <div class="widget-content">
                  <h4 class="widget__title"> Job Type</h4>
                  <ul class="time__list list-unstyled mb-0">
                    @forelse($types as $type)
                    <li><span><a href="{{route('users.jobs.category', $type->hashid)}}"> {{$type->name}}</a> </span><i class="icon-arrow-right"></i></li>
                    @empty 
                    @endforelse
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-schedule -->
              
              @forelse ($jobs as $job)
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="service-item">
                  <div class="service__icon " style="margin-bottom: 0px">
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
                    {{-- <p class="">{!! substr($job->job_details,0,200) !!}...</p> --}}
                    <a href="{{route('job-details', $job->hashid)}}" class="btn btn__secondary btn__outlined btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.service__content -->
                </div><!-- /.service-item -->
              </div><!-- /.col-lg-4 -->
          @empty
          @endforelse


              <div class="widget widget-help bg-overlay bg-overlay-secondary-gradient">
                <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="background"></div>
                <div class="widget-content">
                
                  <h4 class="widget__title"> No CV? No problem  </h4>
                  <p class="widget__desc">
                    You can apply for any of our jobs with or without a CV. 
                  </p>
                  <a href="" class="phone__number">
                    Register with Us
                  </a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-help -->
             
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
        <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="col-sm-12 col-md-6 col-lg-12">
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
                  <p class="">{!! $job->job_details !!}...</p>
                  {{-- <a href="{{route('job-details', $job->hashid)}}" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a> --}}
                  <form class="contact-panel__form" method="post" action="{{route('apply-job',$job->hashid)}}" enctype="multipart/form-data" id="contactForm" novalidate="novalidate">
                    @csrf
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="contact-panel__title">Apply for this Job</h4>
                        <p class="contact-panel__desc mb-30">
                            @if(Session::has('message'))
                            <p class="p-3">
                            <span class="alert alert-{{Session::get('alert')}} "> {{Session::get('message')}}</span>
                        </p>
                            @endif </p>
                      </div>
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <i class="icon-user form-group-icon"></i>
                          <input type="text" class="form-control" name="name"  value="{{old('name')}}" placeholder="Your Name*" required>
                        </div>
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <i class="icon-email form-group-icon"></i>
                          <input type="email" class="form-control" name="email"  value="{{old('email')}}" placeholder="Your Email*" required>
                        </div>
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <i class="icon-phone form-group-icon"></i>
                          <input type="text" class="form-control" name="phone"  value="{{old('phone')}}" placeholder="Your Phone*" required>
                        </div>
                      </div><!-- /.col-lg-6 -->
                   
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label class="custom-file-upload">
                               Upload CV
                          <input  type="file"   class="form-control" name="cv" id="file-upload"   placeholder="Upload CV" value="{{old('cv')}}" required/>
                        </label>
                        </div>
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group"> @php echo captcha_img() @endphp
                          <i class="icon-phone form-group-icon"></i>
                          <input type="text" class="form-control" class="form-control" placeholder="Enter captcha" name="captcha" required>
                        </div>
                      </div><!-- /.col-lg-6 -->
                      <div class="col-12">
                        <div class="form-group">
                          <i class="icon-alert form-group-icon"></i>
                          <textarea class="form-control" placeholder="cover Letter" name="cover_letter" required > {{old('cover_letter')}} </textarea>
                        </div>
                        <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                          <span>Apply for this job</span> <i class="icon-arrow-right"></i>
                        </button>
                        <div class="contact-result"></div>
                      </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                  </form>
                </div><!-- /.service__content -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.col-lg-8 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section>

@endsection