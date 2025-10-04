@extends('layout.master')
@section('title', ' ادارة نظام المستخدمين ')
@section('page-title', 'حسابات الطلاب ')
@section('contant')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        @include('partial.banner')
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" style="direction: rtl; justify-content: right; text-align: right;">
                        <h4 class="card-title" style="text-align: center;"> <i class="mdi mdi-account-key font-20 "></i>
                            <strong> حسابات الطلاب </strong>
                        </h4>
                        <form class="m-t-40" novalidate action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>اسم الطالب <span class="text-danger">*</span></h5>
                                        <div class="controls input-group">
                                            <input type="text" name="text" class="form-control" required
                                                data-validation-required-message="هذا الحقل مطلوب "
                                                placeholder="اسم الطالب ">
                                            <span class="input-group-text"><i class="ti ti-user"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>كود الطالب <span class="text-danger">*</span></h5>
                                        <div class="controls input-group">
                                            <input type="text" name="text" class="form-control" required
                                                data-validation-required-message="هذا الحقل مطلوب "
                                                placeholder="ادخل كود الطالب ">
                                            <span class="input-group-text"><i class="mdi mdi-account-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>الرقم القومى <span class="text-danger">*</span></h5>
                                        <div class="controls input-group">
                                            <input type="text" name="text" class="form-control" required
                                                data-validation-required-message="هذا الحقل مطلوب "
                                                placeholder="ادخل الرقم القومى للطالب ">
                                            <span class="input-group-text"><i class="mdi mdi-account-edit"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>تخصص الدبلوم <span class="text-danger">*</span></h5>
                                        <div class="controls input-group">
                                            <select name="select" id="select" required class="form-control">
                                                <option value="">اختر الدبلوم</option>
                                                <option value="1">دبلوم علوم حاسب </option>
                                                <option value="2">دبلوم احصاء </option>
                                                <option value="3">دبلوم بحوث عمليات </option>
                                                <option value="4">دبلوم ادارة عمليات </option>
                                                <option value="5">دبلوم نظم وتكنولوجيا المعلومات </option>
                                                <option value="6">دبلوم الاحصاء الحيوى والسكانى </option>
                                            </select>
                                            <span class="input-group-text"><i class="fa fa-tasks"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>رقم الهاتف <span class="text-danger">*</span></h5>
                                        <div class="controls input-group">
                                            <input type="text" name="text" class="form-control" required
                                                data-validation-required-message="هذا الحقل مطلوب "
                                                placeholder="ادخل رقم الهاتف ">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="text-align: center;">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary px-4">
                                        <i class="fas fa-plus"></i> إضافة
                                    </button>
                                    <button type="submit" class="btn btn-secondary px-4">
                                        <i class="fas fa-edit"></i> تحديث
                                    </button>
                                </div>
                        </form>
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
