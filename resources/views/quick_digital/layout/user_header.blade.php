<header>
    
    <div class="container max-width">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand w-25" href="{{ url('quick-digital/index') }}">
                    <img class="py-2" height="auto" width="80%" src="{{ asset('front/assets/images/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start w-75" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a class="navbar-brand" href="{{ url('quick-digital/index') }}">
                            <img class="py-2" height="auto" width="50%" src="{{ asset('front/assets/images/logo.png') }}" alt="">
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fw-semibold px-md-3 d-block" href="{{ url('quick-digital/ebook-list') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ই-বুক
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item fw-semibold px-md-2 nav-link" href="{{ url('quick-digital/ebook-list') }}">
                                            সকল ইবুক
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item fw-semibold px-md-2 nav-link" href="{{ url('quick-digital/ebook') }}">
                                            লাভের খনি পাইকারি বাজার
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item fw-semibold px-md-2 nav-link" href="{{ url('quick-digital/14-days-online-business') }}">
                                            <span class="font_change">১৪</span> দিনে অনলাইন ব্যবসা
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item fw-semibold px-md-2 nav-link" href="{{ url('quick-digital/100-business-idea') }}">
                                            <span class="font_change">১০০</span> টা ব্যবসার আইডিয়া
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item nav-style">
                                    <a class="nav-link fw-semibold px-md-4" aria-current="page" href="./ebook.html">ই-বুক</a>
                                </li> -->
                            <li class="nav-item">
                                <a class="nav-link fw-semibold px-md-3 d-block" aria-current="page" href="{{ url('quick-digital/subscription') }}">
                                    প্যাকেজ
                                </a>
                            </li>
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
                                        <a class="dropdown-item fw-semibold px-md-2 nav-link" href="{{ url('quick-digital/courses') }}"">
                                        মোবাইল ফ্রিল্যান্সিং
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link fw-semibold px-md-3 d-block" aria-current="page" href="{{ url('quick-digital/courses') }}">
                                    মোবাইল ফ্রিল্যান্সিং
                                </a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link fw-semibold px-md-3 d-block" aria-current="page" href="{{ url('quick-digital/quick-shop') }}">
                                    কুইক শপ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-semibold px-md-3 d-block" aria-current="page" href="{{ url('quick-digital/digital-services') }}">
                                    সার্ভিস
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-semibold px-md-3 d-block" aria-current="page" href="{{ url('quick-digital/digital-products') }}">প্রোডাক্টস</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex gap-1 align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    @if (Auth::guard('user')->check())
                                    @php
                                    $user = Auth::guard('user')->user();
                                    @endphp
                                    @if (!empty($user->image))
                                    <img class="nav__user__img" src="{{ asset('admin/images/user_images/' . $user->image) }}" alt="">
                                    @else
                                    <svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M20 22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13Z">
                                        </path>
                                    </svg>
                                    @endif
                                    <h5 class="m-0">{{ $user->name }}</h5>
                                    @else
                                    <svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M20 22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13Z">
                                        </path>
                                    </svg>
                                    Guest
                                    @endif
                                </a>
                                <ul class="dropdown-menu" style="right: 0 !important; left: inherit !important; min-width:300px;">
                                    <li class="d-flex justify-centent-center flex-column align-items-center mt-3 gap-1 mb-3">
                                        @if (Auth::guard('user')->check())
                                        @php
                                        $user = Auth::guard('user')->user();
                                        @endphp
                                        @if (!empty($user->image))
                                        <img class="nav__user__img__main" src="{{ asset('admin/images/user_images/' . $user->image) }}" alt="">
                                        @else
                                        <svg class="nav__user__img__main" height="50px" width="50px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M20 22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13Z">
                                            </path>
                                        </svg>
                                        @endif
                                        <h4 class="text-center">{{ $user->name }}</h4>
                                        <div class="d-flex gap-2 justify-content-center align-items-center">
                                            <span>{{ $user->email }}</span>
                                            @if ($user->subscription_id && $user->subscription_expire_date > \Carbon\Carbon::now())
                                            @if ($user->subscription_id == 1)
                                            <span class="subscription_badge rounded-pill">সিলভার</span>
                                            @elseif ($user->subscription_id == 2)
                                            <span class="subscription_badge rounded-pill">গোল্ড</span>
                                            @else
                                            <span class="subscription_badge rounded-pill">প্ল্যাটিনাম</span>
                                            @endif
                                            @endif
                                        </div>
                                        @else
                                        <svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M20 22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13Z">
                                            </path>
                                        </svg>
                                        Guest
                                        @endif
                                    </li>
                                    @if (Auth::guard('user')->check())
                                    @php
                                    $user = Auth::guard('user')->user();
                                    @endphp

                                    @if ($user->is_instructor == 1)
                                    <li>
                                        <a class="dropdown-item user__nav__item d-flex align-items-center gap-3" href="{{ url('/instructor/dashboard') }}">
                                            <svg class="" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M7 10H20C20.5523 10 21 10.4477 21 11V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V11C3 10.4477 3.44772 10 4 10H5V9C5 5.13401 8.13401 2 12 2C14.7405 2 17.1131 3.5748 18.2624 5.86882L16.4731 6.76344C15.6522 5.12486 13.9575 4 12 4C9.23858 4 7 6.23858 7 9V10ZM10 15V17H14V15H10Z">
                                                </path>
                                            </svg>Instructor Dashboard
                                        </a>
                                    </li>
                                    @endif
                                    @endif
                                    <li>
                                        <a class="dropdown-item user__nav__item d-flex align-items-center gap-3" href="{{ url('/quick-digital/update-password') }}">
                                            <svg class="" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M7 10H20C20.5523 10 21 10.4477 21 11V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V11C3 10.4477 3.44772 10 4 10H5V9C5 5.13401 8.13401 2 12 2C14.7405 2 17.1131 3.5748 18.2624 5.86882L16.4731 6.76344C15.6522 5.12486 13.9575 4 12 4C9.23858 4 7 6.23858 7 9V10ZM10 15V17H14V15H10Z">
                                                </path>
                                            </svg>পাসওয়ার্ড চেঞ্জ
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item user__nav__item d-flex align-items-center gap-3" href="{{ url('/quick-digital/update-profile') }}">
                                            <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM6 15V17H18V15H6ZM6 7V13H12V7H6ZM14 7V9H18V7H14ZM14 11V13H18V11H14ZM8 9H10V11H8V9Z">
                                                </path>
                                            </svg>
                                            প্রোফাইল আপডেট
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item user__nav__item d-flex align-items-center gap-3" href="{{ url('/quick-digital/my-courses') }}">
                                            <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M4.87759 3.00275H19.1319C19.4518 3.00275 19.7524 3.15583 19.9406 3.41457L23.7634 8.67097C23.9037 8.86385 23.8882 9.12895 23.7265 9.30419L12.3721 21.6047C12.1848 21.8076 11.8685 21.8203 11.6656 21.633C11.6591 21.627 7.86486 17.5174 0.282992 9.30419C0.121226 9.12895 0.10575 8.86385 0.246026 8.67097L4.06886 3.41457C4.25704 3.15583 4.55766 3.00275 4.87759 3.00275ZM5.38682 5.00275L2.58738 8.85198L12.0047 19.0541L21.4221 8.85198L18.6226 5.00275H5.38682Z">
                                                </path>
                                            </svg>আমার কোর্স
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item user__nav__item d-flex align-items-center gap-3"
                                            href="{{ url('/quick-digital/my-orders') }}">
                                            <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M21 18H6C5.44772 18 5 18.4477 5 19C5 19.5523 5.44772 20 6 20H21V22H6C4.34315 22 3 20.6569 3 19V4C3 2.89543 3.89543 2 5 2H21V18ZM5 16.05C5.16156 16.0172 5.32877 16 5.5 16H19V4H5V16.05ZM16 9H8V7H16V9Z"></path></svg>আমার ইবুক
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item user__nav__item d-flex align-items-center gap-3" href="{{ url('/quick-digital/my-order-product') }}">
                                            <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M6.00488 9H19.9433L20.4433 7H8.00488V5H21.7241C22.2764 5 22.7241 5.44772 22.7241 6C22.7241 6.08176 22.7141 6.16322 22.6942 6.24254L20.1942 16.2425C20.083 16.6877 19.683 17 19.2241 17H5.00488C4.4526 17 4.00488 16.5523 4.00488 16V4H2.00488V2H5.00488C5.55717 2 6.00488 2.44772 6.00488 3V9ZM6.00488 23C4.90031 23 4.00488 22.1046 4.00488 21C4.00488 19.8954 4.90031 19 6.00488 19C7.10945 19 8.00488 19.8954 8.00488 21C8.00488 22.1046 7.10945 23 6.00488 23ZM18.0049 23C16.9003 23 16.0049 22.1046 16.0049 21C16.0049 19.8954 16.9003 19 18.0049 19C19.1095 19 20.0049 19.8954 20.0049 21C20.0049 22.1046 19.1095 23 18.0049 23Z">
                                                </path>
                                            </svg>আমার অর্ডার (প্রোডাক্ট)
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a class="dropdown-item user__nav__item"
                                            href="{{ url('/quick-digital/track-order') }}">
                                    ট্র্যাক অর্ডার
                                    </a>
                            </li> --}}
                            <li>
                                {{-- <hr class="dropdown-divider"> --}}
                            </li>
                            @if (Auth::guard('user')->check())
                            @php
                            $user = Auth::guard('user')->user();
                            @endphp

                            @if ($user->is_instructor == 0)
                            <li>
                                <form method="POST" action="{{ route('request.instructor') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item user__nav__item d-flex align-items-center gap-3">
                                        <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M6.00488 9H19.9433L20.4433 7H8.00488V5H21.7241C22.2764 5 22.7241 5.44772 22.7241 6C22.7241 6.08176 22.7141 6.16322 22.6942 6.24254L20.1942 16.2425C20.083 16.6877 19.683 17 19.2241 17H5.00488C4.4526 17 4.00488 16.5523 4.00488 16V4H2.00488V2H5.00488C5.55717 2 6.00488 2.44772 6.00488 3V9ZM6.00488 23C4.90031 23 4.00488 22.1046 4.00488 21C4.00488 19.8954 4.90031 19 6.00488 19C7.10945 19 8.00488 19.8954 8.00488 21C8.00488 22.1046 7.10945 23 6.00488 23ZM18.0049 23C16.9003 23 16.0049 22.1046 16.0049 21C16.0049 19.8954 16.9003 19 18.0049 19C19.1095 19 20.0049 19.8954 20.0049 21C20.0049 22.1046 19.1095 23 18.0049 23Z">
                                            </path>
                                        </svg>Become an Instructor
                                    </button>
                                </form>
                            </li>
                            @endif
                            @endif

                            <li>
                                <a class="dropdown-item user__nav__item d-flex align-items-center gap-3" href="{{ url('/user/logout') }}">
                                    <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C15.2713 2 18.1757 3.57078 20.0002 5.99923L17.2909 5.99931C15.8807 4.75499 14.0285 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C14.029 20 15.8816 19.2446 17.2919 17.9998L20.0009 17.9998C18.1765 20.4288 15.2717 22 12 22ZM19 16V13H11V11H19V8L24 12L19 16Z">
                                        </path>
                                    </svg>
                                    লগ আউট
                                </a>
                            </li>
                        </ul>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>