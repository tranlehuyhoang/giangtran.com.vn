<div>
    <head>
        <title> Nify.vn - Hệ Thống Cung Cấp Hosting, Tên Miền Giá Rẻ Tại Việt Nam </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Nify.vn - Hệ Thống Cung Cấp Hosting, Tên Miền Giá Rẻ Tại Việt Nam">
        <meta name="keywords" content="Nify.vn, domain, hosting cpanel, reseller, whm, jetbackup, litespeed, whois">
        <meta name="author" content="nify.vn">
        <link rel="canonical" href="/forgot-password">
        <link rel="icon" href="https://slopesoftware.com/wp-content/uploads/2021/12/cloud-servers.png" type="image/x-icon">
        <link rel="shortcut icon" href="https://slopesoftware.com/wp-content/uploads/2021/12/cloud-servers.png"
            type="image/x-icon">
    
        <!-- FB, LinkedIn SEO -->
        <meta property="og:title" content="Nify.vn - Hệ Thống Cung Cấp Hosting, Tên Miền Giá Rẻ Tại Việt Nam">
        <meta property="og:description" content="Nify.vn - Hệ Thống Cung Cấp Hosting, Tên Miền Giá Rẻ Tại Việt Nam">
        <meta property="og:image" content="https://slopesoftware.com/wp-content/uploads/2021/12/cloud-servers.png">
        <meta property="og:url" content="/forgot-password">
    
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="/assets/static/style.css?v=62348332">
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
                document.title = "Đặt Lại Mật Khẩu";
            </script>
    
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
    
                                        <div style="display: block;" id="get-send-otp">
                                            <center>
                                                <h2> Đặt Lại Mật Khẩu </h2>
                                            </center>
    
                                            <div class="form-group">
                                                <label class="col-form-label"> Email Khôi Phục </label>
                                                <input class="form-control" type="email" id="email"
                                                    placeholder="Email Khôi Phục" style="background-color: white;"
                                                    autocomplete="new-email" onchange="sendOTP()" value="">
                                            </div>
    
    
                                            <div class="form-group" id="otpShow" style="display: none;">
                                                <label class="col-form-label"> Mã OTP </label>
                                                <input class="form-control" type="number" id="otp_new"
                                                    placeholder="Mã Gồm 6 Chữ Số" style="background-color: white;"
                                                    autocomplete="new-password" onchange="getOTPInoput()" value="">
                                            </div>
    
                                            <div class="mt-2 text-danger" style="font-size: 12px;" id="default-text"> Hướng
                                                Dẫn: Nhập Chính Xác Email Tài Khoản Của Bạn, Sau Khi Nhập Xong Hệ Thống Sẽ
                                                Tự Gửi Một Email Đến Bạn! </div>
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
    
                <script>
                    setTimeout(() => {
            $("#email").val('');
          }, 1000);
                </script>
    
                <script src="/assets/static/forgot-password.js?v=245345" defer></script>
    
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