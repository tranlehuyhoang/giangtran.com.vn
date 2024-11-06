<div>
    <div>
        <div>

            <head>
                <link rel="stylesheet" href="/mofi/assets/css/pages/_dashboard_2.scss">
            </head>

            <body>
                <!-- loader ends-->
                <!-- tap on top starts-->
                <div class="tap-top"><i data-feather="chevrons-up"></i></div>
                <!-- tap on tap ends-->
                <!-- page-wrapper Start-->
                <div class="page-wrapper compact-wrapper" id="pageWrapper">
                    @livewire('inc.header')

                    <!-- Page Body Start-->
                    <div class="page-body-wrapper">
                        <!-- Page Sidebar Start-->
                        @livewire('inc.sidebar')
                        <!-- Page Sidebar Ends-->
                        <div class="page-body">
                            <!-- Container-fluid starts-->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>PREMIUM 1 (Hoạt động)</h4>
                                                <p>a.com</p>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <!-- Thanh toán lần đầu -->
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Thanh toán lần đầu:</strong>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control"
                                                                    value="5.000 VND" readonly>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Chu kỳ thanh toán -->
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Chu kỳ thanh toán:</strong>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" value="1 Tháng"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ngày đăng ký -->
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Ngày đăng ký:</strong>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control"
                                                                    value="11:40:14 06-11-2024" readonly>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ngày hết hạn -->
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Ngày hết hạn:</strong>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control"
                                                                    value="11:40:14 06-12-2024" readonly>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Số tiền thanh toán định kỳ -->
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Số tiền thanh toán định kỳ:</strong>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control"
                                                                    value="5.000 VND" readonly>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Hình thức thanh toán -->
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Hình thức thanh toán:</strong>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control"
                                                                    value="Số dư tài khoản" readonly>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Link Cpanel -->
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Link Cpanel:</strong>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control"
                                                                    value="http://vn.ezhost.vn:2082" readonly>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Địa chỉ IP -->
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Địa chỉ IP:</strong>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control"
                                                                    value="••••••••••••••" readonly>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Tài Khoản -->
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Tài Khoản:</strong>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" value="•"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Mật khẩu -->
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Mật khẩu:</strong>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control"
                                                                    value="•••••••••••••••" readonly>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="card">
                                            <div class="card-header">

                                                <div class="alert alert-warning d-flex align-items-center" role="alert">
                                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-alert-triangle stroke-warning">
                                                            <path
                                                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                                            </path>
                                                            <line x1="12" y1="9" x2="12" y2="13"></line>
                                                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                                        </svg></div><span class="txt-light">Lưu ý: Chức năng cài lại
                                                        hosting sẽ đưa hosting về ban đầu và sẽ mất dữ liệu cũ </span>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="dashboard-2">


                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="btn-light1-primary b-r-10">
                                                            <div class="upcoming-box">
                                                                <div class="upcoming-icon "> <img
                                                                        src="https://ezhost.vn/assets/images/cron_jobs.png"
                                                                        alt=""></div>
                                                                <h6>Cron Jobs</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="btn-light1-primary b-r-10">
                                                            <div class="upcoming-box">
                                                                <div class="upcoming-icon "> <img
                                                                        src="https://ezhost.vn/assets/images/addon_domains.png"
                                                                        alt=""></div>
                                                                <h6>Addon Domains</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="btn-light1-primary b-r-10">
                                                            <div class="upcoming-box">
                                                                <div class="upcoming-icon "> <img
                                                                        src="https://ezhost.vn/assets/images/subdomains.png"
                                                                        alt=""></div>
                                                                <h6>Subdomains</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="col-3">
                                                        <div class="btn-light1-primary b-r-10">
                                                            <div class="upcoming-box">
                                                                <div class="upcoming-icon "> <img
                                                                        src="https://ezhost.vn/assets/images/cpanel_reinstall.svg"
                                                                        alt=""></div>
                                                                <h6>Cài đặt lại hosting</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="btn-light1-primary b-r-10">
                                                            <div class="upcoming-box">
                                                                <div class="upcoming-icon "> <img
                                                                        src="https://ezhost.vn/assets/images/cpanel_change_domain.svg"
                                                                        alt=""></div>
                                                                <h6>Đổi miền chính</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="btn-light1-primary b-r-10">
                                                            <div class="upcoming-box">
                                                                <div class="upcoming-icon "> <img
                                                                        src="https://ezhost.vn/assets/images/cpanel_allow_ip.svg"
                                                                        alt=""></div>
                                                                <h6>Chặn IP</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="btn-light1-primary b-r-10">
                                                            <div class="upcoming-box">
                                                                <div class="upcoming-icon "> <img
                                                                        src="https://ezhost.vn/assets/images/cpanel_unblock_ip.svg"
                                                                        alt=""></div>
                                                                <h6>Bỏ chặn IP</h6>
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
                            <!-- Container-fluid Ends-->
                        </div>

                        <!-- footer start-->
                        @livewire('inc.footer')
                    </div>
                </div>

        </div>
    </div>
</div>