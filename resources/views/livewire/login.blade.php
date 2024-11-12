<div>
    <head>
        <title> Nify.vn - Hệ Thống Cung Cấp Hosting, Tên Miền Giá Rẻ Tại Việt Nam </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Nify.vn - Hệ Thống Cung Cấp Hosting, Tên Miền Giá Rẻ Tại Việt Nam">
        <meta name="keywords" content="Nify.vn, domain, hosting cpanel, reseller, whm, jetbackup, litespeed, whois">
        <meta name="author" content="nify.vn">
        <link rel="canonical" href="/login">
        <link rel="icon" href="https://slopesoftware.com/wp-content/uploads/2021/12/cloud-servers.png" type="image/x-icon">
        <link rel="shortcut icon" href="https://slopesoftware.com/wp-content/uploads/2021/12/cloud-servers.png"
            type="image/x-icon">
    
        <!-- FB, LinkedIn SEO -->
        <meta property="og:title" content="Nify.vn - Hệ Thống Cung Cấp Hosting, Tên Miền Giá Rẻ Tại Việt Nam">
        <meta property="og:description" content="Nify.vn - Hệ Thống Cung Cấp Hosting, Tên Miền Giá Rẻ Tại Việt Nam">
        <meta property="og:image" content="https://slopesoftware.com/wp-content/uploads/2021/12/cloud-servers.png">
        <meta property="og:url" content="/login">
    
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
    
    
        <noscript>
            <meta http-equiv="refresh" content="0;url=about:blank">
        </noscript>
    </head>
    
    <body id="content">
        <div class="loader-wrapper" style="z-index: 999999;">
            <div class="boxes"></div>
        </div>
        <div>
            <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    
            <script>
                document.title = "Đăng Nhập Tài Khoản";
            </script>
    
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <div class="login-card login-dark"
                            style="background: url(/assets/assets/images/customizer/c540018ca1c7b93cb1fbc218ea0c73a7.png); background-size: cover; background-repeat: no-repeat;">
                            <div>
                                <div class="login-main">
                                    <center onclick="loadto('/');" style="cursor: pointer;"><img
                                            src="https://img.upanh.tv/2024/08/14/logodarkhehe.png"
                                            style="max-width: 100%; height: 35px;"></center>
    
                                    <div class="theme-form mt-3">
    
                                        <div id="form-login">
                                            <center>
                                                <h2> Đăng Nhập Hệ Thống </h2>
                                            </center>
    
                                            <div class="form-group mt-3">
                                                <label class="col-form-label"> Tên Tài Khoản </label>
                                                <input class="form-control" type="text" id="username"
                                                    placeholder="Tên Đăng Nhập" style="background-color: white;">
                                            </div>
    
                                            <div class="form-group">
                                                <label class="col-form-label"> Mật Khẩu </label>
                                                <div class="form-input position-relative">
                                                    <input class="form-control" type="password" name="login[password]"
                                                        id="password" placeholder="*********"
                                                        style="background-color: white;">
                                                    <div class="show-hide">
                                                        <span class="show"></span>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="form-group mb-0">
                                                <div class="checkbox p-0">
                                                    <input id="checkbox1" type="checkbox">
                                                    <label class="text-muted" for="checkbox1" id="flexCheckChecked"> Ghi
                                                        nhớ? </label>
                                                </div><a class="link" href="/forgot-password">Quên Mật Khẩu?</a>
    
                                                <div id="recaptchaTrue"></div>
                                                <center>
                                                    <div class="g-recaptcha"
                                                        data-sitekey="6LfzvSUqAAAAABdzyxupCtes0wk7WdoQP3kyjsi4"></div>
                                                </center>
                                                <div class="text-end mt-3">
                                                    <button class="btn btn-dark btn-block w-100" type="submit"
                                                        onclick="login('btn', 'Đăng Nhập')" id="btn"> Đăng Nhập </button>
                                                </div>
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
    
                <script src="/assets/static/auth-config.js" defer></script>
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script src="/assets/static/jquery.min.js"></script>
                <script src="/assets/static/config.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js"></script>
                <script src="/assets/static/cyberlux.js"></script>
                <script src="/assets/static/handlebars.min.js"></script>
                <script src="/assets/static/bundle.min.js"></script>
                <script src="/assets/static/feather.min.js"></script>
                <script src="/assets/static/bootstrap.bundle.min.js"></script>
                <script src="/assets/static/feather.min.js"></script>
                <script src="/assets/static/simplebar.js"></script>
                <script src="/assets/static/swiper-bundle.min.js"></script>
                <script src="/assets/static/sidebar-menu.js"></script>
                <script src="/assets/static/bootstrap-notify.min.js"></script>
                <script src="/assets/static/index.js"></script>
                <script src="/assets/static/custom_touchspin.js"></script>
                <script src="/assets/static/simple-datatable.js"></script>
                <script src="/assets/static/handlebars.js"></script>
                <script src="/assets/static/typeahead.bundle.js"></script>
                <script src="/assets/static/handlebars.js"></script>
                <script src="/assets/static/script.js"></script>
    
            </div>
        </div>
    </body>
</div>