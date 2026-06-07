@extends('layouts.app')
@section('title')
    Đăng Nhập
@endsection

@section('content')
    <section class="login">
        <div class="container-login">
            <div class="login__inner">
                <div class="login-left">
                    <h2 class="login-title">Đăng Nhập</h2>
                    <p class="login-desc">
                        Nếu bạn đã có tài khoản, hãy đăng nhập để tích
                        lũy điểm thành viên và nhận được những ưu đãi
                        tốt hơn!
                    </p>

                    <form action="" class="form-login" onsubmit="return dangNhap();">
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-input login-label"
                                placeholder="example@gmail.com" />
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Mật khẩu</label>
                            <input type="password" name="password" id="password" class="form-input login-label"
                                placeholder="Nhập mật khẩu" />
                        </div>

                        <div class="form-wrap">
                            <div class="form-remind">
                                <input type="checkbox" name="remember" id="remember" />
                                <label for="">Lưu mật khẩu</label>
                            </div>
                            <div class="form-remind">
                                <a href="#" class="forget">Bạn quên mật khẩu?</a>
                            </div>
                        </div>

                        <button class="btn-subcribe btn-login">
                            ĐĂNG NHẬP
                        </button>

                        <a href="register.html" class="register-link">TẠO TÀI KHOẢN</a>
                    </form>
                </div>

                <div class="login-right">
                   <img src={{ asset('img/login.webp') }} alt="" class="login-img" />
                </div>
            </div>
        </div>
    </section>
@endsection
