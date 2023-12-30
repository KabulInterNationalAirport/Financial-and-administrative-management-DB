@extends('financial-administrative-directorate.depo.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">

            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2">{{__('financial/employee-financial.list-of-employees')}}</span>
                    {{__('layout-Financial.financial-and-administrative-management')}}</div>
                </div>
            </div>

            <div class="row me-2">

                <div class="card ">
                    <div class="card-header">
                        <div>
                            <form class="form-inline">
                                <div class="search-element">
                                    <input type="search" class="form-control header-search small" placeholder="{{__('layout-Financial.search')}}..."
                                        aria-label="Search" tabindex="1">
                                </div>
                            </form>
                        </div>
                        <div class="page-rightheader ms-md-auto">
                            <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
                                <div class="btn-list">
                                    <a href="/add-employee" class="btn btn-primary me-3">{{__('depo/employees.add-employee')}} <i class="fa-solid fa-user-plus"></i></a>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                                <thead>
                                    <tr>
                                        <th class=" w-5">{{__('depo/report.id')}}</th>
                                        <th>{{__('depo/motamid.name-image-email')}}</th>
                                        <th class=" w-10">{{__('financial/employee-financial.last-name')}}</th>
                                        <th>{{__('financial/employee-financial.related-office')}}</th>
                                        <th>{{__('financial/employee-financial.job-title')}}</th>
                                        <th>{{__('financial/employee-financial.id-card')}}</th>
                                        <th>{{__('financial/employee-financial.degree')}}</th>
                                        <th>{{__('financial/employee-financial.mobile')}}</th>
                                        <th>{{__('financial/employee-financial.appointment-date')}}</th>
                                        <th>{{__('depo/employees.actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-sm brround me-3"
                                                    style="background-image: url(assets/images/users/16.jpg)"></span>
                                                <div class="me-3 mt-0 mt-sm-1 d-block">
                                                    <h6 class="mb-1 fs-14">Abdul Saboor</h6>
                                                    <p class="text-muted mb-0 fs-12">saboorhemat@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Hemat</td>
                                        <td>System Development</td>
                                        <td>manager</td>
                                        <td>433434</td>
                                        <td>lisans</td>
                                        <td>161600</td>
                                        <td><span>2023/9/9</span></td>
                                        <td>
                                            <a class="btn btn-primary btn-icon btn-sm" href="/view-employee">
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
