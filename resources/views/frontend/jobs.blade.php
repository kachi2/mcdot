@extends('layouts.app')
@section('contents')

<section class="page-title" style="background-image:url(images/background/3.jpg)">
    <div class="auto-container">
        <h4 style="color:#fff">{{$jobs['0']?->category?->name??'Jobs'}}</h4>
        <ul class="page-breadcrumb">
            <li><a href="index.html">home</a></li>
            <li>Jobs</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
            @forelse ($jobs as $job)
            <div class="col-sm-6 col-lg-12 pt-5">
               <div class="featured-card card h-100 hover-tiltY shadow-sm">
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
                         <a href="{{route('job-details', $job->hashid)}}" class="badge w-25 bg-info p-3" style="color:#fff">View Job Details</a> 
                       </span>
         
                   </div>
               </div>
           </div> 
           @empty
           @endforelse
            </div>
            
            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar padding-left">
                    <div class="sidebar-widget search-box">
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Search for Jobs" required>
                                <button type="submit"><span class="icon fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>
                    <!-- Sidebar Widget / List Widget-->
                    <div class="sidebar-widget list-widget">
                        <!-- Services List -->
                        <ul class="services-list">
                            <li class="active"><a href="">Job Category</a></li>
                            @forelse($category as $categories)
                            <li><a href="">{{$categories->name}}</a></li>
                            @empty 
                            @endforelse
                          
                        </ul>
                    </div>
                    
                    <!-- Sidebar Widget / Contact Widget-->
                    <div class="sidebar-widget contact-widget">
                        <div class="widget-content" style="background-image: url(images/resource/contact-2.jpg);">
                            <h3>Find Care Today</h3>
                            <a href="contact.html" class="theme-btn contact-btn">contact us</a>
                        </div>
                    </div>
                    
                </aside>
            </div>
            
        </div>
    </div>
</div>
        

@endsection