<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\VistaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('setApiConfig')->group(function () {
    
// Public routes of authtication
Route::controller(VistaController::class)->group(function() {
    Route::get('/get-countries', 'getCountries');
    Route::post('/contact', 'contact');
    Route::get('/get-career', 'getCareer');
    Route::post('/career', 'career');
    Route::post('/sent-count', 'sentCount');
    Route::get('/get-count', 'getCount');
    Route::get('/get-news-events', 'getNewsEvents');
    Route::get('/get-news-events/{id}', 'getNewsEventDetails');
    // Route::post('/get-news-events-details', 'getNewsEventDetails');
    Route::post('/newsletter-subscribe', 'newsletter')->name('newsletter.subscribe');
    Route::get('/get-blog', 'getBlog');
    Route::get('/get-blog/{id}', 'getBlogDetails');
    // Route::post('/get-blog-details', 'getBlogDetails');
    Route::post('/get-blog-search', 'getBlogSearch');
    Route::post('/get-news-events-search', 'getNewsEventSearch');
    
    Route::get('/get-banner', 'getBanner');
    Route::get('/get-category', 'getCategory');
    Route::get('/get-subcategory/{id}', 'getSubCategory');
    
});

});



