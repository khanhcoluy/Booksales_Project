<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Home 
Route::get('/','HomeController@index' );
Route::get('/trang-chu','HomeController@index');
Route::get('/tim-kiem','HomeController@search');

//Danh muc san pham trang chu
Route::get('/danh-muc/{slug_category_product}','CategoryProduct@show_category_home');
Route::get('/thuong-hieu/{brand_slug}','BrandProduct@show_brand_home');
Route::get('/chi-tiet/{product_slug}','ProductController@details_product');

//Tin tuc
Route::get('/add-post','PostController@add_post');
Route::get('/all-post','PostController@all_post');
Route::post('/save-post','PostController@save_post');
Route::post('/update-post/{post_id}','PostController@update_post');
Route::get('/unactive-post/{post_id}','PostController@unactive_post');
Route::get('/active-post/{post_id}','PostController@active_post');
Route::get('/edit-post/{post_id}','PostController@edit_post');


//Coupon
Route::post('/check-coupon','CartController@check_coupon');


Route::get('/tin-tuc','HomeController@show_tintuc');
Route::get('/chi-tiet-tin/{post_slug}','HomeController@chi_tiet_tin');
Route::post('/thanh-toan','CheckoutController@thanh_toan');

//Admin
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');

//Danh mục sản phẩm
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');

Route::post('/export-csv','CategoryProduct@export_csv');
Route::post('/import-csv','CategoryProduct@import_csv');


Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');

Route::post('/save-category-product','CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product');


//Sản phẩm
Route::get('/add-product','ProductController@add_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');
Route::get('/all-product','ProductController@all_product');

Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');

Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');

//Đăng nhập bằng google
Route::get('/login-google','AdminController@login_google');
Route::get('/google/callback','AdminController@callback_google');

//Đăng nhập bằng facebook
Route::get('/login-facebook','AdminController@login_facebook');
Route::get('/facebook/callback','AdminController@callback_facebook');

//Giỏ hàng
Route::post('/update-cart-quantity','CartController@update_cart_quantity');
Route::post('/update-cart','CartController@update_cart');
Route::post('/save-cart','CartController@save_cart');
Route::post('/add-cart-ajax','CartController@add_cart_ajax');
Route::get('/show-cart','CartController@show_cart');
Route::get('/gio-hang','CartController@gio_hang');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::get('/del-product/{session_id}','CartController@delete_product');
Route::get('/del-all-product','CartController@delete_all_product');

//Thanh toán
Route::get('/dang-nhap','CheckoutController@login_checkout');
Route::get('/del-fee','CheckoutController@del_fee');

Route::get('/logout-checkout','CheckoutController@logout_checkout');
Route::post('/add-customer','CheckoutController@add_customer');
Route::post('/order-place','CheckoutController@order_place');
Route::post('/login-customer','CheckoutController@login_customer');
Route::get('/checkout','CheckoutController@checkout');
Route::get('/payment','CheckoutController@payment');
Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');
Route::post('/calculate-fee','CheckoutController@calculate_fee');
Route::post('/select-delivery-home','CheckoutController@select_delivery_home');
Route::post('/confirm-order','CheckoutController@confirm_order');

//Đơn hàng
Route::get('/order-tracking/{customer_id}','OrderController@order_tracking');
Route::get('/order-view-tracking/{order_code}','OrderController@order_view_tracking');
Route::get('/delete-order-tracking/{order_code}','OrderController@delete_order_tracking');

Route::get('/print-order/{checkout_code}','OrderController@print_order');
Route::get('/manage-order','OrderController@manage_order');
Route::get('/view-order/{order_code}','OrderController@view_order');
Route::post('/update-order-qty','OrderController@update_order_qty');
Route::post('/update-qty','OrderController@update_qty');




