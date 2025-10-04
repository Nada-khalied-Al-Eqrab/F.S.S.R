@extends('layout.master')
@section('title', 'دبلوم نظم و تكنولوجيا المعلومات')
@section('page-title', 'مواد دبلوم نظم و تكنولوجيا المعلومات')
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS503.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> برمجة الحاسب I </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS503</span>
                                <span class="label label-rounded label-primary">C++</span>
                                <p class="card-text">
                                    تعرف الطالب على أساسيات البرمجة باستخدام إحدى لغات البرمجة عالية المستوى، مع
                                    التدريب على كتابة برامج لحل مشكلات عملية.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS507.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> (I) نظم قواعدالبيانات </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS507</span>
                                <span class="label label-rounded label-primary">SQL</span>
                                <p class="card-text">
                                    تعرف الطالب مهارات بناء قواعدالبيانات متكاملة و التعامل مع نظام ادارة
                                    قواعدالبيانات
                                    واقعي وفهم ادارة البيانات بكفاءة و امان
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS509.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> شبكات الحاسب </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS509</span>
                                <br><br>
                                <p class="card-text">تعرف الطالب كيفية يتم ربط الحواسيب، مع بعضهاالبعض لتبادل
                                    البيانات والمعلومات
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    CS503</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT500.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> مبادئ نظم المعلومات</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT500</span><br><br>
                                <p class="card-text">تعرف الطالب بخلفية شاملة عن كيف تستخدم التكنولوجيا في دعم
                                    الاعمال
                                    والاختباذ القرار.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT501.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">تطوير نظم المعلومات I</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT501</span><br><br>
                                <p class="card-text">
                                    يركز على مراحل بناء نظم المعلومات، من جمع المتطلبات إلى النمذجة الأولية ،
                                    لتطوير نظم قوية للمعلومات.


                                </p><br>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT502.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">تصميم الوسائط المتعددة لنظم المعلومات </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT502</span><br><br>
                                <p class="card-text">هي مادة تجمع بين الجانب التقني و الابداعي
                                    وتوضح كيف يستخدم عناصر الوسائط المتعددة
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    IS500</span>
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
                                <h4 class="card-title"> تحليل وتصميم النظم</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT503</span><br><br>
                                <p class="card-text">بتركز علي كيفية فهم النظام القائم داخل اي مؤسسة و تحليله ثم
                                    تصميم
                                    اي نظام معلومات جديد او مطور يخدم احتياجاتها.
                                </p><br>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    IS500</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT504.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> نظم المعلومات الادارية</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT504</span>
                                <p class="card-text"> تعرف الطالب كيف توظف التكنولوجيا لدعم الادارية
                                    وتفهم دور نظم المعلومات في تحقيق ميزة تنافسية للموسسات سواء في اختباراذ
                                    القرار
                                    او التخطيط الاستراتيجي او ادارة العمليات اليومية.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    IS500</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT505.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">تفاعل الحاسب و الانسان</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT505</span>
                                <p class="card-text">هي مادة بتركز علي العلاقة بين المستخدم وهو الانسان وبين
                                    النظام او التطبيق
                                    وهو الحاسب وتهدف الي تصميم واجهات سهلة الاستخدام وفعالة.
                                </p>
                                <span class="label label-rounded label-danger float-right">
                                    Prerequisite: CS503</span>
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
                                <span class="label label-rounded label-primary">PP501</span><br><br>
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
                                <span class="label label-rounded label-primary">PP502</span><br><br>
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
                <p class="text-muted m-t-0">Core Electives (12 credit)</p>
                <!-- Row -->
                <div class="row" style="justify-content: center; text-align: center;">
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/AS/AS506.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">التحليل الاحصائي</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">AS506</span>
                                <br><br>
                                <p class="card-text">
                                    هي مادة بتربط البيانات بعلم الاحصاء وتوضح ازاي نستخدم الاساليب الاحصائية
                                    لتحليل البيانات ودعم اتخاذ القرار في نظم المعلومات .
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IS/IS508.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> تطوير تطبيقات شبكة الانترنت</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IS508</span>
                                <br><br>
                                <p class="card-text">
                                    بتعرف الطالب علي كيفية تصميم و تطوير مواقع الويب والتعامل مع تطبيقات
                                    الانترنت
                                    وتكون قادر تبنب انظمة معلومات تعمل عبر الانترنت بشكل امن وفعال.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    IT502</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IS/IS509.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> ادارة مراكز المعلومات </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IS509</span>
                                <p class="card-text">
                                    تاهيل الطالب لفهم كيفية ادارة و تشغيل مراكز المعلومات بكفاءة
                                    من حيث البنية التحتية والموارد البشرية والامن بحيث يقدر يشتغل في مجالات
                                    ادارة قواعدة البيانات وادارة الشبكات .
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    IS500</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT510.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> التجارة الالكترونية </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT510</span>
                                <p class="card-text">
                                    هي مادة توهيل الطالب لفهم كيفية بناء وادارة انظمة تجارة الالكترونية
                                    امنة وفعالة ومعرفة الجانب التقني (البرمجة_الدفع _الامان)
                                    والجانب الاداري (التسويق _خدمة العملاء).
                                </p>
                                <span class="label label-rounded label-success float-right">No Prerequisite
                                </span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT511.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> ادارة نظم المعلومات </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT511</span>
                                <br><br>
                                <p class="card-text">
                                    مادة مهمة فى مجال نظم المعلومات تركز على تخطيط، تطوير، وتشغيل نظم المعلومات
                                    في المؤسسات.
                                </p><br>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    IS500</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT512.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الاطر القانونية والاخلاقية لنظم المعلومات </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT512</span>
                                <p class="card-text">
                                    بتجمع بين القوانين و الاخلاقيات المرتبطة باستخدام الحاسب ونظم المعلومات
                                    وبتعرف الطالب علي حقوقه وواجباته كمبرمج او مستخدم للتكنولوجيا.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT513.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> نظم المعلومات في السوق المال</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT513</span>
                                <br><br>
                                <p class="card-text">
                                    مقرر يتركز علي دور تكنولوجيا المعلومات في الاسواق المالية
                                    وكيفية استخام النظم لدعم القرارات المالية والاسثمارية.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT514.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> تكامل تكنولوجيا المعلومات في الاعمال التجارية</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT514</span>
                                <p class="card-text">
                                    مادة بتوضح ازاي المؤسسات بتستفيد من دمج تقنيات تكنولوجيا المعلومات
                                    مع انشطتها التجارية والادارية لتحقيق كفاءة اعلي ومنافسة اقوي.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT515.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> التطبيقات التجارية للتكنولوجيا النظم الخبيرة</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT515</span>
                                <p class="card-text">
                                    هي مادة متقدمة بتركز علي الذكاء الاصطناعي وتطبيقاته
                                    في بيئة الاعمال وخاصة استخدام النظم الخبيرة
                                </p>
                                <span class="label label-rounded label-success float-right"> no Prerequisite
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT516.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> موضوعات مختارة فى علوم الحاسب </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT516</span>
                                <p class="card-text">
                                    مقرر مرن يطرح موضوعات متقدمة وحديثة في التخصص.
                                    يساعد الطالب على الاطلاع على آخر اتجاهات البحث.
                                </p>
                                <span class="label label-rounded label-success float-right"> no Prerequisite
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT517.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">امن المعلومات </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT517</span>
                                <p class="card-text">
                                    اكساب الطالب القدرة علي فهم المخاطرة الامنية التي تواجه الانظمة
                                    وتطبيق تقنيات الحماية المناسبة.
                                </p><br>
                                <span class="label label-rounded label-success float-right"> no Prerequisite
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT518.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> تقييم نظم المعلومات </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT518</span>
                                <p class="card-text">
                                    بتركز علي قياس مدي نجاح و كفاءة النظم داخل المؤسسات وبتعلم الطال كيفية
                                    يقيم اي نظام معلومات من الناحية الفنية و الادارية ةالاقتصادية.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    IS500</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card-->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT519.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> قواعد البيانات الشيئية</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT519</span>
                                <p class="card-text">
                                    تركز علي البرمجة الكائنية وربطها مع قواعد البيانات.
                                    و تقدم نماذج قواعد البيانات القائمة على الكائنات وتكاملها مع البرمجة
                                    الكائنية.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    CS507</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card-->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card-->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT521.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> II تطوير نظم المعلومات</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT521</span>
                                <p class="card-text">
                                    استكمال لمادة تطوير نظم المعلومات 1
                                    تركز علي بشكل اكبر علي الجانب العملي والتطبيقي لبناء و تطوير نظم معلومات
                                    متكاملة
                                    بداية من التصميم وصولا للتنفيذ والتقييم.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    IS501</span>
                                <a href="javascript:void(0)" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR515.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">ادارة المشروعات</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR515</span>
                                <p class="card-text">
                                    مقرر يقدم مفاهيم التخطيط والتنظيم للمشروعات.
                                    يشمل إدارة الوقت، الموارد، والمخاطر.يشرح أساليب تخطيط وتنفيذ المشاريع مع
                                    التركيز على إدارة الوقت والموارد.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS503.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> برمجة الحاسب I </h4>
                                <span class="label label-rounded label-success float-right">No
                                    Prerequisite</span>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS503</span>
                                <p class="card-text">
                                    مادة أساسية تهدف إلى تعريف الطالب بمفاهيم البرمجة وهيكلية البرامج.
                                    تركز على تعلم لغة برمجة عالية المستوى (مثل C أو ++C) من خلال الأمثلة
                                    العملية.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS507.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">نظم قواعد البيانات I</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS507</span>
                                <span class="label label-rounded label-primary">SQL</span>
                                <br><br>
                                <span class="label label-rounded label-danger">Prerequisite :
                                    CS500</span><br><br>
                                <p class="card-text">
                                    مقرر يشرح مبادئ تخزين وإدارة البيانات باستخدام قواعد البيانات العلائقية.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT500.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> مبادي نظم المعلومات</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT500 </span>
                                <span class="label label-rounded label-success"> no Prerequisite
                                </span><br><br>
                                <p class="card-text">
                                    تعتبر مدخل لفهم مجال نظم المعلومات وكيفية الاستخدامها في دعم الاعمال واتخاذ
                                    القرار داخل المؤسسات . </p>
                                <br>
                                <a href="" class="btn btn-primary">المنهج الدراسى</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col card p-0 m-2 d-flex Phone">
                        <!-- Card -->
                        <div class="card h-100">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT501.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> تطوير نظم المعلومات I </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT501</span>
                                <br><br>
                                <span class="label label-rounded label-danger">Prerequisite :
                                    IS500 </span><br><br>
                                <p class="card-text">
                                    يركز على مراحل بناء نظم المعلومات، من جمع المتطلبات إلى النمذجة الأولية.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT503.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">تحليل و تصميم النظم</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT503</span>
                                <br><br>
                                <span class="label label-rounded label-danger">Prerequisite :
                                    IS500</span><br><br>
                                <p class="card-text">
                                    بتاهل الطالب لفهم تحليل مشاكل المؤسسات وتحويلها الي نظام معلومات متكامل
                                    . </p>

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
