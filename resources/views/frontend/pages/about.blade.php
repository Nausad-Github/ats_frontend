@extends('frontend/components/layout')
@section('main')
<main class="main">
    <!-- b-cum section start  -->
    <section class="section-box">
      <div class="breacrumb-cover bg-img-about">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mb-10">About Us</h2>
              <p class="font-lg color-text-paragraph-2">Get the latest news, updates and tips</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- b-cum section end  -->
    <section class="section-box mt-50">
      <div class="post-loop-grid">
        <div class="container">
          <div class="text-center">
            <h6 class="f-18 color-text-mutted text-uppercase">Our company</h6>
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">About Our Company</h2>
            <p class="font-sm color-text-paragraph wow animate__animated animate__fadeInUp w-lg-50 mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ligula ante, dictum non aliquet eu, dapibus ac quam. Morbi vel ante viverra orci tincidunt tempor eu id ipsum. Sed consectetur, risus a blandit tempor, velit magna pellentesque risus, at congue tellus dui quis nisl.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- job section start  -->
    <div class="section-box mt-50 mb-30">
      <div class="container">
        <div class="box-we-hiring">
          <div class="text-1">
            <span class="text-we-are">Did not find a relevant</span>
            <span class="text-hiring">OPENING</span>
          </div>
          <div class="text-2">Heres <span class="color-brand-1">what </span>you can do <br> Submit your resume for <span class="color-brand-1">Upcoming</span> Job Opening </div>
          <div class="text-3">
            <a href="view-job.html" class="btn btn-apply btn-apply-icon">Submit now</a>
          </div>
        </div>
      </div>
    </div>
    <!-- job section end  -->
</main>
@endsection