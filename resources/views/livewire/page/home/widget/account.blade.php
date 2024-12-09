<div class="card height-equal title-line" style="padding-bottom: 7px;">
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-sm-12 box-col-12 col-xxl-100">
            <div class="card-header card-no-border">
                <h2>Tài Khoản</h2>
                @if (Auth::check())
                    @if (Auth::user()->two_factor_auth_status == 0)
                        <span class="f-w-500">Xác Thực 2 Bước: Đang Tắt</span>
                    @else
                        <span class="f-w-500">Xác Thực 2 Bước: Đang Bật</span>
                    @endif
                @endif
            </div>

            <div class="card-body pt-0 chat-app-wrapper">
                @if (Auth::check())
                    <div class="project-details">
                        <div class="d-flex gap-2">
                            <img src="/logo/avatar.png" style="width: 48px;"
                                alt="user">
                            <div>
                                <h4 class="f-w-500">
                                    {{ Auth::user()->username }}
                                </h4>
                                <span class="f-12 f-light f-w-500">Thành
                                    Viên</span>
                            </div>
                        </div>
                        @if (Auth::user()->contact == null)
                        <p class="f-w-500 f-light text-danger">Quý Khách
                            Chưa Cập
                            Nhật Thông Tin Liên Hệ, Thêm Thông Tin <a
                                href="/profile" class="text-primary">Tại
                                    Đây</a>
                            </p>
                        @endif
                        <div class="mt-3" style="display: flex;">
                            <a href="/chuyen-khoan"
                                class="badge badge-primary text-light">Nạp
                                Tiền</a>
                            <a href="/profile"
                                class="badge badge-secondary text-light">Lịch
                                Sử
                                Hoạt Động</a>
                            <a wire:click="showModalLogout" style="cursor: pointer;"
                                class="badge badge-danger text-light">Đăng
                                Xuất</a>
                        </div>
                    </div>
                @else
                    <div class="card-body pt-0">
                        <div class="light-card satisfaction-box common-box">

                            <div>
                                <div class="g_id_signin" data-type="standard" data-shape="rectangular"
                                    data-theme="outline" data-text="signin_with" data-size="large"
                                    data-logo_alignment="left">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
