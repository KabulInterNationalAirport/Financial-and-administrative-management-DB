@extends('financial-administrative-directorate.property.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- ROW -->
            <!-- PAGE HEADER -->
            <div class="page-header d-block">
                <div class="text-center">
                    <div class="page-title">د نوي استلام اضافه کول</div>
                </div>
            </div>
            <!-- END PAGE HEADER -->
            <div class="main-proifle mt-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab5">
                        <div class="card-body">
                            <form action="">
                                <div class="card-header">
                                    <h4 class="mb-4 font-weight-bold">د استلام په اړه معلومات</h4>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label ">د شرکت نوم</label>
                                            <input type="text" class="form-control" placeholder="د شرکت نوم">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">تاریخ</label>
                                            <input type="text" class="form-control fc-datepicker"
                                                placeholder="DD-MM-YYY">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label ">د موټرو تعداد</label>
                                                <input type="number" class="form-control mb-md-0 mb-5"
                                                    placeholder="د موټرو تعداد">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">تعقیبي شخص</label>
                                            <input type="text" class="form-control" placeholder=" تعقیبي شخص">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label ">د تیلو اندازه</label>
                                            <input type="text" class="form-control" placeholder="د ځمکي اندازه">
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
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">د استلام انځورونه :</label>
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
