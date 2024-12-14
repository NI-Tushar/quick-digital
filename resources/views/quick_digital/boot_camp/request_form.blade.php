@extends('quick_digital.layout.layout')
@push('css')
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
@endpush
@section('content')



<style>
    input[type="checkbox"]:checked,
    input[type="radio"]:checked {
        accent-color: var(--primary-color); 
    }
    button[type="submit"]{
        background-color:rgb(58, 2, 86); 
        color:aliceblue;
        border:1px solid rgb(58, 2, 86);
    }
    button[type="submit"]:hover{
        background:transparent;
        border:1px solid rgb(58, 2, 86);
    }
</style>

    <main>
        <section class="my-5">
            <div class="container">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 style="color: rgb(58, 2, 86);font-weight:900;">আমাদের Bootcamp এ জয়েন করুন</h3>
                        <p>BootCamp হলো অ্যাফিলিয়েট মার্কেটারদের জন্য একটি অনন্য সুযোগ! এখানে আপনি শিখবেন কীভাবে আমাদের প্রোডাক্ট এবং সার্ভিস বিভিন্ন জেলায় সেল করতে হয়। আমাদের BootCamp থেকে প্রয়োজনীয় দিকনির্দেশনা এবং সাপোর্ট পেয়ে, আপনি সেল বাড়িয়ে আমাদের কাছ থেকে সরাসরি প্রফিট অর্জন করতে পারবেন। ক্যারিয়ার গড়তে এবং আয়ের নতুন পথ তৈরি করতে আজই জয়েন করুন আমাদের BootCamp-এ!</p>
                    </div>
                    <div  style="background-color:rgb(223, 223, 223);" class="card-body">
                        <form action="{{ route('bootcamp.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group mb-3">
                                <label for="name" class="mb-1">আপনার পুরো নাম দিন</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="আপানার নাম" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="mb-1">আপানার ই-মেইল দিন</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="আপানার ই-মেইল এড্রেস" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="phone" class="mb-1">আপনার মোবাইল নম্বর দিন</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="মোবাইল নম্বর- 01648800000" value="{{ old('phone') }}">
                                @error('phone')
                                <span class="text-danger bold">{{ $message }}</span>
                            @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="profession" class="mb-1">আপনার পেশা</label>
                                <select class="form-control @error('profession') is-invalid @enderror" name="profession" id="profession">
                                    <option value=""disabled selected>আপনার পেশা সিলেক্ট করুন</option>
                                    <option value="Student">ছাত্র/ছাত্রী</option>
                                    <option value="Thacher">শিক্ষক/শিক্ষিকা</option>
                                    <option value="Employee">চাকরিজীবি</option>
                                    <option value="Owner">ব্যাবশায়ী</option>
                                </select>
                                @error('profession')
                                    <span class="text-danger bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="institute" class="mb-1">কোম্পানি / প্রতিষ্ঠান</label>
                                <input type="text" class="form-control @error('institute') is-invalid @enderror" id="institute" name="institute" placeholder="আপানার কোম্পানির নাম / প্রতিষ্ঠানের নাম - Company, XYZ School, XYZ Collage" value="{{ old('institute') }}">
                                @error('institute')
                                    <span class="text-danger bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="gender" class="mb-1">Gender সিলেক্ট করুন</label>
                                <div class="d-flex" style="gap: 1em">
                                    <div class="form-check">
                                        <input type="radio" name="gender" id="gender" value="Male" checked>
                                        <label class="form-check-label" for="gender">
                                          Male
                                        </label>
                                      </div>

                                    <div class="form-check">
                                        <input type="radio" name="gender" id="gender" value="Female">
                                        <label class="form-check-label" for="gender">
                                          Female
                                        </label>
                                    </div>
                                </div>
                                @error('gender')
                                    <span class="text-danger bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="interests" class="mb-1">আপনি কোনটিতে আগ্রহী</label>
                                <select class="form-control select2 @error('interests') is-invalid @enderror" name="interests[]" id="interest" multiple="multiple">
                                    <option value="">Select Your Interest</option>
                                    <option value="Software">Software</option>
                                    <option value="E-Book">E-Book</option>
                                    <option value="Digital-Product">Digital-Product</option>
                                    <option value="Physical-Product">Physical-Product</option>
                                </select>
                                @error('interests')
                                    <span class="text-danger bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="division" class="mb-1">বিভাগ</label>
                                <select name="division" id="division" class="form-control select2 @error('division') is-invalid @enderror">
                                    <option value="">Select Division</option>
                                    <option value="Barisal">Barisal</option>
                                    <option value="Chattogram">Chattogram</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Mymensingh">Mymensingh</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Sylhet">Sylhet</option>
                                </select>
                                @error('division')
                                    <span class="text-danger bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="district" class="mb-1">জেলা</label>
                                <select name="district" id="district" class="form-control select2 @error('district') is-invalid @enderror">
                                    <option value="">Select District</option>
                                    <optgroup label="Barishal">
                                        <option value="Barishal">Barishal</option>
                                        <option value="Barguna">Barguna</option>
                                        <option value="Bhola">Bhola</option>
                                        <option value="Jhalokati">Jhalokati</option>
                                        <option value="Patuakhali">Patuakhali</option>
                                        <option value="Pirojpur">Pirojpur</option>
                                    </optgroup>
                                    <optgroup label="Chattogram">
                                        <option value="Bandarban">Bandarban</option>
                                        <option value="Brahmanbaria">Brahmanbaria</option>
                                        <option value="Chandpur">Chandpur</option>
                                        <option value="Chattogram">Chattogram</option>
                                        <option value="Cox's Bazar">Cox's Bazar</option>
                                        <option value="Cumilla">Cumilla</option>
                                        <option value="Feni">Feni</option>
                                        <option value="Khagrachari">Khagrachari</option>
                                        <option value="Lakshmipur">Lakshmipur</option>
                                        <option value="Noakhali">Noakhali</option>
                                        <option value="Rangamati">Rangamati</option>
                                    </optgroup>
                                    <optgroup label="Dhaka">
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Faridpur">Faridpur</option>
                                        <option value="Gazipur">Gazipur</option>
                                        <option value="Gopalganj">Gopalganj</option>
                                        <option value="Kishoreganj">Kishoreganj</option>
                                        <option value="Madaripur">Madaripur</option>
                                        <option value="Manikganj">Manikganj</option>
                                        <option value="Munshiganj">Munshiganj</option>
                                        <option value="Narayanganj">Narayanganj</option>
                                        <option value="Narsingdi">Narsingdi</option>
                                        <option value="Rajbari">Rajbari</option>
                                        <option value="Shariatpur">Shariatpur</option>
                                        <option value="Tangail">Tangail</option>
                                    </optgroup>
                                    <optgroup label="Khulna">
                                        <option value="Bagerhat">Bagerhat</option>
                                        <option value="Chuadanga">Chuadanga</option>
                                        <option value="Jashore">Jashore</option>
                                        <option value="Jhenaidah">Jhenaidah</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Kushtia">Kushtia</option>
                                        <option value="Magura">Magura</option>
                                        <option value="Meherpur">Meherpur</option>
                                        <option value="Narail">Narail</option>
                                        <option value="Satkhira">Satkhira</option>
                                    </optgroup>
                                    <optgroup label="Mymensingh">
                                        <option value="Jamalpur">Jamalpur</option>
                                        <option value="Mymensingh">Mymensingh</option>
                                        <option value="Netrokona">Netrokona</option>
                                        <option value="Sherpur">Sherpur</option>
                                    </optgroup>
                                    <optgroup label="Rajshahi">
                                        <option value="Bogura">Bogura</option>
                                        <option value="Chapainawabganj">Chapainawabganj</option>
                                        <option value="Joypurhat">Joypurhat</option>
                                        <option value="Naogaon">Naogaon</option>
                                        <option value="Natore">Natore</option>
                                        <option value="Pabna">Pabna</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Sirajganj">Sirajganj</option>
                                    </optgroup>
                                    <optgroup label="Rangpur">
                                        <option value="Dinajpur">Dinajpur</option>
                                        <option value="Gaibandha">Gaibandha</option>
                                        <option value="Kurigram">Kurigram</option>
                                        <option value="Lalmonirhat">Lalmonirhat</option>
                                        <option value="Nilphamari">Nilphamari</option>
                                        <option value="Panchagarh">Panchagarh</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Thakurgaon">Thakurgaon</option>
                                    </optgroup>
                                    <optgroup label="Sylhet">
                                        <option value="Habiganj">Habiganj</option>
                                        <option value="Moulvibazar">Moulvibazar</option>
                                        <option value="Sunamganj">Sunamganj</option>
                                        <option value="Sylhet">Sylhet</option>
                                    </optgroup>
                                </select>
                                @error('district')
                                    <span class="text-danger bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="address" class="mb-1">এড্রেস দিন</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="আপনার সম্পুর্ন এড্রেস দিন" cols="30" rows="2">{{ old('address') }}</textarea>
                                @error('address')
                                    <span class="text-danger bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <div class="form-check">
                                    <input type="checkbox" id="agree" name="agree" checked>
                                    <label class="form-check-label" for="agree">
                                       আমি ওয়েবসাইটের সকল নীতি এবং শর্তাবলীতে সম্মতি দিচ্ছি
                                    </label>
                                </div>
                                @error('agree')
                                    <span class="text-danger bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn">সাবমিট করুন</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>




    </main>
@endsection
@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

    <script>

        $( '.select2' ).select2( {
            theme: 'bootstrap-5',
            'placeholder': 'Select Your Interest'
        } );

    </script>

    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK',
        });
    </script>
    @endif


@endpush
