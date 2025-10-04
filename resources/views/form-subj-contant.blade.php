@extends('layout.master')
@section('title', ' ادارة نظام المستخدمين ')
@section('page-title', 'المنهج الدراسى للمواد ')
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
            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body" style="direction: rtl; justify-content: right; text-align: right;">
                            <h4 class="card-title" style="text-align: center;"> <i class="mdi mdi-book font-20 "></i>
                                <strong> المنهج الدراسى </strong>
                            </h4>
                            <form class="m-t-40" novalidate action="" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="wlocation2"> كود المادة الدراسية <span class="danger">*</span>
                                            </label>
                                            <div class="input-group">
                                                <select class="form-control" name="" required
                                                    data-validation-required-message="This field is required">
                                                    <option value="">اختار الكود</option>
                                                    <option value="">AS507</option>
                                                    <option value="">MS507</option>
                                                    <option value="">MS521</option>
                                                    <option value="">AS500</option>
                                                </select>
                                                <span class="input-group-text"><i class="fa fa-book"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wlocation2"> لغة المادة <span class="danger">*</span>
                                            </label>
                                            <div class="input-group">
                                                <select class="form-control" name="" required
                                                    data-validation-required-message="This field is required">
                                                    <option value=""> تختار اللغة</option>
                                                    <option value="AR">اللغة العربية</option>
                                                    <option value="EN">اللغة الانجليزية</option>
                                                </select>
                                                <span class="input-group-text"><i class="fa fa-book"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="webUrl3">رابط درايف ملفات المحاضرات:</label>
                                            <div class="input-group">
                                                <input type="url" class="form-control required" id="webUrl3"
                                                    name="subj-files">
                                                <span class="input-group-text"><i class="fa fa-link"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="webUrl3">رابط فيديوهات المحاضرات:</label>
                                            <div class="input-group">
                                                <input type="url" class="form-control required" id="webUrl3"
                                                    name="subj-files">
                                                <span class="input-group-text"><i class="fa fa-link"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="webUrl3">رابط المحاضرات الاونلاين:</label>
                                            <div class="input-group">
                                                <input type="url" class="form-control required" id="webUrl3"
                                                    name="webUrl3">
                                                <span class="input-group-text"><i class="fa fa-link"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="shortDescription3">اكتب وصف للمادة :</label>
                                            <div class="input-group">
                                                <textarea name="shortDescription" id="shortDescription3" rows="5" class="form-control">
                                                        </textarea>
                                                <span class="input-group-text"><i class="fa fa-file"></i></span>
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
