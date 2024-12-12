<form wire:submit="sendResetLink" wire:loading.attr="disabled">
    <input class="form-control" type="email" id="email"
        placeholder="Email Khôi Phục" style="background-color: white;"
        autocomplete="new-email" wire:model="email">
    <button type="submit" class="btn btn-primary">Gửi Link Khôi Phục</button>
</form>
