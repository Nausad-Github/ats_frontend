@php
    $get_term_conditions = get_term_conditions(1);
@endphp
<footer class="footer mt-50">
    <div class="container">
      <div class="footer-bottom mt-50">
        <div class="row">
          <div class="col-md-6"><span class="font-xs color-text-paragraph"> &copy; <script>document.write(new Date().getFullYear())</script>. Powered by  Talent in cloud</span></div>
          <div class="col-md-6 text-md-end text-start">
            <div class="footer-social">
                @if($get_term_conditions->company_privacy_policy_status == 1)
                    <a class="font-xs color-text-paragraph" href="{{ route('privacy-policy') }}">Privacy Policy</a>
                @endif
                @if($get_term_conditions->term_conditions_status == 1)
                    <a class="font-xs color-text-paragraph mr-30 ml-30" href="{{ route('terms-conditions') }}">Terms &amp; Conditions</a>
                @endif
                <a class="font-xs color-text-paragraph" href="{{ route('security') }}">Security</a>
            </div>
          </div>
      </div>
    </div>
  </div>
</footer>