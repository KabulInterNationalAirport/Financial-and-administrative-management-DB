@extends('layout.master')
@section('contents')
    <div class="page">
        <div class="page-main">
            <div class="app-content main-content">
                <div class="side-app main-container">
                    <!--PAGE HEADER -->
                    <div class="page-header d-xl-flex d-block">
                        <div class="page-leftheader">
                            <div class="page-title">د کارمند اضافه کول</div>
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
                                        <li class="ms-4"><a href="#tab5" class="active" data-bs-toggle="tab">
                                                د شخص معلومات</a></li>
                                        <li><a href="#tab8" data-bs-toggle="tab">اسنادونه</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                                <form action="">

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="card-body">
                                                <div class="card-header">
                                                    <h4 class="mb-4 font-weight-bold">د شخص په اړه معلومات</h4>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">نوم</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control mb-md-0 mb-5"
                                                                placeholder="نوم">
                                                            <span class="text-muted"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">تخلص</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="تخلص">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">د اړیکي شمېره</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                placeholder="د اړیکي شمېره">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">د مقرري تاریخ</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control fc-datepicker"
                                                                placeholder="DD-MM-YYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label">جنسیت</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="custom-controls-stacked d-md-flex">
                                                                <label class="custom-control custom-radio me-4">
                                                                    <input type="radio" class="custom-control-input"
                                                                        name="example-radios4" value="option1">
                                                                    <span class="custom-control-label">نارینه</span>
                                                                </label>
                                                                <label class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input"
                                                                        name="example-radios4" value="option2">
                                                                    <span class="custom-control-label">ښځینه</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">مدني حالت</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select name="projects"
                                                                class="form-control custom-select select2"
                                                                data-placeholder="Select">
                                                                <option label="Select"></option>
                                                                <option value="1">مجرد</option>
                                                                <option value="2">واده شوی</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">ایمیل</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="ایمیل">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2">د کور ادرس</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <textarea rows="3" class="form-control" placeholder="ادرس"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-label mb-0 mt-2">آنځور</div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="form-label"></label>
                                                                <input class="form-control" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab8">
                                            <div class="card-header">
                                                <h4 class="mb-4 font-weight-bold">د شخص مربوطه اسنادونه</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-label mb-0 mt-2">تذکره</div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="form-label"></label>
                                                                <input class="form-control" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-label mb-0 mt-2">ډیپلوم</div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="form-label"></label>
                                                                <input class="form-control" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-label mb-0 mt-2">د انګلیسي ډیپلوم</div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="form-label"></label>
                                                                <input class="form-control" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-label mb-0 mt-2">اضافه اسناد</div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="form-label"></label>
                                                                <input class="form-control" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-end">
                                            <a href="" class="btn btn-primary">Save</a>
                                            <a href="" class="btn btn-danger">Cancel</a>
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
