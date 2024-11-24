function Method_payment() {
var payment_balance = document.getElementById("radio14");
var payment_bank = document.getElementById("radio13");

    if (payment_balance.checked) {
        document.getElementById("payment_method").value = 'payment_balance';
    }

    if (payment_bank.checked) {
        document.getElementById("payment_method").value = 'payment_bank';
    }
}

function amountIsMoney(price){
    var mn = document.getElementById("mn").value;
    if(price <= mn){
        document.getElementById("badge_radio14_df").style.display = 'none';
        document.getElementById("badge_radio14_scc").style.display = 'block';
        document.getElementById("radio14").disabled = false;
        document.getElementById("radio14").checked = true;
        
        Method_payment();
    } else if(price > mn){
        document.getElementById("badge_radio14_df").style.display = 'block';
        document.getElementById("badge_radio14_scc").style.display = 'none';
        document.getElementById("radio14").disabled = true;
        document.getElementById("radio13").checked = true;
        
        Method_payment();
    }
}

setTimeout(() => {
     Method_payment();
}, 100);


function ThanhToan (loadingId, textBtn) {
    var dieukhoan = document.getElementById("dieuKhoan");
    if(dieukhoan.checked){
        var data = {
            id: $("#id").val(),
            payment_method: $("#payment_method").val(),
            discount: $("#discount").val(),
        };

        LoadingIcon(loadingId);
        
        axios.get('/axios/code/thanh-toan', {
            params: data
        })
        .then(function (response) {
            refreshButton(loadingId, textBtn);
            swal('Thông Báo', response.data.message, response.data.status);
                
            if(response.data.loadBill != undefined){
                setTimeout(() => {
                  loadto(response.data.loadBill); 
                }, 1000);
            }
            
        })
        .catch(function (error) {
            swal('Lỗi', error, 'error');
        });
        
        setTimeout(() => {
            document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }, 2000);
    
    } else {
        swal('Cảnh Báo','Bạn Phải Chấp Nhận Với Điều Khoản Sử Dụng Dịch Vụ Để Tiếp Tục!', 'error');
    }
} 

var discountActive = false;
var typeDiscount = null;
var amountDiscount = 0;

function showTotal(){
    var price = $("#price").val();
    var dc = $("#discount").val();
    if(discountActive === true){
        if(typeDiscount == 'amount'){
            
            if(amountDiscount > price){
                var amount = Number(price).toLocaleString() + "đ";
            } else if(amountDiscount <= price) {
                var amount = Number(amountDiscount).toLocaleString() + "đ";
            }
            
        } else if(typeDiscount == 'percentage') {
            var amount = amountDiscount + "%";
        }
        
        document.getElementById("discount-show").innerHTML = " / " + dc.toUpperCase() + " <sup><strong class='txt-danger'> - " + amount + " </strong></sup>";
       }
    
    if(discountActive === false){
        var result = Number(price).toLocaleString();
        document.getElementById("amount-total").innerHTML = result;
    } else if(discountActive === true && typeDiscount == 'amount'){
        
        if(amountDiscount > price){
            var result = (price - price).toLocaleString();
            amountIsMoney(price - price);
        } else if(amountDiscount <= price) {
            var result = (price - amountDiscount).toLocaleString();
            amountIsMoney(price - amountDiscount);
        }
            
        document.getElementById("amount-total").innerHTML = result;
    } else if(discountActive === true && typeDiscount == 'percentage'){
        var percentage = price - (price * (amountDiscount / 100));
        var result = Number(percentage).toLocaleString();
        amountIsMoney(percentage);
        document.getElementById("amount-total").innerHTML = result;
    }
}

function appyDiscount(loadingId, textBtn, packages){
    
    var data = {
            discount: $("#discount").val(),
            service: 'code',
            package: packages
        };
        
        LoadingIcon(loadingId);
        
        axios.get('/axios/check-discount', {
            params: data
        })
        .then(function (response) {
            
            if(response.data.status == 'error'){
                swal('Thông Báo', response.data.message, response.data.status);
            }
            
            refreshButton(loadingId, textBtn);
            
            if(response.data.status == 'success'){
                if(response.data.type && response.data.type){
                    discountActive = true;
                    typeDiscount = response.data.type;
                    amountDiscount = response.data.value;
                }
                
                showTotal();
                
                document.getElementById("discount").disabled = true;
                document.getElementById("btnApply").innerHTML = 'Áp Dụng';
                document.getElementById("btnApply").disabled = true;
            }
            
        })
        .catch(function (error) {
            if(isModal()){
                changeModal('Lỗi', error, 'error');
            } else {
                ShowModal('Lỗi', error, 'error');
            }
        });
        
        setTimeout(() => {
            document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }, 2000);
}
