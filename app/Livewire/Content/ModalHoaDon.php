<?php

namespace App\Livewire\Content;

use Livewire\Component;
use App\Models\Invoice as InvoiceModel;

class ModalHoaDon extends Component
{
    public $invoices;

    public function mount()
    {
        $this->loadInvoices();
    }

    public function removeInvoice($invoice_code)
    {
      $result = InvoiceModel::removeInvoice($invoice_code);
    //   $this->dispatch('showModalAlert', [
    //     'title' => $result['status'] == 'success' ? 'Thành công' : 'Thất bại',
    //     'message' => $result['message'],
    // ]);
    // redirect('/home');
    }

    public function loadInvoices()
    {
        $this->invoices = InvoiceModel::getInvoicesByUser();
    }

    public function render()
    {
        return view('livewire.content.modal-hoa-don', [
            'invoices' => $this->invoices,
        ]);
    }
}
