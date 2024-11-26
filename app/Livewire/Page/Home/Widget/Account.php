<?php

namespace App\Livewire\Page\Home\Widget;

use Livewire\Component;

class Account extends Component
{
    public function showModalLogout()
    {
        $this->dispatch('showModalLogout');
    }
    public function render()
    {
        return view('livewire.page.home.widget.account');
    }
}
