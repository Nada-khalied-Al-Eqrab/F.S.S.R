@extends('layout.master')
@section('title', ' تسجيل المواد الدراسية ')
@section('page-title', ' تسجيل المواد الدراسية ')
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
                <img class="card-img-top" src="{{ asset("assets/images/steps/fssr-subj.png") }}" alt="Card image cap"
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
                    <h4 class="card-title" style="text-align: center;"> <strong> خطوات تسجيل المواد الرداسية
                        </strong>
                    </h4>
                    <p style="text-align: center;">
                        تنبية هام ، يتم تسجيل المواد الدراسية من على المنصة الخاصة بتسجيل المواد الدراسية و
                        معرفت اماكن الامتحانات و معرفة النتائج
                        <i class="mdi mdi-arrange-bring-forward"></i>
                        <br><br>
                        <a href="https://csds.cu.edu.eg/ISSR_Student/" class="btn btn-secondary"
                            style="border-radius: 30px;"> قم بزيارة المنصة الان <i class="icon-globe"></i></a>
                        <br>
                    </p>
                    <h6 class="card-subtitle"></h6>
                    <div id="example-manipulation" class="m-t-40">
                        <h3> كيفية الحصول على كود الطالب </h3>
                        <section style="text-align: center;">
                            <img src="{{ asset("assets/images/steps/step1.png") }}" class="img-fluid float-left"
                                style="width:50%; height:50%;justify-content: center;" />
                            <h3>: للحصول على كود الطالب يتكم اتباع التالى </h3>
                            <P><i class="mdi mdi-arrange-bring-forward float-right"></i>
                                <strong> قم بزيارة الموقع الرأيسى</strong> :
                                يتم زيارة الموقع الرأيسي الخاص بالنتائج الدراسية و تسجيل المواد من خلال الزر
                                التالى:
                                <br>
                                <a href="https://csds.cu.edu.eg/" class="btn btn-secondary">اضغط هنا </a>
                            </p>
                            <P><i class="mdi mdi-arrange-bring-forward float-right"></i>
                                <strong> كتابة الاسم ثلاثى او الرقم القومى</strong> :
                                اكتب اسمك باللغة العربية ثلاثى او رقمك القومى للتتعرف عليك المنصة
                            </P>
                            <P><i class="mdi mdi-arrange-bring-forward float-right"></i>
                                <strong> الضغط على زر الحصول على كود الطالب</strong>:
                                اضغط على زر الحصول على كود الطالب و سيظهر لك الكود الخاص بك فى فى مربع اخضر
                                ، و ان لم يظهر فأعلم انة لم يتم اضافتك فى نظام الكلية بعد و يجب عليك
                                الانتظار حتى تتم اضافتك
                            </P>
                            <P><i class="mdi mdi-arrange-bring-forward float-right"></i>
                                <strong> الضغط على زر الدخول على النظام</strong> :
                                اذا اردت تسجيل الدخول على المنصة اضغط على الزر
                            </P>
                        </section>
                        <h3> كيفية تسجيل الدخول</h3>
                        <section style="text-align: center;">
                            <img src="{{ asset("assets/images/steps/step2.png") }}" class="img-fluid float-left"
                                style="width:50%; height:50%;justify-content: center;" />
                            <h3> : لتسجيل الدخول يتم اتباع الخطوات التالية </h3>
                            <P><i class="mdi mdi-arrange-bring-forward float-right"></i>
                                <strong> الدخول على النظام </strong> :
                                يتم الدخول على النظام لكى تتمكن من تسجيل الدخول على المنصة من الزر التالى
                                <br>
                                <a href="https://csds.cu.edu.eg/ISSR_Student/" class="btn btn-secondary">اضغط هنا </a>
                            </P>
                            <P><i class="mdi mdi-arrange-bring-forward float-right"></i>
                                <strong> كتابة اسم المستخدم و كلمة المرور</strong> :
                                يتم كتابة كود الطالب الذى حصلت علية مكان حقل اسم المستخدم ، ثم يتم كتابة
                                الرقم القومى الخاص بك مكان كلمة الرمور ، و يفضل عدم مشاركة رقمك القومى او
                                الكود الخاص بك مع اى احد ، كما يمكنك تغيير كلمة المرور لاحقا عند تسجيل
                                الدخول
                            </P>
                            <P><i class="mdi mdi-arrange-bring-forward float-right"></i>
                                <strong> الضغط على زر تسجيل الدخول </strong> :
                                بعد كتابة اسم المستخدم و كلمة المرور يتم االضغط على زر تسجيل الدخول على
                                النظام ، و ستنتقل مباشرة الى المنصة الخاصة بتسجيل المواد و معرفة النتائج
                                الدراسية
                            </P>
                        </section>
                        <h3> كيفية تسجيل المواد الدراسية</h3>
                        <section style="text-align: center;">
                            <img src="{{ asset("assets/images/steps/step3.png")  }}" class="img-fluid float-left"
                                style="width:50%; height:50%;justify-content: center;" />
                            <h3>: لتسجيل مواد الترم الحالى يجب اتباع الخطوات التالية</h3>
                            <P><i class="mdi mdi-arrange-bring-forward float-right"></i>
                                <strong> اختار تبويب الخدمات المتاحة </strong>:
                                من الشريط الجانبى ، اختار من القائمة الرأيسية تبويب الخدمات المتاحة
                            </P>
                            <P> <i class="mdi mdi-arrange-bring-forward float-right"></i>
                                <strong>اختار تبويب التسجيل فى مقررات الترم الحالى </strong>:
                                عند اختيار التسجيل فى مقررات الترم الحالى ، سيتم فتح لك صفحة تسجيل المواد
                                المتاحة لك للترم الحالى
                            </P>
                            <P> <i class="mdi mdi-arrange-bring-forward float-right"></i>
                                <strong> اختيار المواد الدراسية </strong>:
                                يتم اختيار المواد الدراسة المتاحة لك بحث يمكنك بحد ادنى تسجيل ثلاث مواد ، و
                                بحد اقصى تسجيل خمس مواد ، و هناك حالى خاصة بالمادة السادسة و لا تفتح لك الا
                                اذا قدمت طلب خاص بها
                            </P>
                            <P> <i class="mdi mdi-arrange-bring-forward float-right"></i>
                                <strong> الضغط على زر التسجيل ، و التأكد: </strong>:
                                بعد اختيار المواد تضغط على زر التسجيل ، ثم يظهر لك فوق لينك تحميل ملف خاص
                                بالمواد التى سجلتها للتأكد انك سجلت بطريقة صحيحة، كمان يمكنك حذف او اضافة او
                                استبدال مادة فى خلال فترى التسجيل المتاحة
                            </P>
                        </section>
                        <h3> كيفية معرفة اماكن الامتحانات و النتائج </h3>
                        <section style="text-align: center;">
                            <img src="{{ asset("assets/images/steps/step4.png") }}" class="img-fluid float-left"
                                style="width:50%; height:50%;justify-content: center;" />
                            <h3> : لمعرفة اماكن الامتحانات و النتائج يتم اتباع التالى</h3>
                            <P><i class="mdi mdi-arrange-bring-forward float-right"></i>
                                <strong> اختار تبويب الخدمات المتاحة </strong>:
                                من الشريط الجانبى ، اختار من القائمة الرأيسية تبويب الخدمات المتاحة
                            </P>
                            <P> <i class="mdi mdi-arrange-bring-forward float-right"></i>
                                <strong>اختار تبويب التسجيلات الحالية و اماكن الامتحانات </strong>:
                                عندما ينزل جدول الامتحانات النهائية للمواد ، يظهر لك اماكن اللجان الخاصة بك
                                و برقم جلوسك ، و كل مادة يكون لها مكان لجنة مختلف عن الاخرى
                            </P>
                            <P> <i class="mdi mdi-arrange-bring-forward float-right"></i>
                                <strong> اختار تبويب التسجيلات و النتائج السابقة </strong>:
                                عند ظهور نتائج الامتحانات ، تظهر لك المواد الخاصة و درجاتك فيها ، و لكل ترم
                                موادة الخاصة
                            </P>
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
