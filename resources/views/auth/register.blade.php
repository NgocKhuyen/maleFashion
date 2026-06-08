@extends('layouts.app')
@section('title')
    Đăng Kí
@endsection

@section('content')
    <section class="login register">
        <div class="container-login">
            <div class="login__inner">
                <div class="login-left">
                    <h2 class="login-title">Đăng Kí</h2>
                    <p class="login-desc">
                        Hãy đăng ký ngay để tích lũy điểm thành viên và nhận được những ưu đãi tốt hơn!
                    </p>
                    <form action="" class="form-login">
                        <div class="form-group">
                            <label for="name" class="form-label">Họ và tên</label>
                            <input type="text" name="name" id="name" class="form-input login-label"
                                placeholder="Họ và tên">
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-input login-label"
                                placeholder="example@gmail.com">
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" name="password" id="password" class="form-input login-label"
                                placeholder="Nhập mật khẩu">
                        </div>

                        <div class="form-group">
                            <label for="confirm_password" class="form-label">Nhập lại mật khẩu</label>
                            <input type="password" name="confirm_password" id="confirm_password"
                                class="form-input login-label" placeholder="Nhập lại mật khẩu">
                        </div>

                        <button class="btn-subcribe btn-login">ĐĂNG KÍ</button>
                    </form>
                </div>
                <div class="login-right">
                    <img src={{ asset('img/register.png') }} alt="" class="login-img" />
                </div>
            </div>
        </div>

    </section>
@endsection
