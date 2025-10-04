@extends('layout.master')
@section('title', ' بيانات المستخدمين ')
@section('page-title', 'بيانات اعضاء هيئة التدريس ')
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
                        <h4 class="card-title">بيانات الدكاترة و المعيدين <i
                                class="mdi mdi-account-multiple font-20 text-muted"></i></h4>
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
                                        <th>الكود</th>
                                        <th>الاسم</th>
                                        <th>الصورة</th>
                                        <th>المسمى الوظيفى</th>
                                        <th>القسم </th>
                                        <th>مكان المكتب</th>
                                        <th>الساعات المكتبية</th>
                                        <th>الرقم القومى</th>
                                        <th>رقم الهاتف</th>
                                        <th>مواد يدرسها الترم الحالى</th>
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
                                        <td>DR- 5767557</td>
                                        <td>صلاح مهدى </td>
                                        <td><img src="{{ asset("assets/images/users/dr/salah.jpg") }}" height="50px" width="50px">
                                        </td>
                                        <td>دكتور</td>
                                        <td>احصاء</td>
                                        <td>مكتب 7 الدور الرابع</td>
                                        <td>From 6pm to 8pm</td>
                                        <td>102354356568998877</td>
                                        <td>010543654647</td>
                                        <td>AS500-CS500</td>
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
                                </span> حذف جميع البيانات
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    @endsection
