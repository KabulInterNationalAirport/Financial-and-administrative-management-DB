@extends('depo.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">

            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2">د ډیپو سره د ثبتو  
                            </span>
                         کارمندانو لیست</div>
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
                        <div class="page-rightheader ms-md-auto">
                            <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
                                <div class="btn-list">
                                    <a href="/depo-emp-add" class="btn btn-primary me-3">د کارمند اضافه کول <i class="fa-solid fa-user-plus"></i></a>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0 w-5">نمبر</th>
                                        <th class="border-bottom-0">نوم او ایمیل</th>
                                        <th class="border-bottom-0 w-10">تخلص</th>
                                        <th class="border-bottom-0">مربوطه آمریت</th>
                                        <th class="border-bottom-0">وظیفه</th>
                                        <th class="border-bottom-0">آی ډي کارت</th>
                                        <th class="border-bottom-0">تلیفون نمبر</th>
                                        <th class="border-bottom-0">عملیې</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <div class="d-flex">
                                                
                                                <div class="me-3 mt-sm-1 d-block">
                                                    <h6 class="mb-1 fs-14">Abdul Saboor</h6>
                                                    <p class="text-muted mb-2 fs-12">saboorhemat@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Hemat</td>
                                        <td>System Development</td>
                                        <td>manager</td>
                                        <td>433434</td>
                                        <td>161600</td>
                                        <td>
                                            <a class="btn btn-primary btn-icon btn-sm" href="/depo-emp-items">
                                                <i class="feather feather-edit" data-bs-toggle="tooltip"
                                                    data-original-title="View/Edit"></i>
                                            </a>
                                            <a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip"
                                                data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->


    </div>
    </div><!-- end app-content-->
@endsection
