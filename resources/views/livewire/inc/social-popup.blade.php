<div>
    @if (!Auth::check())
        <!-- Kiểm tra nếu người dùng chưa đăng nhập -->
        <div class="social-popup" id="social-popup">
            <div class="social-popup-tit">
                <img src="/icon.png" alt="Site Icon" />
                <span class="social-tit-text">Đăng nhập vào giangtran.com.vn bằng tài khoản</span>
                <span class="social-close" onclick="closePopup()">&#215;</span>
            </div>
            <div class="social-popup-card" onclick="window.location.href='{{ route('google.login', ['id' => 1]) }}'">
                <div class="fox-google">
                    <a rel="nofollow" title="Google login">
                        <img src="/assets/images/google.svg" alt="Google login"> Đăng nhập bằng Google
                    </a>
                </div>
            </div>
        </div>
    @endif


    <style>
        .social-popup {
            position: fixed;
            top: 20px;
            right: 20px;
            max-width: 400px;
            width: 100%;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #0000004f;
            box-sizing: border-box;
            z-index: 999999999999999999999;
            font-size: 15px;
        }

        .social-popup-tit {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            border-bottom: 1px solid #66666675;
        }

        .social-popup-tit img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            border-radius: 100%;
        }

        .social-popup-tit .social-tit-text {
            display: block;
            width: 100%;
        }

        .social-close {
            width: 30px;
            text-align: center;
            font-size: 25px;
            cursor: pointer;
        }

        .fox-google a img {
            width: 30px !important;
            vertical-align: middle;
            margin-right: 15px;
        }

        .social-popup-card {
            padding: 20px;
            cursor: pointer;
        }

        .fox-google a {
            display: block;
            margin: 0 auto;
            border-radius: 10px;
            color: #555;
        }

        .social-popup-card div a {
            background: none !important;
            text-align: left;
            padding: 0px;
            border: 0;
            font-weight: bold;
        }

        .social-popup-card div a:hover,
        .social-close:hover {
            color: var(--theme-default) !important;
        }

        @media (max-width: 600px) {
            .social-popup {
                max-width: 100%;
                width: auto;
                top: 10px;
                right: 10px;
                left: 10px;
            }
        }
    </style>

    <script>
        function closePopup() {
            document.getElementById('social-popup').style.display = 'none';
        }
    </script>
</div>
