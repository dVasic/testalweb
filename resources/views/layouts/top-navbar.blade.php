<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<!-- .site-mobile-menu -->
<div class="site-navbar-wrap">
    <div class="site-navbar-top">
        <div class="container py-3" style="max-width: 1850px; border: 5px #4f3c35; border-bottom: 1px solid #4f3c35;">
{{--            <div class="row align-items-center">--}}
{{--                   <div class="d-flex justify-content-left col-md-3">--}}
{{--                        <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>--}}
{{--                        <a href="https://www.linkedin.com/company/testaladamzborowski/mycompany/" class="p-2 pl-0"><span class="icon-linkedin"></span></a>--}}
{{--                        <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>--}}
{{--                   </div>--}}

                <div class="d-flex justify-content-between bd-highlight" style="margin-bottom: -25px ; margin-top: -15px">
                    <div class="p-2 bd-highlight">
                        <a href="#" class="p-2 pl-0"><span class="icon-facebook font-weight-bold"></span></a>
                        <a href="https://www.linkedin.com/company/testaladamzborowski/mycompany/" class="p-2 pl-0"><span class="icon-linkedin font-weight-bold"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-instagram font-weight-bold"></span></a>
                    </div>
                    <div class="p-2 bd-highlight">
                        <img class="cropped1" src="{{ asset(config('testalweb.path_img'). 'testal_logo.png') }}" alt="Image">
                    </div>
                    <div class="p-2 bd-highlight" >
                        <span class="icon-envelope mr-2 font-brown"></span>
                        <span class="d-none d-md-inline-block font-brown font-weight-bold">info@testal.info</span>
                        <br>
                        <span class="icon-phone mr-2 font-brown"></span>
                        <span class="d-none d-md-inline-block font-brown font-weight-bold">+49 157 56 290 330</span>
                    </div>
                </div>

    <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-10">
                    <nav class="site-navigation text-right" role="navigation">
                        <div class="container">
                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                            <ul class="site-menu main-menu js-clone-nav d-none d-lg-block" style="font-weight: bolder">
                                <li>
                                    <a href="#home-section" class="nav-link">Home</a>
                                </li>

                                <li class="has-children">
                                    <a href="#about-section" class="nav-link">Über uns</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="#our-team-section" class="nav-link">Unser Team</a></li>
                                                <li class="has-children">
                                                    <a href="#">Links zu unseren Partnern</a>
                                                        <ul class="dropdown">
                                                            <li><a href="#">Menu One</a></li>
                                                            <li><a href="#">Menu Two</a></li>
                                                            <li><a href="#">Menu Three</a></li>
                                                        </ul>
                                                </li>
                                        </ul>
                                    </li>
                                <li><a href="#projects-section" class="nav-link">Projekte</a></li>

                                <li><a href="#services-section" class="nav-link">Services</a></li>

                                <li><a href="#contact-section" class="nav-link">Schreib uns gerne</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
