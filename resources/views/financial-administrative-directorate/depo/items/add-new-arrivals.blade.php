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
                                                {{ __('depo/car.reg-product') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="card-body">
                                            <form action="{{route('depo-new-arrivals.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="cagegory-name"
                                                                class="col-form-label">{{ __('depo/new-arrivals.category') }}:</label>
                                                            <input type="text" name="category" class="form-control" id="cagegory-name">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="item-name"
                                                                class="col-form-label">{{ __('depo/new-arrivals.name') }}:</label>
                                                            <input type="text" name="name" class="form-control" id="item-name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="quantity"
                                                                class="col-form-label">{{ __('depo/new-arrivals.quantity') }}:</label>
                                                            <input type="number" name="quantity" class="form-control" id="quantity">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="unit"
                                                                class="col-form-label">{{ __('depo/new-arrivals.unit') }}:</label>
                                                            <input type="text" name="unit" class="form-control" id="unit">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="price"
                                                                class="col-form-label">{{ __('depo/new-arrivals.price') }}:</label>
                                                            <input type="number" name="price" class="form-control" id="price">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="trustee"
                                                                class="col-form-label">{{ __('depo/new-arrivals.trustee') }}:</label>
                                                                <select name="trustee"
                                                                    class="form-control custom-select select2"
                                                                    data-placeholder="Select">
                                                                    @foreach ($trustees as $trustee)
                                                                    @if ($trustee->job_title == 'trustee' || $trustee->job_title == 'معتمید')
                                                                    <option value="{{$trustee->id}}">{{$trustee->name}}</option>
                                                                    @endif
                                                                    @endforeach
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="f-s9-number"
                                                                class="col-form-label">{{ __('depo/new-arrivals.number-of-f-s-9') }}:</label>
                                                            <input type="number" name="f_s_9" class="form-control" id="f-s9-number">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="order-number"
                                                                class="col-form-label">{{ __('depo/new-arrivals.order-number') }}:</label>
                                                            <input type="number" name="order_no" class="form-control" id="order-number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="administration"
                                                                class="col-form-label">{{ __('depo/new-arrivals.office') }}:</label>
                                                            <input type="text" name="office" class="form-control" id="administration">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="buyer"
                                                                class="col-form-label">{{ __('depo/new-arrivals.taken-from') }}:</label>
                                                            <input type="text" name="taken_from" class="form-control" id="buyer">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="buyer"
                                                                class="col-form-label">{{ __('depo/new-arrivals.product-name') }}:</label>
                                                                <select name="product"
                                                                    class="form-control custom-select select2"
                                                                    data-placeholder="Select">
                                                                    @foreach ($products as $product)
                                                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label ">{{ __('depo/report.date') }}</label>
                                                            <input type="text" name="date" class="form-control fc-datepicker"
                                                                placeholder="DD-MM-YYY">
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
