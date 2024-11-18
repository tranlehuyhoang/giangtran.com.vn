<div>

    <head>
        <title> THÔNG TIN TÀI KHOẢN | GIANGTRAN.COM.VN </title>
      
        <link rel="stylesheet" href="/assets/static/style.css?v=507513158">
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
        <div class="loader-wrapper" style="z-index: 999999;">
            <div class="boxes"></div>
        </div>
        <div>
            <div class="tap-top"><i data-feather="chevrons-up"></i></div>

            <div class="page-wrapper compact-wrapper" id="pageWrapper">
                @livewire('inc.header')

                <div class="page-body-wrapper">

                    @livewire('inc.sidebar-wrapper')

               

                    <div class="page-body">
                        <div class="container-fluid default-dashboard">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="card title-line">
                                        <div class="card-header rating-header">
                                            <h2> Quản Lý Tài Khoản </h2>
                                            <p class="f-m-light mt-1"> Nếu Bạn Nghi Ngờ Tài Khoản Bị Truy Cập Bởi Một Ai
                                                Đó,
                                                Hãy Đổi Thông Tin Tài Khoản Ngay Nhé! </p>
                                        </div>

                                        <div class="card-body">

                                            <ul class="list-group">
                                                <li class="list-group-item active" aria-current="true"
                                                    onclick="selectContent('profile', 'change-password', '2step', 'history');">
                                                    <i class="icofont icofont-arrow-right"> </i> Thông Tin Tài Khoản
                                                </li>
                                                <li class="list-group-item"
                                                    onclick="selectContent('change-password', 'profile', '2step', 'history');">
                                                    <i class="icofont icofont-arrow-right"> </i> Đổi Mật Khẩu
                                                </li>
                                                <li class="list-group-item"
                                                    onclick="selectContent('2step', 'profile', 'change-password', 'history');">
                                                    <i class="icofont icofont-arrow-right"> </i> Xác Thực 2 Bước
                                                </li>
                                                <li class="list-group-item "
                                                    onclick="selectContent('history', 'profile', 'change-password', '2step');">
                                                    <i class="icofont icofont-arrow-right"> </i> Lịch Sử Hoạt Động
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-8" id="profile">
                                    <div class="card title-line">
                                        <div class="card-header">
                                            <h2 class="card-title mb-0"> Thông Tin Tài Khoản </h2>
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label class="form-label"> Tên Khách Hàng </label>
                                                    <input class="form-control" value="2509roblox" disabled>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label"> Tên Tài Khoản </label>
                                                    <input class="form-control" value="2509roblox" disabled>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label"> Địa Chỉ Email </label>
                                                    <input class="form-control" value="2509roblox@gmail.com" disabled>
                                                </div>

                                                <div class="col-sm-6 col-md-6">
                                                    <label class="form-label"> Thông Tin Liên Hệ Khác <strong
                                                            class="txt-primary">(Nếu Có)</strong> </label>
                                                    <input class="form-control" id="other_information" type="text"
                                                        placeholder="Zalo, Facebook, Telegram, ..." value="">
                                                </div>

                                                <div class="col-sm-6 col-md-6">
                                                    <label class="form-label"> Địa Chỉ IP </label>
                                                    <input class="form-control" value="171.243.49.123" disabled>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label"> Thiết Bị </label>
                                                    <input class="form-control"
                                                        value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0"
                                                        disabled>
                                                </div>

                                                <div class="col-sm-6 col-md-4">
                                                    <label class="form-label"> Số Dư </label>
                                                    <input class="form-control" value="0đ" disabled>
                                                </div>

                                                <div class="col-sm-6 col-md-3">
                                                    <label class="form-label"> Tổng Nạp </label>
                                                    <input class="form-control" value="0đ" disabled>
                                                </div>

                                                <div class="col-md-5">
                                                    <label class="form-label"> Tổng Tiêu </label>
                                                    <input class="form-control" value="0đ" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer text-end">
                                            <button class="btn btn-primary" id="saveProfile"
                                                onclick="saveProfile('profile');"> Lưu Thông Tin </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-8 content-vi" id="change-password">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2 class="card-title mb-0"> Đổi Mật Khẩu </h2>
                                        </div>

                                        <div class="card-body">
                                            <div class="row g-3">

                                                <div class="col-md-4">
                                                    <label class="form-label"> Mật Khẩu Hiện Tại </label>
                                                    <input class="form-control" id="password"
                                                        placeholder="Mật Khẩu Hiện Tại">
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label"> Mật Khẩu Mới </label>
                                                    <input class="form-control" id="new-password"
                                                        placeholder="Mật Khẩu Mới">
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label"> Nhập Lại Mật Khẩu Mới</label>
                                                    <input class="form-control" id="cofirm-password"
                                                        placeholder="Nhập Lại Mật Khẩu Mới">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-footer text-end">
                                            <button class="btn btn-primary" id="changepassword"
                                                onclick="saveProfile('changepassword');"> Đổi Mật Khẩu </button>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-8 content-vi" id="2step">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2 class="card-title mb-0"> Xác Thực 2 Bước </h2>
                                        </div>
                                        <div class="card-body">

                                            <div class="">
                                                <strong class="txt-primary"> Ghi Chú Nên Đọc: </strong> <br>
                                                <p>- Trình Xác Thực 2 Bước Được Tạo Trên Hệ Thống Này Nhằm Tạo Thêm Bước
                                                    Xác
                                                    Thực OTP Qua Email Sau Khi Bạn Xác Thực Bước 1 Với Tài Khoản & Mật
                                                    Khẩu
                                                </p>
                                            </div>

                                            <div class="row g-3 mt-3">

                                                <div class="col-md-12 col-xl-4">
                                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                                        <h6 class="sub-title"> Trạng Thái 2FA </h6>
                                                        <div class="form-check-size">

                                                            <div class="form-check form-switch form-check-inline">
                                                                <input class="form-check-input check-size"
                                                                    id="2FaStatus" type="checkbox" role="switch"
                                                                    onchange="isChecked();">
                                                            </div><strong id="isCheckedText"
                                                                style="padding-left: -10px;">
                                                                Loading ... </strong>

                                                            <div class="form-group content-vi" id="formOTP-2Fa">
                                                                <label> OTP Xác Minh </label>
                                                                <input class="form-control" id="otp_new"
                                                                    placeholder="Nhập Mã Xác Minh Gồm 6 Số!"
                                                                    onchange="getOTPInoput();">
                                                                <div id="isLoading"></div>
                                                            </div>

                                                            <div class="mb-4" id="btn-resendText"
                                                                style="display: none;">
                                                                <span class="reset-password-link"> Chưa Nhận Được Mã
                                                                    OTP? <a class="btn-link txt-danger"
                                                                        onclick="resendOTP()" id="icon-resend"> Gửi Lại
                                                                    </a></span>
                                                            </div>

                                                            <input type="hidden" id="2faDefault" value="false">
                                                            <input type="hidden" id="email"
                                                                value="2509roblox@gmail.com">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-8 content-vi" id="history">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2 class="card-title mb-0"> Lịch Sử Hoạt Động</h2>
                                        </div>
                                        <div class="card-body">

                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="table-responsive custom-scrollbar">
                                                            <table class="display" id="basic-1">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th> Nội Dung </th>
                                                                        <th> Địa Chỉ IP </th>
                                                                        <th> Thời Gian </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>


                                                                    <tr>
                                                                        <td>#1</td>
                                                                        <td>Đăng Nhập Vào Hệ Thống!</td>
                                                                        <td>171.243.49.123</td>
                                                                        <td>12/11/2024 - 10:01:09</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>#2</td>
                                                                        <td>Đăng Nhập Vào Hệ Thống!</td>
                                                                        <td>171.243.49.123</td>
                                                                        <td>12/11/2024 - 09:26:51</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>#3</td>
                                                                        <td>Đăng Nhập Vào Hệ Thống!</td>
                                                                        <td>171.243.49.123</td>
                                                                        <td>12/11/2024 - 06:24:19</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>#4</td>
                                                                        <td>Thực Hiện Thay Đổi Mật Khẩu Thành Công!</td>
                                                                        <td>171.243.49.123</td>
                                                                        <td>12/11/2024 - 06:24:11</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>#5</td>
                                                                        <td>Đăng Nhập Vào Hệ Thống!</td>
                                                                        <td>171.243.49.123</td>
                                                                        <td>12/11/2024 - 05:45:37</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>#6</td>
                                                                        <td>Đăng Nhập Vào Hệ Thống!</td>
                                                                        <td>171.243.49.123</td>
                                                                        <td>12/11/2024 - 05:22:01</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>#7</td>
                                                                        <td>Đăng Nhập Vào Hệ Thống!</td>
                                                                        <td>171.243.49.123</td>
                                                                        <td>08/11/2024 - 08:48:52</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>#8</td>
                                                                        <td>Đăng Ký Tài Khoản Tại Hệ Thống!</td>
                                                                        <td>171.243.49.123</td>
                                                                        <td>08/11/2024 - 07:45:11</td>
                                                                    </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>


                    <script src="/assets/static/profile-option.js" defer></script>
                  @livewire('inc.footer')
                </div>
            </div>
        </div>


        <input type="hidden" id="mn" value="0">
 

        <style>
            table tfoot tr {
                padding-bottom: 6px;
            }

            table tfoot tr td {
                padding-bottom: 6px;
            }
        </style>


        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js"></script>
        <script src="/assets/static/simplebar.js"></script>
        <script src="/assets/static/invoices.js?v=1731423674" defer></script>
        <script src="/assets/static/jquery.min.js"></script>
        <script src="/assets/static/config.js"></script>
        <script src="/assets/static/cyberlux.js"></script>
        <script src="/assets/static/handlebars.min.js"></script>
        <script src="/assets/static/jquery.dataTables.min.js"></script>
        <script src="/assets/static/datatable.custom.js"></script>
        <script src="/assets/static/bundle.min.js"></script>
        <script src="/assets/static/feather.min.js"></script>
        <script src="/assets/static/bootstrap.bundle.min.js"></script>
        <script src="/assets/static/feather.min.js"></script>
        <script src="/assets/static/feather-icon.js"></script>
        <script src="/assets/static/custom.js"></script>
        <script src="/assets/static/swiper-bundle.min.js"></script>
        <script src="/assets/static/sidebar-menu.js"></script>
        <script src="/assets/static/sidebar-pin.js"></script>
        <script src="/assets/static/bootstrap-notify.min.js"></script>
        <script src="/assets/static/index.js"></script>
        <script src="/assets/static/custom_touchspin.js"></script>
        <script src="/assets/static/simple-datatable.js"></script>
        <script src="/assets/static/handlebars.js"></script>
        <script src="/assets/static/typeahead.bundle.js"></script>
        <script src="/assets/static/typeahead.custom.js"></script>
        <script src="/assets/static/search-handlebars.js"></script>
        <script src="/assets/static/script.js"></script>
        <script src="/assets/static/customizer.js"></script>

    </body>
</div>