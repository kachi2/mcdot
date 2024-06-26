@extends('layouts.app')
@section('contents')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/3.jpg)" style="height: 10px">
    	<div class="auto-container">
            <h4 class="text-white">Job Details</h4>
            <ul class="page-breadcrumb">
            	<li><a href="{{route('index')}}">home</a></li>
                <li>Job Details</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix" style="padding: 10px">
            	
                <!--Content Side / Blog Classic -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12" style=" border-radius:10px; padding:20px; box-shadow:0px 0px  3px 3px  #c1b5b52a">
                	
					<div class="blog-single padding-right">
                        <div class="comments-area">
                            {{-- <div class="group-title"><h5>Job Detials</h5></div> --}}
                            {{-- <hr style="width: 20%"> --}}
                            <div class="inner-box" style="border: none">
                                <!--Comment Box-->
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="{{asset('asset/images/resource/author-2.jpg')}}" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info clearfix" > <h2 style="font-family: Arial, Sans-serif; font-weight:bold">{{$job->title}} </h2></div>
                                            {{-- <span style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a">  {{$job->category->name}}</span> <br> --}}
                                            <div class="text">
                                                {{-- <h6 style="color:#0099ff">{{$job->title}}</h6>   --}}
                                                {{-- <p style="color:#0099ff">{{$job->company}}</p> --}}
                                                <p>Category: <span style="color: brown">  {{$job->category->name}}</span> </p> 
                                                   Location:  <span  class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a"> {{$job->location}}</span> 
                                                 Job Type:  <span class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a"> {{$job->job_type}}</span>  
                                                 Salary Range:  <span class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a "> {{$job->salary_range}}</span> <br>
                                               
                                               <hr>
                                               <span style="text-align: justify"> {!!$job->job_details !!} <br><br>  

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                        
                                
                            </div>
                        </div>
                        <!-- Comment Form -->
                        <div class="comment-form" >
                            <div class="group-title"><h2>Apply for this Job</h2></div>
                            <div class="form-inner" style="background: #ebe8e824">
                                @if(Session::has('message'))
                                <p class="p-3">
                                <span class="alert alert-{{Session::get('alert')}} "> {{Session::get('message')}}</span>
                            </p>
                                @endif
                                
                                <!--Comment Form-->
                                <form id="contrm" action="{{route('apply-job',$job->hashid)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                   <div class="row mb-20" >
                                                        <div class="col-lg-6">
                                                            <div class="form-input-item form-group">
                                                                <input type="text" class="form-control" name="name"  value="{{old('name')}}" placeholder="Your Name*" required/>
                                                            </div>
                                                        </div>
                
                                                        <div class="col-lg-6">
                                                            <div class="form-input-item form-group">
                                                                <input type="text" class="form-control" name="email"  value="{{old('email')}}" placeholder="Your Email*" required/>
                                                            </div>
                                                        </div>
                
                                                        <div class="col-lg-6">
                                                            <div class="form-input-item form-group">
                                                                <input type="text" class="form-control" name="phone"  value="{{old('phone')}}" placeholder="Your Phone*" required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 pt-6"> Upload your CV
                                                            <div class="form-input-item form-group">
                                                                <input type="file"  class="form-control" name="cv"  value="{{old('cv')}}" id="image" 
                                                                       required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12"> Cover Letter
                                                            <div class="form-input-item form-group">

                                                                <textarea  class="form-control" name="cover_letter" required > {{old('cover_letter')}} </textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 pt-6">  @php echo captcha_img() @endphp
                                                            <div class="form-input-item form-group">
                                                                <input type="text" class="form-control" placeholder="Enter captcha" name="captcha" required>
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                    <div class="form-input-item">
                                                        <button type="submit" class="btn btn-primary ">Apply for this job</button>
                                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--End Comment Form -->
                        
                    </div>
					
				</div>
				
				<!--Sidebar Side-->
               <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar style-two">
						
						<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Search Keywords" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>

                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Recent Jobs</h2></div>
    
                            @forelse ($jobs as $jo )
                                    
                            <div class="col-md-12 p-3 mb-3" style="border: 1px solid #b2b2b260; border-radius:10px">
                                <div class="discover-item">
                                    <div class="discover-item__info">
                                        {{-- <span style="float:right"> Posted: {{$jo->created_at->diffForHumans()}}</span> --}}
                                        <h4 style="font-family:Arial, Sans-serif; font-weight:bold;">{!! $jo->title !!}</h4> 
                                      <p>Category: <span style="color: brown">  {{$jo->category->name}}</span> </p> 
                                        {{-- <p style="color:#0099ff">{{$jo->company}}</p> --}}
                                      <span  class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a"> {{$jo->location}}</span>  
                                       <span class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a"> {{$jo->job_type}}</span>  
                                        <span class="p-1" style="border-radius: 4px; background:#9ab6c957; color:#5f5a5a"> {{$jo->salary_range}} </span> <br>
                                       
                                       <hr>
                                       <span> {!! substr($jo->job_details,0,100) !!} <br> <a href="{{route('job-details', $jo->hashid)}}" class=" btn btn-primary btn-sm"> Apply for this Job</a></span>
                                    </div>

                                </div>
                            </div>
                            @empty
                            @endforelse

                        </div>
						
						
						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2> <small> Job Categories</small> </h2>
                            </div>
                            <ul class="cat-list">
                                @forelse ($categories as $item)
                                <li><a href="#">{{$item->name}}</a></li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
						
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	

@endsection