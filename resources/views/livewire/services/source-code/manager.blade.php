<div>

    <head>
        <title>Quản Lý Mã Nguồn - HG DIGITAL</title>
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

    </body>

</div>
