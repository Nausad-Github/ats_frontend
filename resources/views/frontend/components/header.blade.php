@php
    $career_basic = get_career_basic(1);
@endphp
<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo">
                <a class="d-flex" href="{{ route('/') }}">
                    <img alt="logo" src="http://localhost:5000/career/logo/{{ $career_basic->logo }}" class="logo">
                </a>
                </div>
                <!-- <div class="header-logo"><a class="d-flex text-logo" href="index.html">Talent in cloud</a></div> -->
            </div>
            <div class="header-nav">
                <div class="burger-icon burger-icon-white">
                <span class="burger-icon-top"></span>
                <span class="burger-icon-mid"></span>
                <span class="burger-icon-bottom"></span>
                </div>
            </div>
            <div class="header-right">
                <div class="block-signin">
                    <a class="text-link-bd-btom hover-up" href="{{ route('about') }}">About Us</a>
                    <a class="btn btn-default btn-shadow ml-40 hover-up" href="{{ route('/') }}">Home</a>
                </div>
            </div>
        </div>
    </div>
</header>
    <!-- mobile header start   -->
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
        <div class="perfect-scroll">
            <div class="mobile-account">
            <h6 class="mb-10">Menu</h6>
            <ul class="mobile-menu font-heading">
                <li>
                <a href="{{ route('/') }}">Home</a>
                </li>
                <li>
                <a href="{{ route('about') }}">About us</a>
                </li>
            </ul>
            </div>
            <div class="site-copyright">Copyright <script>
                document.write(new Date().getFullYear())
            </script> &copy; Talent in cloud. <br>Develop by Quacklabs Technologies. </div>
        </div>
        </div>
    </div>
</div>