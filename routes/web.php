<?php

use Illuminate\Support\Facades\Route;

//frontendUser
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;

//admin
use App\Http\Controllers\backend\DashboardController as Admin_DashboardController;
use App\Http\Controllers\backend\CategoryController as Admin_CategoryController;
use App\Http\Controllers\backend\ProductController as Admin_ProductController;
use App\Http\Controllers\backend\BrandController as Admin_brandController;
use App\Http\Controllers\backend\TopicController as Admin_TopicController;
use App\Http\Controllers\backend\PostController as Admin_PostController;
use App\Http\Controllers\backend\MenuController as Admin_MenuController;
use App\Http\Controllers\backend\BannerController as Admin_BannerController;
use App\Http\Controllers\backend\UserController as Admin_UserController;
use App\Http\Controllers\backend\ContactController as Admin_ContactController;
use App\Http\Controllers\backend\OrderController as Admin_OrderController;








// Route::get("/", function () {
//     echo "Hello World!";
// });
// Route::get("home", function () {
//     return "Home";
// });
// Route::get("welcome", function () {
//     return view("welcome");
// });

Route::get("/", [HomeController::class, "index"]);
Route::get("/san-pham", [ProductController::class, "index"]);
Route::get("/chi-tiet-san-pham/{slug}", [ProductController::class, "detail"]);
Route::get("/lien-he", [ContactController::class, "index"]);




Route::prefix('admin')->group(function () {
    Route::get('/', [Admin_DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::prefix('category')->group(function () {
        Route::get('index', [Admin_CategoryController::class, 'index'])->name('admin.category.index');
        Route::post('create', [Admin_CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('store', [Admin_CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('show/{id}', [Admin_CategoryController::class, 'show']);
        Route::put('edit/{id}', [Admin_CategoryController::class, 'edit']);
        Route::put('update/{id}', [Admin_CategoryController::class, 'update']);
        Route::delete('destroy/{id}', [Admin_CategoryController::class, 'destroy']);
    });
    Route::prefix('brand')->group(function () {
        Route::get('index', [Admin_BrandController::class, 'index'])->name('admin.brand.index');
        Route::post('create', [Admin_BrandController::class, 'create'])->name('admin.brand.create');
        Route::post('store', [Admin_BrandController::class, 'store'])->name('admin.brand.store');
        Route::get('show/{id}', [Admin_BrandController::class, 'show']);
        Route::put('edit/{id}', [Admin_BrandController::class, 'edit']);
        Route::put('update/{id}', [Admin_BrandController::class, 'update']);
        Route::delete('destroy/{id}', [Admin_BrandController::class, 'destroy']);
    });
    Route::prefix('product')->group(function () {
        Route::get('index', [Admin_ProductController::class, 'index'])->name('admin.product.index');
        Route::get('create', [Admin_ProductController::class, 'create'])->name('admin.product.create');
        Route::post('store', [Admin_ProductController::class, 'store'])->name('admin.product.store');
        Route::get('show/{id}', [Admin_ProductController::class, 'show']);
        Route::put('edit/{id}', [Admin_ProductController::class, 'edit']);
        Route::put('update/{id}', [Admin_ProductController::class, 'update']);
        Route::delete('destroy/{id}', [Admin_ProductController::class, 'destroy']);
    });
    Route::prefix('topic')->group(function () {
        Route::get('index', [Admin_TopicController::class, 'index'])->name('admin.topic.index');
        Route::post('create', [Admin_TopicController::class, 'create']);
        Route::post('store', [Admin_TopicController::class, 'store'])->name('admin.topic.store');
        Route::get('show/{id}', [Admin_TopicController::class, 'show']);
        Route::put('edit/{id}', [Admin_TopicController::class, 'edit']);
        Route::put('update/{id}', [Admin_TopicController::class, 'update']);
        Route::delete('destroy/{id}', [Admin_TopicController::class, 'destroy']);
    });
    Route::prefix('post')->group(function () {
        Route::get('index', [Admin_PostController::class, 'index'])->name('admin.post.index');
        Route::post('create', [Admin_PostController::class, 'create']);
        Route::post('store', [Admin_PostController::class, 'store'])->name('admin.post.store');
        Route::get('show/{id}', [Admin_PostController::class, 'show']);
        Route::put('edit/{id}', [Admin_PostController::class, 'edit']);
        Route::put('update/{id}', [Admin_PostController::class, 'update']);
        Route::delete('destroy/{id}', [Admin_PostController::class, 'destroy']);
    });
    Route::prefix('menu')->group(function () {
        Route::get('index', [Admin_MenuController::class, 'index'])->name('admin.menu.index');
        Route::post('create', [Admin_MenuController::class, 'create'])->name('admin.menu.create');
        Route::post('store', [Admin_MenuController::class, 'store'])->name('admin.menu.store');
        Route::get('show/{id}', [Admin_MenuController::class, 'show']);
        Route::put('edit/{id}', [Admin_MenuController::class, 'edit']);
        Route::put('update/{id}', [Admin_MenuController::class, 'update']);
        Route::delete('destroy/{id}', [Admin_MenuController::class, 'destroy']);
    });
    Route::prefix('banner')->group(function () {
        Route::get('index', [Admin_BannerController::class, 'index'])->name('admin.banner.index');
        Route::post('create', [Admin_BannerController::class, 'create'])->name('admin.banner.create');
        Route::post('store', [Admin_BannerController::class, 'store'])->name('admin.banner.store');
        Route::get('show/{id}', [Admin_BannerController::class, 'show']);
        Route::put('edit/{id}', [Admin_BannerController::class, 'edit']);
        Route::put('update/{id}', [Admin_BannerController::class, 'update']);
        Route::delete('destroy/{id}', [Admin_BannerController::class, 'destroy']);
    });
    Route::prefix('user')->group(function () {
        Route::get('index', [Admin_UserController::class, 'index'])->name('admin.banner.index');
        Route::post('create', [Admin_UserController::class, 'create'])->name('admin.banner.create');
        Route::post('store', [Admin_UserController::class, 'store'])->name('admin.banner.store');
        Route::get('show/{id}', [Admin_UserController::class, 'show']);
        Route::put('edit/{id}', [Admin_UserController::class, 'edit']);
        Route::put('update/{id}', [Admin_UserController::class, 'update']);
        Route::delete('destroy/{id}', [Admin_UserController::class, 'destroy']);
    });
    Route::prefix('contact')->group(function () {
        Route::get('index', [Admin_ContactController::class, 'index'])->name('admin.contact.index');
        Route::post('create', [Admin_ContactController::class, 'create'])->name('admin.contact.create');
        Route::post('store', [Admin_ContactController::class, 'store'])->name('admin.contact.store');
        Route::get('show/{id}', [Admin_ContactController::class, 'show']);
        Route::put('edit/{id}', [Admin_ContactController::class, 'edit']);
        Route::put('update/{id}', [Admin_ContactController::class, 'update']);
        Route::delete('destroy/{id}', [Admin_ContactController::class, 'destroy']);
    });
    Route::prefix('order')->group(function () {
        Route::get('index', [Admin_OrderController::class, 'index'])->name('admin.order.index');
        Route::get('show/{id}', [Admin_OrderController::class, 'show']);
        Route::put('edit/{id}', [Admin_OrderController::class, 'edit']);
        Route::put('update/{id}', [Admin_OrderController::class, 'update']);
        Route::delete('destroy/{id}', [Admin_OrderController::class, 'destroy']);
    });
});
