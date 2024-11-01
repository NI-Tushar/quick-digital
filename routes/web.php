    <?php

    use App\Http\Controllers\Admin\InstructorRequestController;
    use App\Http\Controllers\CartController;
    use App\Http\Controllers\PaymentController;
    use App\Http\Controllers\Front\HomeController;
    use App\Http\Controllers\PDFController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('quick_digital.index');
    });

    Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
        Route::match(['get', 'post'], 'login', 'AdminController@login');

        Route::group(['middleware' => ['admin']], function () {
            Route::get('dashboard', 'AdminController@dashboard');
            Route::post('check_current_password', 'AdminController@checkCurrentPassword');
            Route::match(['get', 'post'], 'update_password', 'AdminController@updatePassword');
            Route::match(['get', 'post'], 'update_admin_details', 'AdminController@updateAdminDetails');
            Route::get('logout', 'AdminController@logout');

            //CMS PAGE
            Route::get('cms-page', 'CmsController@index');
            Route::post('update-cms-page-status', 'CmsController@update');
            Route::match(['get', 'post'], 'add-edit-cms-page/{id?}', 'CmsController@edit');
            Route::get('delete-cms-page/{id?}', 'CmsController@destroy');

            //User
            Route::get('users', 'AdminController@Users');
            Route::match(['get', 'post'], 'add-edit-user/{user_id?}', 'AdminController@addEditUser');
            Route::post('update-user-status', 'AdminController@updateUserStatus');
            Route::get('delete-user/{user_id?}', 'AdminController@deleteUser');

            //instructor
            Route::get('instructors', 'AdminController@Instructors');
            Route::get('instructor-requests', 'InstructorRequestController@instructorRequests');
            Route::get('reject-instructor/{id}', 'InstructorRequestController@rejectInstructor');
            Route::get('approve-instructor/{id}', 'InstructorRequestController@approveInstructor');



            //ebook
            Route::get('ebooks', 'EbookController@ebooks');
            Route::match(['get', 'post'], 'add-edit-ebook/{id?}', 'EbookController@addEditEbook');
            Route::get('delete-ebook/{id?}', 'EbookController@destroy');

            //Order Ebook
            Route::get('orders', 'OrderController@index')->name('admin.order');
            Route::post('order/update-status/{order_id}', 'OrderController@updateStatus')->name('admin.order.updateStatus');
            // Route::get('orders/filter/{status}', 'OrderController@filterByStatus')->name('admin.order.filter');
            Route::get('orders/filter/{status}', 'OrderController@filterByStatus')->name('admin.order.filter');

            //Order Products
            Route::get('product/orders', 'OrderProductController@index')->name('admin.order.product');
            Route::post('product/order/update-status/{order_id}', 'OrderProductController@updateStatus')->name('admin.order.updateStatus.product');
            Route::get('product/orders/filter/{status}', 'OrderProductController@filterByStatus')->name('admin.order.filter.product');

            //subscription packages
            Route::get('subscription', 'SubscriptionController@index');
            Route::match(['get', 'post'], 'add-edit-subscription/{id?}', 'SubscriptionController@edit');
            Route::get('delete-subscription/{id?}', 'SubscriptionController@destroy');

            //mobile video course
            Route::get('mobile-video-course-order', 'AdminController@mobile_video_order')->name('admin.course.order');

            //Quick Shop
            Route::get('product-category', 'QuickShopController@ProductCategory');
            Route::match(['get', 'post'], 'add-edit-product-category/{id?}', 'QuickShopController@addEditCategory');
            Route::get('delete-product-category/{id?}', 'QuickShopController@destroyCategory');

            Route::get('products', 'QuickShopController@product');
            Route::match(['get', 'post'], 'add-edit-product/{id?}', 'QuickShopController@add_edit_product');
            Route::get('delete-product/{id?}', 'QuickShopController@destroyProduct');


            //subadmin
            Route::group(['middleware' => ['adminAccessOnly']], function () {
                Route::get('subadmins', 'AdminController@subadmins');
                Route::post('update-subadmin-status', 'AdminController@updateSubadminStatus');
                Route::match(['get', 'post'], 'add-edit-subadmin/{id?}', 'AdminController@addEditSubadmin');
                Route::get('delete-subadmin/{id?}', 'AdminController@deleteSubadmin');
                Route::match(['get', 'post'], 'update-permission/{id}', 'AdminController@updatePermission');
            });
        });
    });



//front - user



// ____________________________________________________________________ user middle ware
    Route::prefix('/user')->namespace('App\Http\Controllers\Front')->group(function () {
        Route::match(['get', 'post'], 'login', 'UserController@loginUser')->name('user.login');
        Route::match(['get', 'post'], 'register', 'UserController@registerUser')->name('user.register');
        Route::match(['get', 'post'], 'forgot-password', 'UserController@forgotPassword');
        Route::match(['get', 'post'], 'reset-password/{code?}', 'UserController@resetPassword');
        Route::middleware('user')->group(function () {
            Route::get('index', 'UserController@index')->name('user.index');
            //  Route::match(['get','post'], '')
            Route::post('check_current_password', 'UserController@checkCurrentPassword');
            Route::match(['get', 'post'], 'update_password', 'UserController@updatePassword');
            Route::match(['get', 'post'], 'update_user_details', 'UserController@updateUserDetails');
            Route::get('logout', 'UserController@logoutUser');
        });
    });


    Route::middleware('user')->group(function () {
        Route::get('/checkout/{id}', [CartController::class, 'checkout'])->name('cart.checkout');
    });

    //front- QUICK DIGITAL
    Route::prefix('/quick-digital')->namespace('App\Http\Controllers\Front')->group(function () {
        Route::get('index', 'HomeController@index')->name('quick-digital.index');
        Route::get('ebook', 'HomeController@ebook');
        Route::get('digital-services', 'HomeController@digital_services');
        Route::get('digital-products', 'HomeController@digital_products');
        Route::get('courses', 'HomeController@course');
        Route::get('terms-condition', 'HomeController@terms');
        Route::get('privacy-policy', 'HomeController@privacy_policy');
        Route::get('refund-policy', 'HomeController@refund_policy');
        Route::get('100-business-idea', 'HomeController@business_idea');
        Route::get('14-days-online-business', 'HomeController@onlne_business');
        Route::get('ebook-list', 'HomeController@ebook_list');
        Route::get('ebook/{id?}', 'HomeController@individual_ebook');

        // Route::get('ebook-checkout', 'HomeController@ebook_checkout');
        Route::get('mobile-video-checkout', 'HomeController@mobile_video_checkout');
        Route::post('mobile-video-order-submit', 'HomeController@submit_mobile_video_checkout');
        Route::get('order-success/{orderId}', 'HomeController@order_success')->name('order.success');
        Route::get('order-success-product/{orderId}', 'HomeController@product_order_success')->name('product.order.success');
        Route::get('order-success-subscription/{orderId}', 'HomeController@order_success_subscription')->name('order.successSubscription');

        //Product Order Tracking
        Route::get('track-order/{id}', 'HomeController@track_order_product')->name('track.order');
        Route::get('update-password', 'HomeController@update_password');
        Route::get('update-profile', 'HomeController@update_profile');
        Route::get('my-orders', 'HomeController@my_orders');
        Route::get('my-courses', 'HomeController@my_courses');
        Route::get('my-order-product', 'HomeController@my_order_products');

        //subscription
        Route::get('subscription', 'HomeController@subscription');

        //generate pdf with watermark
        Route::get('generate-pdf/{orderId}', [PDFController::class, 'generatePDF'])->name('generate.pdf');

        //quick-shop
        Route::get('quick-shop', 'HomeController@quickShop');
        Route::get('quick-shop/product/{id}', 'HomeController@getProductById');

        Route::get('/success-ebook-with-subscription/{orderId}', [HomeController::class, 'success_ebook_with_subscription'])->name('success-ebook-with-subscription');
        Route::get('/ebook-with-subscription/{id}', [CartController::class, 'purchaseEbookWithSubscription'])->name('ebook-with-subscription');

        Route::get('/video', function () {
            // Return the view for the 403 error page
            return view('quick_digital.course_play');
        })->name('quick_digital.video');

        Route::get('search-product', [HomeController::class, 'search_product'])->name('search.product');
        Route::get('product/checkout', [CartController::class, 'checkout_product'])->name('product_checkout');
        //course
        Route::get('course-details/{id}', 'HomeController@course_details')->name('course.details');
        Route::get('all-course', 'HomeController@show_all_courses')->name('course.all');
        Route::get('/checkout/{id}', [CartController::class, 'checkout'])->name('user_checkout');
    });

    //ebook
    Route::get('/carts/{id}', [CartController::class, 'create'])->name('cart.create');
   
    Route::post('/payment', [CartController::class, 'payment'])->name('cart.payment');
    Route::get('/success', [CartController::class, 'success'])->name('payment.success');
    //subscription
    Route::get('/subscription/carts/{id}', [CartController::class, 'create_cart_subscription'])->name('cartSubscription.create');
    Route::get('/subscription/checkout/{id}', [CartController::class, 'checkoutSubscription'])->name('cart.checkoutSubscription');
    Route::post('subscription/payment', [CartController::class, 'paymentSubscription'])->name('cart.paymentSubscription');
    Route::get('/subscription/success', [CartController::class, 'successSubscription'])->name('payment.successSubscription');
    // product
    Route::get('/product/carts/{id}', [CartController::class, 'create_cart_product'])->name('cart.create.product');
    Route::get('/product/checkout/{id}', [CartController::class, 'checkout_product'])->name('cart.checkout.products');
    Route::post('/product/payment', [CartController::class, 'payment_product'])->name('cart.product.payment');
    Route::get('/product/success', [CartController::class, 'product_payment_success'])->name('product.payment.success');

    
    Route::get('/cancel-fail', [CartController::class, 'fail'])->name('payment.cancel.fail');

    Route::get('/admin/errors/error_403', function () {
        // Return the view for the 403 error page
        return view('admin.errors.error_403');
    })->name('admin.errors.error_403');

    //Instructor
    //user instructor request
    Route::post('/request-instructor', [InstructorRequestController::class, 'requestInstructor'])->name('request.instructor');
    //instructor
    Route::prefix('/instructor')->namespace('App\Http\Controllers\Instructor')->group(function () {
        Route::group(['middleware' => ['instructor']], function () {
            Route::get('dashboard', 'InstructorController@dashboard');

            //course
            Route::get('manage-courses', 'CourseController@Courses');
            Route::match(['get', 'post'], 'add-edit-course/{id?}', 'CourseController@add_edit_course');
            Route::match(['get', 'post'], 'add-edit-course-topic/{id?}', 'CourseController@add_edit_course_topic');
            Route::match(['get', 'post'], 'add-edit-course-lesson/{id?}', 'CourseController@add_edit_course_lesson');
            Route::get('topic-with-lesson/{id}', 'CourseController@topics_with_lessons')->name('topic.with.lessons');

            Route::get('courses/filter/category', 'CourseController@filterByCategory')->name('instructor.courses.filter.category');
            Route::get('courses/filter/status', 'CourseController@filterByStatus')->name('instructor.courses.filter.status');
            Route::get('courses/filter/price', 'CourseController@filterByPrice')->name('instructor.courses.filter.price');

            //course category
            Route::get('course-category', 'CourseController@CourseCategory');
            Route::match(['get', 'post'], 'add-edit-course-category/{id?}', 'CourseController@addEditCategory');
            Route::get('delete-course-category/{id?}', 'CourseController@destroyCategory');
        });
    });







    // ____________________________________________________ ecommerce | single page with payment
    Route::get('/ecommerce', function () {
        return view('ecommerce.ecommerce_site');
    });
    Route::post('/payment/user', [PaymentController::class, 'payment'])->name('quick.payment');

    Route::get('/payment/success', function () {
        print_r('success');
        // return view('ecommerce.ecommerce_site');
    });






