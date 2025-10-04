@extends('layout.master')
@section('title', 'دبلوم لاحصاء')
@section('page-title', 'مواد دبلوم الاحصاء')
@section('contant')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        @include('partial.general-subj')
        <!-- Row -->
        <div class="row" style="text-align:center;">
            <div class="col-12">
                <h4>المقررات الدراسية الاجبارية</h4>
                <p class="text-muted m-t-0"> Major Field Requirements (33 credit)</p>
                <!-- Row -->
                <div class="row" style="justify-content: center; text-align: center;">
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/EC/EC505.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> اقتصاد قياسى 1 </h4>
                                <span class="label label-rounded label-primary">AR</span>
                                <span class="label label-rounded label-primary">EC505</span>
                                <p class="card-text">
                                    يقدم الأسس النظرية والتطبيقية لبناء النماذج الاقتصادية باستخدام البيانات
                                    الإحصائية، مع التركيز على تحليل الانحدار البسيط والمتعدد.
                                </p>
                                <span class="label label-rounded label-danger float-right">
                                    Prerequisite: AS500</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS505.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> رياضيات متقدمة </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS505</span>
                                <p class="card-text">
                                    يتناول موضوعات رياضية متقدمة مثل المصفوفات، التكامل المتعدد، والمعادلات
                                    التفاضلية، كأساس لفهم المناهج الإحصائية والاقتصادية.</p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    MS500</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/AS/AS506.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> التحليل الاحصائى </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">AS506</span>
                                <p class="card-text">
                                    يركز على تطبيق الأساليب الإحصائية في تحليل البيانات العملية باستخدام
                                    البرمجيات، مع تفسير النتائج في سياق علمي.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    AS500</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS507.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الاحتمالات و التوزيعات الاحصائية 1 </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS507</span>
                                <p class="card-text">
                                    يقدم المفاهيم الأساسية لنظرية الاحتمالات والتوزيعات الاحتمالية، كأساس لبناء
                                    النماذج الإحصائية.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    AS500</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/AS/AS508.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> تصميم و تحليل التجارب 1</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">AS508</span>
                                <p class="card-text">
                                    يشرح مبادئ تصميم التجارب الإحصائية وكيفية تحليل نتائجها لضمان دقة
                                    الاستنتاجات.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    AS506</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/AS/AS509.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> طرق المعاينة</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">AS509</span>
                                <p class="card-text">
                                    يعرض أساليب اختيار العينات المختلفة (عشوائية بسيطة، طبقية، عنقودية)
                                    وتطبيقاتها في البحوث الإحصائية.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    AS500</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/AS/AS511.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> تحليل الانحدار </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">AS511</span>
                                <p class="card-text">
                                    يركز على النماذج الانحدارية لتفسير العلاقات بين المتغيرات والتنبؤ بالقيم
                                    المستقبلية.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    AS506</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS514.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> استدلال احصائى 1</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS514</span>
                                <p class="card-text">
                                    يقدم مفاهيم التقدير بفترات الثقة والاختبارات الإحصائية الأساسية لاستنتاج
                                    النتائج من البيانات.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    MS507</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6 img-responsive">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS524.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> استدلال احصائى 2</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS524</span>
                                <p class="card-text">
                                    يتعمق في طرق الاستدلال المتقدمة مثل الاختبارات المعلمية وغير المعلمية وتحليل
                                    التباين.
                                </p>
                                <span class="label label-rounded label-danger float-right">
                                    Prerequisite:MS507 </span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6 img-responsive">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/PP/PP501.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">مهارات اعداد المشروع</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">PP501</span>
                                <p class="card-text">
                                    تساعد الطالب على تعلم طرق البحث العلمي وإعداد الوثائق.
                                    كما تعزز مهارات العرض والتواصل والعمل ضمن فريق.
                                </p>
                                <span class="label label-rounded label-success float-right">No
                                    Prerequisite</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/PP/PP502.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">مشروع</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">PP502</span>
                                <p class="card-text">
                                    مقرر تطبيقي يجمع ما درسه الطالب طوال فترة الدبلوم.
                                    يشمل تصميم وتنفيذ مشروع متكامل يحاكي نظامًا واقعيًا.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    PP501</span>
                                <a href="javascript:void(0)" class="btn btn-primary">تفاصيل اكثر</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                </div>
            </div>
        </div>
        <!-- End Row -->
        <!-- Row -->
        <div class="row" style="text-align:center;">
            <div class="col-12">
                <h4>المقررات الدراسية الاختيارية</h4>
                <p class="text-muted m-t-0"> Core Electives (12 credit)</p>
                <!-- Row -->
                <div class="row" style="justify-content: center; text-align: center;">

                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS506.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> جبر خطى</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS506</span>
                                <p class="card-text">
                                    يشرح مفاهيم الجبر الخطي مثل المصفوفات والمتجهات ونظم المعادلات الخطية
                                    وتطبيقاتها في الإحصاء.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    MS500</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS512.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> تحليل بيزي </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS512</span>
                                <p class="card-text">
                                    يقدم منهجية بايز في الاستدلال الإحصائي باستخدام الاحتمالات الشرطية لدمج
                                    البيانات مع المعلومات السابقة.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    MS524</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS513.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الإحصاءات الترتيبية </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS513</span>
                                <p class="card-text">
                                    يركز على أساليب تحليل البيانات المرتبة مثل الوسيط، الرتب، والاختبارات غير
                                    المعلمية. </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    MS527</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS517.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> مقدمة في التحليل العددي </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS517</span>
                                <p class="card-text">
                                    يتناول طرقًا تقريبية لحل المعادلات الرياضية مثل طرق نيوتن والتكامل العددي،
                                    باستخدام الحاسب.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    MS500</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS518.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> مراقبة الجودة الإحصائية</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS518</span>
                                <p class="card-text">
                                    يشرح أدوات مراقبة الجودة مثل خرائط السيطرة الإحصائية وتحليل العمليات لتحسين
                                    الأداء الصناعي.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    AS506</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS527.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الاحتمالات والتوزيعات الاحتمالية 2 </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS527</span>
                                <p class="card-text">
                                    يتوسع في دراسة التوزيعات الاحتمالية المتعددة والمتقدمة ونظرياتها الرياضية.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    MS507</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/AS/AS503.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> السلاسل الزمنية وتطبيقاتها </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">AS503</span>
                                <p class="card-text">
                                    يدرس البيانات الزمنية باستخدام نماذج مثل ARIMA لتحليل الاتجاهات والتنبؤ
                                    بالمستقبل.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    AS511</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/AS/AS521.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> مقدمة في النماذج الخطية </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">AS521</span>
                                <p class="card-text">
                                    يقدم الأسس النظرية للنماذج الخطية العامة وتطبيقاتها في تحليل التباين
                                    والانحدار.
                                </p>
                                <span class="label label-rounded label-danger float-right">
                                    Prerequisite:AS500</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/AS/AS517.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الحسابات الإحصائية والرسومات </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">AS517</span><br><br>
                                <p class="card-text">
                                    يشرح كيفية استخدام البرمجيات الإحصائية لعرض البيانات وتحليلها باستخدام
                                    الجداول والرسوم البيانية.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    AS511</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/AS/AS508.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> تصميم وتحليل التجارب 2 </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">AS508</span><br><br>
                                <p class="card-text">
                                    يتعمق في تصميم التجارب المعقدة مثل المربعات اللاتينية والتحليل المتعدد
                                    العوامل.
                                </p>
                                <span class="label label-rounded label-danger float-right">
                                    Prerequisite:AS508 </span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/EC/EC508.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الطرق الرياضية والتحليل الاقتصادي</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">EC508</span>
                                <p class="card-text">
                                    يقدم أدوات رياضية لتحليل المشكلات الاقتصادية وتطبيق نماذج كمية لفهم القرارات
                                    الاقتصادية.
                                </p>
                                <span class="label label-rounded label-danger float-right">
                                    Prerequisite:EC505 </span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/EC/EC510.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الاقتصاد الرياضي </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">EC510</span><br><br>
                                <p class="card-text">
                                    يركز على استخدام الأساليب الرياضية لتمثيل وتحليل الظواهر الاقتصادية في صورة
                                    معادلات ونماذج.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    EC505 </span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/EC/EC525.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> برمجة النظم </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">EC525</span>
                                <p class="card-text">
                                    مادة تركز على البرمجة المرتبطة بأنظمة التشغيل.
                                    تشمل إدارة العمليات، الذاكرة، وملفات النظام.
                                </p>
                                <span class="label label-rounded label-danger float-right">
                                    Prerequisite:EC505 </span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                </div>
            </div>
        </div>
        <!-- End Row -->
        <!-- Row -->
        <div class="row" style="text-align:center;">
            <div class="col-12">
                <h4>المقررات الدراسية للتخصصات الفرعية</h4>
                <p class="text-muted m-t-0"> Minor</p>
                <!-- Row -->
                <div class="row" style="justify-content: center; text-align: center;">
                    <!-- column -->
                    <div class="col card p-0 m-2 d-flex Phone">
                        <!-- Card -->
                        <div class="card h-100">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS514.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> استدلال احصائى 1</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS514</span>
                                <br><br>
                                <span class="label label-rounded label-danger ">Prerequisite :
                                    MS507</span><br><br>
                                <p class="card-text">
                                    يقدم مفاهيم التقدير بفترات الثقة والاختبارات الإحصائية الأساسية لاستنتاج
                                    النتائج من البيانات.
                                </p>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col card p-0 m-2 d-flex Phone">
                        <!-- Card -->
                        <div class="card h-100">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/AS/AS517.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الحسابات الإحصائية والرسومات </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">AS517</span>
                                <br><br>
                                <span class="label label-rounded label-danger ">Prerequisite :
                                    AS511</span><br><br>
                                <p class="card-text">
                                    يشرح كيفية استخدام البرمجيات الإحصائية لعرض البيانات وتحليلها
                                </p>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col card p-0 m-2 d-flex Phone">
                        <!-- Card -->
                        <div class="card h-100">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS524.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> استدلال احصائى 2</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS524</span>
                                <br><br>
                                <span class="label label-rounded label-danger ">
                                    Prerequisite:MS507 </span><br><br>
                                <p class="card-text">
                                    يتعمق في طرق الاستدلال المتقدمة مثل الاختبارات المعلمية وغير المعلمية وتحليل
                                    التباين.
                                </p>

                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col card p-0 m-2 d-flex Phone">
                        <!-- Card -->
                        <div class="card h-100">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/AS/AS508.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> تصميم و تحليل التجارب 1</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">AS508</span>
                                <br><br>
                                <span class="label label-rounded label-danger ">Prerequisite :
                                    AS506</span><br><br>
                                <p class="card-text">
                                    يشرح مبادئ تصميم التجارب الإحصائية وكيفية تحليل نتائجها لضمان دقة
                                    الاستنتاجات.
                                </p>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col card p-0 m-2 d-flex Phone">
                        <!-- Card -->
                        <div class="card h-100">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/AS/AS509.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> طرق المعاينة</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">AS509</span>
                                <br><br>
                                <span class="label label-rounded label-danger ">Prerequisite :
                                    AS500</span><br><br>
                                <p class="card-text">
                                    يعرض أساليب اختيار العينات المختلفة (عشوائية بسيطة، طبقية، عنقودية)
                                    وتطبيقاتها في البحوث الإحصائية.
                                </p>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                </div>
            </div>
        </div>
        <!-- End Row -->
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
