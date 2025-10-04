@extends('layout.master')
@section('title', 'ادارة المحتوى')
@section('page-title', 'الامتحانات')
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
                        <h4 class="card-title" style="text-align: center;"> <i
                                class="mdi mdi-lightbulb-on-outline font-20 "></i> <strong> الامتحانات
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
                                            <span class="input-group-text"><i class="fa fa-tasks"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">نوع الامتحان</label>
                                        <div class="input-group">
                                            <select class="form-control">
                                                <option value="">اختر نوع الامتحان</option>
                                                <option value="">شهري</option>
                                                <option value="">أسبوعي</option>
                                                <option value="">تدريبي</option>
                                                <option value="">فاينل</option>
                                                <option value="">ميدترم</option>
                                            </select>
                                            <span class="input-group-text"><i class="fa fa-tasks"></i></span>
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
                                        <label class="form-label">التاريخ</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">الوقت</label>
                                        <div class="input-group">
                                            <input type="time" class="form-control">
                                            <span class="input-group-text"> <i class=" fas fa-hourglass-half"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">عدد الساعات</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="أدخل عدد الساعات">
                                            <span class="input-group-text"> <i class=" far fa-clock"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label class="form-label">نوع الامتحان <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <select class="form-control" id="examType" onchange="toggleExamLink()"
                                                    name="job_title" required
                                                    data-validation-required-message="This field is required">
                                                    <option value="">-- اختر نوع الامتحان --</option>
                                                    <option value="in-person">حضوري داخل الكلية</option>
                                                    <option value="online">أونلاين</option>
                                                </select>
                                                <span class="input-group-text"><i class="fa fa-tasks"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- حقل لينك الامتحان (مخفي في البداية) -->
                                <div class="col-md-12" id="examLinkField" style="display: none;">
                                    <div class="form-group">
                                        <label class="form-label">لينك الامتحان</label>
                                        <div class="input-group">
                                            <input type="url" class="form-control"
                                                placeholder="إذا كان الامتحان أونلاين أدخل الرابط هنا">
                                            <span class="input-group-text"><i class="fa fa-link"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function toggleExamLink() {
                                        var examType = document.getElementById("examType").value;
                                        var examLinkField = document.getElementById("examLinkField");
                                        if (examType === "online") {
                                            examLinkField.style.display = "block";
                                        } else {
                                            examLinkField.style.display = "none";
                                        }
                                    }
                                </script>
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
@endsection
