@extends('layouts.app')
@section('contents')
<section class="page-title page-title-layout5 bg-overlay">
    <div class="bg-img"><img src="{{asset('/assets/images/page-titles/8.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          {{-- <h1 class="pagetitle__heading">Health Essentials</h1> --}}
          <nav>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>
        </div><!-- /.col-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->


  <section class="blog-grid">
    <div class="container">
      <div class="row">

        @forelse($blogs as $blog)
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="post-item">
            <div class="post__img">
              <a href="{{route('users.blogs.details', $blog->hashid)}}">
                <img src="{{asset('images/'.$blog->image)}}" alt="post image" loading="lazy">
              </a>
            </div><!-- /.post__img -->
            <div class="post__body">
              <div class="post__meta-cat">
                <a href="{{route('users.blogs.details', $blog->hashid)}}">{{$blog->created_at->format('M d, Y')}}</a>
              </div><!-- /.blog-meta-cat -->
         
              <h4 class="post__title"><a href="#">{{$blog->title}}</a></h4>

              <p class="post__desc">{!! $blog->contents !!}
              </p>
              <a href="{{route('users.blogs.details', $blog->hashid)}}" class="btn btn__secondary btn__link btn__rounded">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.post__body -->
          </div><!-- /.post-item -->
        </div>
        @empty 
        @endif
     
      </div>
   
    </div>
  </section>

@endsection