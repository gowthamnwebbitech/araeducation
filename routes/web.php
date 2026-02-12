<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\LandingPageController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\frontend\ContactController;


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

Route::get('/', function () {
    return view('frontend.index');
})->name('home');


Route::get('/cs-acs-coaching-classes', function () {
    return view('frontend.cs_coaching_classes');
})->name('cs_coaching_classes');

Route::get('/cma-icwa-coaching-classes', function () {
    return view('frontend.cma_coaching');
})->name('cma_coaching');

Route::get('/ca-coaching-classes', function () {
    return view('frontend.ca_coaching_class');
})->name('ca_coaching_class');

Route::get('/clat-all-india-law-entrance-exam-coaching', function () {
    return view('frontend.clat_all_india_law_entrance_exam_coaching');
})->name('clat_all_india_law_entrance_exam_coaching');

Route::get('/law-entrance-exam-course', function () {
    return view('frontend.law_entrance_exam_course');
})->name('law_entrance_exam_course');


Route::get('/campus-job-placement', function () {
    return view('frontend.campus_job_placement');
})->name('campus_job_placement');


Route::get('/what-after-12th-career-counselling-coimbatore', function () {
    return view('frontend.why_after_12th');
})->name('why_after_12th');

Route::get('/acca-coaching-classes', function () {
    return view('frontend.ACCA_coaching_classes');
})->name('ACCA_coaching_classes');

Route::get('/uscma-coaching-classes', function () {
    return view('frontend.US_CMA_coaching_classes');
})->name('US_CMA_coaching_classes');

Route::get('/ifrs-coaching-classes', function () {
    return view('frontend.IFRS_coaching_classes');
})->name('IFRS_coaching_classes');

Route::get('/frm-coaching-classes', function () {
    return view('frontend.FRM_coaching_classes');
})->name('FRM_coaching_classes');

Route::get('/cfa-coaching-classes', function () {
    return view('frontend.CFA_coaching_classes');
})->name('CFA_coaching_classes');

Route::get('/cpa-coaching-classes', function () {
    return view('frontend.CPA_coaching_classes');
})->name('CPA_coaching_classes');

Route::get('/cima-coaching-classes', function () {
    return view('frontend.CIMA_coaching_classes');
})->name('CIMA_coaching_classes');

Route::get('/cfp-coaching-classes', function () {
    return view('frontend.CFP_coaching_classes');
})->name('CFP_coaching_classes');

Route::get('/ea-coaching-classes', function () {
    return view('frontend.EA_coaching_classes');
})->name('EA_coaching_classes');

Route::get('/cpa-australia-coaching-classes', function () {
    return view('frontend.CPA_austraila_coaching_classes');
})->name('CPA_austraila_coaching_classes');

Route::get('/cams-coaching-class', function () {
    return view('frontend.CAMS_coaching_class');
})->name('CAMS_coaching_class');

Route::get('/integrated-course', function () {
    return view('frontend.integrated_course');
})->name('integrated_course');

Route::get('/other-course', function () {
    return view('frontend.other_courses');
})->name('other_courses');

Route::get('/privacy-policy', function () {
    return view('frontend.privacy_policy');
})->name('privacy_policy');

Route::get('/terms-and-conditions', function () {
    return view('frontend.terms_and_conditions');
})->name('terms_and_conditions');

Route::get('/refund-policy', function () {
    return view('frontend.refund_policy');
})->name('refund_policy');

Route::get('/disclaimer', function () {
    return view('frontend.disclaimer');
})->name('disclaimer');

Route::get('/about-us', function () {
    return view('frontend.about');
})->name('about');

Route::get('/blogs', function () {
    return view('frontend.blog');
})->name('blogs');

Route::get('/resources-list', function () {
    return view('frontend.resource');
})->name('resources');

Route::get('/important-links', function () {
    return view('frontend.important_links');
})->name('important_links');

Route::get('/testimonials', function () {
    return view('frontend.testimonials');
})->name('testimonials');

Route::get('/elite-infrastructure', function () {
    return view('frontend.elite_infrastructure');
})->name('elite_infrastructure');

Route::get('/image-gallery', function () {
    return view('frontend.image_gallery');
})->name('image_gallery');

Route::get('/video-gallery', function () {
    return view('frontend.video_gallery');
})->name('video_gallery');

Route::get('/contact-us', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/online-coaching-classes', function () {
    return view('frontend.online_coaching_class');
})->name('online_coaching_class');

Route::get('/online-coaching-india', function () {
    return view('frontend.online-coaching-india');
})->name('online-coaching-india');

Route::get('/online-tuition-abroad', function () {
    return view('frontend.online-tuition-abroad');
})->name('online-tuition-abroad');

Route::get('/mock-test', function () {
    return view('frontend.free_mock_test');
})->name('free_mock_test');

Route::get('/free-classes-and-education-loan', function () {
    return view('frontend.education_loan');
})->name('education_loan');

Route::get('/cseet-coaching', function () {
    return view('frontend.cseet_coaching_class');
})->name('cseet_coaching_class');

Route::get('/cs-executive-coaching', function () {
    return view('frontend.cs_executive_coaching');
})->name('cs_executive_coaching');


Route::get('/cs-professional-coaching', function () {
    return view('frontend.cs_professional_coaching_class');
})->name('cs_professional_coaching_class');


Route::get('/cma-foundation-coaching', function () {
    return view('frontend.cma_foundation_coaching');
})->name('cma_foundation_coaching');


Route::get('/cma-intermediate-coaching', function () {
    return view('frontend.cma_intermediate_coaching');
})->name('cma_intermediate_coaching');


Route::get('/cma-final-coaching', function () {
    return view('frontend.cma_final_coaching');
})->name('cma_final_coaching');


Route::get('/ca-foundation-coaching', function () {
    return view('frontend.ca_foundation_coaching');
})->name('ca_foundation_coaching');


Route::get('/ca-intermediate-coaching', function () {
    return view('frontend.ca_intermediate_coaching');
})->name('ca_intermediate_coaching');


Route::get('/ca-final-coaching', function () {
    return view('frontend.ca_final_coaching');
})->name('ca_final_coaching');


Route::get('/llb-5-years-entrance-coaching', function () {
    return view('frontend.llb_5_years_entrance_coaching');
})->name('llb_5_years_entrance_coaching');


Route::get('/llb-3-years-entrance-coaching', function () {
    return view('frontend.llb_3_years_entrance_coaching');
})->name('llb_3_years_entrance_coaching');


Route::get('/clat-ug-pg-entrance-coaching', function () {
    return view('frontend.clat_ug_pg_entrance_coaching');
})->name('clat_ug_pg_entrance_coaching');


Route::get('/aibe-exam-coaching', function () {
    return view('frontend.aibe_exam_coaching');
})->name('aibe_exam_coaching');


Route::get('/tn-judiciary-coaching', function () {
    return view('frontend.JUDICIARY_EXAM_Coaching');
})->name('JUDICIARY_EXAM_Coaching');


Route::get('/law-college-subject-coaching', function () {
    return view('frontend.law_college_subject_coaching');
})->name('law_college_subject_coaching');


Route::get('/ugc-net-law-exam-coaching', function () {
    return view('frontend.ugc_net_law_exam_coaching');
})->name('ugc_net_law_exam_coaching');


Route::get('/indian-international-course', function () {
    return view('frontend.indian_international_course');
})->name('indian_international_course');

Route::get('/college-school-intergration-with-ara-education', function () {
    return view('frontend.college-school-intergration-with-ara-education');
})->name('college-school-intergration-with-ara-education');



Route::get('/category/{slug}', [ContactController::class,'category'])->name('category.list');

Route::get('/blogs/{id}', function ($id) {
    $blog_details = App\Models\Blog::where('slug',$id)->first();

    if (!$blog_details) {
        abort(404, 'Blog not found');
    }

    return view('frontend.blog_details', ['blog_details' => $blog_details]);
})->name('frontend.blog_details');



Route::get('/resources/{id}', function ($id) {
    $resource_details = App\Models\Resource::where('slug',$id)->first();

    if (!$resource_details) {
        abort(404, 'Resource not found');
    }

    return view('frontend.resource_details', ['resource_details' => $resource_details]);
})->name('frontend.resource_details');


Route::controller(ContactController::class)->group(function () {
    Route::post('/contact/enquiry','send')->name('contact.enquiry');
    Route::post('/enquiry','enquiryForm')->name('enquiry');
});




























Route::get('/admin', function () {
    return view('admin.login');
})->name('admin');





Route::resource('/banners', BannerController::class)->only([
    'index', 'store', 'create', 'show', 'edit', 'update'
]);
Route::controller(BannerController::class)->group(function () {
    Route::get('/banners/destroy/{id}','destroy')->name('banners.destroy');
});

Route::controller(AdminController::class)->group(function(){
    Route::post('admin/login','admin_login')->name('admin.login');
    Route::get('admin/logout','admin_logout')->name('admin.logout');
});


Route::middleware(['admin.auth'])->group(function(){
    
    Route::get('/contact-us-queries', function () {
        return view('admin.contact_us_queries');
    })->name('contact.queries');
    Route::get('/enquiries', function () {
        return view('admin.enquiries_list');
    })->name('enquiries');

    Route::resource('/imageGallery', ImageController::class)->only([
        'index', 'store', 'create', 'show', 'edit', 'update'
    ]);
    Route::controller(ImageController::class)->group(function () {
        Route::get('/imageGallery/destroy/{id}','destroy')->name('imageGallery.destroy');
    });
    
    
    Route::resource('/videoGallery', VideoController::class)->only([
        'index', 'store', 'create', 'show', 'edit', 'update'
    ]);
    Route::controller(VideoController::class)->group(function () {
        Route::get('/videoGallery/destroy/{id}','destroy')->name('videoGallery.destroy');
    });
    
    
    Route::resource('/testimonial', TestimonialController::class)->only([
        'index', 'store', 'create', 'show', 'edit', 'update'
    ]);

    Route::controller(LandingPageController::class)->prefix('/admin/landing')->group(function () {
        Route::get('/index','index')->name('landing.index');
        Route::get('/create','create')->name('landing.create');
        Route::get('/edit/{id}','edit')->name('landing.edit');
        Route::put('/update/{id}','update')->name('landing.update');
        Route::post('/store','store')->name('landing.store');
        Route::get('/destroy/{id}','destroy')->name('landing.destroy');
    });
    Route::get('/sitemap/download', [LandingPageController::class, 'downloadSitemap'])
    ->name('sitemap.download');
    Route::post('/sitemap/upload', [LandingPageController::class, 'uploadSitemap'])
    ->name('sitemap.upload');

    Route::controller(CategoryController::class)->prefix('/admin/category')->group(function () {
        Route::get('/index','index')->name('category.index');
        Route::get('/create','create')->name('category.create');
        Route::get('/edit/{id}','edit')->name('category.edit');
        Route::put('/update/{id}','update')->name('category.update');
        Route::post('/store','store')->name('category.store');
        Route::get('/destroy/{id}','destroy')->name('category.destroy');
    });

    Route::controller(TestimonialController::class)->group(function () {
        Route::get('/testimonial/destroy/{id}','destroy')->name('testimonial.destroy');
    });
    
    
    
    Route::resource('/course', CourseController::class)->only([
        'index', 'store', 'create', 'show', 'edit', 'update'
    ]);
    Route::controller(CourseController::class)->group(function () {
        Route::get('/course/destroy/{id}','destroy')->name('course.destroy');
    });
    
    
    
    
    
    
    Route::resource('/blog', BlogController::class)->only([
        'index', 'store', 'create', 'show', 'edit', 'update'
    ]);
    Route::controller(BlogController::class)->group(function () {
        Route::get('/blog/destroy/{id}','destroy')->name('blog.destroy');
        Route::post('/admin-blog-image-delete','deleteImage')->name('admin.blog.image.delete');
    });
    
    
    Route::resource('/resource', ResourceController::class)->only([
        'index', 'store', 'create', 'show', 'edit', 'update'
    ]);
    Route::controller(ResourceController::class)->group(function () {
        Route::get('/resource/destroy/{id}','destroy')->name('resource.destroy');
    });
    
    Route::resource('/slider', SliderController::class)->only([
        'index', 'store', 'create', 'show', 'edit', 'update'
    ]);
    Route::controller(SliderController::class)->group(function () {
        Route::get('/slider/destroy/{id}','destroy')->name('slider.destroy');
    });


    Route::controller(AdminController::class)->group(function(){
        Route::get('admin/dashboard','index')->name('admin.dashboard');
        Route::any('admin/popup','adminPopup')->name('admin.popup');
        Route::put('admin/popup-update','adminPopupUpdate')->name('admin.popup.update');
        Route::get('admin/popup-delete','adminPopupDelete')->name('admin.popup.delete');
        Route::get('/message/destroy/{id}','message_destroy')->name('message.destroy');
        Route::get('/enquiry/destroy/{id}','enquiryDestroy')->name('enquiry.destroy'); 
    });

    
    


    
    Route::controller(ChangePasswordController::class)->group(function(){
        Route::get('/admin-change-password','showChangePasswordForm')->name('password.change');
        Route::post('/change-password','changePassword')->name('password.update');
    });
    
    
    
    
});

Route::get('/{slug}', [ContactController::class,'landing'])->name('landing.page');

