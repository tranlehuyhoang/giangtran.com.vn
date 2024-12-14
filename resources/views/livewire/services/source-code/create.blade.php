<div>


    <head>
        <title>Kho Mã Nguồn - HG DIGITAL</title>
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
                @livewire('inc.header', ['title' => 'Kho Mã Nguồn', 'description' => 'Kho mã nguồn của chúng tôi'])

                <div class="page-body-wrapper">


                  @livewire('inc.sidebar-wrapper')
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
                                                                        href="/mua-ma-nguon/14" wire:navigate><i
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
                                                            href="/source-code/list/12" wire:navigate>
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
                                                                    href="/source-code/list/12" wire:navigate> <i
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
    </body>
</div>
