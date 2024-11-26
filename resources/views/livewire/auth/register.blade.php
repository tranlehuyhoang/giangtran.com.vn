<div>

    <head>
        @livewire('inc.seo', ['title' => 'Đăng Ký Tài Khoản'])

        <link rel="stylesheet" href="/assets/static/style.css?v=2097735562">
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
                                    <center onclick="loadto('/');" style="cursor: pointer;">
                                        <img src="/giangtran.com.vn.png"
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
                                            <div class="form-group">
                                                <label class="col-form-label">CAPTCHA: {{ $num1 }} + {{ $num2 }} = ? </label>
                                                <div class="form-input">
                                                    <input class="form-control" type="text" wire:model="captcha"
                                                           placeholder="Nhập Kết Quả" style="background-color: white;" >
                                                </div>
                                            </div>

                                            <div class="form-group mb-0">
                                                <div class="checkbox p-0">
                                                    <input id="dieuKhoan" type="checkbox" wire:model="agree_terms">
                                                    <label class="text-muted" for="dieuKhoan"> Đồng Ý</label>
                                                    <a href="/dieu-khoan" class="txt-primary"> Điều Khoản & Chính Sách
                                                    </a>
                                                </div>

                                                <div class="text-end mt-3">
                                                    <button class="btn btn-dark btn-block w-100"> Tạo Tài Khoản
                                                    </button>
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
        @livewire('inc.social-popup')
    </body>


</div>
