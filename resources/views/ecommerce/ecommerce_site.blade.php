<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Commerce Website | Online Business | QuickDigital</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="{{ asset('Frontend/assets/css/ecommerce_site.css')}}">

</head>
<style>

:root {
    --skin-color-main: #0487c3;
    --skin-color-dim: #00354e;
}

    .help-list {
    transition: all 200ms ease;
    transform: translate(0, 90px) scale(0.5);
    transform-origin: bottom center;
    opacity: 0;
}

.expanded .help-list {
    transform: translate(0px, 20px) scale(1);
    opacity: 1;
}

.help-button:hover .btn {
    opacity: 1;
    /* Show the span on button hover */
    transform: translateX(-5px);
    /* Move the span left when hovered */
}

.tooltip-text {
    display: none;
    /* Initially hidden */
    position: absolute;
    left: 110%;
    /* Position to the right of the button */
    top: 50%;
    transform: translateY(-50%);
    /* Center vertically */
    background-color: rgba(255, 255, 255, 0.9);
    border: 1px solid #ccc;
    padding: 5px;
    border-radius: 4px;
    white-space: nowrap;
    /* Prevent text wrapping */
    pointer-events: none;
    /* Prevent interference with mouse events */
}

.btn-hover:hover .tooltip-text {
    display: block;
    /* Show the tooltip on hover */
}
.accordion{
    border-radius:10px;
}

.bg_color{
    background-color:var(--skin-color-main);
}
.fg_color{
    color:var(--skin-color-main);
}
.color_white{
    color:aliceblue;
}
.hover_skin:hover{
    background-color:var(--skin-color-main);
}
.bg_dim_color{
    background-color:var(--skin-color-dim)
}

body{
    background-color:aliceblue;
}


/* ___________________________ banner */
.banner{
    position: relative;
    height:70vh;
    width:100%;
    padding-top:3rem;
    padding-bottom:3rem;
    background-image: linear-gradient(black, #0487c3);
}

.stacked_banner {
	width: 100%;
    header: 100%;
	margin: 0 auto;
	position: absolute;
	top: 50%;
	left: 50%;
	width: 100%;
	transform: translate(-50%, -50%);
}

.stacked_banner .banner_items {
	display: flex;
	justify-content: center;
}

.stacked_banner .banner_item {
	--w: 200px;
	--m: 80px;
	flex-basis: calc(2 * var(--w));
	height: 70vh;
	clip-path: polygon(100px 0%, 100% 0%, calc(100% - 100px) 100%, 0% 100%);
	cursor: pointer;
	transition: all 1000ms ease;
	
}
.stacked_banner .banner_item{
    position: relative;
}

.stacked_banner .banner_item .bg_img{
    filter: blur(15px);
    position: absolute;
    z-index: 0;
    height: 100%;
    width: 100%;    
    background-size: cover;
    object-fit: cover; /* Ensures the image covers the container fully */
    object-position: center;
}
.stacked_banner .banner_item::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Black with 50% transparency */
    z-index: 1; /* Ensure this is above the .bg_img */
}
.stacked_banner .banner_item .fg_img{
    height:60%;
    width:80%;
    position: absolute;
    top:10%;
    left:10%;
    z-index: 100;
    /* object-fit: cover;
    object-position: center; */
}

.stacked_banner .banner_item.active {
    --w: 100%; /* Set width to 100% when clicked */
}
.stacked_banner .banner_item.active .fg_img{
    max-height:80%;
    max-width:80%;
    border-radius:10px;
}
.stacked_banner .banner_item.active .bg_img{
    height: 100%;
    width: 100%;
}
/* .stacked_banner .banner_item:hover {
    --w: 100%;
} */


.stacked_banner .banner_item .item_desc{
    width:200px;
    height:150px;
    bottom:5%;
    left:10%;
    position: absolute;
    z-index: 100;
    background-color:rgba(0, 0, 0, 0.624);
    padding:15px;
	transition: all 1000ms ease;
    border-radius:10px;
}
.stacked_banner .banner_item.active .item_desc{
    width:550px;
    height:100px;
}
.stacked_banner .banner_item .item_desc button{
    border:1px solid var(--skin-color-main);
    border-radius:5px;
    font-size:12px;
    padding:5px;
    background-color: var(--skin-color-main);
    color:aliceblue;
}
.stacked_banner .banner_item .item_desc button:hover{
    background-color: aliceblue;
    color:black;
}

.stacked_banner .banner_item .item_desc p{
    color:aliceblue;
    max-height:80px;
    height:100%;
}
.stacked_banner .banner_item.active .item_desc p{
    height:auto;
}

.stacked_banner .banner_item:not(:first-child) {
    margin-left: calc(-1 * var(--m));
}

/* .banner_item:nth-child(1) {
	background-image: url(https://themefisher.com/blog/flipmart.webp);
}

.banner_item:nth-child(2) {
	background-image: url(https://themefisher.com/blog/flatastic.webp);
}

.banner_item:nth-child(3) {
	background-image: url(https://themewagon.com/wp-content/uploads/2022/03/image-3-1.png);
}
.banner_item:nth-child(4) {
	background-image: url(https://codescandy.com/wp-content/uploads/2023/01/FreshCart-Bootstrap-5-E-commerce-Template.jpg);
}

.banner_item:nth-child(5) {
	background-image: url(https://themewagon.com/wp-content/uploads/2022/05/screencapture-technext-github-io-farmfresh-product-html-2022-05-15-16_28_02-1.png);
} */

</style>

<body class="bg-Light">



<section class="banner">
    <div class="stacked_banner">
        <div class="banner_items">

            <div class="banner_item" onclick="toggleEffect(this)">
                <img class="bg_img" src="https://themefisher.com/blog/flipmart.webp" alt="">
                <img class="fg_img" src="https://themefisher.com/blog/flipmart.webp" alt="">
                <div class="item_desc">
                    <p>Lorem ipsum dolor sit, amet conelit. Deleniti,</p>
                    <a href="#"><button>এখনই কিনুন</button></a>
                </div>
            </div>
            <div class="banner_item" onclick="toggleEffect(this)">
                <img class="bg_img" src="https://themefisher.com/blog/flatastic.webp" alt="">
                <img class="fg_img" src="https://themefisher.com/blog/flatastic.webp" alt="">
                <div class="item_desc">
                    <p>Lorem ipsum dolor sit, amet consectetur adipidem quasi</p>
                    <a href="#"><button>এখনই কিনুন</button></a>
                </div>
            </div>
            <div class="banner_item" onclick="toggleEffect(this)">
                <img class="bg_img" src="https://themewagon.com/wp-content/uploads/2022/03/image-3-1.png" alt="">
                <img class="fg_img" src="https://themewagon.com/wp-content/uploads/2022/03/image-3-1.png" alt="">
                <div class="item_desc">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicin</p>
                    <a href="#"><button>এখনই কিনুন</button></a>
                </div>
            </div>
            <div class="banner_item" onclick="toggleEffect(this)">
                <img class="bg_img" src="https://codescandy.com/wp-content/uploads/2023/01/FreshCart-Bootstrap-5-E-commerce-Template.jpg" alt="">
                <img class="fg_img" src="https://codescandy.com/wp-content/uploads/2023/01/FreshCart-Bootstrap-5-E-commerce-Template.jpg" alt="">
                <div class="item_desc">
                    <p>Lorem ipsum dolor sit, ameting elit. Deleniti,</p>
                    <a href="#"><button>এখনই কিনুন</button></a>
                </div>
            </div>
            <div class="banner_item" onclick="toggleEffect(this)">
                <img class="bg_img" src="https://themewagon.com/wp-content/uploads/2022/05/screencapture-technext-github-io-farmfresh-product-html-2022-05-15-16_28_02-1.png" alt="">
                <img class="fg_img" src="https://themewagon.com/wp-content/uploads/2022/05/screencapture-technext-github-io-farmfresh-product-html-2022-05-15-16_28_02-1.png" alt="">
                <div class="item_desc">
                    <p>Lorem ipsum dolor sit, amet consecteb quidem quasi</p>
                    <a href="#"><button>এখনই কিনুন</button></a>
                </div>
            </div>

        </div>
    </div>


    <script>
    function toggleEffect(element) {
        element.classList.toggle('active');
        }
    </script>


</section>



    <header class="container">
        <div class="mx-auto py-3 text-center">
            <h3 class="p-2">আপনার ব্যাবসার জটিলতার সহজ সমাধান</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item youtube w-100 mh-100 d-inline-block rounded" style="height: 700px"
                    src="{{ asset('front/assets/vid/ecommerce_video.mp4') }}">
                </iframe>
            </div>
            <h3 class="p-2 text-black h-5">
            প্রযুক্তির সাহায্যে ব্যবসা বাড়ান! আমাদের ই-কমার্স সাইটের মাধ্যমে আপনার পণ্য বিক্রি শুরু করুন!
            </h3>
            <a href="#checkout_section"><button class="py-2 px-4 rounded mt-2 bg_color color_white">
                এখানে অর্ডার করুন
            </button>
            </a>
        </div>
    </header>



    <section class="bg_dim_color w-100 p-5">
        <div class="accordion dark-accordion bg_color container py-5" id="simpleaccordion">
            <h4 class="h4 text-center text-white">
                নীচের প্রশ্নগুলো আমরা প্রতিনিয়ত পেয়ে থাকি। আশা করি এর মধ্যে
                আপনি আপনার প্রশ্নের উত্তর পেয়ে যাবেন এবং আমাদের তেলের
                সম্পর্কে বিস্তারিত জানতে পারবেন...
            </h4>
            <!-- Section 1 -->
            <div class="accordion-item bg_color border-0 border-bottom">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button text-white h-5 collapsed shadow-none border-bottom bg_color"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        খরচের সাশ্রয়  
                    </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapseOne">
                    <div class="accordion-body text-white">
                    ফিজিক্যাল শপের তুলনায়, ই-কমার্স সাইটে আপনার খরচ কমে যায়। আপনি ভাড়া, ইউটিলিটি বিল এবং অন্যান্য খরচ বাঁচাতে পারেন, যা আপনার লাভজনকতা বাড়ায়।
                    </div>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="accordion-item bg_color border-0 border-bottom">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button text-white h-5 collapsed shadow-none border-bottom bg_color"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        মার্কেটিং এবং প্রচার
                    </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapseTwo">
                    <div class="accordion-body text-white">
                    ডিজিটাল মার্কেটিং টুলসের সাহায্যে আপনি সোশ্যাল মিডিয়া, সার্চ ইঞ্জিন অপটিমাইজেশন (SEO) এবং অন্যান্য অনলাইন মার্কেটিং কৌশল ব্যবহার করে আপনার পণ্য প্রচার করতে পারেন।
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="accordion-item bg_color border-0 border-bottom">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button text-white h-5 collapsed shadow-none border-bottom bg_color"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        আমার প্রচুর চুল পড়ছে। আমার কি চুল পড়া কম হবে কিংবা
                        নতুন চুল গজাবে?
                    </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapseThree">
                    <div class="accordion-body text-white">
                        চুল পড়ার বিভিন্ন কারণ থাকতে পারে। কারও বংশগত কারণে
                        হয় কারও বা আবার প্রোটিনের অভাবে। আসলে চুল পড়া শুরু
                        হওয়ার আগে আমরা খুব কম মানুষই চুলের যত্ন নিই। কিন্তু
                        সময় থাকতে আপনি সঠিকভাবে যত্ন নিলে আপনি একদম টাক হয়ে
                        যাওয়া থেকে রক্ষা পাবেন। চুলের জন্য উপকারী প্রায় ৩০
                        টি প্রাকৃতিক উপাদানে তৈরি আমার তেলটি ব্যবহারে চুল
                        পড়া কমবে, নতুন চুল গজাবে, চুল লম্বা ও ঘন হবে, চুল
                        সিল্কি, শাইনি এবং কালো হবে, খুশকি থাকলে সেটাও কমে
                        যাবে, তেলটি ব্যবহারের অল্প কিছুদিনের মধ্যেই আপনি
                        পরিবর্তন টা বুঝতে পারবেন। মোটকথা চুলের যেকোনো
                        সমস্যার সমাধান আমার এই ন্যাচারাল হেয়ার অয়েল।
                    </div>
                </div>
            </div>

            <!-- Section 4 -->
            <div class="accordion-item bg_color border-0 border-bottom">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button text-white h-5 collapsed shadow-none border-bottom bg_color"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                        aria-controls="collapseFour">
                        আমার চুল অকালে পেকে যাচ্ছে। এই তেল কি আমার চুল কালো
                        করবে?
                    </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapseFour">
                    <div class="accordion-body text-white">
                        অকালে চুল পেকে যাওয়া চুলের জন্য খুব খারাপ লক্ষণ। এর
                        মানে আপনার চুলের স্বাস্থ্য ভালো নেই কিংবা প্রোটিনের
                        অভাব। সময় থাকতে সঠিক ভাবে যত্ন না নিলে সামনে আরও
                        ক্ষতি হবে। আমার তেলটি প্রাকৃতিক ভাবে আপনার চুলকে
                        কালো করবে শতভাগ। বহু মানুষের অকাল পক্কতার সমাধান
                        করছে আমার প্রাকৃতিক তেলটি।
                    </div>
                </div>
            </div>

            <!-- Section 5 -->
            <div class="accordion-item bg_color border-0 border-bottom">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button text-white h-5 collapsed shadow-none border-bottom bg_color"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                        aria-controls="collapseFive">
                        আমার খুশকির সমস্যা আছে। এই তেল কি খুশকি দূর করবে?
                    </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapseFive">
                    <div class="accordion-body text-white">
                        খুশকি হওয়া চুল পড়ে যাওয়ার প্রধান কারণ। আমার এই তেল
                        নিয়মিত ব্যবহারে খুশকি শতভাগ দূর হবে এবং আপনার চুল
                        পড়ে যাওয়া থেকে রক্ষা পাবে।
                    </div>
                </div>
            </div>

            <!-- Section 6 -->
            <div class="accordion-item bg_color border-0 border-bottom">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button text-white h-5 collapsed shadow-none border-bottom bg_color"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                        aria-controls="collapseSix">
                        কি কি উপদান দিয়ে তৈরি?
                    </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapseSix">
                    <div class="accordion-body text-white">
                        খাটি নারিকেল তেলের সাথে জবা ফুলের নির্যাস, আমলকি,
                        মেথি, ব্রাহ্মি, কারিপাতা, শিকাকাই, রিঠা সহ প্রায় ৩০
                        টি প্রাকৃতিক উপাদান ব্যবহার করা হয়েছে যা চুলের জন্য
                        অনেক অনেক উপকারী।
                    </div>
                </div>
            </div>

            <!-- Section 7 -->
            <div class="accordion-item bg_color border-0 border-bottom">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button text-white h-5 collapsed shadow-none border-bottom bg_color"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                        aria-controls="collapseSeven">
                        আপনারা কি কোন গ্যারান্টি দেন?
                    </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapseSeven">
                    <div class="accordion-body text-white">
                        ১০০% গ্যারান্টির কথা বলা বিক্রির জন্য মিথ্যার আশ্রয়
                        ছাড়া আর কিছুই না। কারণ চুলপড়ার অনেক কারণ থাকতে
                        পারে। অনেকের বংশগত কারণেও চুল পড়ে থাকে। আবার অনেকের
                        প্রোটিনের অভাবে চুল পড়ে। আমরা শতভাগ গ্যারান্টি
                        দিইনা তবে প্রাকৃতিক যেসব উপাদান চুলের জন্য উপকারী
                        এমন প্রায় ৩০ টা উপাদান দিয়ে তেলটি তৈরি করেছি। আমি
                        এবং আরও অনেকে উপকার পেয়েছে। আশা করছি আপনিও উপকার
                        পাবেন। এছাড়াও আমাদের পেইজে আপনি উপকার পেয়েছে এমন
                        মানুষের প্রচুর পরিমাণে রিভিউ দেখতে পাবেন। নিয়ম মেনে
                        ব্যবহার করলে আপনি অবশ্যই উপকার পাবেন।
                    </div>
                </div>
            </div>

            <!-- Section 8 -->
            <div class="accordion-item bg_color border-0 border-bottom">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button text-white h-5 collapsed shadow-none border-bottom bg_color"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                        aria-controls="collapseEight">
                        আগে থেকে কোন টাকা দেয়া লাগবে?
                    </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapseEight">
                    <div class="accordion-body text-white">
                        আগে থেকে এক টাকাও দেয়া লাগবে না। ডেলিভারি ম্যান এর
                        কাছ থেকে প্রোডাক্ট বুঝে পেয়ে তারপর টাকা দিবেন।
                        অর্ডার করতে নীচের ফর্মটি পূরণ করুন।
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="container p-3 text-center">
        <h3 class="py-3">Pricing</h3>
        <div class="container mx-auto card-deck row gap-4">
            <div class="card col-md pt-2 shadow-lg">
                <div class="card-body text-center">
                    <p class="card-text fg_color h4">
                        ট্রায়াল কোর্স – ২০০ মিলি তেল
                    </p>
                    <h5 class="card-title h3">600 টাকা</h5>
                    <p class="clard-text fg_color h4">
                        (ঢাকার ভেতর ৮০ টাকা ঢাকার বাইরে ১৪০ টাকা ডেলিভারি
                        চার্জ যোগ হবে)
                    </p>
                </div>
            </div>
            <div class="card col-md pt-2 shadow-lg">
                <div class="card-body text-center">
                    <p class="card-text fg_color h4">
                        ট্রায়াল কোর্স – ২০০ মিলি তেল
                    </p>
                    <h5 class="card-title h3">600 টাকা</h5>
                    <p class="clard-text fg_color h4">
                        (ঢাকার ভেতর ৮০ টাকা ঢাকার বাইরে ১৪০ টাকা ডেলিভারি
                        চার্জ যোগ হবে)
                    </p>
                </div>
            </div>
            <div class="card col-md pt-2 shadow-lg">
                <div class="card-body text-center">
                    <p class="card-text fg_color h4">
                        ট্রায়াল কোর্স – ২০০ মিলি তেল
                    </p>
                    <h5 class="card-title h3">600 টাকা</h5>
                    <p class="clard-text fg_color h4">
                        (ঢাকার ভেতর ৮০ টাকা ঢাকার বাইরে ১৪০ টাকা ডেলিভারি
                        চার্জ যোগ হবে)
                    </p>
                </div>
            </div>
        </div>
        <h3 class="mt-3">
            শত শত মানুষের উপকার পাওয়ার রিভিউ আমাদের ফেসবুক পেইজে আছে। তার
            মধ্যে থেকে কিছু রিভিউ এখানে দেয়া হলঃ
        </h3>

        <img class="w-100 h-100 img-fluid" src="{{ asset('front/assets/images/ecommerce/comments.jpg') }}" alt="" />
    </section>

    <section id="checkout_section">
        <div class="container my-5 border border-black rounded p-5">
            <h4 class="text-center py-4">
                অর্ডার করতে আপনার সঠিক তথ্য দিয়ে নিচের ফর্মটি সম্পূর্ণ পূরন
                করুন। (আগে থেকে কোন টাকা দেয়া লাগবে না। প্রোডাক্ট হাতে পাবার
                পর টাকা দিবেন)
            </h4>
            <div class="row">
                <!-- Billing Details -->
                <div class="col-md-6">
                    <h4>Billing Details</h4>
                    <form action="{{ route('quick.payment') }}" method="post">
                    @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">আপনার নাম লিখুন *</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="আপনার নাম লিখুন" required />
                            <small class="text-danger">আপনার নাম লিখুন is required</small>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">আপনার ঠিকানা লিখুন *</label>
                            <input type="text" class="form-control" name="address" id="address"
                                placeholder="বাসা নং, রোড নং, থানা, জেলা" required />
                            <small class="text-danger">আপনার ঠিকানা লিখুন is required</small>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">আপনার মোবাইল নাম্বারটি লিখুন</label>
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="মোবাইল নাম্বার" />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">আপনার ইমেইল এড্রেস লিখুন</label>
                            <input type="email" class="form-control" id="phone" name="email" placeholder="মোবাইল ইমেইল এড্রেস" />
                        </div>

                      

                </div>

                <!-- Order Summary -->
                <div class="col-md-6">
                    <h4>Your Order</h4>
                    <div class="p-3 mb-3">
                        <div class="d-flex justify-content-between border-bottom">
                            <p>Product</p>
                            <p>Subtotal</p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p>50% Pre-Payment</p>
                            <p>৳ 4,999.50</p>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between">
                            <p>Subtotal</p>
                            <p>৳ 4,999.50</p>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between">
                            <p>Total</p>
                            <p>৳ 4,999.50</p>
                        </div>
                        <div class="alert alert-secondary mt-3">
                            ৫০% প্রি-পেমেন্ট <br />
                            পরবর্তী ৫০% আপনার সার্ভিস বা প্রোডাক্ট পাওয়ার পরে পেমেন্ট করতে পারবেন।
                        </div>
                        <input type="hidden" name="amount" value="4999">
                        <input type="submit" class="btn btn-primary bg_color w-100" style="font-weight: 600;" value="Place Order ৳ 4,999.50">
                            
                    </div>
                </div>
            </div>
            </form>
            <h3 class="fg_color text-center">
                কোন প্রশ্ন বা সাহায্যের প্রয়োজনে কল করুনঃ 09613-651212
            </h3>
        </div>
    </section>

    <main></main>
    <footer>
        <div class="help-button-wrapper position-fixed bottom-0 start-0 text-right">
            <ul class="help-list list-unstyled">
                <li class="pb-2 position-relative">
                    <button class="help-button p-4 rounded-circle bg-primary btn-hover border border-white">
                        <i class="fa-solid fa-phone fa-xl" style="color: #ffffff"></i>
                        <span class="tooltip-text">Phone এ কল দিন </span>
                    </button>
                </li>

                <li class="pb-2 d-inline-block position-relative ">
                    <button class="help-button p-4 btn btn-hover border border-white rounded-circle bg-primary">
                        <i class="fa-brands fa-whatsapp fa-xl" style="color: #ffffff"></i>
                        <span class="tooltip-text">WhatsApp এ কল দিন</span>
                    </button>
                </li>
            </ul>

            <button class="help-button p-4 rounded-circle bg-primary position-relative btn-hover border border-white">
                <i class="fa-solid fa-message fa-xl" style="color: #ffffff"></i>
                <span class="tooltip-text">Message</span>
            </button>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $('.help-button').on('click', function () {
            $('.help-button-wrapper').toggleClass('expanded');
        });
    </script>
</body>

</html>