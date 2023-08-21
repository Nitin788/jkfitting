<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BlogController;
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

// Route::get('/', function () {
//     return view('admin panle.backend.dashboard');
// });



// Route::get('/category', function () {
//     return view('backend.category');
// });


// Route::get('/', function () {
//     return view('frontend.index.home');
// });

Route::get('/', function () {
    return view('admin panle.backend.dashboard');
});


Route::resource('categories',CategoryController::class);

Route::resource('subcategories',SubCategoryController::class);

Route::resource('blog',BlogController::class);

Route::resource('home',HomeController::class);

Route::get('add-category',[CategoryController::class,'create'])->name('categories.add_new_category');

Route::get('add-subcategory',[SubCategoryController::class,'subcategory'])->name('subcategories.add_new_subcategory');

Route::get('add-blog',[BlogController::class,'blog'])->name('add_new_blog');

Route::get('category_list',[CategoryController::class,'index'])->name('categories.category');

Route::get('subcategory_list',[SubCategoryController::class,'index'])->name('subcategories.subcategories');

Route::get('blog-list',[BlogController::class,'index'])->name('blog_list');

Route::POST('store',[CategoryController::class,'store'])->name('save-category');

Route::POST('subcategory',[SubCategoryController::class,'store'])->name('save-sub-category');

Route::POST('storeblog',[BlogController::class,'store'])->name('save-blog');

Route::POST('update-blog',[BlogController::class,'update'])->name('update-blog');

Route::POST('update-category',[CategoryController::class,'update'])->name('update-category');

Route::POST('update-subcategory',[SubCategoryController::class,'update'])->name('update-subcategory');

Route::GET('delete-subcategory/{id}',[SubCategoryController::class,'destroy'])->name('delete-subcategory');

Route::GET('delete-blog/{id}',[blogController::class,'destroy'])->name('delete-blog');

Route::GET('delete-category/{id}',[CategoryController::class,'destroy'])->name('delete-category');

Route::GET('live',[HomeController::class,'index'])->name('home');

Route::GET('contact page',[HomeController::class,'create'])->name('contact');

Route::GET('about page',[HomeController::class,'about'])->name('about');

Route::GET('subcategory',[HomeController::class,'subcat'])->name('subcategory');









