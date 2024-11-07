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
                          <h4>Lịch sử mua Mã nguồn</h4><span><code></code></span>
                        </div>
                        <div class="table-responsive theme-scrollbar signal-table">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col" >Code	</th>
                                <th scope="col" >Giá</th>
                                <th scope="col" >Ngày Mua	</th>
                                <th scope="col" >Link Tải</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                  <td>Share API Check LSGD THENAPVIP.COM	                           </td>
                                <td>5.000đ                              </td>
                                <td>11:40:14 06-12-2024                              </td>
                       
                                <td>
                                  <button class="btn button-light-secondary b-r-8">Download </button>
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