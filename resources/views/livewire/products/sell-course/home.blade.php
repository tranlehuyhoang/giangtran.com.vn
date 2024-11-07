<div>
    <div>
        <div>
            <head>
                
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
                            <!-- Container-fluid starts-->
                     <div class="container-fluid dashboard-4">
                        <div class="col-xl-4 col-md-6 proorder-md-5"> 
                            <div class="card">
                              <div class="card-header card-no-border pb-0">
                                <div class="header-top">
                                  <h4>Live Meeting</h4>
                                  <div class="location-menu dropdown">
                                    <button class="btn dropdown-toggle" id="userdropdown9" type="button" data-bs-toggle="dropdown" aria-expanded="false">1pm-2pm</button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown9"><a class="dropdown-item" href="#">Address Selection</a><a class="dropdown-item" href="#">Geo-Menu</a><a class="dropdown-item" href="#">Place Picker</a></div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-body live-meet">
                                <div class="live-metting">  <img class="img-fluid" src="../assets/images/dashboard-4/metting/teacher.png" alt="">
                                  <div class="star-img"><img class="img-fluid" src="../assets/images/dashboard-4/metting/chart.png" alt=""><img class="img-fluid" src="../assets/images/dashboard-4/metting/message.png" alt=""><img src="../assets/images/dashboard-4/metting/1.png" alt=""><img src="../assets/images/dashboard-4/metting/2.png" alt=""><img src="../assets/images/dashboard-4/metting/3.png" alt=""><img src="../assets/images/dashboard-4/metting/4.png" alt=""><img src="../assets/images/dashboard-4/metting/5.png" alt=""><img src="../assets/images/dashboard-4/metting/6.png" alt=""><img src="../assets/images/dashboard-4/metting/7.png" alt=""><img src="../assets/images/dashboard-4/metting/8.png" alt=""><img src="../assets/images/dashboard-4/metting/9.png" alt=""><img src="../assets/images/dashboard-4/metting/10.png" alt=""></div>
                                </div>
                                <ul>
                                  <li> 
                                    <h5 class="text-truncate"> <span>Class: </span>Technique of Drawing in One Line</h5>
                                  </li>
                                  <li>
                                    <h5 class="text-truncate"> <span>Batch: </span>GDM (2/3) </h5>
                                  </li>
                                  <li><a href="https://support.pixelstrap.com/ " target="_blank">
                                      <h5 class="font-primary text-truncate"> <span>Class Link: </span>https://support.pixelstrap.com/ </h5></a></li>
                                </ul>
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
             
        </div>
    </div>
</div>