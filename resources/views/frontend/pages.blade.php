@extends('layouts.app')
@section('contents')
<section class="page-title" style="background-image:url({{asset('images/'.$service->metas)}});   object-fit: cover;">
    <div class="auto-container">
        <h4 style="color:#fff">{{$service?->title??'Our Services'}}</h4>
        <ul class="page-breadcrumb">
            <li><a href="index.html">home</a></li>
            <li>Our Services</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
           
            <!--Content Side / Services Detail -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="services-detail">
                    <div class="inner-box">
                        <div class="lower-content">
                            {{-- <h2>{{$service->title}}</h2> --}}
                            @php 
                            $arr = explode('.', $service->contents);
                            $count = count($arr)
                            @endphp

                            <p> @if(isset($arr[0])) {!!$arr[0].'.'  !!}@endif @if(isset($arr[1])) {!!$arr[1].'.' !!} @endif </p>
                            <div class="two-column">
                                <div class="row clearfix">
                                    <div class="column col-lg-4 col-md-4 col-sm-12">
                                        <div class="image">
                                            <img src="{{asset('images/'.$service->metas)}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="column col-lg-8 col-md-8 col-sm-12">
                                        <h4></h4>
                                        <p> @if(isset($arr[2])) {!!$arr[2].'.'  !!}@endif @if(isset($arr[3])) {!!$arr[3].'.' !!} @endif @if(isset($arr[4])) {!!$arr[4].'.' !!} @endif </p>
                                    </div>
                                </div>
                            </div>
                            <p> 
                               @for($x = 5; $x < $count; $x++)
                                   {!! $arr[$x] !!} 
                                @endfor
                            </p>
                            <div class="service-contact-box"> Let our experienced caregivers help your family today. <br> <a href="{{route('users.contact')}}">Contact our team</a> to learn more! </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar padding-left">
                    <div class="sidebar-widget search-box">
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Search for Services" required>
                                <button type="submit"><span class="icon fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>
                    <!-- Sidebar Widget / List Widget-->
                    <div class="sidebar-widget list-widget">
                        <!-- Services List -->
                        <ul class="services-list">
                            <li class="active"><a href="">Services</a></li>
                            @forelse($services as $sav)
                            <li><a href="{{route($sav->slug, $sav->hashid)}}">{{$sav->name}}</a></li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                    <div class="sidebar-widget contact-widget">
                        <div class="widget-content" style="background-image: url('{{asset('/asset/images/resource/contact-2.jpg')}}');">
                            <h3>Find Care Today</h3>
                            <a href="{{route('users.contact')}}" class="theme-btn contact-btn">contact us</a>
                        </div>
                    </div>
                    
                </aside>
            </div>
            
        </div>
    </div>
</div>
@endsection