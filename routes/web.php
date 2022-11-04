<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;

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



/*
|--------------------------------------------------------------------------
|   User interaction Routes
|-----------------------------------------------------------------------
|
*/

//home page mate
Route::get('/',[HomeController::class, 'home']);

//user page mate
Route::get('/user_details',[HomeController::class, 'dashboard']);

//cars page mate
Route::get('/showroom',[HomeController::class, 'cars'])-> name('cars');

//review page mate
Route::get('/review',[HomeController::class, 'review']);

//about page mate
Route::get('/about',[HomeController::class, 'about']);

//about page mate
Route::get('/faq',[HomeController::class, 'faq']);

//about page mate
Route::get('/contact',[HomeController::class, 'contact']);

//where to route the users after authentication
Route::get('/redirect',[HomeController::class, 'redirect']);

//User booking a car
Route::get('/book_car/{car_id}',[HomeController::class, 'book_car']);

//User view car details
Route::get('/car_details/{model}',[HomeController::class, 'car_details']);

//make reservation mate
Route::post('/make_reservation/{id}',[HomeController::class, 'make_reservation']);

//User booking a car
Route::get('/checkout/{id}',[HomeController::class, 'checkout'])->name('checkout');

//User searching for the product
Route::get('/search_car',[HomeController::class, 'search_car']);

//user leaving a review
Route::post('/review/{id}',[HomeController::class, 'car_review']);

//user contact us
Route::post('/contact_us_form/{id}',[HomeController::class, 'contact_us_form']);
//faq
Route::post('/faq_form/{id}',[HomeController::class, 'faq_form']);

//newsletter subsrciption
Route::post('/newsletter',[HomeController::class, 'newsletter']);

//user cancellation of the checkout
Route::get('/cancel_checkout/{id}',[HomeController::class, 'cancel_checkout']);

//payment
Route::post('/paypal_checkout',[PaymentController::class, 'pay']);
Route::get('/success',[PaymentController::class, 'success']);
Route::get('/error',[PaymentController::class, 'error']);

//User Verification
Route::post('/verify/{id}',[HomeController::class, 'verify']);

/*
|--------------------------------------------------------------------------
|   Admin interaction Routes
|-----------------------------------------------------------------------
|
*/

//view categories mate
Route::get('/view_categories',[AdminController::class, 'view_categories']);

//add categories mate
Route::post('/add_cat',[AdminController::class, 'add_category']);

//delete categories mate
Route::get('/delete_cat/{id}',[AdminController::class, 'delete_cat']);

//redirecting to the dashboard mate
Route::get('/dash',[AdminController::class, 'dash']);

//add cars mate
Route::get('/add_cars',[AdminController::class, 'add_cars']);

//add a car to the database mate
Route::post('/add_car',[AdminController::class, 'add_car']);

//view provinces mate
Route::get('/view_provinces',[AdminController::class, 'view_provinces']);

//add province mate
Route::post('/add_province',[AdminController::class, 'add_province']);

//delete province mate
Route::get('/delete_pro/{id}',[AdminController::class, 'delete_pro']);

//view district mate
Route::get('/view_districts',[AdminController::class, 'view_districts']);

//add district mate
Route::post('/add_district',[AdminController::class, 'add_district']);

//show cars mate
Route::get('/show_cars',[AdminController::class, 'show_cars']);

//delete a particular car mate
Route::get('/delete_car/{id}',[AdminController::class, 'delete_car']);

//update a particular car mate
Route::get('/update_car/{id}',[AdminController::class, 'update_car']);

//update car details mate
Route::post('/update_car_confirm/{id}',[AdminController::class, 'update_car_confirm']);

//company reviews mate
Route::get('/company_reviews',[AdminController::class, 'company_reviews']);

//delete a particular company review
Route::get('/delete_review/{id}',[AdminController::class, 'delete_review']);

//show all the users mate
Route::get('/view_users',[AdminController::class, 'view_users']);

//show all the reservations mate
Route::get('/reservations',[AdminController::class, 'reservations']);

//delete a particular reservetion
Route::get('/delete_reservation/{id}',[AdminController::class, 'delete_reservation']);

//show all the reservations mate
Route::get('/paid_confirm/{id}',[AdminController::class, 'paid_confirm']);

//show all the reservations mate
Route::get('/car_return/{id}',[AdminController::class, 'car_return']);

//Print the ticket mate
Route::get('/print_ticket/{id}',[AdminController::class, 'print_ticket']);

//add a car to the featured cars table mate
Route::get('/featured_cars',[AdminController::class, 'featured_cars']);

//search for a car to be added to the featured cars table mate
Route::get('/search_featured',[AdminController::class, 'search_featured']);


//delete a car from the featured fleet
Route::get('/remove_car/{id}',[AdminController::class, 'remove_car']);


//add car to featured mate
Route::get('/add_featured/{id}',[AdminController::class, 'add_featured']);

//view unverified users mate
Route::get('/unverified_users',[AdminController::class, 'unverified_users'])->name('Unverified');

//verify users mate
Route::get('/verify_user/{id}',[AdminController::class, 'verify_user']);

//accept users mate
Route::get('/accept_user/{id}',[AdminController::class, 'accept_user']);

//decline users mate
Route::get('/decline_user/{id}',[AdminController::class, 'decline_user']);

//View rented cars table mate
Route::get('/rented_cars',[AdminController::class, 'rented_cars']);

//show available cars table mate
Route::get('/available_cars',[AdminController::class, 'available_cars']);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
