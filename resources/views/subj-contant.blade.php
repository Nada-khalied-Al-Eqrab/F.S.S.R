@extends('layout.master')
@section('title', ' الطرق الاحصائية')
@section('page-title', ' الطرق الاحصائية')
@section('contant')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Row -->
            <div class="col-md-12">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets/images/diploma/subj/General/AS500.png') }}"
                        alt="Card image cap" style="max-height: 450px">
                </div>
            </div>
            <!-- End Row -->
            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="subj_studants_num.html" class="btn btn-dark float-right"><i
                                class="mdi mdi-account-multiple"></i>
                            600</a>
                        <span class="btn btn-dark float-left">EN</span>
                        <h4 class="card-title" style="text-align: center;"> <strong>الطرق الاحصائية </strong>
                            <h4 class="card-title" style="text-align: center;"> <strong>AS500 - Statistical
                                    Methods </strong>
                            </h4>
                            <p style="text-align: center;"> مادة الطرق الإحصائية تعد من المقررات الأساسية التي
                                تضع الأساس لفهم وتحليل البيانات في المجالات التطبيقية المختلفة.
                                تركز المادة على عرض المبادئ النظرية والتطبيقية لعلم الإحصاء، بدايةً من الأساليب
                                الوصفية مثل مقاييس النزعة المركزية والتشتت.
                                ثم تنتقل لشرح أساليب الاستدلال الإحصائي مثل اختبار الفرضيات وفترات الثقة.
                                كما يتم التطرق إلى استخدام العينات وكيفية تعميم النتائج على المجتمع الكلي.
                                وتشمل المادة تدريبًا عمليًا على تحليل البيانات باستخدام برامج إحصائية مثل SPSS
                                أو R.
                                الهدف النهائي هو تزويد الطالب بالقدرة على اختيار وتطبيق المنهج الإحصائي المناسب
                                لحل المشكلات الواقعية
                            </p>
                            <h6 class="card-subtitle"></h6>
                            <div id="example-manipulation" class="m-t-40">
                                <h3> المنهج الدراسى للمادة</h3>
                                <section style="text-align: right;">
                                    @include('partial.materials')
                                </section>
                                <h3> الجدول الدراسى للمادة </h3>
                                <section style="text-align:center;">
                                    @include('partial.exam')
                                </section>
                                <h3> جدول امتحانات المادة</h3>
                                <section style="text-align:center;">
                                    @include('partial.lecture')
                                </section>
                                <h3> شات المادة </h3>
                                <section style="justify-content: center; ">
                                    @include('partial.chat')
                                </section>
                            </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
