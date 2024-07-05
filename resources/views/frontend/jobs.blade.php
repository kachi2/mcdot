@extends('layouts.app')
@section('contents')
<section class="page-title page-title-layout1 bg-overlay text-center pb-0">
    <div class="bg-img"><img src="{{asset('/assets/images/page-titles/3.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
            <form method="get" action="{{route('search.jobs')}}">
            @csrf
          <p class="pagetitle__desc mb-30">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">   
             <input type="text" name="search" placeholder="Enter search terms" class="form-control">  
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3"> 
                    <select name="type" id="">
                    <option> Select Job Type</option>
                    @forelse($types as $type)
                  <option value="{{$type->name}}"><span><a href="{{route('users.jobs.category', $type->hashid)}}"> {{$type->name}}</a> </option> 
                    @empty 
                    @endforelse 
                </select>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">  
                <button class="btn btn-primary btn__rounded"> Search Jobs</button>
                </div>  
             </div>
          </p>
        </form>
          {{-- <a href="#content" class="scroll-down"><i class="fas fa-long-arrow-alt-down"></i></a> --}}
        </div><!-- /.col-xl-8 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <section id="content" class=" pb-80">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar has-marign-left sticky-top">
              <div class="widget widget-services">
                <h5 class="widget__title">Job Categories</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                    @forelse($category as $categories)
                    <li><a href="{{route('users.jobs.category', $categories->hashid)}}"><span>{{$categories->name}}</span><i class="icon-arrow-right"></i></a></li>
                   
                    @empty 
                    @endforelse
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-services -->
              <div class="widget widget-schedule">
                <div class="widget-content">
                  <h4 class="widget__title"> Job Type</h4>
                  <ul class="time__list list-unstyled mb-0">
                    @forelse($types as $type)
                    <li><span><a href="{{route('users.jobs.category', $categories->hashid)}}"> {{$type->name}}</a> </span><i class="icon-arrow-right"></i></li>
                    @empty 
                    @endforelse
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-schedule -->
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
            @forelse ($jobs as $job)
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
                  <p class="">{!! substr($job->job_details,0,200) !!}...</p>
                  <a href="{{route('job-details', $job->hashid)}}" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__content -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
        @empty
        <div class="col-sm-12 col-md-6 col-lg-12">
            <div class="service-item">
                0 Jobs Found
               
              <div class="service__contnt pl-5 pb-5 pr-2" style="padding-left:20px">
                <p class="service__title">No Record Sorry!  Does not match record with your keyword</p>

               
             
              </div><!-- /.service__content -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->

        @endforelse

        </div><!-- /.col-lg-8 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section>

@endsection