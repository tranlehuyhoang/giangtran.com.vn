<div>

    <head>
        @livewire('inc.seo', ['title' => 'Quản Lý Mã Nguồn'])

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="/assets/static/style.css?v=100766406">
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/css/toast@1.0.1/fuiToast.min.css">
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/js/toast@1.0.1/fuiToast.min.js"></script>
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
                @livewire('inc.header', ['title' => 'Quản Lý Dịch Vụ', 'description' => 'Quản Lý Mã Nguồn'])

                <div class="page-body-wrapper">

                    @livewire('inc.sidebar-wrapper')

                    <div class="page-body">
                        <div class="container-fluid default-dashboard">

                            <div class="col-xl-12">
                                <div class="card title-line">
                                    <div class="card-header">
                                        <h2 class="card-title mb-0"> Lịch Sử Mua Code </h2>

                                    </div>
                                    <div class="card-body">
                                        <div class="col-sm-12">
                                            <div class="table-responsive custom-scrollbar">
                                                <table class="display" id="basic-1">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Tên Mã Nguồn</th>
                                                            <th>Giá Tiền</th>
                                                            <th>Thời Gian Mua</th>
                                                            <th>Trạng Thái</th>
                                                            <th>Hành Động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">#1</td>
                                                            <td
                                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; min-width: 330px; max-width: 45px;">
                                                                Mã Nguồn Smm Panel Siêu Xịn VNĐ </td>
                                                            <td>0 VNĐ </td>
                                                            <td>18/11/2024 - 09:42:17</td>
                                                            <td> <span class="badge badge-primary"> Đã Thanh Toán
                                                                </span> </td>
                                                            <td>
                                                                <span
                                                                    onclick="window.open('https://www.mediafire.com/file/336e2ly7zb8q69a/well-known.zip/file');"
                                                                    class="badge badge-dark"> <i
                                                                        class="icofont icofont-download"></i> Tải Về
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">#1</td>
                                                            <td
                                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; min-width: 330px; max-width: 45px;">
                                                                Mã Nguồn Smm Panel Siêu Xịn VNĐ </td>
                                                            <td>0 VNĐ </td>
                                                            <td>18/11/2024 - 09:42:17</td>
                                                            <td> <span class="badge badge-primary"> Đã Thanh Toán
                                                                </span> </td>
                                                            <td>
                                                                <span
                                                                    onclick="window.open('https://www.mediafire.com/file/336e2ly7zb8q69a/well-known.zip/file');"
                                                                    class="badge badge-dark"> <i
                                                                        class="icofont icofont-download"></i> Tải Về
                                                                </span>
                                                            </td>
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
        <script src="/assets/static/invoices.js?v=1731410526" defer></script>
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
