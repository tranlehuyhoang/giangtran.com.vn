<div>

    <head>
        <title> Trang Chủ - GIANGTRAN.COM.VN </title>

        <link rel="stylesheet" href="/assets/static/style.css?v=1822759336">
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/css/toast@1.0.1/fuiToast.min.css">
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/js/toast@1.0.1/fuiToast.min.js"></script>
        <link id="googleidentityservice" type="text/css" media="all" href="https://accounts.google.com/gsi/style"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>


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


                            <div class="row size-column">
                                <div class="col-xl-12 col-xl-100 box-col-12">
                                    <div class="row">
                                        <div class="col-xl-6 col-xl-100 box-col-12">
                                            <div class="card title-line upgrade-card overflow-hidden">
                                                <div class="row align-items-end">
                                                    <div class="col-sm-8 col-11">
                                                        <div class="card-header">

                                                            <h2> Tăng Tương Tác <span class="txt-danger"> Giá Rẻ </span>
                                                            </h2>
                                                            <p class="mt-2 f-light"> Giải pháp tối ưu giúp bạn tăng cường tương tác trên mạng xã hội, thu hút nhiều người theo dõi và nâng cao sự hiện diện trực tuyến của bạn. </p> <a
                                                                class="btn btn-primary btn-hover-effect btn-sm f-w-500"
                                                                  href="/services/smm/create"> Mua Ngay
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cartoon-image"> <img class="img-fluid"
                                                        src="/assets/images/smm/banner.png"
                                                        alt="Nguyễn Thành"></div>
                                                <img class="img-fluid pattern-image"
                                                    src="/assets/assets/images/dashboard/bg-1.png" alt="Nguyễn Thành">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-xl-100 box-col-12">
                                            <div class="card height-equal title-line" style="padding-bottom: 7px;">
                                                <div class="row">
                                                    <div class="col-xxl-12 col-xl-12 col-sm-12 box-col-12 col-xxl-100">
                                                        <div class="card-header card-no-border">
                                                            <h2>Tài Khoản</h2>
                                                            @if (Auth::check())
                                                                <span class="f-w-500">Xác Thực 2 Bước: Đang Tắt</span>
                                                            @endif
                                                        </div>

                                                        <div class="card-body pt-0 chat-app-wrapper">
                                                            @if (Auth::check())
                                                                <div class="project-details">
                                                                    <div class="d-flex gap-2">
                                                                        <img src="/avatar.png" style="width: 48px;"
                                                                            alt="user">
                                                                        <div>
                                                                            <h4 class="f-w-500">
                                                                                {{ Auth::user()->username }}
                                                                            </h4>
                                                                            <span class="f-12 f-light f-w-500">Thành
                                                                                Viên</span>
                                                                        </div>
                                                                    </div>

                                                                    <p class="f-w-500 f-light text-danger">Quý Khách
                                                                        Chưa Cập
                                                                        Nhật Thông Tin Liên Hệ, Thêm Thông Tin <a
                                                                            href="/profile" class="text-primary">Tại
                                                                            Đây</a>
                                                                    </p>
                                                                    <div class="mt-3" style="display: flex;">
                                                                        <a href="/chuyen-khoan"
                                                                            class="badge badge-primary text-light">Nạp
                                                                            Tiền</a>
                                                                        <a href="/profile"
                                                                            class="badge badge-secondary text-light">Lịch
                                                                            Sử
                                                                            Hoạt Động</a>
                                                                        <a wire:click="logout" style="cursor: pointer;"
                                                                            class="badge badge-danger text-light">Đăng
                                                                            Xuất</a>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="card-body pt-0">
                                                                    <div class="light-card satisfaction-box common-box">
                                                                        <div>
                                                                            <div class="g_id_signin" data-type="standard" data-shape="rectangular"
                                                                                data-theme="outline" data-text="signin_with" data-size="large"
                                                                                data-logo_alignment="left">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-xl-12 col-sm-12 box-col-12 col-xxl-100" hidden>
                                                <div class="card height-equal title-line">
                                                    <div class="card-header card-no-border">
                                                        <div class="header-top">
                                                            <h2> Mã Khuyến Mãi </h2>
                                                        </div>
                                                    </div>

                                                    <div class="card-body pt-0">
                                                        <ul class="scrollable-div-250px">


                                                            <li>
                                                                <div class="card card-body">
                                                                    <div style="display: flex;">
                                                                        <b class="text-danger"> VIETNAM </b>
                                                                        <a onclick="copyText('VIETNAM');"
                                                                            class="badge badge-primary text-light"
                                                                            style="margin-left: auto; cursor: pointer;">
                                                                            <i class="icofont icofont-copy-alt"></i>
                                                                        </a>
                                                                    </div>

                                                                    <div>
                                                                        <span> Áp Dụng Cho Tất Cả Dịch Vụ</span><br>
                                                                        <span> Giảm: 20%, Đã Sử Dụng: 73%,
                                                                            <br> Hết Hạn Vào: 13/11/2024 - 12:00:00
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </li>


                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--
                                        <div class="col-xl-6 box-col-6" hidden>
                                            <div class="row tread-cards">
                                                <div class="col-xl-6 col-sm-6">
                                                    <div class="card widget-1">
                                                        <div class="card-body common-box">
                                                            <div class="widget-icon primary widget-round">
                                                                <svg>
                                                                    <use
                                                                        href="/assets/assets/svg/icon-sprite.svg#crown">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3 class="f-w-600"> 0 </h3><span
                                                                    class="f-w-500 f-light f-12"> Đang Sử Dụng </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-sm-6">
                                                    <div class="card widget-1">
                                                        <div class="card-body common-box">
                                                            <div class="widget-icon success widget-round">
                                                                <svg>
                                                                    <use
                                                                        href="/assets/assets/svg/icon-sprite.svg#flash">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3 class="f-w-600"> 0 </h3><span
                                                                    class="f-w-500 f-light f-12"> Chờ Gia Hạn </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-sm-6">
                                                    <div class="card widget-1">
                                                        <div class="card-body common-box">
                                                            <div class="widget-icon warning widget-round">
                                                                <svg>
                                                                    <use
                                                                        href="/assets/assets/svg/icon-sprite.svg#blend-2">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3 class="f-w-600"> 0<sup>đ</sup> </h3><span
                                                                    class="f-w-500 f-light f-12"> Số Dư </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-sm-6">
                                                    <div class="card widget-1">
                                                        <div class="card-body common-box">
                                                            <div class="widget-icon secondary widget-round">
                                                                <svg>
                                                                    <use
                                                                        href="/assets/assets/svg/icon-sprite.svg#color-filter">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3 class="f-w-600"> Thành Viên </h3><span
                                                                    class="f-w-500 f-light f-12"> Cấp Bậc Tài Khoản
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div> --}}

                                        {{-- <div class="col-md-6" style="margin-top: -10px;" hidden>
                                            <div class="offer-banner"
                                                style="background-image: url(/assets/assets/images/bg-affilate.png);">
                                                <div class="offer-content">
                                                    <h2> Nhận Lên Đến 30% Cho Mỗi Lần Nạp </h2>
                                                    <p class="f-w-500 f-12"> Bắt Đầu Giới Thiệu Kiếm Tiền Ngay! </p>
                                                    <a href="/tiep-thi-lien-ket" class="btn btn-dark btn-sm"> Bắt Đầu
                                                    </a>
                                                </div><img class="img-fluid"
                                                    src="/assets/assets/images/cyberlux/developer-4268348-3560991.png"
                                                    alt="vector">
                                            </div>

                                            <div class="card height-equal title-line mt-3">
                                                <div class="card-header card-no-border">
                                                    <div class="header-top">
                                                        <h2> Affiliates </h2>
                                                        <div class="card-header-right-icon customer-header"><a
                                                                class="link-stroke-icon" href="/tiep-thi-lien-ket"> Chi
                                                                Tiết
                                                                <svg>
                                                                    <use
                                                                        href="/assets/assets/svg/icon-sprite.svg#eye-contact">
                                                                    </use>
                                                                </svg></a></div>
                                                    </div>
                                                </div>

                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-6">
                                                            <div class="customer-rate" style="padding: 20px;">
                                                                <span class="f-light f-12 f-w-500 text-success"> Số Dư
                                                                    Hoa Hồng </span>
                                                                <h3 class="f-w-600"> 0<sup>đ</sup> </h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-6">
                                                            <div class="customer-rate" style="padding: 20px;">
                                                                <span class="f-light f-12 f-w-500 text-danger"> Hoa Hồng
                                                                    Đã Rút </span>
                                                                <h3 class="f-w-600"> 0<sup>đ</sup> </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 box-col-6"  hidden>
                                            <div class="card title-line">
                                                <div class="card-header card-no-border transaction-header">
                                                    <div class="header-top">
                                                        <h2> Thống Kê Dịch Vụ <span
                                                                class="f-light f-12 d-block f-w-500"> Danh Sách Dịch Vụ
                                                                Đang Sử Dụng </span></h2>
                                                    </div>
                                                </div>


                                                <div class="card-body pt-0 transaction-list">

                                                    <div class="row">
                                                        <div class="col-md-6 col-6"
                                                            onclick="loadto('/manage/hosting')">
                                                            <div class="card widget-1">
                                                                <div class="card-body common-space order-card">
                                                                    <div> <span class="f-w-500 f-light txt-primary">
                                                                            Hosting Lưu Trữ </span>
                                                                        <h3> 0 </h3>
                                                                        <div class="order-content">
                                                                        </div>
                                                                    </div>
                                                                    <button class="btn btn btn-sm"><i
                                                                            class="fa fa-angle-right txt-primary"
                                                                            style="font-size: 15px;"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6 col-6"
                                                            onclick="loadto('/manage/reseller')">
                                                            <div class="card widget-1">
                                                                <div class="card-body common-space order-card">
                                                                    <div> <span class="f-w-500 f-light txt-primary">
                                                                            Reseller Hosting </span>
                                                                        <h3> 0 </h3>
                                                                        <div class="order-content">
                                                                        </div>
                                                                    </div>
                                                                    <button class="btn btn btn-sm"><i
                                                                            class="fa fa-angle-right txt-primary"
                                                                            style="font-size: 15px;"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6 col-6"
                                                            onclick="loadto('/manage/domain')">
                                                            <div class="card widget-1">
                                                                <div class="card-body common-space order-card">
                                                                    <div> <span class="f-w-500 f-light txt-primary">
                                                                            Tên
                                                                            Miền </span>
                                                                        <h3> 0 </h3>
                                                                        <div class="order-content">
                                                                        </div>
                                                                    </div>
                                                                    <button class="btn btn btn-sm"><i
                                                                            class="fa fa-angle-right txt-primary"
                                                                            style="font-size: 15px;"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6 col-6"
                                                            onclick="loadto('/manage/cronjob')">
                                                            <div class="card widget-1">
                                                                <div class="card-body common-space order-card">
                                                                    <div> <span class="f-w-500 f-light txt-primary">
                                                                            Cronjobs </span>
                                                                        <h3> 0 </h3>
                                                                        <div class="order-content">
                                                                        </div>
                                                                    </div>
                                                                    <button class="btn btn btn-sm"><i
                                                                            class="fa fa-angle-right txt-primary"
                                                                            style="font-size: 15px;"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modalHome" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenter1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="modal-toggle-wrapper" style="position: relative;">
                                        <b style="font-size: 14px;" class="text-center text-danger">Thông Báo</b>
                                        <span class="close"
                                            style="position: absolute; top: 0; right: 0; margin-top: -10px; font-size: 1.4rem; cursor: pointer;"
                                            data-bs-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                        </span>
                                        <br>
                                        <p class="mt-3">
                                        <p style="text-align:center"><span style="color:#c0392b"><strong>Ch&agrave;o
                                                    Mừng Đến Với GiangTran.Com.Vn</strong></span></p>
                                        <p style="text-align:center"><strong>Giới Thiệu Bạn B&egrave;, Kh&aacute;ch
                                                H&agrave;ng, ... Nhận 30% Tiền Mỗi Khi Họ Thanh To&aacute;n, R&uacute;t
                                                Nhanh Ch&oacute;ng&nbsp;<a href="/tiep-thi-lien-ket"><span
                                                        style="color:#3498db">Tại Đ&acirc;y</span></a></strong></p>
                                        <p style="text-align:center">Nếu C&oacute; Bạn C&oacute; Bất Cứ Vấn Đề Hoặc
                                            G&oacute;p &Yacute; Đừng Ngần Ngại Li&ecirc;n Hệ Nh&oacute;m Hỗ Trợ, Nify Sẽ
                                            Cải Thiện Để Mọi Người Sử Dụng Dịch Vụ Được Tốt Nhất.</p>
                                        <p style="text-align:center">Nh&oacute;m Zalo:<strong>&nbsp;<a
                                                    href="https://zalo.me/">https://zalo.me/g/ukevsm860</a></strong>
                                        </p>
                                        <p style="text-align:center">Hỗ Trợ Nhanh Qua: <a
                                                href="https://web.facebook.com/profile.php?id=61564038398069"><span
                                                    style="color:#16a085"><strong>Fanpage</strong></span></a></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        function close1h() {
                            localStorage.setItem('time_modal', '1731413273');
                            var modal = new bootstrap.Modal(document.getElementById('modalHome'));
                            modal.hide();
                        }

                        document.addEventListener("DOMContentLoaded", function() {
                            var modal = new bootstrap.Modal(document.getElementById('modalHome'));
                            if (localStorage.getItem('time_modal') < 1731409673) {
                                modal.show();
                            }
                        });
                    </script>
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


        {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js"></script>
        <script src="/assets/static/simplebar.js"></script>
        <script src="/assets/static/invoices.js?v=1731409673" defer></script>
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
