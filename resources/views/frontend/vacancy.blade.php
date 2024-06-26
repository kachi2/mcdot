@extends('layouts.app')
@section('contents')
    <section class="page-title" style="background-image:url(images/background/3.jpg)">
        <div class="auto-container">
            <h4 class="text-white">Post Vacancy</h4>
            <ul class="page-breadcrumb">
                <li><a href="index.html">home</a></li>
                <li>Post Vacancy</li>
            </ul>
        </div>
    </section>

    <section class="contact-form-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="form-column col-lg-2 col-md-2  col-sm-4">
                </div>
                <div class="form-column col-lg-8 col-md-6 col-sm-12 p-5" style="background: #fff">
                    @if (Session::has('message'))
                        <p class="">
                            <span class="alert alert-{{ Session::get('alert') }} "> {{ Session::get('message') }}</span>
                        </p>
                    @endif
                    <div class="title-box">
                        <h4 class="text-dark;"
                            style="font-family: Arial, Helvetica, sans-serif; color:#000; font-weight:600">Post Vacancy</h4>
                        <div class="text-bold">Please fill out the form below to publish your job vacancy.</div>
                    </div>
                    <div class="inner-column">

                        <!-- Default Form -->
                        <div class="default-form contact-form">
                            <form method="post" action="{{ route('clients.job_store') }}" id="contact-form"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <input type="text" name="company" value="{{ old('company') }}"
                                                placeholder="Your Company Name*" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <input type="email" name="company_email" value="{{ old('company_email') }}"
                                                placeholder="Your company Email*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" name="title" value="{{ old('title') }}"
                                                placeholder="Job Title">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <select name="category_id"> 
                                                <option> Select Job Category</option>
                                                @forelse($category as $cat)
                                                <option value="{{$cat->id}}"> {{$cat->name}}</option>
                                                @empty 
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <input type="text" name="location" value="{{ old('location') }}"
                                                placeholder="Job Location*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <input type="text" name="salary_range" value="{{ old('salary_range') }}"
                                                placeholder="Salary Range*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <select name="job_type">
                                                <option> Select Job Type</option>
                                                <option value="full_time"> Full-Time</option>
                                                <option value="part_time"> Part-Time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <input type="text" name="deadline" value="{{ old('deadline') }}"
                                                placeholder="Job expiry Date (D-M-YY)" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <textarea style="height:200px"   name="job_details" placeholder="Please Enter Job Details" required>{{old('job_details')}}</textarea>
                                        </div>
                                    <div class="col-lg-12 "> @php echo captcha_img() @endphp
                                        <div class="form-input-item form-group">
                                            <input type="text" class="form-control" placeholder="Enter captcha"
                                                name="captcha" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-style-one"><span class="txt">Submit
                                            now</span></button>
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
