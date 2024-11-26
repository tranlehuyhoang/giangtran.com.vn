<?php

namespace App\Livewire\Page;

use Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class Home extends Component
{

    use LivewireAlert;
    public function mount()
    {
        // $this->dispatch('showModalLogout');
    }
    public function showModalLogout()
    {
        $this->dispatch('showModalLogout');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/home');
    }
    public function render()
    {
        return view('livewire.page.home');
    }
}
