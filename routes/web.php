<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductManagement\CategoryController;
use App\Http\Controllers\Admin\ProductManagement\ProductController;
use App\Http\Controllers\Admin\QuoteController;
use App\Http\Controllers\Admin\UserManagement\PermissionController;
use App\Http\Controllers\Admin\UserManagement\RoleController;
use App\Http\Controllers\Admin\UserManagement\UserController;
use App\Http\Controllers\User\ClientController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('user.about');
// });

Route::get('/', [ClientController::class, 'index'])->name('home');
Route::get('about', [ClientController::class, 'about'])->name('about');
Route::get('product', [ClientController::class, 'product'])->name('product');
Route::get('product-details/{name}', [ClientController::class, 'product_details'])->name('product_details');
Route::get('contact', [ClientController::class, 'contact'])->name('contact');
Route::post('contact-store', [ClientController::class, 'contactstore'])->name('contact.store');
Route::post('/submit-quote', [ClientController::class, 'store'])->name('submit.quote');

Route::get('/category/{name}', [ClientController::class, 'categoryProducts'])->name('category.products');
// Route::get('/product-details/{name}', [ClientController::class, 'ProductDetails'])->name('productsdetails');

Route::get('login', [DashboardController::class, 'login'])->name('login');
Route::post('login-validate', [DashboardController::class, 'login_validate'])->name('admin.login-validate');
Route::get('logout-admin', [DashboardController::class, 'logout'])->name('admin.logout');

// forgot password
Route::get('forgot_password', [DashboardController::class, 'forgot_password'])->name('forgot_password');
Route::post('forgot-validate', [DashboardController::class, 'forgot_validate'])->name('forgot_validate');

// otp password
Route::get('otp-verify', [DashboardController::class, 'otp_verify'])->name('otp.verify');
Route::post('otp-validate', [DashboardController::class, 'otp_validate'])->name('otp_validate');
// Route::post('otp-resend', [DashboardController::class, 'otp_resend'])->name('otp_resend');
Route::post('otp-resend', [DashboardController::class, 'otp_resend'])->name('otp_resend');

// reset password
Route::get('reset_password', [DashboardController::class, 'reset_password'])->name('reset_password');
Route::post('reset-validate', [DashboardController::class, 'reset_validate'])->name('reset_validate');




Route::middleware(['auth'])->group(function () {

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // Permisssion
    Route::get('permission-index', [PermissionController::class, 'index'])->name('permission.index');
    Route::get('/get-permissions', [PermissionController::class, 'getPermissions'])->name('permissions.get');
    Route::get('permission-create', [PermissionController::class, 'create'])->name('permission.create');
    Route::post('permission-store', [PermissionController::class, 'store'])->name('permission.store');
    Route::get('permission-edit/{id}', [PermissionController::class, 'edit'])->name('permission.edit');
    Route::PUT('permission-update/{id}', [PermissionController::class, 'update'])->name('permission.update');
    Route::delete('permission-delete/{id}', [PermissionController::class, 'delete'])->name('permission.delete');

    //role
    Route::get('role-index', [RoleController::class, 'index'])->name('role.index');
    Route::get('get-roles', [RoleController::class, 'getRoles'])->name('role.get');
    Route::get('role-create', [RoleController::class, 'create'])->name('role.create');
    Route::post('role-store', [RoleController::class, 'store'])->name('role.store');
    Route::get('role-edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    Route::PUT('role-update/{id}', [RoleController::class, 'update'])->name('role.update');
    Route::delete('role-delete/{id}', [RoleController::class, 'delete'])->name('role.delete');


    //user
    Route::get('user-index', [UserController::class, 'index'])->name('user.index');
    Route::get('get-user', [UserController::class, 'getusers'])->name('user.get');
    Route::get('user-create', [UserController::class, 'create'])->name('user.create');
    Route::post('user-store', [UserController::class, 'store'])->name('user.store');
    Route::get('user-edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::PUT('user-update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('user-delete/{id}', [UserController::class, 'delete'])->name('user.delete');

    //category
    Route::get('category-index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('get-category', [CategoryController::class, 'getCategory'])->name('category.get');
    Route::get('category-create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('category-store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::PUT('category-update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('category-delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

    //product
    Route::get('product-index', [ProductController::class, 'index'])->name('product.index');
    Route::get('get-product', [ProductController::class, 'getProduct'])->name('product.get');
    Route::get('product-create', [ProductController::class, 'create'])->name('product.create');
    Route::post('product-store', [ProductController::class, 'store'])->name('product.store');
    Route::get('product-edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::PUT('product-update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('product-delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    Route::delete('/product-image/{id}', [ProductController::class, 'destroy_product_image'])->name('product_image.delete');


    // Quote
    Route::get('quote-index', [QuoteController::class, 'index'])->name('quote.index');
    Route::get('getquote', [QuoteController::class, 'getquote'])->name('quote.get');
    Route::delete('quote-delete/{id}', [QuoteController::class, 'delete'])->name('quote.delete');


    // contact
    Route::get('contact-index', [ContactController::class, 'index'])->name('contact.index');
    Route::get('getPermissions', [ContactController::class, 'getPermissions'])->name('contact.getPermissions');
    Route::delete('contact-delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');
});
