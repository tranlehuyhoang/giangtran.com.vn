<img src="https://i.ibb.co/PttpxCf/giangtran-com-vn-dark.png" alt="Logo" style="width: 100px;">
<br>
{{-- <img src="{{ asset('/logo/giangtran.com.vn.dark.png') }}" alt="Logo" style="width: 100px;"> --}}
 Xin chào! <br>
 Bạn đã yêu cầu đặt lại mật khẩu. Vui lòng nhấp vào liên kết dưới đây: <br>
<a href="{{ url('/reset-password') . '?email=' . $email . '&token=' . $token }}">Đặt lại mật khẩu</a> <br>
 Nếu bạn không yêu cầu đặt lại mật khẩu, bạn có thể bỏ qua email này.
