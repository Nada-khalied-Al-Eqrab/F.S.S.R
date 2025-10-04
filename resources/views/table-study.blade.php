@extends('layout.master')
@section('title', 'بيانات المحتوى ')
@section('page-title', 'بيانات مواعيد محاضرات الدراسة ')
@section('contant')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        @include('partial.banner')
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card" style="justify-content: center;text-align: center;">
                    <div class="card-body">
                        <h4 class="card-title">بيانات مواعيد المحاضرات و السكاشن <i
                                class="mdi mdi-clock font-20 text-muted"></i></h4>
                        <h6 class="card-subtitle">يمكنك الان الاطلاع على جميع البيانات كما يمكنك الاضافة و الحذف
                            و التعديل</h6>
                        <div class="table-responsive">
                            <table id="file_export" class="table table-striped table-bordered" style="direction: rtl;">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customControlValidation1" required>
                                                <label class="custom-control-label" for="customControlValidation1"></label>
                                            </div>
                                        </th>
                                        <th>الاعدادات</th>
                                        <th>كود المادة</th>
                                        <th>اليوم</th>
                                        <th>الوقت</th>
                                        <th>المكان</th>
                                        <th>تاريخ الاضافة</th>
                                        <th>تاريخ التحديث</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customControlValidation2" required>
                                                <label class="custom-control-label" for="customControlValidation2"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-dark dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-settings"></i>
                                                </button>
                                                <div class="dropdown-menu animated slideInUp" x-placement="bottom-start"
                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                            class="ti-eye"></i> Open</a>
                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                            class="ti-pencil-alt"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                            class="ti-trash"></i> Delete</a>
                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                            class="ti-comment-alt"></i> Comments</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>CS500</td>
                                        <td><select name="select" id="select" required="" class="form-control">
                                                <option value="">اختر اليوم</option>
                                                <option value="1">السبت</option>
                                                <option value="2">الاحد</option>
                                                <option value="3">الاثنين </option>
                                                <option value="4">الثلاثاء</option>
                                                <option value="5">الاربعاء </option>
                                                <option value="6"> الخميس</option>
                                            </select>
                                        </td>
                                        <td>from 07:00 to 10:00</td>
                                        <td>قاعة عبد المنعم الشافعى</td>
                                        <td>5-9-2025</td>
                                        <td>5-9-2025</td>
                                    </tr>
                            </table>
                        </div>
                        <br><br>
                        <!-- زر حذف الكل -->
                        <div style="text-align: center;">
                            <button class="btn btn-primary btn-sm">
                                <span>
                                    <i class="ti-trash"></i>
                                </span> حذف جميع البيانات
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
