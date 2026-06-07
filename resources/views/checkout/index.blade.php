@extends('layouts.app')
@section('title')
    Thanh toán
@endsection

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Thanh Toán</h4>
                        <div class="breadcrumb__links">
                            <a href={{ route('home') }}>Home</a>
                            <a href={{ route('shop') }}>Shop</a>
                            <span>Thanh toán</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="coupon__code"><span class="icon_tag_alt"></span><a href={{ route('cart') }}>Click
                                    vào</a> đây để nhập mã giảm giá</h6>
                            <h6 class="checkout__title">Chi tiết thanh toán</h6>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Họ và tên<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text" placeholder="Nhập địa chỉ cụ thể..." class="checkout__input__add">
                            </div>
                            <div class="checkout__input">
                                <p>Xã/Phường<span>*</span></p>
                                <input type="text">
                            </div>

                            <div class="checkout__input">
                                <p>Thành phố<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Ghi chú<span>*</span></p>
                                <input type="text" placeholder="Nhập ghi chú của bạn...">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Đơn hàng của bạn</h4>
                                <div class="checkout__order__products">Sản phẩm <span>Giá</span></div>
                                <ul class="checkout__total__products">
                                    <li>01. Vanilla salted caramel <span>$ 300.0</span></li>
                                    <li>02. German chocolate <span>$ 170.0</span></li>
                                    <li>03. Sweet autumn <span>$ 170.0</span></li>
                                    <li>04. Cluten free mini dozen <span>$ 110.0</span></li>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Tạm tính <span>$750.99</span></li>
                                    <li>Ship <span>$ 30</span></li>
                                    <li>Tổng cộng <span>$750.99</span></li>
                                </ul>

                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Thanh toán khi nhận hàng (COD)
                                        <input type="checkbox" checked id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Chuyển khoản ngân hàng
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection
