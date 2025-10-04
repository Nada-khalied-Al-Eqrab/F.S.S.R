@extends('layout.master')
@section('title', 'بيانات المستخدمين ')
@section('page-title', ' بيانات المناهج الدراسية ')
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
                        <h4 class="card-title">بيانات المناهج الدراسية للمواد <i class="mdi mdi-book font-20 text-muted"></i>
                        </h4>
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
                                        <th>العام</th>
                                        <th>كود المادة</th>
                                        <th> لينك الملفات</th>
                                        <th>لينك الفيديوهات</th>
                                        <th>لينك المحاضرات الاون لاين</th>
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
                                                            class="ti-pencil-alt"></i> تعديل </a>
                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                            class="ti-trash"></i> حذف</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2026</td>
                                        <td>AS500</td>
                                        <td><a href=" "><i class="mdi mdi-link font-20 text-muted"></i></a>
                                        </td>
                                        <td><a href=" "><i class="mdi mdi-link font-20 text-muted"></i></a>
                                        </td>
                                        <td><a href="   "><i class="mdi mdi-link font-20 text-muted"></i>
                                            </a></td>
                                        <td>6-8-2026</td>
                                        <td>7-8-2026</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br><br>
                        <!-- زر حذف الكل -->
                        <div style="text-align: center;">
                            <button class="btn btn-primary btn-sm">
                                <span>
                                    <i class="ti-trash"></i>
                                </span> حذف جميع الإشعارات
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
