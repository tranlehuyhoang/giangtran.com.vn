
<li class="cart-nav onhover-dropdown" onclick="ShowHoaDon({{ $invoices }}, '{{ App\Models\User::getCurrentUserName() }}');">
    <div class="cart-box onhover-click">
        <svg>
            <use href="/assets/assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
        </svg><span class="badge rounded-pill badge-primary"
            id="number_bill">0</span>
    </div>
</li>
