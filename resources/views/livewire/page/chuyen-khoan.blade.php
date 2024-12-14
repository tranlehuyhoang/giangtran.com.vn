<div>

    <head>
        <title>Nạp Tiền - HG DIGITAL</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

                            <div class="card p-3 mb-4">
                                <b class="font-weight-bold mb-3  ">Nội dung chuyển khoản</b>
                                <div class="d-flex align-items-center justify-content-between bg-light rounded"
                                    style="padding: 10px;">
                                    <b class="text-dark" id="code-transfer">
                                        HG {{ Auth::check() ? strtoupper(Auth::user()->username) : 'Khách' }}
                                    </b>
                                </div>
                            </div>
                            <style>
                                body.dark-only #code-transfer {
                                    color: #fff !important;
                                }
                            </style>

                            <div class="row">

                                <div class="col-md-5">
                                    <div class="card card-body widget-1">
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <img loading="lazy"
                                                    src="https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBMmZvSXc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--88c82102b4c6782414b90e4077f75449b9789560/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RkhKbGMybDZaVjkwYjE5c2FXMXBkRnNIYVFJc0FXa0NMQUU9IiwiZXhwIjpudWxsLCJwdXIiOiJ2YXJpYXRpb24ifX0=--15c3f2f3e11927673ae52b71712c1f66a7a1b7bd/Logo%20MB%20he%20mau%20RGB%2001.png"
                                                    style="width: 90px; max-width: 345px; height: auto">
                                            </div>

                                            <div class="col-md-6 col-6 text-end">
                                                <i class="icofont icofont-qr-code" style="cursor: pointer;"
                                                    title="Mã QR Chuyển Khoản" data-bs-target="#showqr-code"
                                                    data-bs-toggle="modal"
                                                    onclick="showQRcode(`https://api.vietqr.io/mb/ {{ env('SEPAY_ACCOUNT_NUMBER') }}/0/HG {{ Auth::check() ? strtoupper(Auth::user()->username) : 'Khách' }}/vietqr_net_2.jpg?accountName=TRAN+LE+HOANG+GIANG`);"></i>
                                            </div>
                                        </div>


                                        <div class="mt-3">
                                            <div class="row">
                                                <div class="col-md-6 col-6">
                                                    <span> Số Tài Khoản: </span><br>
                                                    <span> Chủ Tài Khoản: </span><br>
                                                    <span> Tối Thiểu Nạp: </span><br>
                                                </div>

                                                <div class="col-md-6 col-6 text-end">
                                                    <span> {{ env('SEPAY_ACCOUNT_NUMBER') }} <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            style="width: 18px; height: auto; cursor: pointer;"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                            onclick="copyText('{{ env('SEPAY_ACCOUNT_NUMBER') }}');">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="{2}"
                                                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                                            </path>
                                                        </svg></span><br>
                                                    <span> TRAN LE HOANG GIANG </span><br>
                                                    <span> 0 VND </span><br>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-12">
                                <div class="card title-line">
                                    <div class="card-header">
                                        <h2 class="card-title mb-0"> Lịch Sử Nạp Tiền </h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-sm-12">
                                            <div class="table-responsive custom-scrollbar">
                                                <table class="display" id="basic-1">
                                                    <thead>
                                                        <tr>
                                                            <th> ID </th>
                                                            <th> Mã Giao Dịch </th>
                                                            <th> Số Tiền </th>
                                                            <th> Trạng Thái </th>
                                                            <th> Ngân Hàng </th>
                                                            <th> Thời Gian Nạp </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="datatable">
                                                        @foreach ($paymentHistories as $index => $history)
                                                            <tr>
                                                                <td>{{ $index + 1 }}</td>
                                                                <td>{{ $history->transaction_code }}</td>
                                                                <td>{{ number_format($history->amount, 2) }} VNĐ</td>
                                                                <td>{{ $history->status }}</td>
                                                                <td>{{ $history->bank }}</td>
                                                                <td>{{ $history->created_at->format('d/m/Y H:i:s') }}
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

                    <div class="modal fade" id="showqr-code" aria-hidden="true" aria-labelledby="exampleModalToggle2"
                        tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="modal-toggle-wrapper">
                                        <ul class="modal-img">
                                            <li>
                                                <center><img src="" id="qr-cid"
                                                        style="width: 70%; height: auto;" alt=""></center>
                                            </li>
                                        </ul>

                                        <span class="text-center mt-3">Sử dụng App MoMo hoặc ứng dụng Camera hỗ trợ QR
                                            code để quét mã.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        function showQRcode(img) {
                            $("#qr-cid").attr("src", img);
                        }
                    </script>

                    @livewire('inc.footer')
                </div>
            </div>
        </div>


        <input type="hidden" id="mn" value="0">

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Fancybox.bind("[data-fancybox='gallery']", {
                    animated: true,
                    infobar: true,
                    toolbar: true,
                    loop: true
                });
            });

            $(document).ready(function() {
                $('img').each(function() {
                    if (!$(this).attr('loading')) {
                        $(this).attr('loading', 'lazy');
                    }
                });
            });
        </script>

        <style>
            table tfoot tr {
                padding-bottom: 6px;
            }

            table tfoot tr td {
                padding-bottom: 6px;
            }
        </style>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                function fetchCronTransaction() {
                    fetch('/api/transaction', {
                            method: 'GET',
                            headers: {
                                'Content-Type': 'application/json'
                            }
                        })
                        .then(data => {
                            setTimeout(fetchCronTransaction, 2000);
                        });
                }

                function fetchCronData() {
                    fetch('/api/checkpayment', {
                            method: 'GET',
                            headers: {
                                'Content-Type': 'application/json'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status == 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Thông báo',
                                    text: 'Nạp thành công số tiền ' + data.amount + ' VNĐ!',
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.reload();
                                    }
                                });
                            }
                            setTimeout(fetchCronData, 2000);
                        })
                        .catch(error => {
                            console.error('Error fetching data:', error);
                            setTimeout(fetchCronData, 2000);
                        });

                }

                // Gọi fetchCronData một lần để bắt đầu quá trình
                fetchCronData();
                fetchCronTransaction();
            });
        </script>
    </body>

</div>
