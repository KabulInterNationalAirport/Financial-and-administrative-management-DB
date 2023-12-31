@extends('financial-administrative-directorate.depo.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2"></span>
                        {{ __('depo/new-arrivals.new-arrival-products') }}</div>
                </div>
                <div class="page-rightheader">
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
                                                <th>{{ __('depo/new-arrivals.trustee') }}</th>
                                                <td>Abdul Saboor hemat</td>
                                            </tr>
                                            <tr>
                                                <th>{{ __('depo/new-arrivals.number-of-f-s-9') }}</th>
                                                <td>14</td>
                                            </tr>
                                            <tr>
                                                <th>{{ __('depo/new-arrivals.order-number') }}</th>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <th>{{ __('depo/new-arrivals.date') }}</th>
                                                <td>2023/12/12</td>
                                            </tr>
                                            <tr>
                                                <th>{{ __('depo/new-arrivals.office') }}</th>
                                                <td>IT</td>
                                            </tr>
                                            <tr>
                                                <th>{{ __('depo/new-arrivals.taken-from') }}</th>
                                                <td>Khan Mohammad</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-info mt-4" onClick=""><i
                                            class="si si-printer"></i>{{ __('depo/all-products.print') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- -------------- end of modal for showing details of the product--------------- --}}
                    <div class="page-rightheader header">
                        <a href="{{route('depo-new-arrivals.create')}}" class="btn btn-primary">{{ __('depo/new-arrivals.add-product') }}<i
                                class="fa-solid fa-plus"></i></a>
                    </div>
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
                                <th>{{ __('depo/new-arrivals.id') }}</th>
                                <th>{{ __('depo/new-arrivals.category') }}</th>
                                <th>{{ __('depo/new-arrivals.name') }}</th>
                                <th>{{ __('depo/new-arrivals.quantity') }}</th>
                                <th>{{ __('depo/new-arrivals.unit') }}</th>
                                <th>{{ __('depo/new-arrivals.price') }}</th>
                                <th>{{ __('depo/new-arrivals.total-price') }}</th>
                                <th>{{ __('depo/new-arrivals.trustee') }}</th>
                                <th>{{ __('depo/new-arrivals.number-of-f-s-9') }}</th>
                                <th>{{ __('depo/new-arrivals.order-number') }}</th>
                                <th>{{ __('depo/new-arrivals.date') }}</th>
                                <th>{{ __('depo/new-arrivals.office') }}</th>
                                <th>{{ __('depo/new-arrivals.taken-from') }}</th>
                                <th>{{ __('depo/new-arrivals.details') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->category}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->unit}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->price * $product->quantity}}</td>
                                <td>{{$product->trustee_id}}</td>
                                <td>{{$product->m_7}}</td>
                                <td>{{$product->order_no}}</td>
                                <td>{{$product->date}}</td>
                                <td>{{$product->related_office}}</td>
                                <td>{{$product->taken_from}}</td>
                                <td>
                                    <Button class="action-btns1 bg-success" data-bs-target="#showingProduct"
                                        data-bs-toggle="modal"><i class="fa-regular fa-pen-to-square"></i></Button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- -----------pagination links here------------ --}}
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
                    {{-- ------------- end of pagination liks ---------------- --}}
                </div>
            </div>
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2"></span>
                        {{ __('depo/new-arrivals.new-arrival-it-products') }}</div>
                </div>
                <div class="page-rightheader">
                    {{-- ------------------ modal for showing details of the product ------------- --}}
                    <div class="modal fade" id="showingItProduct" tabindex="-1" aria-labelledby="showingItProductLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="showingItProductLabel">
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
                                                <th>{{ __('depo/new-arrivals.serial-no') }}</th>
                                                <td>k34hs934</td>
                                            </tr>
                                            <tr>
                                                <th>{{ __('depo/new-arrivals.ram') }}</th>
                                                <td>16GB</td>
                                            </tr>
                                            <tr>
                                                <th>{{ __('depo/new-arrivals.hd') }}</th>
                                                <td>512GB</td>
                                            </tr>
                                            <tr>
                                                <th>{{ __('depo/new-arrivals.color') }}</th>
                                                <td>red</td>
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
                                                <th>{{ __('depo/new-arrivals.trustee') }}</th>
                                                <td>Abdul Saboor hemat</td>
                                            </tr>
                                            <tr>
                                                <th>{{ __('depo/new-arrivals.number-of-f-s-9') }}</th>
                                                <td>14</td>
                                            </tr>
                                            <tr>
                                                <th>{{ __('depo/new-arrivals.order-number') }}</th>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <th>{{ __('depo/new-arrivals.date') }}</th>
                                                <td>2023/12/12</td>
                                            </tr>
                                            <tr>
                                                <th>{{ __('depo/new-arrivals.office') }}</th>
                                                <td>IT</td>
                                            </tr>
                                            <tr>
                                                <th>{{ __('depo/new-arrivals.taken-from') }}</th>
                                                <td>Khan Mohammad</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-info mt-4" onClick=""><i
                                            class="si si-printer"></i>{{ __('depo/all-products.print') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- -------------- end of modal for showing details of the product--------------- --}}
                    <div class="page-rightheader header">
                        <a href="/add-it-arrival-items"
                            class="btn btn-primary">{{ __('depo/new-arrivals.add-product') }}<i
                                class="fa-solid fa-plus"></i></a>
                    </div>
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
                        <thead class="bg-info">
                            <tr>
                                <th>{{ __('depo/new-arrivals.id') }}</th>
                                <th>{{ __('depo/new-arrivals.category') }}</th>
                                <th>{{ __('depo/new-arrivals.name') }}</th>
                                <th>{{ __('depo/new-arrivals.serial-no') }}</th>
                                <th>{{ __('depo/new-arrivals.ram') }}</th>
                                <th>{{ __('depo/new-arrivals.hd') }}</th>
                                <th>{{ __('depo/new-arrivals.color') }}</th>
                                <th>{{ __('depo/new-arrivals.quantity') }}</th>
                                <th>{{ __('depo/new-arrivals.unit') }}</th>
                                <th>{{ __('depo/new-arrivals.price') }}</th>
                                <th>{{ __('depo/new-arrivals.total-price') }}</th>
                                <th>{{ __('depo/new-arrivals.trustee') }}</th>
                                <th>{{ __('depo/new-arrivals.number-of-f-s-9') }}</th>
                                <th>{{ __('depo/new-arrivals.order-number') }}</th>
                                <th>{{ __('depo/new-arrivals.date') }}</th>
                                <th>{{ __('depo/new-arrivals.office') }}</th>
                                <th>{{ __('depo/new-arrivals.taken-from') }}</th>
                                <th>{{ __('depo/new-arrivals.details') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>کمپیوټر</td>
                                <td>ډیل ۳۳۳۴</td>
                                <td>ks3kfj453</td>
                                <td>16GB</td>
                                <td>512SSD</td>
                                <td>Red</td>
                                <td>۳</td>
                                <td>عدد</td>
                                <td>۱۰۰۰۰</td>
                                <td>۳۰۰۰۰</td>
                                <td>شبیر احمد</td>
                                <td>۶</td>
                                <td>۸</td>
                                <td>۱۴۰۲/۹/۱۲</td>
                                <td>آی ټي</td>
                                <td>نه</td>
                                <td>
                                    <Button class="action-btns1 bg-success" data-bs-target="#showingItProduct"
                                        data-bs-toggle="modal"><i class="fa-regular fa-pen-to-square"></i></Button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- -----------pagination links here------------ --}}
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
                    {{-- ------------- end of pagination liks ---------------- --}}
                </div>
            </div>
        </div>
    </div>
@endsection
