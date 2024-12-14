<div>
    <head>
        <title>Đặt Lại Mật Khẩu - HG DIGITAL</title>

        {{-- <link rel="stylesheet" href="/assets/static/style.css?v=62348332"> --}}
    </head>
    <body id="content">
        <div class="loader-wrapper" style="z-index: 999999;">
            <div class="preloader-wrap">
                <img src="/logo/giangtran.com.vn.dark.webp" alt="logo" class="img-fluid" style="width: 150px;">
                <div class="loading-bar"></div>
            </div>
        </div>
        <div>
            <div class="tap-top"><i data-feather="chevrons-up"></i></div>
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <div class="login-card login-dark"
                            style="background: url(/assets/assets/images/customizer/c540018ca1c7b93cb1fbc218ea0c73a7.png); background-size: cover; background-repeat: no-repeat;">
                            <div>
                                <div class="login-main">
                                    <center onclick="loadto('/');" style="cursor: pointer;"><img
                                            src="/logo/giangtran.com.vn.dark.png"
                                            style="max-width: 100%; height: 35px;"></center>

                                    <div class="theme-form mt-3">

                                        <div style="display: block;" id="get-send-otp">
                                            <center>
                                                <h2> Đặt Lại Mật Khẩu </h2>
                                            </center>

                                            <div class="form-group">
                                                <label class="col-form-label"> Mật khẩu mới </label>
                                            @livewire('auth.reset-password.form')
                                            </div>



                                            <div class="mt-2 text-danger" style="font-size: 12px;" id="default-text"> Nhập mật khẩu mới của bạn</div>
                                            <div class="mt-4 mb-4" id="btn-resendText" style="display: none;"><span
                                                    class="reset-password-link"> Chưa Nhận Được Mã OTP? <a
                                                        class="btn-link txt-danger" onclick="resendOTP()" id="icon-resend">
                                                        Gửi Lại </a></span></div>
                                        </div>

                                        <div id="create-new-password" style="display: none;">
                                            <h4 class="mt-4"> Tạo Mật Khẩu Mới </h4>

                                            <div class="form-group">
                                                <label class="col-form-label"> Mật Khẩu Mới </label>
                                                <div class="form-input position-relative">
                                                    <input class="form-control" type="password" name="login[password]"
                                                        id="new-password" placeholder="*********">
                                                    <div class="show-hide"><span class="show"></span></div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-form-label"> Nhập Lại Mật Khẩu Mới </label>
                                                <div class="form-input position-relative">
                                                    <input class="form-control" type="password" name="login[password]"
                                                        id="cofirm-password" placeholder="*********">
                                                    <div class="show-hide"><span class="show"></span></div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0">
                                                <button class="btn btn-primary btn-block w-100" id="create_new_password"
                                                    onclick="create_new_password();"> Xác Nhận </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    @media only screen and (max-width: 456px) {
                        .login-card .login-main {
                            width: 390px;
                            padding: 20px;
                        }
                    }

                    @media only screen and (max-width: 400px) {
                        .login-card .login-main {
                            width: auto;
                            padding: 20px;
                        }
                    }
                </style>
                {{-- <script src="/assets/static/script.js"></script> --}}
            </div>
        </div>
    </body>
</div>
