@extends('financial-administrative-directorate.payroll-management.layout.master')
@section('contents')
    <div class="page">
        <div class="page-main">
            <div class="app-content main-content">
                <div class="side-app main-container">
                    <!-- PAGE HEADER -->
                    <div class="page-header d-lg-flex d-block">
                        <div class="page-leftheader">
                            <div class="page-title">{{ __('employee.employee-profile') }}</div>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->
                    <!-- ROW -->
                    <div class="main-proifle">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="box-widget widget-user">
                                    <div class="widget-user-image d-sm-flex mb-4">
                                        <span class="avatar"
                                            style="background-image: url({{ asset('assets/images/users/16.jpg') }})">
                                            <span class="avatar-status bg-green"></span>
                                        </span>
                                        <div class="ms-sm-4 mt-3">
                                            <h4 class="pro-user-username mb-3 font-weight-semibold">Abdul Saboor Hemat<i
                                                    class="ri-checkbox-circle-line text-success ms-1 fs-14"></i></h4>
                                            <div class="pro-user mb-2">
                                                {{-- <h5 class="pro-user-username text-dark mb-1 fs-16">Abdul Saboor Hemat</h5> --}}
                                                <h6 class="pro-user-desc text-muted fs-12">System Development</h6>
                                                <h6 class="pro-user-username text-dark mb-1 fs-16">
                                                    {{ __('employee.kabul-airport') }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-7">
                                <div class="text-xl-end mt-4 mt-xl-0">
                                    <a href="javascript:void(0);"
                                        class="btn btn-primary">{{ __('employee.edit-profile') }}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END ROW -->

                <!-- ROW -->
                <div class="main-proifle  mx-4">

                    <div class="row">
                        <div class="mg-b-20">

                            <div class="card-body">
                                <h4 class="card-title">{{ __('employee.personal-informaions') }}</h4>
                                <div class="table-responsive">
                                    <table class="">
                                        <tbody>
                                            <tr>
                                                <td class="py-2">
                                                    <span class="font-weight-semibold w-50">{{ __('employee.name') }}
                                                    </span>
                                                </td>
                                                <td class="py-2 px-5">Abdul Saboor Hemat</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2">
                                                    <span
                                                        class="font-weight-semibold w-50">{{ __('employee.id-card') }}</span>
                                                </td>
                                                <td class="py-2 px-5">75784</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2">
                                                    <span class="font-weight-semibold w-50">{{ __('employee.address') }}
                                                    </span>
                                                </td>
                                                <td class="py-2 px-5">Kabul</td>
                                            </tr>

                                            <tr>
                                                <td class="py-2">
                                                    <span class="font-weight-semibold w-50">ایمیل </span>
                                                </td>
                                                <td class="py-2 px-5">saboorhemat4600@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-0">
                                                    <span class="font-weight-semibold w-50">مبایل نمبر </span>
                                                </td>
                                                <td class="py-2 px-5">0790161600</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-0">
                                                    <span
                                                        class="font-weight-semibold w-50">{{ __('employee.gender') }}</span>
                                                </td>
                                                <td class="py-2 px-5">male</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-0">
                                                    <span
                                                        class="font-weight-semibold w-50">{{ __('employee.material-state') }}</span>
                                                </td>
                                                <td class="py-2 px-5">single</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-0">
                                                    <span
                                                        class="font-weight-semibold w-50">{{ __('employee.appointment-date') }}</span>
                                                </td>
                                                <td class="py-2 px-5">2022-2-2</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-0">
                                                    <span
                                                        class="font-weight-semibold w-50">{{ __('employee.degree') }}</span>
                                                </td>
                                                <td class="py-2 px-5">undergraduate</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="font-weight-semibold">{{ __('employee.details') }}</h5>
                                <div class="main-profile-bio mb-4">
                                    <p>simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy when an unknown
                                        printer
                                        took a galley of type and scrambled it to make a type specimen
                                        book.
                                        It has survived not only five centuries nchanged.</p>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <h5 class="font-weight-semibold">{{ __('employee.contact') }}</h5>
                                <div class="main-profile-contact-list d-lg-flex">
                                    <div class="media me-4">
                                        <div class="media-icon bg-primary-transparent text-primary me-3 mt-1">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted">{{ __('employee.mobile') }}</small>
                                            <div class="font-weight-semibold">
                                                0790161600
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media me-4">
                                        <div class="media-icon bg-warning-transparent text-warning me-3 mt-1">
                                            <i class="fa-solid fa-envelope-open-text"></i>
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted">{{ __('employee.email') }}</small>
                                            <div class="font-weight-semibold">
                                                saboorhemat@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-icon bg-info-transparent text-info me-3 mt-1">
                                            <i class="fa-solid fa-map-location-dot"></i>
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted">{{ __('employee.address') }}</small>
                                            <div class="font-weight-semibold">
                                                kabul
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- main-profile-contact-list -->
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->
                </div>

            </div>
        </div><!-- end app-content-->
    </div>
    </div>

    </div>
@endsection
