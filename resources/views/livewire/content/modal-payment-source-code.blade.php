<div class="modal fade" id="exampleModalbalancebox" tabindex="-1" role="dialog"
aria-labelledby="exampleModalbalancebox" aria-modal="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="col-xl-12">
            <div class="card balance-box mb-0">
                <div class="card-body">
                    <div class="balance-profile">

                        <input type="hidden" id="price" value="0">
                        <input type="hidden" id="id" value="11">

                        <label> Phương Thức Thanh Toán</label>
                        <input type="hidden" id="payment_method" name="payment_method" value="">

                        <ul>
                            <li>
                                <div class="balance-item danger">
                                    <div class="balance-icon-wrap">
                                        <div class="">
                                            <i class="icofont icofont-cur-dollar-flase"></i>
                                        </div>
                                    </div>

                                    <label class="form-check-label" for="radio14">
                                        <div> <span class="f-12 f-light"
                                                style="white-space: nowrap;"> Số Dư Tài Khoản
                                            </span> <span class="f-w-600">0<sup>đ</sup></span>
                                            <div style="display: flex">
                                                <span
                                                    class="badge badge-light-danger rounded-pill"
                                                    id="badge_radio14_df">Không Đủ Điều
                                                    Kiện</span>

                                                <span
                                                    class="badge badge-light-success rounded-pill"
                                                    id="badge_radio14_scc"
                                                    style="display: none;"> Khả Dụng </span>
                                                <input class="form-check-input" id="radio14"
                                                    type="radio" name="radio1" checked
                                                    onchange="Method_payment()">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </li>

                            <li>
                                <div class="balance-item success">
                                    <div class="balance-icon-wrap">
                                        <div class="">
                                            <i class="icofont icofont-bank-transfer"></i>
                                        </div>
                                    </div>
                                    <label class="form-check-label" for="radio13">
                                        <div> <span class="f-12 f-light"> Thanh Toán Ngân Hàng
                                            </span>
                                            <span class="f-w-600"> Thanh Toán 1 Phút </span><br>
                                            <span
                                                class="badge badge-light-success rounded-pill">
                                                Khả Dụng </span>
                                            <input class="form-check-input" id="radio13"
                                                type="radio" name="radio1"
                                                onchange="Method_payment()">
                                        </div>
                                    </label>
                                </div>
                            </li>
                        </ul>


                    </div>

                    <div class="col-md-12 mt-3">
                        <label> Mã Khuyến Mãi (Nếu Có) </label>
                        <div class="input-group">
                            <input class="form-control me-2" type="text" id="discount"
                                placeholder="Mã Khuyến Mãi (Nếu Có)"><button
                                onclick="appyDiscount('btnApply', 'Áp Dụng', '11');"
                                class="btn btn-primary" id="btnApply"> Áp Dụng </button>
                        </div>
                    </div>

                    <div class="mt-4">
                        <span> Tổng Thanh Toán: <strong class="text-danger"><span
                                    id="amount-total">0</span><sup>VND</sup> <sup
                                    id="discount-show"></sup></strong></span>

                        <div class="checkbox p-0">
                            <input id="dieuKhoan" type="checkbox" checked>
                            <label class="text-muted" for="dieuKhoan"> Đồng Ý Với </label> <a
                                href="/dieu-khoa" class="txt-primary"> Điều Khoản Sử Dụng Dịch
                                Vụ </a>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6 col-6">
                                <span class="badge badge-danger text-white"
                                    style="width: 100%; padding: 10px; cursor: pointer;"
                                    data-bs-dismiss="modal" aria-label="Close"><i
                                        class="icofont icofont-close"></i> Hủy </span>
                            </div>

                            <div class="col-md-6 col-6">
                                <span class="badge badge-dark text-white"
                                    style="width: 100%; padding: 10px; cursor: pointer;"
                                    onclick="ThanhToan('payment', `<i class='icofont icofont-cart'></i> Thanh Toán`);"
                                    id="payment"> <i class="icofont icofont-cart"></i> Thanh
                                    Toán </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
</div>
