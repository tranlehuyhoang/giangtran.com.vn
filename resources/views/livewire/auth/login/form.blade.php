<div class="login-main">
    <center onclick="loadto('/');" style="cursor: pointer;"><img src="/logo/giangtran.com.vn.dark.png"
            style="max-width: 100%; height: 35px;"></center>

    <div class="theme-form mt-3">

        <div id="form-login" class="{{ isset($opt_status) ? 'content-vi' : '' }}">
            <center>
                <h2> Đăng Nhập Hệ Thống </h2>
            </center>

            <div class="form-group mt-3">
                <label class="col-form-label">Tài Khoản</label>
                <input class="form-control {{ isset($errors['username']) ? 'is-invalid' : '' }}" type="text"
                    wire:model="username" placeholder="Tên Đăng Nhập hoặc Gmail" style="background-color: white;">
                @if (isset($errors['username']))
                    <div class="invalid-feedback">{{ $errors['username'] }}</div>
                @endif
            </div>

            <div class="form-group">
                <label class="col-form-label"> Mật Khẩu </label>
                <div class="form-input position-relative">
                    <input id="password" class="form-control {{ isset($errors['password']) ? 'is-invalid' : '' }}"
                        type="password" wire:model="password" placeholder="*********" style="background-color: white;">
                    <div class="show-hide" {{ isset($errors['password']) ? 'hidden' : '' }} onclick="togglePassword()">
                        <span id="toggle-icon" class="show"></span>
                    </div>
                    @if (isset($errors['password']))
                        <div class="invalid-feedback">{{ $errors['password'] }}</div>
                    @endif
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
                <a class="link" wire:navigate href="/forgot-password">Quên Mật Khẩu?</a>


                <div class="text-end mt-3">
                    <button class="btn btn-dark btn-block w-100" type="button" wire:click="login"
                        wire:loading.attr="disabled" wire:loading.class="btn-secondary">
                        <span wire:loading.remove> Đăng Nhập </span>
                        <span wire:loading> Đang Đăng Nhập... </span>
                    </button>

                    <hr class="my-3">
                    <div class="text-center position-relative" id="or">
                        <span class="bg-white px-2">hoặc</span>
                    </div>
                    <div class="mt-2">
                        <button onclick="window.location.href='{{ route('google.login') }}'"
                            class="btn btn-warning btn-block w-100" type="button" id="loginWithGoogle">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;">
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

                            Đăng nhập với Google
                        </button>
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

            <p class="mt-4 mb-0 text-center"> Tôi Chưa Có Tài Khoản?<a class="ms-2" wire:navigate href="/register"> Tạo Tài Khoản
                </a></p>
        </div>

        <div id="otp_form" class="{{ isset($opt_status) ? '' : 'content-vi' }}">

            <center>
                <h2> Xác Minh 2 Bước </h2>
            </center>
            <div class="form-group mt-3">
                <label class="col-form-label"> Mã Xác Thực (OTP) </label>
                <input class="form-control" type="text" id="otp_new" wire:model='otp' placeholder="Mã Xác Thực Gồm 6 Chữ Số" style="background-color: white;">
            </div>
            <button class="btn btn-dark btn-block w-100" type="button" wire:click="verifyOtp" wire:loading.attr="disabled">
                <span wire:loading.remove> Xác Minh OTP </span>
                <span wire:loading> Đang xác minh... </span>
            </button>
            <div class="mb-4" id="btn-resendText" style="display: none;">
                <span class="reset-password-link"> Chưa Nhận Được Mã OTP?
                    <a class="btn-link txt-danger" onclick="resendOTP()" id="icon-resend">Gửi Lại</a>
                </span>
            </div>
        </div>

    </div>
</div>
