@extends('financial-administrative-directorate.officers-mang.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">

            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2">{{__('financial/employee-financial.list-of-employees')}}</span>
                    {{__('layout-Financial.officers-mang')}}</div>
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
                                    @foreach ($employees as $employee)
                                    @if ($employee->related_office == 'مدیریت مامورین')
                                        
                                    <tr>
                                        <td>{{$employee->id}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-sm brround me-3"
                                                    style="background-image: url({{asset('storage/employee/def.png')}})"></span>
                                                <div class="me-3 mt-0 mt-sm-1 d-block">
                                                    <h6 class="mb-1 fs-14">{{$employee->name}}</h6>
                                                    <p class="text-muted mb-0 fs-12">{{$employee->email}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$employee->last_name}}</td>
                                        <td>{{$employee->related_office}}</td>
                                        <td>{{$employee->job_title}}</td>
                                        <td>{{$employee->id_card}}</td>
                                        <td>{{$employee->degree}}</td>
                                        <td>{{$employee->phone}}</td>
                                        <td><span>{{$employee->appointment_date}}</span></td>
                                        <td>
                                            <a class="btn btn-primary btn-icon btn-sm" href="{{url('officer-employee/'.$employee->id)}}">
                                                <i class="feather feather-edit" ></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endif
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
