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

                <div class="card ms-2">
                    <div class="page-header d-xl-flex d-block">
                        <div class="">
                            <h2 class="">د ورزني کارونو لیست</h2>
                        </div>
                        <div class="">
                            <form class="form-inline">
                                <div class="search-element">
                                    <input type="search" class="form-control header-search small" placeholder="پلټنه..."
                                        aria-label="Search" tabindex="1">
                                    {{-- <i class="feather feather-search"></i> --}}
                                </div>
                            </form>
                        </div><!-- SEARCH -->
                    </div>


                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table  table-vcenter text-nowrap table-bordered border-bottom"
                                id="emp-attendance">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0 text-center">نمبر</th>
                                        <th class="border-bottom-0">Leave Type</th>
                                        <th class="border-bottom-0">From</th>
                                        <th class="border-bottom-0">TO</th>
                                        <th class="border-bottom-0">Days</th>
                                        <th class="border-bottom-0">Reason</th>
                                        <th class="border-bottom-0">Applied On</th>
                                        <th class="border-bottom-0">Status</th>
                                        <th class="border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Casual Leave</td>
                                        <td>16-01-2021</td>
                                        <td>16-01-2021</td>
                                        <td class="font-weight-semibold">1 Day</td>
                                        <td>Personal</td>
                                        <td>05-01-2021</td>
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
                                        <td>Sick Leave</td>
                                        <td>14-01-2021</td>
                                        <td>15-01-2021</td>
                                        <td class="font-weight-semibold">2 Days</td>
                                        <td>Going to Hospital</td>
                                        <td>13-01-2021</td>
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
