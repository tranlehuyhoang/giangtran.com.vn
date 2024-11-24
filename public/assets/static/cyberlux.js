document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";

setTimeout(() => {
    var path = window.location.pathname;
    if(path !== '/' && path !== '/login' && path !== '/register' && path !== '/forgot-password'){
        document.getElementById("homeHref").classList.remove('active');
    } 
}, 1000);

const modalContent = `
  <div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-labelledby="modalError" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body"> 
          <div class="modal-toggle-wrapper">  
            <ul class="modal-img">
              <li> <img id="status" alt="error"></li>
            </ul>
            <h4 class="text-center pb-2" id="title_modal"></h4>
            <p class="text-center" id="content_modal"></p>
            <button class="btn btn-dark d-flex m-auto" type="button" data-bs-dismiss="modal"> Đóng </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="toast-bt-right" style="position: fixed; bottom: 0; right: 0; margin-bottom: 10px; z-index: 3000;">
        <div class="toast-header"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-disc toast-icons toast-dark"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg><strong class="me-auto" id="toast-bt-right-title"> iamThanhXdev </strong><small class="text-muted d-sm-block d-none"> Vừa Xong </small>
          <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body toast-dark" id="toast-bt-right-content"> Mã Nguồn Được Phát Triển Bởi NGUYỄN THÀNH IT <3</div>
      </div>
`;

document.body.insertAdjacentHTML('beforeend', modalContent);

const selects = document.querySelectorAll('select.form-control');

selects.forEach((select) => {
  select.classList.remove('form-control'); 
  select.classList.add('form-select'); 
});

function showToastRight(title, content, timeout){
    FuiToast.warning(content, {
      title: title,
      isClose: true,
      duration: timeout ? timeout : 6000
    })
}

function isModal() {
    var modal = document.getElementById("modalError");
    return modal.classList.contains('show');
}

function ShowModal(title, content, status){
    document.getElementById("title_modal").innerHTML = title;
    document.getElementById("content_modal").innerHTML = content;
    
    if(status == 'success'){
        document.getElementById("status").src = '/assets/images/gif/successful.gif';
    } else if(status == 'error') {
        document.getElementById("status").src = '/assets/images/gif/danger.gif';
    } else if(status == 'warning') {
        document.getElementById("status").src = '/assets/gif/1716872866240.gif';
    }

    var myModal = new bootstrap.Modal(document.getElementById('modalError'), {
        keyboard: false
      });
    myModal.show();
}

function changeModal(title, content, status){
    document.getElementById("title_modal").innerHTML = title;
    document.getElementById("content_modal").innerHTML = content;
    
    if(status == 'success'){
        document.getElementById("status").src = '/assets/images/gif/successful.gif';
    } else if(status == 'error') {
        document.getElementById("status").src = '/assets/images/gif/danger.gif';
    } else if(status == 'warning') {
        document.getElementById("status").src = '/assets/gif/1716872866240.gif';
    }
}

function ramdomString(length) {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let result = '';
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        result += characters[randomIndex];
    }
    return result;
}

var scriptTag = document.currentScript;
var scriptUrl = scriptTag.src;
var url = new URL(scriptUrl);

function params(paramsName){
    var data = url.searchParams.get(paramsName);
    return data;
}

function loadto(url){
    window.location.href=url;
}

function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

const LoadingIcon = id => {
    const element = document.getElementById(id);
    if (element) {
        element.innerHTML = '<i class="cbl-loading"></i>';
        element.disabled = true;
    }
};

const refreshButton = (id, text) => {
    const element = document.getElementById(id);
    if (element) {
        element.innerHTML = text;
        element.disabled = false;
    }
};


function preventSave(event) {
    if (event.ctrlKey && event.key === 's') {
        event.preventDefault(); 
    }
}

window.addEventListener('keydown', preventSave);

function axiosMethodGet(data, url, loadingId, loadToOnSuccess, dismissLoadingText) {
    LoadingIcon(loadingId);
    axios.get(url, {
        params: data
    })
    .then(function (response) {
        ShowModal('Thông Báo', response.data.message, response.data.status);
        
        if(response.data.status == 'success' && loadToOnSuccess !== false){
            if(loadToOnSuccess !== 'back'){
                setTimeout(() => {
                    loadto(loadToOnSuccess);
                }, 1000);
            } else {
                window.history.back();
            }
        }
        
        refreshButton(loadingId, dismissLoadingText);
    })
    .catch(function (error) {
        ShowModal('Lỗi', error, 'error');
        refreshButton(loadingId, dismissLoadingText);
    });
}

function axiosRQ(data, url, loadingId, loadToOnSuccess, dismissLoadingText) {
    axiosMethodGet(data, url, loadingId, loadToOnSuccess, dismissLoadingText);
}

