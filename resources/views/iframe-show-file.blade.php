@extends('layout.master')
@section('title', 'دليل الطالب ')
@section('page-title', ' دليل الطالب ')
@section('contant')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <div style="text-align: center;">
            <br><br><br>
            <strong class="card-title" style="font-size: 25px;">ملف دليل الطالب </strong>
            <br><br>
            <iframe src="{{ asset("assets/FSSR_files/StudentGuide.pdf") }}" width="900px" height="1000px" class="frame"></iframe>
        </div>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
    @endsection
