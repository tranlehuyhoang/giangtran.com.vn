<div>
    <div>
        <div>
            <head>
                <link
                    href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
                    rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="/mofi/assets/css/font-awesome.css">
                <!-- ico-font-->
                <link rel="stylesheet" type="text/css" href="/mofi/assets/css/vendors/icofont.css">
                <!-- Themify icon-->
                <link rel="stylesheet" type="text/css" href="/mofi/assets/css/vendors/themify.css">
                <!-- Flag icon-->
                <link rel="stylesheet" type="text/css" href="/mofi/assets/css/vendors/flag-icon.css">
                <!-- Feather icon-->
                <link rel="stylesheet" type="text/css" href="/mofi/assets/css/vendors/feather-icon.css">
                <!-- Plugins css start-->
                <link rel="stylesheet" type="text/css" href="/mofi/assets/css/vendors/slick.css">
                <link rel="stylesheet" type="text/css" href="/mofi/assets/css/vendors/slick-theme.css">
                <link rel="stylesheet" type="text/css" href="/mofi/assets/css/vendors/scrollbar.css">
                <link rel="stylesheet" type="text/css" href="/mofi/assets/css/vendors/animate.css">
                <!-- Plugins css Ends-->
                <!-- Bootstrap css-->
                <link rel="stylesheet" type="text/css" href="/mofi/assets/css/vendors/bootstrap.css">
                <!-- App css-->
                <link rel="stylesheet" type="text/css" href="/mofi/assets/css/style.css">
                <link id="color" rel="stylesheet" href="/mofi/assets/css/color-1.css" media="screen">
                <!-- Responsive css-->
                <link rel="stylesheet" type="text/css" href="/mofi/assets/css/responsive.css">
            </head>
            
            <body>
                <div class="loader-wrapper" wire:navigating>
                    <div class="loader loader-1">
                        <div class="loader-outter"></div>
                        <div class="loader-inner"></div>
                        <div class="loader-inner-1"></div>
                    </div>
                </div>
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
                            <!-- Container-fluid starts-->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Sample Card</h4>
                                                <p class="f-m-light mt-1">Here you can enter a sub-title for your card.</p>
                                            </div>
                                            <div class="card-body">
                                                <p><strong>Web Design Trends: </strong> Stay up-to-date with the latest trends in
                                                    web design, such as the use of animations, micro-interactions, dark mode, and
                                                    unique navigation techniques.Keep your website's navigation simple and
                                                    intuitive, allowing users to find what they need easily without overwhelming
                                                    them with options.</p>
                                                <p><strong>Design Tools: </strong> Information on popular design software like Adobe
                                                    Photoshop, Sketch, Figma, or Adobe XD, along with tips and tricks for efficient
                                                    workflow and collaboration.Compress and optimize images to improve website
                                                    loading speed and overall performance, providing a better user experience.</p>
                                                <p><strong>Front-End Development: </strong> A basic understanding of HTML, CSS, and
                                                    JavaScript can enhance your web design skills, enabling you to create
                                                    interactive and dynamic elements.Ensure sufficient contrast between text and
                                                    background colors to enhance readability and accessibility, especially for users
                                                    with visual impairments.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Container-fluid Ends-->
                        </div>
                  
                        <!-- footer start-->
                        @livewire('inc.footer')
                      </div>
                </div>
                <!-- latest jquery-->
                <script src="/mofi/assets/js/jquery.min.js"></script>
                <!-- Bootstrap js-->
                <script src="/mofi/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
                <!-- feather icon js-->
                <script src="/mofi/assets/js/icons/feather-icon/feather.min.js"></script>
                <script src="/mofi/assets/js/icons/feather-icon/feather-icon.js"></script>
                <!-- scrollbar js-->
                <script src="/mofi/assets/js/scrollbar/simplebar.js"></script>
                <script src="/mofi/assets/js/scrollbar/custom.js"></script>
                <!-- Sidebar jquery-->
                <script src="/mofi/assets/js/config.js"></script>
                <!-- Plugins JS start-->
                <script src="/mofi/assets/js/sidebar-menu.js"></script>
                <script src="/mofi/assets/js/sidebar-pin.js"></script>
                <script src="/mofi/assets/js/slick/slick.min.js"></script>
                <script src="/mofi/assets/js/slick/slick.js"></script>
                <script src="/mofi/assets/js/header-slick.js"></script>
                <!-- calendar js-->
                <!-- Plugins JS Ends-->
                <!-- Theme js-->
                <script src="/mofi/assets/js/script.js"></script>
                <script src="/mofi/assets/js/script1.js"></script>
                <script src="/mofi/assets/js/theme-customizer/customizer.js"></script>
                <!-- Plugin used-->
            </body>
            <script>
                setTimeout(function() {
                    $(".loader-wrapper").fadeOut(1, function() {
                        $(this).remove();
                    });
                }, 3000); // Giữ nguyên trong 3 giây trước khi bắt đầu làm mờ
                    new WOW().init();
                  </script>
        </div>
    </div>
</div>