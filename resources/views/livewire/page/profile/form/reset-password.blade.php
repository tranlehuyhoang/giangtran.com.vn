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
            <button class="btn btn-primary" id="changepassword"> Đổi Mật Khẩu </button>
        </div>
    </div>

    <script>
        document.getElementById('changepassword').addEventListener('click', function(event) {
            // Lấy giá trị từ các ô nhập
            const newPassword = document.getElementById('new-password').value.trim();
            const confirmPassword = document.getElementById('confirm-password').value.trim();
            const captchaInput = document.getElementById('captcha').value;
            // Tính toán kết quả CAPTCHA
            const expectedAnswer = {{ $captcha1 }} + {{ $captcha2 }};

            // Kiểm tra xem mật khẩu mới và xác nhận mật khẩu có trống không
            if (newPassword === '' || confirmPassword === '') {
                event.preventDefault(); // Ngăn không cho gửi biểu mẫu
                alert('Vui lòng nhập mật khẩu mới và xác nhận mật khẩu.');
                return;
            }

            // Kiểm tra độ dài của mật khẩu
            if (newPassword.length < 6 || newPassword.length > 10) {
                event.preventDefault(); // Ngăn không cho gửi biểu mẫu
                alert('Mật khẩu mới phải có độ dài từ 6 đến 10 ký tự.');
                return;
            }

            // Kiểm tra xem mật khẩu mới và xác nhận có giống nhau không
            if (newPassword !== confirmPassword) {
                event.preventDefault(); // Ngăn không cho gửi biểu mẫu
                alert('Mật khẩu mới và xác nhận mật khẩu không khớp.');
                return;
            }

            // Kiểm tra CAPTCHA
            if (captchaInput.trim() === '' || parseInt(captchaInput) !== expectedAnswer) {
                event.preventDefault(); // Ngăn không cho gửi biểu mẫu
                alert('Vui lòng nhập đúng kết quả CAPTCHA.');
                return;
            }

            // Nếu tất cả điều kiện đều thỏa mãn, gọi phương thức changePassword
            @this.call('changePassword');
        });
    </script>
</div>
