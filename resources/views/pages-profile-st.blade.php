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
                            <img src="{{ asset("assets/images/users/st/nada.jpg") }}" class="rounded-circle" width="150" />
                            <h4 class="card-title m-t-10">ندى خالد سعيد </h4>
                            <h6 class="card-subtitle">دبلوم علوم الحاسب</h6>
                            <h6 class="card-subtitle">ST-202400200 </h6>
                        </center>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <small class="text-muted p-t-30 db"> كود الطالب</small>
                        <h6>202400200</h6>
                        <br />
                        <small class="text-muted p-t-30 db">رقم الهاتف / الوتساب: </small>
                        <h6>+(20) 1034688362</h6>
                    </div>
                    <div>
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
                        <li class="nav-item">
                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month"
                                role="tab" aria-controls="pills-setting" aria-selected="false">الاعدادات</a>
                        </li>
                    </ul>
                    <!-- Tabs -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="current-month" role="tabpanel"
                            aria-labelledby="pills-timeline-tab">
                            <div class="card-body" style="text-align: center;">
                                <h4>المواد المسجلة الترم الحالى</h4>
                                <p>فيما يلي قائمة بالمقررات الدراسية التي تقوم بتدريسها خلال الفصل الدراسي
                                    الحالي، وذلك لإدارتها ومتابعة محتواها وتحديث ما يلزم للطلاب</p>
                                <ul class=" m-b-0">
                                    <li class="list-group-item ">
                                        <span class="badge badge-pill  float-left"> <img
                                                src="{{ asset("assets/images/diploma/subj/main_subj.jpg") }}" alt="user"
                                                width="20" class="rounded-circle float-left "></span>
                                        <span class="badge badge-pill badge-primary float-left">CS503</span>
                                        &nbsp; &nbsp;
                                        <span class="badge badge-pill badge-primary float-left">EN</span>
                                        <span class="todo-desc"> Computer Programming I </span>
                                        <a href="" class="link float-right"><i class="ti-eye"></i></a>
                                    </li>
                                    <li class="list-group-item ">
                                        <span class="badge badge-pill  float-left"> <img
                                                src="{{ asset("assets/images/diploma/subj/main_subj.jpg") }}" alt="user"
                                                width="20" class="rounded-circle float-left "></span>
                                        <span class="badge badge-pill badge-primary float-left">CS504</span>
                                        &nbsp; &nbsp;
                                        <span class="badge badge-pill badge-primary float-left">EN</span>
                                        <span class="todo-desc">
                                            Digital Logic & Computer
                                            Organization</span>
                                        <a href="" class="link float-right"><i class="ti-eye"></i></a>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-pill  float-left"> <img
                                                src="{{ asset("assets/images/diploma/subj/main_subj.jpg") }}" alt="user"
                                                width="20" class="rounded-circle float-left "></span>
                                        <span class="badge badge-pill badge-primary float-left">CS505
                                        </span>
                                        &nbsp; &nbsp;
                                        <span class="badge badge-pill badge-primary float-left">EN</span>
                                        <span class="todo-desc"> Data Structures &Algorithms </span>
                                        <a href="" class="link float-right"><i class="ti-eye"></i></a>
                                    </li>
                                    <li class="list-group-item ">
                                        <span class="badge badge-pill  float-left"> <img
                                                src="{{ asset("assets/images/diploma/subj/main_subj.jpg") }}" alt="user"
                                                width="20" class="rounded-circle float-left "></span>
                                        <span class="badge badge-pill badge-primary float-left">CS506
                                        </span>
                                        &nbsp; &nbsp;
                                        <span class="badge badge-pill badge-primary float-left">EN</span>
                                        <span class="todo-desc"> Operating Systems </span>
                                        <a href="" class="link float-right"><i class="ti-eye"></i></a>
                                    </li>
                                    <li class="list-group-item ">
                                        <span class="badge badge-pill  float-left"> <img
                                                src="{{ asset("assets/images/diploma/subj/main_subj.jpg") }}" alt="user"
                                                width="20" class="rounded-circle float-left "></span>
                                        <span class="badge badge-pill badge-primary  float-left">CS507</span>
                                        &nbsp; &nbsp;
                                        <span class="badge badge-pill badge-primary float-left">EN</span>
                                        <span class="todo-desc"> Database Systems I </span>
                                        <a href="" class="link float-right"><i class="ti-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="card-body" style="text-align: center;">
                                    <a href="https://csds.cu.edu.eg/ISSR_Student/" class="btn btn-primary"
                                        style="border-radius: 30px;"><i class="icon-globe"></i>
                                        منصة تسجيل المواد و نتائج الامتحانات </a>
                                </div>
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
