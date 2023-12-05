@extends('layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->

            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2">ورځنی ریپورټ
                            د</span>
                        مالي او اداري آمریت</div>
                </div>
            </div>
            <!-- ROW -->
            <div class="row">

                <div class="card ms-2 text-center">
                    <div class="page-header d-xl-flex d-block">
                        <div class="">
                            <form class="form-inline">
                                <div class="search-element">
                                    <input type="search" class="form-control header-search small" placeholder="پلټنه..."
                                        aria-label="Search" tabindex="1">
                                </div>
                            </form>
                        </div><!-- SEARCH -->
                        <div class="page-rightheader ms-md-auto ">
                            <button class="btn btn-primary mt-4" onClick="javascript:window.print();"><i
                                    class="si si-wallet"></i> Pdf </button>
                            <button class="btn btn-secondary mt-4" onClick="javascript:window.print();"><i
                                    class="si si-paper-plane"></i>Excel</button>
                            <button class="btn btn-info mt-4" onClick="javascript:window.print();"><i
                                    class="si si-printer"></i> Print</button>
                        </div>
                    </div>
                    <h1>د ډیپو مدیریت</h1>
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table  table-vcenter text-nowrap table-bordered border-bottom"
                                id="emp-attendance">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0 text-center">نمبر</th>
                                        <th class="border-bottom-2">کار</th>
                                        <th class="border-bottom-0">کامند نوم</th>
                                        <th class="border-bottom-0">جنس</th>
                                        <th class="border-bottom-0">قیمت</th>
                                        <th class="border-bottom-0">د پیشنهاد اداره</th>
                                        <th class="border-bottom-0">د پیشنهاد نمبر</th>
                                        <th class="border-bottom-0">اخیستونکی</th>
                                        <th class="border-bottom-0">حالت</th>
                                        <th class="border-bottom-0">عملیې</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>جنس توزیع</td>
                                        <td>علی</td>
                                        <td>کمپیوټر</td>
                                        <td class="font-weight-semibold">۱۰۰۰۰</td>
                                        <td>آی ټي</td>
                                        <td>۱۲</td>
                                        <td>عبدالصبور همت</td>
                                        <td>
                                            <span class="badge badge-primary">New</span>
                                        </td>
                                        <td class="text-start d-flex">
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                                data-bs-target="#leaveapplictionmodal">
                                                <i class="feather feather-eye  text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="view"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Delete">
                                                <i class="feather feather-trash-2 text-danger"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                                data-bs-target="#reportmodal">
                                                <i class="feather feather-info text-secondary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Report"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>جنس توزیع</td>
                                        <td>علی</td>
                                        <td>کمپیوټر</td>
                                        <td class="font-weight-semibold">۱۰۰۰۰</td>
                                        <td>آی ټي</td>
                                        <td>۱۲</td>
                                        <td>عبدالصبور همت</td>
                                        <td>
                                            <span class="badge badge-primary">New</span>
                                        </td>
                                        <td class="text-start d-flex">
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                                data-bs-target="#leaveapplictionmodal">
                                                <i class="feather feather-eye  text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="view"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Delete">
                                                <i class="feather feather-trash-2 text-danger"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                                data-bs-target="#reportmodal">
                                                <i class="feather feather-info text-secondary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Report"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END ROW -->
                    </div>
                    <h1>د ترمینلونو مدیریت</h1>
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table  table-vcenter text-nowrap table-bordered border-bottom"
                                id="emp-attendance">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0 text-center">نمبر</th>
                                        <th class="border-bottom-2">کار</th>
                                        <th class="border-bottom-0">کامند نوم</th>
                                        <th class="border-bottom-0">حالت</th>
                                        <th class="border-bottom-0">عملیې</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>یو شی</td>
                                        <td>همت</td>
                                        <td>
                                            <span class="badge badge-primary">New</span>
                                        </td>
                                        <td class="text-start d-flex">
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                                data-bs-target="#leaveapplictionmodal">
                                                <i class="feather feather-eye  text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="view"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Delete">
                                                <i class="feather feather-trash-2 text-danger"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                                data-bs-target="#reportmodal">
                                                <i class="feather feather-info text-secondary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Report"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>یو شی</td>
                                        <td>همت</td>
                                        <td>
                                            <span class="badge badge-success">Approved</span>
                                        </td>
                                        <td class="text-start d-flex">
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                                data-bs-target="#leaveapplictionmodal">
                                                <i class="feather feather-eye  text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="view"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Delete">
                                                <i class="feather feather-trash-2 text-danger"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                                data-bs-target="#reportmodal">
                                                <i class="feather feather-info text-secondary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Report"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END ROW -->
                    </div>
                    <h1> مالي او اداري مدیریت</h1>
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table  table-vcenter text-nowrap table-bordered border-bottom"
                                id="emp-attendance">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0 text-center">نمبر</th>
                                        <th class="border-bottom-2">کار</th>
                                        <th class="border-bottom-0">کامند نوم</th>
                                        <th class="border-bottom-0">حالت</th>
                                        <th class="border-bottom-0">عملیې</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>یو شی</td>
                                        <td>همت</td>
                                        <td>
                                            <span class="badge badge-primary">New</span>
                                        </td>
                                        <td class="text-start d-flex">
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                                data-bs-target="#leaveapplictionmodal">
                                                <i class="feather feather-eye  text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="view"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Delete">
                                                <i class="feather feather-trash-2 text-danger"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                                data-bs-target="#reportmodal">
                                                <i class="feather feather-info text-secondary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Report"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>یو شی</td>
                                        <td>همت</td>
                                        <td>
                                            <span class="badge badge-success">Approved</span>
                                        </td>
                                        <td class="text-start d-flex">
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                                data-bs-target="#leaveapplictionmodal">
                                                <i class="feather feather-eye  text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="view"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Delete">
                                                <i class="feather feather-trash-2 text-danger"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal"
                                                data-bs-target="#reportmodal">
                                                <i class="feather feather-info text-secondary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Report"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END ROW -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
