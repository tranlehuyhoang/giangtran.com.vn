<div>


    <head>
        <title> Kho Mã Nguồn | HGDIGITAL.VN </title>


        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="/assets/static/style.css?v=1051537268">
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
                    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/owlcarousel.css">
                    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/range-slider.css">
                    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/slick.css">
                    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/slick-theme.css">
                    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/select2.css">

                    <div class="page-body">
                        <div class="container-fluid product-wrapper">
                            <div class="product-grid">
                                <div class="feature-products">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="" method="GET" id="searchFrom">
                                                <div class="form-group m-0">
                                                    <input class="form-control" type="search" name="keyword"
                                                        placeholder="Tìm Kiếm VD: Bán code, Bán hosting" value=""
                                                        data-original-title="" title=""><i style="cursor: pointer;"
                                                        onclick="searchKeyword();" class="fa fa-search"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-wrapper-grid mt-3" style="opacity: 1;">
                                    <div class="row">


                                        <div class="col-xl-3 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="product-img">
                                                        <img class="img-fluid" src="https://i.imgur.com/KjfifJq.jpeg"
                                                            alt="">
                                                        <div class="product-hover">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn" type="button"
                                                                        onclick="loadto('/mua-ma-nguon/14);"><i
                                                                            class="icon-shopping-cart"></i></button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn" onclick="window.open('/');"
                                                                        type="button"><i class="icon-eye"></i></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="product-details">
                                                        <a style="cursor: pointer;"
                                                            onclick="loadto('/mua-ma-nguon/14');">
                                                            <h5
                                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                                Mã Nguồn Smm Panel Siêu Xịn </h5>
                                                        </a>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-eye-alt"></i> Lượt xem: 77
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-history"></i> Lượt mua: 35
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-primary text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;">
                                                                    <i class="icofont icofont-wallet"></i> 0đ </span>
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-dark text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;"
                                                                    onclick="loadto('/mua-ma-nguon/14');"> <i
                                                                        class="icofont icofont-cart"></i> Mua Ngay
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="product-img">
                                                        <img class="img-fluid" src="https://i.imgur.com/NuQUxLH.png"
                                                            alt="">
                                                        <div class="product-hover">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn" type="button"
                                                                        onclick="loadto('/mua-ma-nguon/13);"><i
                                                                            class="icon-shopping-cart"></i></button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn" onclick="window.open('#');"
                                                                        type="button"><i class="icon-eye"></i></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="product-details">
                                                        <a style="cursor: pointer;"
                                                            onclick="loadto('/mua-ma-nguon/13');">
                                                            <h5
                                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                                Mã Nguồn thuê tạo logo website bản mới </h5>
                                                        </a>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-eye-alt"></i> Lượt xem: 43
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-history"></i> Lượt mua: 8
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-primary text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;">
                                                                    <i class="icofont icofont-wallet"></i> đ </span>
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-dark text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;"
                                                                    onclick="loadto('/mua-ma-nguon/13');"> <i
                                                                        class="icofont icofont-cart"></i> Mua Ngay
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="product-img">
                                                        <img class="img-fluid" src="https://i.imgur.com/ZGqh6i9.png"
                                                            alt="">
                                                        <div class="product-hover">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn" type="button"
                                                                        onclick="loadto('/mua-ma-nguon/12);"><i
                                                                            class="icon-shopping-cart"></i></button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn" onclick="window.open('#');"
                                                                        type="button"><i class="icon-eye"></i></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="product-details">
                                                        <a style="cursor: pointer;"
                                                            onclick="loadto('/mua-ma-nguon/12');">
                                                            <h5
                                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                                Chia Sẻ Mã Nguồn Bán Code Có Nạp Thẻ Cào Và Nạp Momo Tự
                                                                Động </h5>
                                                        </a>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-eye-alt"></i> Lượt xem: 229
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-history"></i> Lượt mua: 209
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-primary text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;">
                                                                    <i class="icofont icofont-wallet"></i> 0đ </span>
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-dark text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;"
                                                                    onclick="loadto('/mua-ma-nguon/12');"> <i
                                                                        class="icofont icofont-cart"></i> Mua Ngay
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="product-img">
                                                        <img class="img-fluid"
                                                            src="https://img.upanh.tv/2024/10/12/NK6Cnp2.jpg" alt="">
                                                        <div class="product-hover">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn" type="button"
                                                                        onclick="loadto('/mua-ma-nguon/11);"><i
                                                                            class="icon-shopping-cart"></i></button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn"
                                                                        onclick="window.open('https://img.upanh.tv/2024/10/12/NK6Cnp2.jpg');"
                                                                        type="button"><i class="icon-eye"></i></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="product-details">
                                                        <a style="cursor: pointer;"
                                                            onclick="loadto('/mua-ma-nguon/11');">
                                                            <h5
                                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                                Code Fake Bill , CCCD, Hộ Chiếu Giá 4M6 (Code Xịn Trong
                                                                Mắt Các Bé Chứ Thật Ra Như Cái ...) </h5>
                                                        </a>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-eye-alt"></i> Lượt xem: 502
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-history"></i> Lượt mua: 124
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-primary text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;">
                                                                    <i class="icofont icofont-wallet"></i> 0đ </span>
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-dark text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;"
                                                                    onclick="loadto('/mua-ma-nguon/11');"> <i
                                                                        class="icofont icofont-cart"></i> Mua Ngay
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="product-img">
                                                        <img class="img-fluid"
                                                            src="https://i.ibb.co/NjjpnXv/z5778262443641-4bbaf8911d3c13e9a51212d7f6665068.jpg"
                                                            alt="">
                                                        <div class="product-hover">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn" type="button"
                                                                        onclick="loadto('/mua-ma-nguon/10);"><i
                                                                            class="icon-shopping-cart"></i></button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn"
                                                                        onclick="window.open('https://i.ibb.co/NjjpnXv/z5778262443641-4bbaf8911d3c13e9a51212d7f6665068.jpg');"
                                                                        type="button"><i class="icon-eye"></i></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="product-details">
                                                        <a style="cursor: pointer;"
                                                            onclick="loadto('/mua-ma-nguon/10');">
                                                            <h5
                                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                                Mã Nguồn Frofile Full Hiệu Ứng Siêu Đẹp </h5>
                                                        </a>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-eye-alt"></i> Lượt xem: 2,897
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-history"></i> Lượt mua: 16
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-primary text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;">
                                                                    <i class="icofont icofont-wallet"></i> 50,000đ
                                                                </span>
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-dark text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;"
                                                                    onclick="loadto('/mua-ma-nguon/10');"> <i
                                                                        class="icofont icofont-cart"></i> Mua Ngay
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="product-img">
                                                        <img class="img-fluid" src="https://i.imgur.com/SMIOMtd.jpeg"
                                                            alt="">
                                                        <div class="product-hover">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn" type="button"
                                                                        onclick="loadto('/mua-ma-nguon/9);"><i
                                                                            class="icon-shopping-cart"></i></button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn" onclick="window.open('#');"
                                                                        type="button"><i class="icon-eye"></i></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="product-details">
                                                        <a style="cursor: pointer;"
                                                            onclick="loadto('/mua-ma-nguon/9');">
                                                            <h5
                                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                                Code Shop Bán Nick, Bán Regedit, File, ... Nạp Tiền Tự
                                                                Động </h5>
                                                        </a>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-eye-alt"></i> Lượt xem: 208
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-history"></i> Lượt mua: 1
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-primary text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;">
                                                                    <i class="icofont icofont-wallet"></i> 200,000đ
                                                                </span>
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-dark text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;"
                                                                    onclick="loadto('/mua-ma-nguon/9');"> <i
                                                                        class="icofont icofont-cart"></i> Mua Ngay
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="product-img">
                                                        <img class="img-fluid"
                                                            src="https://sv1.anhsieuviet.com/2024/08/28/14629b47d318a988dea9ebb30168407c.png"
                                                            alt="">
                                                        <div class="product-hover">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn" type="button"
                                                                        onclick="loadto('/mua-ma-nguon/8);"><i
                                                                            class="icon-shopping-cart"></i></button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn"
                                                                        onclick="window.open('https://creeptop.site/');"
                                                                        type="button"><i class="icon-eye"></i></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="product-details">
                                                        <a style="cursor: pointer;"
                                                            onclick="loadto('/mua-ma-nguon/8');">
                                                            <h5
                                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                                Mã Nguồn Bán Hosting, Reseller, Tên Miền API Cyberlux.vn
                                                                (Gốc) </h5>
                                                        </a>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-eye-alt"></i> Lượt xem: 91
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-history"></i> Lượt mua: 1
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-primary text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;">
                                                                    <i class="icofont icofont-wallet"></i> 99,000đ
                                                                </span>
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-dark text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;"
                                                                    onclick="loadto('/mua-ma-nguon/8');"> <i
                                                                        class="icofont icofont-cart"></i> Mua Ngay
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="product-img">
                                                        <img class="img-fluid" src="https://i.imgur.com/n7g2Oru.png"
                                                            alt="">
                                                        <div class="product-hover">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn" type="button"
                                                                        onclick="loadto('/mua-ma-nguon/7);"><i
                                                                            class="icon-shopping-cart"></i></button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn" onclick="window.open('');"
                                                                        type="button"><i class="icon-eye"></i></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="product-details">
                                                        <a style="cursor: pointer;"
                                                            onclick="loadto('/mua-ma-nguon/7');">
                                                            <h5
                                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                                Mã Nguồn Game Đa Dạng Full game H5 ( TRUNG QUỐC , CÒN
                                                                ZIN ) </h5>
                                                        </a>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-eye-alt"></i> Lượt xem: 23
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-history"></i> Lượt mua: 0
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-primary text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;">
                                                                    <i class="icofont icofont-wallet"></i> 500,000đ
                                                                </span>
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-dark text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;"
                                                                    onclick="loadto('/mua-ma-nguon/7');"> <i
                                                                        class="icofont icofont-cart"></i> Mua Ngay
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="product-img">
                                                        <img class="img-fluid" src="https://i.imgur.com/tWUq27G.png"
                                                            alt="">
                                                        <div class="product-hover">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn" type="button"
                                                                        onclick="loadto('/mua-ma-nguon/6);"><i
                                                                            class="icon-shopping-cart"></i></button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn" onclick="window.open('/');"
                                                                        type="button"><i class="icon-eye"></i></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="product-details">
                                                        <a style="cursor: pointer;"
                                                            onclick="loadto('/mua-ma-nguon/6');">
                                                            <h5
                                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                                Code Bán Mã Nguồn Viết Bằng ReactJs Cao Cấp </h5>
                                                        </a>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-eye-alt"></i> Lượt xem: 2,475
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-history"></i> Lượt mua: 1
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-primary text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;">
                                                                    <i class="icofont icofont-wallet"></i> 250,000đ
                                                                </span>
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-dark text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;"
                                                                    onclick="loadto('/mua-ma-nguon/6');"> <i
                                                                        class="icofont icofont-cart"></i> Mua Ngay
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="product-img">
                                                        <img class="img-fluid" src="https://i.imgur.com/vqR9fO2.png"
                                                            alt="">
                                                        <div class="product-hover">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn" type="button"
                                                                        onclick="loadto('/mua-ma-nguon/5);"><i
                                                                            class="icon-shopping-cart"></i></button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn" onclick="window.open('/');"
                                                                        type="button"><i class="icon-eye"></i></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="product-details">
                                                        <a style="cursor: pointer;"
                                                            onclick="loadto('/mua-ma-nguon/5');">
                                                            <h5
                                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                                Code bán host Cpanel tự động (dailysieure WHM v3) </h5>
                                                        </a>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-eye-alt"></i> Lượt xem: 5,098
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-history"></i> Lượt mua: 3,064
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-primary text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;">
                                                                    <i class="icofont icofont-wallet"></i> 0đ </span>
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-dark text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;"
                                                                    onclick="loadto('/mua-ma-nguon/5');"> <i
                                                                        class="icofont icofont-cart"></i> Mua Ngay
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="product-img">
                                                        <img class="img-fluid" src="https://i.imgur.com/x44RuuS.png"
                                                            alt="">
                                                        <div class="product-hover">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn" type="button"
                                                                        onclick="loadto('/mua-ma-nguon/4);"><i
                                                                            class="icon-shopping-cart"></i></button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn" onclick="window.open('/');"
                                                                        type="button"><i class="icon-eye"></i></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="product-details">
                                                        <a style="cursor: pointer;"
                                                            onclick="loadto('/mua-ma-nguon/4');">
                                                            <h5
                                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                                Code WHMCS 8.6.1 tích hợp nạp tự động ngân hàng tích hợp
                                                                tiếng Việt. </h5>
                                                        </a>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-eye-alt"></i> Lượt xem: 1,106
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-history"></i> Lượt mua: 322
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-primary text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;">
                                                                    <i class="icofont icofont-wallet"></i> 0đ </span>
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-dark text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;"
                                                                    onclick="loadto('/mua-ma-nguon/4');"> <i
                                                                        class="icofont icofont-cart"></i> Mua Ngay
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="product-img">
                                                        <img class="img-fluid" src="https://i.imgur.com/HbwUH5l.png"
                                                            alt="">
                                                        <div class="product-hover">
                                                            <ul>
                                                                <li>
                                                                    <button class="btn" type="button"
                                                                        onclick="loadto('/mua-ma-nguon/3);"><i
                                                                            class="icon-shopping-cart"></i></button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn" onclick="window.open('#');"
                                                                        type="button"><i class="icon-eye"></i></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="product-details">
                                                        <a style="cursor: pointer;"
                                                            onclick="loadto('/mua-ma-nguon/3');">
                                                            <h5
                                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                                Code web cho thuê cronjob ( Nạp Tiền tự Động ) Dùng
                                                                Python </h5>
                                                        </a>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-eye-alt"></i> Lượt xem: 79
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <i class="icofont icofont-history"></i> Lượt mua: 18
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-primary text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;">
                                                                    <i class="icofont icofont-wallet"></i> 0đ </span>
                                                            </div>

                                                            <div class="col-md-6 col-6">
                                                                <span class="badge badge-dark text-white"
                                                                    style="width: 100%; padding: 10px; cursor: pointer;"
                                                                    onclick="loadto('/mua-ma-nguon/3');"> <i
                                                                        class="icofont icofont-cart"></i> Mua Ngay
                                                                </span>
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
                        function searchKeyword(){
            $("#searchFrom").submit();
        }
                    </script>
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
        <script src="/assets/static/invoices.js?v=1731410713" defer></script>
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
