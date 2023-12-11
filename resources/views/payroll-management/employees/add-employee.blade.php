@extends('payroll-management.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">د نوي کارمند اضافه کول</div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <div class="main-proifle mt-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab5">
                        <div class="card-body">
                            <form action="">
                                <div class="card-header">
                                    <h4 class="mb-4 font-weight-bold">د کارمند معلومات</h4>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label ">نوم</label>
                                                <input type="text" class="form-control mb-md-0 mb-5" placeholder="نوم">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">Name</label>
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">تخلص</label>
                                            <input type="text" class="form-control" placeholder="تخلص">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">د پلار نوم</label>
                                            <input type="text" class="form-control" placeholder="د پلار نوم">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">Father Name</label>
                                            <input type="text" class="form-control" placeholder="Father Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">د زوکړي نیټه</label>
                                            <input type="text" class="form-control fc-datepicker"
                                                placeholder="DD-MM-YYY">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">د مقررۍ تاریخ</label>
                                            <input type="text" class="form-control fc-datepicker"
                                                placeholder="DD-MM-YYY">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">بست</label>
                                            <select name="" class="form-control custom-select select2"
                                            data-placeholder="بست">
                                            <option label="بست"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">د تحصیل درجه :</label>
                                            <select name="" class="form-control custom-select select2"
                                                data-placeholder="د تحصیل درجه">
                                                <option label="تحصیل درجه"></option>
                                                <option value="1">لیسانس</option>
                                                <option value="2">ماسټر</option>
                                                <option value="3">دوکتور</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label ">د بانک کارت</label>
                                                <input type="text" class="form-control" placeholder="د بانک کارت">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label ">تلیفون نمبر</label>
                                                <input type="text" class="form-control" placeholder="تلیفون نمبر">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label">د کارمند اسنادونه :</label>
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
