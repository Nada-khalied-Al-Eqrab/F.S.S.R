@extends('layout.master')
@section('title', 'الصفحة الشخصية')
@section('page-title', 'الصفحة الشخصية')
@section('contant')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            <img src="{{ asset("assets/images/users/1.jpg") }}" class="rounded-circle" width="150" />
                            <h4 class="card-title m-t-10">على احمد عاطف</h4>
                            <h6 class="card-subtitle ">ادارة المنصة الدراسية</h6>
                            <h6 class="card-subtitle">EM - 34989767788</h6>
                        </center>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <small class="text-muted"> مكان العمل </small>
                        <h6>كلية الدراسات العليا للبحوث الاحصائية</h6>
                        <br />
                        <small class="text-muted p-t-30 db">رقم الهاتف / الوتساب: </small>
                        <h6>+(20) 1034688362</h6>
                        <br />
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Tabs -->
                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist" style=" margin:auto;">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#current-month"
                                role="tab" aria-controls="pills-timeline" aria-selected="true">لوحة الادوات </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month"
                                role="tab" aria-controls="pills-setting" aria-selected="false">الاعدادات</a>
                        </li>
                    </ul>
                    <!-- Tabs -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="current-month" role="tabpanel"
                            aria-labelledby="pills-timeline-tab">
                            <div class="card-body" style="text-align: center;">
                                <h4>لوحة الادوات الخاصة بالمنصة </h4>
                                <p>
                                    يمكنك الان الوصول الى كافة الادوات المتاحة لك بسرعة وسهولة
                                </p>
                                <div class="row" style="justify-content: center;">
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <div class="list-group" style="text-align: center;">
                                            <!-- الزر الأساسي -->
                                            <a href="#subjManagementdata" class="list-group-item active btn-outline-primary"
                                                data-toggle="collapse" role="button" aria-expanded="false"
                                                aria-controls="userManagement">
                                                <i class="fas fa-chevron-down"></i>
                                                بيانات المحتوى
                                            </a>
                                            <!-- القائمة المنسدلة -->
                                            <div class="collapse mt-2" id="subjManagementdata">
                                                <a class="list-group-item" href="table-subj.html">
                                                    بيانات المواد الدراسية
                                                </a>
                                                <a class="list-group-item" href="table-file.html">
                                                    بيانات الملفات
                                                </a>
                                                <a class="list-group-item" href="table-study.html">
                                                    بيانات الجداول الدراسية
                                                </a>
                                                <a class="list-group-item" href="table-ex.html">
                                                    بيانات جداول الامتحانات
                                                </a>
                                                <a class="list-group-item" href="table-places.html">
                                                    بيانات اماكن القاعات و المعامل
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <div class="list-group" style="text-align: center;">
                                            <!-- الزر الأساسي -->
                                            <a href="#subjManagement" class="list-group-item active btn-outline-primary"
                                                data-toggle="collapse" role="button" aria-expanded="false"
                                                aria-controls="userManagement">
                                                <i class="fas fa-chevron-down"></i>
                                                ادارة المحتوى
                                            </a>
                                            <!-- القائمة المنسدلة -->
                                            <div class="collapse mt-2" id="subjManagement">
                                                <a class="list-group-item" href="form-add-subj.html">
                                                    اضافة مادة دراسية
                                                </a>
                                                <a class="list-group-item" href="form-place.html">
                                                    اضافة اماكن القاعات و المعامل
                                                </a>
                                                <a class="list-group-item" href="form-file.html">
                                                    اضافة ملف
                                                </a>
                                                <a class="list-group-item" href="form-study-schedule.html">
                                                    اضافة جدول دراسى
                                                </a>
                                                <a class="list-group-item" href="form-exam-schedule.html">
                                                    اضافة جدول امتحانات
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="justify-content: center;">
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <div class="list-group" style="text-align: center;">
                                            <!-- الزر الأساسي -->
                                            <a href="#userManagementdata" class="list-group-item active btn-outline-primary"
                                                data-toggle="collapse" role="button" aria-expanded="false"
                                                aria-controls="userManagement">
                                                <i class="fas fa-chevron-down"></i>
                                                بيانات المستخدمين
                                            </a>
                                            <!-- القائمة المنسدلة -->
                                            <div class="collapse mt-2" id="userManagementdata">
                                                <a class="list-group-item" href="table-dr.html">
                                                    بيانات الدكتور
                                                </a>
                                                <a class="list-group-item" href="table-st.html">
                                                    بيانات الطالب
                                                </a>
                                                <a class="list-group-item" href="table-em.html">
                                                    بيانات الموظف
                                                </a>
                                                <a class="list-group-item" href="table-subj-study.html">
                                                    بيانات مناهج المواد الدراسية
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <div class="list-group" style="text-align: center;">
                                            <!-- الزر الأساسي -->
                                            <a href="#userManagement" class="list-group-item active btn-outline-primary"
                                                data-toggle="collapse" role="button" aria-expanded="false"
                                                aria-controls="userManagement">
                                                <i class="fas fa-chevron-down"></i>
                                                إدارة نظام المستخدمين
                                            </a>
                                            <!-- القائمة المنسدلة -->
                                            <div class="collapse mt-2" id="userManagement">
                                                <a class="list-group-item" href="form-dr.html">
                                                    اضافة دكتور
                                                </a>
                                                <a class="list-group-item" href="form-st.html">
                                                    اضافة طالب
                                                </a>
                                                <a class="list-group-item" href="form-dr-subj.html">
                                                    اضافة دكتور لمادة دراسية
                                                </a>
                                                <a class="list-group-item" href="form-subj-contant.html">
                                                    اضافة منهج مادة دراسية
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('partial.profile-tab')
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
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
