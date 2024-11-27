<div class="col-xl-8 content-vi" id="change-password">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title mb-0"> Đổi Mật Khẩu </h2>
        </div>

        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label"> Mật Khẩu Mới </label>
                    <input class="form-control" id="new-password" placeholder="Mật Khẩu Mới" wire:model="new_password">
                </div>

                <div class="col-md-4">
                    <label class="form-label"> Nhập Lại Mật Khẩu Mới</label>
                    <input class="form-control" id="confirm-password" placeholder="Nhập Lại Mật Khẩu Mới" wire:model="confirm_password">
                </div>

                <div class="col-md-4">
                    <label class="form-label"> CAPTCHA: {{ $captcha1 }} + {{ $captcha2 }} = ? </label>
                    <input class="form-control" id="captcha" placeholder="Nhập kết quả" wire:model="captcha_answer_input">
                </div>
            </div>
        </div>

        <div class="card-footer text-end">
            <button class="btn btn-primary" wire:click="changePassword" id="changepassword"> Đổi Mật Khẩu </button>
        </div>
    </div>


</div>
