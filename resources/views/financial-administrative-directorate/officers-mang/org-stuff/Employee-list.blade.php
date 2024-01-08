@extends('financial-administrative-directorate.officers-mang.layout.master')
@section('contents')
    @php
        session_start();
    @endphp
    <div class="app-content main-content">
        <div class="side-app main-container">

            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span
                            class="font-weight-normal text-muted ms-2">{{ __('financial/employee-financial.list-of-employees') }}</span>
                        {{ __('layout-Financial.officers-mang') }}</div>
                </div>
            </div>

            <div class="row me-2">

                <div class="card ">
                    <?php
                        if(isset($_SESSION['status'])){
                               ?>
                    <div class="alert alert-success" role="alert"> <button class="btn-close" data-bs-dismiss="alert"
                            aria-hidden="true">×</button><?php echo $_SESSION['status']; ?></div>
                    <?php 
                            
                            unset($_SESSION['status']);
                        }
                        if(isset($_SESSION['danger'])){
                            ?>
                    <div class="alert alert-danger" role="alert"> <button class="btn-close" data-bs-dismiss="alert"
                            aria-hidden="true">×</button><?php echo $_SESSION['danger']; ?></div>
                    <?php 
                               unset($_SESSION['danger']);
                        }
                    ?>
                    <div class="card-header">
                        <div>
                            <form class="form-inline" action="/officer-stuff-search" method="get">
                                @csrf
                                <div class="search-element">
                                    <input type="search" class="form-control header-search small" name="search"
                                        placeholder="{{ __('layout-Financial.search') }}..."
                                        value="{{ isset($search) ? $search : '' }}" aria-label="Search" tabindex="1">
                                </div>
                            </form>
                        </div>
                        <div class="page-rightheader ms-md-auto">
                            <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
                                <div class="btn-list">
                                    <a href="{{ route('officer-stuff.create') }}"
                                        class="btn btn-primary me-3">{{ __('depo/employees.add-employee') }} <i
                                            class="fa-solid fa-user-plus"></i></a>

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
                                        <th>{{ __('employee.last-name') }}</th>
                                        <th class=" w-10">{{ __('depo/employees.father-name') }}</th>
                                        <th>{{ __('employee.date-of-birth') }}</th>
                                        <th>{{ __('employee.appointment-date') }}</th>
                                        <th>{{ __('employee.job-title') }}</th>
                                        <th>{{ __('employee.important') }}</th>
                                        <th>{{ __('employee.picnic') }}</th>
                                        <th>{{ __('employee.sickness') }}</th>
                                        <th>{{ __('employee.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        @if ($employee->state == 'فعال')
                                            <tr>
                                                <td>{{ $employee->id }}</td>
                                                <td>
                                                    {{ $employee->name }}
                                                </td>
                                                <td>
                                                    {{ $employee->last_name }}
                                                </td>
                                                <td>

                                                    {{ $employee->father_name }}
                                                </td>
                                                <td><span>{{ $employee->birth_date }}</span></td>
                                                <td><span>{{ $employee->appointment_date }}</span></td>
                                                <td>{{ $employee->position_no }}</td>
                                                @foreach ($balances as $balance)
                                                    @if ($balance->officers_appointed_emps_id == $employee->id)
                                                        @if ($balance->balance_name == 'ضروری')
                                                            <td><a href="{{ url('balance/' . $balance->id) }}"
                                                                    class="btn btn-sm btn-blue">{{ $balance->remain_days }}</a>
                                                            </td>
                                                        @endif
                                                        @if ($balance->balance_name == 'تفریحی')
                                                            <td><a href="{{ url('balance/' . $balance->id) }}"
                                                                    class="btn btn-sm btn-primary">{{ $balance->remain_days }}</a>
                                                            </td>
                                                        @endif
                                                        @if ($balance->balance_name == 'مریضی')
                                                            <td><a href="{{ url('balance/' . $balance->id) }}"
                                                                    class="btn btn-sm btn-secondary">{{ $balance->remain_days }}</a>
                                                            </td>
                                                        @endif
                                                    @endif
                                                @endforeach
                                                <td>
                                                    <div class="d-flex d-block">

                                                        {{-- <a class="btn btn-outline-info btn-sm"
                                                            href="{{ url('appointed-stuff/' . $employee->id . '/edit') }}">
                                                            Details
                                                        </a> --}}
                                                        <form action="{{ url('balance/' . $employee->id . '/edit') }}">
                                                            <button id="bilance" type="submit"
                                                                class="btn btn-outline-success btn-sm ms-1">create
                                                                balance</button>
                                                        </form>
                                                    </div>
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
    </div><!-- end app-content-->
@endsection
