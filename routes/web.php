<?php

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
});
Route::get('error','User\ErrorController@error');
Route::group(['middleware'=>'auth'],function(){
    /*----------------Admin Panel------------------ */
Route::group(['prefix'=>'admin'],function(){
    /*----------------------Dashboard--------------------- */
    Route::get('dashboard','Admin\DashboardController@index')->middleware('isadmin');
    /*----------------------Department--------------------- */
    Route::get('list','Admin\DepartmentController@list');
    Route::get('create-department','Admin\DepartmentController@create_department');
    Route::post('save-department','Admin\DepartmentController@save');
    Route::get('update-department/{id}','Admin\DepartmentController@update_department');
    Route::post('update-department','Admin\DepartmentController@update');
    Route::get('delete-department/{id}','Admin\DepartmentController@delete');
    /*----------------------Sub-Department--------------------- */
    Route::get('sub-department-list','Admin\SubDepartmentController@list');
    Route::get('create-sub-department','Admin\SubDepartmentController@create_sub_department');
    Route::post('save-sub-department','Admin\SubDepartmentController@save');
    Route::get('update-sub-department/{id}','Admin\SubDepartmentController@update_sub_department');
    Route::post('update-subdepartment','Admin\SubDepartmentController@update');
    Route::get('delete-subdepartment/{id}','Admin\SubDepartmentController@delete');
    /*----------------------Doctor--------------------- */
    Route::get('doctor-list','Admin\DoctorController@list');
    Route::get('doctor/sub-department','Admin\DoctorController@sub_dept');
    Route::get('create-doctor','Admin\DoctorController@create_doctor');
    Route::post('save-doctor','Admin\DoctorController@save');
    Route::get('update-doctor/{id}','Admin\DoctorController@update_doctor');    
    Route::post('update-doctor','Admin\DoctorController@update'); 
    Route::get('delete-doctor/{id}','Admin\DoctorController@delete');
    /*----------------------Appointment--------------------- */
    Route::get('appointment-list','Admin\AppointmentController@appointment_list');
    Route::get('appointment-check/{id}','Admin\AppointmentController@check');
    Route::get('checked_list','Admin\AppointmentController@checked_list');
    Route::get('delete-appointment/{id}','Admin\AppointmentController@delete');
    /*----------------------Product Category--------------------- */
    Route::get('product-category-list','Admin\ProductCategoryController@list');
    Route::get('create-product-category','Admin\ProductCategoryController@create_product_category');
    Route::post('save-product-category','Admin\ProductCategoryController@save');
    Route::get('update-product-category/{id}','Admin\ProductCategoryController@update_product_category');
    Route::post('update-product-category','Admin\ProductCategoryController@update');
    Route::get('delete-product-category/{id}','Admin\ProductCategoryController@delete');
    /*--------------------------Product--------------------------- */
    Route::get('product-list','Admin\ProductController@list');
    Route::get('create-product','Admin\ProductController@create_product');
    Route::post('save-product','Admin\ProductController@save');
    Route::get('update-product/{id}','Admin\ProductController@update_product');
    Route::post('update-product','Admin\ProductController@update');
    Route::get('delete-product/{id}','Admin\ProductController@delete');
    /*----------------------All-Lab--------------------- */
    Route::get('all-lab-list','Admin\AllLabController@lab_list');
    Route::get('create-lab','Admin\AllLabController@create_lab');
    Route::post('save-lab','Admin\AllLabController@save');
    Route::get('update-lab/{id}','Admin\AllLabController@update_lab');
    Route::post('update-lab','Admin\AllLabController@update');
    Route::get('delete-lab','Admin\AllLabController@delete');
    /*----------------------Lab-Info--------------------- */
    Route::get('lab-info-list','Admin\LabInfoController@list');
    Route::get('create-lab-info','Admin\LabInfoController@create_lab_info');
    Route::post('save-lab-info','Admin\LabInfoController@save');
    Route::get('update-lab-info/{id}','Admin\LabInfoController@update_lab_info');
    Route::post('update-lab-info','Admin\LabInfoController@update');
    Route::get('delete-lab-info/{id}','Admin\LabInfoController@delete');
    /*----------------------Sub-Lab-Info--------------------- */
    Route::get('sub-lab-info-list','Admin\SubLabInfoController@list');
    Route::get('sub-lab-info/lab-info','Admin\SubLabInfoController@lab_info');
    Route::get('create-sub-lab-info','Admin\SubLabInfoController@create_sub_lab');
    Route::post('save-sub-lab-info','Admin\SubLabInfoController@save');
    Route::get('update-sub-lab-info/{id}','Admin\SubLabInfoController@update_sub_lab');
    Route::post('update-sub-lab-info','Admin\SubLabInfoController@update');
    Route::get('delete-sub-lab-info/{id}','Admin\SubLabInfoController@delete');
    /*----------------------LabReport--------------------- */
    Route::get('new-lab-report','Admin\LabReportController@new_lab_report');
});
});

    /*---------------------User Panel--------------------- */
    Route::get('/','User\HomeController@index');
    Route::group(['prefix'=>'user'],function(){
    /*------------------------Doctor----------------------- */
    Route::get('doctor-appointment/{id}','User\DoctorController@doctor_appointment');
    Route::post('save-doctor-appointment','User\DoctorController@save');
    Route::get('department/{id}/{slug}','User\DoctorController@dept_wise');
    Route::get('sub-department/{id}/{slug}','User\DoctorController@sub_dept_wise');
    /*--------------------orderCategory-------------------- */
    Route::get('order-category','User\OrderCategoryController@order_category');
    Route::get('medicine','User\OrderCategoryController@medicine');
    /*----------------------Laboratory---------------------- */
    Route::get('lab/{id}/{slug}','User\LaboratoryController@lab');
    Route::get('lab-report','User\LaboratoryController@lab_report');
    Route::post('save-lab-report','User\LaboratoryController@save');
    /*----------------------Services---------------------- */
    Route::get('services','User\ServicesController@services');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
