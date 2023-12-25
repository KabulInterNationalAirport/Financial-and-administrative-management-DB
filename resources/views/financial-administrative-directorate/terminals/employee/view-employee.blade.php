@extends('financial-administrative-directorate.terminals.layout.master')
@section('contents')
    <div class="page">
        <div class="page-main">
            <!-- end app-content-->
            <div class="app-content main-content">
                <div class="side-app main-container">
                    <!-- PAGE HEADER -->
                    <div class="page-header d-lg-flex d-block">
                        <div class="page-leftheader">
                            <div class="page-title">د کارمند پروفایل</div>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->
                    <!-- ROW -->
                    <div class="main-proifle">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="box-widget widget-user">
                                    <div class="widget-user-image d-sm-flex mb-4">
                                        <span class="avatar" style="background-image: url({{asset('assets/images/users/16.jpg')}})">
                                            <span class="avatar-status bg-green"></span>
                                        </span>
                                        <div class="ms-sm-4 mt-3">
                                            <h4 class="pro-user-username mb-3 font-weight-semibold">Abdul Saboor Hemat<i
                                                    class="ri-checkbox-circle-line text-success ms-1 fs-14"></i></h4>
                                            <div class="pro-user mb-2">
                                                {{-- <h5 class="pro-user-username text-dark mb-1 fs-16">Abdul Saboor Hemat</h5> --}}
                                                <h6 class="pro-user-desc text-muted fs-12">System Development</h6>
                                                <h6 class="pro-user-username text-dark mb-1 fs-16">Kabul International
                                                    Airport
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-7">
                                <div class="text-xl-end mt-4 mt-xl-0">
                                    <a href="javascript:void(0);" class="btn btn-primary">Edit Profile</a>
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
                                <h4 class="card-title">شخصي معلومات</h4>
                                <div class="table-responsive">
                                    <table class="">
                                        <tbody>
                                            <tr>
                                                <td class="py-2">
                                                    <span class="font-weight-semibold w-50">نوم </span>
                                                </td>
                                                <td class="py-2 px-5">Abdul Saboor Hemat</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2">
                                                    <span class="font-weight-semibold w-50">آی ډی کارټ </span>
                                                </td>
                                                <td class="py-2 px-5">75784</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2">
                                                    <span class="font-weight-semibold w-50">ژبي </span>
                                                </td>
                                                <td class="py-2 px-5">پښتو, دری،انګیسي او اردو</td>
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-body border-top d-block">
                                <h5 class="font-weight-semibold">کار او تعلیم</h5>
                                <div class="main-profile-contact-list d-lg-flex">
                                    <div class="media me-5">
                                        <div class="media-icon bg-success-transparent text-success me-4">
                                            <i class="fa fa-whatsapp"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="font-weight-semibold mb-1">system manager at <a
                                                    href="javascript:void(0);" class="btn-link">Airport</a>
                                            </h6>
                                            <span>2018 - present</span>
                                            <p>Past Work: Spruko, Inc.</p>
                                        </div>
                                    </div>
                                    <div class="media me-5">
                                        <div class="media-icon bg-danger-transparent text-danger me-4">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="font-weight-semibold mb-1">Studied at <a href="javascript:void(0);"
                                                    class="btn-link">University</a>
                                            </h6>
                                            <span>2004-2008</span>
                                            <p>Graduation: Bachelor of Science in Computer Science</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <h5 class="font-weight-semibold">مهارتونه</h5>
                                <a class="btn btn-sm btn-white mt-1" href="javascript:void(0);">HTML5</a>
                                <a class="btn btn-sm btn-white mt-1" href="javascript:void(0);">CSS</a>
                                <a class="btn btn-sm btn-white mt-1" href="javascript:void(0);">Java
                                    Script</a>
                                <a class="btn btn-sm btn-white mt-1" href="javascript:void(0);">Photo
                                    Shop</a>
                                <a class="btn btn-sm btn-white mt-1" href="javascript:void(0);">Php</a>

                            </div>
                            <div class="card-body">
                                <h5 class="font-weight-semibold">اضافه معلومات</h5>
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
                                <h5 class="font-weight-semibold">اړیکه</h5>
                                <div class="main-profile-contact-list d-lg-flex">
                                    <div class="media me-4">
                                        <div class="media-icon bg-primary-transparent text-primary me-3 mt-1">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted">ټلیفون</small>
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
                                            <small class="text-muted">ایمیل</small>
                                            <div class="font-weight-semibold">
                                                saboorhemat@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-icon bg-info-transparent text-info me-3 mt-1">
                                            <i class="fa-solid fa-map-location"></i>
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted">اوسنی ادرس</small>
                                            <div class="font-weight-semibold">
                                                چهار راهی قمبر، افغانستان
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
