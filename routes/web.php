<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
Route::get('/term-condition', function () {
    return view('term-condition');
})->name('term-condition');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
Route::get('logout', function () {
    Session::flash();
})->name('logout');


//Route::group(function (){

    Route::get('/', 'FrontController@index')->name('/');

    Route::get('/about-us', function () { return view('about'); })->name('aboutUs');
    Route::get('/contact-us', function () { return view('contact'); })->name('contactUs');
    Route::get('/our-brands', function () { return view('brands'); })->name('brands');
    Route::get('/category', function () { return view('category'); })->name('category');
    Route::get('/flagship-outlets', function () { return view('flagship'); })->name('flagship');
    Route::get('/gallery', function () { return view('gallery'); })->name('gallery');
    Route::get('/career', function () { return view('career'); })->name('career');

//});

Auth::routes();
Route::middleware([ 'middleware' => 'auth'])->prefix('home')->group(function () {
Route::get('/', 'HomeController@index')->name('home');
    Route::get('/profile', 'UserController@profile')->name('profile');

    Route::prefix('company')->group(function () {
        Route::get('/', 'WebController@companyindex')->name('company.index');
        Route::post('{id}/update', 'WebController@companyUpdate')->name('company.update');
    });
    Route::prefix('slider-management')->group(function () {
        Route::resource('sliders', 'SliderController');
    });

    Route::prefix('category-management')->group(function () {
        Route::resource('categories', 'CategoryController');
    });

    Route::post('changeStatus', function (Illuminate\Http\Request $request){
        $mod = "\App\Models\\".$request->model;
        $data = $mod::find($request->id);
        $status[$request->column] = $request->status;
        $data->update($status);
        return response()->json(['success'=>'Status change successfully.']);
    })->name('status');

    Route::post('data-delete', function (Request $request){
        $model = "\App\\".$request->model;
        $data = $model::query()->findOrFail($request->id);
        if ($data->image)
            destroyImage(public_path('storage/').$data->image);

        if (isset($request->status) && $request->status == 0)
            $data->update(['status'=>0]);
        else
            $data->delete();

        return redirect()->back()->with('success',' Data Has been Deleted successfully');
    })->name('delete');

});

Route::get('reboot',function(){
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    dd('Web site Refreshed!  Please, Go back :)');
});
