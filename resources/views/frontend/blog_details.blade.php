@extends('layouts.app')
@section('contents')
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title pt-30 pb-30 text-center">
		<div class="container">
		  <div class="row align-items-center">
			<div class="col-12">
			  <nav>
				<ol class="breadcrumb mb-0">
				  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				  <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
				  <li class="breadcrumb-item active" aria-current="page">6 Tips to Protect Your Mental Health When You’re
					Sick</li>
				</ol>
			  </nav>
			</div><!-- /.col-12 -->
		  </div><!-- /.row -->
		</div><!-- /.container -->
	  </section><!-- /.page-title -->
  
	  <!-- ======================
		Blog Single
	  ========================= -->
	  <section class="blog blog-single pt-0 pb-80">
		<div class="container">
		  <div class="row">
			<div class="col-sm-12 col-md-12 col-lg-8">
			  <div class="post-item mb-0">
				<div class="post__img">
				  <a href="#">
					<img src="{{asset('images/'.$blog->image)}}" alt="post image" loading="lazy">
				  </a>
				</div><!-- /.post-img -->
				<div class="post__body pb-0">
				  <div class="post__meta-cat">
					<a href="#">{{$blog->created_at->format('M d, Y')}}</a>
				  </div><!-- /.blog-meta-cat -->
		
				  <h1 class="post__title mb-30">
					{{$blog->title}}
				  </h1>
				  <div class="post__desc">
					<p> {!! $blog->contents !!} </p>
				  </div><!-- /.blog-desc -->
				</div>
			  </div><!-- /.post-item -->
		
		
			
			</div><!-- /.col-lg-8 -->
			<div class="col-sm-12 col-md-12 col-lg-4">
			  <aside class="sidebar">
				<div class="widget widget-posts">
				  <h5 class="widget__title">Recent Posts</h5>
				  <div class="widget__content">
					<!-- post item #1 -->
					@forelse($blogs as $ss)
					<div class="widget-post-item d-flex align-items-center">
					  <div class="widget-post__img">
						<a href="{{route('users.blogs.details', $ss->hashid)}}"><img src="{{asset('images/'.$ss->image)}}" alt="thumb"></a>
					  </div><!-- /.widget-post-img -->
					  <div class="widget-post__content">
						<span class="widget-post__date">{{$ss->created_at->format('M d, Y')}}</span>
						<h4 class="widget-post__title"><a href="{{route('users.blogs.details', $ss->hashid)}}">{{$blog->title}}</a>
						</h4>
					  </div><!-- /.widget-post-content -->
					</div><!-- /.widget-post-item -->
				    @empty 
					@endforelse
				  </div><!-- /.widget-content -->
				</div><!-- /.widget-posts -->
			
			  </aside><!-- /.sidebar -->
			</div><!-- /.col-lg-4 -->
		  </div><!-- /.row -->
		</div><!-- /.container -->
	  </section><!-- /.blog Single -->
@endsection