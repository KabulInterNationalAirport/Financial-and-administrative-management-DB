@extends('financial-administrative-directorate.payroll-management.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">

            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl">{{__('layout-Financial.payroll-budgets')}}</div>
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
                                    <a href="{{route('payroll-budget.create')}}" class="btn btn-primary me-3">{{__('depo/employees.add-employee')}} <i class="fa-solid fa-user-plus"></i></a>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table  table-vcenter text-center table-bordered border-bottom" id="hr-table">
                                <thead>
                                    <tr>
                                        <th class="w-5">{{__('depo/report.id')}}</th>
                                        <th>{{__('budget.budget-type')}}</th>
                                        <th>{{__('budget.budget-name')}}</th>
                                        <th>{{__('budget.amount')}}</th>
                                        <th>{{__('budget.year')}}</th>
                                        <th>{{__('budget.month')}}</th>
                                        <th>{{__('budget.date')}}</th>
                                        <th>{{__('budget.project-code-id')}}</th>
                                        {{-- <th>{{__('depo/employees.actions')}}</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($budgets as $budget)
                                    <tr>
                                        <td>{{$budget->id}}</td>
                                        <td>
                                            {{$budget->budget_type}}
                                        </td>
                                        <td>{{$budget->budget_name}}</td>
                                        <td>{{$budget->amount}}</td>
                                        <td>{{$budget->year}}</td>
                                        <td>{{$budget->month}}</td>
                                        <td>{{$budget->date}}</td>
                                        <td>{{$budget->project_codes_id}}</td>
                                        {{-- <td>
                                            <a class="btn btn-primary btn-icon btn-sm" href="/">
                                                <i class="feather feather-edit" data-bs-toggle="tooltip"
                                                    data-original-title="View/Edit"></i>
                                            </a>
                                        </td> --}}
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
