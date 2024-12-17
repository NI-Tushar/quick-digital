<!-- Box icon CSS   -->
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<link href="{{ asset('css/boxicons.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="{{ url ('front/styles/user_dashboard.css') }}">
<!-- End -->




<div class="sidebar close">

<div class="toggle_expend logo-details">

  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <rect x="3" y="3" width="7" height="7"></rect>
    <rect x="14" y="3" width="7" height="7"></rect>
    <rect x="3" y="14" width="7" height="7"></rect>
    <rect x="14" y="14" width="7" height="7"></rect>
  </svg>
  <span class="logo_name">ড্যাশবোর্ড</span>


<div class="expend_icon">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <line x1="19" y1="12" x2="5" y2="12"></line>
      <polyline points="12 5 5 12 12 19"></polyline>
  </svg>
</div>

</div>

<ul class="nav-links">

<!-- __________________________ sidbar list start -->





        <li>
          <a href="{{ route('password.update') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="5" y="11" width="14" height="10" rx="2" ry="2"></rect>
          <path d="M12 11V7a4 4 0 0 1 8 0v4"></path>
          <line x1="12" y1="15" x2="12" y2="17"></line>
          <line x1="10" y1="17" x2="14" y2="17"></line>
        </svg>
        
            <span class="link_name" style=" font-size: 15px;">পাসওয়ার্ড পরিবর্তন করুন</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" style=" font-size: 15px;" href="#">পাসওয়ার্ড পরিবর্তন করুন</a></li>
          </ul>
        </li>
        
        
        <li>
          <a href="{{ route('user.update') }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="7" r="4"></circle>
          <path d="M5.5 21c1.5-4 6.5-4 7-4s5.5 0 7 4"></path>
        </svg>
            <span class="link_name" style=" font-size: 15px;">প্রোফাইল আপডেট করুন</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" style=" font-size: 15px;" href="">প্রোফাইল আপডেট করুন</a></li>
          </ul>
        </li>


        <li>
          <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
     
          <circle cx="9" cy="21" r="1"></circle>
          <circle cx="20" cy="21" r="1"></circle>
          <path d="M1 1h4l1.68 7.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
          

          <path d="M13 11l3-3-3-3"></path>
          <line x1="10" y1="8" x2="16" y2="8"></line>
        </svg>
            <span class="link_name" style=" font-size: 15px;">আপনার অর্ডার</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" style=" font-size: 15px;" href="#">আপনার অর্ডার</a></li>
          </ul>
        </li>
     
        

        <li>
          <a href="{{ route('user.ebook') }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 19.5a2.5 2.5 0 0 1 2.5-2.5H20" />
            <path d="M4 4a2 2 0 0 1 2-2h13.5v17H6.5A2.5 2.5 0 0 0 4 19.5V4z" />
            <line x1="6" y1="10" x2="20" y2="10" />
        </svg>

            <span class="link_name" style=" font-size: 15px;">আপনার ই-বুক</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" style=" font-size: 15px;" href="#">আপনার ই-বুক</a></li>
          </ul>
        </li>


        
        <li>
          <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <!-- Paper -->
            <path d="M16 2h-8a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-12l-6-6z" />
            <path d="M16 2v6h6" />
            
            <!-- Pencil -->
            <path d="M12 18l3-3" />
            <path d="M14 14l6-6a2 2 0 0 0-3-3l-6 6" />
            <line x1="12" y1="18" x2="6" y2="20" />
            <line x1="15" y1="15" x2="12" y2="18" />
          </svg>
            <span class="link_name" style=" font-size: 15px;">আপনার কোর্স</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" style=" font-size: 15px;" href="#">আপনার কোর্স</a></li>
          </ul>
        </li>


        

        <hr style="color:white;">

      <li>
        <a href="">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="7" r="4"></circle>
          <path d="M5.5 21c1.5-4 6.5-4 7-4s5.5 0 7 4"></path>
        </svg>
          <span class="link_name" style=" font-size: 15px;">ইনস্ট্রাক্টর (Instructor)</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" style=" font-size: 15px;" href="#">ইনস্ট্রাক্টর (Instructor)</a></li>
        </ul>
      </li>


        @if (Auth::guard('user')->check())
          <li>
              <a href="{{ url('user/logout') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                      <polyline points="16 17 21 12 16 7"></polyline>
                      <line x1="21" y1="12" x2="9" y2="12"></line>
                  </svg>
                  <span class="link_name" style="font-size: 15px;">লগ-আউট করুন</span>
              </a>
              <ul class="sub-menu blank">
                  <li>
                      <a class="link_name" style="font-size: 15px;" href="{{ url('user/logout') }}">লগ-আউট করুন</a>
                  </li>
              </ul>
          </li>
        @endif





<!-- __________________________ sidbar list end -->

</ul>

</div>


<div class="mov_arrow" onclick="show_sidebar_mov()">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
<!-- Background box -->
<rect x="2" y="2" width="20" height="20" rx="3" ry="3" fill="#11101d" /> <!-- Background color -->
<!-- Right arrow -->
<path d="M10 7l5 5-5 5" stroke="#FFFFFF" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" /> <!-- Arrow color -->
</svg>
</div>




    
<script>
    function show_sidebar_mov() {
      const sidebar = document.querySelector(".sidebar.close");
      const homeSection = document.querySelector(".home-section");
      const top_icon = document.querySelector(".toggle_expend");


      // Check the current width of the sidebar
      if (sidebar.style.width === "78px") {
          sidebar.style.width = "10px";
          homeSection.style.left = "0px";
          homeSection.style.width = "100%";
      } else {
          sidebar.style.width = "78px";
          homeSection.style.left = "78px";
          homeSection.style.width = `calc(100% - 78px)`;
      }
  }


      function adjustClassesBasedOnScreenSize() {
        const screenWidth = window.innerWidth;
        const sidebar = document.querySelector(".sidebar");

        if (!sidebar) {
          console.error("Sidebar element not found!");
          return;
        }

        if (screenWidth < 900) {
          sidebar.classList.add("close"); // Add the "close" class
        } else {
          sidebar.classList.remove("close"); // Remove the "close" class
        }
      }

    // Run the function initially
    adjustClassesBasedOnScreenSize();

    // Listen for window resize and adjust classes
    window.addEventListener("resize", adjustClassesBasedOnScreenSize);
</script>

    
 <script src="{{ url('front/js/user_dashboard.js') }}"></script>
