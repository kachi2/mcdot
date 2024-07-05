@extends('layouts.app')
@section('contents')
@section('styles')

<style>
    .containers {
  position: relative;
  text-align: center;
  color: white;
    }
  .top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}
input[type="file"] {
  display: none;
}

.custom-file-upload {
  border: 1px solid #ccc;
  display: inline-block;
  padding: 20px 20px;
  cursor: pointer;
  width:100%;
  border-radius: 10px;
}
</style>
@endsection

<section class="page-title page-title-layout1 bg-overlay" style="background: #0e204d">
    <div class="bg-img"><img src="{{asset('/assets/images/page-tiles/2.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-5">
          <span class="pagetitle__subheading">Home / Find Staff / Adhoc Recruitment</span>
          <h2 class="pagetitle__heading" style="color:#fff; font-family:Verdana, Geneva, Tahoma, sans-serif">
            Find experienced, qualified and available staff for every shift</h2>
          <p class="pagetitle__desc" style="color:#fff; font-family:Verdana, Geneva, Tahoma, sans-serif">Never let a staff shortage disrupt your service. Find the people you need, whenever you need them, with our rapid ad-hoc recruitment solution..
          </p>

        
        </div><!-- /.col-xl-5 -->
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 pt-2" style=" background-size:cover;">
            <div class="containers">
                <div class="top-left">
                    <span class="badge bg-success"> High Quality Staff</span>
                    </div>

            <img src="{{asset('/assets/nuse.jpg')}}"  style="background-size:cover; border-radius:10px" alt="background" >
        </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 pt-2" style=" background-size:cover;">
            <div class="containers">
                <div class="bottom-right">
                    <span class="badge bg-primary" style="font-size:12px"> Find professionals who  don’t just fit a role, <br> but perfectly match   your culture and values</span>
                    </div>
            <img src="{{asset('/assets/adhoc.jpg')}}"  style="background-size:cover; border-radius:10px" alt="background" >
            </div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <section id="content" class=" pb-80">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="text-block mb-50" style="text-align: center; font-family:Arial; font-weight:bolder">
            <h2> The perfect fit</h2>
            <p class="text-block__desc mb-20 font-weight-bold color-secondary">
                You never know when you might need temporary staff to step in, or when long term cover is needed out the blue, so having a multi-award-winning recruitment agency that can quickly find ad-hoc staff is the perfect insurance policy!

                From nurses and healthcare assistants to support workers and admin staff, we specialise in finding talented ad-hoc staff, fast. We are available around the clock for hundreds of employers needing last-minute and unexpected recruitment, and we can help you too.</p>
     
          </div><!-- /.text-block -->
          <div class="widget-plan mb-60">
            <div class="widget__body">
              <h1 class="widget__title">Why choose ad-hoc recruitment?</h1>
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="plan__items">
                    <ul class="list-items list-items-layout2 list-unstyled mb-0">
                      <li><h4>Flexibility </h4>
                        Whether it’s a shift, weekend, or ongoing staffing requirement, our ad-hoc solution gives you ultimate control over your workforce.</li>
                      <li> <h4>Speed</h4> 
                        With our giant network of compliant and readily available candidates, you can quickly fill shifts with experienced staff without delay.</li>
                      <li><h4>Reduce Risk</h4> 
                        Effortlessly scale your workforce up or down to match demand, so you only ever pay for the staff you really need.</li>
                   <li> <h4>Specialised Skills</h4> 
                    Find specialists and experts to join your team on a short-term basis – perfect for projects and time-sensitive circumstances..</li>
                   <li> <h4>Lower Cost</h4>
                    Find staff that can hit the ground running, saving time and money on training, equipment, and lengthy onboarding processes.
                   </li>
                    </ul>
                  </div>
                </div><!-- /.col-md-6 -->

              </div><!-- /.row -->
            </div><!-- /.widget__body -->

          </div><!-- /.widget-plan -->
          <div class="text-block mb-50">
            <h2 class="">Why Trust Our Candiates</h2>
            <p class="text-block__desc mb-20">
                We are proud to be your reliable partner in healthcare recruitment. Our success is based on the careful selection by talented, dedicated and loyal recruitment specialists. We are committed to matching talent with opportunities and collaboration with our knowledgeable experts to find the best candidates for each assignment. With 100% excellence in service, we can meet your healthcare staffing needs and more.
            </p>
          </div><!-- /.text-block -->
          <hr>
          <form class="contact-panel__form" method="post" action="{{ route('users.adhoc.staff.store') }}" enctype="multipart/form-data" id="contactForm" novalidate="novalidate">
            @csrf
            <div class="row">
              <div class="col-sm-12" style="text-align: center; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">
                <h2 >Start your search <br>
                    for Ad-hoc staff</h2>
                <p class=" mb-30">
                    @if(Session::has('message'))
                    <p class="p-3">
                    <span class="alert alert-{{Session::get('alert')}} "> {{Session::get('message')}}</span>
                </p>
                    @endif </p>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <i class="icon-user form-group-icon"></i>
                  <input type="text" class="form-control @error('company') is-invalid  @enderror" name="company" value="{{ old('company') }}"
                  placeholder="Your Company Name*" required>
                </div>
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <i class="icon-email form-group-icon"></i>
                  <input type="email" class="form-control @error('company_email') is-invalid  @enderror" name="company_email" value="{{ old('company_email') }}"
                  placeholder="Your company Email*" required>
                </div>
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <i class="icon-phone form-group-icon"></i>
                  <input type="text" class="form-control @error('title') is-invalid  @enderror" name="title" value="{{ old('title') }}"
                  placeholder="Job Title">
                </div>
              </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-phone form-group-icon"></i>
                      <input type="text" class="form-control @error('location') is-invalid  @enderror" name="location" value="{{ old('location') }}"
                      placeholder="Job Location*" required>
                    </div>
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <i class="icon-phone form-group-icon"></i>
                  <input type="text" class="form-control @error('salary_range') is-invalid  @enderror" name="salary_range" value="{{ old('salary_range') }}"
                  placeholder="Salary Range*" required>
                </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
              <i class="icon-phone form-group-icon"></i>
              <input type="text" class="form-control @error('deadline') is-invalid  @enderror"  name="deadline" value="{{ old('deadline') }}"
              placeholder="Job Deadline, 2024-09-12" required>
            </div>
            @error('deadline')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div><!-- /.col-lg-6 -->
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <i class="icon-phone form-group-icon"></i>
                  <select name="category_id"> 
                    <option> Select Job Category</option>
                    @forelse($category as $cat)
                    <option value="{{$cat->id}}"> {{$cat->name}}</option>
                    @empty 
                    @endforelse
                </select>
                </div>
              </div><!-- /.col-lg-6 -->
        
              <div class="col-12">
                <div class="form-group">
                  <i class="icon-alert form-group-icon"></i>
                  <textarea style="height:200px"   class="form-control" name="job_details" placeholder="Please Enter Job Details" required>{{old('job_details')}}</textarea>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group"> @php echo captcha_img() @endphp
                    <i class="icon-phone form-group-icon"></i>
                    <input type="text" class="form-control @error('captcha') is-invalid  @enderror" class="form-control" placeholder="Enter captcha" name="captcha" required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                  <span>Send Request</span> <i class="icon-arrow-right"></i>
                </button>
                <div class="contact-result"></div>
              </div><!-- /.col-lg-12 -->
           
            </div><!-- /.row -->
          </form>
        </div><!-- /.col-lg-8 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section>
@endsection