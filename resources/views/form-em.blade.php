@extends('layout.master')
@section('title', 'ادارة نظام المستخدمين ')
@section('page-title', ' الموظفين المسجلين بالكلية ')
@section('contant')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        @include('partial.banner')
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" style="direction: rtl; justify-content: right; text-align: right;">
                        <h4 class="card-title" style="text-align: center;"> <i class="mdi mdi-account-key font-20 "></i>
                            <strong> الموظفين المسجلين بالكلية
                            </strong>
                        </h4>
                        <form class="m-t-40" novalidate action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">الكود <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="doctor_code" required
                                                data-validation-required-message="This field is required">
                                            <span class="input-group-text"><i class="mdi mdi-account-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"> الوظيفة<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <select class="form-control" name="job_title" required
                                                data-validation-required-message="This field is required">
                                                <option value="">اختر الوظيفة</option>
                                                <option>مدير المنصة</option>
                                                <option>مشرف </option>
                                            </select>
                                            <span class="input-group-text"><i class="fa fa-tasks"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">الرقم القومي<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="national_id" required
                                                data-validation-required-message="This field is required">
                                            <span class="input-group-text"><i class="mdi mdi-account-edit"></i></span>
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
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
