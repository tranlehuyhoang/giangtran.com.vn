<?php

namespace App\Livewire\Page;

use Livewire\Component;
use Livewire\Attributes\Layout;

class DieuKhoan extends Component
{
    #[Layout('components.layouts.default')]
    public function render()
    {
        return view('livewire.page.dieu-khoan');
    }
}
