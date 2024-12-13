<div>

    <head>
        <title> Rút Tiền | HGDIGITAL.VN </title>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="/assets/static/style.css?v=910055670">
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/css/toast@1.0.1/fuiToast.min.css">
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/js/toast@1.0.1/fuiToast.min.js">
        </script>
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

                    <div class="page-body">
                        <div class="container-fluid default-dashboard">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card title-line">
                                        <div class="card-header card-no-border">
                                            <h2> Rút Số Dư Hoa Hồng </h2>
                                            <span class="f-w-500 f-12 f-light mt-0"> Phí Rút <span
                                                    class="txt-primary">10%</span></span>
                                        </div>
                                        <div class="card-body pt-0">

                                            <div class="row">

                                                <div class="col-md-6 col-6">
                                                    <div class="form-group mt-3">
                                                        <label> Ngân Hàng </label>
                                                        <select class="form-select" id="bankName">
                                                            <option value="THESIEURE.COM"> Ví THESIEURE.COM </option>
                                                            <option value="DOITHE1S.VN"> Ví DOITHE1S.VN </option>
                                                            <option value="DOITHECAO.VN"> Ví DOITHECAO.VN </option>
                                                            <option value="DOITHE.VN"> Ví DOITHE.VN </option>
                                                            <option value="MBBANK">Ngân hàng MB Bank </option>
                                                            <option value="MOMO">Ví điện tử MOMO</option>
                                                            <option value="Zalo Pay">Ví điện tử Zalo Pay</option>
                                                            <option value="ICB">Ngân hàng TMCP Công thương Việt Nam
                                                            </option>
                                                            <option value="VCB">Ngân hàng TMCP Ngoại Thương Việt Nam
                                                            </option>
                                                            <option value="BIDV">Ngân hàng TMCP Đầu tư và Phát triển
                                                                Việt Nam</option>
                                                            <option value="VBA">Ngân hàng Nông nghiệp và Phát triển Nông
                                                                thôn Việt Nam</option>
                                                            <option value="OCB">Ngân hàng TMCP Phương Đông</option>
                                                            <option value="TCB">Ngân hàng TMCP Kỹ thương Việt Nam
                                                            </option>
                                                            <option value="ACB">Ngân hàng TMCP Á Châu</option>
                                                            <option value="VPB">Ngân hàng TMCP Việt Nam Thịnh Vượng
                                                            </option>
                                                            <option value="TPB">Ngân hàng TMCP Tiên Phong</option>
                                                            <option value="STB">Ngân hàng TMCP Sài Gòn Thương Tín
                                                            </option>
                                                            <option value="HDB">Ngân hàng TMCP Phát triển Thành phố Hồ
                                                                Chí Minh</option>
                                                            <option value="VCCB">Ngân hàng TMCP Bản Việt</option>
                                                            <option value="SCB">Ngân hàng TMCP Sài Gòn</option>
                                                            <option value="VIB">Ngân hàng TMCP Quốc tế Việt Nam
                                                            </option>
                                                            <option value="SHB">Ngân hàng TMCP Sài Gòn - Hà Nội</option>
                                                            <option value="EIB">Ngân hàng TMCP Xuất Nhập khẩu Việt Nam
                                                            </option>
                                                            <option value="MSB">Ngân hàng TMCP Hàng Hải</option>
                                                            <option value="CAKE">TMCP Việt Nam Thịnh Vượng - Ngân hàng
                                                                số CAKE by VPBank</option>
                                                            <option value="Ubank">TMCP Việt Nam Thịnh Vượng - Ngân hàng
                                                                số Ubank by VPBank</option>
                                                            <option value="TIMO">Ngân hàng số Timo by Ban Viet Bank
                                                                (Timo by Ban Viet Bank)</option>
                                                            <option value="VTLMONEY">Tổng Công ty Dịch vụ số Viettel -
                                                                Chi nhánh tập đoàn công nghiệp viễn thông Quân Đội
                                                            </option>
                                                            <option value="VNPTMONEY">VNPT Money</option>
                                                            <option value="SGICB">Ngân hàng TMCP Sài Gòn Công Thương
                                                            </option>
                                                            <option value="BAB">Ngân hàng TMCP Bắc Á</option>
                                                            <option value="PVCB">Ngân hàng TMCP Đại Chúng Việt Nam
                                                            </option>
                                                            <option value="Oceanbank">Ngân hàng Thương mại TNHH MTV Đại
                                                                Dương</option>
                                                            <option value="NCB">Ngân hàng TMCP Quốc Dân</option>
                                                            <option value="SHBVN">Ngân hàng TNHH MTV Shinhan Việt Nam
                                                            </option>
                                                            <option value="ABB">Ngân hàng TMCP An Bình</option>
                                                            <option value="VAB">Ngân hàng TMCP Việt Á</option>
                                                            <option value="NAB">Ngân hàng TMCP Nam Á</option>
                                                            <option value="PGB">Ngân hàng TMCP Xăng dầu Petrolimex
                                                            </option>
                                                            <option value="VIETBANK">Ngân hàng TMCP Việt Nam Thương Tín
                                                            </option>
                                                            <option value="BVB">Ngân hàng TMCP Bảo Việt</option>
                                                            <option value="SEAB">Ngân hàng TMCP Đông Nam Á</option>
                                                            <option value="COOPBANK">Ngân hàng Hợp tác xã Việt Nam
                                                            </option>
                                                            <option value="LPB">Ngân hàng TMCP Bưu Điện Liên Việt
                                                            </option>
                                                            <option value="KLB">Ngân hàng TMCP Kiên Long</option>
                                                            <option value="KBank">Ngân hàng Đại chúng TNHH Kasikornbank
                                                            </option>
                                                            <option value="KBHN">Ngân hàng Kookmin - Chi nhánh Hà Nội
                                                            </option>
                                                            <option value="KEBHANAHCM">Ngân hàng KEB Hana – Chi nhánh
                                                                Thành phố Hồ Chí Minh</option>
                                                            <option value="KEBHANAHN">Ngân hàng KEB Hana – Chi nhánh Hà
                                                                Nội</option>
                                                            <option value="MAFC">Công ty Tài chính TNHH MTV Mirae Asset
                                                                (Việt Nam) </option>
                                                            <option value="CITIBANK">Ngân hàng Citibank, N.A. - Chi
                                                                nhánh Hà Nội</option>
                                                            <option value="KBHCM">Ngân hàng Kookmin - Chi nhánh Thành
                                                                phố Hồ Chí Minh</option>
                                                            <option value="VBSP">Ngân hàng Chính sách Xã hội</option>
                                                            <option value="WVN">Ngân hàng TNHH MTV Woori Việt Nam
                                                            </option>
                                                            <option value="VRB">Ngân hàng Liên doanh Việt - Nga</option>
                                                            <option value="UOB">Ngân hàng United Overseas - Chi nhánh
                                                                TP. Hồ Chí Minh</option>
                                                            <option value="SCVN">Ngân hàng TNHH MTV Standard Chartered
                                                                Bank Việt Nam</option>
                                                            <option value="PBVN">Ngân hàng TNHH MTV Public Việt Nam
                                                            </option>
                                                            <option value="NHB HN">Ngân hàng Nonghyup - Chi nhánh Hà Nội
                                                            </option>
                                                            <option value="IVB">Ngân hàng TNHH Indovina</option>
                                                            <option value="IBK - HCM">Ngân hàng Công nghiệp Hàn Quốc
                                                                - Chi nhánh TP. Hồ Chí Minh</option>
                                                            <option value="IBK - HN">Ngân hàng Công nghiệp Hàn Quốc
                                                                - Chi nhánh Hà Nội</option>
                                                            <option value="HSBC">Ngân hàng TNHH MTV HSBC (Việt Nam)
                                                            </option>
                                                            <option value="HLBVN">Ngân hàng TNHH MTV Hong Leong Việt Nam
                                                            </option>
                                                            <option value="GPB">Ngân hàng Thương mại TNHH MTV Dầu Khí
                                                                Toàn Cầu</option>
                                                            <option value="DOB">Ngân hàng TMCP Đông Á</option>
                                                            <option value="DBS">DBS Bank Ltd - Chi nhánh Thành phố Hồ
                                                                Chí Minh</option>
                                                            <option value="CIMB">Ngân hàng TNHH MTV CIMB Việt Nam
                                                            </option>
                                                            <option value="CBB">Ngân hàng Thương mại TNHH MTV Xây dựng
                                                                Việt Nam</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-6">
                                                    <div class="form-group mt-3">
                                                        <label> Số Tài Khoản </label>
                                                        <input class="form-control" id="numberBank"
                                                            placeholder="Số Tài Khoản">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-6">
                                                    <div class="form-group mt-3">
                                                        <label> Chủ Tài Khoản </label>
                                                        <input class="form-control" id="ownerBank"
                                                            placeholder="Chủ Tài Khoản">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-6">
                                                    <div class="form-group mt-3">
                                                        <label> Số Tiền Cần Rút </label>
                                                        <input class="form-control" id="fee" value="10" type="hidden">
                                                        <input class="form-control" id="amount" type="number"
                                                            onchange="checkPrice()" value="300000"
                                                            placeholder="Tối Thiểu: 300,000đ, Tối Đa: 1,000,000đ">
                                                    </div>
                                                </div>

                                                <div class="mt-2"> Số Tiền Được Tính: <b id="totalReal">0đ</b> <sup>(Đã
                                                        Tính 10% Phí)</sup></div>
                                                <div class="mt-3">
                                                    <button class="btn btn-dark btn-sm"
                                                        onclick="Withdraw('btn-widthraw', `Rút Tiền <i class='icofont icofont-pay'></i>`);"
                                                        id="btn-widthraw">Rút Tiền <i
                                                            class="icofont icofont-pay"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 box-col-6">
                                    <div class="card title-line">
                                        <div class="card-header card-no-border transaction-header">
                                            <div class="header-top">
                                                <h2> Thống Kê </span>
                                                </h2>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0 transaction-list">
                                            <span> Số Dư Hoa Hồng: </span><br>
                                            <b class="txt-danger" style="font-size: 16px;"> 0<sup>đ</sup> </b>

                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <div class="card card-body bg-dark">
                                                        <span> Lượt Truy Cập: </span>
                                                        <b class="txt-primary" style="font-size: 16px;"> 1 </b>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="card card-body bg-dark">
                                                        <span> Tổng Hoa Hồng Đã Nhận: </span>
                                                        <b class="txt-primary" style="font-size: 16px;"> 0<sup>đ</sup>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="card title-line">
                                        <div class="card-header">
                                            <h2 class="card-title mb-0"> Lịch Sử Rút Tiền </h2>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-sm-12">
                                                <div class="table-responsive custom-scrollbar">
                                                    <table class="display" id="basic-1">
                                                        <thead>
                                                            <tr>
                                                                <th> Mã Giao Dịch </th>
                                                                <th> Số Tiền </th>
                                                                <th> Ngân Hàng </th>
                                                                <th> Thời Gian </th>
                                                                <th> Trạng Thái </th>
                                                                <th> Lí Do </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="data-table">
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <script src="/static/withdraw.js?v=1369895355"></script>
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
        <script src="/assets/static/invoices.js?v=1731410758" defer></script>
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
