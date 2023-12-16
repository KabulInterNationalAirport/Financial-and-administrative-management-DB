@extends('payroll-management.layout.master')
@section('contents')
    <div class="app-content main-content">
        <div class="side-app main-container">
            <!-- PAGE HEADER -->
            <div class="page-header d-xl-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title" dir="rtl"><span class="font-weight-normal text-muted ms-2"></span>
                          د هوايي ډګر عمومي تشکیل لیست</div>
                </div>
                <div class="modal fade" id="staffModal" tabindex="-1" aria-labelledby="staffModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staffModalLabel">نوی تشکیل اضافه کړۍ</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div>
                                        <label for="position-name" class="col-form-label">د بست نوع:</label>
                                            <select name="" class="form-control custom-select select2"
                                            data-placeholder="د بست نوع">
                                            <option label="د بست نوع"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="item-name" class="col-form-label">تعداد:</label>
                                        <input type="number" class="form-control" id="quantity">
                                    </div>
                                    <div>
                                        <label for="item-name" class="col-form-label">معاش:</label>
                                        <input type="number" class="form-control" id="salary">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بند کړۍ</button>
                                        <button type="button" class="btn btn-primary">ذخیره کړۍ</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
                <!--END PAGE HEADER -->
                <!-- ROW -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-11">
                        <div class="card">
                            <div class="card-header  border-0">
                                <h4 class="page-title">د بستونو لیست</h4>
                                <div class="page-rightheader ms-md-auto">
                                    <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
                                        <div class="btn-list">
                                            <button class="btn btn-primary" data-bs-target="#staffModal" data-bs-toggle="modal">تشکیل اضافه کړۍ<i
                                                class="fa-solid fa-plus"></i></button>
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-center  table-vcenter text-nowrap table-bordered border-bottom"
                                        id="emp-attendance">
                                        <thead class="bg-info">
                                            <tr>
                                                <th>نمبر</th>
                                                <th>د بست نوع</th>
                                                <th>د بست تعداد</th>
                                                <th>معاش</th>
                                                <th>مجموعه</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>4</td>
                                                <td>120</td>
                                                <td>25000</td>
                                                <td>356674</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>40</td>
                                                <td>30000</td>
                                                <td>1234567</td>
                                            </tr>
                                            <tr>
                                                <th colspan="4">د معاشاتو میاشتنی مقدار</th>
                                                <th>1500000</th>
                                              </tr>
                                            <tr>
                                                <th colspan="4">د معاشاتو کلنی مقدار</th>
                                                <th>1500000</th>
                                              </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="footer">
                                <button class="btn btn-info " onClick="javascript:window.print();"><i
                                        class="si si-printer"></i> Print</button>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->
                </div>
            </div>
        @endsection
