@extends('financial-administrative-directorate.payroll-management.layout.master')
@section('contents')
    <div class="page">
        <div class="page-main">
            <div class="app-content main-content">
                <div class="side-app main-container">
                    <!--PAGE HEADER -->
                    <div class="page-header d-xl-flex d-block">
                        <div class="page-leftheader">
                            <div class="page-title">{{ __('employee.add-employee') }}</div>
                        </div>
                    </div>
                    <!--END PAGE HEADER -->
                    <!-- ROW -->
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-lg-12">
                            <div class="tab-menu-heading hremp-tabs p-0 ">
                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class="ms-4"><a href="#tab5" class="active"
                                                data-bs-toggle="tab">{{__('budget.received-type')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                                <form action="{{route('payroll-budget-expense.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="card-body">
                                                <div class="card-header">
                                                    <h4 class="mb-4 font-weight-bold">
                                                        {{__('budget.received-type')}}</h4>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label
                                                                class="form-label mb-0 mt-2">{{__('budget.received-type')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input name="type" type="text" class="form-control mb-md-0 mb-5"
                                                                placeholder="{{__('budget.received-type')}}">
                                                            <span class="text-muted"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">
                                                                {{__('budget.amount')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input name="amount" type="number" class="form-control"
                                                                placeholder=" {{__('budget.amount')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label
                                                                class="form-label mb-0 mt-2">{{__('budget.year')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select name="year"
                                                            class="form-control custom-select select2"
                                                            data-placeholder="{{__('budget.year')}}">
                                                            <option label="{{__('budget.year')}}"></option>
                                                            <option value="1403">1403</option>
                                                            <option value="1404">1404</option>
                                                            <option value="1405">1405</option>
                                                            <option value="1406">1406</option>
                                                            <option value="1407">1407</option>
                                                            <option value="1408">1408</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label
                                                                class="form-label mb-0 mt-2">{{__('budget.month')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select name="month"
                                                            class="form-control custom-select select2"
                                                            data-placeholder="{{__('budget.month')}}">
                                                            <option label="{{__('budget.month')}}"></option>
                                                            <option value="حمل">حمل</option>
                                                            <option value="ثور">ثور</option>
                                                            <option value="جوزا">جوزا</option>
                                                            <option value="سرطان">سرطان</option>
                                                            <option value="اسد">اسد</option>
                                                            <option value="سنبله">سنبله</option>
                                                            <option value="میزان">میزان</option>
                                                            <option value="عقرب">عقرب</option>
                                                            <option value="قوس">قوس</option>
                                                            <option value="جدی">جدی</option>
                                                            <option value="دلوه">دلوه</option>
                                                            <option value="حوت">حوت</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label
                                                                class="form-label mb-0 mt-2">{{__('budget.based-on')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select name="based_on"
                                                            class="form-control custom-select select2"
                                                            data-placeholder="{{__('budget.based-on')}}">
                                                            <option label="{{__('budget.based-on')}}"></option>
                                                            <option value="مکتوب">مکتوب</option>
                                                            <option value="پیشنهاد">پیشنهاد</option>
                                                            <option value="ف-س-م۱۴">ف-س-م۱۴</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">
                                                                {{__('budget.number')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input name="number" type="number" class="form-control"
                                                                placeholder=" {{__('budget.number')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label
                                                                class="form-label mb-0 mt-2">{{__('budget.project-code-id')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select name="project_codes_id"
                                                                class="form-control custom-select select2"
                                                                data-placeholder="{{__('budget.project-code-id')}}">
                                                                <option label="{{__('budget.project-code-id')}}"></option>
                                                                @foreach ($codes as $code)
                                                                <option value="{{$code->id}}">{{$code->code}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label
                                                                class="form-label mb-0 mt-2">{{__('budget.expense-code-id')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select name="expense_codes_id"
                                                                class="form-control custom-select select2"
                                                                data-placeholder="{{__('budget.project-code-id')}}">
                                                                <option label="{{__('budget.project-code-id')}}"></option>
                                                                @foreach ($e_codes as $code)
                                                                <option value="{{$code->id}}">{{$code->code}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label
                                                                class="form-label mb-0 mt-2">{{__('budget.date')}}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="date" class="form-control"
                                                                placeholder="DD-MM-YYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-label mb-0 mt-2">{{__('employee.doc-pics')}}</div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="form-label"></label>
                                                                <input class="form-control" name="image" type="file" multiple>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="card-footer text-end">
                                            <button type="submit"
                                                class="btn btn-primary">{{ __('depo/all-products.submit') }}</button>
                                            <button type=""
                                                class="btn btn-danger">{{ __('depo/all-products.cancel') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->
                </div>
            </div><!-- end app-content-->
        </div>
    </div>
@endsection
