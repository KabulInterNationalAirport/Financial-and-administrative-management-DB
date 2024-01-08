@extends('financial-administrative-directorate.payroll-management.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">د کارمند د تغیراتو پاڼه</div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <div class="main-proifle mt-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab5">
                        <div class="card-body">
                            <form action="{{url('appointed-stuff/'.$employee->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="card-header">
                                    <h4 class="mb-4 font-weight-bold">د کارمند معلومات</h4>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">د کارمند حالت:</label>
                                            <select name="state" class="form-control custom-select select2">
                                                <option value="فعال">فعال</option>
                                                <option value="منفک">منفک</option>
                                                <option value="وفات">وفات</option>
                                                <option value="تبدیل">تبدیل</option>
                                                <option value="تقاعد">تقاعد</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label ">{{ __('employee.name') }}</label>
                                                <input type="text" value="{{$employee->ps_name}}" name="ps_name" class="form-control mb-md-0 mb-5"
                                                    placeholder="{{ __('employee.name') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">Name</label>
                                            <input type="text" value="{{$employee->en_name}}" name="en_name" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">{{ __('employee.last-name') }}</label>
                                            <input type="text" value="{{$employee->ps_last_name}}" name="ps_last_name" class="form-control"
                                                placeholder="{{ __('employee.last-name') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" value="{{$employee->en_last_name}}" name="en_last_name" class="form-control"
                                                placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">{{ __('depo/employees.father-name') }}</label>
                                            <input type="text" value="{{$employee->ps_father_name}}" name="ps_father_name" class="form-control"
                                                placeholder="{{ __('depo/employees.father-name') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">Father Name</label>
                                            <input type="text" value="{{$employee->en_father_name}}" name="en_father_name" class="form-control"
                                                placeholder="Father Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">{{ __('employee.date-of-birth') }}</label>
                                            <input type="text" value="{{$employee->birth_date}}" name="birth_date" class="form-control"
                                                placeholder="DD-MM-YYY">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">{{ __('employee.appointment-date') }}</label>
                                            <input type="text" value="{{$employee->appointment_date}}" name="appointment_date" class="form-control"
                                                placeholder="DD-MM-YYY">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">{{ __('employee.job-title') }}</label>
                                            <select name="position" class="form-control custom-select select2"
                                                data-placeholder="{{ __('employee.job-title') }}">
                                                <option value="{{$employee->position_no}}">{{$employee->position_no}}</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">{{ __('employee.degree') }}:</label>
                                            <select name="degree" class="form-control custom-select select2"
                                                data-placeholder="{{ __('employee.degree') }}">
                                                <option value="{{$employee->degree}}">{{$employee->degree}}</option>
                                                <option value="لیسانس">لیسانس</option>
                                                <option value="ماسټر">ماسټر</option>
                                                <option value="دوکتور">دوکتور</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label ">{{ __('employee.bank-card') }}</label>
                                                <input type="text" value="{{$employee->bank_card}}" name="bank_card" class="form-control"
                                                    placeholder="{{ __('employee.bank-card') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label ">{{ __('employee.mobile') }}</label>
                                                <input type="text" value="{{$employee->phone}}" name="phone" class="form-control"
                                                    placeholder="{{ __('employee.mobile') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label">{{ __('depo/report.related-images') }}:</label>
                                                <label class="form-label"></label>
                                                <input class="form-control" name="image" value="{{$employee->employee_doc}}" multiple type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-start">
                                        <button type="submit"
                                            class="btn btn-primary">{{ __('depo/all-products.submit') }}</button>
                                        <button type=""
                                            class="btn btn-danger">{{ __('depo/all-products.cancel') }}</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END ROW -->
        </div>
    </div>
@endsection
