@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- ROW -->
            <!-- PAGE HEADER -->
            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">د کرایې د ورکړي فورم</div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <div class="main-proifle mt-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab5">
                        <div class="card-body">
                            <form action="{{ route('commercial-area-rent.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-header">
                                    <h4 class="mb-4 font-weight-bold">{{ __('depo/all-products.details') }}</h4>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label
                                                    class="form-label ">{{ __('financial/commercial-areas.contract-person') }}</label>
                                                <select class="form-control custom-select select2" name="person"
                                                    data-placeholder="Select" id="">
                                                    <option value="{{ $item->id }}">{{ $item->contract_person }}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label ">{{ __('budget.month') }}</label>
                                                <select name="month" class="form-control custom-select select2"
                                                    data-placeholder="Select">
                                                    <option label="Select"></option>
                                                    <option value="حمل">حمل</option>
                                                    <option value="ثور">ثور</option>
                                                    <option value="جوزا">جوزا</option>
                                                    <option value="سرطان">سرطان</option>
                                                    <option value="اسد">اسد</option>
                                                    <option value="سنبله">سنبله</option>
                                                    <option value="میزان">میزان</option>
                                                    <option value="عقرب">عقرب</option>
                                                    <option value="قوس">قوس</option>
                                                    <option value="جدې">جدې</option>
                                                    <option value="دلوه">دلوه</option>
                                                    <option value="حوت">حوت</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label ">{{ __('budget.date') }}</label>
                                                <input type="text" name="date" class="form-control mb-md-0 mb-5"
                                                    placeholder="{{ __('budget.date') }}">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="custom-controls-stacked d-md-flex my-3">
                                    <label class="form-label me-5">{{ __('depo/report.state') }}:</label>
                                    <label class="custom-control custom-radio success me-4">
                                        <input type="radio" class="custom-control-input" name="state" value="تکمیل">
                                        <span class="custom-control-label">{{ __('depo/report.complete') }}</span>
                                    </label>
                                    <label class="custom-control custom-radio success">
                                        <input type="radio" class="custom-control-input" name="state" value="نوی">
                                        <span class="custom-control-label">{{ __('depo/report.new') }}</span>
                                    </label>
                                </div>
                                <div class="card-footer text-start">
                                    <button type="submit"
                                        class="btn btn-primary">{{ __('depo/all-products.submit') }}</button>
                                    <a href="{{ url()->previous() }}"
                                        class="btn btn-danger">{{ __('depo/all-products.cancel') }}</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END ROW -->
        </div>
    </div>
@endsection
