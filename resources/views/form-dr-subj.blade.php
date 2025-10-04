@extends('layout.master')
@section('title', 'ادارة نظام المستخدمين ')
@section('page-title', 'تخصيص مادة دراسية لعضو هيئة تدريس ')
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
                    <h4 class="card-title" style="text-align: center;"> <i class="mdi mdi-account-key font-20 "></i>
                        <strong> تخصيص مادة لعضو هيئة تدريس
                        </strong>
                    </h4>
                    <form class="m-t-40" novalidate action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h4> اسم دكتور المادة</h4>
                                    <div class="controls input-group">
                                        <select name="select" id="select" required class="form-control">
                                            <option value="">اختر الدكتور </option>
                                            <option value="1">الدكتور صلاح </option>
                                            <option value="2">الدكتورة زينب </option>
                                            <option value="3">الدكتورة شهيرة </option>
                                            <option value="4">الدكتور حجازى </option>
                                        </select>
                                        <span class="input-group-text"><i class="fa fa-tasks"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h4> كود المادة</h4>
                                    <div class="controls input-group">
                                        <select name="select" id="select" required class="form-control">
                                            <option value="">اختر المادة </option>
                                            <option value="1">ms521 </option>
                                            <option value="2">cs500</option>
                                            <option value="3">ms500</option>
                                            <option value="4">as500</option>
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
