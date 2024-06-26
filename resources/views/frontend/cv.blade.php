@extends('layouts.app')
@section('contents')

<section class="page-title" style="background-image:url(images/background/3.jpg)">
    <div class="auto-container">
        <h4 class="text-white">Contact Us</h4>
        <ul class="page-breadcrumb">
            <li><a href="index.html">home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="auto-container" >
        <div class="row clearfix">
            <div class="form-column col-lg-2 col-md-2  col-sm-4">
            </div>
            <div class="form-column col-lg-8 col-md-8 col-sm-12 p-5" style="background: #fff" >
                @if(Session::has('message'))
                <p class="">
                <span class="alert alert-{{Session::get('alert')}} "> {{Session::get('message')}}</span>
                 </p>
                @endif
                <div class="title-box">
                    <h4 class="text-dark;" style="font-family: Arial, Helvetica, sans-serif; color:#000; font-weight:600">Submit Your CV</h4>
                    <div class="text-bold">Please fill out the form below and our expert team will respond</div>
                </div>
                <div class="inner-column">
                    
                    <div class="default-form contact-form">
                        <form method="post" action="{{route('store.cv')}}" id="contact-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 ">
                            <div class="form-group">
                                <input type="text" name="name" value="{{old('name')}}" placeholder="Name*" required>
                            </div>
                                </div>
                            
                                <div class="col-lg-6 ">
                            <div class="form-group">
                                <input type="text" name="phone" value="{{old('phone')}}" placeholder="Phone Number*" required>
                            </div>
                                </div>
                            
                                <div class="col-lg-12 ">
                            <div class="form-group">
                                <input type="text" name="email" value="{{old('email')}}" placeholder="Email*" required>
                            </div>
                                </div>
                              
                                <div class="col-lg-12 ">
                            <div class="form-group">
                                <textarea style="height:100px"   name="cover_letter" placeholder="Please Enter Cover Letter" required>{{old('cover_letter')}}</textarea>
                            </div>
                                </div>
                                <div class="col-lg-12 ">
                                    <div class="form-group">
                                        Attach Your CV (doc,docx,pdf,ppt,jpg,png)
                                        <input type="file" class="form-control" name="cv" placeholder="cv*" required>
                                    </div>
                                    </div>
                            
                                <div class="col-lg-12 ">  @php echo captcha_img() @endphp
                                    <div class="form-input-item form-group">
                                        <input type="text" class="form-control" placeholder="Enter captcha" name="captcha" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one"><span class="txt">Submit now</span></button>
                            </div>                                     
                            
                        </form>
                    </div>
                    <!--End Default Form-->
                    
                </div>
            </div>
            
            <!-- Info Column -->
         
            
        </div>
    </div>
</section>

@endsection