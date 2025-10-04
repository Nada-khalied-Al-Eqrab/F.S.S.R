@extends('layout.master')
@section('title', ' المنصة الدراسية الالكترونية ')
@section('page-title', ' الصفحة الرأيسية ')
@section('contant')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <i class="mdi mdi-apps font-20 text-muted"></i>
                                    <p class="font-16 m-b-5">المواد الترم الحالى</p>
                                </div>
                                <div class="ml-auto">
                                    <h1 class="font-light text-right">2</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 75%; height: 6px;"
                                    aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <i class="mdi mdi-clock font-20 text-muted"></i>
                                    <p class="font-16 m-b-5"> ساعات المحاضرات اسبوعيا </p>
                                </div>
                                <div class="ml-auto">
                                    <h1 class="font-light text-right">10</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%; height: 6px;"
                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <i class="mdi mdi-laptop-mac font-20 text-muted"></i>
                                    <p class="font-16 m-b-5">اجمالى ايام المحاضرات الاسبوعية </p>
                                </div>
                                <div class="ml-auto">
                                    <h1 class="font-light text-right">5</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 65%; height: 6px;"
                                    aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <i class="mdi mdi-human-male-female font-20 text-muted"></i>
                                    <p class="font-16 m-b-5"> الطلاب فى المواد الحالية </p>
                                </div>
                                <div class="ml-auto">
                                    <h1 class="font-light text-right">600</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%; height: 6px;"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12" id="diploma">
                    @include('partial.diploma')

                    <h4 class="m-b-20" style="text-align: right;"> مواد الترم الحالى</h4>
                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profiletimeline m-t-0">
                                        {{-- هيتم تكرارها بال forech --}}
                                        <div class="sl-item">
                                            <div class="sl-left"> <img
                                                    src="{{ asset('assets/images/diploma/subj/main_subj.jpg') }}"
                                                    alt="user" class="rounded-circle" /> </div>
                                            <div class="sl-right">
                                                <div> <a href="javascript:void(0)" class="link">AS500</a> <span
                                                        class="sl-date">Statistical Methods</span>
                                                    <div class="m-t-20 row" style="text-align: center;">
                                                        <div class="col-md-3 col-xs-12"><img
                                                                src="{{ asset('assets/images/diploma/subj/General/AS500.png') }}"
                                                                alt="user" class="img-fluid rounded" /></div>
                                                        <div class="col-md-9 col-xs-12">
                                                            <h4>الطرق الاحصائية</h4>
                                                            <p> يمكنك من هنا إدارة هذا المقرر: عرض
                                                                تفاصيل المادة، إضافة أو تعديل
                                                                المنهج، والاطّلاع على عدد الطلاب
                                                                المسجلين وبياناتهم.</p>
                                                            <a href="subj-contant.html" class="btn btn-primary"
                                                                style="border-radius: 30px;">صفحة
                                                                المادة <i class="ti-eye"></i></a>
                                                            <a href="subj_studants_num.html" class="btn btn-primary"
                                                                style="border-radius: 30px;">الطلاب
                                                                المسجلين <i class="ti-eye"></i></a>
                                                            <a href="form-subj-contant.html" class="btn btn-primary"
                                                                style="border-radius: 30px;"> اضافة
                                                                المنهج الدراسى <i class="ti-eye"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        {{-- هيتم تكرارها بال forech --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    @endsection
