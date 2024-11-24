<?php

namespace App\Livewire\Inc\Header;

use Livewire\Component;
use App\Models\Invoice as InvoiceModel;
use Illuminate\Support\Facades\Auth;

class Invoice extends Component
{
    public $invoices;

    public function mount()
    {
        $this->loadInvoices();
    }

    public function loadInvoices()
    {
        $this->invoices = InvoiceModel::getInvoicesByUser();
    }

    public function render()
    {
        return view('livewire.inc.header.invoice', [
            'invoices' => $this->invoices,
        ]);
    }
}
