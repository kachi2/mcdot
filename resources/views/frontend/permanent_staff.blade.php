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
          <span class="pagetitle__subheading">Home / Find Staff / Permanent Recruitment</span>
          <h2 class="pagetitle__heading" style="color:#fff; font-family:Verdana, Geneva, Tahoma, sans-serif">Reliability, precision, and long-term success in every placement</h2>
          <p class="pagetitle__desc" style="color:#fff; font-family:Verdana, Geneva, Tahoma, sans-serif">Build a team you are proud of with MCDot premanent recruitment solutions.
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
                Securing the ideal candidates for your positions is not merely significant, but essential. The process of permanent hiring involves establishing enduring relationships, driving expansion, and molding the trajectory of your company.

Here at  MCDOT Care Service, our focus is on permanent hiring in sectors such as social care, healthcare, criminal justice, and education. We aim to discover candidates who not only align with the requirements of a role but also complement your organization's ethos and principles.
            </p>
     
          </div><!-- /.text-block -->
          <div class="widget-plan mb-60">
            <div class="widget__body">
              <h1 class="widget__title">Why choose permanent recruitment?</h1>
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="plan__items">
                    <ul class="list-items list-items-layout2 list-unstyled mb-0">
                      <li><h4>Stability </h4>
                        Permanent recruitment provides long-term stability for your organisation, with employees who are committed to your service, its people, and its goals..</li>
                      <li> <h4>Talent acquisition</h4> 
                        With an unequalled knowledge of our sectors and an impressive talent network, we can help you attract top talent who are committed to driving your organisation forward, now and in the future..</li>
                      <li><h4>Cultural fit</h4> 
                        Your team dynamics and staff retention are important to us, so within our comprehensive candidate generation process, we go beyond qualifications and experience, ensuring every candidate we submit is a perfect match for your culture.</li>
                   <li> <h4>Cost-effective</h4> 
                    While the upfront cost of ad-hoc recruitment might be higher than temporary placements, the long-term value brought by a committed, full-time employee can far outweigh the initial investment.</li>
                   <li> <h4>Growth and Development</h4>
                    Our permanent candidates will be invested in your organisation and its future, creating opportunities for their growth and development within your company, fostering loyalty and reducing turnover.
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
          <form class="contact-panel__form" method="post" action="{{ route('users.permanent.staff.store') }}" enctype="multipart/form-data" id="contactForm" novalidate="novalidate">
            @csrf
            <div class="row">
              <div class="col-sm-12" style="text-align: center; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">
                <h2 >Start your search <br>
                    for permanent staff</h2>
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