<div class="login-main">
    <center onclick="loadto('/');" style="cursor: pointer;"><img
            src="/giangtran.com.vn.png" style="max-width: 100%; height: 35px;"></center>

    <div class="theme-form mt-3">

        <div id="form-login">
            <center>
                <h2> Đăng Nhập Hệ Thống </h2>
            </center>

            <div class="form-group mt-3">
                <label class="col-form-label"> Tên Tài Khoản </label>
                <input class="form-control" type="text" wire:model="username"
                    placeholder="Tên Đăng Nhập" style="background-color: white;">
            </div>

            <div class="form-group">
                <label class="col-form-label"> Mật Khẩu </label>
                <div class="form-input position-relative">
                    <input id="password" class="form-control" type="password" placeholder="*********" style="background-color: white;">
                    <div class="show-hide" onclick="togglePassword()">
                        <span id="toggle-icon" class="show"></span>
                    </div>
                </div>
            </div>

            <script>
                function togglePassword() {
                    const passwordInput = document.getElementById('password');
                    const toggleIcon = document.getElementById('toggle-icon');

                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        toggleIcon.classList.remove('show');
                        toggleIcon.classList.add('hide');
                    } else {
                        passwordInput.type = 'password';
                        toggleIcon.classList.remove('hide');
                        toggleIcon.classList.add('show');
                    }
                }
            </script>


            <div class="form-group mb-0">
                <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox" wire:model="remember">
                    <label class="text-muted" for="checkbox1" id="flexCheckChecked"> Ghi
                        Nhớ? </label>
                </div>
                <a class="link" href="/forgot-password">Quên Mật Khẩu?</a>


                <div class="text-end mt-3">
                    <button class="btn btn-dark btn-block w-100" type="button"
                        wire:click="login">Đăng Nhập</button>

                    <hr class="my-3">
                    <div class="text-center position-relative" id="or">
                        <span class="bg-white px-2">hoặc</span>
                    </div>
                    <div class="mt-2">
                        <div>
                            <div class="g_id_signin" data-type="standard"
                                data-shape="rectangular" data-theme="outline"
                                data-text="signin_with" data-size="large"
                                data-logo_alignment="left" style="
                                display: flex;
                                justify-content: center;
                            ">
                            </div>
                        </div>

                    </div>
                </div>
                <style>
                    #loginWithGoogle {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        gap: 10px;
                    }

                    #loginWithGoogle svg {
                        width: 20px;
                        height: 20px;
                    }

                    .position-relative {
                        position: relative;
                    }

                    #or span {
                        position: absolute;
                        left: 50%;
                        transform: translateX(-50%);
                        top: -27px;
                        /* Điều chỉnh khoảng cách với <hr> */
                        background-color: white;
                        /* Màu nền cho chữ "hoặc" */
                    }
                </style>
            </div>

            <p class="mt-4 mb-0 text-center"> Tôi Chưa Có Tài Khoản?<a class="ms-2"
                    href="/register"> Tạo Tài Khoản </a></p>
        </div>

        <div id="otp_form" class="content-vi">
            <center>
                <h2> Xác Minh 2 Bước </h2>
            </center>
            <div class="form-group mt-3">
                <label class="col-form-label"> Mã Xác Thực (OTP) </label>
                <input class="form-control" type="text" id="otp_new"
                    placeholder="Mã Xác Thực Gồm 6 Chữ Số"
                    style="background-color: white;" onchange="getOTPInoput();">
            </div>

            <div class="mb-4" id="btn-resendText" style="display: none;"><span
                    class="reset-password-link"> Chưa Nhận Được Mã OTP? <a
                        class="btn-link txt-danger" onclick="resendOTP()"
                        id="icon-resend">
                        Gửi Lại </a></span></div>

        </div>

    </div>
</div>
