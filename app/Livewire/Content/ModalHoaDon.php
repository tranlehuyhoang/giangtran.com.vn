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
        // dd($this->invoices);
         #attributes: array:10 [▼
    //      "id" => 2
    //      "invoice_code" => "363612"
    //      "invoice_type" => "Đăng Ký Dịch Vụ"
    //      "service" => "763 - TikTok Followers | Instant | 10000 Per Day | Real &amp; Bot Data ⚡⛔ - ≈ 33024.265 ₫ per 1000"
    //      "invoice_date" => "2024-11-24 12:11:14"
    //      "amount" => "20000000.00"
    //      "payment_due_date" => "2024-11-24 12:14:14"
    //      "created_at" => "2024-11-24 12:11:14"
    //      "updated_at" => "2024-11-24 12:11:14"
    //      "user_id" => 1
    //    ]
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
