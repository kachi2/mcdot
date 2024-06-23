@extends('layouts.app')
@section('contents')

<section class="page-title" style="background-image:url(images/background/3.jpg)">
    <div class="auto-container">
        <h2>Contact Us</h2>
        <ul class="page-breadcrumb">
            <li><a href="index.html">home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="auto-container">
        
        <!-- Title Box -->
      
        
        <div class="row clearfix">
            
            <!-- Form Column -->
            <div class="form-column col-lg-3 col-md-3  col-sm-4">
            </div>
            <div class="form-column col-lg-6 col-md-6 col-sm-12">
                <div class="title-box">
                    <h4 class="text-dark; ">Submit Your CV</h4>
                    <div class="">Please fill out the form below and our expert team will respond</div>
                </div>
                <div class="inner-column">
                    
                    <!-- Default Form -->
                    <div class="default-form contact-form">
                        <form method="post" action="http://t.commonsupport.com/care-giver/sendemail.php" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6 ">
                            <div class="form-group">
                                <input type="text" name="username" value="" placeholder="Name*" required>
                            </div>
                                </div>
                            
                                <div class="col-lg-6 ">
                            <div class="form-group">
                                <input type="text" name="phone" value="" placeholder="Phone Number*" required>
                            </div>
                                </div>
                            
                                <div class="col-lg-12 ">
                            <div class="form-group">
                                <input type="text" name="email" value="" placeholder="Email*" required>
                            </div>
                                </div>
                              
                                <div class="col-lg-12 ">
                            <div class="form-group">
                                <textarea style="height:100px" name="message" placeholder="Your Message"></textarea>
                            </div>
                                </div>
                                <div class="col-lg-12 ">
                                    <div class="form-group">
                                        Attach Your CV (doc,docx,pdf,ppt,jpg,png)
                                        <input type="file" class="form-control" name="cv" value="" placeholder="cv*" required>
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