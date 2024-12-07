<div class="row">

    <div class="col-md-4">
        <div class="card title-line">
            <div class="card-header rating-header">
                <h2> Quản Lý Tài Khoản </h2>
                <p class="f-m-light mt-1"> Nếu Bạn Nghi Ngờ Tài Khoản Bị Truy Cập Bởi Một Ai
                    Đó,
                    Hãy Đổi Thông Tin Tài Khoản Ngay Nhé! </p>
            </div>

            <div class="card-body">

                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"
                        onclick="selectContent('profile', 'change-password', '2step', 'history');">
                        <i class="icofont icofont-arrow-right"> </i> Thông Tin Tài Khoản
                    </li>
                    <li class="list-group-item"
                        onclick="selectContent('change-password', 'profile', '2step', 'history');">
                        <i class="icofont icofont-arrow-right"> </i> Đổi Mật Khẩu
                    </li>
                    <li class="list-group-item"
                        onclick="selectContent('2step', 'profile', 'change-password', 'history');">
                        <i class="icofont icofont-arrow-right"> </i> Xác Thực 2 Bước
                    </li>
                    <li class="list-group-item "
                        onclick="selectContent('history', 'profile', 'change-password', '2step');">
                        <i class="icofont icofont-arrow-right"> </i> Lịch Sử Hoạt Động
                    </li>
                </ul>

            </div>
        </div>
    </div>




    @livewire('page.profile.form.change-info')
    @livewire('page.profile.form.reset-password')

    <div class="col-xl-8 content-vi" id="2step">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title mb-0"> Xác Thực 2 Bước </h2>
            </div>
            <div class="card-body">

                <div class="">
                    <strong class="txt-primary"> Ghi Chú Nên Đọc: </strong> <br>
                    <p>- Trình Xác Thực 2 Bước Được Tạo Trên Hệ Thống Này Nhằm Tạo Thêm Bước
                        Xác
                        Thực OTP Qua Email Sau Khi Bạn Xác Thực Bước 1 Với Tài Khoản & Mật
                        Khẩu
                    </p>
                </div>

                <div class="row g-3 mt-3">

                    <div class="col-md-12 col-xl-4">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                            <h6 class="sub-title"> Trạng Thái 2FA </h6>
                            <div class="form-check-size">

                                <div class="form-check form-switch form-check-inline">
                                    <input class="form-check-input check-size"
                                        id="2FaStatus" type="checkbox" role="switch"
                                        onchange="isChecked();">
                                </div><strong id="isCheckedText"
                                    style="padding-left: -10px;">
                                    Loading ... </strong>

                                <div class="form-group content-vi" id="formOTP-2Fa">
                                    <label> OTP Xác Minh </label>
                                    <input class="form-control" id="otp_new"
                                        placeholder="Nhập Mã Xác Minh Gồm 6 Số!"
                                        onchange="getOTPInoput();">
                                    <div id="isLoading"></div>
                                </div>

                                <div class="mb-4" id="btn-resendText"
                                    style="display: none;">
                                    <span class="reset-password-link"> Chưa Nhận Được Mã
                                        OTP? <a class="btn-link txt-danger"
                                            onclick="resendOTP()" id="icon-resend"> Gửi Lại
                                        </a></span>
                                </div>

                                <input type="hidden" id="2faDefault" value="false">
                                <input type="hidden" id="email"
                                    value="2509roblox@gmail.com">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-8 content-vi" id="history">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title mb-0"> Lịch Sử Hoạt Động</h2>
            </div>
            <div class="card-body">

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive custom-scrollbar">
                                <table class="display" id="basic-1">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nội Dung</th>
                                            <th>Địa Chỉ IP</th>
                                            <th>Thời Gian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($activities as $activity)
                                            <tr>
                                                <td>{{ $loop->count - $loop->index }}</td> <!-- Số đếm giảm dần -->
                                                <td>{{ $activity->content }}</td>
                                                <td>{{ $activity->ip_address }}</td>
                                                <td>{{ $activity->created_at->format('d/m/Y - H:i:s') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



</div>
