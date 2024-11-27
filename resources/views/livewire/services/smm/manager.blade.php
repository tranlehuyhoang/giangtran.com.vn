<div>

    <head>
        @livewire('inc.seo', ['title' => 'Quản Lý Tăng Tương Tác'])

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
                @livewire('inc.header', ['title' => 'Tăng Tương Tác', 'description' => 'Quản lý tăng tương tác'])

                <div class="page-body-wrapper">

                    @livewire('inc.sidebar-wrapper')

                    <div class="page-body">
                        <div class="container-fluid default-dashboard">

                            <div class="col-xl-12">
                                <div class="card title-line">
                                    <div class="card-header">
                                        <h2 class="card-title mb-0"> Quản Lý Tăng Tương Tác </h2>

                                    </div>
                                    <div class="card-body">
                                        <div class="col-sm-12">
                                            <div class="table-responsive custom-scrollbar">
                                                <table class="display" id="basic-1">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th> <!-- ID của đơn hàng -->
                                                            <th>Dịch Vụ</th> <!-- Tên dịch vụ -->
                                                            <th>Giá Tiền</th> <!-- Tổng giá tiền -->
                                                            <th>Giá Đơn Vị</th> <!-- Giá đơn vị -->
                                                            <th>Số Lượng</th> <!-- Số lượng dịch vụ -->
                                                            <th>Khởi Tạo</th> <!-- Số lượng khởi tạo -->
                                                            <th>Thời Gian Tạo</th> <!-- Thời gian tạo đơn hàng -->
                                                            <th>Trạng Thái</th> <!-- Trạng thái của đơn hàng -->
                                                            <th>Link</th> <!-- Liên kết đến dịch vụ -->
                                                            <th>Số Lượng Còn Lại</th> <!-- Số lượng còn lại -->
                                                            <th>Thanh Toán</th>
                                                            <!-- Các thao tác mà người dùng có thể thực hiện -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach (App\Models\SmmOrder::getOrdersByCurrentUser() as $order)
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">{{ $order->id }}</td>
                                                                <td>{{ $order->service->name }}</td>
                                                                <!-- Hiển thị tên dịch vụ -->
                                                                <td>{{ number_format($order->total_price, 0, ',', '.') }}
                                                                    VNĐ</td> <!-- Giá tiền -->
                                                                <td>{{ number_format($order->unit_price, 0, ',', '.') }}
                                                                    VNĐ</td> <!-- Giá đơn vị -->
                                                                <td>{{ $order->quantity }}</td> <!-- Số lượng -->
                                                                <td>{{ $order->start_count }}</td>
                                                                <!-- Số lượng khởi tạo -->
                                                                <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y - H:i:s') }}
                                                                </td> <!-- Thời gian tạo -->
                                                                <td>
                                                                    <span
                                                                        class="badge badge-success bg-success">{{ $order->status == 'pending' ? 'Đang Chạy' : 'Đã Xong' }}</span>
                                                                    <!-- Trạng thái -->
                                                                </td>
                                                                <td>
                                                                    <a href="{{ $order->link }}"
                                                                        target="_blank">{{ $order->link }}</a>
                                                                    <!-- Hiển thị liên kết đến dịch vụ -->
                                                                </td>
                                                                <td>{{ $order->remains }}</td>
                                                                <!-- Số lượng còn lại -->
                                                                <td>
                                                                    <span class="badge badge-primary">{{ $order->payment_status == 'pending' ? 'Chưa Thanh Toán' : 'Đã Thanh Toán' }}</span>
                                                                    <!-- Thao tác -->
                                                                </td>
                                                            </tr>
                                                        @endforeach
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
