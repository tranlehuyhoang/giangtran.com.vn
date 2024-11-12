var emailLogin = null;

function sendOTP(email){
    emailLogin = email;
    
    var data = {
        email: email,
    };
    
    document.getElementById('otp_new').disabled = true;
    
    axios.get('/axios/sendotp-email', {
        params: data
    })
    .then(function (response) {
        swal('Thông Báo', response.data.message, response.data.status);
        document.getElementById("btn-resendText").style.display = 'block';
        document.getElementById('otp_new').disabled = false;
        
    })
    .catch(function (error) {
        swal('Lỗi', error, 'error');
    });

}

function resendOTP(){
    sendOTP();
}

function login(btn, text){
    LoadingIcon(btn);
    
        if($('#recaptchaTrue').length) {
            var response = grecaptcha.getResponse();
            var statusCaptcha = response.length;
        } else {
            var statusCaptcha = '1';
        }
        
        if(statusCaptcha == 0) {
            swal('Thất Bại','Vui Lòng Xác Thực Captcha Để Tiếp Tục.','error');
            setTimeout(() => {
                refreshButton(btn, text);
            }, 100);
        } else {
            
            var data = {
                username: $("#username").val(),
                password: $("#password").val(),
                recaptcha_response: response,
                cookie24h: document.getElementById("checkbox1").checked ? true : false
            };
                
            axios.get('/axios/login', {
                params: data
            })
            .then(function (response) {
                swal('Thông Báo', response.data.message, response.data.status);
                
                if($('#recaptchaTrue').length && response.data.status == 'error') {
                    grecaptcha.reset();
                }
                
                if(response.data.status == 'warning'){
                    sendOTP(response.data.email);
                    emailLogin = response.data.email;
                    console.log(emailLogin);
                    document.getElementById("otp_form").classList.remove('content-vi');
                    document.getElementById("form-login").classList.add('content-vi');
                } else if(response.data.status == 'success'){
                    setTimeout(() => {
                        loadto('/');
                    }, 1000); 
                }
                
                refreshButton(btn, text);
            })
            .catch(function (error) {
                swal('Lỗi', error, 'error');
            });
            
    }
}

function getOTPInoput(){
    var data = {
        type: 'submit2Step',
        otp: $("#otp_new").val(),
        email: emailLogin,
        username: $("#username").val(),
        password: $("#password").val(),
        cookie24h: document.getElementById("checkbox1").checked ? true : false
    };
    
    if(data.otp != '' && data.email != '' && isValidEmail(data.email) && data.otp.length == 6){
        document.getElementById('otp_new').disabled = true;
        
        axios.get('/axios/login', {
            params: data
        })
        .then(function (response) {
            swal('Thông Báo', response.data.message, response.data.status);
        
            if(response.data.status == 'success'){
                setTimeout(() => {
                    loadto('/');
                }, 1000); 
            } else {
                setTimeout(() => {
                    loadto('/');
                }, 1000); 
            }
            
        })
        .catch(function (error) {
            if(isModal()){
                swal('Lỗi', error, 'error');
            } else {
                swal('Lỗi', error, 'error');
            }
        });
        
    }
}

function register(btn, text){
    LoadingIcon(btn);
    
    var dieukhoan = document.getElementById("dieuKhoan").checked ? true : false;
    if(!dieukhoan){
        swal('Thất Bại','Bạn Phải Đồng Ý Với Điều Khoản Và Dịch Vụ Để Đăng Ký Tài Khoản!','error');
    } else {
        
        if($('#recaptchaTrue').length) {
            var response = grecaptcha.getResponse();
            var statusCaptcha = response.length;
        } else {
            var statusCaptcha = '1';
        }
        
        if(statusCaptcha == 0) {
            swal('Thất Bại','Vui Lòng Xác Thực Captcha Để Tiếp Tục.','error');
            setTimeout(() => {
                refreshButton(btn, text);
            }, 100);
        } else {
                
            var data = {
                name: $("#name").val(),
                email: $("#email").val(),
                username: $("#username").val(),
                password: $("#password").val(),
                recaptcha_response: response
            };
                
            axios.get('/axios/register', {
                params: data
            })
            .then(function (response) {
                swal('Thông Báo', response.data.message, response.data.status);
        
                if($('#recaptchaTrue').length && response.data.status == 'error') {
                    grecaptcha.reset();
                }
                
                if(response.data.status == 'success'){
                    setTimeout(() => {
                        loadto('/');
                    }, 1000); 
                }
                
                refreshButton(btn, text);
            })
            .catch(function (error) {
                swal('Lỗi', error, 'error');
            });
            
        }
    }
}
