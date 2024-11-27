<form wire:submit.prevent="resetPassword">
    <input class="form-control" type="password" id="password"
        placeholder="Mật khẩu mới" style="background-color: white;"
        autocomplete="new-password" wire:model="password" value="">
</form>
