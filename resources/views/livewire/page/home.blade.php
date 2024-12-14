<div>

    <head>
        <title>Trang Chủ - HG DIGITAL</title>
    </head>
    <body id="content">
        <div class="loader-wrapper" style="z-index: 999999;">
                <div class="preloader-wrap">
                    <img src="/logo/giangtran.com.vn.dark.webp" alt="logo" class="img-fluid" style="width: 150px;">
                    <div class="loading-bar"></div>
                </div>
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
                                                            <p class="mt-2 f-light"> Giải pháp tối ưu giúp bạn tăng
                                                                cường tương tác trên mạng xã hội, thu hút nhiều người
                                                                theo dõi và nâng cao sự hiện diện trực tuyến của bạn.
                                                            </p> <a
                                                                class="btn btn-primary btn-hover-effect btn-sm f-w-500"
                                                                href="/services/smm/create"> Mua Ngay
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cartoon-image"> <img class="img-fluid"
                                                        src="/assets/images/smm/banner.png" alt="Nguyễn Thành"></div>
                                                <img class="img-fluid pattern-image"
                                                    src="/assets/assets/images/dashboard/bg-1.png" alt="Nguyễn Thành">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-xl-100 box-col-12">
                                            @livewire('page.home.widget.account')

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

                    @livewire('content.modal-home')
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
        @livewire('content.modal-hoa-don')
    </body>

</div>
