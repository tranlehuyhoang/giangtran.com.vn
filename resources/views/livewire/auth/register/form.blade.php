<div>
    <div class="form-group mt-3">
        <label class="col-form-label"> Họ Và Tên </label>
        <input class="form-control {{ isset($errors['name']) ? 'is-invalid' : '' }}" type="text" wire:model="name"
            placeholder="Họ Và Tên Khách Hàng" style="background-color: white;">
        @if (isset($errors['name']))
            <div class="invalid-feedback">{{ $errors['name'] }}</div>
        @endif
    </div>

    <div class="form-group mt-3">
        <label class="col-form-label"> Email </label>
        <input class="form-control {{ isset($errors['email']) ? 'is-invalid' : '' }}" type="email" wire:model="email"
            placeholder="Nhập Email Của Bạn" style="background-color: white;">
        @if (isset($errors['email']))
            <div class="invalid-feedback">{{ $errors['email'] }}</div>
        @endif
    </div>

    <div class="form-group mt-3">
        <label class="col-form-label"> Tên Tài Khoản </label>
        <input class="form-control {{ isset($errors['username']) ? 'is-invalid' : '' }}" type="text"
            wire:model="username" placeholder="Tên Đăng Nhập" style="background-color: white;">
        @if (isset($errors['username']))
            <div class="invalid-feedback">{{ $errors['username'] }}</div>
        @endif
    </div>

    <div class="form-group">
        <label class="col-form-label"> Mật Khẩu </label>
        <div class="form-input">
            <input class="form-control {{ isset($errors['password']) ? 'is-invalid' : '' }}" type="password"
                wire:model="password" placeholder="*********" style="background-color: white;">
            @if (isset($errors['password']))
                <div class="invalid-feedback">{{ $errors['password'] }}</div>
            @endif
        </div>
    </div>

    <div class="form-group mb-0">
        <div class="checkbox p-0">
            <input id="dieuKhoan" type="checkbox" wire:model="agree_terms">
            <label class="text-muted" for="dieuKhoan"> Đồng Ý</label>
            <a wire:navigate href="/dieu-khoan" class="txt-primary"> Điều Khoản & Chính Sách
            </a>
        </div>
        @if (isset($errors['agree_terms']))
            <div class="text-danger">{{ $errors['agree_terms'] }}</div>
        @endif

        <div class="text-end mt-3">
            <button class="btn btn-dark btn-block w-100" wire:click='register' wire:loading.attr="disabled"
                wire:loading.class="btn-secondary">
                <span wire:loading.remove> Tạo Tài Khoản </span>
                <span wire:loading> Đang Tạo... </span>
            </button>
        </div>
        <hr class="my-3">
        <div class="text-center position-relative" id="or">
            <span class="bg-white px-2">hoặc</span>
        </div>
        <div class="mt-2">
            <button onclick="window.location.href='{{ route('google.login') }}'" class="btn btn-warning btn-block w-100"
                type="button" id="loginWithGoogle">
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

                Đăng ký với Google
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
    <p class="mt-4 mb-0 text-center"> Đã Có Tài Khoản?
        <a class="ms-2" wire:navigate href="/login"> Đăng Nhập </a>
    </p>
</div>
