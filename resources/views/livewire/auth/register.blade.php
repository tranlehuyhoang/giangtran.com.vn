<div>

    <head>
        <title> Đăng Ký Tài Khoản | GIANGTRAN.COM.VN </title>
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
                                                        <button onclick="window.location.href='{{ route('google.register', ['id' => 1]) }}'" class="btn btn-danger btn-block w-100" type="button"
                                                            id="loginWithGoogle"  >
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 48 48"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                style="display: block;">
                                                                <path fill="#EA4335"
                                                                    d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                                                                </path>
                                                                <path fill="#4285F4"
                                                                    d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z">
                                                                </path>
                                                                <path fill="#FBBC05"
                                                                    d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                                                                </path>
                                                                <path fill="#34A853"
                                                                    d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                                                                </path>
                                                                <path fill="none" d="M0 0h48v48H0z"></path>
                                                            </svg>

                                                            Đăng Ký với Google
                                                        </button>
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
