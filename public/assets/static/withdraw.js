function Withdraw(loadingId, textBtn) {
    var data = {
        action: 'withdraw',
        bankName: $("#bankName").val(),
        numberBank: $("#numberBank").val(),
        ownerBank: $("#ownerBank").val(),
        amount: $("#amount").val(),
    };

    LoadingIcon(loadingId);
    
    let timeoutId = setTimeout(() => {
        showToastRight('Xin Chào', 'Bạn có thể đóng trang này, hoặc chuyển hướng đến trang khác mà không ảnh hưởng đến quá trình xử lí!', 5000);
    }, 5000);
    
    axios.get('/axios/user/withdraw', {
        params: data
    })
    .then(function (response) {
        clearTimeout(timeoutId);
        refreshButton(loadingId, textBtn);
        swal('Thông Báo', response.data.message, response.data.status);
        
        if(response.data.status == 'success'){
            get_datatable('get_table');
        }
        
    })
    .catch(function (error) {
        swal('Lỗi', error, 'error');
    });
    
    setTimeout(() => {
        document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    }, 2000);
} 

window.onload = checkPrice;

function checkPrice() {
  var amount = parseFloat($("#amount").val());
  var fee = amount * (parseFloat($("#fee").val()) / 100);
  var price = amount + fee;

  $("#totalReal").html(Number(price).toLocaleString() + 'đ');
}

get_datatable('get_table');

setInterval(() => {
    get_datatable('get_table');
}, 20000);

function get_datatable(action) {
    var data = {
        action: action,
    };

    axios.get('/axios/user/withdraw', {
        params: data
    })
    .then(function (response) {
        if ($.fn.DataTable.isDataTable('#basic-1')) {
            $('#basic-1').DataTable().destroy();
        }

        $(".data-table").html(response.data);

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