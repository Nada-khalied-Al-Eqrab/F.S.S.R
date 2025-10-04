@extends('layout.master')
@section('title', ' ادارة نظام المستخدمين ')
@section('page-title', ' حسابات اعضاء هيئة التدريس ')
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
                            <strong> حسابات اعضاء هيئة التدريس
                            </strong>
                        </h4>
                        <form class="m-t-40" novalidate action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">الاسم الكامل<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="name" required
                                                data-validation-required-message="This field is required">
                                            <span class="input-group-text"><i class="ti ti-user"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">رقم الهاتف</label>
                                        <div class="input-group">
                                            <input type="tel" class="form-control" name="phone">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                    </div>
                                </div>
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
                                        <label class="form-label">المسمى الوظيفي<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <select class="form-control" name="job_title" required
                                                data-validation-required-message="This field is required">
                                                <option value="">اختر المسمى</option>
                                                <option>معيد</option>
                                                <option>دكتور </option>
                                            </select>
                                            <span class="input-group-text"><i class="fa fa-tasks"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">القسم<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <select class="form-control" name="department" required
                                                data-validation-required-message="This field is required">
                                                <option value="">اختر القسم</option>
                                                <option>علوم حاسب</option>
                                                <option>تكنولوجيا ونظم المعلومات</option>
                                                <option>بحوث العمليات </option>
                                                <option>ادارة العمليات</option>
                                                <option>احصاء حيوى و سكانى</option>
                                                <option>إحصاء</option>
                                            </select>
                                            <span class="input-group-text"><i class="fa fa-tasks"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">مكان المكتب<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="office_place" required
                                                data-validation-required-message="This field is required">
                                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">الساعات المكتبية<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <label>
                                                من
                                            </label>
                                            <input type="time" class="form-control" name="office_hours" required
                                                data-validation-required-message="This field is required">
                                            <span class="input-group-text"><i class="fa fa-hourglass-half"></i></span>
                                            <label> الى
                                            </label>
                                            <input type="time" class="form-control" name="office_hours" required
                                                data-validation-required-message="This field is required">
                                            <span class="input-group-text"><i class="fa fa-hourglass-half"></i></span>
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
