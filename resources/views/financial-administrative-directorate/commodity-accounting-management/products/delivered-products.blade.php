@extends('financial-administrative-directorate.commodity-accounting-management.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2"></span>
                        {{ __('depo/delivered-products.list-of-delivered-products') }}</div>
                </div>

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
                                            <th>{{ __('depo/delivered-products.based-on') }}</th>
                                            <td>مکتوب</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('depo/delivered-products.number') }}</th>
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
                                <th>{{ __('depo/delivered-products.based-on') }}</th>
                                <th>{{ __('depo/delivered-products.number') }}</th>
                                <th>{{ __('depo/delivered-products.offer-date') }}</th>
                                <th>{{ __('depo/delivered-products.offer-office') }}</th>
                                <th>{{ __('depo/delivered-products.delivered-data') }}</th>
                                <th>{{ __('depo/delivered-products.employee-name') }}</th>
                                <th>{{ __('depo/delivered-products.category') }}</th>
                                <th>{{ __('depo/delivered-products.name') }}</th>
                                <th>{{ __('depo/delivered-products.quantity') }}</th>
                                <th>{{ __('depo/delivered-products.unit') }}</th>
                                <th>{{ __('depo/delivered-products.price') }}</th>
                                <th>{{ __('depo/delivered-products.total-price') }}</th>
                                {{-- <th>{{ __('depo/delivered-products.details') }}</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->based_on}}</td>
                                <td>{{$product->number}}</td>
                                <td>{{$product->order_date}}</td>
                                <td>{{$product->order_office}}</td>
                                <td>{{$product->delivered_date}}</td>
                                <td>{{$product->cam_org_stuff_id}}</td>
                                <td>{{$product->category}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->unit}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->price * $product->quantity}}</td>
                                {{-- <td>
                                    <a class="action-btns1 bg-success btn-sm" data-bs-target="#showingProduct"
                                        data-bs-toggle="modal"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a class="action-btns1 bg-danger  btn-sm" href="/acc-emp-item-reg">
                                            <i class="fa-solid fa-print"></i>
                                        </a>
                                </td> --}}
                            </tr>
                                
                            @endforeach
                            
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
