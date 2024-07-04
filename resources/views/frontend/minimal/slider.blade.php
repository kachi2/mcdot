<section class="slider">
    <div class="slick-carousel m-slides-0" 
      data-slick='{"slidesToShow": 1, "arrows": true,"autoplay": true, "dots": false, "speed": 3000,"fade": true,"cssEase": "linear"}'>
      
      @forelse($sliders as $slider)
      <div class="slide-item align-v-h">
        <div class="bg-img"><img src="{{asset('images/'.$slider->image)}}" alt="{{asset('images/'.$slider->image)}}"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
              <div class="slide__content">
                <span class="slide__subtitle">The Best Medical And General Practice Care! </span>
                <h2 class="slide__title">{{$slider->title}} </h2>
                <p class="slide__desc">{{$slider->content}}</p>
                <div class="d-flex flex-wrap align-items-center">
                  <a href="services.html" class="btn btn__secondary btn__rounded mr-30">
                    <span>Start Hiring</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div>
              </div><!-- /.slide-content -->
            </div><!-- /.col-xl-7 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.slide-item -->
      @empty 
      @endforelse
    </div><!-- /.carousel -->
  </section><!-- /.slider -->