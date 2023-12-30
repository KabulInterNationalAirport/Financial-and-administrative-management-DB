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
                                                {{ __('depo/car.update-car') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="name"
                                                                class="col-form-label">{{ __('depo/car.name') }}:</label>
                                                            <input type="text" class="form-control" id="name">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="model"
                                                                class="col-form-label">{{ __('depo/car.model') }}:</label>
                                                            <input type="text" class="form-control" id="model">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="engine-no"
                                                                class="col-form-label">{{ __('depo/car.engine-no') }}:</label>
                                                            <input type="number" class="form-control" id="engine-no">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="color"
                                                                class="col-form-label">{{ __('depo/car.color') }}:</label>
                                                            <input type="text" class="form-control" id="color">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="no-palat"
                                                                class="col-form-label">{{ __('depo/car.no-palat') }}:</label>
                                                            <input type="number" class="form-control" id="no-palat">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="quantity"
                                                                class="col-form-label">{{ __('depo/new-arrivals.quantity') }}:</label>
                                                            <input type="number" class="form-control" id="quantity">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="unit"
                                                                class="col-form-label">{{ __('depo/car.unit') }}:</label>
                                                            <input type="number" class="form-control" id="unit">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="price"
                                                                class="col-form-label">{{ __('depo/car.price') }}:</label>
                                                            <input type="number" class="form-control" id="price">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div  class="col-md-6">
                                                            <label for="trustee"
                                                                class="col-form-label">{{ __('depo/car.trustee') }}:</label>
                                                            <input type="text" class="form-control" id="trustee">
                                                        </div>
                                                        <div  class="col-md-6">
                                                            <label for="date"
                                                                class="col-form-label">{{ __('depo/car.date') }}:</label>
                                                            <input type="date" class="form-control" id="date" placeholder="YYYY-MM-DD">
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">{{ __('depo/all-products.cancel') }}
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-primary">{{ __('depo/all-products.submit') }}</button>
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
