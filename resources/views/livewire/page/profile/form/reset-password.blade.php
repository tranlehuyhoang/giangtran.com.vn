<div class="col-xl-8 content-vi" id="change-password">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title mb-0"> Đổi Mật Khẩu </h2>
        </div>

        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label"> Mật Khẩu Cũ </label>
                    <input class="form-control {{ isset($errors['old_password']) ? 'is-invalid' : '' }}"
                        id="old-password" placeholder="Mật Khẩu Cũ" wire:model="old_password">
                    @if (isset($errors['old_password']))
                        <div class="invalid-feedback">{{ $errors['old_password'] }}</div>
                    @endif
                </div>

                <div class="col-md-4">
                    <label class="form-label"> Mật Khẩu Mới </label>
                    <input class="form-control {{ isset($errors['new_password']) ? 'is-invalid' : '' }}"
                        id="new-password" placeholder="Mật Khẩu Mới" wire:model="new_password">
                    @if (isset($errors['new_password']))
                        <div class="invalid-feedback">{{ $errors['new_password'] }}</div>
                    @endif
                </div>

                <div class="col-md-4">
                    <label class="form-label"> Nhập Lại Mật Khẩu Mới</label>
                    <input class="form-control {{ isset($errors['confirm_password']) ? 'is-invalid' : '' }}"
                        id="confirm-password" placeholder="Nhập Lại Mật Khẩu Mới" wire:model="confirm_password">
                    @if (isset($errors['confirm_password']))
                        <div class="invalid-feedback">{{ $errors['confirm_password'] }}</div>
                    @endif
                </div>
            </div>
        </div>

        <div class="card-footer text-end">
            <button class="btn btn-primary" wire:click="changePassword" id="changepassword" wire:loading.attr="disabled"
                wire:loading.class="btn-secondary">
                <span wire:loading.remove> Đổi Mật Khẩu </span>
                <span wire:loading> Đang Đổi... </span>
            </button>
        </div>
    </div>
</div>
