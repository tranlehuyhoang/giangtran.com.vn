<div>
    <div>
        <div>

            <head>

            </head>
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

                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Quản lý đơn hàng</h4>
                                                <span><code>Khi gói hosting hết hạn quá 3 ngày hệ thống sẽ tự động xóa hosting của bạn</code></span>
                                            </div>
                                            <div class="card-body">

                                                <div class="table-responsive theme-scrollbar signal-table">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Id</th>
                                                                <th scope="col">Ngày đặt </th>
                                                                <th scope="col">Link</th>
                                                                <th scope="col">Tổng tiền</th>
                                                                <th scope="col">Bắt đầu </th>
                                                                <th scope="col">Số lượng</th>
                                                                <th scope="col">Dịch vụ </th>
                                                                <th scope="col">Trạnhg thái </th>
                                                                <th scope="col">Còn lại</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>06/11/2024 19:55 </td>
                                                                <td>https://example.com/object_31 </td>
                                                                <td>₫0 </td>
                                                                <td>35,803 </td>
                                                                <td>44 </td>
                                                                <td>ID 74 </td>
                                                                <td>Hoàn thành </td>
                                                                <td>10 </td>

                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                            </div>
                                            <div class="card-footer ">
                                                <nav aria-label="Page navigation example ">
                                                    <ul class="pagination pagination-primary pagin-border-primary">
                                                      <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                                      <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                      <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                      <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                      <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                                                    </ul>
                                                  </nav>
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