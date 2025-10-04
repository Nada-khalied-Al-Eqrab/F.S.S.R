@extends('layout.master')
@section('title', ' حول مشاريع التخرج ')
@section('page-title', ' مشاريع التخرج ')
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
                    <img class="card-img-top" src="{{ asset('assets/images/diploma/subj/PP/PP502.png') }}" alt="Card image cap"
                        style="max-height: 450px">
                </div>
            </div>
            <!-- End Row -->
            <!-- ============================================================== -->
            <!-- Example -->
            <!-- ============================================================== -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align: center;"> <strong>حول مشاريع التخرج </strong>
                        </h4>
                        <p> تُعد مشاريع التخرج أحد الركائز الأساسية في العملية التعليمية بالكلية، حيث تمنح
                            الطالب فرصة لتطبيق ما تعلمه من معارف ومهارات على أرض الواقع من خلال تنفيذ مشروع عملي
                            أو بحثي تحت إشراف أعضاء هيئة التدريس. تهدف هذه المشاريع إلى صقل مهارات الطلاب في
                            البحث العلمي، التحليل، البرمجة، التصميم، وإدارة المشروعات، بما يؤهلهم للعمل في سوق
                            العمل أو استكمال الدراسات العليا </p>
                        <h6 class="card-subtitle"></h6>
                        <div id="example-manipulation" class="m-t-40">
                            <h3>المشاريع حسب الدبلومات</h3>
                            <section style="text-align: right;">
                                <img src="{{ asset("assets/images/diploma/subj/PP/PP502.png") }}" class="img-fluid float-left"
                                    style="width:300px; height:200px;justify-content: center;" />
                                <h3>: الدبلومات التالية ملزمة بتقديم مشروع تخرج</h3>
                                <P><strong> دبلوم علوم الحاسب</strong> يركز على تطوير أنظمة برمجية، تطبيقات ويب،
                                    الذكاء الاصطناعي، التعلم الآلي، وتحليل البيانات <i
                                        class="mdi mdi-arrange-bring-forward"></i></P>
                                <P><strong>دبلوم تكنولوجيا ونظم المعلومات</strong> تهتم بمشاريع إدارة قواعد
                                    البيانات، نظم المعلومات الإدارية، نظم دعم القرار، وتكامل الأنظمة <i
                                        class="mdi mdi-arrange-bring-forward"></i></P>
                                <P><strong>دبلوم الإحصاء والإحصاء الحيوي والسكاني</strong> يتناول مشاريع التحليل
                                    الإحصائي للبيانات، الدراسات السكانية، والنماذج الإحصائية <i
                                        class="mdi mdi-arrange-bring-forward"></i></P>
                                <P><strong>دبلوم بحوث العمليات وإدارة العمليات</strong> يركز على النمذجة
                                    الرياضية، المحاكاة، تحسين العمليات، وإدارة سلاسل الإمداد <i
                                        class="mdi mdi-arrange-bring-forward"></i></P>
                            </section>
                            <h3>شروط التقديم في المشروع</h3>
                            <section style="text-align: right;">
                                <img src="{{ asset("assets/images/diploma/subj/PP/PP502.png") }}" class="img-fluid float-left"
                                    style="width:300px; height:200px;justify-content: center;" />
                                <h3> : يجب ان تتوفر الشروط التالية </h3>
                                <P><strong> اجتياز العدد المطلوب من مواد الدبلومة</strong> يجب ان يجتاز الطالب
                                    11 مادة دراسية و ينجح فيهم <i class="mdi mdi-arrange-bring-forward"></i>
                                </P>
                                <P><strong> PP501 اجتياز مادة مهارات اعداد المشروع</strong> هيجب ان يجتاز مادة
                                    مهارات اعداد المشروع و ينجح فيها فى الترم الثالث
                                    <i class="mdi mdi-arrange-bring-forward"></i>
                                </P>
                                <P><strong> عدد فريق المشروع </strong> يجب ان يكون عدد فريق مشاريع التخرج لدبلوم
                                    علوم حاسب و نظم المعلومات بحد ادنى 3 طلاب ،
                                    <i class="mdi mdi-arrange-bring-forward"></i>
                                    <br>اما باقى التخصصات تكون المشاريع
                                    فردية كل طالب يقدم مشروع بمفردة
                                </P>
                                <P><strong> معاد تقديم المشروع </strong>
                                    أن يُقدَّم المشروع عادة في الفصل الدراسي الأخير من الدراسة
                                    <i class="mdi mdi-arrange-bring-forward"></i>
                                </P>
                                <P><strong> الالتزام مع مشرف المشروع </strong>
                                    أن يلتزم الطالب بتسليم تقارير دورية للمشرف حول تقدم العمل
                                    <i class="mdi mdi-arrange-bring-forward"></i>
                                </P>
                                <P><strong> اتباع المعايير </strong>
                                    الالتزام بالمعايير الأكاديمية والأخلاقية في البحث العلمي (الأمانة العلمية،
                                    تجنب الانتحال، التوثيق الجيد للمصادر)
                                    <i class="mdi mdi-arrange-bring-forward"></i>
                                </P>
                            </section>
                            <h3>خطوات مشروع التخرج</h3>
                            <section style="text-align: right;">
                                <img src="{{ asset('assets/images/diploma/subj/PP/PP502.png') }}"
                                    class="img-fluid float-left"
                                    style="width:300px; height:200px;justify-content: center;" />
                                <h3>: فى اعداد مشروع التخرج يتم اتباع التالى</h3>
                                <P><strong> اختيار موضوع المشروع</strong>
                                    يختار الطالب (أو مجموعة الطلاب) فكرة من قائمة مقترحة أو يقترح فكرة جديدة بعد
                                    موافقة المشرف
                                    <i class="mdi mdi-arrange-bring-forward"></i>
                                </P>
                                <P><strong>(Proposal) إعداد المقترح </strong>
                                    كتابة وثيقة مبدئية تشمل فكرة المشروع، الأهداف، الأدوات، والمنهجية.
                                    <i class="mdi mdi-arrange-bring-forward"></i>
                                </P>
                                <P><strong>التنفيذ والتوثيق </strong>
                                    العمل على المشروع باستخدام الأدوات والبرمجيات المناسبة، مع توثيق كل مرحلة
                                    <i class="mdi mdi-arrange-bring-forward"></i>
                                </P>
                                <P><strong> المناقشة والتقييم: </strong>
                                    تقديم المشروع أمام لجنة علمية، حيث يتم عرض النتائج ومناقشتها ثم تقييمها وفق
                                    معايير واضحة
                                    <i class="mdi mdi-arrange-bring-forward"></i>
                                </P>
                            </section>
                            <h3>هيئة الإشراف على المشاريع</h3>
                            <section style="text-align: right;">
                                <img src="{{ asset('assets/images/diploma/subj/PP/PP502.png') }}"
                                    class="img-fluid float-left"
                                    style="width:300px; height:200px;justify-content: center;" />
                                <h3> : مسؤوليات عضو هيئة التدريس</h3>
                                <P><strong> توجيه الطالب لاختيار الفكرة</strong>
                                    <i class="mdi mdi-arrange-bring-forward"></i>
                                <ul style="list-style: none !important; ">
                                    <li>
                                        مساعدة الطلاب على اختيار فكرة مناسبة لمجال الدبلوم والتأكد من قابليتها
                                        للتنفيذ
                                        <i class="mdi mdi-numeric-1-box-outline"></i>
                                    </li>
                                    <li>
                                        اقتراح موضوعات بحثية أو تطبيقية تتماشى مع خطة الكلية ورؤية المجتمع
                                        <i class="mdi mdi-numeric-2-box-outline"></i>
                                    </li>
                                </ul>
                                </P>
                                <P><strong> إعداد خطة العمل</strong>
                                    <i class="mdi mdi-arrange-bring-forward"></i>
                                <ul style="list-style: none !important; ">
                                    <li>
                                        وضع جدول زمني للطلاب لمتابعة مراحل التنفيذ
                                        <i class="mdi mdi-numeric-1-box-outline"></i>
                                    </li>
                                    <li>
                                        تحديد الأدوات والبرمجيات واللغات المناسبة للمشروع
                                        <i class="mdi mdi-numeric-2-box-outline"></i>
                                    </li>
                                </ul>
                                </P>
                                <P><strong> المتابعة والإشراف الدوري</strong>
                                    <i class="mdi mdi-arrange-bring-forward"></i>
                                <ul style="list-style: none !important; ">
                                    <li>
                                        عقد لقاءات منتظمة مع الطلاب لمراجعة ما تم إنجازه
                                        <i class="mdi mdi-numeric-1-box-outline"></i>
                                    </li>
                                    <li>
                                        تصحيح المسار عند وجود مشكلات تقنية أو بحثية
                                        <i class="mdi mdi-numeric-2-box-outline"></i>
                                    </li>
                                    <li>
                                        تدريب الطلاب على مهارات البحث العلمي، كتابة التقارير، والعرض التقديمي
                                        <i class="mdi mdi-numeric-3-box-outline"></i>
                                    </li>
                                </ul>
                                </P>
                                <P><strong> التقييم الأكاديمي</strong>
                                    <i class="mdi mdi-arrange-bring-forward"></i>
                                <ul style="list-style: none !important; ">
                                    <li>
                                        تقييم المشروع من حيث الجودة العلمية، الابتكار، ودقة التنفيذ
                                        <i class="mdi mdi-numeric-1-box-outline"></i>
                                    </li>
                                    <li>
                                        الإشراف على إعداد نسخة المشروع النهائية وتسليمها
                                        <i class="mdi mdi-numeric-2-box-outline"></i>
                                    </li>
                                    <li>
                                        المشاركة في لجنة مناقشة المشاريع وتقدير الدرجات النهائية
                                        <i class="mdi mdi-numeric-3-box-outline"></i>
                                    </li>
                                </ul>
                                </P>
                                <h3>: مشرفين المشاريع </h3>
                                <br><br>
                                <div class="container-fluid">
                                    <div class="row el-element-overlay"
                                        style=" display: flex; align-items: center;justify-content: center;">

                                        {{-- هيتم تكرارها بال forech --}}
                                        <!-- الكارت -->
                                        <div class="col-lg-3 col-md-6">
                                            <div class="card"
                                                style="background-color: #32383e; text-align: center; color: white; border-radius: 12px;">
                                                <div class="el-card-item">
                                                </div>
                                                <div class="el-card-content p-3">
                                                    <h4 class="m-b-0">د/ صلاح مهدى</h4>
                                                    <span class="text-muted">قسم الإحصاء</span>
                                                    <br><br>
                                                    <!-- زر عرض التفاصيل -->
                                                    <button class="btn btn-outline-light btn-sm mt-2" data-toggle="modal"
                                                        data-target="#doctorModal">
                                                        <i class="fas fa-info-circle"></i> عرض التفاصيل
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- الـ Modal -->
                                    <div class="modal fade" id="doctorModal" tabindex="-1" role="dialog"
                                        aria-labelledby="doctorModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content"
                                                style="background-color: #2b2f36; color: #f1f1f1; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.6);">
                                                <!-- الهيدر -->
                                                <div class="modal-header border-0 text-center w-100">
                                                    <h5 class="modal-title w-100" id="doctorModalLabel"
                                                        style="color: #ffffff;">معلومات الدكتور</h5>
                                                    <button type="button" class="close text-white" data-dismiss="modal"
                                                        aria-label="Close"
                                                        style="position: absolute; left: 15px; top: 15px;">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <!-- البادي -->
                                                <div class="modal-body text-center">
                                                    <img src="{{ asset("assets/images/users/dr/salah.jpg") }}" alt="user"
                                                        class="rounded-circle mb-3" width="120" height="120"
                                                        style="border: 3px solid #6a7a8c; box-shadow: 0px 4px 12px rgba(0,0,0,0.5);">
                                                    <h4 style="color: #ffffff;">د/ صلاح مهدى</h4>
                                                    <p class="text-muted">قسم الإحصاء</p>
                                                    <hr style="border-color: #444;">
                                                    <p>
                                                        <strong>مكان المكتب</strong> <i
                                                            class="fas fa-map-marker-alt text-info"></i>
                                                        <br>
                                                        المبنى الأساسي - الدور الرابع
                                                    </p>
                                                    <p>
                                                        <strong>الساعات المكتبية</strong> <i
                                                            class="fas fa-clock text-warning"></i>
                                                        <br>
                                                        from 05:00pm to 07:00pm
                                                    </p>
                                                    <p>
                                                        <strong>الهاتف / واتساب</strong> <i
                                                            class="fas fa-phone text-success"></i>
                                                        <br>
                                                        +(20) 1034688362
                                                    </p>
                                                </div>
                                                <!-- الفوتر -->
                                                <div class="modal-footer justify-content-center border-0">
                                                    <button type="button" class="btn btn-outline-light"
                                                        data-dismiss="modal">إغلاق</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- هيتم تكرارها بال forech --}}

                                </div>
                        </div>
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
