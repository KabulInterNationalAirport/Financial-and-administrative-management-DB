@extends('financial-administrative-directorate.depo.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2"></span>
                        {{__('depo/damaged-products.list-of-damaged-products')}}</div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">{{__('depo/damaged-products.add-damaged-product')}}</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div>
                                  <label for="cagegory-name" class="col-form-label">{{__('depo/damaged-products.category')}}:</label>
                                  <input type="text" class="form-control" id="cagegory-name">
                                </div>
                                <div >
                                    <label for="item-name" class="col-form-label">{{__('depo/damaged-products.name')}}:</label>
                                    <input type="text" class="form-control" id="item-name">
                                  </div>
                                  <div >
                                    <label for="quantity" class="col-form-label">{{__('depo/damaged-products.quantity')}}:</label>
                                    <input type="number" class="form-control" id="quantity">
                                  </div>
                                  <div >
                                    <label for="unit" class="col-form-label">{{__('depo/damaged-products.unit')}}:</label>
                                    <input type="number" class="form-control" id="unit">
                                  </div>
                                  <div class="">
                                    <label for="price" class="col-form-label">{{__('depo/damaged-products.price')}}:</label>
                                    <input type="number" class="form-control" id="price">
                                  </div>
                                  <div >
                                    <label for="Trustee-name" class="col-form-label">{{__('depo/damaged-products.trustee')}}:</label>
                                    <input type="text" class="form-control" id="Trustee-name">
                                  </div>
                                  <div >
                                    <label for="f-s9-number" class="col-form-label">{{__('depo/damaged-products.delivery-person')}}:</label>
                                    <input type="number" class="form-control" id="f-s9-number">
                                  </div>
                                  <div >
                                    <label for="office" class="col-form-label">{{__('depo/new-arrivals.office')}}:</label>
                                    <input type="number" class="form-control" id="order-number">
                                  </div>
                              </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('depo/all-products.cancel')}}</button>
                          <button type="button" class="btn btn-primary">{{__('depo/all-products.submit')}}</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="page-rightheader">
                    <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">{{__('depo/damaged-products.add-damaged-product')}}<i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
            <div class="">
                <div class="main-proifle">
                    <div class="card-header border-bottom-0">
                        <div>
                            <form class="form-inline">
                                <div class="search-element">
                                    <input type="search" class="form-control header-search small" placeholder="{{__('layout-Financial.search')}}..."
                                        aria-label="Search" tabindex="1">
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
                                <th>{{__('depo/damaged-products.id')}}</th>
                                <th>{{__('depo/damaged-products.category')}}</th>
                                <th>{{__('depo/damaged-products.name')}}</th>
                                <th>{{__('depo/damaged-products.quantity')}}</th>
                                <th>{{__('depo/damaged-products.unit')}}</th>
                                <th>{{__('depo/damaged-products.price')}}</th>
                                <th>{{__('depo/damaged-products.total-price')}}</th>
                                <th>{{__('depo/damaged-products.delivery-person')}}</th>
                                <th>{{__('depo/new-arrivals.office')}}</th>
                                <th>{{__('depo/damaged-products.trustee')}}</th>
                                
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
                                <td>عبدالصبور همت</td>
                                <td>آی ټي</td>
                                <td>خان محمد</td>
                            </tr>
                            


                        </tbody>
                    </table>

                    <div class="card-body ">
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
