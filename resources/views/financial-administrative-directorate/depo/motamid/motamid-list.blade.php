@extends('financial-administrative-directorate.depo.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">

            <div class="page-header d-xl-flex d-block ">
                <div class="page-leftheader ">
                    <div class="page-title " dir="rtl">
                        {{__('depo/motamid.list-of-trustees')}}</div>
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
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                                <thead>
                                    <tr>
                                        <th class=" w-5">{{__('depo/all-products.id')}}</th>
                                        <th>{{__('depo/motamid.name-image-email')}}</th>
                                        <th class=" w-10">{{__('depo/motamid.last-name')}}</th>
                                        <th>{{__('depo/motamid.related-office')}}</th>
                                        <th>{{__('depo/motamid.job-title')}}</th>
                                        <th>{{__('depo/motamid.id-card')}}</th>
                                        <th>{{__('depo/motamid.degree')}}</th>
                                        <th>{{__('depo/motamid.mobile')}}</th>
                                        <th>{{__('depo/motamid.appointment-date')}}</th>
                                        <th>{{__('depo/motamid.actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-sm brround me-3"
                                                    style="background-image: url({{asset('assets/images/users/16.jpg')}})"></span>
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
                                            <a class="btn btn-primary btn-icon btn-sm" href="/motamid-items">
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
