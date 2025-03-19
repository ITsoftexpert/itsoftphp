<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\QueryFormController;

Route::get('/admin/client-query', [QueryFormController::class, 'index']);
Route::post('/query', [QueryFormController::class, 'store']);
Route::get('/query/{id}', [QueryFormController::class, 'show']);
Route::put('/query/{id}', [QueryFormController::class, 'update']);
Route::delete('/query/{id}', [QueryFormController::class, 'destroy']);
// admin routing
Route::get('/admin/login', function () { return view('admin/login');});
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::post('/admin/blogs', [BlogController::class, 'store'])->name('blogs.store');

Route::post('/mark-query', [QueryFormController::class, 'markQuery'])->name('mark.query');
Route::post('/submit-remarks', [QueryFormController::class, 'submitRemarks'])->name('submit.remarks');





Route::get('/workflow-automation-services', function () { return view('workflow-automation-services');});
Route::get('/brisbane-cup', function () { return view('brisbane-cup');});
Route::get('/workflow-automation-form', function () { return view('workflow-automation-form');});
Route::get('/welcome', function () { return view('welcome');});
Route::get('/website-development-services', function () { return view('website-development-services');});
Route::get('/testimonials', function () { return view('testimonials');});
Route::get('/test', function () { return view('test');});
Route::get('/teams', function () { return view('teams');});
Route::get('/sucess-stories', function () { return view('sucess-stories');});
Route::get('/startups-small-buisnesses', function () { return view('startups-small-buisnesses');});
Route::get('/social-media-marketing-services', function () { return view('social-media-marketing-services');});
Route::get('/social-media-form', function () { return view('social-media-form');});
Route::get('/Snapsend', function () { return view('Snapsend');});
Route::get('/service.blade', function () { return view('service.blade');});
Route::get('/seo-services', function () { return view('seo-services');});
Route::get('/seo-form', function () { return view('seo-form');});
Route::get('/retail-e-commerce', function () { return view('retail-e-commerce');});
Route::get('/realestate', function () { return view('realestate');});
Route::get('/ppc-form', function () { return view('ppc-form');});
Route::get('/pay-per-click-services', function () { return view('pay-per-click-services');});
Route::get('/marketing-automation-services', function () { return view('marketing-automation-services');});
Route::get('/marketing-automation-form', function () { return view('marketing-automation-form');});
Route::get('/Live Project Training', function () { return view('Live Project Training');});
Route::get('/ios-android-form', function () { return view('ios-android-form');});
Route::get('/ios-android-app-development-services', function () { return view('ios-android-app-development-services');});
Route::get('/', function () { return view('index');});
Route::get('/hybrid-app-solutions-services', function () { return view('hybrid-app-solutions-services');});
Route::get('/hybrid-app-form', function () { return view('hybrid-app-form');});
Route::get('/healthcare', function () { return view('healthcare');});
Route::get('/finance-banking', function () { return view('finance-banking');});
Route::get('/faq', function () { return view('faq');});
Route::get('/enterprise-integration-form', function () { return view('enterprise-integration-form');});
Route::get('/enterprice-Software-Integration', function () { return view('enterprice-Software-Integration');});
Route::get('/education', function () { return view('education');});
Route::get('/ecommerce-form', function () { return view('ecommerce-form');});
Route::get('/Digital-Marketing-Institute-at-ItsoftExpert', function () { return view('Digital-Marketing-Institute-at-ItsoftExpert');});
Route::get('/custom-website-form', function () { return view('custom-website-form');});
Route::get('/custom-software-solutions-services', function () { return view('custom-software-solutions-services');});
Route::get('/custom-software-form', function () { return view('custom-software-form');});
Route::get('/crm-solutions-services', function () { return view('crm-solutions-services');});
Route::get('/crm-form', function () { return view('crm-form');});
Route::get('/content-marketing-services', function () { return view('content-marketing-services');});
Route::get('/content-marketing-form', function () { return view('content-marketing-form');});
Route::get('/ContactUs', function () { return view('ContactUs');});
Route::get('/contact-form', function () { return view('contact-form');});
Route::get('/connect-with-itsoftexpert', function () { return view('connect-with-itsoftexpert');});
Route::get('/cms-form', function () { return view('cms-form');});
Route::get('/cms-development-services', function () { return view('cms-development-services');});
Route::get('/case-studys', function () { return view('case-studys');});
Route::get('/cartouchup', function () { return view('cartouchup');});
Route::get('/risbane-cup', function () { return view('brisbane-cup');});
Route::get('/blog', function () { return view('Blog');});
Route::get('/about', function () { return view('about');});
Route::get('/e-commerce-solutions-services', function () { return view('e-commerce-solutions-services');});


Route::get('/thank-you', function () { return view('thank_you');});



