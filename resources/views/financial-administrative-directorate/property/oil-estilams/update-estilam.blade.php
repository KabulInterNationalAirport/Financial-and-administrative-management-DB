@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- ROW -->
            <!-- PAGE HEADER -->
            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">{{ __('financial/estilam.update-estilam') }}</div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <div class="main-proifle mt-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab5">
                        <div class="card-body">
                            <form action="">
                                <div class="card-header">
                                    <h4 class="mb-4 font-weight-bold">{{ __('financial/estilam.estilam-info') }}</h4>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">{{ __('financial/estilam.company') }}</label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('financial/estilam.company') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">{{ __('financial/estilam.date') }}</label>
                                            <input type="text" class="form-control fc-datepicker"
                                                placeholder="DD-MM-YYY">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label ">{{ __('financial/estilam.no-of-cars') }}</label>
                                                <input type="number" class="form-control mb-md-0 mb-5"
                                                    placeholder="{{ __('financial/estilam.no-of-cars') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">{{ __('financial/estilam.follow-person') }}</label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('financial/estilam.follow-person') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label ">{{ __('financial/estilam.oil-valume') }}</label>
                                            <input type="number" class="form-control"
                                                placeholder="{{ __('financial/estilam.oil-valume') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label ">{{ __('depo/all-products.details') }}</label>
                                            <textarea rows="3" class="form-control" placeholder="">{{ __('depo/all-products.details') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">{{ __('financial/estilam.estilam-images') }}:</label>
                                            <label class="form-label"></label>
                                            <input class="form-control" multiple type="file">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-start">
                                    <a href="" class="btn btn-primary">{{ __('depo/all-products.submit') }}</a>
                                    <a href="" class="btn btn-danger">{{ __('depo/all-products.cancel') }}</a>
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
