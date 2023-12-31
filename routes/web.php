<?php

use App\Http\Controllers\CamDeliveredProductsController;
use App\Http\Controllers\CamOrgStuffController;
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
use App\Http\Controllers\TotalProductDpController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 

// routs of breaze
Route::get('/', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('/');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


        // financial adm mang. report routes
        Route::resource('fin-adm-report' , FinancialAdmReportController::class);

        // financial adm mang. employee routes
        Route::resource('fin-adm-employee' , FinancialAdmEmpController::class);

        // main routes of the project
        Route::get('/depo' , function(){
            return view('./financial-administrative-directorate/depo/index');
        });
        Route::get('/commodity' , function(){
            return view('./financial-administrative-directorate/commodity-accounting-management/index');
        });
        Route::get('/terminals' , function(){
            return view('./financial-administrative-directorate/terminals/index');
        });


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
        // commodity employees routes
        Route::resource('commodity-org-stuff', CamOrgStuffController::class);






        // this route is for main reports
        Route::resource('main-report' , MainReportController::class);




        




        
        
        Route::get("/financial", function () {
            return view("./financial-administrative-directorate/index");
        });

        Route::get("/acc-emp", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/org-stuff/org-stuff-list");
        });

        Route::get("/acc-add-emp", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/org-stuff/add-org-stuff");
        });

        Route::get("/acc-update-emp", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/org-stuff/update-org-stuff");
        });

        Route::get("/acc-emp-items", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/org-stuff/view-org-stuff-items");
        });

        Route::get("/acc-emp-item-reg", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/products/reg-product-org-stuff");
        });
        Route::get("/acc-emp-car-reg", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/products/reg-car");
        });
        Route::get("/uuu", function () {
            return view("./financial-administrative-directorate/commodity-accounting-management/org-stuff/update-product");
        });






        // --------------- for property ------------------
        Route::get("/property", function () {
            return view("./financial-administrative-directorate/property/index");
        });
        
        Route::get("/qarardads", function () {
            return view("./financial-administrative-directorate/property/qrardads/list-qarar-dads");
        });
        
        Route::get("/new-qarardads", function () {
            return view("./financial-administrative-directorate/property/qrardads/add-qarar-dad");
        });
        Route::get("/property-report", function () {
            return view("./financial-administrative-directorate/property/report");
        });
        
        
        Route::get("/view-qarardad-details", function () {
            return view("./financial-administrative-directorate/property/qrardads/details-qarar-dad");
        });

        Route::get("/update-qarardad", function () {
            return view("./financial-administrative-directorate/property/qrardads/update-qarar-dad");
        });
        
        Route::get("/view-qarardad", function () {
            return view("./financial-administrative-directorate/property/qrardads/print-qarar-dad");
        });
        
        
        Route::get("/estilam", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/list-estilam");
        });
        
        Route::get("/oil-company", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/oil-company-qarar-dad/list-oil-qarar-dad");
        });
        
        Route::get("/view", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/oil-company-qarar-dad/print-oil-qarar-dad");
        });
        
        
        Route::get("/view-estilam", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/print-estilam");
        });
        
        
        Route::get("/add-estilam", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/add-estilam");
        });
        
        Route::get("/estilam-details", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/details-estilam");
        });
        
        Route::get("/estilam-update", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/update-estilam");
        });
        
        
     
        
        Route::get("/revenue", function () {
            return view("./financial-administrative-directorate/property/revenue/revenue-list");
        });
        
        Route::get("/add-revenue", function () {
            return view(".financial-administrative-directorate/property/revenue/add-revenue");
        });
        
        Route::get("/print-revenue", function () {
            return view("./financial-administrative-directorate/property/revenue/print-revenue");
        });
        Route::get("/view-revenue", function () {
            return view("./financial-administrative-directorate/property/revenue/view-revenue-details");
        });
        
        Route::get("/cars-list", function () {
            return view("./financial-administrative-directorate/property/oil-estilams/oil-cars/cars-list");
        });
        
        
        // -------------- for payroll management------------|
        
        
        Route::get("/payroll", function () {
            return view("./financial-administrative-directorate/payroll-management/index");
        });
        
        Route::get("/employee-list", function () {
            return view("./financial-administrative-directorate/payroll-management/employees/employee-list");
        });
        
        
        Route::get("/print-doc", function () {
            return view("./financial-administrative-directorate/payroll-management/employees/print-doc");
        });
        
        Route::get("/edit-employee", function () {
            return view("./financial-administrative-directorate/payroll-management/employees/edit-employee");
        });
        
        Route::get("/extra-employees", function () {
            return view("./financial-administrative-directorate/payroll-management/retired-deceased-employees/employee-list");
        });
        
        Route::get("/print-documents", function () {
            return view("./financial-administrative-directorate/payroll-management/retired-deceased-employees/print-doc");
        });
        
        Route::get("/staff", function () {
            return view("./financial-administrative-directorate/payroll-management/general-staff-composition/staff-list");
        });
    });



    







    
// --------------- for DEPO --------------------
require __DIR__.'/auth.php';