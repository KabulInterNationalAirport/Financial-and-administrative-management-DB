@extends('financial-administrative-directorate.depo.layout.master')
@section('contents')
    <div class="page">
        <div class="page-main">
            <div class="app-content main-content">
                <div class="side-app main-container">
                    <!-- ROW -->
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-lg-12">
                            <div class="tab-menu-heading hremp-tabs p-0 ">
                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class="ms-4"><a href="#tab5" class="active" data-bs-toggle="tab">
                                            {{__('depo/employees.employee-information')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="card-body">
                                            <form action="{{url('commodity-org-stuff/'.$employee->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <div class="card-header">
                                                    <h4 class="mb-4 font-weight-bold">{{__('depo/employees.employee-information')}}</h4>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('depo/employees.name')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="name" value="{{$employee->name}}" class="form-control mb-md-0 mb-5"
                                                                placeholder="{{__('depo/employees.name')}}">
                                                            <span class="text-muted"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('depo/employees.father-name')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="father_name" value="{{$employee->father_name}}" class="form-control" placeholder="{{__('depo/employees.father-name')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('depo/employees.job-title')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="job_title" value="{{$employee->job_title}}" class="form-control" placeholder="{{__('depo/employees.job-title')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('depo/employees.related-office')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="related_office" value="{{$employee->related_office}}" class="form-control"
                                                                placeholder="{{__('depo/employees.related-office')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-end">
                                                    <button type="submit" class="btn btn-primary">{{__('depo/all-products.submit')}}</button>
                                                    <button type="" class="btn btn-danger">{{__('depo/all-products.cancel')}}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->
                </div>
            </div><!-- end app-content-->
        </div>
    </div>
@endsection
