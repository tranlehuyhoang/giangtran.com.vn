<div>
    <div>
      <div>
  
        <head>
         
        </head>
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
                <div class="container-fluid">
                  <div class="row">
                
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-header">
                          <h4>Lịch sử mua tài khoản</h4>
                        </div>
                        <div class="table-responsive theme-scrollbar signal-table">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col" >Mã giao dịch	</th>
                                <th scope="col" >Sản phẩm</th>
                                <th scope="col" >Số lượng</th>
                                <th scope="col" >Thanh toán	</th>
                                <th scope="col" >Thời gian</th>
                                <th scope="col" >Thao tác	</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td class=""><span class="font-success">ADC</span></td>
                                <td>V1.83 | CLONE NGOẠI CÓ 2FA - NAME NGOẠI - AVT - INFO - 100 - 300 BB - NGÂM TRÊN 14 NGÀY - REG ANDROID
                                                     </td>
                                <td>103                              </td>
                                <td>5.000                              </td>
                                <td>11:40:14 06-12-2024                              </td>
                                <td>
                                  <a class="btn btn-primary" href="/hosting-vps/orders/1" wire:navigate data-bs-toggle="tooltip" title="" role="button" data-original-title="Hooray!">Tải về</a>
                                </td>
                              </tr>
                        
                            </tbody>
                          </table>
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
  
      </div>
    </div>
   
  </div>