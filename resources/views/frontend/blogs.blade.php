@extends('layouts.app')
@section('contents')
<section class="page-title" style="background-image:url({{asset('asset/images/background/3.jpg')}})">
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
            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <div class="blog-classic padding-right">
                    
                    <!--News Block Two -->
                    @forelse($blogs as $blog)
                    <div class="news-block-two">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="{{route('users.blogs.details', $blog->hashid)}}"><img src="{{asset('images/'.$blog->image)}}" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="upper-box clearfix">
                                    <div class="pull-left">
                                        <div class="posted-date">{{$blog->created_at->format('d M, Y')}}</div>
                                    </div>
                                    <div class="pull-right">
                                        <ul class="post-meta">
                                            <li>By :  Admin</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <h3><a href="{{route('users.blogs.details', $blog->hashid)}}">{{$blog->title}}</a></h3>
                                    <div class="text">{!! substr($blog->contents,0,200)!!}</div>
                                    <a href="{{route('users.blogs.details', $blog->hashid)}}" class="read-more">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty 
                    @endforelse
                    
                   
                    
                    <!--Styled Pagination-->
                    {{-- <ul class="styled-pagination">
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
                    </ul>                 --}}
                    <!--End Styled Pagination-->
                    
                </div>
            </div>
            
            <!--Sidebar Side-->
           <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar style-two">
                    
                    <!-- Search -->
                    <div class="sidebar-widget search-box">
                        <form method="post" action="http://t.commonsupport.com/care-giver/contact.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Enter Search Keywords" required>
                                <button type="submit"><span class="icon fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Popular Posts -->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title"><h2>Recent Blogs</h2></div>

                        @forelse($recents as  $recent)
                        <article class="post">
                            <figure class="post-thumb"><a href="{{route('users.blogs.details', $recent->hashid)}}"><img src="{{asset('images/'.$recent->image)}}" alt="{{asset('images/'.$recent->image)}}"></a></figure>
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