<div>
    <head>
        <title> Đăng Nhập Tài Khoản | GIANGTRAN.COM.VN </title>
    
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="/assets/static/style.css?v=758177082">
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/css/toast@1.0.1/fuiToast.min.css">
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/js/toast@1.0.1/fuiToast.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    
    
    </head>
    
    <body id="content">
     
        <div>
            <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    
 
    
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <div class="login-card login-dark"
                            style="background: url(/assets/assets/images/customizer/c540018ca1c7b93cb1fbc218ea0c73a7.png); background-size: cover; background-repeat: no-repeat;">
                            <div>
                                <div class="login-main">
                                    <center onclick="loadto('/');" style="cursor: pointer;"><img
                                            src="/giangtran.com.vn.png"
                                            style="max-width: 100%; height: 35px;"></center>
    
                                    <div class="theme-form mt-3">
    
                                        <div id="form-login">
                                            <center>
                                                <h2> Đăng Nhập Hệ Thống </h2>
                                            </center>
                                        
                                            <div class="form-group mt-3">
                                                <label class="col-form-label"> Tên Tài Khoản </label>
                                                <input class="form-control" type="text" wire:model="username" placeholder="Tên Đăng Nhập" style="background-color: white;">
                                            </div>
                                        
                                            <div class="form-group">
                                                <label class="col-form-label"> Mật Khẩu </label>
                                                <div class="form-input position-relative">
                                                    <input class="form-control" type="password" wire:model="password" placeholder="*********" style="background-color: white;">
                                                    <div class="show-hide">
                                                        <span class="show"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="form-group mb-0">
                                                <div class="checkbox p-0">
                                                    <input id="checkbox1" type="checkbox" wire:model="remember">
                                                    <label class="text-muted" for="checkbox1" id="flexCheckChecked"> Ghi Nhớ? </label>
                                                </div>
                                                <a class="link" href="/forgot-password">Quên Mật Khẩu?</a>
                                        
                                                <div id="recaptchaTrue"></div>
                                                <center>
                                                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                                </center>
                                                <div class="text-end mt-3">
                                                    <button class="btn btn-dark btn-block w-100" type="button" wire:click="login"> Đăng Nhập </button>
                                                </div>
                                            </div>
                                        
                                            <p class="mt-4 mb-0 text-center"> Tôi Chưa Có Tài Khoản?<a class="ms-2" href="/register"> Tạo Tài Khoản </a></p>
                                        </div>
    
                                        <div id="otp_form" class="content-vi">
                                            <center>
                                                <h2> Xác Minh 2 Bước </h2>
                                            </center>
                                            <div class="form-group mt-3">
                                                <label class="col-form-label"> Mã Xác Thực (OTP) </label>
                                                <input class="form-control" type="text" id="otp_new"
                                                    placeholder="Mã Xác Thực Gồm 6 Chữ Số" style="background-color: white;"
                                                    onchange="getOTPInoput();">
                                            </div>
    
                                            <div class="mb-4" id="btn-resendText" style="display: none;"><span
                                                    class="reset-password-link"> Chưa Nhận Được Mã OTP? <a
                                                        class="btn-link txt-danger" onclick="resendOTP()" id="icon-resend">
                                                        Gửi Lại </a></span></div>
    
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
            </div>
        </div>
    </body>
</div>