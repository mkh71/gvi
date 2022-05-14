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
Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/term-condition', function () {
    return view('term-condition');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('hl7', 'HomeController@hl7');

Auth::routes();
Route::middleware([ 'middleware' => 'auth'])->prefix('home')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/clinic-selection', 'HomeController@clinicSelect')->name('clinic_selection');
    Route::get('/home-selection/{id}', 'HomeController@homeSelection')->name('homeSelection');
    Route::get('/profile', 'UserController@profile')->name('profile');

    Route::prefix('clinic-management')->group(function(){
        Route::resource('clinics','ClinicController');
    });
    Route::get('dashboard', 'DashboardController@getDashboard')->name('dashboard');

    Route::prefix('menu-management')->group(function(){
        Route::get('dynamic-web','RoleController@dynamic_web')->name('dynamic_web');
        Route::get('assign-role','RoleController@assign_role');
        Route::get('menu', 'RoleController@menu_view')->name('menu.view');
        Route::post('update-menu','RoleController@update_menu')->name('menu.update');
        Route::get('delete-menu/{id}','RoleController@delete_menu')->name('menu.delete');
    });

    Route::prefix('role-management')->group(function(){
        Route::get('/role-create','RoleController@index')->name('role.create');
        Route::get('/role-view','RoleController@view')->name('role.view');
        Route::post('/role-store','RoleController@store')->name('role.store');
        Route::get('/role/edit/{id}','RoleController@edit')->name('role.edit');
        Route::patch('/role/{id}/update','RoleController@update')->name('role.update');
    });

    Route::prefix('user-management')->group(function(){
        Route::resource('users','UserController');
        Route::get('/user-type', 'UserController@users')->name('user.type');
        Route::get('/user-profile/{id}', 'UserController@user_profile')->name('user_profile');
        Route::post('update-user/{id}','UserController@update')->name('user.update');
        Route::post('/create-relationship', 'UserController@new_info')->name('new_info');
    });

    Route::prefix('device-management')->name('devices.')->group(function(){
        Route::get('/','DeviceController@index')->name('index');
        Route::get('/create','DeviceController@create')->name('create');
        Route::get('/view','DeviceController@view')->name('view');
        Route::post('/store','DeviceController@store')->name('store');
        Route::get('/edit/{id}','DeviceController@edit')->name('edit');
        Route::patch('/{id}/update','DeviceController@update')->name('update');
    });


    Route::prefix('patients')->group(function(){
        Route::get('/','PatientController@patients')->name('patients');
        Route::get('/create','PatientController@create')->name('patients.create');
        Route::post('/getUsers', 'PatientController@getPatients')->name('getPatients');
        Route::get('/profile/{id}', 'PatientController@show')->name('patients.profile');
        Route::post('/store', 'UserController@dependentStore')->name('store.relationship');
        Route::post('update-user/{id}','UserController@update')->name('user.update');
        Route::post('vitals', 'ChartController@vital_store')->name('vital.store');
        Route::post('storeFiles', 'ChartController@storeFiles')->name('files.store');
    });

    Route::prefix('ajax')->group(function(){
        Route::get('/getUsers', 'UserController@getStaffs')->name('getUsers');
    });


    Route::prefix('schedule-management')->group(function(){
        Route::resource('schedules','ScheduleController');
        Route::post('schedule/update','ScheduleController@update')->name('schedule.update');
    });

    Route::post('changeStatus', function (Illuminate\Http\Request $request){
        $mod = "\App\Models\\".$request->model;
        $data = $mod::find($request->id);
        $status[$request->column] = $request->status;
//        if($request->model == 'Menu' && $data->path == null){
//            $prefix = \App\Menu::where('prefix', $data->prefix)->get();
//            foreach($prefix as $pf){
//                $pf->is_view = $request->status;
//                $pf->save();
//            }
//        }else
            $data->update($status);

        return response()->json(['success'=>'Status change successfully.']);
    })->name('status');

    Route::post('data-delete', function (Request $request){
        $model = "\App\Models\\".$request->model;
        if (isset($request->status) && $request->status == 0)
            $model::query()->findOrFail($request->id)->update(['status'=>0]);
        else
            $model::query()->findOrFail($request->id)->delete();
        return redirect()->back()->with('success',' Data Has been Deleted successfully');
    })->name('delete');

});

Route::get('reboot',function(){
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    dd('Web site Refreshed!  Please, Go back :)');
});
