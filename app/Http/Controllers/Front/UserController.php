<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{

    public function index()
    {
        return view('front.users.index');
    }


    public function loginUser(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
    
            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required|max:30|min:6',
            ];
    
            $customMessage = [
                'email.required' => "Email is required",
                'email.email' => "Valid email is required",
                'password.required' => 'Password is required'
            ];
    
            $request->validate($rules, $customMessage);
    
            $remember = $request->filled('remember_me');
    
            if (Auth::guard('user')->attempt(['email' => $data['email'], 'password' => $data['password']], $remember)) {
                $user = Auth::guard('user')->user();
                if ($user->status == 1) {
                    return redirect("quick-digital/index");
                } else {
                    Auth::guard('user')->logout();
                    return redirect()->back()->with("error_message", "Your account is not active.");
                }
            } else {
                return redirect()->back()->with("error_message", "Invalid Email or Password");
            }
        }
        return view('front.users.login');
    }
    


    public function registerUser(Request $request)
    {
        if ($request->isMethod('post')) {
            // Process POST request for registration
            $data = $request->all();

            $rules = [
                'name' => 'required|max:255',
                'mobile' => ['required', 'numeric', 'digits:11'],
                'email' => 'required|email|unique:users|max:255',
                'password' => 'required|string|min:6',
            ];

            $customMessages = [
                'name.required' => 'নাম লিখুন',
                'mobile.required' => 'মোবাইল নম্বর লিখুন',
                'mobile.numeric' => 'মোবাইল নম্বর অবশ্যই সংখ্যামূলক হতে হবে।',
                'mobile.digits' => 'মোবাইল নম্বর ১১ টি সংখ্যা হতে হবে',
                'email.required' => 'ইমেইল লিখুন',
                'email.email' => 'Invalid email format',
                'email.unique' => 'Email is already taken',
                'password.required' => 'Password is required',
                'password.min' => 'Password must be at least 6 characters long',
            ];

            $validator = Validator::make($data, $rules, $customMessages);

            if ($validator->fails()) {
                return redirect()->back()->with('error_message', $validator->errors()->first());
            }

            // Validation passed, proceed with user creation
            $user = new User;
            $user->name = $data['name'];
            $user->mobile = $data['mobile'];
            $user->email = $data['email'];
            $user->password = bcrypt($data['password']);
            $user->address = '';
            $user->city = '';
            $user->state = '';
            $user->country = '';
            $user->zipcode = '';
            $user->status = 1;
            $user->is_instructor = 0;
            $user->save();

            // Redirect to the login page
            return redirect()->route('user.login')->with('success_message', 'Registration successful. Please login.');
        } else {
            // Handle GET request for displaying the registration form
            return view('front.users.register');
        }
    }

    public function updatePassword(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            // Check if the new password matches the confirmation password
            if ($data['new_password'] !== $data['confirm_password']) {
                return redirect()->back()->with('error_message', 'The new password and confirmation password do not match.');
            }

            // Define validation rules
            $rules = [
                'current_password_user' => 'required',
                'new_password' => 'required|string|min:6|max:30',
                'confirm_password' => 'required',
            ];

            // Define custom error messages
            $messages = [
                'new_password.min' => 'The new password must be at least 6 characters.',
                'new_password.max' => 'The new password must not exceed 30 characters.',
            ];

            // Validate the request data
            $validator = Validator::make($data, $rules, $messages);

            // Check if validation fails
            if ($validator->fails()) {
                // If validation fails, set error message and redirect back
                return redirect()->back()->with('error_message', $validator->errors()->first());
            }

            // Check current password
            if (Hash::check($data['current_password_user'], Auth::guard('user')->user()->password)) {
                // Update password
                User::where('id', Auth::guard('user')->user()->id)->update([
                    'password' => bcrypt($data['new_password'])
                ]);
                return view('quick_digital.index');
                // return redirect()->back()->with('success_message', 'Password has been updated successfully!');
            } else {
                return redirect()->back()->with('error_message', 'Your current password is incorrect!');
            }
        }
        return view('front.users.update_password');
    }

    public function checkCurrentPassword(Request $request)
    {
        $data = $request->all();
        if (Hash::check($data['current_password_user'], Auth::guard('user')->user()->password)) {
            return "true";
        } else {
            return "false";
        }
    }

    public function updateUserDetails(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            $rules = [
                'user_name' => 'required|max:255',
                'user_mobile' => ['required', 'numeric', 'digits:11'],
                'user_image' => 'image',
                'user_address' => 'required',
                'user_city' => 'required',
                'user_state' => 'required',
                'user_country' => 'required',
                'user_zipcode' => 'required',

            ];

            $customMessage = [
                'user_name.required' => "নাম খালি রাখা যাবে না",
                'user_mobile.required' => 'মোবাইল নম্বর খালি রাখা যাবে না',
                'user_mobile.numeric' => 'মোবাইল নম্বর অবশ্যই সংখ্যামূলক হতে হবে।',
                'user_mobile.digits' => 'মোবাইল নম্বর ১১ টি সংখ্যা হতে হবে',
                'user_image.image' => "valid image required",
                'user_address.required' => "Address is required",
                'user_city.required' => "City is required",
                'user_state.required' => "State is required",
                'user_country.required' => "Country is required",
                'user_zipcode.required' => "Zipcode/Postal code is required",
            ];

            $validator = Validator::make($data, $rules, $customMessage);

            if ($validator->fails()) {
                return redirect()->back()->with('error_message', $validator->errors()->first());
            }

            // Upload images
            if ($request->hasFile('user_image')) {
                $image_tmp = $request->file('user_image');
                if ($image_tmp->isValid()) {
                    // Get image extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    // Generate new image name
                    $image_name = rand(111, 99999) . '.' . $extension;
                    // Save image
                    $image_path = 'admin/images/user_images/' . $image_name;
                    Image::make($image_tmp)->save($image_path);
                    // Update image field in database
                    User::where('email', Auth::guard('user')->user()->email)->update([
                        'image' => $image_name, // Assuming 'image' is the field in your database
                    ]);
                }
            }

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }


            // Update User Details
            User::where('email', Auth::guard('user')->user()->email)->update([
                'name' => $data['user_name'],
                'address' => $data['user_address'],
                'city' => $data['user_city'],
                'state' => $data['user_state'],
                'country' => $data['user_country'],
                'zipcode' => $data['user_zipcode'],
                'mobile' => $data['user_mobile'],
            ]);

            return view('quick_digital.index');
            // return redirect()->back()->with('success_message', 'Details Updated Successfully!☙');
        }

        return view('quick_digital.index');
        // return view('front.users.update_user_details');
    }

    public function logoutUser(Request $request)
    {
        Auth::guard('user')->logout();

        return redirect()->route('quick-digital.index')->with('success_message', 'Logged out successfully.');
    }

    public function forgotPassword(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|exists:users',
            ], [
                'email.exists' => 'Email does not exist'
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => false, 'type' => 'error', 'errors' => $validator->errors()]);
            } else {
                // Email exists, handle password reset logic here
                $email = $data['email'];
                $code = base64_encode($email);
                $messageData = ['email' => $data['email'], 'code' => $code];
                Mail::send('emails.reset_password', $messageData, function ($message) use ($email) {
                    $message->to($email)->subject('Reset Your Password - FARHANX');
                });
                return response()->json(['status' => true, 'type' => 'success', 'message' => 'Password reset link sent successfully']);
            }
        } else {
            return view('front.users.forgot_password');
        }
    }

    public function resetPassword(Request $request, $code = null)
    {
        if ($request->ajax()) {
            $data = $request->all();

            $email = base64_decode($data['code']);
            $userCount = User::where('email', $email)->count();

            if ($userCount > 0) {
                // Update New Password
                User::where('email', $email)->update(['password' => bcrypt($data['password'])]);

                // Send confirmation mail to user
                $messageData = ['email' => $email];
                Mail::send('emails.reset_password_confirmation', $messageData, function ($message) use ($email) {
                    $message->to($email)->subject('Password Updated - FARHANX');
                });

                // Show success message
                return response()->json(['type' => 'success', 'message' => 'Password reset for your account. You can login with your new password now.']);
            } else {
                abort(404);
            }
        } else {
            // If the request is not AJAX, return the view for the reset password form
            return view('front.users.reset_password')->with(compact('code'));
        }
    }
}
