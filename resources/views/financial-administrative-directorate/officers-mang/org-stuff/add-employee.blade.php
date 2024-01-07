@extends('financial-administrative-directorate.layout.master')
@section('contents')
    <div class="page">
        <div class="page-main">
            <div class="app-content main-content">
                <div class="side-app main-container">
                    <!--PAGE HEADER -->
                    <div class="page-header d-xl-flex d-block">
                        <div class="page-leftheader">
                            <div class="page-title">{{__('employee.add-employee')}}</div>
                        </div>
                    </div>
                    <!--END PAGE HEADER -->
                    <!-- ROW -->
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-lg-12">
                            <div class="tab-menu-heading hremp-tabs p-0 ">
                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class="ms-4"><a href="#tab5" class="active" data-bs-toggle="tab">{{__('employee.employee-information')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                                <form action="{{route('officer-stuff.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="card-body">
                                                <div class="card-header">
                                                    <h4 class="mb-4 font-weight-bold">{{__('employee.employee-information')}}</h4>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.name')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="name" class="form-control mb-md-0 mb-5"
                                                                placeholder="{{__('employee.name')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.last-name')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="last_name" class="form-control" placeholder="{{__('employee.last-name')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2"> {{__('depo/employees.father-name')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="father_name" class="form-control mb-md-0 mb-5"
                                                                placeholder="{{__('depo/employees.father-name')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.job-title')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="position" class="form-control" placeholder="{{__('employee.job-title')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.bank-card')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="bank_card" class="form-control" placeholder="{{__('employee.id-card')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.degree')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select name="degree"
                                                                class="form-control custom-select select2"
                                                                data-placeholder="Select">
                                                                <option label="Select"></option>
                                                                <option value="undergraduate">undergraduate</option>
                                                                <option value="master">master</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.mobile')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="phone" class="form-control"
                                                                placeholder="{{__('employee.mobile')}}  ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.appointment-date')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="app_date" class="form-control "
                                                                placeholder="DD-MM-YYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.birth-date')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="birth_date" class="form-control "
                                                                placeholder="DD-MM-YYY">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-end">
                                            <button type="submit" class="btn btn-primary">{{__('depo/all-products.submit')}}</button>
                                            <button class="btn btn-danger">{{__('depo/all-products.cancel')}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->
                </div>
            </div><!-- end app-content-->
        </div>
    </div>
@endsection
