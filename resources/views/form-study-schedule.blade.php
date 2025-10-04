@extends('layout.master')
@section('title', ' ادارة المحتوى ')
@section('page-title', ' جداول المحاضرات و السكاشن ')
@section('contant')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
    @include('partial.banner')
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" style="direction: rtl; justify-content: right; text-align: right;">
                        <h4 class="card-title" style="text-align: center;"> <i
                                class="mdi mdi-lightbulb-on-outline font-20 "></i> <strong> المحاضرات و السكاشن

                            </strong> </h4>
                        <form class="form-horizontal m-t-30" action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">كود المادة</label>
                                        <div class="input-group">
                                            <select class="form-control" name="job_title" required
                                                data-validation-required-message="This field is required">
                                                <optgroup label=" كود المادة">
                                                    <option value="">CS 500</option>
                                                    <option value="">CS 503</option>
                                                    <option value="">CS 504</option>
                                                    <option value="">CS 515</option>
                                                    <option value="">CS 522</option>
                                                    <option value="">MS 521</option>
                                                    <option value="">MS 500</option>
                                                </optgroup>
                                            </select>
                                            <span class="input-group-text"><i class="fa fa-book"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">اليوم</label>
                                        <div class="input-group">
                                            <select class="form-control" name="job_title" required
                                                data-validation-required-message="This field is required">
                                                <optgroup label="ايام الاسبوع">
                                                    <option value="">السبت</option>
                                                    <option value="">الاحد</option>
                                                    <option value="">الاثنين</option>
                                                    <option value="">الثلاثاء</option>
                                                    <option value="">الاربعاء</option>
                                                    <option value="">الخميس</option>
                                                    <option value="">الجمعه</option>
                                                </optgroup>
                                            </select>
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">وقت بداية المحاضرة</label>
                                        <div class="input-group">
                                            <input type="time" class="form-control">
                                            <span class="input-group-text"> <i class=" fas fa-hourglass-half"></i></span>
                                        </div>
                                        <label class="form-label">وقت نهاية المحاضرة</label>
                                        <div class="input-group">
                                            <input type="time" class="form-control">
                                            <span class="input-group-text"> <i class=" fas fa-hourglass-half"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"> المكان <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <select class="form-control" name="job_title" required
                                                data-validation-required-message="This field is required">
                                                <optgroup label="القاعات و المدرجات و المعامل">
                                                    <option value="">قاعه الشافعي</option>
                                                    <option value="">قاعة 5</option>
                                                    <option value="">مدرج الكبير</option>
                                                </optgroup>
                                            </select>
                                            <span class="input-group-text"> <i class=" fas fa-home"></i></span>
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
        <!-- ============================================================== -->
@endsection
