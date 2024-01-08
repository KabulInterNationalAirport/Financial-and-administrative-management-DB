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
                                                {{ __('depo/car.reg-car') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        {{-- tab for reg new product to a person --}}
                                        <div class="card-body">
                                            <form action="{{ route('commodity-cars.store') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="car-name"
                                                                class="col-form-label">{{ __('depo/car.name') }}:</label>
                                                            <input type="text" name="name" class="form-control" id="car-name">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="model"
                                                                class="col-form-label">{{ __('depo/car.model') }}:</label>
                                                            <input type="text" name="model" class="form-control" id="model">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="engine-no"
                                                                class="col-form-label">{{ __('depo/car.engine-no') }}:</label>
                                                            <input type="text" name="engine_no"  class="form-control" id="engine-no">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="color"
                                                                class="col-form-label">{{ __('depo/car.color') }}:</label>
                                                            <input type="text" name="color" class="form-control" id="color">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="no-palat"
                                                                class="col-form-label">{{ __('depo/car.no-palat') }}:</label>
                                                            <input type="text" name="no_palet" class="form-control" id="no-palat">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="quantity"
                                                                class="col-form-label">{{ __('depo/new-arrivals.quantity') }}:</label>
                                                            <input type="number" name="quantity" class="form-control" id="quantity">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="unit"
                                                                class="col-form-label">{{ __('depo/car.unit') }}:</label>
                                                            <input type="text" name="unit" class="form-control" id="unit">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="price"
                                                                class="col-form-label">{{ __('depo/car.price') }}:</label>
                                                            <input type="number" name="price" class="form-control" id="price">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="based-on"
                                                                class="col-form-label">{{ __('depo/delivered-products.based-on') }}:</label>
                                                            <input type="text" name="based_on" class="form-control" id="based-on">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="number"
                                                                class="col-form-label">{{ __('depo/delivered-products.number') }}:</label>
                                                            <input type="number" name="number" class="form-control" id="number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div  class="col-md-6">
                                                            <label for="administration"
                                                                class="col-form-label">{{ __('depo/delivered-products.offer-office') }}:</label>
                                                            <input type="text" name="offer_office" class="form-control" id="administration">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="order-number"
                                                                class="col-form-label">{{ __('depo/delivered-products.offer-date') }}:</label>
                                                            <input type="text" name="offer_date" class="form-control" id="order-number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">                                                            
                                                            <label for="date"
                                                                class="col-form-label">{{ __('depo/delivered-products.delivered-data') }}:</label>
                                                            <input type="date" class="form-control" name="delivered_data" id="date"
                                                                placeholder="YYYY-_MM-DD">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="order-number"
                                                                    class="col-form-label">{{ __('employee.doc-pics') }}:</label>
                                                                <input type="file" src=""
                                                                    name="image" class="form-control"
                                                                    alt="" multiple>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="employee"
                                                                class="col-form-label">{{ __('depo/delivered-products.name') }}:</label>
                                                            <select name="employee"
                                                                class="form-control custom-select select2"
                                                                data-placeholder="Select">
                                                                <option value="{{ $emp->id }}">
                                                                    {{ $emp->name }}</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="product"
                                                                class="col-form-label">{{ __('depo/delivered-products.name') }}:</label>
                                                            <select name="product"
                                                                class="form-control custom-select select2"
                                                                data-placeholder="Select">
                                                                <option label="Select"></option>
                                                                @foreach ($t_products as $product)
                                                                    <option value="{{ $product->id }}">
                                                                        {{ $product->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">{{ __('depo/all-products.cancel') }}
                                                    </button>
                                                    <button type="submit"
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
