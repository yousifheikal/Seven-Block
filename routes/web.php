<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Checkout\CheckoutController;
use App\Http\Controllers\Checkout\CheckoutDashboard;
use App\Http\Controllers\CommentCustomer\CommentCustomerController;
use App\Http\Controllers\CommentDesign\CommentDesignController;
use App\Http\Controllers\ContactUs\ContactUsController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\ProjectCustomer\ProjectCustomerController;
use App\Http\Controllers\Reviews\ReviewsController;
use App\Http\Controllers\schedule\ScheduleController;
use App\Http\Controllers\Time_Sheet\Projects\ProjectController;
use App\Http\Controllers\Time_Sheet\Tasks\TaskController;
use App\Http\Controllers\Time_Sheet\Time_Entry\TimeEntryController;
use App\Http\Controllers\TimeEntry\AdminEntryController;
use App\Http\Controllers\TimeEntry\EmpEntryController;
use App\Http\Controllers\User\UserController;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\DesginComponent;
use App\Http\Livewire\DesignRegularComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\FinishingSectionComponent;
use App\Http\Livewire\FinishRegularComponent;
use App\Http\Livewire\FoundationRegularComponent;
use App\Http\Livewire\FoundationSectionComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ThankYouComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\WishlistComponent;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('locale/{lang}', [\App\Http\Controllers\Lang\LocalizationController::class, 'setLang']);

//Routes to show all site
Route::get('/', function () {
    return view('auth.login');
});

Route::get('home', HomeComponent::class)->name('home');


Route::get('shop', ShopComponent::class)->name('shop');
Route::get('cart', CartComponent::class)->name('product.cart');
Route::get('checkout', CheckoutComponent::class)->name('checkout');
Route::get('product/{slug}', DetailsComponent::class)->name('product.details');
Route::get('product-category/{slug}', CategoryComponent::class)->name('product.category');
Route::post('checkout_product', [CheckoutController::class, 'store'])->name('checkout.product');
Route::get('search', SearchComponent::class)->name('product.search');
Route::get('thank-you-for-order', ThankYouComponent::class)->name('thank_you');
Route::get('wishlist', WishlistComponent::class)->name('product.wishlist');

//ContactUs

//show ContactUs page
Route::get('ContactUs', ContactUsComponent::class)->name('ContactUs');
//Insert data from table ContactUs
Route::post('contactUs-with-message', [ContactUsController::class, 'store'])->name('contactUs_message');

// Route to store review from product
Route::post('reviews', [ReviewsController::class, 'store'])->name('reviews');

//Show design customer
Route::get('design-client', DesginComponent::class)->name('design.client');
Route::get('design-regular', DesignRegularComponent::class)->name('regular.design');

//Finishing design customer
Route::get('finishing-client', FinishingSectionComponent::class)->name('finish.client');
Route::get('finishing-regular', FinishRegularComponent::class)->name('regular.finish');

//Foundation design customer
Route::get('foundation-client', FoundationSectionComponent::class)->name('foundation.client');
Route::get('foundation-regular', FoundationRegularComponent::class)->name('regular.foundation');



// Dashboard
Route::middleware(['auth:sanctum', 'verified', 'authEmployee'])->group(function (){

    Route::get('employee/dashboard', [DashboardController::class, 'index'])->name('dashboard.employee');
});


// For Admin
Route::middleware(['auth:sanctum', 'verified', 'authAdmin'])->group(function (){
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.admin');
});


//All routes Dashboard
Route::controller(UserController::class)->group(function () {
    Route::resource('users', UserController::class);
});

Route::controller(CategoryController::class)->group(function () {
    Route::resource('category', CategoryController::class);
});

Route::controller(ProductController::class)->group(function () {
    Route::resource('products', ProductController::class);
});

Route::controller(CheckoutDashboard::class)->group(function () {
    Route::get('all-orders', [CheckoutDashboard::class, 'index'])->name('orders');
    Route::delete('delete-order', [CheckoutDashboard::class, 'delete'])->name('orders.delete');
});


Route::controller(ContactUsController::class)->group(function () {
    Route::get('all-contactUs', [ContactUsController::class, 'index'])->name('all.contactUs');
    Route::delete('delete-contactUs', [ContactUsController::class, 'delete'])->name('contactUs.delete');
});


Route::controller(ProjectCustomerController::class)->group(function () {
    Route::resource('projects_customers', ProjectCustomerController::class);
});

Route::controller(CommentDesignController::class)->group(function () {
    Route::post('design-comment', [CommentDesignController::class, 'store'])->name('comment.design');
    Route::get('show-comments', [CommentDesignController::class, 'index'])->name('show.comments');
    Route::delete('delete-comment', [CommentDesignController::class, 'delete'])->name('delete.comment');
});

Route::controller(AdminEntryController::class)->group(function () {

    Route::get('add-tasks', 'index')->name('add.tasks');
    Route::post('complete-add-tasks', 'create')->name('complete.tasks');

});



Route::controller(EmpEntryController::class)->group(function () {

    Route::get('emp-tasks', 'index')->name('emp.tasks');
    Route::get('emp-add-task/{id}', 'edit')->name('emp.add');
    Route::post('emp-timesheet', 'store')->name('store.emp');
});
