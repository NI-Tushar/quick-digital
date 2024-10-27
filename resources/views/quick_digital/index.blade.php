@extends('quick_digital.layout.layout')
@section('content')
@push('css')
<link rel="stylesheet" href="{{ url('front/styles/slider.css') }}">
@endpush

<main>
    @if (Session::has('error_message'))
    <div class="alert bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Oh snap! </strong>{{ Session::get('error_message') }}
    </div>
    @endif
    @if (Session::has('success_message'))
    <div class="alert bg-success alert-icon-left alert-dismissible mb-2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Well done!</strong> {{ Session::get('success_message') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <section class="py-2">
        <div class="home__slider">
            <div>
                <a href="{{ url('quick-digital/courses') }}">
                    <img class="w-100" src="{{ asset('front/assets/images/heroimage.jpg') }}" alt="">
                </a>
            </div>
            <!-- <div>
                <a href="{{ url('quick-digital/ebook') }}">
                    <img class="w-100" src="{{ asset('front/assets/images/h_slider_2.png') }}" alt="">
                </a>
            </div> -->
            <!-- <div>
                <a href="{{ url('quick-digital/ebook') }}">
                    <img class="w-100" src="{{ asset('front/assets/images/h_slider_3.png') }}" alt="">
                </a>
            </div> -->
            <!-- <div>
                <a href="{{ url('quick-digital/ebook') }}">
                    <img class="w-100" src="{{ asset('front/assets/images/h_slider_4.png') }}" alt="">
                </a>
            </div> -->
            <!-- <div>
                <a href="{{ url('quick-digital/digital-service') }}">
                    <img class="w-100" src="{{ asset('front/assets/images/h_slider_5.jpeg') }}" alt="">
                </a>
            </div> -->
        </div>
    </section>
    <section class="hero-section">
        <div class="container hero-container d-flex flex-coloumn justify-content-center max-width py-5">
            <div class="row">
                <div class="col-12 col-lg-6 custom-padding">
                    <div class="heading-1-container">
                        <img class="heading-img-1" src="{{ asset('front/assets/images/heading-1.png') }}" alt="">
                    </div>
                    <div class="heading-2-container">
                        <img class="heading-img-2" src="{{ asset('front/assets/images/heading-2.png') }}" alt="">
                    </div>
                    <h2 class="hero-heading display-4 fw-semibold text-white">
                        সাশ্রয়ী মূল্যে
                    </h2>
                    <p class="text-white hero-decription-text">
                        ই-বুক এবং ডিজিটাল প্রোডাক্ট এর বিশ্বস্ত প্লাটফর্ম
                    </p>
                    <div class="d-flex gap-5">
                        <div class="d-flex justify-content-center">
                            <button class="border-0 rounded-1 bg-danger py-1 px-4 ">
                                <a class="text-decoration-none text-white py-auto fw-medium btn-stylish" aria-current="page" href="{{ url('quick-digital/ebook') }}">ই-বুক</a>
                            </button>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="border-0 rounded-1 bg-danger py-1 px-4">
                                <a class="text-decoration-none text-white py-auto fw-medium btn-stylish" aria-current="page" href="{{ url('quick-digital/courses') }}">মোবাইল ফ্রিল্যান্সিং</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="heading-img-3-container" style="display: flex; justify-content: center; align-items: flex-end; height: 100%;">
                        <img class="heading-img-3" src="{{ asset('front/assets/images/running.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-5 custom-padding">
                    <div class="heading-img-4-container">
                        <img class="heading-img-4 img-fluid" src="{{ asset('front/assets/images/hero-img.jpg') }}" alt="" class="heading-img-3">
                    </div>
                </div>
            </div>
            <!-- <div class="">
                </div> -->
        </div>
    </section>
    <!-- About -->
    <section class="about-section" id="about">
        <div class="container max-width">
            <div class="row py-5 gap-5 align-items-center about-element-container">
                <div class="col-12 col-md-6 d-flex flex-column custom-padding">
                    <h3 class="about-heading fw-bold">
                        About Us
                        <div class="b-bottom"></div>
                    </h3>
                    <p class="about-descripttion text-center py-1">
                        "কুইক ডিজিটাল"একটি ডিজিটাল উদ্ভাবনী প্ল্যাটফর্ম। আজকের যুবকদের গতিশীল ডিজিটাল চাহিদার জন্য আমরা সদা সচেষ্ট। কুইক ডিজিটাল হচ্ছে একটি সাম্প্রতিকতম বেস্টসেলার প্লাটফর্ম।
                    </p>
                    <p class="about-descripttion text-center py-1">
                        আমাদের ভান্ডারে আছে একটি ইউজার ফ্রেন্ডলি এবং সুবিশাল ক্যাটালগ যেখান থেকে আপনি পাবেন: ই-বুক, ডিজিটাল পণ্য এবং ফ্রিল্যান্সিং কোর্স সমূহ।
                    </p>
                    <p class="about-descripttion text-center py-1">
                        বিশেষ কিছু অর্জন করতে হলে বা স্পেশাল কিছু পেতে হলে অথবা লাইভ এবং রেকর্ডকৃত ফ্রিল্যান্সিং কোর্সের মাধ্যমে নতুন দক্ষতা আয়ত্ত করা - যাই হোক না কেন, কুইক ডিজিটাল আপনাদের ডিজিটাল যাত্রা অনায়াসে ভরিয়ে তুলতে সক্ষম৷ আমরা নিরবিচ্ছিন্নভাবে সুবিধা দিয়ে থাকি এবং প্রোডাক্ট এবং সার্ভিস-এর গুণমানকে সর্বাধিক গুরুত্ব দিয়ে থাকি।
                    </p>
                    <p class="about-descripttion text-center py-1">
                        আমরা, কুইক ডিজিটাল, শুধুমাত্র শিক্ষামূলক এবং ব্যবসায়িক বিষয়বস্তুর বিভিন্ন পরিসরে অ্যাক্সেসের সুবিধা দেই না বরং ডিজিটাল বিজিনেস ল্যান্ডস্কেপে উন্নতি করতে আগ্রহী শিক্ষার্থীদের এবং ব্যবসায়ীদেরকে বিভিন্ন ভাবে সহযোগিতা করে থাকি।
                    </p>
                    <!-- <div class="">
                            <button class="border-0 rounded-1 bg-danger py-2 px-4 btn-stylish">
                                <a class="text-decoration-none text-white py-auto fw-medium fs-5" aria-current="page" href="#">
                                    <i aria-hidden="true" class="far fa-hand-point-right"></i> Read More</a>
                            </button>
                        </div> -->
                </div>
                <div class="col-12 col-md-5 d-flex justify-content-center align-items-center">
                    <div class="about-img-element">
                        <img class="img-fluid rounded-3" src="{{ asset('front/assets/images/about-img.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- resources -->
    <section class="resources-section py-5">
        <div class="container max-width px-0">
            <h3 class="resources-heading text-center custom-padding">
                আমাদের প্রোডাক্ট ও সার্ভিস সমূহ
                <span class="d-flex justify-content-center">
                    <div class="b-bottom-middle"></div>
                </span>
            </h3>
            <p class="resources-description text-center py-2 custom-padding">
                আপনার জন্য আমরা নিয়ে এসেছি ডিজিটাল জগতের সবকিছু। যা দিয়ে এই নতুন যুগের ডিজিটাল বিজনেস গুলোকে আপনি নিয়ে যেতে পারবেন অনন্য উচ্চতায়।
                আমাদের মোবাইল ফ্রিল্যান্সিং কোর্স গুলো শিখে আপনি উপার্জনের নতুন পন্থাগুলো সম্পর্কে জানতে পারবেন...ইনশাল্লাহ।
            </p>
            <div class="row resource-package-container">
                <div class="col-12 col-lg-4 d-flex justify-content-center card-container p-1">
                    <div class="card shadow border-0" style="width: 22rem;">
                        <img class="card-img-top rounded" src="{{ asset('front/assets/images/thumb-1.jpeg') }}" alt="Card image cap">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <p class="card-text fs-5 text-center fw-bold">
                                    <a class="text-decoration-none resource-link" href="{{ url('quick-digital/ebook') }}">
                                        আপনার ব্যাবসায়িক এবং পার্সোনাল ডেভেলপমেন্ট-এর জন্য আমাদের ইবুক গুলো সংগ্রহে রাখুন
                                    </a>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center my-2">
                                <button class="border-0 rounded-1 bg-danger py-2 px-4 btn-stylish">
                                    <a class="text-decoration-none text-white py-auto fw-medium fs-5" aria-current="page" href="{{ url('quick-digital/ebook') }}">ই-বুক কিনুন</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 d-flex justify-content-center card-container p-1">
                    <div class="card shadow border-0" style="width: 22rem;">
                        <img class="card-img-top rounded" src="{{ asset('front/assets/images/thumb-2.jpeg') }}" alt="Card image cap">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <p class="card-text fs-5 text-center fw-bold">
                                    <a class="text-decoration-none resource-link" href="{{ url('quick-digital/courses') }}">
                                        ফ্রিল্যান্সিং ও ডিজিটাল জগতে আপনার ক্যারিয়ার গড়তে এবং ইনকাম শুরু করতে আমাদের কোর্স-এ ভর্তি হোন।
                                    </a>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center my-2">
                                <button class="border-0 rounded-1 bg-danger py-2 px-4 btn-stylish">
                                    <a class="text-decoration-none text-white py-auto fw-medium fs-5" aria-current="page" href="{{ url('quick-digital/courses') }}">কোর্স এ ভর্তি হোন</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 d-flex justify-content-center card-container p-1">
                    <div class="card shadow border-0" style="width: 22rem;">
                        <img class="card-img-top rounded" src="{{ asset('front/assets/images/thumb-3.jpeg') }}" alt="Card image cap">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <p class="card-text fs-5 text-center fw-bold">
                                    <a class="text-decoration-none resource-link" href="{{ url('quick-digital/digital-products') }}">
                                        আমাদের ডিজিটাল প্রোডাক্টগুলো ব্যবহার করুন এবং আপনার জীবনকে সহজ করুন।
                                    </a>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center my-2">
                                <button class="border-0 rounded-1 bg-danger py-2 px-4 btn-stylish">
                                    <a class="text-decoration-none text-white py-auto fw-medium fs-5" aria-current="page" href="{{ url('quick-digital/digital-products') }}">ডিজিটাল প্রোডাক্ট কিনুন</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection
