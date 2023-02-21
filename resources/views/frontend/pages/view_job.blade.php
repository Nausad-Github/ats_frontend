@extends('frontend/components/layout')
@section('main')
@php 
  $must_have_skill = [];
  if($job->must_have_skills != ""){
    $must_have_skill = explode(',', $job->must_have_skills);
  }
@endphp
<section class="job-detail-section pt-lg-100 pt-sm-80">
    <!-- Upper Box -->
    <div class="upper-box">
      <div class="auto-container">
        <!-- Job Block -->
        <div class="job-block-seven">
          <div class="inner-box">
            <div class="content">
              <span class="company-logo custom-company-logo"><img src="{{ url('/') }}/frontends/img/5-1.png" alt=""></span>
              <h4 class="job-title"><a href="#">{{ $job->job_title }}</a></h4>
              <ul class="job-info">
                <li class="ps-0 d-flex align-items-center">
                  <img src="{{ url('/') }}/frontends/img/industry.svg" alt="" class="me-2">
                  {{ $job->job_exp_min }}-{{ $job->job_exp_max }} Years
                </li>
                <li class="ps-0 d-flex align-items-center">
                  <img src="{{ url('/') }}/frontends/img/industry.svg" alt="" class="me-2">
                  {{ $job->job_sal_min }}
                      -
                  {{ $job->job_sal_max }} PA
                </li>
                <li class="ps-0 d-flex align-items-center">
                  <img src="{{ url('/') }}/frontends/img/icon-location-2.svg" alt="" class="me-2">
                  {{ $job->job_location }}
                </li>
              </ul>
              <ul class="job-other-info">
                @foreach ($must_have_skill as $key=> $skill)
                  @if($key < 3)
                    <li class="{{ $key % 2 == 0 ? 'time' : 'required' }}">{{ $skill }}</li>
                  @endif
                @endforeach
                @if(count($must_have_skill) > 4)
                <li class="time">
                  <a href="#" id="moreSkill">More...</a>
                </li>
                @endif
              </ul>
              <div class="moreSkillDiv">
                <ul class="job-other-info">
                  @foreach ($must_have_skill as $key=> $skill)
                    @if($key > 2)
                    <li class="{{ $key % 2 == 0 ? 'time' : 'required' }}">{{ $skill }}</li>
                    @endif
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="btn-box">
              <a href="apply-job.php" class="theme-btn btn-style-one" id="apply_job">Apply For Job</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="job-detail-outer">
      <div class="auto-container">
        <div class="row">
          <div class="content-column od-md-2 col-lg-8 col-md-12 col-sm-12">
            <div class="job-detail">
              <div class="d-flex justify-content-between">
                <h4>Job Description</h4>
                <!-- <div>
                      <a href="job-alert-success-page.php" class="a-col font-weight-500">Send Me Jobs Like This</a>
                    </div> -->
              </div>
              {{-- <p class="text-justify">As a Product Designer, you will work within a Product Delivery Team fused with UX,
                engineering, product and data talent. You will help the team design beautiful interfaces that solve
                business challenges for our clients. We work with a number of Tier 1 banks on building web-based
                applications for AML, KYC and Sanctions List management workflows. This role is ideal if you are looking
                to segue your career into the FinTech or Big Data arenas.</p>
              <h4>Key Responsibilities</h4>
              <ul class="list-style-three">
                <li>Be involved in every step of the product design cycle from discovery to developer handoff and user
                  acceptance testing.</li>
                <li>Work with BAs, product managers and tech teams to lead the Product Design</li>
                <li>Maintain quality of the design process and ensure that when designs are translated into code they
                  accurately reflect the design specifications.</li>
                <li>Accurately estimate design tickets during planning sessions.</li>
                <li>Contribute to sketching sessions involving non-designersCreate, iterate and maintain UI deliverables
                  including sketch files, style guides, high fidelity prototypes, micro interaction specifications and
                  pattern libraries.</li>
                <li>Ensure design choices are data led by identifying assumptions to test each sprint, and work with the
                  analysts in your team to plan moderated usability test sessions.</li>
                <li>Design pixel perfect responsive UI’s and understand that adopting common interface patterns is
                  better for UX than reinventing the wheel</li>
                <li>Present your work to the wider business at Show & Tell sessions.</li>
              </ul> --}}

              {!! $job->job_description !!}
              {{-- <h4>Skill & Experience</h4>
              <ul class="list-style-three">
                <li>You have at least 3 years’ experience working as a Product Designer.</li>
                <li>You have experience using Sketch and InVision or Framer X</li>
                <li>You have some previous experience working in an agile environment – Think two-week sprints.</li>
                <li>You are familiar using Jira and Confluence in your workflow</li>
              </ul> --}}
            </div>




            <!-- Other Options -->
            <div class="other-options">
              <div class="social-share">
                <h5>Share this job</h5>
                <a href="https://www.facebook.com/share.php?u={{ url()->full() }}" class="facebook" target="_blank">
                  <i class="fab fa-facebook-f"></i> 
                  Facebook
                </a>
                <a href="https://twitter.com/intent/tweet?{{ url()->full() }}?bar=123&baz=456" class="twitter" target="_blank">
                  <i class="fab fa-twitter"></i> 
                  Twitter
                </a>
                <a href="#" class="google">
                  <i class="fab fa-google"></i> 
                  Google+
                </a>
              </div>
            </div>

            <!-- Related Jobs -->
            <div class="related-jobs">
              <div class="title-box">
                <h3>Related Jobs</h3>
                <div class="text">{{ date('Y') }} jobs live - {{ $count_todays_added_job }} added today.</div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  @foreach ($related_jobs as $r_job)
                  <div class="tic-job-card">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-8 col-md-12 col-sm-12">
                        <div class="d-flex align-content-center">
                          <div class="">
                            <img src="{{ url('/') }}/frontends/img/job.png" class="img-fluid" alt="tic job">
                          </div>
                          <div class="job-content">
                            <h6>{{ $r_job->job_title }}</h6>
                            <ul class="mt-2 d-flex">
                              <li class="me-3">
                                <p class="font-xs d-flex"><img src="{{ url('/') }}/frontends/img/industry.svg" alt="job" class="me-2"><span>{{ $r_job->job_emp_type }}</span></p>
                              </li>
                              <li>
                                <p class="font-xs d-flex"><img src="{{ url('/') }}/frontends/img/icon-location-2.svg" alt="job" class="me-2"><span>{{ $r_job->job_location }}</span></p>
                              </li>

                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-4 col-md-12 col-sm-12 right-job-btn">
                        <a href="{{ route('view-job', $r_job->job_id) }}" class="btn btn-apply-now">Apply now</a>
                      </div>
                    </div>
                  </div> 
                  @endforeach
                  
                </div>
              </div>

            </div>
          </div>
          <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
            <aside class="sidebar">
              <div class="sidebar-widget">
                <!-- posted by  -->

                <!-- Job Overview -->
                <div class="d-flex justify-content-between">
                  <h4 class="widget-title">Job Overview</h4>
                </div>
                <div class="widget-content mb-20">
                  <ul class="job-overview">
                    <li>
                      <img src="{{ url('/') }}/frontends/img/icon-calendar.svg" class="icon" alt="">
                      <h5>Date Posted:</h5>
                      @php
                      $age = find_age_ago(strtotime($job->date));
                      @endphp
                      <span> {{ $age }}</span>
                    </li>
                    <li>
                      <img src="{{ url('/') }}/frontends/img/icon-expiry.svg" class="icon" alt="">
                      <h5>Job Applicants:</h5>
                      <span>{{ $no_of_job_applicant }} Nos</span>
                    </li>
                    <li>
                      <img src="{{ url('/') }}/frontends/img/icon-location.svg" class="icon" alt="">
                      <h5>Location:</h5>
                      <span>{{ $job->job_location }}</span>
                    </li>
                    <li>
                      <img src="{{ url('/') }}/frontends/img/icon-user-2.svg" class="icon" alt="">
                      <h5>Job Title:</h5>
                      <span>{{ $job->job_title }}</span>
                    </li>
                    {{-- <li>
                      <img src="{{ url('/') }}/frontends/img/icon-clock.svg" class="icon" alt="">
                      <h5>Hours:</h5>
                      <span>50h / week</span>
                    </li>
                    <li>
                      <img src="{{ url('/') }}/frontends/img/icon-rate.svg" class="icon" alt="">
                      <h5>Rate:</h5>
                      <span>$15 - $25 / hour</span>
                    </li> --}}
                    <li>
                      <img src="{{ url('/') }}/frontends/img/icon-salary.svg" class="icon" alt="">
                      <h5>Salary:</h5>
                      <span>₹{{ $job->job_sal_min }}k - ₹{{ $job->job_sal_max }}k</span>
                    </li>
                  </ul>
                </div>
                <!-- Job Skills -->
                <h4 class="widget-title">Job Skills</h4>
                <div class="widget-content" id="skill_section">
                  <ul class="job-skills">
                    @foreach ($must_have_skill as $skill)
                      <li><a href="javascript::void(0)">{{ $skill }}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="sidebar-widget company-widget">
                <div class="widget-content">
                  <div class="company-title">
                    <div class="company-logo"><img src="{{ url('/') }}/frontends/img/5-1.png" alt=""></div>
                    <h5 class="company-name">InVision</h5>
                    <a href="#" class="profile-link">View company profile</a>
                  </div>
                  <ul class="company-info">
                    <li>Primary industry: <span>{{ $company->industry }}</span></li>
                    {{-- <li>Company size: <span>501-1,000</span></li> --}}
                    <li>Founded in: <span>{{ $company->date }}</span></li>
                    {{-- <li>Phone: <span>123 456 7890</span></li>
                    <li>Email: <span>info@joio.com</span></li> --}}
                    <li>Location: <span>{{ $company_location_info != "" ? $company_location_info->city . ', ' . $company_location_info->country_name : $job->job_location }}</span></li>
                    <li>Social media:
                      <div class="social-links">
                        <a target="_blank" href="{{ $company->facebook }}">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                        <a target="_blank" href="{{ $company->twitter }}">
                          <i class="fab fa-twitter"></i>
                        </a>
                        <a target="_blank" href="{{ $company->instagram }}">
                          <i class="fab fa-instagram"></i>
                        </a>
                        <a target="_blank" href="{{ $company->linkedin }}">
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                  <div class="btn-box"><a href="#" class="theme-btn btn-style-three">www.invisionapp.com</a></div>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
<script src="{{ url('/') }}/frontends/js/vendor/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('#moreSkill').on('click', function(e) {
            e.preventDefault();
            $(this).parent().hide(100);
            $('.moreSkillDiv').show(300);
        });
    });
  </script>