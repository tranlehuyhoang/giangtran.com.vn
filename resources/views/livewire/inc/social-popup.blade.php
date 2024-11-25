<div>
    @if (!auth()->check())
        <script src="https://accounts.google.com/gsi/client" async></script>

    <div id="g_id_onload" data-client_id="{{ env('GOOGLE_CLIENT_ID') }}" data-context="signin"
        data-csrf_token="{{ csrf_token() }}" data-ux_mode="popup" data-callback="googleLogin" data-itp_support="true">
    </div>
    <script>
        function googleLogin(response) {
            @this.call('googleLogin', parseJwt(response.credential));
        }

        function parseJwt(token) {
            var base64Url = token.split('.')[1];
            var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
            var jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
                return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
            }).join(''));

            return JSON.parse(jsonPayload);
            }
        </script>
    @endif
</div>
