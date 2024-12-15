@extends('wise_corporation.layout.layout')
@extends('front.users.user_dashboard.sidebar')

@section('content')
<link rel="stylesheet" href="{{ url ('front/styles/update_password.css') }}">


<section class="home-section">
      <div class="home-content">

              <div class="update_form_wrapper">
                <div class="form_container">
                  <div class="title_container">
                  <h2>পাসওয়ার্ড আপডেট করুন</h2>
                </div>

                @if (Session::has('error_message'))
                    <div class="alert bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
                        <strong>Oh snap! </strong>{{ Session::get('error_message') }}
                    </div>
                @endif
                @if (Session::has('success_message'))
                    <div class="alert bg-success alert-icon-left text-white alert-dismissible mb-2" role="alert">
                           <strong>Well done!</strong> {{ Session::get('success_message') }}
                    </div>
                @endif

                <div class="row clearfix">
                  <div class="">
                    <form method="POST" action="{{ url('user/update_password') }}">
                      @csrf

                      <div class="input_field"> 
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                              <circle cx="12" cy="8" r="4" />
                              <path d="M12 14c-5.33 0-8 2.67-8 4v2h16v-2c0-1.33-2.67-4-8-4z" />
                            </svg>
                        </span>
                        <input type="email" name="email" placeholder="Email" value="{{ Auth::guard('user')->user()->email }}" readonly="" />
                      </div>


                      <div class="input_field"> 
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="5" y="11" width="14" height="10" rx="2" ry="2"></rect>
                            <path d="M12 11V7a4 4 0 0 1 8 0v4"></path>
                            <line x1="12" y1="15" x2="12" y2="17"></line>
                            <line x1="10" y1="17" x2="14" y2="17"></line>
                          </svg>
                        </span>
                        <input type="password" name="current_password_user" placeholder="বর্তমান পাসওয়ার্ড দিন" required />
                      </div>

                      <div class="input_field"> 
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                            <path d="M12 2C9.24 2 7 4.24 7 7v3H6c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-8c0-1.1-.9-2-2-2h-1V7c0-2.76-2.24-5-5-5zm-3 7V7c0-1.65 1.35-3 3-3s3 1.35 3 3v2H9zm3 8c-.83 0-1.5-.67-1.5-1.5S11.17 14 12 14s1.5.67 1.5 1.5S12.83 17 12 17z" />
                          </svg>
                        </span>
                        <input type="password" name="new_password" placeholder="নতুন পাসওয়ার্ড দিন" required />
                      </div>

                      <div class="input_field">
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                <path d="M12.65 10a5.5 5.5 0 1 0-1.65 1.65L15 16v2h2v-2h2v-2h-2v-2h-2l-4.35-4.35zM7 9a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                          </svg>
                      </span>

                        <input type="password" name="confirm_password" placeholder="পুনরায় পাসওয়ার্ড দিন" required />

                      </div>
     

           
              <input class="button" type="submit" value="সেভ করুন" />
            </form>
          </div>
        </div>
  </div>
</div>



</div>
</section>



@endsection
