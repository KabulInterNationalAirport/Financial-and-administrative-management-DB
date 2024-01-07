@extends('financial-administrative-directorate.payroll-management.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">د نوي کارمند اضافه کول</div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <div class="main-proifle mt-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab5">
                        <div class="card-body">
                            <form action="{{route('appointed-stuff.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header">
                                    <h4 class="mb-4 font-weight-bold">{{__('employee.employee-information')}}</h4>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label ">{{__('employee.name')}}</label>
                                                <input type="text" name="ps_name" class="form-control mb-md-0 mb-5" placeholder="{{__('employee.name')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">Name</label>
                                            <input type="text" name="en_name" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">{{__('employee.last-name')}}</label>
                                            <input type="text" name="ps_last_name" class="form-control" placeholder="{{__('employee.last-name')}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" name="en_last_name" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">{{__('depo/employees.father-name')}}</label>
                                            <input type="text" name="ps_father_name" class="form-control" placeholder="{{__('depo/employees.father-name')}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">Father Name</label>
                                            <input type="text" name="en_father_name" class="form-control" placeholder="Father Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">{{__('employee.date-of-birth')}}</label>
                                            <input type="text" name="birth_date" class="form-control"
                                                placeholder="DD-MM-YYY">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">{{__('employee.appointment-date')}}</label>
                                            <input type="text" name="appointment_date" class="form-control"
                                                placeholder="DD-MM-YYY">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">{{__('employee.job-title')}}</label>
                                            <select name="position" class="form-control custom-select select2"
                                            data-placeholder="{{__('employee.job-title')}}">
                                            <option label="{{__('employee.job-title')}}"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">{{__('employee.degree')}}:</label>
                                            <select name="degree" class="form-control custom-select select2"
                                                data-placeholder="{{__('employee.degree')}}">
                                                <option label="{{__('employee.degree')}}"></option>
                                                <option value="1">لیسانس</option>
                                                <option value="2">ماسټر</option>
                                                <option value="3">دوکتور</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label ">{{__('employee.bank-card')}}</label>
                                                <input type="text" name="bank_card" class="form-control" placeholder="{{__('employee.bank-card')}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label ">{{__('employee.mobile')}}</label>
                                                <input type="text" name="phone" class="form-control" placeholder="{{__('employee.mobile')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label">{{__('depo/report.related-images')}}:</label>
                                                <label class="form-label"></label>
                                                <input class="form-control" name="image" multiple type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-start">
                                        <button type="submit" class="btn btn-primary">{{__('depo/all-products.submit')}}</button>
                                        <button type="" class="btn btn-danger">{{__('depo/all-products.cancel')}}</button>
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
