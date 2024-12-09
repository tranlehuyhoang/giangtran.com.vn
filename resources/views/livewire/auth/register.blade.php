<div>

    <head>
        @livewire('inc.seo', ['title' => 'Đăng Ký Tài Khoản'])

        <link rel="stylesheet" href="/assets/static/style.css?v=2097735562">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>

    <body id="content">
        <div class="loader-wrapper" style="z-index: 999999;">
            <div class="boxes"></div>
        </div>
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
                                        <img src="/logo/giangtran.com.vn.png" style="max-width: 100%; height: 35px;">
                                    </center>

                                    <div class="theme-form mt-3">
                                        <center>
                                            <h2> Đăng Ký Hệ Thống </h2>
                                        </center>

                                        @livewire('auth.register.form')
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
    <script>
        $(".loader-wrapper").fadeOut("slow", function() {
            $(this).remove();
        });
    </script>

</div>
