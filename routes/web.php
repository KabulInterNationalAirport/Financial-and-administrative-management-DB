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
use App\Http\Controllers\EstateContractController;
use App\Http\Controllers\EstateEmpController;
use App\Http\Controllers\EstateOilInquiryController;
use App\Http\Controllers\EstateReport;
use App\Http\Controllers\EstateReportController;
use App\Http\Controllers\ExpenseCodeController;
use App\Http\Controllers\FAdmMangEmployeeController;
use App\Http\Controllers\FAdmMangReportController;
use App\Http\Controllers\GenerallOrgStuffController;
use App\Http\Controllers\LogisticEmpController;
use App\Http\Controllers\LogisticMangReportController;
use App\Http\Controllers\MainReportController;
use App\Http\Controllers\OfficersAppointedEmpController;
use App\Http\Controllers\OfficersBalanceController;
use App\Http\Controllers\OfficersEmployeeController;
use App\Http\Controllers\OfficersMangReportController;
use App\Http\Controllers\OilDischargeEmployeeController;
use App\Http\Controllers\OilDMangReportController;
use App\Http\Controllers\PayRollEmployeeController;
use App\Http\Controllers\ProjectCodeController;
use App\Http\Controllers\PyrollAppointedEmpController;
use App\Http\Controllers\PyrollBudgetController;
use App\Http\Controllers\PyrollBudgetExpenseController;
use App\Http\Controllers\PyrollReportController;
use App\Http\Controllers\SaveCareEmployeeController;
use App\Http\Controllers\SaveCareMangReportController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShowRetiredEmployeesController;
use App\Http\Controllers\TarminalEmpController;
use App\Http\Controllers\TarminalReportController;
use App\Http\Controllers\TotalProductDpController;
use App\Models\OfficersAppointedEmp;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 

// routs of breaze
// Route::get('/', function () {
//     return view('index');
// })->middleware(['auth', 'verified'])->name('/');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('index');
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
        Route::get('/logistic' , function(){
            return view('./financial-administrative-directorate/logistics/index');
        });
        Route::get('/oil-descharge' , function(){
            return view('./financial-administrative-directorate/oil-descharge/index');
        });
        Route::get('/save-and-care' , function(){
            return view('./financial-administrative-directorate/save-and-care/index');
        });
        Route::get('/financial-administrative' , function(){
            return view('./financial-administrative-directorate/financial-administrative/index');
        });
        Route::get('/officers' , function(){
            return view('./financial-administrative-directorate/officers-mang/index');
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
        // terminal report routes
        Route::resource('terminal-report', TarminalReportController::class);


        // logistics mang. routes
        // logistic report route
        Route::resource('logistic-report', LogisticMangReportController::class);
        // logistic employee routes
        Route::resource('logistic-employee' , LogisticEmpController::class);


        // payroll management routes
        // project codes routes here
        Route::resource('payroll-project-codes' , ProjectCodeController::class);
        // expense codes routes here
        Route::resource('payroll-expense-codes', ExpenseCodeController::class);
        // budgets routes
        Route::resource('payroll-budget' , PyrollBudgetController::class);
        // budgets routes
        Route::resource('payroll-budget-expense' , PyrollBudgetExpenseController::class);
        // payroll management employees
        Route::resource('payroll-employee' , PayRollEmployeeController::class);
        // payroll report route
        Route::resource('payroll-report' , PyrollReportController::class);
        // payroll appointed stuff
        Route::resource('appointed-stuff', PyrollAppointedEmpController::class);
        // payroll retired employee list invokable controller
        Route::get('retired-employees' , ShowRetiredEmployeesController::class);
        // org general stuff routes
        Route::resource('org-stuff' , GenerallOrgStuffController::class);


        // oil discharge routes here
        // oil discharge report routes
        Route::resource('oil-d-report' , OilDMangReportController::class);
        // oil discharge employee routes
        Route::resource('oil-d-employee' , OilDischargeEmployeeController::class);

        // save and care manag. routes here 
        // save-care reprot routes
        Route::resource('save-care-report' , SaveCareMangReportController::class);
        // save-care employee routes
        Route::resource('save-care-employee' , SaveCareEmployeeController::class);



        // financial and administrative management routes
        // fin and adm report routes
        Route::resource('fin-adm-m-report' , FAdmMangReportController::class);
        // fin adn amd mang employee routes
        Route::resource('fin-adm-m-employee' , FAdmMangEmployeeController::class);


        // officers mang routes here
        // officers report route 
        Route::resource('officer-report', OfficersMangReportController::class);
        // officers employee routes
        Route::resource('officer-employee' , OfficersEmployeeController::class);
        // officers stuff list routes
        Route::resource('officer-stuff',OfficersAppointedEmpController::class);
        // officers stuff list searching route
        Route::get('/officer-stuff-search' , [SearchController::class , 'search']);
        // employee balance routes
        Route::resource('balance' , OfficersBalanceController::class);



        // property mang routes
        // real estate report route
        Route::resource('estate-report', EstateReportController::class);
        // real estate employee route
        Route::resource('estate-employee' , EstateEmpController::class);
        // real estate contract routes
        Route::resource('estate-contract' , EstateContractController::class);
        // real estate oil inquery routes
        Route::resource('estate-oil-inquery' , EstateOilInquiryController::class);


        
        // this route is for main reports
        Route::resource('main-report' , MainReportController::class);



      
    });



    







    
// --------------- for DEPO --------------------
require __DIR__.'/auth.php';