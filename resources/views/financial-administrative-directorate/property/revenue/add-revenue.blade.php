@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- ROW -->
            <!-- PAGE HEADER -->
            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">{{__('financial/commercial-areas.adding-new-commercial-area')}}</div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <div class="main-proifle mt-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab5">
                        <div class="card-body">
                            <form action="">
                                <div class="card-header">
                                    <h4 class="mb-4 font-weight-bold">{{__('financial/contract.contract-details')}}</h4>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label ">{{__('financial/commercial-areas.contract-person')}}</label>
                                                <input type="text" class="form-control mb-md-0 mb-5"
                                                    placeholder="د قرار داد شهرت">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">{{__('financial/commercial-areas.monthly-rent')}}</label>
                                            <input type="number" class="form-control" placeholder="میاشتنۍ کرایه">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">{{__('financial/commercial-areas.activity-form')}}</label>
                                            <input type="text" class="form-control" placeholder="د فعالیت ډول">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">{{__('financial/contract.location')}}</label>
                                            <input type="text" class="form-control" placeholder="موقیعت">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label ">{{__('financial/contract.area-mm')}}</label>
                                            <input type="text" class="form-control" placeholder="مساحت">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">{{__('financial/contract.start-date')}}</label>
                                            <input type="text" class="form-control fc-datepicker"
                                                placeholder="DD-MM-YYY">
                                        </div>
                                        <div class="col-md-6">
                                                    <label class="form-label ">{{__('financial/contract.end-date')}}</label>
                                                        <input type="text" class="form-control fc-datepicker"
                                                            placeholder="DD-MM-YYY">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label ">{{__('financial/contract.contract-details')}}</label>
                                                        <textarea rows="3" class="form-control" placeholder="اضافي معلومات"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-controls-stacked d-md-flex">
                                                <label class="form-label me-5 ms-5">{{__('financial/contract.state')}}:</label>
                                                <label class="custom-control custom-radio success me-4">
                                                    <input type="radio" class="custom-control-input" name="example-radios1" value="option1">
                                                    <span class="custom-control-label">{{__('depo/report.complete')}}</span>
                                                </label>
                                                <label class="custom-control custom-radio success me-4">
                                                    <input type="radio" class="custom-control-input" name="example-radios1" value="option2">
                                                    <span class="custom-control-label">{{__('financial/contract.onprogress')}}</span>
                                                </label>
                                                <label class="custom-control custom-radio success">
                                                    <input type="radio" class="custom-control-input" name="example-radios1" value="option3">
                                                    <span class="custom-control-label">{{__('depo/report.new')}}</span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label">{{__('financial/contract.contract-images')}}:</label>
                                                        <label class="form-label"></label>
                                                            <input class="form-control" multiple type="file">
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="card-footer text-start">
                                                <a href="" class="btn btn-primary">{{__('depo/all-products.submit')}}</a>
                                                <a href="" class="btn btn-danger">{{__('depo/all-products.cancel')}}</a>
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
