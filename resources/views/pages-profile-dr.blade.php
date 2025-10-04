@extends('layout.master')
@section('title', 'الصفحة الشخصية')
@section('page-title', 'الصفحة الشخصية')
@section('contant')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            <img src="{{ asset("assets/images/users/dr/salah.jpg") }}" class="rounded-circle" width="150" />
                            <h4 class="card-title m-t-10">د/صلاح مهدى</h4>
                            <h6 class="card-subtitle ">مدرس مساعد</h6>
                            <h6 class="card-subtitle">قسم الاحصاء - جامعة القاهرة</h6>
                            <h6 class="card-subtitle">DR - 654457897</h6>
                        </center>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <small class="text-muted p-t-30 db">مكان المكتب</small>
                        <h6>المبنى الاساسى - الدور الرابع</h6>
                        <br />
                        <small class="text-muted">الساعات المكتبية </small>
                        <h6>from 02:00pm to 05:00pm </h6>
                        <br />
                        <small class="text-muted p-t-30 db">رقم الهاتف / الوتساب: </small>
                        <h6>+(20) 1034688362</h6>
                        <br />
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Tabs -->
                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist" style=" margin:auto;">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#current-month"
                                role="tab" aria-controls="pills-timeline" aria-selected="true">مواد الترم الحالى</a>
                        </li>
                        <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab"
                            aria-controls="pills-setting" aria-selected="false">الاعدادات</a>
                        </li>
                    </ul>
                    <!-- Tabs -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="current-month" role="tabpanel"
                            aria-labelledby="pills-timeline-tab">
                            <div class="card-body">
                                <h4 style="text-align: center;">المواد المسجلة الترم الحالى</h4>
                                <p style="text-align: center;">فيما يلي قائمة بالمقررات الدراسية التي تقوم
                                    بتدريسها خلال الفصل الدراسي الحالي، وذلك لإدارتها ومتابعة محتواها وتحديث ما
                                    يلزم للطلاب</p>
                                <hr>
                                <div class="profiletimeline m-t-0">
                                            {{-- هيتم تكرارها بال forech --}}
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="{{ asset("assets/images/diploma/subj/main_subj.jpg") }}"
                                                alt="user" class="rounded-circle" /> </div>
                                        <div class="sl-right">
                                            <div> <a href="javascript:void(0)" class="link">AS500</a> <span
                                                    class="sl-date">Statistical Methods</span>
                                                <div class="m-t-20 row" style="text-align: center;">
                                                    <div class="col-md-3 col-xs-12"><img
                                                            src="{{ asset("assets/images/diploma/subj/General/AS500.png") }}"
                                                            alt="user" class="img-fluid rounded" /></div>
                                                    <div class="col-md-9 col-xs-12">
                                                        <h4>الطرق الاحصائية</h4>
                                                        <p> يمكنك من هنا إدارة هذا المقرر: عرض تفاصيل المادة،
                                                            إضافة أو تعديل المنهج، والاطّلاع على عدد الطلاب
                                                            المسجلين وبياناتهم.</p>
                                                        <a href="subj-contant.html" class="btn btn-primary"
                                                            style="border-radius: 30px;">صفحة المادة <i
                                                                class="ti-eye"></i></a>
                                                        <a href="subj_studants_num.html" class="btn btn-primary"
                                                            style="border-radius: 30px;">الطلاب المسجلين <i
                                                                class="ti-eye"></i></a>
                                                        <a href="form-subj-contant.html" class="btn btn-primary"
                                                            style="border-radius: 30px;"> اضافة المنهج الدراسى
                                                            <i class="ti-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                            {{-- هيتم تكرارها بال forech --}}
                                    {{-- <div class="sl-item">
                                        <div class="sl-left"> <img src="../assets/images/diploma/subj/main_subj.jpg"
                                                alt="user" class="rounded-circle" /> </div>
                                        <div class="sl-right">
                                            <div> <a href="javascript:void(0)" class="link">AS507</a> <span
                                                    class="sl-date">Probability &Statistical
                                                    Distributions I </span>
                                                <div class="m-t-20 row" style="text-align: center;">
                                                    <div class="col-md-3 col-xs-12"><img
                                                            src="../assets/images/diploma/subj/AS/AS507.png" alt="user"
                                                            class="img-fluid rounded " /></div>
                                                    <div class="col-md-9 col-xs-12">
                                                        <h4>الاحتمالات و التوزيع الاحتمالى 1</h4>
                                                        <p> يمكنك من هنا إدارة هذا المقرر: عرض تفاصيل المادة،
                                                            إضافة أو تعديل المنهج، والاطّلاع على عدد الطلاب
                                                            المسجلين وبياناتهم.</p>
                                                        <a href="subj-contant.html" class="btn btn-primary"
                                                            style="border-radius: 30px;">صفحة المادة <i
                                                                class="ti-eye"></i></a>
                                                        <a href="subj_studants_num.html" class="btn btn-primary"
                                                            style="border-radius: 30px;">الطلاب المسجلين <i
                                                                class="ti-eye"></i></a>
                                                        <a href="form-subj-contant.html" class="btn btn-primary"
                                                            style="border-radius: 30px;"> اضافة المنهج الدراسى
                                                            <i class="ti-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr> --}}
                            </div>
                        </div>
                        @include('partial.profile-tab')
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
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
