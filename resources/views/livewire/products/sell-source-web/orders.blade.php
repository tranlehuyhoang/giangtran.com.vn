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
                          <h4>Lịch sử mua hosting</h4><span><code>Khi gói hosting hết hạn quá 3 ngày hệ thống sẽ tự động xóa hosting của bạn</code></span>
                        </div>
                        <div class="table-responsive theme-scrollbar signal-table">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col" >Tên gói	</th>
                                <th scope="col" >Giá</th>
                                <th scope="col" >Chu kỳ</th>
                                <th scope="col" >Tên miền	</th>
                                <th scope="col" >IP</th>
                                <th scope="col" >Ngày hết hạn	</th>
                                <th scope="col" >Tự gia hạn	</th>
                                <th scope="col" >Chức năng</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle bg-light-success font-success"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg><span class="font-success">PREMIUM 1</span></td>
                                <td>5.000                              </td>
                                <td>1 Tháng                              </td>
                                <td>a.com                              </td>
                                <td>103.252.137.101                              </td>
                                <td>11:40:14 06-12-2024                              </td>
                                <td   >
                                  <div class="flex-grow-1 icon-state switch-outline">
                                    <label class="switch">
                                      <input type="checkbox" checked=""><span class="switch-state bg-primary"></span>
                                    </label>
                                  </div>
                                </td>
                                <td>
                                  <a class="btn btn-primary" href="/hosting-vps/orders/1" wire:navigate data-bs-toggle="tooltip" title="" role="button" data-original-title="Hooray!">Quản lý</a>
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