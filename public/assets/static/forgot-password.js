
function create_new_password(){
    var data = {
        email: $("#email").val(),
        otp: $("#otp_new").val(),
        new_password: $("#new-password").val(),
        cofirm_password: $("#cofirm-password").val(),
    };
    
    if(data.email != '' && isValidEmail(data.email) && data.otp != '' && data.otp.length == 6){
        LoadingIcon('create_new_password');
        document.getElementById('email').disabled = true;
        
        axios.get('/axios/reset-password', {
            params: data
        })
        .then(function (response) {
            swal('Thông Báo', response.data.message, response.data.status);
            
            if(response.data.status == 'success'){
                loadto('/login');
            }
            
        })
        .catch(function (error) {
            swal('Lỗi', error, 'error');
        });
        
        refreshButton('create_new_password', 'Xác Nhận');
    }
}

function sendOTP(){
    var data = {
        email: $("#email").val(),
    };
    
    if(data.email != '' && isValidEmail(data.email)){
        LoadingIcon('icon-resend');
        document.getElementById('email').disabled = true;
        
        axios.get('/axios/sendotp-email', {
            params: data
        })
        .then(function (response) {
            swal('Thông Báo', response.data.message, response.data.status);
            
            if(response.data.status == 'success'){
                document.getElementById("otpShow").style.display = 'block';
                document.getElementById("btn-resendText").style.display = 'block';
                document.getElementById("default-text").style.display = 'none';
                document.getElementById('email').style.border = "1px solid blue";
            } else if(response.data.status == 'error'){
                document.getElementById('email').disabled = false;
                document.getElementById('email').style.border = "1px solid red";
            }
        })
        .catch(function (error) {
            swal('Lỗi', error, 'error');
        });
        
        refreshButton('icon-resend', 'Gửi Lại');
    }
}

function resendOTP(){
    sendOTP();
}

function getOTPInoput () {
    var data = {
        otp: $("#otp_new").val(),
        email: $("#email").val(),
    };
    
    if(data.otp != '' && data.email != '' && isValidEmail(data.email) && data.otp.length == 6){
        
        axios.get('/axios/cofirm-otp', {
            params: data
        })
        .then(function (response) {
            swal('Thông Báo', response.data.message, response.data.status);
            
            if(response.data.status == 'success'){
                document.getElementById("create-new-password").style.display = 'block';
                document.getElementById("get-send-otp").style.display = 'none';
            }
            
        })
        .catch(function (error) {
            swal('Lỗi', error, 'error');
        });
        
    }
}