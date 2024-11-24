get_datatable('get_table');

setInterval(() => {
    get_datatable('get_table');
}, 20000);

function get_datatable(action) {
    var data = {
        type: action,
    };

    axios.get('/axios/option-wallet', {
        params: data
    })
    .then(function (response) {
        
        if ($.fn.DataTable.isDataTable('#basic-1')) {
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
        console.log('Lỗi', error, 'error');
    });
    
    setTimeout(() => {
        document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    }, 1000);
} 


function changeWallet(name, id){
    var data = {
        name: name,
        invoiceId: id,
        type: 'change'
    };
    
    axios.get('/axios/option-wallet', {
        params: data
    })
    .then(function (response) {
        if(response.data.status == 'success'){
            loadto('');
        }
    })
    .catch(function (error) {
        console.log('Lỗi', error, 'error');
    });
}

