@extends('layout.auth')
@section('title-auth', 'المنصة الدراسية الالكترونية | اعادة تعيين كلمة المرور')
@section('strong-title-form', 'تغيير كلمة المرور')
@section('contant-auth')
    <!-- Form -->
    <div class="row" dir="rtl">
        <div class="col-12">
            <form class="form-horizontal m-t-20" action="index.html">
                <div class="form-group row">
                    <div class="col-12">
                        <input class="form-control form-control-lg" type="text" required="" placeholder="كودالمستخدم">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <input class="form-control form-control-lg" type="text" required=""
                            placeholder="كلمة السر الجديد">
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="col-xs-12 p-b-20">
                        <button class="btn btn-dark btn-lg btn-info" type="submit">اعادة تعيين كلمة
                            المرور</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
