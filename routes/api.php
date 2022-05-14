<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')->group(function(){
    Route::get('vitalReport', 'ChartController@vitalReport');
    Route::post('login', 'RegisterController@login');
    Route::post('clinic-register', 'UserController@store');
    Route::post('forgot_password', 'UserController@forgotPassword');

    Route::group(['middleware' => ['auth:api']], function () {

        Route::prefix('users')->group(function () {
            Route::post('register', 'UserController@store');
            Route::get('get-staffs', 'UserController@get_staffs');
            Route::post('staffs-role', 'UserController@staffsByRole');
            Route::get('get-patients', 'UserController@getPatientList');
            Route::post('searchUserByEmailOrPhone', 'UserController@searchUserByEmailOrPhone');
            Route::post('changePassword', 'UserController@changePassword');
            Route::get('getProfileById/{id}', 'UserController@getProfileById');
        });


        Route::prefix('roles')->group(function () {
            Route::get('/', 'RoleController@index');
            Route::post('save', 'RoleController@store');
            Route::get('update', 'RoleController@update');
        });

        Route::prefix('clinics')->group(function () {
            Route::get('/', 'ClinicController@index');
            Route::post('save', 'ClinicController@store');
            Route::get('show/{id}', 'ClinicController@show');
            Route::get('select-user-clinic', 'ClinicController@selectUserClinic');
            Route::post('set-user-clinic', 'ClinicController@setUserClinic');
        });

        Route::prefix('devices')->group(function () {
            Route::get('/', 'DeviceController@index');
            Route::post('save', 'DeviceController@store');
            Route::get('show/{code}', 'DeviceController@show');
            Route::post('assign-doctor', 'DeviceController@assign2doctor');
            Route::post('remove-doctor', 'DeviceController@unAssign');
        });
        Route::prefix('doctors')->group(function () {
            Route::get('verified-list', 'DoctorController@verifiedList');
            Route::get('sent-request-list', 'DoctorController@get_sent_list');
            Route::post('save-verified', 'DoctorController@saveVerified');
            Route::get('verify-requests', 'DoctorController@getVerifyRequest');
            Route::get('accept-verify-request/{id}', 'DoctorController@enableStatus');
            Route::get('disable-verify-status/{id}', 'DoctorController@disableStatus');
            Route::get('get-unassigned-doctors', 'DoctorController@getUnassignedDoctor');
            Route::get('denied-requests', 'DoctorController@deniedRequests');
        });

        Route::prefix('chart')->group(function () {
            Route::get('get-all-vitals/', 'ChartController@get_allVitals');
            Route::get('get-vitals/{id}', 'ChartController@patient_vitals');
            Route::post('save-vital', 'ChartController@vital_store');
            Route::get('show-vital/{id}', 'ChartController@vital_show');
            Route::post('upload-files', 'ChartController@storeFiles');
            Route::get('vitalData', 'ChartController@vitalData');
            Route::post('vitalReport', 'ChartController@vitalReport');
            Route::get('latestReport', 'ChartController@latestReport');
        });

        Route::prefix('patient')->group(function () {
            Route::post('patient-device', 'PatientController@patientDevice');
            Route::post('unassignDevice', 'PatientController@unassignDevice');
            Route::get('assignedPatients', 'PatientController@assignedPatients');
            Route::get('oldAssignedPatients', 'PatientController@oldAssignedPatients');
            Route::get('report/{id}', 'PatientController@get_report');
        });


        Route::post('verify_otp', 'UserController@verifyOtp');
        Route::get('resend_otp', 'RegisterController@resendOTP');
        Route::get('profile', 'UserController@profileData');
        Route::get('updateProfile/{id}', 'UserController@updateProfile');

        Route::post('test_notification', 'PushNotificationController@testPushNotification');
        Route::post('device/token', 'UserController@updateDeviceToken');
        Route::post('change_password', 'UserController@changePassword');
        Route::get('logout', 'UserController@logout');
    });
});
