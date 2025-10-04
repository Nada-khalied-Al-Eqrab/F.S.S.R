@extends('layout.master')
@section('title', 'ادارة المحتوى')
@section('page-title', 'ادارة المواد الدراسية')
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
                        <h4 class="card-title" style="text-align: center;"> <i class="mdi mdi-library font-20 "></i> <strong>
                                المواد الدراسية الخاصة بالدبلومات
                                الاكاديمية
                            </strong> </h4>
                        <form class="form-horizontal m-t-30" action="" method="POST">
                        @csrf
                            <div class="form-group">
                                <div class="form-group text-center">
                                    <img id="preview" src="{{ asset("assets/images/diploma/subj.png") }}" alt="Profile Picture"
                                        style="width: 300px; height: 150px; object-fit: cover; border: 3px solid #6a7a8c; margin-bottom: 15px;">
                                    <div>
                                        <label class="btn btn-outline-primary mt-2" for="profileImage">
                                            <i class="fas fa-upload"></i> رفع صورة المادة
                                        </label>
                                        <input type="file" id="profileImage" accept="image/*" style="display: none;"
                                            onchange="previewImage(event)" required
                                            data-validation-required-message="This field is required">
                                    </div>
                                </div>
                                <script>
                                    function previewImage(event) {
                                        const image = document.getElementById('preview');
                                        image.src = URL.createObjectURL(event.target.files[0]);
                                    }
                                </script>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">كود المادة <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="كود المادة">
                                            <span class="input-group-text"><i class="fa fa-book"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"> متطلبات المادة <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <select class="form-control" name="job_title" required
                                                data-validation-required-message="This field is required">
                                                <option selected>ليس لها متطلبات</option>
                                                <option selected>CS500</option>
                                                <option selected>CS503</option>
                                                <option selected>PP501</option>
                                            </select>
                                            <span class="input-group-text"><i class="fa fa-tasks"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">اسم المادة باللغة العربية <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="اسم المادة بالعربي">
                                            <span class="input-group-text"><i class="fa fa-language"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label class="form-label">اسم المادة باللغة الانجليزية <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" value="اسم المادة الانجليزي">
                                                <span class="input-group-text"><i class="fa fa-language"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">وصف المادة <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="وصف المادة">
                                            <span class="input-group-text"><i class="fa fa-file"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"> دبلوم <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <select class="form-control" name="job_title" required
                                                data-validation-required-message="This field is required">
                                                <option selected> علوم حاسب</option>
                                                <option selected>نظم وتكنولوجيا المعلومات</option>
                                                <option selected>الاحصاء الرياضي</option>
                                                <option selected>الاحصاء التطبيقي والاقتصاد القياسي</option>
                                                <option selected> الاحصاءالحيوي والسكاني</option>
                                                <option selected> بحوث وادارةالعمليات</option>
                                            </select>
                                            <span class="input-group-text"><i class="fa fa-tasks"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">قسم المادة <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <select class="form-control" name="job_title" required
                                                data-validation-required-message="This field is required">
                                                <option selected> متطلبات عامة</option>
                                                <option selected> المقررات الدراسية الاختيارية</option>
                                                <option selected> المقررات الدراسيةالاجبارية</option>
                                                <option selected> المقررات الدراسية للتخصصات الفرعية</optio>
                                            </select>
                                            <span class="input-group-text"><i class="fa fa-tasks"></i></span>
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
