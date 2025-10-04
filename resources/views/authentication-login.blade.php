@extends('layout.auth')
@section('title-auth','المنصة الدراسية الالكترونية | تسجيل الدخول')
@section('strong-title-form','تسجيل الدخول للمنصة الدراسية ')
@section('contant-auth')
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal m-t-20" id="loginform" action="index.html">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder="كود المستخدم" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i
                                                class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg"
                                        placeholder="الرقم القومى" aria-label="Password" aria-describedby="basic-addon1"
                                        id="password">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">تذكرنى</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <button class="btn btn-dark btn-lg btn-info" type="submit">تسجيل
                                            الدخول</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
@endsection
