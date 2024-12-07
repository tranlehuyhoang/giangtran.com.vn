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
    @livewire('page.profile.form.two-factor-auth')



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
