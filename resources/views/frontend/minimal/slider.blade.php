<section class="main-slider">
        
    <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                @forelse($sliders as $slider)
                <li data-transition="parallaxvertical" data-description="Slide Description" data-easein="default" 
                data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" 
                data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-{{$slider->id}}"
                data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" 
                data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" 
                data-rotate="0" data-saveperformance="off" data-slotamount="default" 
                data-thumb="images/main-slider/1.jpg" data-title="Slide Title">
                <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                 data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                  src="{{asset('images/'.$slider->image)}}">
                <div class="tp-caption" 
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingtop="[0,0,0,0]"
                data-responsive_offset="on"
                data-type="text"
                data-height="none"
                data-width="['700','650','650','450']"
                data-whitespace="normal"
                data-hoffset="['15','15','15','15']"
                data-voffset="['-80','-110','-110','-110']"
                data-x="['left','left','left','left']"
                data-y="['middle','middle','middle','middle']"
                data-textalign="['top','top','top','top']"
                data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                    <h2>{{$slider->title}}</h2>
                </div>
                
                <div class="tp-caption" 
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingtop="[0,0,0,0]"
                data-responsive_offset="on"
                data-type="text"
                data-height="none"
                data-width="['650','650','650','450']"
                data-whitespace="normal"
                data-hoffset="['15','15','15','15']"
                data-voffset="['35','10','10','10']"
                data-x="['left','left','left','left']"
                data-y="['middle','middle','middle','middle']"
                data-textalign="['top','top','top','top']"
                data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                    <div class="text">{{$slider->content}}</div>
                </div>
                
                <div class="tp-caption" 
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingtop="[0,0,0,0]"
                data-responsive_offset="on"
                data-type="text"
                data-height="none"
                data-whitespace="normal"
                data-width="['650','650','650','450']"
                data-hoffset="['15','15','15','15']"
                data-voffset="['125','100','120','120']"
                data-x="['left','left','left','left']"
                data-y="['middle','middle','middle','middle']"
                data-textalign="['top','top','top','top']"
                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                    <div class="link-box">
                        <a href="{{$slider->links}}" class="theme-btn btn-style-one"><span class="txt">Learn more</span></a>
                    </div>
                </div>
                </li>  
                @empty 
                @endforelse
                
            </ul>
        </div>
    </div>
</section>