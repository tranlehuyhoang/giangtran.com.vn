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
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Tạo đơn hàng</h4>
                                            </div>
                                            <div class="card-body custom-input">
                                                <form class="row g-3">
                                                
                                                  <div class="col-12"> 
                                                    <label class="form-label" for="first-name">Tìm nhanh dịch vụ</label>
                                                    <input class="form-control" id="first-name" type="text" placeholder="Tìm kiếm tất cả dịch vụ" aria-label="First name" required="">
                                                  </div>
                                                  <div class="col-xl-6 col-md-12"> 
                                                    <label class="form-label" for="first-name">Nền tảng</label>
                                                    <input class="form-control" id="first-name" type="text" placeholder="Chọn nền tảng" aria-label="First name" required="">
                                                  </div>
                                                  <div class="col-xl-6 col-md-12"> 
                                                    <label class="form-label" for="first-name">Phân loại</label>
                                                    <input class="form-control" id="first-name" type="text" placeholder="Chọn phân loại" aria-label="First name" required="">
                                                  </div>
                                                  <div class="col-12">
                                                    <label class="form-label" for="exampleFormControlInput1">Dịch vụ</label>
                                                    <input class="form-control" id="first-name" type="text" placeholder="Chọn dịch vụ" aria-label="First name" required="">
                                                  </div>
                                                     
                                                  <div class="col-12"> 
                                                    <label class="form-label" for="first-name">Liên kết</label>
                                                    <input class="form-control" id="first-name" type="text" placeholder="Nhập liên kết cần tăng tương tác" aria-label="First name" required="">
                                                  </div>
                                                  <div class="col-12"> 
                                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                                      <div class="radio-form">
                                                        <div class="form-check">
                                                          <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault" required="">
                                                          <label class="form-check-label" for="flexRadioDefault1">Một liên kết</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault" checked="" required="">
                                                          <label class="form-check-label" for="flexRadioDefault2">Nhiều liên kết</label>
                                                        </div>
                                                   
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-12">
                                                    <label class="form-label" for="exampleFormControlInput1">Số lượng</label>
                                                    <input class="form-control" id="first-name" type="number" min="1" value="100" placeholder="Nhập số lượng" aria-label="First name" required="">
                                                  </div>
                                                  <div class="col-12"> 
                                                    <div class="form-check form-switch">
                                                      <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox" role="switch" required="">
                                                      <label class="form-check-label" for="flexSwitchCheckDefault">Are you sure above information are true</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-12">

                                                      <div class="card-wrapper border rounded-3">
                                                          <div class="d-grid gap-2 buttons-box">
                                                              <button class="btn button-light-primary" type="button" style="
                                                              font-size: 4vw;
                                                              font-family: 'Archivo', sans-serif;
                                                              font-weight: bold;
                                                          ">100.000vnđ</button>
                                                              <button class="btn btn-primary" type="button">Thanh toán</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                           
                                                </form>
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