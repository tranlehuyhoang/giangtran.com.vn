<div style="width: 100%;">

    <head>

        @livewire('inc.seo', ['title' => 'Hóa Đơn #' . $invoice->invoice_code])
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <style>
            li {
                font-size: 14px;
            }

            body {
                background-color: #34855e;
            }
        </style>
    </head>

    <body id="invoice-body" class="d-flex align-items-center w-100 overflow-hidden min-h-100">
        <main class="w-100 p-4">
            <section class="container bg-white p-4 shadow-sm" style="border-radius: 3%; max-width: 480px;">
                <header class="mb-4 d-flex align-items-center">
                    <a href="/" class="d-flex align-items-center text-decoration-none">
                        <img class="me-2" src="/logo/giangtran.com.vn.png" alt=""
                            style="width: 200px; height: auto;">
                    </a>
                </header>

                <main>
                    <span> Hóa Đơn #{{ $invoice->invoice_code }} </span><br>
                    @if ($invoice->payment_status == 'paid')
                        <span> Trạng Thái: <b class="text-success"> Đã Thanh Toán </b> </span><br>
                    @else
                        <span> Trạng Thái: <b class="text-warning"> Chờ Thanh Toán </b> </span><br>
                    @endif


                    <p class="text-secondary mt-2">
                        Vui lòng thanh toán hóa đơn trước {{ $invoice->due_date }}, Nếu quá thời gian hóa đơn sẽ bị hủy.
                    </p>


                    <p class="text-secondary">
                        <strong> Thông Tin Thanh Toán:</strong>

                    <div class="form-group">
                        <select class="form-select" id="select-wallet" onchange="selectwallet();">
                            <option value="mbbank" selected>Ngân Hàng MB Bank</option>
                        </select>
                    </div>

                    <div class="row mt-4" style="display: flex; justify-content: space-between;">
                        <div class="col-md-6 col-6">
                            <div style="margin-top: -10px; font-size: 14px;">
                                <span> Số Tài Khoản: 0966579217 </span><br>
                                <span> Chủ TK: <b>TRAN LE HOANG GIANG</b> </span> <br>
                                <span> Nội Dung CK: <b>TT{{ $invoice->invoice_code }}</b> </span><br>
                                <span> Cần Thanh Toán:
                                    {{ App\Helpers\FormatHelper::formatCurrency($invoice->amount) }}<sup>đ</sup>
                                </span><br>
                                <span> Nhận Tối Thiểu:
                                    {{ App\Helpers\FormatHelper::formatCurrency($invoice->amount) }}<sup>đ</sup></span><br>
                            </div>
                        </div>

                        <div class="col-md-6 col-6 " style="display: flex; justify-content: flex-end;">
                            <img class="d-none d-md-block"
                                src="https://api.vietqr.io/mb/0966579217/{{ number_format($invoice->amount, 0, ',', '') }}/{{ $invoice->invoice_code }}/vietqr_net_2.jpg?accountName=TRAN+LE+HOANG+GIANG"
                                id="qr-cid" style="width: 60%; height: auto; margin-top: -20px;" alt="">
                            <img class="d-block d-md-none"
                                src="https://api.vietqr.io/mb/0966579217/{{ number_format($invoice->amount, 0, ',', '') }}/{{ $invoice->invoice_code }}/vietqr_net_2.jpg?accountName=TRAN+LE+HOANG+GIANG"
                                id="qr-cid" style="width: 100%; height: auto; margin-top: -20px;" alt="">
                        </div>
                    </div>

                    </p>


                    <p class="text-secondary">
                        <strong>Chi Tiết Hóa Đơn:</strong>
                    <div style="margin-top: -10px; font-size: 14px;">
                        <span>- Mã Số Hóa Đơn: #{{ $invoice->invoice_code }}</span><br>
                        <span>- Loại Hóa Đơn: {{ $invoice->invoice_type }} </span><br>
                        <span
                            style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%; display: inline-block;">-
                            Dịch Vụ: {{ $invoice->service }} </span><br>
                        <span>- Thời Gian Lập Hóa Đơn: {{ $invoice->invoice_date }} </span><br>
                        <span>- Số Tiền: {{ App\Helpers\FormatHelper::formatCurrency($invoice->amount) }}<sup>đ</sup>
                        </span><br>
                        <span>- Hạn Thanh Toán: {{ $invoice->payment_due_date }} </span><br>
                    </div>
                    </p>
                </main>


                <footer class="mt-3">
                    <p class="text-secondary" style="font-size: 14px;">
                        Hướng dẫn: Chuyển khoản đúng nội dung và thông tin ngân hàng, hóa đơn sẽ tự động xử lí trong 1-3
                        phút sau khi bạn thanh toán!
                    </p>
                </footer>

            </section>
        </main>

        <script src="/assets/static/jquery.min.js" defer></script>
    </body>
    <style>
        html {
            height: 100%;
        }

        body#invoice-body {
            justify-content: center;
            height: 100%;
        }

        header.mb-4.d-flex.align-items-center {
            justify-content: center;
        }

        body {
            background-color: #009DB5 !important;
        }
    </style>
    <script>
        function fetchCronTransaction() {
            fetch('/api/transaction', {
                    method: 'GET', // HTTP method
                    headers: {
                        'Content-Type': 'application/json' // Optional, depending on your backend requirements
                    }
                })
                .then(data => {
                    setTimeout(fetchCronTransaction, 2000); // 2000 milliseconds = 2 seconds
                });
        }

        function fetchCronData() {
            fetch('/api/invoice/' + {{ $invoice->invoice_code }}, {
                    method: 'GET', // HTTP method
                    headers: {
                        'Content-Type': 'application/json' // Optional, depending on your backend requirements
                    }
                })
                .then(response => response.json()) // Assuming the response is JSON
                .then(data => {
                    if (data.status == 'success') {
                        Swal.fire({
                            icon: 'success', // Change the icon type based on your needs (e.g., 'info', 'warning', 'error')
                            title: 'Thông báo',
                            text: 'Thanh toán hóa đơn #' + data.code + ' thành công!',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        });
                    }
                    // Set a timeout to fetch again after 2 seconds
                    setTimeout(fetchCronData, 2000); // 2000 milliseconds = 2 seconds
                })
                .catch(error => {
                    console.error('Error fetching data:', error);

                    // Handle errors if needed, continue fetching in case of failure
                    setTimeout(fetchCronData, 2000); // Retry after 2 seconds in case of error
                });
        }

        // Call fetchCronData once to start the process
        fetchCronData();
        fetchCronTransaction();
    </script>
    </script>
</div>
