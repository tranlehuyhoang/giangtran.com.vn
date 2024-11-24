<div>
    
    <head>
        <title> Nify.vn - Hệ Thống Cung Cấp Hosting, Tên Miền Giá Rẻ Tại Việt Nam </title>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="/assets/static/style.css?v=1060321659">
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
    
                                                        <div class="card-body">
    
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
    
    
    
                                                            <div class="form-group">
                                                                <label> Tên Miền Chính </label>
                                                                <input type="hidden" id="cycle_max" value="12">
                                                                <input class="form-control" id="domain" placeholder="Tên Miền Chính">
                                                            </div>
    
    
                                                            <div class="form-group mt-3">
                                                                <label> Email Đăng Ký </label>
    
                                                                <input class="form-control" id="email" placeholder="Email Nhận Thông Báo Về Dịch Vụ!" value="2509roblox@gmail.com">
                                                            </div>
    
                                                            <div class="form-group mt-3">
                                                                <label> Chu Kỳ (Tháng) </label>
    
                                                                <div class="touchspin-wrapper">
                                                                    <button class="decrement-touchspin btn-touchspin touchspin-dark" onclick="Cong();"><i class="fa fa-minus"></i></button>
                                                                    <input class="input-touchspin spin-outline-dark" id="chuky" type="number" value="2" onchange="checkPrice();">
                                                                    <button class="increment-touchspin btn-touchspin touchspin-dark" onclick="Tru();"><i class="fa fa-plus"></i></button>
                                                                </div>
                                                            </div>
    
    
                                                            <input type="hidden" id="price" value="6000">
    
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
    
    
                                                <div class="col-md-4">
                                                    <div class="card title-line">
                                                        <div class="card-header card-no-border">
                                                            <h2> Thông Tin Dịch Vụ </h2>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive custom-scrollbar">
                                                                <table class="col-12">
    
                                                                    <tfoot>
                                                                        <tr>
                                                                            <td> Dịch Vụ:</td>
                                                                            <td colspan="2" class="txt-primary"> VIETNAM #STARTUP </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Chu Kỳ Đăng Ký :</td>
                                                                            <td colspan="2" id="chuky-show">0 Tháng</td>
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
                                                                    <input class="form-control me-2" type="text" id="discount" placeholder="Mã Khuyến Mãi (Nếu Có)"><button onclick="appyDiscount('btnApply', 'Áp Dụng', 'startup');" class="btn btn-primary" id="btnApply"> Áp Dụng </button>
                                                                </div>
                                                            </div>
    
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" id="id" value="19">
                                                <input type="hidden" id="idPresent" value="">
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <script src="/static/payment-hosting.js"></script>
                 @livewire('inc.footer')
                </div>
            </div>
        </div>
    
    
        <input type="hidden" id="mn" value="0">
    
         
    
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
        <script src="/assets/static/invoices.js?v=1731410540" defer></script>
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
