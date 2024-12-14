<div>

    <head>
        <title>Quản Lý Tăng Tương Tác - HG DIGITAL</title>


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
                                                                <td>{{ $order->total_price }}
                                                                    VNĐ</td> <!-- Giá tiền -->
                                                                <td>{{ $order->unit_price }}
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


    </body>

</div>
