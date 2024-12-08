<div>

    <head>
        @livewire('inc.seo', ['title' => 'Tạo Đơn Tăng Tương Tác'])
        @assets
            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
            <link rel="stylesheet" href="/assets/static/style.css?v=1060321659">
            <link rel="stylesheet" type="text/css"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css"
                href="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/css/toast@1.0.1/fuiToast.min.css">
            <script type="text/javascript"
                src="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/js/toast@1.0.1/fuiToast.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
            <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
            <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <style>
                li {
                    padding-top: 5px;
                }
            </style>
            <style>
                table tfoot tr {
                    padding-bottom: 6px;
                }

                table tfoot tr td {
                    padding-bottom: 6px;
                }
            </style>
        @endassets
    </head>

    <body id="content">
        <div class="loader-wrapper" style="z-index: 999999;">
            <div class="boxes"></div>
        </div>
        <div>
            <div class="tap-top"><i data-feather="chevrons-up"></i></div>

            <div class="page-wrapper compact-wrapper" id="pageWrapper">
                @livewire('inc.header', ['title' => 'Tạo Đơn Tăng Tương Tác', 'description' => 'Tạo đơn tăng tương tác cho dịch vụ của bạn'])

                <div class="page-body-wrapper">


                    @livewire('inc.sidebar-wrapper')


                    <div class="page-body">
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="">
                                        @livewire('services.smm.components.form')
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js"></script>
        <script src="/assets/static/simplebar.js"></script>
        <script src="/assets/static/invoices.js?v=1731410540" defer></script>
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
