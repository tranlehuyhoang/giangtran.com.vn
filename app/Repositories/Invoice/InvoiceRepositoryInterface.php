<?php
namespace App\Repositories\Invoice;

use App\Repositories\RepositoryInterface;

interface InvoiceRepositoryInterface extends RepositoryInterface
{
    public function getInvoicesByUser($userId = null);
    public function createInvoice(array $data);
    public function hasUnpaidInvoices($userId = null);
    public function updateInvoicePayment($invoice_code, $user_id);
    public function removeInvoice($invoice_code);
    public function countInvoicesByUser($userId = null);


}
