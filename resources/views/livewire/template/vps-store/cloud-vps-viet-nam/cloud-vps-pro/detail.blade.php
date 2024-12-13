<div>

    <head>
        <title> Chi Tiết Dịch Vụ | HGDIGITAL.VN</title>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="/assets/static/style.css?v=2113506158">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/css/toast@1.0.1/fuiToast.min.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/js/toast@1.0.1/fuiToast.min.js"></script>
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
            @livewire('inc.header')

                <div class="page-body-wrapper">

                    @livewire('inc.sidebar-wrapper')

                    <style>
                        li {
                            padding-top: 5px;
                        }
                    </style>

                    <div class="page-body">
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="">
                                        <div class="pricing-content">
                                            <div class="row g-sm-4 g-3">

                                                <div class="col-md-8">
                                                    <div class="card title-line">
                                                        <div class="card-header card-no-border">
                                                            <h2> Đăng Ký Dịch Vụ </h2>
                                                        </div>
                                                        <style>
                                                            .slider-value {
                                                                font-weight: bold;
                                                                color: #007bff;
                                                            }
                                                        </style>

                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <b class="text-success" onclick="toggle_method_display();"> <u>Tùy Chọn Phương Thức Thanh Toán ></u> </b>

                                                                    <div id="select_methodpay" style="display: none;">

                                                                        <div class="form-group">
                                                                            <label> Phương Thức Thanh Toán </label>






                                                                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                                                                <div class="radio-form">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" id="radio14" type="radio" name="radio-stacked" disabled onchange="Method_payment()">
                                                                                        <label class="form-check-label" for="radio14"> Số Dư Tài Khoản (0<sup>đ</sup>) </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" id="radio13" type="radio" name="radio-stacked" checked="" onchange="Method_payment()">
                                                                                        <label class="form-check-label" for="radio13"> Chuyển Khoản Ngân Hàng </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <input type="hidden" id="payment_method" name="payment_method" value="">

                                                                            <script>
                                                                                function Method_payment() {
                                                                                    var payment_balance = document.getElementById("radio14");
                                                                                    var payment_bank = document.getElementById("radio13");

                                                                                    if (payment_balance.checked) {
                                                                                        document.getElementById("payment_method").value = 'payment_balance';
                                                                                    }

                                                                                    if (payment_bank.checked) {
                                                                                        document.getElementById("payment_method").value = 'payment_bank';
                                                                                    }
                                                                                }

                                                                                function amountIsMoney(price, vpstype = false) {
                                                                                    var mn = document.getElementById("mn").value;
                                                                                    if (price <= mn) {
                                                                                        document.getElementById("radio14").disabled = false;
                                                                                        !vpstype ? document.getElementById("radio14").checked = true : null;

                                                                                        Method_payment();
                                                                                    } else if (price > mn) {
                                                                                        document.getElementById("radio14").disabled = true;
                                                                                        document.getElementById("radio13").checked = true;

                                                                                        Method_payment();
                                                                                    }
                                                                                }

                                                                                setTimeout(() => {
                                                                                    Method_payment();
                                                                                }, 100)
                                                                            </script>


                                                                        </div>

                                                                        <div class="mt-3"></div>

                                                                    </div>

                                                                    <div class="row mt-2">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label> Hostname </label>
                                                                                <input class="form-control" id="hostname" placeholder="" value="nify-b4ml1q">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="d-block d-md-none mt-2"></div>
                                                                            <div class="form-group">
                                                                                <label> Mật Khẩu VPS </label>
                                                                                <input class="form-control" id="password" placeholder="" value="KCHhw9J2n(6.">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="d-block d-md-block mt-2"></div>
                                                                            <div class="form-group">
                                                                                <label> Chu Kỳ Thanh Toán </label>
                                                                                <select class="form-select" id="duration" onchange="select_duration();">
                                                                                                        <option value="1day" data-duration="3,000"> 3,000đ / Ngày</option>

                                                                                                        <option value="15day" data-duration="40,000">40,000đ / 15 Ngày</option>

                                                                                                        <option value="1month" data-duration="70,000" selected>70,000đ / Tháng</option>

                                                                                                        <option value="3month" data-duration="199,500">199,500đ / 3 Tháng</option>

                                                                                                        <option value="6month" data-duration="378,000">378,000đ / 6 Tháng</option>

                                                                                                        <option value="1year" data-duration="714,000">714,000đ / Năm</option>

                                                                                                        <option value="2year" data-duration="1,344,000">1,344,000đ / 2 Năm</option>

                                                                                                        <option value="3year" data-duration="1,890,000">1,890,000đ / 3 Năm</option>
                                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mt-3">

                                                                        <label for="os-select">Chọn Hệ Điều Hành:</label>
                                                                        <select id="os-select" class="form-select">
                                                <option value="">Chọn hệ điều hành</option>
                                                <option value="amalinux">AlmaLinux</option><option value="ubuntu">Ubuntu</option><option value="centos">CentOS</option><option value="rocky">Rocky</option><option value="windows">Windows</option><option value="debian">Debian</option>                                        </select>

                                                                        <label for="version-select" style="display:block; padding-top: 5px;">Chọn Phiên Bản:</label>
                                                                        <select id="version-select" name="version" class="form-select" style="display:block;">
                                                <option value="">Chọn phiên bản</option>
                                            </select>

                                                                        <script>
                                                                            const osData = {
                                                                                "amalinux": {
                                                                                    "text": "AlmaLinux",
                                                                                    "versions": [{
                                                                                        "id": "123",
                                                                                        "version": "9.0-x86_64"
                                                                                    }, {
                                                                                        "id": "1",
                                                                                        "version": "8.9-x86_64"
                                                                                    }]
                                                                                },
                                                                                "ubuntu": {
                                                                                    "text": "Ubuntu",
                                                                                    "versions": [{
                                                                                        "id": "4",
                                                                                        "version": "18.04-x86_64"
                                                                                    }, {
                                                                                        "id": "5",
                                                                                        "version": "20.04-x86_64"
                                                                                    }, {
                                                                                        "id": "121",
                                                                                        "version": "22.04-86x64-news"
                                                                                    }]
                                                                                },
                                                                                "centos": {
                                                                                    "text": "CentOS",
                                                                                    "versions": [{
                                                                                        "id": "3",
                                                                                        "version": "8-x86_64"
                                                                                    }, {
                                                                                        "id": "2",
                                                                                        "version": "7.9-x86_64"
                                                                                    }]
                                                                                },
                                                                                "rocky": {
                                                                                    "text": "Rocky",
                                                                                    "versions": [{
                                                                                        "id": "550",
                                                                                        "version": "9.1-x86_64"
                                                                                    }, {
                                                                                        "id": "551",
                                                                                        "version": "9.3-x86_64"
                                                                                    }]
                                                                                },
                                                                                "windows": {
                                                                                    "text": "Windows",
                                                                                    "versions": [{
                                                                                        "id": "535",
                                                                                        "version": "2022-scsi-virtio"
                                                                                    }, {
                                                                                        "id": "7",
                                                                                        "version": "2012r2"
                                                                                    }, {
                                                                                        "id": "10",
                                                                                        "version": "2019"
                                                                                    }, {
                                                                                        "id": "535",
                                                                                        "version": "2022-scsi-virtio"
                                                                                    }, {
                                                                                        "id": "8",
                                                                                        "version": "2012r2-hieu"
                                                                                    }]
                                                                                },
                                                                                "debian": {
                                                                                    "text": "Debian",
                                                                                    "versions": [{
                                                                                        "id": "952",
                                                                                        "version": "11-x86_64bit"
                                                                                    }]
                                                                                }
                                                                            };
                                                                        </script>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mt-3">
                                                                        <b> Tùy Chọn Mua Thêm </b>

                                                                        <div class="mb-4">
                                                                            <label for="cpuRange" class="form-label">CPU Cores: <span id="cpuValue" class="slider-value">0</span></label>
                                                                            <input type="range" class="form-range" id="cpuRange" min="0" max="128" value="0" oninput="updateValue('cpuValue', this.value)">
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <label for="ramRange" class="form-label">RAM (GB): <span id="ramValue" class="slider-value">0</span></label>
                                                                            <input type="range" class="form-range" id="ramRange" min="0" max="500" value="0" step="1" oninput="updateValue('ramValue', this.value)">
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <label for="diskRange" class="form-label">Disk Space (GB): <span id="diskValue" class="slider-value">0</span></label>
                                                                            <input type="range" class="form-range" id="diskRange" min="0" max="10000" value="0" step="10" oninput="updateValue('diskValue', this.value)">
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <label for="diskRange" class="form-label">IP: <span id="ipValue" class="slider-value">0</span></label>
                                                                            <input type="range" class="form-range" id="ipRange" min="0" max="1000" value="0" step="1" oninput="updateValue('ipValue', this.value)">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <input type="hidden" id="id" value="1">
                                                            <input type="hidden" id="cpu_price" value="1666">
                                                            <input type="hidden" id="ram_price" value="1083">
                                                            <input type="hidden" id="disk_price" value="66">
                                                            <input type="hidden" id="ip_price" value="3000">
                                                            <input type="hidden" id="duration_mount" value="0">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-4">
                                                    <div class="card title-line">
                                                        <div class="card-header card-no-border">
                                                            <h2>Thông Tin Dịch Vụ</h2>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive custom-scrollbar">
                                                                <table class="col-12">
                                                                    <tfoot>
                                                                        <tr>
                                                                            <td> VPS VN Pro 1:</td>
                                                                            <td colspan="2" class="txt-primary"><span id="price_duration"> 70,000đ </span></td>
                                                                        </tr>

                                                                        <tr id="cpu_more" hidden>
                                                                            <td> CPU Cores (Mua Thêm):</td>
                                                                            <td colspan="2"><span id="price_cpus">0</span>đ</td>
                                                                        </tr>

                                                                        <tr id="ram_more" hidden>
                                                                            <td> Ram (Mua Thêm):</td>
                                                                            <td colspan="2"><span id="price_rams">0</span>đ</td>
                                                                        </tr>

                                                                        <tr id="disk_more" hidden>
                                                                            <td> Disk (Mua Thêm):</td>
                                                                            <td colspan="2"><span id="price_disks">0</span>đ</td>
                                                                        </tr>

                                                                        <tr id="ip_more" hidden>
                                                                            <td> IP (Mua Thêm):</td>
                                                                            <td colspan="2"><span id="price_ips">0</span>đ</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td> Chu Kỳ Đăng Ký :</td>
                                                                            <td colspan="2"><span id="text_duration"> Tháng </span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Khuyến Mãi:</td>
                                                                            <td colspan="2" id="discount-show"> Không </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Tổng Thanh Toán (VND) :</td>
                                                                            <td colspan="2" id="amount-total">0</td>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>

                                                            <div class="col-md-12 mt-3">
                                                                <div class="input-group">
                                                                    <input class="form-control me-2" type="text" id="discount" placeholder="Mã Khuyến Mãi (Nếu Có)"><button onclick="appyDiscount('btnApply', 'Áp Dụng', '1');" class="btn btn-dark" id="btnApply"> Áp Dụng </button>
                                                                </div>
                                                            </div>

                                                            <div class="form-group mt-3">
                                                                <div class="checkbox p-0">
                                                                    <input id="dieuKhoan" type="checkbox" checked>
                                                                    <label class="text-muted" for="dieuKhoan"> Đồng Ý Với </label> <a href="/dieu-khoan" class="txt-primary"> Điều Khoản Sử Dụng Dịch Vụ </a>
                                                                </div>

                                                                <button class="btn btn-primary mt-2" onclick="ThanhToan('payment', `<i class='fa fa-shopping-cart me-1'></i> Thanh Toán`);" id="payment"><i class="fa fa-shopping-cart me-1"></i> Thanh Toán </span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        var price_nify = {
                            '1day': '3000',
                            '15day': '40000',
                            '1month': '70000',
                            '3month': '199500',
                            '6month': '378000',
                            '1year': '714000',
                            '2year': '1344000',
                            '3year': '1890000'
                        };
                    </script>
                    <script src="/static/payment-vps.php?v=146410244"></script>
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
        <script src="/assets/static/invoices.js?v=1731938241" defer></script>
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
