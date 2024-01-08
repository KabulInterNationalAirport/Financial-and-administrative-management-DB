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
                                                {{ __('depo/employees.employee-information') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="card-body">
                                            <form action="{{ route('commodity-org-stuff.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-header">
                                                    <h4 class="mb-4 font-weight-bold">
                                                        {{ __('depo/employees.employee-information') }}</h4>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label
                                                                class="form-label mb-0 mt-2">{{ __('depo/employees.name') }}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="name"
                                                                class="form-control mb-md-0 mb-5  required"
                                                                placeholder="{{ __('depo/employees.name') }}">
                                                                @error('name')
                                                                <p class="alert-sm alert-danger ps-1"  role="alert">    {{ $message }}
                                                                </p>
                                                                @enderror
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label
                                                                class="form-label mb-0 mt-2">{{ __('depo/employees.last-name') }}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="father_name" class="form-control"
                                                                placeholder="{{ __('depo/employees.father-name') }}">
                                                                @error('father_name')
                                                                <p class="alert-sm alert-danger ps-1"  role="alert">    {{ $message }}
                                                                </p>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label
                                                                class="form-label mb-0 mt-2">{{ __('depo/employees.job-title') }}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="job_title" class="form-control"
                                                                placeholder="{{ __('depo/employees.job-title') }}">
                                                                @error('job_title')
                                                                <p class="alert-sm alert-danger ps-1"  role="alert">    {{ $message }}
                                                                </p>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label
                                                                class="form-label mb-0 mt-2">{{ __('depo/employees.related-office') }}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="related_office" class="form-control"
                                                                placeholder="{{ __('depo/employees.related-office') }}">
                                                                @error('related_office')
                                                                <p class="alert-sm alert-danger ps-1"  role="alert">    {{ $message }}
                                                                </p>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="order-number"
                                                                class="col-form-label">{{ __('depo/delivered-products.offer-date') }}:</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="appointment_date" placeholder="YYYY-_MM-DD"
                                                                class="form-control" id="order-number">
                                                                @error('order-number')
                                                                <p class="alert-sm alert-danger ps-1"  role="alert">    {{ $message }}
                                                                </p>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-end">
                                                    <button
                                                        class="btn btn-primary">{{ __('depo/all-products.submit') }}</button>
                                                    <a href="{{url()->previous()}}"
                                                        class="btn btn-danger">{{ __('depo/all-products.cancel') }}</a>
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
