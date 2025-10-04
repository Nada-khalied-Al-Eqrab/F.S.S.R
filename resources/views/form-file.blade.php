@extends('layout.master')
@section('title', 'ادارة المحتوى ')
@section('page-title', 'الملفات المهمة ')
@section('contant')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        @include('partial.banner')
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="direction: rtl; justify-content: right; text-align: right;">
                    <h4 class="card-title" style="text-align: center;"> <i class="mdi mdi-book font-20 "></i>
                        <strong>
                            ملفات مهمة
                        </strong>
                    </h4>
                    <form class="m-t-40" novalidate action="" method="POST">
                        @csrf
                        <!-- رفع الملف بشكل أنيق -->
                        <div class="form-group text-center">
                            <h5 class="mb-3">رفع الملف <span class="text-danger">*</span></h5>
                            <!-- الـ input المخفي -->
                            <input type="file" id="fileInput" name="file" class="d-none" required>
                            <!-- الزر المخصص -->
                            <label for="fileInput" class="btn btn-outline-primary btn-lg shadow-sm">
                                <i class="fas fa-upload"></i> اختر الملف
                            </label>
                            <!-- اسم الملف بعد الرفع -->
                            <p id="fileName" class="mt-2 text-muted" style="font-style: italic;">لم يتم اختيار
                                ملف بعد</p>
                        </div>
                        <!-- نافذة العرض -->
                        <div class="modal fade" id="fileModal" tabindex="-1" role="dialog"
                            aria-labelledby="fileModalLabel" aria-hidden="true" style="direction: ltr;">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="fileModalLabel">معاينة الملف</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <iframe id="filePreview" src="" width="100%" height="600px"
                                            style="border: none;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- JS -->
                        <script>
                            document.getElementById("fileInput").addEventListener("change", function(event) {
                                const file = event.target.files[0];
                                if (file) {
                                    document.getElementById("fileName").textContent = "📂 " + file.name;
                                    const fileURL = URL.createObjectURL(file);
                                    document.getElementById("filePreview").src = fileURL;
                                    $('#fileModal').modal('show');
                                } else {
                                    document.getElementById("fileName").textContent = "لم يتم اختيار ملف بعد";
                                }
                            });
                        </script>
                        <div class="form-group">
                            <h5>اسم الملف <span class="text-danger">*</span></h5>
                            <div class="controls input-group">
                                <input type="text" name="text" class="form-control" required
                                    data-validation-required-message="This field is required">
                                <span class="input-group-text"><i class="fa fa-book"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>وصف الملف <span class="text-danger">*</span></h5>
                            <div class="controls input-group">
                                <textarea name="textarea" id="textarea" class="form-control" required placeholder="وصف الملف "></textarea>
                                <span class="input-group-text"><i class="fa fa-pencil-alt"></i></span>
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
