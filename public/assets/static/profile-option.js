document.addEventListener('DOMContentLoaded', function() {
    const listItems = document.querySelectorAll('.list-group-item');

    listItems.forEach(function(item) {
        item.addEventListener('click', function() {
            listItems.forEach(function(item) {
                item.classList.remove('active');
            });

            item.classList.add('active');
        });
    });
});


function selectContent(nameContent, cyberlux_1, cyberlux_2, cyberlux_3) {
    document.getElementById(nameContent).classList.remove('content-vi');
    document.getElementById(cyberlux_1).classList.add('content-vi');
    document.getElementById(cyberlux_2).classList.add('content-vi');
    document.getElementById(cyberlux_3).classList.add('content-vi');
}

function saveProfile(id) {
    if (id == 'profile') {
        var data = {
            type: id,
            other_information: $("#other_information").val(),
        };
        axiosRQ(data, '/axios/profile-config', 'saveProfile', false, 'LÆ°u ThĂ´ng Tin');
    } else if (id == 'changepassword') {
        var data = {
            type: id,
            password: $("#password").val(),
            new_password: $("#new-password").val(),
            cofirm_password: $("#cofirm-password").val(),
        };
        axiosRQ(data, '/axios/profile-config', 'changepassword', '/login', 'Äá»•i Máº­t Kháº©u');
    }

}

var status2FA = null;

function TowFaChange() {
    var data = {
        status: status2FA,
        type: 'towStep',
        otp: $("#otp_new").val(),
        email: $("#email").val(),
    };
    axiosRQ(data, '/axios/profile-config', 'formOTP-2Fa', '', '');
}

function resendOTP() {
    sendOTP();
}

function getOTPInoput() {

    var data = {
        otp: $("#otp_new").val(),
        email: $("#email").val(),
    };

    if (data.otp != '' && data.email != '' && isValidEmail(data.email) && data.otp.length == 6) {
        document.getElementById('otp_new').disabled = true;

        axios.get('/axios/cofirm-otp', {
                params: data
            })
            .then(function(response) {
                ShowModal('ThĂ´ng BĂ¡o', response.data.message, response.data.status);

                if (response.data.status == 'success') {
                    TowFaChange();
                    document.getElementById("formOTP-2Fa").style.display = 'none';
                }

            })
            .catch(function(error) {
                ShowModal('Lá»—i', error, 'error');
            });

    }
}


function sendOTP() {
    var data = {
        email: $("#email").val(),
    };

    if (data.email != '' && isValidEmail(data.email)) {
        LoadingIcon('isLoading');
        document.getElementById('otp_new').disabled = true;

        axios.get('/axios/sendotp-email', {
                params: data
            })
            .then(function(response) {
                ShowModal('ThĂ´ng BĂ¡o', response.data.message, response.data.status);

                if (response.data.status == 'success') {
                    document.getElementById("btn-resendText").style.display = 'block';
                    document.getElementById('otp_new').disabled = false;
                    document.getElementById('otp_new').style.border = "1px solid blue";
                } else if (response.data.status == 'error') {
                    document.getElementById('otp_new').disabled = false;
                    document.getElementById('otp_new').style.border = "1px solid red";
                }

            })
            .catch(function(error) {
                ShowModal('Lá»—i', error, 'error');
            });

        refreshButton('isLoading', '');
    }

}

// function isChecked() {
//     if (document.getElementById("2FaStatus").checked) {
//         document.getElementById("isCheckedText").innerHTML = 'Đang Bật';

//         if (document.getElementById("2faDefault").value != 'true') {
//             document.getElementById("formOTP-2Fa").classList.remove('content-vi');
//             status2FA = true;
//             sendOTP();
//         } else {
//             document.getElementById("formOTP-2Fa").classList.add('content-vi');
//         }
//     } else {
//         document.getElementById("isCheckedText").innerHTML = 'Đang Tắt';

//         if (document.getElementById("2faDefault").value != 'false') {
//             document.getElementById("formOTP-2Fa").classList.remove('content-vi');
//             status2FA = false;
//             sendOTP();
//         } else {
//             document.getElementById("formOTP-2Fa").classList.add('content-vi');
//         }
//     }
// }

document.addEventListener('DOMContentLoaded', function() {
    isChecked();
});