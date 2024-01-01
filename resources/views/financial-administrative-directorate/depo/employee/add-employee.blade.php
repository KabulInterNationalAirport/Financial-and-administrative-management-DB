@extends('financial-administrative-directorate.depo.layout.master')
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
                                <form action="{{route('depo-employee.store')}}" method="POST" enctype="multipart/form-data">
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
                                                            <input name="name" type="text" class="form-control mb-md-0 mb-5"
                                                                placeholder="{{__('employee.name')}}">
                                                            <span class="text-muted"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.last-name')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input name="last_name" type="text" class="form-control" placeholder="{{__('employee.last-name')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2"> {{__('employee.related-office')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input name="related_office" type="text" class="form-control" placeholder=" {{__('employee.related-office')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.job-title')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input name="job" type="text" class="form-control" placeholder="{{__('employee.job-title')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.id-card')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input name="id_card" type="text" class="form-control" placeholder="{{__('employee.id-card')}}">
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
                                                            <input name="mobile" type="text" class="form-control"
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
                                                            <input name="date" type="date" class="form-control fc-datepicker"
                                                                placeholder="DD-MM-YYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label">{{__('employee.gender')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="custom-controls-stacked d-md-flex">
                                                                <label class="custom-control custom-radio me-4">
                                                                    <input type="radio" class="custom-control-input"
                                                                        name="gender" value="{{__('employee.male')}}">
                                                                    <span class="custom-control-label">{{__('employee.male')}}</span>
                                                                </label>
                                                                <label class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input"
                                                                        name="gender" value="{{__('employee.famale')}}">
                                                                    <span class="custom-control-label">{{__('employee.famale')}}</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.material-state')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select name="mـstate"
                                                                class="form-control custom-select select2"
                                                                data-placeholder="Select">
                                                                <option value="{{__('employee.single')}}">{{__('employee.single')}}</option>
                                                                <option value="{{__('employee.married')}}">{{__('employee.married')}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.email')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="email" name="email" class="form-control" placeholder="{{__('employee.email')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.address')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input name="address" type="text" class="form-control" placeholder="آدرس">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-label mb-0 mt-2">{{__('employee.profile-pic')}}</div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="form-label"></label>
                                                                <input name="profile_image" class="form-control" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-label mb-0 mt-2">{{__('employee.doc-pics')}}</div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="form-label"></label>
                                                                <input class="form-control" name="doc_images" type="file" multiple>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-end">
                                            <Button type="submit" class="btn btn-primary">{{__('depo/all-products.submit')}}</Button>
                                            <Button type=""  class="btn btn-danger">{{__('depo/all-products.cancel')}}</Button>
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
