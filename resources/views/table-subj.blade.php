@extends('layout.master')
@section('title', ' بيانات المحتوى ')
@section('page-title', ' بيانات مواد الدبلومات الاكاديمية ')
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
                        <h4 class="card-title">بيانات المواد الدراسية للمواد <i class="mdi mdi-book font-20 text-muted"></i>
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
                                        <th>كود المادة</th>
                                        <th>صورة المادة</th>
                                        <th>اسم المادة بالعربي</th>
                                        <th>اسم المادة بالانجليزي</th>
                                        <th> وصف المادة</th>
                                        <th>متطلبات المادة</th>
                                        <th>دبلوم</th>
                                        <th> قسم المادة</th>
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
                                        <td>AS500</td>
                                        <td>
                                            <img src="{{ asset("assets/images/diploma/subj/General/AS500.png") }}" height="50px"
                                                width="70px">
                                        </td>
                                        <td>الطرق الاحصائية</td>
                                        <td>
                                            Statistical Methods
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#descModal1">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <!-- المودال -->
                                            <div class="modal fade" id="descModal1" tabindex="-1" role="dialog"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">وصف المادة </h4>

                                                        </div>
                                                        <div class="modal-body" style="text-align: right;">
                                                            هذا المقرر يهدف إلى تزويد الطلاب بالأسس النظرية
                                                            والتطبيقية لعلم الإحصاء،
                                                            مع التركيز على الإحصاء الوصفي والاستدلالي وتطبيقاته
                                                            العملية.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">إغلاق</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>لايوجد</td>
                                        <td>
                                            <select name="select" id="select" required="" class="form-control">
                                                <option value="">اختر الدبلوم</option>
                                                <option value="1">دبلوم علوم حاسب </option>
                                                <option value="2">دبلوم احصاء </option>
                                                <option value="3">دبلوم بحوث عمليات </option>
                                                <option value="4">دبلوم ادارة عمليات </option>
                                                <option value="5">دبلوم نظم وتكنولوجيا المعلومات </option>
                                                <option value="6">دبلوم الاحصاء الحيوى والسكانى </option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="select" id="select" required="" class="form-control">
                                                <option value="">اختر القسم</option>
                                                <option value="1">متطلبات عامة </option>
                                                <option value="2">المقررات الدراسية الاجبارية </option>
                                                <option value="3">المقررات الدراسية الاختيارية </option>
                                                <option value="4">المقررات الدراسية للدراسات الفرعية</option>
                                            </select>
                                        </td>
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
