@extends('financial-administrative-directorate.commodity-accounting-management.layout.master')
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
                                                {{ __('depo/employees.update-product') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        {{-- tab for reg new product to a person --}}
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="cagegory-name"
                                                                class="col-form-label">{{ __('depo/delivered-products.category') }}:</label>
                                                            <input type="text" class="form-control" id="cagegory-name">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="item-name"
                                                                class="col-form-label">{{ __('depo/delivered-products.name') }}:</label>
                                                            <input type="text" class="form-control" id="item-name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="quantity"
                                                                class="col-form-label">{{ __('depo/delivered-products.quantity') }}:</label>
                                                            <input type="number" class="form-control" id="quantity">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="unit"
                                                                class="col-form-label">{{ __('depo/delivered-products.unit') }}:</label>
                                                            <input type="text" class="form-control" id="unit">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="price"
                                                                class="col-form-label">{{ __('depo/delivered-products.price') }}:</label>
                                                            <input type="number" class="form-control" id="price">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="Trustee-name"
                                                                class="col-form-label">{{ __('depo/new-arrivals.total-price') }}:</label>
                                                            <input type="text" class="form-control" id="Trustee-name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="based-on"
                                                                class="col-form-label">{{ __('depo/delivered-products.based-on') }}:</label>
                                                            <input type="number" class="form-control" id="based-on">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="number"
                                                                class="col-form-label">{{ __('depo/delivered-products.number') }}:</label>
                                                            <input type="number" class="form-control" id="number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div  class="col-md-6">
                                                            <label for="administration"
                                                                class="col-form-label">{{ __('depo/delivered-products.offer-office') }}:</label>
                                                            <input type="text" class="form-control" id="administration">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="order-number"
                                                                class="col-form-label">{{ __('depo/delivered-products.offer-date') }}:</label>
                                                            <input type="number" class="form-control" id="order-number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">                                                            
                                                            <label for="date"
                                                                class="col-form-label">{{ __('depo/delivered-products.delivered-data') }}:</label>
                                                            <input type="date" class="form-control" name="" id="date"
                                                                placeholder="YYYY-_MM-DD">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="buyer"
                                                                class="col-form-label">{{ __('depo/delivered-products.employee-name') }}:</label>
                                                            <input type="text" class="form-control" id="buyer">
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
