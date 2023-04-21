
@extends('layouts.app')
@section('contents')
<!--== Start Header Area Wrapper ==-->

<!--== End Header Area Wrapper ==-->

<!-- Start Slider Area Wrapper -->
@include('frontend.minimal.slider')
<!-- End Slider Area Wrapper -->

<!-- Start Service Area Wrapper -->
<section class="service-area-wrapper mt-90 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="service-content-wrapper">
                    <div class="section-header-wrap">
                        <!-- Start Section Title -->
                        <div class="section-title-wrap">
                            <h2>Our Services</h2>
                        </div>
                        <!-- End Section Title -->

                        <!-- Start Service Slider Arrows -->
                        
                        <!-- End Service Slider Arrows -->
                    </div>

                    <!-- Start Service Content Inner -->
                    <div class="service-content-inner">
                        <div class="ht-slick-wrapper">
                            <div class="ht-slick-slider slick-row-30"
                                data-slick='{"slidesToShow": 3, "prevArrow":"#service-prev", "nextArrow":"#service-next", "responsive":[{"breakpoint": 992,"settings":{"slidesToShow": 1}}]}'>
                                <!-- Start Single Service Item -->
                                
                                @forelse ($services as $ss )
                                    
                              
                                <div class="service-item">
                                    <figure class="service-item__thumb">
                                        <a href="{{route('subpages', encrypt($ss->id))}}"><img src="{{asset('images/'.$ss->image)}}"
                                                                            alt="Service"/></a>
                                        <figcaption class="service-item__thumb-hvr">
                                            <a href="{{route('subpages', encrypt($ss->id))}}" class="read-more">Read More</a>
                                            <a href="{{route('subpages', encrypt($ss->id))}}" class="btn-link-icon"><i
                                                    class="fa fa-external-link"></i></a>
                                        </figcaption>
                                    </figure>

                                    <div class="service-item__info">
                                        <h2><a href="{{route('subpages', encrypt($ss->id))}}">{{$ss->name}}</a></h2>
                                        <p>{{$ss->title}}.</p>
                                        <a href="{{route('subpages', encrypt($ss->id))}}" class="btn-read-more">Read More</a>
                                    </div>
                                </div>
                                <!-- End Single Service Item -->
                                @empty
                                    
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <!-- End Service Content Inner -->
                </div>
            </div>

          
        </div>
    </div>
</section>
<!-- End Service Area Wrapper -->
<section class="testimonial-area-wrapper mt-90 mt-sm-60 bg-img" data-bg="{{asset('images/serice.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <!-- Start Section Title -->
                <div class="section-title-wrap layout--2 white mb-38">
                    <h4 style="color: #fff">Need any advice on how best NCIC can serve you?</h4>
                    <p style="color:#fff; font-size:25px; text-align:center; font-weight:bolder">Do contact us at {{$settings->site_email}} or call {{$settings->site_phone}}</p>
                    
                     
                        
                           <p style="color:#fff; font-size:25px; text-align:center"> <a href="{{route('pages', encrypt(5))}}" class="btn btn-primary">Contact Us </a></p>
                </div>
                
                <!-- End Section Title -->
            </div>
        </div>

       
    </div>
</section>



<!-- Start Testimonial Wrapper -->

<section class="our-client-wrapper mt-90 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-wrap mb-44 mb-sm-30">
                    <!-- Start Section Title -->
                    <div class="section-title-wrap">
                        <h2>Our Clients</h2>
                    </div>
                    <!-- End Section Title -->

                    <!-- Start News Slider Arrows -->
                    <div class="ht-slick-arrows ht-slick-arrows--two">
                        <button id="client-prev"><i class="fa fa-angle-left"></i></button>
                        <button id="client-next"><i class="fa fa-angle-right"></i></button>
                    </div>
                    <!-- End News Slider Arrows -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Start Our Clients Content -->
                <div class="our-client-content">
                    <div class="ht-slick-slider slick-row-20"
                         data-slick='{"slidesToShow": 6, "autoplay": true, "prevArrow":"#client-prev", "nextArrow":"#client-next", "responsive":[{"breakpoint": 481,"settings":{"slidesToShow": 2}}, {"breakpoint": 801,"settings":{"slidesToShow": 3}}, {"breakpoint": 992,"settings":{"slidesToShow": 4}}]}'>
                        <!-- Start Single Client Logo Item -->

                        @forelse ($logos as $item)
                        <div class="client-item">
                            <a href="#"><img src="{{asset('images/'.$item->image)}}" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->
                        @empty
                        @endforelse

                       
                    </div>
                </div>
                <!-- End Our Clients Content -->
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Wrapper -->

<div class=" p-4">
     

       
</div>

@endsection
