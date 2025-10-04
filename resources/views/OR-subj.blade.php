@extends('layout.master')
@section('title', 'دبلوم بحوث العمليات')
@section('page-title', 'مواد دبلوم بحوث العمليات')
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR505.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> البرمجة الخطية </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR505</span><br><br>
                                <p class="card-text">
                                    البرمجة الخطية هى تقنية تحليلية تهدف الى تحسين (زيادة او تقليل) هدف معين -
                                    كربح او تكلفة ضمن قيود محددة
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR506.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">البرمجة غير الخطية</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR506</span>
                                <p class="card-text">
                                    تركز المادة على النماذج الرياضية والتحليلية التى لا تكون فيها العلاقات خطية
                                    . اى عندما تكون دالة الهدف او بعض القيود غير خطية .
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR507.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الشبكات </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR507</span><br><br>
                                <p class="card-text">
                                    تقدم نماذج شبكية مثل أقصر مسار، التدفق الأقصى، ومشاكل النقل، مع تطبيقات
                                    عملية.
                                </p>
                                <span class="label label-rounded label-success float-right">No Prerequisite
                                </span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR508.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> النمذجة و المحاكاة </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR508</span>
                                <p class="card-text">
                                    المادة تركز على بناء النماذج الرياضية والمحاكاة لفهم وتحليل الانظمة المعقدة
                                    فى مجال الادارة والعمليات . عندما يصعب او يستحيل ايجاد حلول تحليلية مباشرة.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR513.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> المباريات و نظرية القرار </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR513</span>
                                <p class="card-text">
                                    تقدم أسس نظرية الألعاب واتخاذ القرارات في مواقف تتضمن منافسة أو عدم يقين.
                                </p>
                                <span class="label label-rounded label-success float-right"> No Prerequisite
                                </span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR515.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> ادارة المشروع </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR515</span>
                                <p class="card-text">
                                    المادة تركز على مفاهيم وادوات واساليب ادارة المشروعات . بدءاً من التخطيط
                                    وحتى التنفيذ والتابعة والتقييم
                                </p>
                                <span class="label label-rounded label-success float-right">No Prerequisite
                                </span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS522.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> برمجة الحاسب لبحوث العمليات </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS522</span>
                                <span class="label label-rounded label-primary">Python</span>
                                <br><br>
                                <p class="card-text">
                                    توضح كيفية استخدام لغات البرمجة في بناء وحل نماذج بحوث العمليات. </p>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS506.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الجبر الخطي </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS506</span><br>
                                <p class="card-text">
                                    يقدم مفاهيم المصفوفات، المحددات، والمتجهات كأساس رياضي لبحوث العمليات.
                                </p>
                                <span class="label label-rounded label-danger float-right">
                                    Prerequisite: MS500</span>
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
                                <h4 class="card-title"> 1 الاحتمالات و التو يعات الاحصائية
                                </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS507</span><br>
                                <p class="card-text">
                                    هى الاساليب الاحصائية للتعامل مع بيانات تحتوى اكثر من متغير فى
                                    وقت واحد
                                </p>
                                <span class="label label-rounded label-success float-right">
                                    Prerequisite: MS500</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR509.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> التحليل الاقتصادى 1 </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR509</span>
                                <p class="card-text">
                                    يشرح الأساليب الكمية لتقييم النظم ومقارنتها من حيث الكفاءة الاقتصادية. </p>
                                <br>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    OR509</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR511.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> ادارة المخازن </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR511</span>
                                <p class="card-text">
                                    يقدم أساليب تخطيط المخزون، سياسات الطلب، وتقليل التكاليف المرتبطة بالمخزون.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR512.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> موضوعات مختارة فى بحوث العمليات</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR512</span>
                                <p class="card-text">
                                    يعرض أحدث التطبيقات والاتجاهات الحديثة في مجال بحوث العمليات.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR514.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> توكيد الجودة</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR514</span>
                                <p class="card-text">
                                    يركز على استراتيجيات ضمان الجودة وتحسين العمليات باستخدام أدوات إحصائية.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR516.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> نظرية الصفوف</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR516</span>
                                <p class="card-text">
                                    تدرس نماذج الانتظار وتحليلها لتقليل وقت الانتظار وتحسين الخدمات. </p>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR526.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> البرمجة غير الخطية 2 </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR526</span>
                                <p class="card-text">
                                    مادة تركز على طرق تقريب الحلول للمسائل الرياضية.
                                    الأساليب العددية للجبر
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    OR506</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR529.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> التحليل الاقتصادى للنظم 2 </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR529</span>
                                <p class="card-text">
                                    يركز على التحليل المتقدم للنظم باستخدام النماذج الكمية والتقييم الاقتصادي.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT503.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> تحليل و تصميم النظم </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT503</span>
                                <p class="card-text">
                                    يقدم طرق تحليل المتطلبات وتصميم نظم فعّالة تلبي احتياجات المؤسسات.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS511.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">مبادئ الذكاء الاصطناعى</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS511</span>
                                <span class="label label-rounded label-primary">AI</span>
                                <p class="card-text">
                                    مقرر يقدم الأسس النظرية لتقنيات الذكاء الاصطناعي.
                                    يشمل البحث، الاستدلال، وتمثيل المعرفة لحل المشكلات.
                                </p><br>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS527.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الاحتمالات والتوزيعات الإحصائية II</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS527</span>
                                <p class="card-text">
                                    استكمال للمقرر السابق بتوسع في النماذج.
                                    يشمل التوزيعات المتعددة وتطبيقات متقدمة.
                                </p>
                                <span class="label label-rounded label-success float-right">No
                                    Prerequisite</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR505.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> البرمجة الخطية </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR505</span><br><br>
                                <span class="label label-rounded label-danger "> Prerequisite: OR500 </span>
                                <br><br>
                                <p class="card-text">
                                    تقنية تحليلية تهدف الى تحسين (زيادة او تقليل) هدف معين -
                                    كربح او تكلفة ضمن قيود محددة
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR506.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">البرمجة غير الخطية 1 </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR506</span>
                                <br><br>
                                <span class="label label-rounded label-danger "> Prerequisite: OR500 </span>
                                <br><br>
                                <p class="card-text">
                                    تركز المادة على النماذج الرياضية والتحليلية التى لا تكون فيها العلاقات خطية
                                </p>
                                <br>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR507.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الشبكات </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR507</span>
                                <br><br>
                                <span class="label label-rounded label-danger "> Prerequisite: OR505 </span>
                                <br><br>
                                <p class="card-text">
                                    تقدم نماذج شبكية مثل أقصر مسار، التدفق الأقصى، ومشاكل النقل، مع تطبيقات
                                    عملية.
                                </p>
                                <br>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR508.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> النمذجة و المحاكاة </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR508</span>
                                <br><br>
                                <span class="label label-rounded label-danger "> Prerequisite: OR505 </span>
                                <br><br>
                                <p class="card-text">
                                    المادة تركز على بناء النماذج الرياضية والمحاكاة لفهم وتحليل الانظمة المعقدة
                                </p>
                                <br>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR513.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> المباريات و نظرية القرار </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR513</span>
                                <br><br>
                                <span class="label label-rounded label-danger "> Prerequisite: OR505 </span>
                                <br><br>
                                <p class="card-text">
                                    تقدم أسس نظرية الألعاب واتخاذ القرارات في مواقف تتضمن منافسة أو عدم يقين.
                                </p>
                                <br>
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
