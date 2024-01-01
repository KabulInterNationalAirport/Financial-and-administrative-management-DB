@extends('financial-administrative-directorate.commodity-accounting-management.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl">
                        {{ __('depo/employees.list-of-registered-employees') }}</div>
                </div>
            </div>
            <div class="row me-2">
                <div class="card ">
                    <div class="card-header">
                        <div>
                            <form class="form-inline">
                                <div class="search-element">
                                    <input type="search" class="form-control header-search small"
                                        placeholder="{{ __('layout-Financial.search') }}..." aria-label="Search"
                                        tabindex="1">
                                </div>
                            </form>
                        </div>
                        <div class="page-rightheader ms-md-auto">
                            <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
                                <div class="btn-list">
                                    <a href="{{route('commodity-org-stuff.create')}}"
                                        class="btn btn-primary me-3">{{ __('depo/employees.add-employee') }}<i
                                            class="fa-solid fa-user-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table  table-vcenter text-center table-bordered border-bottom" id="hr-table">
                                <thead>
                                    <tr>
                                        <th class=" w-5">{{ __('depo/delivered-products.id') }}</th>
                                        <th>{{ __('depo/employees.name') }}</th>
                                        <th class=" w-10">{{ __('depo/employees.father-name') }}</th>
                                        <th>{{ __('depo/employees.related-office') }}</th>
                                        <th>{{ __('depo/employees.job-title') }}</th>
                                        <th>{{ __('depo/employees.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{$employee->id}}</td>
                                        <td>
                                            <div>
                                                    <h6 class="mb-1 fs-14">{{$employee->name}}</h6> 
                                            </div>
                                        </td>
                                        <td>{{$employee->father_name}}</td>
                                        <td>{{$employee->related_office}}</td>
                                        <td>{{$employee->job_title}}</td>
                                        <td>
                                            <a class="btn btn-outline-primary  btn-sm" href="/acc-emp-car-reg">
                                                {{ __('depo/employees.reg-car') }}
                                            </a>
                                            <a class="btn btn-outline-success  btn-sm" href="{{url('delivered-product/'.$employee->id)}}">
                                                {{ __('depo/employees.reg-product') }}
                                            </a>
                                            <a class="btn btn-outline-info  btn-sm" href="/acc-update-emp">
                                                {{ __('depo/employees.edit') }}
                                            </a>
                                            <a class="btn btn-outline-secondary btn-icon btn-sm"
                                                href="/acc-emp-items">{{ __('depo/employees.view-details') }}</a>
                                        </td>
                                    </tr>
                                        
                                    @endforeach
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
