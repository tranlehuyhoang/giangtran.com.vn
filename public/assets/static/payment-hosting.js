// <script>

function ThanhToan(loadingId, textBtn) {
    var dieukhoan = document.getElementById("dieuKhoan");
    if(dieukhoan.checked){
        var data = {
            id: $("#id").val(),
            payment_method: $("#payment_method").val(),
            domain: $("#domain").val(),
            email: $("#email").val(),
            chuky: $("#chuky").val(),
            discount: $("#discount").val(),
        };

        LoadingIcon(loadingId);
        
        axios.get('/axios/hosting/thanh-toan', {
            params: data
        })
        .then(function (response) {
            refreshButton(loadingId, textBtn);
            
            if(isModal()){
                changeModal('Thông Báo', response.data.message, response.data.status);
            } else {
                ShowModal('Thông Báo', response.data.message, response.data.status);
            }
                
            if(response.data.loadBill != undefined){
                setTimeout(() => {
                  loadto(response.data.loadBill); 
                }, 1000);
            }
            
            checkPrice();
            
        })
        .catch(function (error) {
            ShowModal('Lỗi', error, 'error');
        });
        
        setTimeout(() => {
            document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }, 2000);
    
    } else {
        ShowModal('Cảnh Báo','Bạn Phải Chấp Nhận Với Điều Khoản Sử Dụng Dịch Vụ Để Tiếp Tục!', 'error');
    }
} 

var discountActive = false;
var typeDiscount = null;
var amountDiscount = 0;

function showTotal(){
    var price = $("#price").val();
    var hsd = $("#chuky").val();
    
    if(discountActive === true){
        var dc = $("#discount").val();
        if(typeDiscount == 'amount'){
            
            if(amountDiscount > price * hsd){
                var amount = Number(price * hsd).toLocaleString() + "đ";
            } else if(amountDiscount <= price * hsd) {
                var amount = Number(amountDiscount).toLocaleString() + "đ";
            }
            
        } else if(typeDiscount == 'percentage') {
            var amount = amountDiscount + "%";
        }
        
        document.getElementById("discount-show").innerHTML = dc.toUpperCase() + " <sup><strong class='txt-danger'> - " + amount + " </strong></sup>";
    }
    
    if(discountActive === false){
        var result = Number(price * hsd).toLocaleString();
        document.getElementById("amount-total").innerHTML = result + " VNĐ";
        amountIsMoney(price * hsd);
    } else if(discountActive === true && typeDiscount == 'amount'){
        
        if(amountDiscount > price * hsd){
            amountIsMoney(price * hsd - price * hsd);
            var result = (price * hsd - price * hsd).toLocaleString();
        } else if(amountDiscount <= price * hsd) {
            amountIsMoney(price * hsd - amountDiscount);
            var result = (price * hsd - amountDiscount).toLocaleString();
        }
            
        document.getElementById("amount-total").innerHTML = result + " VNĐ";
    } else if(discountActive === true && typeDiscount == 'percentage'){
        var percentage = price * hsd - (price * hsd * (amountDiscount / 100));
        var result = Number(percentage).toLocaleString();
        amountIsMoney(percentage);
        document.getElementById("amount-total").innerHTML = result + " VNĐ";
    }
}

function appyDiscount(loadingId, textBtn, packages){
    
    var data = {
            discount: $("#discount").val(),
            service: 'hosting',
            package: packages
        };
        
        LoadingIcon(loadingId);
        
        axios.get('/axios/check-discount', {
            params: data
        })
        .then(function (response) {
            ShowModal('Thông Báo', response.data.message, response.data.status);
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
            ShowModal('Lỗi', error, 'error');
        });
}

function Tru() {
    var currentValue = parseInt(document.getElementById("chuky").value);
    document.getElementById("chuky").value = currentValue + 1;
    checkPrice();
}

function Cong() {
    var currentValue = parseInt(document.getElementById("chuky").value);
    if (currentValue > 1) {
        document.getElementById("chuky").value = currentValue - 1;
        checkPrice();
    }
}

function checkPrice(){
    var price = $("#price").val();
    var chuky = $("#chuky").val();
    var result = Number(price * chuky).toLocaleString();
    showTotal(chuky, price);
    document.getElementById("chuky-show").innerHTML = chuky + " Tháng";
}

window.onload = checkPrice;

function NangCap (loadingId, textBtn) {
    var dieukhoan = document.getElementById("dieuKhoan");
    if(dieukhoan.checked){
        var data = {
            id: $("#id").val(),
            idPresent: $("#idPresent").val(),
            payment_method: $("#payment_method").val(),
            type: 'upgrade',
        };

        LoadingIcon(loadingId);
        
        axios.get('/axios/hosting/upgrade', {
            params: data
        })
        .then(function (response) {
            
            if(isModal()){
                changeModal('Thông Báo', response.data.message, response.data.status);
            } else {
                ShowModal('Thông Báo', response.data.message, response.data.status);
            }

            if(response.data.loadBill != undefined){
                setTimeout(() => {
                  loadto(response.data.loadBill); 
                }, 1000);
            } else {
                if(response.data.status == 'success'){
                    setTimeout(() => {
                        loadto('/product/hosting/' + data.idPresent); 
                    }, 500);
                }
            }
            
            refreshButton(loadingId, textBtn);
            
        })
        .catch(function (error) {
            ShowModal('Lỗi', error, 'error');
        });
        
        setTimeout(() => {
            document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }, 2000);
        
    } else {
        ShowModal('Cảnh Báo','Bạn Phải Chấp Nhận Với Điều Khoản Sử Dụng Dịch Vụ Để Tiếp Tục!', 'error');
    }
} 
