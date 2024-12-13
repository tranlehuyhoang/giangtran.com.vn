<?php

namespace App\Livewire\Content;

use App\Repositories\Invoice\InvoiceRepositoryInterface;
use Livewire\Component;
use App\Models\Invoice as InvoiceModel;

class ModalHoaDon extends Component
{
    public $invoices;
    public $countInvoices;
    protected $invoiceRepository;
    public function mount(InvoiceRepositoryInterface $invoiceRepository)
    {
        $this->invoiceRepository = $invoiceRepository;
        $this->invoices = $this->invoiceRepository->getInvoicesByUser();
        $this->countInvoices = $this->invoiceRepository->countInvoicesByUser();
    }


    public function render()
    {
        return view('livewire.content.modal-hoa-don', [
            'invoices' => $this->invoices,
        ]);
    }
}
