<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/', function () {
//     return view('home');
// })->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';

Route::get('admin/', function () {
    return view('welcome');
})->middleware(['auth', 'admin'])->name('admin.dashboard');

Route::get('/test', function () {
    return view('test');
});

Route::post('/search', [App\Http\Controllers\Frontend\DashboardController::class, 'Search'])->name('product.search');

//------------------ Filters  -----------------------------
    Route::post('/kitchen/cabinet/filter', [App\Http\Controllers\Frontend\DashboardController::class, 'rtaKitchenCabinetsFilter'])->name('post.kitchen.filter');

    Route::post('/bathroom/vanities/filter', [App\Http\Controllers\Frontend\DashboardController::class, 'rtaBathroomVanitiesFilter'])->name('post.bathroom.filter');

//-----------  Frontend Cart Routes -------------------
    Route::get('/addToCart/{slug}', [App\Http\Controllers\Frontend\CartController::class, 'addToCart'])->middleware(['auth', 'verified'])->name('addToCart');
    Route::get('/addProductToCart/{slug}', [App\Http\Controllers\Frontend\CartController::class, 'addProductToCart'])->middleware(['auth', 'verified'])->name('addProductToCart');
    Route::get('/cart/destroy/{slug}', [App\Http\Controllers\Frontend\CartController::class, 'destroy'])->middleware(['auth', 'verified'])->name('cartDestroy');
    Route::get('/cart', [App\Http\Controllers\Frontend\CartController::class, 'index'])->middleware(['auth', 'verified'])->name('cart');
    Route::get('/cart/update', [App\Http\Controllers\Frontend\CartController::class, 'update'])->middleware(['auth', 'verified'])->name('cartUpdate');

//-----------  Frontend AJAX Routes -------------------
    Route::get('/product/view/modal/{id}', [App\Http\Controllers\Frontend\CartController::class, 'ProductViewModal'])->middleware(['auth', 'verified']);

    Route::post('/cart/data/store/{id}', [App\Http\Controllers\Frontend\CartController::class, 'cartProductStoreAJAX'])->middleware(['auth', 'verified']);

    Route::get('/product/mini/cart', [App\Http\Controllers\Frontend\CartController::class, 'ProductMiniCart'])->middleware(['auth', 'verified']);

    Route::get('/product/mini/cart/sticky', [App\Http\Controllers\Frontend\CartController::class, 'ProductMiniCartSticky'])->middleware(['auth', 'verified']);

    Route::get('/cart-increment/{id}', [App\Http\Controllers\Frontend\CartController::class, 'CartPageIncrement'])->middleware(['auth', 'verified']);

    Route::get('/cart-decrement/{id}', [App\Http\Controllers\Frontend\CartController::class, 'CartPageDecrement'])->middleware(['auth', 'verified']);

    Route::get('/cart-product-delete/{id}', [App\Http\Controllers\Frontend\CartController::class, 'CartPageProductDelete'])->middleware(['auth', 'verified']);

    Route::get('/cart-full-delete/', [App\Http\Controllers\Frontend\CartController::class, 'CartPageFullDelete'])->middleware(['auth', 'verified']);




//----------- Frontend Dashboard header links-----------
    Route::get('/', [App\Http\Controllers\Frontend\DashboardController::class, 'Home'])->name('home');
    Route::get('/quick-ship', [App\Http\Controllers\Frontend\DashboardController::class, 'quickShipIndex'])->name('quick-ship');
    Route::get('/rta-kitchen-cabinets', [App\Http\Controllers\Frontend\DashboardController::class, 
        'rtaKitchenCabinetsIndex'])->name('rta-kitchen-cabinets'); 
    Route::get('/rta-bathroom-vanities', [App\Http\Controllers\Frontend\DashboardController::class, 
        'rtaBathroomVanitiesIndex'])->name('rta-bathroom-vanities');
    Route::get('/refundable-samples', [App\Http\Controllers\Frontend\DashboardController::class, 
        'refundableSamplesIndex'])->name('refundable-samples');
    Route::get('/assembled-kitchen-cabinets', [App\Http\Controllers\Frontend\DashboardController::class, 
        'assembledKitchenCabinetsIndex'])->name('assembled-kitchen-cabinets');
    Route::get('/kitchen-Hoods', [App\Http\Controllers\Frontend\DashboardController::class,'kitchenHoodsIndex'])->name('kitchen-Hoods');
    // Route::get('/faqs', [App\Http\Controllers\Frontend\DashboardController::class, 'faqs'])->name('faqs');
    Route::get('/resources', [App\Http\Controllers\Frontend\DashboardController::class, 'resources'])->name('resources');
    Route::get('/trade', [App\Http\Controllers\Frontend\DashboardController::class, 'trade'])->name('trade');
    Route::get('/freedesign', [App\Http\Controllers\Frontend\DashboardController::class, 'freedesign'])->name('freedesign');

    Route::get('/faqs', [App\Http\Controllers\Frontend\DashboardController::class, 'faqs'])->name('faqs');
    Route::post('/faqsFilters', [App\Http\Controllers\Frontend\DashboardController::class, 'faqsFiltersPost'])->name('faqsFilters.post');

    Route::get('/checkout', [App\Http\Controllers\Frontend\DashboardController::class, 'checkout'])->middleware(['auth', 'verified'])->name('checkout');
    
    Route::post('/checkout/payment', [App\Http\Controllers\Frontend\DashboardController::class, 'checkoutPayment'])->middleware(['auth', 'verified'])->name('checkout.payment');

    Route::post('/checkout/store', [App\Http\Controllers\Frontend\DashboardController::class, 'checkoutStore'])->middleware(['auth', 'verified'])->name('checkout.store');

//----------- Frontend Dashboard Footer links-----------
    Route::get('/contact-us', [App\Http\Controllers\Frontend\DashboardController::class, 'contactUs'])->name('contactUs');

    Route::post('/contact-us/post', [App\Http\Controllers\Frontend\DashboardController::class, 'contactUsPost'])->name('contactUsPost');

    Route::get('/about-us', [App\Http\Controllers\Frontend\DashboardController::class, 'aboutUs'])->name('aboutUs');

    Route::get('/order/tracking', [App\Http\Controllers\Frontend\DashboardController::class, 'orderTracking'])->name('order.tracking');

    Route::post('/order/track', [App\Http\Controllers\Frontend\DashboardController::class, 'orderTrackingPost'])->name('track.now');

    Route::get('/profile/account-details', [App\Http\Controllers\Frontend\ProfileController::class, 'profileAccountDetails'])->middleware(['auth', 'verified'])->name('profileAccountDetails');

    Route::get('/profile/billing-details', [App\Http\Controllers\Frontend\ProfileController::class, 'profileBillingDetails'])->middleware(['auth', 'verified'])->name('profileBillingDetails');

    Route::get('/profile/billing-details/show/{id}', [App\Http\Controllers\Frontend\ProfileController::class, 'profileBillingDetailsShow'])->middleware(['auth', 'verified'])->name('profileBillingDetailsShow');

    Route::get('/profile/change-password', [App\Http\Controllers\Frontend\ProfileController::class, 'profileChangePassword'])->middleware(['auth', 'verified'])->name('profileChangePassword');

    Route::post('/profile/change-password/post', [App\Http\Controllers\Frontend\ProfileController::class, 'profileChangePasswordPost'])->middleware(['auth', 'verified'])->name('profileChangePasswordPost');

//----------- Product Details -----------
    Route::get('/product-details/{slug}', [App\Http\Controllers\Frontend\DashboardController::class, 'productDetailsIndex'])->name('productDetails');


//------------------ Backend Admin Routes -------------------------
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('admin.dashboard');

    //-------- product Category------------
    Route::resource('product-inventory', App\Http\Controllers\Backend\ProductInventoryController::class);

    //-------- product Category------------
    Route::resource('product', App\Http\Controllers\Backend\ProductController::class);

    //-------- product Category------------
    Route::resource('product-categories', App\Http\Controllers\Backend\ProductCategoryController::class);

    //-------- product SubCategory------------   
    Route::resource('product-subcategories', App\Http\Controllers\Backend\ProductSubCategoryController::class); 

    //-------- product sizes resource routes------------
    Route::resource('refundable-sample', App\Http\Controllers\Backend\RefundableSampleController::class);

    //-------- product sizes resource routes------------
    Route::resource('product-accessories', App\Http\Controllers\Backend\ProductAccessoriesController::class);    

    //-------- product colors resource routes------------   
    Route::resource('product-colors', App\Http\Controllers\Backend\ProductColorController::class);

    //-------- product sizes resource routes------------
    Route::resource('product-sizes', App\Http\Controllers\Backend\ProductSizeController::class);

    //-------- Faqs resource routes ------------   
    Route::resource('faqs', App\Http\Controllers\Backend\FaqsController::class);

    //-------- Faqs Filter resource routes------------   
    Route::resource('faqs-filters', App\Http\Controllers\Backend\FaqsFiltersController::class);

    //-------- Contact Us resource routes------------   
    Route::resource('contact-us', App\Http\Controllers\Backend\ContactUsController::class);

    //-------- Order Details resource routes------------   
    Route::resource('order-details', App\Http\Controllers\Backend\OrderDetailsController::class);
    
    Route::get('order-details/accept/{id}', [App\Http\Controllers\Backend\OrderDetailsController::class, 'accept'])->name('order-details.accept');

    Route::get('order-details/cancel/{id}', [App\Http\Controllers\Backend\OrderDetailsController::class, 'cancel'])->name('order-details.cancel');

    Route::get('order-details/delivered/{id}', [App\Http\Controllers\Backend\OrderDetailsController::class, 'orderDelivered'])->name('order-details.delivered');

    Route::get('cancel-orders', [App\Http\Controllers\Backend\OrderDetailsController::class, 'canceledOrdersIndex'])->name('order-details.canceledOrders');

    Route::get('shipping-orders', [App\Http\Controllers\Backend\OrderDetailsController::class, 'shippingOrdersIndex'])->name('order-details.shippingOrders');

    Route::get('delivered-orders', [App\Http\Controllers\Backend\OrderDetailsController::class, 'deliveredOrdersIndex'])->name('order-details.deliveredOrders');

    
 
});
