@extends('financial-administrative-directorate.depo.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2"></span>
                        {{ __('depo/delivered-products.list-of-delivered-products') }}</div>
                </div>
                {{-- modal for delivering the item to a person  --}}
                <div class="modal fade" id="addingProductToDeliveredProducts" tabindex="-1"
                    aria-labelledby="addingProductToDeliveredProductsLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="addingProductToDeliveredProductsLabel">
                                    {{ __('depo/delivered-products.list-of-delivered-products') }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div>
                                        <label for="cagegory-name"
                                            class="col-form-label">{{ __('depo/delivered-products.category') }}:</label>
                                        <input type="text" class="form-control" id="cagegory-name">
                                    </div>
                                    <div>
                                        <label for="item-name"
                                            class="col-form-label">{{ __('depo/delivered-products.name') }}:</label>
                                        <input type="text" class="form-control" id="item-name">
                                    </div>
                                    <div>
                                        <label for="quantity"
                                            class="col-form-label">{{ __('depo/delivered-products.quantity') }}:</label>
                                        <input type="number" class="form-control" id="quantity">
                                    </div>
                                    <div>
                                        <label for="unit"
                                            class="col-form-label">{{ __('depo/delivered-products.unit') }}:</label>
                                        <input type="text" class="form-control" id="unit">
                                    </div>
                                    <div class="">
                                        <label for="price"
                                            class="col-form-label">{{ __('depo/delivered-products.price') }}:</label>
                                        <input type="number" class="form-control" id="price">
                                    </div>
                                    <div>
                                        <label for="Trustee-name"
                                            class="col-form-label">{{ __('depo/new-arrivals.total-price') }}:</label>
                                        <input type="text" class="form-control" id="Trustee-name">
                                    </div>
                                    <div>
                                        <label for="f-s9-number"
                                            class="col-form-label">{{ __('depo/delivered-products.offer-no') }}:</label>
                                        <input type="number" class="form-control" id="f-s9-number">
                                    </div>
                                    <div>
                                        <label for="order-number"
                                            class="col-form-label">{{ __('depo/delivered-products.offer-date') }}:</label>
                                        <input type="number" class="form-control" id="order-number">
                                    </div>
                                    <div>
                                        <label for="administration"
                                            class="col-form-label">{{ __('depo/delivered-products.offer-office') }}:</label>
                                        <input type="text" class="form-control" id="administration">
                                    </div>
                                    <div>
                                        <label for="date"
                                            class="col-form-label">{{ __('depo/delivered-products.delivered-data') }}:</label>
                                        <input type="date" class="form-control" name="" id="date"
                                            placeholder="YYYY-_MM-DD">
                                    </div>
                                    <div>
                                        <label for="buyer"
                                            class="col-form-label">{{ __('depo/delivered-products.employee-name') }}:</label>
                                        <input type="text" class="form-control" id="buyer">
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
                {{-- end of the modal for delivering item to a person  --}}

                {{-- ------------------ modal for showing details of the product ------------- --}}
                <div class="modal fade" id="showingProduct" tabindex="-1" aria-labelledby="showingProductLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="showingProductLabel">
                                    {{ __('depo/all-products.product-details') }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered text-center">
                                    <tbody>
                                        <tr>
                                            <th>{{ __('depo/new-arrivals.category') }}</th>
                                            <td>computer</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('depo/new-arrivals.name') }}</th>
                                            <td>Dell 3985</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('depo/new-arrivals.quantity') }}</th>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('depo/new-arrivals.unit') }}</th>
                                            <td>number</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('depo/new-arrivals.price') }}</th>
                                            <td>120000</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('depo/new-arrivals.total-price') }}</th>
                                            <td>36000</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('depo/delivered-products.offer-no') }}</th>
                                            <td>123</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('depo/delivered-products.offer-date') }}</th>
                                            <td>2023/12/12</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('depo/delivered-products.offer-office') }}</th>
                                            <td>IT</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('depo/delivered-products.delivered-data') }}</th>
                                            <td>2023/12/12</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('depo/delivered-products.employee-name') }}</th>
                                            <td>Abdul saboor hemat</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i
                                        class="fa-solid fa-ban"></i>{{ __('depo/all-products.cancel') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- -------------- end of modal for showing details of the product--------------- --}}
                <div class="page-rightheader header">
                    <button class="btn btn-primary" data-bs-target="#addingProductToDeliveredProducts"
                        data-bs-toggle="modal">{{ __('depo/delivered-products.add-product') }}
                        <i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
            <div class="">
                <div class="main-proifle">
                    <div class="card-header border-bottom-0">
                        <div>
                            <form class="form-inline">
                                <div class="search-element">
                                    <input type="search" class="form-control header-search small"
                                        placeholder="{{ __('layout-Financial.search') }}..." aria-label="Search"
                                        tabindex="1">
                                </div>
                            </form>
                        </div>
                        <div class="page-rightheader ms-md-auto ">
                            <button class="btn btn-info mt-4" onClick="javascript:window.print();"><i
                                    class="si si-printer"></i> {{ __('depo/all-products.print') }}</button>
                        </div>
                    </div>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>{{ __('depo/delivered-products.id') }}</th>
                                <th>{{ __('depo/delivered-products.category') }}</th>
                                <th>{{ __('depo/delivered-products.name') }}</th>
                                <th>{{ __('depo/delivered-products.quantity') }}</th>
                                <th>{{ __('depo/delivered-products.unit') }}</th>
                                <th>{{ __('depo/delivered-products.price') }}</th>
                                <th>{{ __('depo/delivered-products.total-price') }}</th>
                                <th>{{ __('depo/delivered-products.offer-no') }}</th>
                                <th>{{ __('depo/delivered-products.offer-date') }}</th>
                                <th>{{ __('depo/delivered-products.offer-office') }}</th>
                                <th>{{ __('depo/delivered-products.delivered-data') }}</th>
                                <th>{{ __('depo/delivered-products.employee-name') }}</th>
                                <th>{{ __('depo/delivered-products.details') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴</td>
                                <td>۳</td>
                                <td>عدد</td>
                                <td>۱۰۰۰۰</td>
                                <td>۳۰۰۰۰</td>
                                <td>۱۲</td>
                                <td>۱۴۰۲/۹/۱۲</td>
                                <td>آی ټي</td>
                                <td>۱۴۰۲/۹/۱۲</td>
                                <td>عبدالصبور همت</td>
                                <td>
                                    <Button class="action-btns1 bg-success" data-bs-target="#showingProduct"
                                        data-bs-toggle="modal"><i class="fa-regular fa-pen-to-square"></i></Button>
                                </td>
                            </tr>
                            <th scope="row">1</th>
                            <td>کمپیوټر</td>
                            <td>ډیل ۳۳۳۴</td>
                            <td>۳</td>
                            <td>عدد</td>
                            <td>۱۰۰۰۰</td>
                            <td>۳۰۰۰۰</td>
                            <td>۱۲</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>آی ټي</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>عبدالصبور همت</td>
                            <td>
                                <Button class="action-btns1 bg-success" data-bs-target="#showingProduct"
                                    data-bs-toggle="modal"><i class="fa-regular fa-pen-to-square"></i></Button>
                            </td>
                            </tr>
                            <th scope="row">1</th>
                            <td>کمپیوټر</td>
                            <td>ډیل ۳۳۳۴</td>
                            <td>۳</td>
                            <td>عدد</td>
                            <td>۱۰۰۰۰</td>
                            <td>۳۰۰۰۰</td>
                            <td>۱۲</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>آی ټي</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>عبدالصبور همت</td>
                            <td>
                                <Button class="action-btns1 bg-success" data-bs-target="#showingProduct"
                                    data-bs-toggle="modal"><i class="fa-regular fa-pen-to-square"></i></Button>
                            </td>
                            </tr>
                            <th scope="row">1</th>
                            <td>کمپیوټر</td>
                            <td>ډیل ۳۳۳۴</td>
                            <td>۳</td>
                            <td>عدد</td>
                            <td>۱۰۰۰۰</td>
                            <td>۳۰۰۰۰</td>
                            <td>۱۲</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>آی ټي</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>عبدالصبور همت</td>
                            <td>
                                <Button class="action-btns1 bg-success" data-bs-target="#showingProduct"
                                    data-bs-toggle="modal"><i class="fa-regular fa-pen-to-square"></i></Button>
                            </td>
                            </tr>
                            <th scope="row">1</th>
                            <td>کمپیوټر</td>
                            <td>ډیل ۳۳۳۴</td>
                            <td>۳</td>
                            <td>عدد</td>
                            <td>۱۰۰۰۰</td>
                            <td>۳۰۰۰۰</td>
                            <td>۱۲</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>آی ټي</td>
                            <td>۱۴۰۲/۹/۱۲</td>
                            <td>عبدالصبور همت</td>
                            <td>
                                <Button class="action-btns1 bg-success" data-bs-target="#showingProduct"
                                    data-bs-toggle="modal"><i class="fa-regular fa-pen-to-square"></i></Button>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- ----------- pagination links here-------- --}}
                    <div class="card-body footer">
                        <ul class="pagination mg-b-0 page-0 ">
                            <li class="page-item">
                                <a aria-label="Last" class="page-link" href="javascript:void(0);"><i
                                        class="fa fa-angle-double-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a aria-label="Next" class="page-link" href="javascript:void(0);"><i
                                        class="fa fa-angle-left"></i></a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link hidden-xs-down" href="javascript:void(0);">4</a>
                            </li>

                            <li class="page-item">
                                <a aria-label="Next" class="page-link" href="javascript:void(0);"><i
                                        class="fa fa-angle-right"></i></a>
                            </li>
                            <li class="page-item">
                                <a aria-label="Last" class="page-link" href="javascript:void(0);"><i
                                        class="fa fa-angle-double-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
