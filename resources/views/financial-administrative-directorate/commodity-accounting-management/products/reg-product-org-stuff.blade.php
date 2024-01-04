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
                                                {{ __('depo/employees.reg-product') }}</a></li>
                                        <li><a href="#tab6"
                                                data-bs-toggle="tab">{{ __('depo/employees.reg-it-product') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        {{-- tab for reg new product to a person --}}
                                        <div class="card-body">
                                            <form action="{{ route('delivered-product.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="cagegory-name"
                                                                class="col-form-label">{{ __('depo/delivered-products.category') }}:</label>
                                                            <input type="text" name="category" class="form-control"
                                                                id="cagegory-name">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="item-name"
                                                                class="col-form-label">{{ __('depo/delivered-products.name') }}:</label>
                                                            <input type="text" name="name" class="form-control"
                                                                id="item-name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="quantity"
                                                                class="col-form-label">{{ __('depo/delivered-products.quantity') }}:</label>
                                                            <input type="number" name="quantity" class="form-control"
                                                                id="quantity">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="unit"
                                                                class="col-form-label">{{ __('depo/delivered-products.unit') }}:</label>
                                                            <input type="text" name="unit" class="form-control"
                                                                id="unit">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="price"
                                                                class="col-form-label">{{ __('depo/delivered-products.price') }}:</label>
                                                            <input type="number" name="price" class="form-control"
                                                                id="price">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="administration"
                                                                class="col-form-label">{{ __('depo/delivered-products.offer-office') }}:</label>
                                                            <input type="text" name="offer_office" class="form-control"
                                                                id="administration">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="based-on"
                                                                class="col-form-label">{{ __('depo/delivered-products.based-on') }}:</label>
                                                            <input type="text" name="based_on" class="form-control"
                                                                id="based-on">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="number"
                                                                class="col-form-label">{{ __('depo/delivered-products.number') }}:</label>
                                                            <input type="number" name="number" class="form-control"
                                                                id="number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <label for="date"
                                                                class="col-form-label">{{ __('depo/delivered-products.delivered-data') }}:</label>
                                                            <input type="date" class="form-control" name="delivered_date"
                                                                id="date" placeholder="YYYY-_MM-DD">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="offer_date"
                                                                class="col-form-label">{{ __('depo/delivered-products.offer-date') }}:</label>
                                                            <input type="date" name="offer_date"
                                                                placeholder="YYYY-_MM-DD" class="form-control"
                                                                id="offer_date">
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
                                                                <option value="{{ $emp->id }}">{{ $emp->name }}
                                                                </option>

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
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="order-number"
                                                                    class="col-form-label">{{ __('employee.doc-pics') }}:</label>
                                                                <input type="file" src="" name="image"
                                                                    class="form-control" alt="" multiple>
                                                            </div>
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
                                    {{-- tab for reg new IT product to a person --}}
                                    <div class="tab-pane" id="tab6">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <div class="card-body">
                                                    <form action="{{ route('comm-it-product.store') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="cagegory-name"
                                                                        class="col-form-label">{{ __('depo/delivered-products.category') }}:</label>
                                                                    <input type="text" name="category"
                                                                        class="form-control" id="cagegory-name">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="item-name"
                                                                        class="col-form-label">{{ __('depo/delivered-products.name') }}:</label>
                                                                    <input type="text" name="name"
                                                                        class="form-control" id="item-name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="serial-no"
                                                                        class="col-form-label">{{ __('depo/new-arrivals.serial-no') }}:</label>
                                                                    <input type="text" name="serial_no"
                                                                        class="form-control" id="serial-no">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="ram"
                                                                        class="col-form-label">{{ __('depo/new-arrivals.ram') }}:</label>
                                                                    <input type="text" name="ram"
                                                                        class="form-control" id="ram">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="hd"
                                                                        class="col-form-label">{{ __('depo/new-arrivals.hd') }}:</label>
                                                                    <input type="text" name="hd"
                                                                        class="form-control" id="hd">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="unit"
                                                                        class="col-form-label">{{ __('depo/delivered-products.unit') }}:</label>
                                                                    <input type="text" name="unit"
                                                                        class="form-control" id="unit">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="quantity"
                                                                        class="col-form-label">{{ __('depo/delivered-products.quantity') }}:</label>
                                                                    <input type="number" name="quantity"
                                                                        class="form-control" id="quantity">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="price"
                                                                        class="col-form-label">{{ __('depo/delivered-products.price') }}:</label>
                                                                    <input type="number" name="price"
                                                                        class="form-control" id="price">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="based-on"
                                                                        class="col-form-label">{{ __('depo/delivered-products.based-on') }}:</label>
                                                                    <input type="text" name="based_on"
                                                                        class="form-control" id="based-on">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="number"
                                                                        class="col-form-label">{{ __('depo/delivered-products.number') }}:</label>
                                                                    <input type="number" name="number"
                                                                        class="form-control" id="number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="administration"
                                                                        class="col-form-label">{{ __('depo/delivered-products.offer-office') }}:</label>
                                                                    <input type="text" name="offer_office"
                                                                        class="form-control" id="administration">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="order-number"
                                                                        class="col-form-label">{{ __('depo/delivered-products.offer-date') }}:</label>
                                                                    <input type="date" name="offer_date"
                                                                        class="form-control" placeholder="YYYY-_MM-DD">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="date"
                                                                        class="col-form-label">{{ __('depo/delivered-products.delivered-data') }}:</label>
                                                                    <input type="date" class="form-control"
                                                                        name="delivered_date" id="date"
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
                                                            <button type="sumbit"
                                                                class="btn btn-primary">{{ __('depo/all-products.submit') }}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
