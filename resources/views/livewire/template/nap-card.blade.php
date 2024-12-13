<div>


    <head>
        <title>Nap Thẻ | HGDIGITAL.VN</title>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="/assets/static/style.css?v=588955398">
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
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                    <div class="page-body">
                        <div class="container-fluid default-dashboard">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="col-md-12">
                                        <div class="card title-line">
                                            <div class="card-header card-no-border">
                                                <h2> Nhập Thông Tin Thẻ </h2>

                                                <span class="f-w-500 f-12 f-light mt-0"> Ghi Chú: Nạp Thẻ Cào Có Chiết Khấu (Đây Là Phí Từ Dịch Vụ Đổi Thẻ Tự Động, Chúng Tôi Không Thu Phí Của Bạn!) </span>
                                            </div>
                                            <div class="card-body pt-0">

                                                <div class="row">
                                                    <div class="col-md-6 col-6">
                                                        <div class="form-group mt-3">
                                                            <label> Mã Thẻ </label>
                                                            <input class="form-control" id="pinCard" placeholder="Nhập Mã Thẻ Cào">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-6">
                                                        <div class="form-group mt-3">
                                                            <label> Số Serial </label>
                                                            <input class="form-control" id="serialCard" placeholder="Nhập Số Serial">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-6">
                                                        <div class="form-group mt-3">
                                                            <label> Loại Thẻ </label>
                                                            <select class="form-select" id="typeCard">
                                    <option value=""> Chọn Loại Thẻ </option>
                                    <option value="VIETTEL"> VIETTEL </option>
                                    <option value="MOBIFONE"> MOBIFONE </option>
                                    <option value="VINAPHONE"> VINAPHONE </option>
                                    <option value="VIETNAMOBILE"> VIETNAMOBILE </option>
                                    <option value="ZING"> ZING </option>
                                </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-6">
                                                        <div class="form-group mt-3">
                                                            <label> Mệnh Giá </label>
                                                            <select class="form-select" id="amountCard">
                                        <option value="">Chọn Mệnh Giá</option>
                                        <option value="10000">10.000 VND</option>
                                        <option value="20000">20.000 VND</option>
                                        <option value="30000">30.000 VND</option>
                                        <option value="50000">50.000 VND</option>
                                        <option value="100000">100.000 VND</option>
                                        <option value="200000">200.000 VND</option>
                                        <option value="300000">300.000 VND</option>
                                        <option value="500000">500.000 VND</option>
                                        <option value="1000000">1.000.000 VND</option>
                                    </select>
                                                        </div>
                                                    </div>

                                                    <div class="mt-2" id="recaptchaTrue"></div>
                                                    <div class="g-recaptcha" data-sitekey="6LfzvSUqAAAAABdzyxupCtes0wk7WdoQP3kyjsi4"></div>
                                                    <div class="mt-3">
                                                        <button class="btn btn-primary btn-sm" onclick="NapThe('btn-card', `<i class='icofont icofont-bill-alt'></i> Nạp Thẻ`);" id="btn-card"> <i class="icofont icofont-bill-alt"></i> Nạp Thẻ </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="card title-line">
                                            <div class="card-header">
                                                <h2 class="card-title mb-0"> Lịch Sử Nạp Thẻ </h2>
                                            </div>
                                            <div class="card-body">
                                                <div class="col-sm-12">
                                                    <div class="table-responsive custom-scrollbar">
                                                        <table class="display" id="basic-1">
                                                            <thead>
                                                                <tr>
                                                                    <th> ID </th>
                                                                    <th> Mã Thẻ </th>
                                                                    <th> Số Serial </th>
                                                                    <th> Loại Thẻ </th>
                                                                    <th> Mệnh Giá / Thực Nhận </th>
                                                                    <th> Trạng Thái </th>
                                                                    <th> Thời Gian Nạp </th>
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

                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="card title-line">
                                            <div class="card-header card-no-border">
                                                <h2> Lưu Ý </h2>
                                                <span class="f-w-500 f-12 f-light mt-0"> Một Số Lưu Ý Và Hướng Dẫn Nhanh, Bạn Nên Đọc! </span>
                                            </div>
                                            <div class="card-body pt-0">
                                                <p>- Vui L&ograve;ng Chọn Đ&uacute;ng Mệnh Gi&aacute; V&agrave; Loại Thẻ (Nếu Sai C&oacute; Thể Dẫn Đến Mất Thẻ)</p>

                                                <p>- Nhập Đ&uacute;ng Số Serial &amp; M&atilde; Thẻ</p>

                                                <p>- Lưu &Yacute; Kh&ocirc;ng Gửi Thẻ Li&ecirc;n Tục, Nếu Vẫn Cố T&igrave;nh Thực Hiện Bạn Sẽ Bị Kh&oacute;a T&agrave;i Khoản Ngay Lập Tức</p>

                                                <p>- Thẻ C&agrave;o Được Duyệt Tự Động Từ 30 Gi&acirc;y Đến 1 Ph&uacute;t</p>

                                                <p><span style="font-size:12px"><span style="color:#c0392b"><strong>Ch&uacute;ng T&ocirc;i Kh&ocirc;ng Hỗ Trợ Xử L&iacute; Nếu Bạn Nạp Thẻ V&agrave; C&oacute; Trạng Th&aacute;i L&agrave; Thẻ Sai, Thẻ Lỗi, Sai Mệnh Gi&aacute; V&igrave; Đ&acirc;y L&agrave; Do Bạn Nạp V&agrave; Xử L&iacute; Với Nh&agrave; Mạng, Ch&uacute;ng T&ocirc;i Kh&ocirc;ng C&oacute; Quyền Xử L&iacute; Vấn Đề N&agrave;y.</strong></span></span>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="/assets/static/nap-the.js"></script>
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
        <script src="/assets/static/invoices.js?v=1731410762" defer></script>
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
