<form wire:submit.prevent="sendResetLink" wire:loading.attr="disabled">
    <input class="form-control" type="email" id="email"
        placeholder="Email Khôi Phục" style="background-color: white;"
        autocomplete="new-email" wire:model="email" value="">
</form>