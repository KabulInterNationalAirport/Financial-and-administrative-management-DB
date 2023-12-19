@extends('financial-administrative-directorate.payroll-management.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">

            <div class="page-header d-xl-flex d-block">
                <div class="header ">
                    <div class="page-title " >
                        د تقاعدو، وفات شویو، منفکو او تبدیلو کارمندانو لیست</div>
                </div>
            </div>
            <div class="row me-2">
                <div class="card ">
                    <div class="card-header">
                        <div>
                            <form class="form-inline">
                                <div class="search-element">
                                    <input type="search" class="form-control header-search small" placeholder="پلټنه..."
                                        aria-label="Search" tabindex="1">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                                <thead class="bg-info">
                                    <tr>
                                        <th class=" w-5">نمبر</th>
                                        <th>مکمل نوم</th>
                                        <th class=" w-10">د پلار نوم</th>
                                        <th> د زوکړي نیټه</th>
                                        <th>د مقرری تاریخ</th>
                                        <th>بست</th>
                                        <th>د تحصیل درجه</th>
                                        <th>د بانک کارت</th>
                                        <th>تلیفون نمبر</th>
                                        <th>حالت</th>
                                        <th>عملیه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="me-3 d-block">
                                                    <h6 class="mb-1 fs-14">Abdul Saboor Hemat</h6>
                                                    <p class="text-muted  fs-12">عبدالصبور همت</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="me-3   d-block">
                                                    <h6 class="mb-1 fs-14">Ghulam Farooq</h6>
                                                    <p class="text-muted  fs-12">غلام فاروق</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span>2023/9/9</span></td>
                                        <td><span>2023/9/9</span></td>
                                        <td>4</td>
                                        <td>لیسانس</td>
                                        <td>4334344353</td>
                                        <td>54645654654</td>
                                        <td>
                                            <span class="badge badge-success">تقاعد</span>
                                        </td>
                                        <td>
                                            <a class="btn btn-success btn-icon btn-sm" href="/print-documents"><i class="fa-solid fa-print"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="me-3 d-block">
                                                    <h6 class="mb-1 fs-14">Abdul Saboor Hemat</h6>
                                                    <p class="text-muted  fs-12">عبدالصبور همت</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="me-3   d-block">
                                                    <h6 class="mb-1 fs-14">Ghulam Farooq</h6>
                                                    <p class="text-muted  fs-12">غلام فاروق</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span>2023/9/9</span></td>
                                        <td><span>2023/9/9</span></td>
                                        <td>4</td>
                                        <td>لیسانس</td>
                                        <td>4334344353</td>
                                        <td>54645654654</td>
                                        <td>
                                            <span class="badge badge-primary">منفک</span>
                                        </td>
                                        <td>

                                            <a class="btn btn-success btn-icon btn-sm" href="/print-documents"><i class="fa-solid fa-print"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="footer ">
                                <button class="btn btn-primary " onClick="javascript:window.print();"><i
                                        class="si si-wallet"></i> Pdf </button>
                                <button class="btn btn-secondary " onClick="javascript:window.print();"><i
                                        class="si si-paper-plane"></i>Excel</button>
                                <button class="btn btn-info " onClick="javascript:window.print();"><i
                                        class="si si-printer"></i> Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->
    </div>
    </div>
    <!-- end app-content-->
@endsection
