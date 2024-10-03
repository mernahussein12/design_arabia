<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;


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
//start routes frontend


//Route::get('/', function () {
//    return view('frontend.body');
//})->name('home');
Route::get('/',[App\Http\Controllers\ServiceController::class, 'front'])->name('home');



//Route::get('/make', function(){
//    Artisan::call('make:model About -mcr');
//    dd('maked!');
//});


//route services
Route::get('/services', function () {
    return view('frontend.pages.service');
})->name('serv');

Route::get('Service/show/{id}', [App\Http\Controllers\ServiceController::class, 'show'])->name('Services');
Route::get('Serve/show/{id}', [App\Http\Controllers\CategoryServiceController::class, 'show'])->name('Serve');

Route::get('/Projects', function () {
    return view('frontend.pages.projects');
})->name('Project');
Route::get('Project/show/{id}', [App\Http\Controllers\ProjectControlle::class, 'show'])->name('Projects');
//Route::get('Projec/show/{id}', [App\Http\Controllers\ProjectControlle::class, 'show'])->name('Projec');


//route mission
Route::get('/missions', function () {
    return view('frontend.pages.mission');
})->name('mission');
//route about
Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');
//route approach
Route::get('/approach', function () {
    return view('frontend.pages.approach');
})->name('approach');

Route::get('/blogs', function () {return view('frontend.pages.blogs'); })->name('blogs');
Route::get('blogs/show/{id}', [App\Http\Controllers\BlogController::class, 'show'])->name('blogs.show');

Route::get('/gallery', function () {return view('frontend.pages.gallaries'); })->name('galleries');
Route::get('gallary/show/{id}', [App\Http\Controllers\GalleryControlle::class, 'show'])->name('gallary.show');


//Route::get('/', [App\Http\Controllers\CategoryGalleryControlle::class, 'filterItems'])->name('home Page');

//end routes frontend
Route::get('/OurClient', [App\Http\Controllers\ClintController::class, 'client'])->name('client');



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Users Routes

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

// Manager Routes

Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/dashboard', [HomeController::class, 'managerDashboard'])->name('manager.dashboard');
});

// Super Admin Routes
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {
    Route::get('/super-admin/dashboard', [HomeController::class, 'superAdminDashboard'])->name('super.admin.dashboard');

 // Dashboard SliderPosition
  Route::get('dashboard/SliderPosition', [App\Http\Controllers\SliderPositionController::class, 'index'])->name('SliderPosition.index');
 Route::get('dashboard/SliderPosition/create', [App\Http\Controllers\SliderPositionController::class, 'create'])->name('SliderPosition.create');
 Route::post('dashboard/SliderPosition/store', [App\Http\Controllers\SliderPositionController::class, 'store'])->name('SliderPosition.store');
 Route::get('dashboard/SliderPosition/edit/{id}', [App\Http\Controllers\SliderPositionController::class, 'edit'])->name('SliderPosition.edit');
 Route::put('dashboard/SliderPosition/update/{id}', [App\Http\Controllers\SliderPositionController::class, 'update'])->name('SliderPosition.update');
 Route::delete('dashboard/SliderPosition/destroy/{id}', [App\Http\Controllers\SliderPositionController::class, 'destroy'])->name('SliderPosition.destroy');



 // Dashboard Sliders
 Route::get('dashboard/Slider', [App\Http\Controllers\SliderController::class, 'index'])->name('Slider.index');
 Route::get('dashboard/Slider/create', [App\Http\Controllers\SliderController::class, 'create'])->name('Slider.create');
 Route::post('dashboard/Slider/store', [App\Http\Controllers\SliderController::class, 'store'])->name('Slider.store');
 Route::get('dashboard/Slider/edit/{id}', [App\Http\Controllers\SliderController::class, 'edit'])->name('Slider.edit');
 Route::put('dashboard/Slider/update/{id}', [App\Http\Controllers\SliderController::class, 'update'])->name('Slider.update');
 Route::delete('dashboard/Slider/destroy/{id}', [App\Http\Controllers\SliderController::class, 'destroy'])->name('Slider.destroy');


 // Dashboard Services Category
 Route::get('dashboard/ServiceCategory', [App\Http\Controllers\CategoryServiceController::class, 'index'])->name('ServiceCategory.index');
 Route::get('dashboard/ServiceCategory/create', [App\Http\Controllers\CategoryServiceController::class, 'create'])->name('ServiceCategory.create');
 Route::post('dashboard/ServiceCategory/store', [App\Http\Controllers\CategoryServiceController::class, 'store'])->name('ServiceCategory.store');
 Route::get('dashboard/ServiceCategory/edit/{id}', [App\Http\Controllers\CategoryServiceController::class, 'edit'])->name('ServiceCategory.edit');
 Route::put('dashboard/ServiceCategory/update/{id}', [App\Http\Controllers\CategoryServiceController::class, 'update'])->name('ServiceCategory.update');
 Route::delete('dashboard/ServiceCategory/destroy/{id}', [App\Http\Controllers\CategoryServiceController::class, 'destroy'])->name('ServiceCategory.destroy');


 // Dashboard Services
 Route::get('dashboard/Service', [App\Http\Controllers\ServiceController::class, 'index'])->name('Service.index');
 Route::get('dashboard/Service/create', [App\Http\Controllers\ServiceController::class, 'create'])->name('Service.create');
 Route::post('dashboard/Service/store', [App\Http\Controllers\ServiceController::class, 'store'])->name('Service.store');
 Route::get('dashboard/Service/edit/{id}', [App\Http\Controllers\ServiceController::class, 'edit'])->name('Service.edit');
 Route::put('dashboard/Service/update/{id}', [App\Http\Controllers\ServiceController::class, 'update'])->name('Service.update');
 Route::delete('dashboard/Service/destroy/{id}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('Service.destroy');


 // Dashboard Mission
 Route::get('dashboard/Mission', [App\Http\Controllers\MissionController::class, 'index'])->name('Mission.index');
 Route::get('dashboard/Mission/create', [App\Http\Controllers\MissionController::class, 'create'])->name('Mission.create');
 Route::post('dashboard/Mission/store', [App\Http\Controllers\MissionController::class, 'store'])->name('Mission.store');
 Route::get('dashboard/Mission/edit/{id}', [App\Http\Controllers\MissionController::class, 'edit'])->name('Mission.edit');
 Route::put('dashboard/Mission/update/{id}', [App\Http\Controllers\MissionController::class, 'update'])->name('Mission.update');
 Route::delete('dashboard/Mission/destroy/{id}', [App\Http\Controllers\MissionController::class, 'destroy'])->name('Mission.destroy');



 // Dashboard Team
 Route::get('dashboard/Team', [App\Http\Controllers\TeamController::class, 'index'])->name('Team.index');
 Route::get('dashboard/Team/create', [App\Http\Controllers\TeamController::class, 'create'])->name('Team.create');
 Route::post('dashboard/Team/store', [App\Http\Controllers\TeamController::class, 'store'])->name('Team.store');
 Route::get('dashboard/Team/edit/{id}', [App\Http\Controllers\TeamController::class, 'edit'])->name('Team.edit');
 Route::put('dashboard/Team/update/{id}', [App\Http\Controllers\TeamController::class, 'update'])->name('Team.update');
 Route::delete('dashboard/Team/destroy/{id}', [App\Http\Controllers\TeamController::class, 'destroy'])->name('Team.destroy');

 // Dashboard Client
 Route::get('dashboard/Client', [App\Http\Controllers\ClintController::class, 'index'])->name('Client.index');
 Route::get('dashboard/Client/create', [App\Http\Controllers\ClintController::class, 'create'])->name('Client.create');
 Route::post('dashboard/Client/store', [App\Http\Controllers\ClintController::class, 'store'])->name('Client.store');
 Route::get('dashboard/Client/edit/{id}', [App\Http\Controllers\ClintController::class, 'edit'])->name('Client.edit');
 Route::put('dashboard/Client/update/{id}', [App\Http\Controllers\ClintController::class, 'update'])->name('Client.update');
 Route::delete('dashboard/Client/destroy/{id}', [App\Http\Controllers\ClintController::class, 'destroy'])->name('Client.destroy');


  // Dashboard Blog
  Route::get('dashboard/Blog', [App\Http\Controllers\BlogController::class, 'index'])->name('Blog.index');
  Route::get('dashboard/Blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('Blog.create');
  Route::post('dashboard/Blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('Blog.store');
  Route::get('dashboard/Blog/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('Blog.edit');
  Route::put('dashboard/Blog/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('Blog.update');
  Route::delete('dashboard/Blog/destroy/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('Blog.destroy');


   // Dashboard ProductCategory
   Route::get('dashboard/ProductCategory', [App\Http\Controllers\CategoryProductController::class, 'index'])->name('ProductCategory.index');
   Route::get('dashboard/ProductCategory/create', [App\Http\Controllers\CategoryProductController::class, 'create'])->name('ProductCategory.create');
   Route::post('dashboard/ProductCategory/store', [App\Http\Controllers\CategoryProductController::class, 'store'])->name('ProductCategory.store');
   Route::get('dashboard/ProductCategory/edit/{id}', [App\Http\Controllers\CategoryProductController::class, 'edit'])->name('ProductCategory.edit');
   Route::put('dashboard/ProductCategory/update/{id}', [App\Http\Controllers\CategoryProductController::class, 'update'])->name('ProductCategory.update');
   Route::delete('dashboard/ProductCategory/destroy/{id}', [App\Http\Controllers\CategoryProductController::class, 'destroy'])->name('ProductCategory.destroy');



   // Dashboard Product
   Route::get('dashboard/Product', [App\Http\Controllers\ProductController::class, 'index'])->name('Product.index');
   Route::get('dashboard/Product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('Product.create');
   Route::post('dashboard/Product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('Product.store');
   Route::get('dashboard/Product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('Product.edit');
   Route::put('dashboard/Product/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('Product.update');
   Route::delete('dashboard/Product/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('Product.destroy');


    // Dashboard Project
    Route::get('dashboard/Project', [App\Http\Controllers\ProjectControlle::class, 'index'])->name('Project.index');
    Route::get('dashboard/Project/create', [App\Http\Controllers\ProjectControlle::class, 'create'])->name('Project.create');
    Route::post('dashboard/Project/store', [App\Http\Controllers\ProjectControlle::class, 'store'])->name('Project.store');
    Route::get('dashboard/Project/edit/{id}', [App\Http\Controllers\ProjectControlle::class, 'edit'])->name('Project.edit');
    Route::put('dashboard/Project/update/{id}', [App\Http\Controllers\ProjectControlle::class, 'update'])->name('Project.update');
    Route::delete('dashboard/Project/destroy/{id}', [App\Http\Controllers\ProjectControlle::class, 'destroy'])->name('Project.destroy');


    // Dashboard Gallary Category
    Route::get('dashboard/GallaryCategory', [App\Http\Controllers\CategoryGalleryControlle::class, 'index'])->name('GallaryCategory.index');
    Route::get('dashboard/GallaryCategory/create', [App\Http\Controllers\CategoryGalleryControlle::class, 'create'])->name('GallaryCategory.create');
    Route::post('dashboard/GallaryCategory/store', [App\Http\Controllers\CategoryGalleryControlle::class, 'store'])->name('GallaryCategory.store');
    Route::get('dashboard/GallaryCategory/edit/{id}', [App\Http\Controllers\CategoryGalleryControlle::class, 'edit'])->name('GallaryCategory.edit');
    Route::put('dashboard/GallaryCategory/update/{id}', [App\Http\Controllers\CategoryGalleryControlle::class, 'update'])->name('GallaryCategory.update');
    Route::delete('dashboard/GallaryCategory/destroy/{id}', [App\Http\Controllers\CategoryGalleryControlle::class, 'destroy'])->name('GallaryCategory.destroy');


    // Dashboard Gallary
    Route::get('dashboard/Gallary', [App\Http\Controllers\GalleryControlle::class, 'index'])->name('Gallary.index');
    Route::get('dashboard/Gallary/create', [App\Http\Controllers\GalleryControlle::class, 'create'])->name('Gallary.create');
    Route::post('dashboard/Gallary/store', [App\Http\Controllers\GalleryControlle::class, 'store'])->name('Gallary.store');
    Route::get('dashboard/Gallary/edit/{id}', [App\Http\Controllers\GalleryControlle::class, 'edit'])->name('Gallary.edit');
    Route::put('dashboard/Gallary/update/{id}', [App\Http\Controllers\GalleryControlle::class, 'update'])->name('Gallary.update');
    Route::delete('dashboard/Gallary/destroy/{id}', [App\Http\Controllers\GalleryControlle::class, 'destroy'])->name('Gallary.destroy');


    // Dashboard Faq Category
    Route::get('dashboard/FaqCategory', [App\Http\Controllers\FaqCategoryController::class, 'index'])->name('FaqCategory.index');
    Route::get('dashboard/FaqCategory/create', [App\Http\Controllers\FaqCategoryController::class, 'create'])->name('FaqCategory.create');
    Route::post('dashboard/FaqCategory/store', [App\Http\Controllers\FaqCategoryController::class, 'store'])->name('FaqCategory.store');
    Route::get('dashboard/FaqCategory/edit/{id}', [App\Http\Controllers\FaqCategoryController::class, 'edit'])->name('FaqCategory.edit');
    Route::put('dashboard/FaqCategory/update/{id}', [App\Http\Controllers\FaqCategoryController::class, 'update'])->name('FaqCategory.update');
    Route::delete('dashboard/FaqCategory/destroy/{id}', [App\Http\Controllers\FaqCategoryController::class, 'destroy'])->name('FaqCategory.destroy');


    // Dashboard Faq Question
    Route::get('dashboard/FaqQuestion', [App\Http\Controllers\FaqQuestionController::class, 'index'])->name('FaqQuestion.index');
    Route::get('dashboard/FaqQuestion/create', [App\Http\Controllers\FaqQuestionController::class, 'create'])->name('FaqQuestion.create');
    Route::post('dashboard/FaqQuestion/store', [App\Http\Controllers\FaqQuestionController::class, 'store'])->name('FaqQuestion.store');
    Route::get('dashboard/FaqQuestion/edit/{id}', [App\Http\Controllers\FaqQuestionController::class, 'edit'])->name('FaqQuestion.edit');
    Route::put('dashboard/FaqQuestion/update/{id}', [App\Http\Controllers\FaqQuestionController::class, 'update'])->name('FaqQuestion.update');
    Route::delete('dashboard/FaqQuestion/destroy/{id}', [App\Http\Controllers\FaqQuestionController::class, 'destroy'])->name('FaqQuestion.destroy');


    // Dashboard Answer
    Route::get('dashboard/Answer', [App\Http\Controllers\AnswerController::class, 'index'])->name('Answer.index');
    Route::get('dashboard/Answer/create', [App\Http\Controllers\AnswerController::class, 'create'])->name('Answer.create');
    Route::post('dashboard/Answer/store', [App\Http\Controllers\AnswerController::class, 'store'])->name('Answer.store');
    Route::get('dashboard/Answer/edit/{id}', [App\Http\Controllers\AnswerController::class, 'edit'])->name('Answer.edit');
    Route::put('dashboard/Answer/update/{id}', [App\Http\Controllers\AnswerController::class, 'update'])->name('Answer.update');
    Route::delete('dashboard/Answer/destroy/{id}', [App\Http\Controllers\AnswerController::class, 'destroy'])->name('Answer.destroy');

    // Dashboard About
    Route::get('dashboard/About', [App\Http\Controllers\AboutController::class, 'index'])->name('About.index');
    Route::get('dashboard/About/create', [App\Http\Controllers\AboutController::class, 'create'])->name('About.create');
    Route::post('dashboard/About/store', [App\Http\Controllers\AboutController::class, 'store'])->name('About.store');
    Route::get('dashboard/About/edit/{id}', [App\Http\Controllers\AboutController::class, 'edit'])->name('About.edit');
    Route::put('dashboard/About/update/{id}', [App\Http\Controllers\AboutController::class, 'update'])->name('About.update');
    Route::delete('dashboard/About/destroy/{id}', [App\Http\Controllers\AboutController::class, 'destroy'])->name('About.destroy');

    // Dashboard Approach
    Route::get('dashboard/Approach', [App\Http\Controllers\ApproachController::class, 'index'])->name('Approach.index');
    Route::get('dashboard/Approach/create', [App\Http\Controllers\ApproachController::class, 'create'])->name('Approach.create');
    Route::post('dashboard/Approach/store', [App\Http\Controllers\ApproachController::class, 'store'])->name('Approach.store');
    Route::get('dashboard/Approach/edit/{id}', [App\Http\Controllers\ApproachController::class, 'edit'])->name('Approach.edit');
    Route::put('dashboard/Approach/update/{id}', [App\Http\Controllers\ApproachController::class, 'update'])->name('Approach.update');
    Route::delete('dashboard/Approach/destroy/{id}', [App\Http\Controllers\ApproachController::class, 'destroy'])->name('Approach.destroy');

});

