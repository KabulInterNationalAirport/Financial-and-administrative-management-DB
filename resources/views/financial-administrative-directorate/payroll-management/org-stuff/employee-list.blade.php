@extends('financial-administrative-directorate.payroll-management.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">

            <div class="page-header d-xl-flex d-block">
                <div class=" ">
                    <div class="page-title ">
                        {{ __('employee.appointed-employees') }}</div>
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
                                <div class="form-group ms-1">
                                    <select name="" class="form-control custom-select select2"
                                        data-placeholder="کلنی تقرر">
                                        <option label="کلنی تقرر"></option>
                                        <option value="1">تیره میاشت</option>
                                        <option value="2">تیر کال</option>
                                        <option value="3">سږ کال</option>
                                    </select>
                                </div>
                                <Button class="btn btn-light small ms-1">{{ __('layout-Financial.search') }}</Button>
                            </form>
                        </div>
                        <div class="page-rightheader ms-md-auto">
                            <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
                                <div class="btn-list">
                                    <a href="{{ route('appointed-stuff.create') }}"
                                        class="btn btn-primary me-3">{{ __('employee.add-employee') }}<i
                                            class="fa-solid fa-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table  table-vcenter text-center table-bordered border-bottom" id="hr-table">
                                <thead class="bg-info">
                                    <tr>
                                        <th class=" w-5">{{ __('depo/all-products.id') }}</th>
                                        <th>{{ __('employee.name') }}</th>
                                        <th class=" w-10">{{ __('depo/employees.father-name') }}</th>
                                        <th>{{ __('employee.date-of-birth') }}</th>
                                        <th>{{ __('employee.appointment-date') }}</th>
                                        <th>{{ __('employee.job-title') }}</th>
                                        <th>{{ __('employee.degree') }}</th>
                                        <th>{{ __('employee.bank-card') }}</th>
                                        <th>{{ __('employee.mobile') }}</th>
                                        <th>{{ __('employee.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        @if ($employee->state == 'فعال')
                                            <tr>
                                                <td>{{ $employee->id }}</td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-1 fs-14">
                                                            {{ $employee->en_name }}{{ $employee->en_last_name }}</h6>
                                                        <p class="text-muted  fs-12">
                                                            {{ $employee->ps_last_name }}{{ $employee->ps_name }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class=" ">
                                                        <h6 class="mb-1 fs-14">{{ $employee->en_father_name }}</h6>
                                                        <p class="text-muted  fs-12">{{ $employee->ps_father_name }}</p>
                                                    </div>
                                                </td>
                                                <td><span>{{ $employee->birth_date }}</span></td>
                                                <td><span>{{ $employee->appointment_date }}</span></td>
                                                <td>{{ $employee->position_no }}</td>
                                                <td>{{ $employee->degree }}</td>
                                                <td>{{ $employee->bank_card }}</td>
                                                <td>{{ $employee->phone }}</td>
                                                <td>
                                                    <a class="btn btn-primary btn-icon btn-sm" href="{{url('appointed-stuff/'.$employee->id.'/edit')}}">
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </a>
                                                    <a class="btn btn-success btn-icon btn-sm" href="{{url('appointed-stuff/'.$employee->id)}}"><i
                                                            class="fa-solid fa-print"></i></a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="footer ">
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
