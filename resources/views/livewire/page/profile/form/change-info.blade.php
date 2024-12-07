<div class="col-xl-8" id="profile">
    <div class="card title-line">
        <div class="card-header">
            <h2 class="card-title mb-0"> Thông Tin Tài Khoản </h2>
        </div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label"> Tên Khách Hàng </label>
                    <input class="form-control" value="{{ Auth::user()->name }}" disabled>
                </div>

                <div class="col-md-6">
                    <label class="form-label"> Tên Tài Khoản </label>
                    <input class="form-control" value="{{ Auth::user()->username }}" disabled>
                </div>

                <div class="col-md-6">
                    <label class="form-label"> Địa Chỉ Email </label>
                    <input class="form-control" value="{{ Auth::user()->email }}" disabled>
                </div>

                <div class="col-sm-6 col-md-6">
                    <label class="form-label"> Thông Tin Liên Hệ Khác <strong class="txt-primary">(Nếu Có)</strong>
                    </label>
                    <input wire:model="contact" class="form-control" type="text"
                        placeholder="Zalo, Facebook, Telegram, ..." value="{{ Auth::user()->contact }}">
                </div>

                <div class="col-sm-6 col-md-6">
                    <label class="form-label"> Địa Chỉ IP Đăng Ký </label>
                    <input class="form-control" value="{{ Auth::user()->ip_address }}" disabled>
                </div>

                <div class="col-md-6">
                    <label class="form-label"> Thiết Bị Đăng Ký</label>
                    <input class="form-control" value="{{ Auth::user()->device }}" disabled>
                </div>

                <div class="col-sm-6 col-md-4">
                    <label class="form-label"> Số Dư </label>
                    <input class="form-control"
                        value="{{ App\Helpers\FormatHelper::formatCurrency(Auth::user()->balance) }}đ" disabled>
                </div>

                <div class="col-sm-6 col-md-3">
                    <label class="form-label"> Tổng Nạp </label>
                    <input class="form-control"
                        value="{{ App\Helpers\FormatHelper::formatCurrency(Auth::user()->total_deposit) }}đ" disabled>
                </div>

                <div class="col-md-5">
                    <label class="form-label"> Tổng Tiêu </label>
                    <input class="form-control"
                        value="{{ App\Helpers\FormatHelper::formatCurrency(Auth::user()->total_consumption) }}đ"
                        disabled>
                </div>
            </div>
        </div>

        <div class="card-footer text-end">
            <button class="btn btn-primary" id="saveProfile" wire:click="saveProfile" wire:loading.attr="disabled"
                wire:loading.class="btn-secondary">
                <span wire:loading.remove> Lưu Thông Tin </span>
                <span wire:loading> Đang Lưu... </span>
            </button>
        </div>
    </div>
</div>
