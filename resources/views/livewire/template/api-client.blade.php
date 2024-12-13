<div>

<head>
    <title>API Client | HGDIGITAL.VN</title>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="/assets/static/style.css?v=1296109908">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/css/toast@1.0.1/fuiToast.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/js/toast@1.0.1/fuiToast.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />


    <noscript>
        <meta http-equiv="refresh" content="0;url=about:blank">
    </noscript>
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
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="card title-line">
                                        <div class="card-header card-no-border">
                                            <h2> Thông Tin Tích Hợp API </h2>
                                            <span class="f-w-500 f-12 f-light mt-0"> Vui Lòng Không Để Lộ APIKEY Tránh Mất Tiền. </span>
                                        </div>
                                        <div class="card-body" style="margin-top: -20px;">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="form-control" id="apikey" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%; display: inline-block;">Tài Khoản Chưa Kích Hoạt API.</div>
                                                        <button class="btn btn-primary" onclick="copyText('Tài Khoản Chưa Kích Hoạt API.');">
                                        <i class="icofont icofont-ui-copy"></i>
                                    </button>
                                                    </div>
                                                </div>

                                                <b class="txt-danger" style="font-size: 10px;"> 💡 Nếu Bạn Cần Thay Đổi APIKEY Hãy Đổi Mật Khẩu Để Đổi APIKEY. </b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="card title-line">
                                        <div class="card-header card-no-border">
                                            <h2> Ghi Chú </h2>
                                            <span class="f-w-500 f-12 f-light mt-0"> Một Số Lưu Ý Và Hướng Dẫn Nhanh, Bạn Nên Đọc! </span>
                                        </div>
                                        <div class="card-body pt-0">
                                            <p>Nếu T&agrave;i Khoản Chưa K&iacute;ch Hoạt API H&atilde;y Đổi Mật Khẩu T&agrave;i Khoản Để Được K&iacute;ch Hoạt API Nh&eacute;.</p>

                                            <p>Kĩ Thuật Vi&ecirc;n Nhận T&iacute;ch Hợp C&aacute;c API V&agrave;o M&atilde; Nguồn Của Bạn Nếu Bạn Kh&ocirc;ng Biết Về Lập Tr&igrave;nh, H&atilde;y Li&ecirc;n Hệ Qua Fanpage Nếu Cần Nh&eacute;.</p>

                                            <p><strong>T&agrave;i Liệu Kết Nối: </strong><a href="https://documenter.getpostman.com/view/18852307/2sAXqqe3cz" target="_blank">Tại Đ&acirc;y</a></p>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="card title-line">
                                    <div class="card-header">
                                        <h2 class="card-title mb-0"> Lịch Sử Thanh Toán (API) </h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-sm-12">
                                            <div class="table-responsive custom-scrollbar">
                                                <table class="display" id="basic-1">
                                                    <thead>
                                                        <tr>
                                                            <th> ID </th>
                                                            <th> Chi Tiết </th>
                                                            <th> IP </th>
                                                            <th> WebAPI </th>
                                                            <th> Giá Tiền </th>
                                                            <th> Thời Gian </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="datatable">
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

                <script src="/assets/static/api-client.js?v=1949833686"></script>
           @livewire('inc.footer')
            </div>
        </div>
    </div>


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
    <script src="/assets/static/invoices.js?v=1731939965" defer></script>
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
