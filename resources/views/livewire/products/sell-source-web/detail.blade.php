<div>
    <div>
        <div>

            <head>
                <title>Mã nguồn Chi tiết</title>
            </head>

            <body>
                <!-- loader ends-->
                <!-- tap on top starts-->
                <div class="tap-top"><i data-feather="chevrons-up"></i></div>
                <!-- tap on tap ends-->
                <!-- page-wrapper Start-->
                <div class="page-wrapper compact-wrapper" id="pageWrapper">
                    @livewire('inc.header')

                    <!-- Page Body Start-->
                    <div class="page-body-wrapper">
                        <!-- Page Sidebar Start-->
                        @livewire('inc.sidebar')
                        <!-- Page Sidebar Ends-->
                        <div class="page-body"> 
                            
                        
                        </div>

                        <!-- footer start-->
                        @livewire('inc.footer')
                    </div>
                    <style>
                        .animated-ribbon .box {
                            top: -3rem;
                        }
                    </style>
                </div>

        </div>
    </div>
</div>