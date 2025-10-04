<?php $__env->startSection('title', 'المنصة الدراسية الالكترونية '); ?>
<?php $__env->startSection('page-title', 'الصفحة الرأيسية'); ?>
<?php $__env->startSection('contant'); ?>
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
                                    <i class="mdi mdi-emoticon font-20 text-muted"></i>
                                    <p class="font-16 m-b-5">المواد المسجلة حاليا</p>
                                </div>
                                <div class="ml-auto">
                                    <h1 class="font-light text-right">5</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 75%; height: 6px;"
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
                                    <i class="mdi mdi-emoticon-cool font-20 text-muted"></i>
                                    <p class="font-16 m-b-5">المواد التى تم اجتيازها </p>
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
                                    <i class="mdi mdi-emoticon-neutral font-20 text-muted"></i>
                                    <p class="font-16 m-b-5">المواد المتبقية</p>
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
                                    <i class="mdi mdi-emoticon-happy font-20 text-muted"></i>
                                    <p class="font-16 m-b-5">اجمالى مواد الدبلومة</p>
                                </div>
                                <div class="ml-auto">
                                    <h1 class="font-light text-right">20</h1>
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
            <div class="row" dir="rtl">
                <div class="col-12" id="diploma">

                    <?php echo $__env->make('partial.diploma', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="m-b-20" style="text-align: right;">ملفات ارشادية </h4>
                            <div class="card" style="justify-content: center;text-align: center;">
                                <div class="card-body " id="files">
                                    <h4 class="card-title ">ملفات مهمة </h4>
                                    <h5 class="card-subtitle">يمكنك الاطلاع على اهم الملفات الخاصة بالكلية </h5>
                                    <div class="table-responsive">
                                        <table class="table v-middle">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">اسم الملف</th>
                                                    <th class="border-top-0">وصف الملف</th>
                                                    <th class="border-top-0">مشاهدة الملف</th>
                                                    <th class="border-top-0">تحميل الملف</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                   
                                                <tr>
                                                    <td> <span class="round label-primary"><i class="ti-file "></i>
                                                        </span>
                                                        دليل الطالب </td>
                                                    <td>
                                                        <h6><a href="iframe-show-file.html" class="link">ملف
                                                                شامل
                                                                يوضح للطلاب جميع الإرشادات الأكاديمية والإدارية،
                                                                والخدمات المتاحة داخل الكلية</a></h6>
                                                    </td>
                                                    <td>
                                                        <a href="iframe-show-file.html" class="link"><i
                                                                class="ti-eye"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo e(asset("assets/FSSR_files/StudentGuide.pdf")); ?>" class="link"
                                                            download><i class="ti-download"></i></a>
                                                    </td>
                                                <tr>
                                                    <td><span class="round  label-primary"><i class="ti-file"></i></span>
                                                        علوم البيانات</td>
                                                    <td>
                                                        <h6><a href="iframe-show-file.html" class="link">وثيقة
                                                                رسمية تتضمن أهداف ومحتوى برنامج علوم البيانات،
                                                                ونظام الدراسة والامتحانات، والاشتراطات
                                                                الأكاديمية </a></h6>
                                                    </td>
                                                    <td>
                                                        <a href="iframe-show-file.html" class="link"><i
                                                                class="ti-eye"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo e(asset("assets/FSSR_files/لائحة-علوم-البيانات.pdf")); ?>"
                                                            class="link" download><i class="ti-download"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="round label-primary"><i class="ti-file"></i></span>
                                                        الدليل التعريفى
                                                    </td>
                                                    <td>
                                                        <h6><a href="iframe-show-file.html" class="link">ملف يضم
                                                                اللوائح المنظمة لبرامج الدراسات العليا بالجامعة،
                                                                ويحدد السياسات العامة واللوائح الأكاديمية </a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <a href="iframe-show-file.html" class="link"><i
                                                                class="ti-eye"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo e(asset("assets/FSSR_files/CairoUnivStud_Guide0.pdf")); ?>"
                                                            class="link" download><i class="ti-download"></i></a>
                                                    </td>
                                                </tr>
                                                   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                    <!-- ============================================================== -->
                    <!-- Recent comment and chats -->
                    <!-- ============================================================== -->
                    <h4 class="m-b-20" style="text-align: right;">المواد الدراسية </h4>
                    <div class="row" dir="rtl">
                        <!-- column -->
                        <div class="col-lg-6">
                            <div class="card" style="justify-content: center;text-align: center;">
                                <div class="card-body btn-dark">
                                    <h4 class="card-title">مواد متطلبات الدبلومة لكل الاقسام</h4>
                                </div>
                                   
                                <div class="comment-widgets scrollable" style="height:430px;">
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row">
                                        <div class="comment-text w-100">
                                            <div class="p-2">
                                                <img src="<?php echo e(asset("assets/images/diploma/subj/main_subj.jpg")); ?>" alt="user"
                                                    width="50" class="rounded-circle">
                                            </div>
                                            <h6 class="font-medium"><strong>الطرق الاحصائية</strong> </h6>
                                            <span class="m-b-15 d-block">مقرر يقدم الأسس النظرية والتطبيقية
                                                للإحصاء الوصفي والاستدلالي، مع التدريب على استخدام الأساليب
                                                الإحصائية في تحليل البيانات.</span>
                                            <div class="comment-footer">
                                                <span class="label label-rounded label-danger"><a href="subj-contant.html"
                                                        class="link"><i class="ti-eye"
                                                            style="color: white;"></i></a></span>
                                                <span class="label label-rounded label-danger">EN</span>
                                                <span class="label label-rounded label-danger">AS500</span>
                                                <span class="label label-rounded label-danger">Statistical
                                                    Methods </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row m-t-0">
                                        <div class="comment-text w-100">
                                            <div class="p-2">
                                                <img src="<?php echo e(asset("assets/images/diploma/subj/main_subj.jpg")); ?>" alt="user"
                                                    width="50" class="rounded-circle">
                                            </div>
                                            <h6 class="font-medium"><strong> طرق رياضية </strong></h6>
                                            <span class="m-b-15 d-block">مادة أساسية تهدف إلى إكساب الطلاب
                                                الأدوات الرياضية الضرورية لدراسة النماذج الكمية وتطبيقاتها في
                                                الإحصاء وبحوث العمليات.</span>
                                            <div class="comment-footer">
                                                <span class="label label-rounded label-primary"><a href=""
                                                        class="link"><i class="ti-eye"
                                                            style="color: white;"></i></a></span>
                                                <span class="label label-rounded label-primary">EN</span>
                                                <span class="label label-rounded label-primary">MS500</span>
                                                <span class="label label-rounded label-primary">Mathematical
                                                    Methods</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row">
                                        <div class="comment-text active w-100">
                                            <div class="p-2">
                                                <img src="<?php echo e(asset("assets/images/diploma/subj/main_subj.jpg")); ?>" alt="user"
                                                    width="50" class="rounded-circle">
                                            </div>
                                            <h6 class="font-medium"> <strong> مقدمة فى الاحصاء الحيوى و
                                                    السكانى</strong></h6>
                                            <span class="m-b-15 d-block">مادة تشرح المفاهيم الأساسية للإحصاء
                                                التطبيقي في مجالات الصحة العامة والدراسات السكانية، وتطبيقاته في
                                                تحليل البيانات الطبية والديموغرافية. </span>
                                            <div class="comment-footer ">
                                                <span class="label label-rounded label-success"><a href=""
                                                        class="link"><i class="ti-eye"
                                                            style="color: white;"></i></a></span>
                                                <span class="label label-success label-rounded">AR</span>
                                                <span class="label label-success label-rounded">DB500</span>
                                                <span class="label label-success label-rounded">Introduction to
                                                    Biostatistics & Demography </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row">
                                        <div class="comment-text w-100">
                                            <div class="p-2">
                                                <img src="<?php echo e(asset("assets/images/diploma/subj/main_subj.jpg")); ?>" alt="user"
                                                    width="50" class="rounded-circle">
                                            </div>
                                            <h6 class="font-medium"> <strong> مقدمة فى علوم لحاسب</strong></h6>
                                            <span class="m-b-15 d-block">مقرر تعريفي يهدف إلى تزويد الطلاب
                                                بالمفاهيم الأساسية للحاسب الآلي والبرمجة، مع التركيز على
                                                استخدامه في التطبيقات الأكاديمية والبحثية. </span>
                                            <div class="comment-footer">
                                                <span class="label label-rounded label-danger"><a href=""
                                                        class="link"><i class="ti-eye"
                                                            style="color: white;"></i></a></span>
                                                <span class="label label-rounded label-danger">EN</span>
                                                <span class="label label-rounded label-danger">CS500</span>
                                                <span class="label label-rounded label-danger"> Introduction to
                                                    Computer Sciences </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row m-t-0">
                                        <div class="comment-text w-100">
                                            <div class="p-2">
                                                <img src="<?php echo e(asset("assets/images/diploma/subj/main_subj.jpg")); ?>" alt="user"
                                                    width="50" class="rounded-circle">
                                            </div>
                                            <h6 class="font-medium"><strong>مقدمة فى بحوث العمليات</strong></h6>
                                            <span class="m-b-15 d-block">مقرر يوضح مبادئ وأساليب بحوث العمليات
                                                ودورها في حل المشكلات واتخاذ القرارات، مع تقديم نماذج كمية مبسطة
                                                للتطبيق.</span>
                                            <div class="comment-footer">
                                                <span class="label label-rounded label-primary"><a href=""
                                                        class="link"><i class="ti-eye"
                                                            style="color: white;"></i></a></span>
                                                <span class="label label-rounded label-primary">EN</span>
                                                <span class="label label-rounded label-primary">OR500</span>
                                                <span class="label label-rounded label-primary">Introduction to
                                                    Operations Research </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-lg-6">
                            <div class="card" style="justify-content: center;text-align: center;">
                                <div class="card-body btn-dark">
                                    <h4 class="card-title">المواد المسجلة الترم الحالى </h4>
                                </div>
                                   
                                <div class="comment-widgets scrollable" style="height:430px;">
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row">
                                        <div class="comment-text w-100">
                                            <div class="p-2">
                                                <img src="<?php echo e(asset("assets/images/diploma/subj/General/AS500.png")); ?>" alt="user"
                                                    width="50" height="50" class="rounded-circle">
                                            </div>
                                            <h6 class="font-medium"><strong>الطرق الاحصائية</strong> </h6>
                                            <span class="m-b-15 d-block">مقرر يقدم الأسس النظرية والتطبيقية
                                                للإحصاء الوصفي والاستدلالي، مع التدريب على استخدام الأساليب
                                                الإحصائية في تحليل البيانات.</span>
                                            <div class="comment-footer">
                                                <span class="label label-rounded label-danger"><a href="subj-contant.html"
                                                        class="link"><i class="ti-eye"
                                                            style="color: white;"></i></a></span>
                                                <span class="label label-rounded label-danger">EN</span>
                                                <span class="label label-rounded label-danger">AS500</span>
                                                <span class="label label-rounded label-danger">Statistical
                                                    Methods </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row m-t-0">
                                        <div class="comment-text w-100">
                                            <div class="p-2">
                                                <img src="<?php echo e(asset("assets/images/diploma/subj/General/MS500.png")); ?>" alt="user"
                                                    width="50" height="50" class="rounded-circle">
                                            </div>
                                            <h6 class="font-medium"><strong> طرق رياضية </strong></h6>
                                            <span class="m-b-15 d-block">مادة أساسية تهدف إلى إكساب الطلاب
                                                الأدوات الرياضية الضرورية لدراسة النماذج الكمية وتطبيقاتها في
                                                الإحصاء وبحوث العمليات.</span>
                                            <div class="comment-footer">
                                                <span class="label label-rounded label-primary"><a href=""
                                                        class="link"><i class="ti-eye"
                                                            style="color: white;"></i></a></span>
                                                <span class="label label-rounded label-primary">EN</span>
                                                <span class="label label-rounded label-primary">MS500</span>
                                                <span class="label label-rounded label-primary">Mathematical
                                                    Methods</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row">
                                        <div class="comment-text active w-100">
                                            <div class="p-2">
                                                <img src="<?php echo e(asset("assets/images/diploma/subj/General/DB500.png")); ?>" alt="user"
                                                    width="50" height="50" class="rounded-circle">
                                            </div>
                                            <h6 class="font-medium"> <strong> مقدمة فى الاحصاء الحيوى و
                                                    السكانى</strong></h6>
                                            <span class="m-b-15 d-block">مادة تشرح المفاهيم الأساسية للإحصاء
                                                التطبيقي في مجالات الصحة العامة والدراسات السكانية، وتطبيقاته في
                                                تحليل البيانات الطبية والديموغرافية. </span>
                                            <div class="comment-footer ">
                                                <span class="label label-rounded label-success"><a href=""
                                                        class="link"><i class="ti-eye"
                                                            style="color: white;"></i></a></span>
                                                <span class="label label-success label-rounded">AR</span>
                                                <span class="label label-success label-rounded">DB500</span>
                                                <span class="label label-success label-rounded">Introduction to
                                                    Biostatistics & Demography </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row">

                                        <div class="comment-text w-100">
                                            <div class="p-2">
                                                <img src="<?php echo e(asset("assets/images/diploma/subj/General/CS500.png")); ?>" alt="user"
                                                    width="50" height="50" class="rounded-circle">
                                            </div>
                                            <h6 class="font-medium"> <strong> مقدمة فى علوم لحاسب</strong></h6>
                                            <span class="m-b-15 d-block">مقرر تعريفي يهدف إلى تزويد الطلاب
                                                بالمفاهيم الأساسية للحاسب الآلي والبرمجة، مع التركيز على
                                                استخدامه في التطبيقات الأكاديمية والبحثية. </span>
                                            <div class="comment-footer">
                                                <span class="label label-rounded label-danger"><a href=""
                                                        class="link"><i class="ti-eye"
                                                            style="color: white;"></i></a></span>
                                                <span class="label label-rounded label-danger">EN</span>
                                                <span class="label label-rounded label-danger">CS500</span>
                                                <span class="label label-rounded label-danger"> Introduction to
                                                    Computer Sciences </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row m-t-0">
                                        <div class="comment-text w-100">
                                            <div class="p-2">
                                                <img src="<?php echo e(asset("assets/images/diploma/subj/General/OR500.png")); ?>" alt="user"
                                                    width="50" height="50" class="rounded-circle">
                                            </div>
                                            <h6 class="font-medium"><strong>مقدمة فى بحوث العمليات</strong></h6>
                                            <span class="m-b-15 d-block">مقرر يوضح مبادئ وأساليب بحوث العمليات
                                                ودورها في حل المشكلات واتخاذ القرارات، مع تقديم نماذج كمية مبسطة
                                                للتطبيق.</span>
                                            <div class="comment-footer">
                                                <span class="label label-rounded label-primary"><a href=""
                                                        class="link"><i class="ti-eye"
                                                            style="color: white;"></i></a></span>
                                                <span class="label label-rounded label-primary">EN</span>
                                                <span class="label label-rounded label-primary">OR500</span>
                                                <span class="label label-rounded label-primary">Introduction to
                                                    Operations Research </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Projects\مشروع الكلية\project code\f.s.s.r\resources\views/index.blade.php ENDPATH**/ ?>