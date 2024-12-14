<div>

    <head>
        <title>Thông Tin Tài Khoản - HG DIGITAL</title>



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
                           @livewire('page.profile.form')
                        </div>
                    </div>


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

    </body>
</div>
