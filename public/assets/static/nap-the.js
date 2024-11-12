get_datatable('get_table');

setInterval(() => {
    get_datatable('get_table');
}, 20000);

function get_datatable(action) {
    var data = {
        action: action,
    };

    axios.get('/axios/user/nap-card', {
        params: data
    })
    .then(function (response) {
        
        if($.fn.DataTable.isDataTable('#basic-1')) {
            $('#basic-1').DataTable().destroy();
        }

        $("#datatable").html(response.data);

        $('#basic-1').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
        });
        
    })
    .catch(function (error) {
        swal('Lỗi', error, 'error');
    });
    
    setTimeout(() => {
        document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    }, 2000);
} 

function NapThe(loadingId, textBtn) {
    LoadingIcon(loadingId);
    
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
            action: 'napthe',
            pinCard: $("#pinCard").val(),
            serialCard: $("#serialCard").val(),
            typeCard: $("#typeCard").val(),
            amountCard: $("#amountCard").val(),
            recaptcha_response: response,
        };
        
        let timeoutId = setTimeout(() => {
            showToastRight('Xin Chào', 'Bạn có thể đóng trang này, hoặc chuyển hướng đến trang khác mà không ảnh hưởng đến quá trình xử lí!', 5000);
        }, 5000);
        
        axios.get('/axios/user/nap-card', {
            params: data
        })
        .then(function (response) {
            clearTimeout(timeoutId);
            refreshButton(loadingId, textBtn);
            swal('Thông Báo', response.data.message, response.data.status);
            
            if(response.data.status == 'success'){
                get_datatable('get_table');
            }
            
            if($('#recaptchaTrue').length && response.data.status == 'error') {
                grecaptcha.reset();
            }
            
        })
        .catch(function (error) {
            swal('Lỗi', error, 'error');
        });
        
        setTimeout(() => {
            document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }, 2000);
    
    }
} 