@extends('property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- ROW -->
            <!-- PAGE HEADER -->
            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">د نوي قرار داد اضافه کول</div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <div class="main-proifle mt-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab5">
                        <div class="card-body">
                            <form action="">
                                <div class="card-header">
                                    <h4 class="mb-4 font-weight-bold">د قرار داد په اړه معلومات</h4>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label ">د قرار داد نمبر</label>
                                                <input type="number" class="form-control mb-md-0 mb-5"
                                                    placeholder="د قرار داد نمبر">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">قرار داد</label>
                                            <input type="text" class="form-control" placeholder="قرار داد">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">د قرار داد وجه </label>
                                            <input type="text" class="form-control" placeholder="د قرار داد وجه ">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">موقیعت</label>
                                            <input type="text" class="form-control" placeholder="موقیعت">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">د ځمکي اندازه</label>
                                            <input type="text" class="form-control" placeholder="د ځمکي اندازه">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">د قرار داد کمپنۍ</label>
                                            <input type="text" class="form-control" placeholder="د قرار داد کمپنۍ">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label ">د اجرأ کوونکي نمبر</label>
                                            <input type="number" class="form-control" placeholder="د اجرأ کوونکي نمبر">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">د شروع تاریخ</label>
                                            <input type="text" class="form-control fc-datepicker"
                                                placeholder="DD-MM-YYY">
                                        </div>
                                        <div class="col-md-6">
                                                    <label class="form-label ">د پای تاریخ</label>
                                                        <input type="text" class="form-control fc-datepicker"
                                                            placeholder="DD-MM-YYY">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label ">اضافه معلومات</label>
                                                        <textarea rows="3" class="form-control" placeholder="اضافي معلومات"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-controls-stacked d-md-flex">
                                                <label class="form-label me-5 ms-5">د قرار داد حالت:</label>
                                                <label class="custom-control custom-radio success me-4">
                                                    <input type="radio" class="custom-control-input" name="example-radios1" value="option1">
                                                    <span class="custom-control-label">تکمیل</span>
                                                </label>
                                                <label class="custom-control custom-radio success me-4">
                                                    <input type="radio" class="custom-control-input" name="example-radios1" value="option2">
                                                    <span class="custom-control-label">په حال دي جریان</span>
                                                </label>
                                                <label class="custom-control custom-radio success">
                                                    <input type="radio" class="custom-control-input" name="example-radios1" value="option3">
                                                    <span class="custom-control-label">نوی</span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label">د قرار داد انځورونه :</label>
                                                        <label class="form-label"></label>
                                                            <input class="form-control" multiple type="file">
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="card-footer text-start">
                                                <a href="" class="btn btn-primary">ذخیره</a>
                                                <a href="" class="btn btn-danger">لغوه</a>
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
