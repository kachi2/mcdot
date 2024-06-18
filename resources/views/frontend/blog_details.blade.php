@extends('layouts.app')
@section('contents')

	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/3.jpg)">
    	<div class="auto-container">
        	<h2>Blog</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{route('index')}}">home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side / Blog Classic -->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                	
					<div class="blog-single padding-right">
						<div class="inner-box">
							<div class="image">
								<img src="{{asset('images/'.$blog->image)}}" alt="{{asset('images/'.$blog->image)}}" />
							</div>
							<div class="lower-content">
								<div class="upper-box clearfix">
									<div class="posted-date pull-left">{{$blog->created_at->format('d M, Y')}}</div>
									<ul class="post-meta pull-right">
										<li>By :  Admin</li>
									</ul>
								</div>
								<div class="lower-box">
									<h3>{{$blog->title}} </h3>
									<div class="text">
                                        {!! $blog->contents !!}
									</div>
								</div>
							</div>
						</div>
                        
                    	
                       
                        
                    </div>
					
				</div>
				
				<!--Sidebar Side-->
               <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
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
						<!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Recent Blog</h2></div>

                            @forelse($popular as $recent)
                            <article class="post">
                                <figure class="post-thumb"><a href="{{route('users.blogs.details', $recent->hashid)}}"><img src="{{asset('images/'.$recent->image)}}" alt=""></a></figure>
                                <div class="text"><a href="{{route('users.blogs.details', $recent->hashid)}}">{{$recent->title}}</a></div>
                                <div class="post-info">{{$recent->created_at->format('d M, Y')}}</div>
                            </article>

                            @empty 
                            @endforelse
                           

                        </div>
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
@endsection