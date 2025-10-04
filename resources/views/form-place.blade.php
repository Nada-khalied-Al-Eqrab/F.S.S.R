@extends('layout.master')
@section('title', 'ادارة المحتوى ')
@section('page-title', 'القاعات و المدرجات و المعامل ')
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
                        <h4 class="card-title" style="text-align: center;"> <i class="mdi mdi-home font-20 "></i> <strong>
                                القاعات و المدرجات و المعامل
                            </strong> </h4>
                        <form class="m-t-40" novalidate action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label"> اسم القاعة <span class="text-danger">*</span></label>
                                        <div class="controls input-group">
                                            <input type="text" name="text" class="form-control" required
                                                data-validation-required-message="This field is required">
                                            <span class="input-group-text"><i class="fa fa-desktop"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label"> اسم المبنى <span class="text-danger">*</span></label>
                                        <div class="controls input-group">
                                            <input type="text" name="text" class="form-control" required
                                                data-validation-required-message="This field is required">
                                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label"> الدور <span class="text-danger">*</span></label>
                                        <div class="controls input-group">
                                            <input type="text" name="text" class="form-control" required
                                                data-validation-required-message="This field is required">
                                            <span class="input-group-text"><i class="fa fa-table"></i></span>
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
