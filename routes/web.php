<?php

use App\Models\User;
// use App\Http\Controllers\Image;
use App\Http\Controllers\Search;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*  USER ROLE  */
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AccountSaveController;
use App\Http\Controllers\Admin\UsersController;
/*  USER ROLE  */

/*  ADMIN ROLE  */

use App\Http\Controllers\Admin\AdminEditProduct;
use App\Http\Controllers\Admin\AddPageController;
use App\Http\Controllers\Admin\UserAddController;
use App\Http\Controllers\ProductDeleteController;
use App\Http\Controllers\Admin\EditPageController;
use App\Http\Controllers\Admin\AdminImageController;
use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DeletePageController;
use App\Http\Controllers\Admin\AdminAccountController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminPageEditController;
use App\Http\Controllers\Admin\AdminAddProductController;
use App\Http\Controllers\Admin\AdminAccountSaveController;
use App\Http\Controllers\Admin\AdminProductDeleteController;
use App\Http\Controllers\Admin\UserEditController;
use App\Http\Controllers\Language;


/*  ADMIN ROLE  */
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


            /* Language Routes */

Route::get('local/en',[Language::class,'en']);

Route::get('local/ar',[Language::class,'ar']);
            /* Language Routes */




            /* Pages Routes */

Route::get('/',[PagesController::class,'index']);

Route::get('/about',[PagesController::class,'about']);

Route::get('/contact',[PagesController::class,'contact']);

Route::post('Contact',[ContactController::class,'index']);

            /* Pages Routes */


             /* Search Routes */
Route::get('Search',[Search::class,'index']);

Route::post('Search',[Search::class,'search'])->name('Search');

            /* Pages Routes */ 



Route::get('categories/{category:slug}',[ProductController::class,'category'])->name('category');



Route::middleware('auth')->group(function(){

    Route::get('Product/{id}',[ProductController::class,'show']);
    Route::post('/Account/Save',[AccountSaveController::class,'index'])->name('user.save');
    Route::post('Image/Upload',[ImageController::class,'index']);
    Route::post('Account/Delete',[AccountController::class,'delete']);
    
});


                                /*  USER ROLE  */

Route::middleware(['auth','role:User'])->group(function(){
    Route::post('Product/Delete',[ProductDeleteController::class,'delete'])->name('userProduct');
    Route::post('Product/Add',[ProductController::class,'add']);
    Route::get('/home/Account',[AccountController::class,'index']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();
                        
                                /*  USER ROLE  */



                                 /* Admin Routes */
Route::prefix('admin')->middleware(['auth','role:Admin'])->group(function(){
Route::get('/home', [App\Http\Controllers\Admin\AdminHomeController::class, 'Adminindex'])->name('Adminhome');
Route::get('/home/Account',[AccountController::class,'index']);
Route::get('/home/pages',[AdminPagesController::class,'index']);
Route::get('/home/pages/EditPage/{id}',[EditPageController::class,'index']);
Route::get('/home/pages/AddPage',[AddPageController::class,'index']);
Route::get('/home/AddProduct',[AdminAddProductController::class,'index']);
Route::get('/home/EditProduct/{id}',[AdminEditProduct::class,'index']);
Route::get('/home/Categories',[CategoriesController::class,'index']);
Route::get('/home/CategoryAdd',[CategoriesController::class,'add']);
Route::get('/home/CategoryEdit/{id}',[CategoriesController::class,'edit']);
Route::get('/home/Users',[UsersController::class,'index']);
Route::get('/home/Users/Add',[UserAddController::class,'index']);
Route::get('home/Users/Edit/{id}',[UserEditController::class,'index']);
Route::post('/home/pages/EditPage',[EditPageController::class,'edit']);
Route::post('home/pages/DeletePage',[DeletePageController::class,'delete']);
Route::post('/home/pages/AddPage',[AddPageController::class,'add']);
Route::post('/home/DeleteProduct',[AdminProductDeleteController::class,'delete'])->name('AdminProduct');
Route::post('/home/EditProduct',[AdminEditProduct::class,'edit']);
Route::post('/home/AddProduct',[AdminAddProductController::class,'add']);
Route::post('/home/CategoryDelete',[CategoriesController::class,'delete']);
Route::post('/home/CategoryAdd',[CategoriesController::class,'add_function']);
Route::post('/home/CategoryEdit',[CategoriesController::class,'edit_function']);
Route::post('/home/Users/Delete',[UsersController::class,'delete']);
Route::post('/home/Users/Add',[UserAddController::class,'add']);
Route::post('home/Users/Edit',[UserEditController::class,'edit']);

                         /* Admin Routes */


});