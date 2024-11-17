<div>

    <head>
        <title> Nify.vn - Hệ Thống Cung Cấp Hosting, Tên Miền Giá Rẻ Tại Việt Nam </title>
        <link rel="stylesheet" href="/assets/static/style.css?v=2097735562">
    </head>

    <body id="content">

        <div>
            <div class="tap-top"><i data-feather="chevrons-up"></i></div>
            <script>
                document.title = "Đăng Ký Tài Khoản"
            </script>

            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <div class="login-card login-dark"
                            style="background: url(/assets/assets/images/customizer/c540018ca1c7b93cb1fbc218ea0c73a7.png); background-size: cover; background-repeat: no-repeat;">
                            <div>
                                <div class="login-main">
                                    <center onclick="loadto('/');" style="cursor: pointer;">
                                        <img src="https://img.upanh.tv/2024/08/14/logodarkhehe.png"
                                            style="max-width: 100%; height: 35px;">
                                    </center>

                                    <div class="theme-form mt-3">
                                        <center>
                                            <h2> Đăng Ký Hệ Thống </h2>
                                        </center>

                                        <form wire:submit.prevent="register">
                                            <div class="form-group mt-3">
                                                <label class="col-form-label"> Họ Và Tên Khách Hàng </label>
                                                <input class="form-control" type="text" wire:model="name"
                                                    placeholder="Họ Và Tên Khách Hàng" style="background-color: white;">
                                            </div>

                                            <div class="form-group mt-3">
                                                <label class="col-form-label"> Email (Nhận Thông Báo) </label>
                                                <input class="form-control" type="email" wire:model="email"
                                                    placeholder="Nhập Email Của Bạn" style="background-color: white;">
                                            </div>

                                            <div class="form-group mt-3">
                                                <label class="col-form-label"> Tên Tài Khoản </label>
                                                <input class="form-control" type="text" wire:model="username"
                                                    placeholder="Tên Đăng Nhập" style="background-color: white;">
                                            </div>

                                            <div class="form-group">
                                                <label class="col-form-label"> Mật Khẩu </label>
                                                <div class="form-input">
                                                    <input class="form-control" type="password" wire:model="password"
                                                        placeholder="*********" style="background-color: white;">
                                                </div>
                                            </div>

                                            <div class="form-group mb-0">
                                                <div class="checkbox p-0">
                                                    <input id="dieuKhoan" type="checkbox" wire:model="agree_terms">
                                                    <label class="text-muted" for="dieuKhoan"> Đồng Ý</label>
                                                    <a href="/dieu-khoan" class="txt-primary"> Điều Khoản & Chính Sách
                                                    </a>
                                                </div>

                                                <div id="recaptchaTrue"></div>
                                                <center>
                                                    <div class="g-recaptcha"
                                                        data-sitekey="6LfzvSUqAAAAABdzyxupCtes0wk7WdoQP3kyjsi4"></div>
                                                </center>
                                                <div class="text-end mt-3">
                                                    <button class="btn btn-dark btn-block w-100"> Tạo Tài Khoản
                                                    </button>
                                                </div>
                                            </div>

                                            <p class="mt-4 mb-0 text-center"> Đã Có Tài Khoản?
                                                <a class="ms-2" href="/login"> Đăng Nhập </a>
                                            </p>
                                        </form>
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