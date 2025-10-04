@extends('layout.master')
@section('title', 'الطرق الاحصائية')
@section('page-title', 'الطرق الاحصائية')
@section('contant')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-8 col-xl-9 col-md-9" style="direction: rtl; text-align: center;">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><strong>بيانات الطلاب المسجلين فى المادة</strong></h4>
                        <br><br>
                        <div class="table-responsive">
                            <table id="file_export" class="table table-bordered nowrap display">
                                <thead>
                                    <tr>
                                        <th>م</th>
                                        <th>كود المادة </th>
                                        <th>كود الطالب</th>
                                        <th>اسم الطالب</th>
                                        <th>دبلوم</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>AS500</td>
                                        <td>240200405</td>
                                        <td>
                                            <a href="app-contact-detail.html"> ندى خالد</a>
                                        </td>
                                        <td><span class="label label-danger">Computer Science(CS)</span> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>AS500</td>
                                        <td>240200404</td>
                                        <td>
                                            <a href="app-contact-detail.html"> دينا صلاح</a>
                                        </td>
                                        <td><span class="label label-info"> Information Systems and
                                                Technology(IST) </span> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>AS500</td>
                                        <td>240200403</td>
                                        <td>
                                            <a href="app-contact-detail.html"> كرستين مقبل</a>
                                        </td>
                                        <td><span class="label label-success">Statistics(STAT)</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>AS500</td>
                                        <td>240200402</td>
                                        <td>
                                            <a href="app-contact-detail.html">ياسمين حسين</a>
                                        </td>
                                        <td><span class="label label-inverse">Biostatistics and Demography(BD)
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td>AS500</td>
                                        <td>240200401</td>
                                        <td>
                                            <a href="app-contact-detail.html">عبد الرحمن عمر</a>
                                        </td>
                                        <td><span class="label label-primary">Operations Research(OR)</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6
                                        </td>
                                        <td>AS500</td>
                                        <td>240200400</td>
                                        <td>
                                            <a href="app-contact-detail.html">محمود مدحت</a>
                                        </td>
                                        <td><span class="label label-warning">Operations Management(OM) </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-xl-3 col-md-3">
                <div class="card">
                    <div class="border-bottom p-15">
                        <img class="card-img-top" src="{{ asset("assets/images/diploma/subj/General/AS500.png") }}" alt="Card image cap"
                            style="max-height: 450px">
                        <a href="subj-contant.html"><button type="button" class="btn btn-info" data-toggle="modal"
                                data-target="#Sharemodel" style="width: 100%">
                                AS500 - Statistical Methods </button></a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="ابحث عن مادة اخرى"
                                    aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <button class="btn btn-info">بحث</button>
                                </div>
                            </div>
                        </form>
                        <div class="list-group m-t-30">
                            <a href="javascript:void(0)" class="list-group-item active"><i
                                    class="ti-layers m-r-10"></i>اعضاء تدريس المادة</a>
                            <a href="javascript:void(0)" class="list-group-item"><i class="ti-star m-r-10"></i>د/صلاح
                                مهدى</a>
                        </div>
                        <h4 class="card-title m-t-30">Total : 650 student</h4>
                        <div class="list-group">
                            <a href="javascript:void(0)" class="list-group-item"><i class="ti-bookmark m-r-10"></i>
                                Information Systems and Technology(IST)
                                <span class="badge badge-info float-right">20</span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item"><i class="ti-bookmark  m-r-10"></i>
                                Statistics(STAT)
                                <span class="badge badge-success float-right">12</span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item"><i class="ti-bookmark  m-r-10"></i>
                                Biostatistics and Demography(BD)
                                <span class="badge badge-dark float-right">22</span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item"><i class="ti-bookmark  m-r-10"></i>Computer
                                Science(CS)
                                <span class="badge badge-danger float-right">101</span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item"><i class="ti-bookmark  m-r-10"></i>
                                Operations Management(OM)
                                <span class="badge badge-warning float-right" style="color: white;">101</span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item"><i class="ti-bookmark  m-r-10"></i>
                                Operations Research(OR)
                                <span class="badge badge-primary float-right">101</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
