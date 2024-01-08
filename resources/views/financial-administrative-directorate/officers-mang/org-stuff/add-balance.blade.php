@extends('financial-administrative-directorate.officers-mang.layout.master')
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
                                        <li class="ms-4"><a href="#tab5" class="active" data-bs-toggle="tab">{{__('employee.balance')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                                <form action="{{route('balance.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="card-body">
                                                <div class="card-header">
                                                    <h4 class="mb-4 font-weight-bold">{{__('employee.balance')}}</h4>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.sickness')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="number" name="sickness" class="form-control mb-md-0 mb-5"
                                                                placeholder="{{__('employee.sickness')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.important')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="number" name="important" class="form-control" placeholder="{{__('employee.important')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2"> {{__('employee.picnic')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="number" name="picnic" class="form-control mb-md-0 mb-5"
                                                                placeholder="{{__('employee.picnic')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">{{__('employee.name')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select class="form-control custom-select select2" name="name"
                                                                data-placeholder="Select" id="">
                                                                <option value="{{ $emp->id }}">{{ $emp->name }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>
                                        </div>
                                        <div class="card-footer text-end">
                                            <button type="submit" class="btn btn-primary">{{__('depo/all-products.submit')}}</button>
                                            <a href="{{ url()->previous() }}" class="btn btn-danger">{{__('depo/all-products.cancel')}}</a>
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
