<div>


    <head>
        @livewire('inc.seo', ['title' => 'Kho Mã Nguồn'])


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
                @livewire('inc.header', ['title' => 'Kho Mã Nguồn', 'description' => 'Kho mã nguồn của chúng tôi'])

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
                                                            onclick="window.open('/source-code/list/12');">
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
                                                                    onclick="window.open('/source-code/list/12');"> <i
                                                                        class="icofont icofont-cart"></i> Mua Ngay
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   </div>
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
