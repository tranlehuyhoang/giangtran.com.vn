<?php

namespace App\Livewire\Page;

use Livewire\Component;
use App\Models\Invoice as InvoiceModel;
class Invoice extends Component
{
    public $invoice ;

    public function mount($id)
    {
        $this->invoice = InvoiceModel::where('invoice_code', $id)->first();
    }

    public function render()
    {
        return view('livewire.page.invoice');
    }
}
