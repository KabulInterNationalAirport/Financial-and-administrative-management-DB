<?php

use App\Http\Controllers\CamCarsDeliveredController;
use App\Http\Controllers\CamDeliveredProductsController;
use App\Http\Controllers\CamEmpController;
use App\Http\Controllers\CamItProDeliveredController;
use App\Http\Controllers\CamOrgStuffController;
use App\Http\Controllers\CamReportController;
use App\Http\Controllers\DepoEmpController;
use App\Http\Controllers\DepoReportController;
use App\Http\Controllers\DpCarsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\FinancialAdmReportController;
use App\Http\Controllers\FinancialAdmEmpController;
use App\Http\Controllers\DpItProductsController;
use App\Http\Controllers\DpNewArrivalsController;
use App\Http\Controllers\TrusteeDpController;
use App\Http\Controllers\DpDamagedProductsController;
use App\Http\Controllers\MainReportController;
use App\Http\Controllers\TarminalEmpController;
use App\Http\Controllers\TarminalReportController;
use App\Http\Controllers\TotalProductDpController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 

// routs of breaze
Route::get('/', function () {
    return view('index');
});
// })->middleware(['auth', 'verified'])->name('/');
    });
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


        // financial adm mang. report routes
        Route::resource('fin-adm-report' , FinancialAdmReportController::class);

        // financial adm mang. employee routes
        Route::resource('fin-adm-employee' , FinancialAdmEmpController::class);

        // ---------------------------main routes of the project-----------------------------------
        Route::get("/financial", function () {
            return view("./financial-administrative-directorate/index");
        });

        Route::get("/payroll", function () {
            return view("./financial-administrative-directorate/payroll-management/index");
        });
        
        Route::get("/property", function () {
            return view("./financial-administrative-directorate/property/index");
        });
        Route::get('/depo' , function(){
            return view('./financial-administrative-directorate/depo/index');
        });
        Route::get('/commodity' , function(){
            return view('./financial-administrative-directorate/commodity-accounting-management/index');
        });
        Route::get('/terminals' , function(){
            return view('./financial-administrative-directorate/terminals/index');
        });
        Route::get('/report-index' , function(){
            return view('./report-index');
        });
// ---------------------------------------------------------------------------------------------------------------

        // depo routes
        // depo All products routes
        Route::resource('depo-all-products' , DpItProductsController::class);
        // Depo new arrivals routes
        Route::resource('depo-new-arrivals', DpNewArrivalsController::class);
        // depo Trustees routes
        Route::resource('trustee' , TrusteeDpController::class);
        // depo Damaged products routes
        Route::resource('damage-product', DpDamagedProductsController::class);
        // depo cars routes
        Route::resource('depo-car' , DpCarsController::class);
        // depo employees routes
        Route::resource('depo-employee' , DepoEmpController::class);
        // depo reports routes
        Route::resource('depo-report' , DepoReportController::class);
        // depo IT new arrival products
        Route::resource('depo-it-product', TotalProductDpController::class);

        
        // commodity accounting man routes
        // delivered products route
        Route::resource('delivered-product' , CamDeliveredProductsController::class);
        // commodity organization stuff routes
        Route::resource('commodity-org-stuff', CamOrgStuffController::class);
        // commodity it products routes
        Route::resource('comm-it-product' , CamItProDeliveredController::class);
        // commodity car products routes 
        Route::resource('commodity-cars' , CamCarsDeliveredController::class);
        // commodity employees routes
        Route::resource('commodity-employees' , CamEmpController::class);
        // commodity reprot routes
        Route::resource('commodity-report' , CamReportController::class);



        // terminals mang. routes
        // terminals employees routes
        Route::resource('terminal-employee' , TarminalEmpController::class);
        Route::resource('terminal-report', TarminalReportController::class);




        // this route is for main reports
        Route::resource('main-report' , MainReportController::class);

        Route::group(['prefix' => 'permissions', 'as' => 'permissions.'], function () {
            Route::get('/index',[PermissionController::class, 'index'])->name('index');
            Route::get('/create',[PermissionController::class, 'create'])->name('create');
            Route::post('/store',[PermissionController::class, 'store'])->name('store');
            Route::get('/edit/{id}',[PermissionController::class, 'edit'])->name('edit');
            Route::put('/update/{id}',[PermissionController::class, 'update'])->name('update');
            Route::post('/destroy',[PermissionController::class, 'destroy'])->name('destroy');
        });
        Route::group(['prefix' => 'roles', 'as' => 'roles.'], function () {
            Route::get('/index',[RoleController::class, 'index'])->name('index');
            Route::get('/create',[RoleController::class, 'create'])->name('create');
            Route::post('/store',[RoleController::class, 'store'])->name('store');
            Route::get('/edit/{id}',[RoleController::class, 'edit'])->name('edit');
            Route::put('/update/{id}',[RoleController::class, 'update'])->name('update');
            Route::post('/destroy',[RoleController::class, 'destroy'])->name('destroy');
        });
        Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
            Route::get('/index',[UserController::class, 'index'])->name('index');
            Route::get('/create',[UserController::class, 'create'])->name('create');
            Route::post('/store',[UserController::class, 'store'])->name('store');
            Route::get('/show/{id}',[UserController::class, 'show'])->name('show');
            Route::get('/edit/{id}',[UserController::class, 'edit'])->name('edit');
            Route::put('/update/{id}',[UserController::class, 'update'])->name('update');
            Route::post('/destroy',[UserController::class, 'destroy'])->name('destroy');
        });



      



    







    
// --------------- for DEPO --------------------
require __DIR__.'/auth.php';