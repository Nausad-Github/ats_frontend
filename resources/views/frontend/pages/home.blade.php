@extends('frontend/components/layout')
@section('main')
@php
$career_basic = get_career_basic(1);
$totalBannerChar = strlen($career_basic->banner_title);
$banner_title_1 = substr($career_basic->banner_title, 0, 3);
$banner_title_2 = substr($career_basic->banner_title, 3, 12);
$banner_title_3 = substr($career_basic->banner_title, 15, $totalBannerChar);
$get_all_jobs = get_all_jobs(1);
$get_states = get_state_location();
@endphp
<main class="main">
    <div class="bg-homepage1"></div>
    <!-- banner section  -->
    <section class="section-box">
      <div class="banner-hero hero-1">
        <div class="banner-inner">
          <div class="row">
            <div class="col-xl-8 col-lg-12">
              <div class="block-banner">
                <h1 class="heading-banner wow animate__animated animate__fadeInUp">
                    {{ $banner_title_1 }} 
                    <span class="color-brand-2">{{ $banner_title_2 }} </span>
                    <br class="d-none d-lg-block">{{ $banner_title_3 }}
                </h1>
                <div class="banner-description mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    {{-- Each month, more than 3 million job seekers turn to 
                    <br class="d-none d-lg-block">
                    website in their search for work, making over 140,000 
                    <br class="d-none d-lg-block">applications every single day  --}}
                    {{ $career_basic->banner_subtitle }}
                </div>
                @if($career_basic->enable_search_form == true)
                <!-- search from start  -->
                <div class="form-find mt-40 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                  <form id="search-job-form">
                    <input class="form-input input-keysearch mr-10" 
                    name="keyword" type="text" placeholder="Your keyword... ">
                    <select class="form-input mr-10 select-active" 
                     name="location" required id="location">
                      <option value="">Location</option>
                      @foreach ($get_states as $get_state)
                        <option value="{{ $get_state->loc_name }}">{{ $get_state->loc_name }}</option> 
                      @endforeach
                    </select>
                    <button type="submit" class="btn btn-default btn-find font-sm">Search</button>
                  </form>
                </div>
                <!-- search from end  -->
                <!-- recent search start  -->
                <div class="list-tags-banner mt-30 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                  <strong>Popular Searches:</strong>
                  <a href="#">Designer</a>, <a href="#">Web</a>, <a href="#">IOS</a>, <a href="#">Developer</a>, <a href="#">PHP</a>, <a href="#">Senior</a>, <a href="#">Engineer</a>
                </div>
                <!-- recent search end  -->
                @endif
              </div>
            </div>
            <div class="col-xl-4 col-lg-12 d-none d-xl-block col-md-6">
              <div class="banner-imgs">
                <div class="block-1 shape-1">
                  <img class="img-responsive banner-img one" alt="jobBox" src="http://localhost:5000/career/banner_image/{{ $career_basic->banner_image }}">
                </div>
                <div class="block-2 shape-2">
                  <img class="img-responsive banner-img two" alt="jobBox" src="http://localhost:5000/career/banner_image/{{ $career_basic->banner_image_2 }}">
                </div>
                <div class="block-3 shape-3">
                  <img class="img-responsive" alt="jobBox" src="{{ url('/') }}/frontends/img/icon-top-banner.png">
                </div>
                <div class="block-4 shape-3">
                  <img class="img-responsive" alt="jobBox" src="{{ url('/') }}/frontends/img/icon-bottom-banner.png">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner section  end-->
    <!-- job section start  -->
    <div class="mt-100"></div>
    <section class="section-box mt-80">
      <div class="section-box wow animate__animated animate__fadeIn mt-4">
        <div class="container">
          <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">
                {{ $career_basic->page_title }}
            </h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">
                {{ $career_basic->career_site_description != "" ? $career_basic->career_site_description : 'Lorem Ipsum Dolor Sit Amet' }}
            </p>
          </div>
          <div class="mt-50">
            <div class="row all-jobs">
              @foreach ($get_all_jobs as $get_all_job)
                  <!-- job card start  -->
                <div class="col-lg-12">
                    <div class="tic-job-card">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-8 col-md-12 col-sm-12">
                        <div class="d-flex align-content-center">
                            <div class="">
                            <img src="{{ url('/') }}/frontends/img/job.png" class="img-fluid" alt="tic job">
                            </div>
                            <div class="job-content">
                            <h6>{{ $get_all_job->job_title }}</h6>
                            <ul class="mt-2 d-flex">
                                <li class="me-3">
                                <p class="font-xs d-flex">
                                    <img src="{{ url('/') }}/frontends/img/industry.svg" alt="job" class="me-2">
                                    <span>{{ $get_all_job->job_emp_type }}</span>
                                </p>
                                </li>
                                <li>
                                <p class="font-xs d-flex">
                                    <img src="{{ url('/') }}/frontends/img/icon-location-2.svg" alt="job" class="me-2">
                                    <span>{{ $get_all_job->job_location }}</span>
                                </p>
                                </li>
                            </ul>
                            </div>
                        </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-12 col-sm-12 right-job-btn">
                        <a href="view-job.php/{{ $get_all_job->job_id }}" class="btn btn-apply-now">Apply now</a>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- job card end  -->
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- job section end  -->
    <div class="section-box mt-50 mb-30">
      <div class="container">
        <div class="box-we-hiring">
          <div class="text-1">
            <span class="text-we-are">Did not find a relevant</span>
            <span class="text-hiring">OPENING</span>
          </div>
          <div class="text-2">Heres <span class="color-brand-1">what </span>you can do <br> Submit your resume for <span class="color-brand-1">Upcoming</span> Job Opening </div>
          <div class="text-3">
            <a href="view-job.php" class="btn btn-apply btn-apply-icon">Submit now</a>
          </div>
        </div>
      </div>
    </div>
</main>
@endsection
<script src="{{ url('/') }}/frontends/js/vendor/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('#search-job-form').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                type: "get",
                url: "{{ route('filter-job') }}",
                data: $(this).serialize(),
                success: function (response) {
                    if(response.code == 404){
                        Snackbar.show({
                            text: response.message,
                            pos: 'bottom-center'
                        });
                    }else if(response.code == 200){
                        $('.all-jobs').html(response.data);
                        $('html, body').animate({scrollTop:500}, 700);
                        Snackbar.show({
                            text: response.message,
                            pos: 'bottom-center'
                        });
                    }
                }
            });
        });
    });
</script>