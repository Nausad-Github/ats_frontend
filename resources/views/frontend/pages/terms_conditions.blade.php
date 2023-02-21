@extends('frontend/components/layout')
@section('main')
@php
    $get_term_conditions = get_term_conditions(1);
@endphp
<main class="main">
    <!-- b-cum section start  -->
    <section class="section-box">
      <div class="breacrumb-cover bg-img-about">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mb-10">Terms & Conditions</h2>
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
            <h6 class="f-18 color-text-mutted text-uppercase">T&C</h6>
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp ">Terms & Conditions</h2>
          </div>
          <div class="row mt-40">
            <div class="col-lg-12">
              <p class="font-sm color-text-paragraph wow animate__animated animate__fadeInUp">
                {!! $get_term_conditions->term_conditions_description !!}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection