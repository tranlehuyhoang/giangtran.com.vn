
function ShowHoaDon(){
    const modalHoadon = `<div class="modal fade" id="modalHoaDon" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="modal-toggle-wrapper"> 
              <h4> 2509roblox ơi, Bạn Có <strong class="txt-danger"> 0 Hóa Đơn </strong> Chờ Thanh Toán! </h4>
              
              <div class="col-lg-12 mt-3" id="dmm_box">
                  <div class="card">
                    <div class="card-body faq-body" style="max-height: 200px; overflow-y: auto;">
                                            
                    </div>
                  </div>
                </div>
               
                              
                  <div class="modal-img" style="margin-top: -55px;"> <img src="/assets/images/gif/online-shopping.gif" alt="online-shopping"></div>
                  <p class="text-sm-center"> Bạn chưa có hóa đơn nào, hãy bắt đầu thực hiện giao dịch mới ngay nào! </p>
                
                         
            </div>
          </div>
        </div>
      </div>
    </div>`;
    document.body.insertAdjacentHTML('beforeend', modalHoadon);
    
    var myModal = new bootstrap.Modal(document.getElementById('modalHoaDon'), {
        keyboard: false
      });
    myModal.show();
}

document.getElementById("number_bill").innerHTML = "0";

function changeWallet(name, id){
    var data = {
        name: name,
        invoiceId: id,
    };
    
    axios.get('/axios/change-wallet', {
        params: data
    })
    .then(function (response) {
        if(response.data.status == 'success'){
            loadto('');
        }
    })
    .catch(function (error) {
        ShowModal('Lỗi', error, 'error');
    });
}



