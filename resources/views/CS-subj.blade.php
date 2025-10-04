@extends('layout.master')
@section('title', 'دبلوم علوم الحاسب')
@section('page-title', 'مواد دبلوم علوم الحاسب ')
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
                <h4 class="d-inline">المققرات الدراسية الاجبارية</h4>
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
                                <h4 class="card-title"> مبادئ الذكاء الاصطناعى </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS503</span>
                                <span class="label label-rounded label-primary">C++</span>
                                <br> <br>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS504.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">المنطق الرقمى و تنظيم الحاسبات</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS504</span>
                                <p class="card-text">
                                    يتناول المبادئ الأساسية للمنطق الرقمي وتصميم الدوائر المنطقية.
                                    كما يشرح بنية الحاسب الداخلية وتنظيم مكوناته ووظائفها. </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    CS500</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS505.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> هياكل البيانات و الخورزميات </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS505</span>
                                <span class="label label-rounded label-primary">C++</span> <br> <br>
                                <p class="card-text">يعرض مفاهيم هياكل البيانات مثل القوائم والأشجار والمكدسات
                                    والطوابير.
                                    ويوضح كيفية بناء الخوارزميات وتحليل كفاءتها.
                                </p> <br>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS506.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> نظم التشغيل </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS506</span> <br> <br>
                                <p class="card-text">مقدمة في الأسس النظرية والعملية لنظم التشغيل ودورها في
                                    إدارة الموارد.
                                    تتناول إدارة العمليات والذاكرة ونظم الملفات.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    CS500</span>
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
                                <h4 class="card-title">نظم قواعد البيانات I</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS507</span>
                                <span class="label label-rounded label-primary">SQL</span> <br> <br>
                                <p class="card-text">
                                    يدرس تصميم وبناء وإدارة قواعد البيانات باستخدام النموذج العلائقي.
                                    مع التركيز على لغة الاستعلام SQL لتطبيقات عملية.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    CS500</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS508.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> هندسة البرمجيات I </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS508</span>
                                <p class="card-text">
                                    يشرح دورة حياة تطوير البرمجيات ونماذج وأساليب التحليل والتصميم.
                                    يهدف إلى بناء أنظمة برمجية كبيرة بشكل منظم وفعال.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    CS500</span>
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
                                <span class="label label-rounded label-primary">CS509</span> <br> <br>
                                <p class="card-text">مقدمة في أسس شبكات الحاسب ونماذج الاتصال مثل OSI وTCP/IP.
                                    تتناول بروتوكولات الاتصال وتقنيات نقل البيانات.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    CS500</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS510.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> بناء المترجمات</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS510</span>
                                <p class="card-text">
                                    يقدم الأسس النظرية لبناء المترجمات بمراحلها المختلفة.
                                    يشمل التحليل اللغوي والدلالي وتوليد الشفرة الخاصة بالحاسوب.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    CS500</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS521.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> تراكيب محددة</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS521</span>
                                <p class="card-text">
                                    مادة متقدمة في تصميم المترجمات مع التركيز على التركيب النحوي.
                                    تتناول خوارزميات تحليل اللغات الرسمية وتركيبها.
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
                    <div class="col-lg-3 col-md-6 img-responsive">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/PP/PP501.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">مهارات اعداد المشروع</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">PP501</span> <br> <br>
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
                                <span class="label label-rounded label-primary">PP502</span> <br> <br>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS512.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> تصميم و تحليل الخورازميات</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS512</span>
                                <span class="label label-rounded label-primary">C++</span>
                                <p class="card-text">
                                    مادة تركز على بناء خوارزميات فعّالة لحل المشكلات.
                                    تهتم بتحليل التعقيد الزمني والفضائي للخوارزميات.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    CS500</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS513.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> عمارة الحاسب </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS513</span>
                                <p class="card-text">
                                    مقرر يشرح المكونات الداخلية للحاسب وكيفية عملها.
                                    يتناول المعالجات، الذاكرة، والتنظيم المعماري للحواسيب.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    CS504</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS514.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الاوتوماتا و اللغات الصورية </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS514</span>
                                <p class="card-text">
                                    مادة تهدف إلى دراسة النماذج الرياضية للحوسبة.
                                    تتناول الآلات المحدودة، اللغات الرسمية، والنحو.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    MS521</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS515.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> موضوعات مختارة فى علوم الحاسب </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS515</span>
                                <p class="card-text">
                                    مقرر مرن يطرح موضوعات متقدمة وحديثة في التخصص.
                                    يساعد الطالب على الاطلاع على آخر اتجاهات البحث.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS516.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> لغة الاسمبلى </h4> <br>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS516</span>
                                <p class="card-text">
                                    مادة تعرف الطالب بالبرمجة منخفضة المستوى.
                                    تربط بين البرمجيات والأوامر المباشرة للمعالج.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    CS500</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS517.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> رسومات الحاسب </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS517</span> <br> <br>
                                <p class="card-text">
                                    مقرر يعرض أساسيات الرسوميات ثنائية وثلاثية الأبعاد.
                                    يشمل تقنيات الإظهار، التحويلات، والمعالجة الرسومية.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS518.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> برمجة الوسائط المتعددة </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS518</span> <br> <br>
                                <p class="card-text">
                                    مادة تركز على دمج الصوت، الفيديو، والصور في البرمجة.
                                    تشمل تقنيات التفاعل والتطبيقات متعددة الوسائط.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS519.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> التحليل و التصميم شيئى التوجة </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS519</span>
                                <p class="card-text">
                                    مقرر يقدم أساليب بناء الأنظمة باستخدام البرمجة الكائنية.
                                    يشمل مخططات UML ومفاهيم الوراثة والتجريد.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS520.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> نظم قواعد المعرفة </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS520</span>
                                <p class="card-text">
                                    مادة تهدف إلى تصميم أنظمة تستند إلى المعرفة.
                                    تركز على التمثيل المنطقي والاستنتاج في الخبرة.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS521.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> معالجة الاشارات الرقمية</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS521</span>
                                <p class="card-text">
                                    مقرر يتناول طرق تحليل وتحويل الإشارات.
                                    يشمل الفلاتر، تحويل فورييه، وتطبيقات متعددة.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS523.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> برمجة الحاسب II </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS523</span>
                                <p class="card-text">
                                    استكمال لمقرر برمجة الحاسب I بتعمق أكبر.
                                    يتناول الهياكل المعقدة والخوارزميات المتقدمة.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS526.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> برمجة النظم </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS526</span>
                                <p class="card-text">
                                    مادة تركز على البرمجة المرتبطة بأنظمة التشغيل.
                                    تشمل إدارة العمليات، الذاكرة، وملفات النظام.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS527.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> نظم قواعد البيانات II </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS527</span>
                                <p class="card-text">
                                    مقرر متقدم في تصميم وإدارة قواعد البيانات.
                                    يتناول تحسين الاستعلامات والأنظمة الموزعة.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    CS507</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS531.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">اساسيات لغة الحاسب </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS531</span>
                                <p class="card-text">
                                    مادة تشرح المفاهيم العامة لبناء لغات البرمجة.
                                    تشمل النحو، الدلالات، وآليات التنفيذ.
                                </p>
                                <span class="label label-rounded label-danger float-right">Prerequisite :
                                    CS500</span>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT505.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> تفاعل الانسان و الحاسب </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT505</span>
                                <p class="card-text">
                                    مقرر يهتم بتصميم واجهات المستخدم وتجربة الاستخدام.
                                    يركز على سهولة الوصول وفاعلية التفاعل.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS507.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الاحتمالات والتوزيعات الإحصائية I</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS507</span> <br> <br>
                                <p class="card-text">
                                    مقرر يشرح مفاهيم الاحتمال الأساسية والنماذج.
                                    يشمل التوزيعات العشوائية وتطبيقاتها العملية.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS517.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> مقدمة في التحليل العددي</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS517</span> <br> <br>
                                <p class="card-text">
                                    مادة تركز على طرق تقريب الحلول للمسائل الرياضية.
                                    تشمل الأساليب العددية للجبر والمعادلات.
                                </p> <br>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/MS/MS527.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> الاحتمالات والتوزيعات الإحصائية II</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">MS527</span> <br> <br>
                                <p class="card-text">
                                    استكمال للمقرر السابق بتوسع في النماذج.
                                    يشمل التوزيعات المتعددة وتطبيقات متقدمة.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/IT/IT508.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">تطوير برمجيات لشبكة الانترنت</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">IT508</span>
                                <span class="label label-rounded label-primary">HTML & CSS & JS</span>
                                <br>
                                <span class="label label-rounded label-primary">C# & .NET</span> <br> <br>
                                <p class="card-text">
                                    مادة تقدم أساليب بناء تطبيقات الويب المتقدمة.
                                    تشمل تطوير الخوادم والعملاء والبروتوكولات.
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
                    <div class="col-lg-3 col-md-6 img-responsive">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR508.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">النمذجة و المحاكاة</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR508</span>
                                <p class="card-text">مادة تشرح بناء نماذج لأنظمة معقدة وتحليلها.
                                    تركز على المحاكاة بالحاسب لتجارب واقعية.</p>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/OR/OR515.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">ادارة المشروعات</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">OR515</span>
                                <p class="card-text">
                                    مقرر يقدم مفاهيم التخطيط والتنظيم للمشروعات.
                                    يشمل إدارة الوقت، الموارد، والمخاطر.
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
                <h4 class="d-inline">المقررات الدراسية للتخصصات الفرعية</h4>
                <p class="text-muted m-t-0">Minor</p>
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
                                    تشمل موضوعات المتغيرات، العبارات الشرطية، الحلقات، والدوال كأساس لبناء
                                    البرامج.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS505.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> هياكل البيانات و الخورزميات</h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS505 </span>
                                <br><br>
                                <span class="label label-rounded label-danger">Prerequisite :
                                    CS503</span><br><br>
                                <p class="card-text">
                                    تقدم المفاهيم الأساسية لهياكل البيانات (القوائم، المكدسات، الطوابير،
                                    الأشجار، الرسوم) وكيفية بناء وتحليل الخوارزميات بكفاءة.
                                </p>
                                <a href="subj-contant.html" class="btn btn-primary">المنهج الدراسى</a>
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
                                <h4 class="card-title">نظم قواعد البيانات </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS507</span>
                                <span class="label label-rounded label-primary">SQL</span>
                                <br><br>
                                <span class="label label-rounded label-danger">Prerequisite :
                                    CS500</span><br><br>
                                <p class="card-text">
                                    مقرر يشرح مبادئ تخزين وإدارة البيانات باستخدام قواعد البيانات العلائقية.
                                    يشمل تصميم الجداول، العلاقات، واستعلامات SQL لتسهيل الوصول إلى البيانات.
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/CS/CS508.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">هندسة البرمجيات I </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">CS508</span>
                                <br><br>
                                <span class="label label-rounded label-danger">Prerequisite :
                                    CS500</span><br><br>
                                <p class="card-text">
                                    مادة تهدف إلى تعريف الطالب بمبادئ تطوير البرمجيات بطريقة منظمة.
                                    تتناول دورة حياة النظام من التحليل إلى التصميم والتنفيذ والاختبار و غيرها من
                                    المواضيع. </p>
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
                            <img class="card-img-top img-responsive" src="../assets/images/diploma/subj/cs/CS509.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"> شبكات الحاسب </h4>
                                <span class="label label-rounded label-primary">EN</span>
                                <span class="label label-rounded label-primary">cs509</span>
                                <br><br>
                                <span class="label label-rounded label-danger">Prerequisite :
                                    CS503</span><br><br>
                                <p class="card-text">
                                    مقرر يشرح أساسيات الاتصال بين الحواسيب، نماذج الشبكات، وبروتوكولات نقل
                                    البيانات.
                                    يهتم بالبنية التحتية للشبكات والإنترنت، وآليات الأمان و غيرها من المواضيع.
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
