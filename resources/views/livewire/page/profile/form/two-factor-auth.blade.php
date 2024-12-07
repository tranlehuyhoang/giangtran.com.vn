
<div class="col-xl-8 content-vi" id="2step">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title mb-0"> Xác Thực 2 Bước </h2>
        </div>
        <div class="card-body">

            <div class="">
                <strong class="txt-primary"> Ghi Chú Nên Đọc: </strong> <br>
                <p>- Trình Xác Thực 2 Bước Được Tạo Trên Hệ Thống Này Nhằm Tạo Thêm Bước
                    Xác
                    Thực OTP Qua Email Sau Khi Bạn Xác Thực Bước 1 Với Tài Khoản & Mật
                    Khẩu
                </p>
            </div>

            <div class="row g-3 mt-3">

                <div class="col-md-12 col-xl-4">
                    <div class="card-wrapper border rounded-3 checkbox-checked">
                        <h6 class="sub-title"> Trạng Thái 2FA </h6>
                        <div class="form-check-size">

                            <div class="form-check form-switch form-check-inline">
                                <input class="form-check-input check-size"
                                    id="2FaStatus" type="checkbox" role="switch"
                                    {{ $twoFactorAuthStatus ? 'checked' : '' }}
                                    wire:model="twoFactorAuthStatus"
                                    wire:change="updateTwoFactorAuth"
                                   >
                            </div>
                            <strong id="isCheckedText" style="padding-left: -10px;">
                                {{ $twoFactorAuthStatus ? 'Đang Bật' : 'Đang Tắt' }}
                            </strong>

                            <div class="form-group content-vi" id="formOTP-2Fa">
                                <label> OTP Xác Minh </label>
                                <input class="form-control" id="otp_new"
                                    placeholder="Nhập Mã Xác Minh Gồm 6 Số!"
                                    onchange="getOTPInoput();">
                                <div id="isLoading"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
