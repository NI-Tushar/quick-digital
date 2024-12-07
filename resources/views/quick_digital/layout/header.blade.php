
<header>

<div class="sticky_bar">

    <div class="bg-first text-white">
        <div class="container max-width">
            <div class="top-contacts">

                <!-- __________________ nav-list-->
                <div class="mail_num">

                    <a class="" href="mailto:quickdigital121@gmail.com">
                        <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z">
                            </path>
                        </svg>
                        <span class="">
                            quickdigital121@gmail.com
                        </span>
                    </a>
   
                    <a class="phone_number" href="tel:01973784959">
                        <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M21 8C22.1046 8 23 8.89543 23 10V14C23 15.1046 22.1046 16 21 16H19.9381C19.446 19.9463 16.0796 23 12 23V21C15.3137 21 18 18.3137 18 15V9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9V16H3C1.89543 16 1 15.1046 1 14V10C1 8.89543 1.89543 8 3 8H4.06189C4.55399 4.05369 7.92038 1 12 1C16.0796 1 19.446 4.05369 19.9381 8H21ZM7.75944 15.7849L8.81958 14.0887C9.74161 14.6662 10.8318 15 12 15C13.1682 15 14.2584 14.6662 15.1804 14.0887L16.2406 15.7849C15.0112 16.5549 13.5576 17 12 17C10.4424 17 8.98882 16.5549 7.75944 15.7849Z">
                            </path>
                        </svg>
                        <span class="">
                            01973784959
                        </span>
                    </a>

                </div>


                <!-- __________________ nav-list-->

                <div class="user_part">
                    <div class="">
                        <a href="{{ url('user/login') }}">
                            <svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-3.31 0-10 1.67-10 5v2h20v-2c0-3.33-6.69-5-10-5z"></path>
                            </svg>

                            <span class="text-control-6 fs-6 px-1">লগইন</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container max-width header_bar" style="padding:0px;">
        <nav class="navbar custom-padding navbar-expand-lg" style="width:100%;">
            <div class="container-fluid">
                <a class="navbar-brand w-25" href="{{ url('quick-digital/index') }}">
                    <img src="{{ asset('front/assets/images/primary_logo2.png') }}"
                        alt="">
                </a>
                <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start w-75" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a class="navbar-brand" href="{{ url('quick-digital/index') }}" style="">
                            <img class="py-2" height="auto" width="50%"
                                src="{{ asset('front/assets/images/logo.png') }}" alt="">
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav d-flex
                          flex-grow-1 pe-3" style="width:auto;">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fw-semibold px-md-3"
                                    href="{{ url('quick-digital/ebook-list') }}" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    ই-বুক
                                </a>
                                <ul class="dropdown-menu">
                                    
                                    <li>
                                        <a class="dropdown-item fw-semibold px-md-4 nav-link"
                                            href="{{ url('quick-digital/ebook') }}">
                                            লাভের খনি পাইকারি বাজার
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item fw-semibold px-md-4 nav-link"
                                            href="{{ url('quick-digital/14-days-online-business') }}">
                                            <span class="font_change">১৪</span> দিনে অনলাইন ব্যবসা
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item fw-semibold px-md-4 nav-link"
                                            href="{{ url('quick-digital/100-business-idea') }}">
                                            <span class="font_change">১০০</span> টা ব্যবসার আইডিয়া
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item fw-semibold px-md-4 nav-link"
                                            href="{{ url('quick-digital/ebook-list') }}">
                                            <span class="font_change">সকল বইগুলো
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item nav-style">
                                    <a class="nav-link fw-semibold px-md-3" aria-current="page" href="./ebook.html">ই-বুক</a>
                                </li> -->
                            <li class="nav-item">
                                <a class="nav-link fw-semibold px-md-3" aria-current="page"
                                    href="{{ url('/') }}">
                                    ডিজিটাল সার্ভিস
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link fw-semibold px-md-3" aria-current="page"
                                    href="{{ url('quick-digital/courses') }}">
                                    মোবাইল ফ্রিল্যান্সিং
                                </a>
                            </li> -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fw-semibold px-md-3 d-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                কোর্স
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item fw-semibold px-md-2 nav-link" href="{{ url('quick-digital/all-course') }}">
                                            সকল কোর্স
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item fw-semibold px-md-2 nav-link" href="{{ url('quick-digital/courses') }}">
                                        মোবাইল ফ্রিল্যান্সিং
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-semibold px-md-3" aria-current="page"
                                    href="{{ url('quick-digital/digital-products') }}" target="_blank">কুইক শপ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link fw-semibold px-md-3" aria-current="page"
                                    href="{{ url('/') }}">
                                    সফটওয়্যার
                                </a>
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link fw-semibold px-md-3" aria-current="page"
                                    href="{{ url('/') }}">যোগাযোগ</a>
                            </li>

                            <!-- <li class="nav-item">
                                <a class="nav-link fw-semibold px-md-3" aria-current="page"
                                    href="{{ url('user/login') }}">লগইন</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <!-- {{-- <div class="nav-item btn-stylish rounded-1 bg-danger py-1 px-4 contact-btn">
                    <a class="nav-link text-white fw-semibold py-auto" aria-current="page" href="#">যোগাযোগ</a>
                </div> --}} -->
            </div>
        </nav>
    </div>

        
</div>



    <!-- Google Tag Manager -->
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MSTBQXZG');
</script>
<!-- End Google Tag Manager -->


</header>
