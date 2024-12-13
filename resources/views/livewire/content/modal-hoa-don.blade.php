<div class="modal fade" id="modalHoaDon" tabindex="-1" aria-labelledby="modalHoaDon" aria-labelledby="modalHoaDon"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <h4>{{ auth()->user()->name ?? 'Khách Hàng' }}, Bạn Có <strong
                            class="txt-danger">{{ $countInvoices  }} Hóa
                            Đơn </strong> Chờ Thanh Toán!</h4>
                    @if ($invoices->isNotEmpty())
                        <div class="col-lg-12 mt-3" id="dmm_box">
                            @foreach ($invoices as $invoice)
                                <div class="card">
                                    <div class="card-body faq-body">
                                        <a href="/hoa-don/{{ $invoice->invoice_code }}">
                                            <div class="d-flex updates-faq-main">
                                                <div class="flex-grow-1 updates-bottom-time">
                                                    <p class="txt-dark"> Hóa Đơn
                                                        <strong>#{{ $invoice->invoice_code }}</strong>, Số Tiền: <strong
                                                            class="txt-danger">{{ App\Helpers\FormatHelper::formatCurrency($invoice->amount) }}<sup>đ</sup></strong>
                                                    </p>
                                                    <p> Thời Gian Tạo:
                                                        {{ \Carbon\Carbon::parse($invoice->invoice_date)->format('m/d/Y, h:i:s A') }}
                                                    </p>
                                                    {{-- <p> Hạn Thanh Toán:
                                                        {{ \Carbon\Carbon::parse($invoice->payment_due_date)->format('m/d/Y, h:i:s A') }}
                                                    </p> --}}
                                                </div>
                                                @if ($invoice->payment_status == 'paid')
                                                    <b class="text-success"> Đã Thanh Toán <span
                                                        style="
                                                        position: absolute;
                                                        top: -8px;
                                                    "
                                                            wire:click="removeInvoice({{ $invoice->invoice_code }})"
                                                            class="text-danger">

                                                        </span> </b>
                                                @else
                                                    <b class="text-warning"> Chờ Thanh Toán <span
                                                            style="
                                                                position: absolute;
                                                                top: -8px;
                                                            "
                                                            wire:click="removeInvoice({{ $invoice->invoice_code }})"
                                                            class="text-danger">

                                                        </span> </b>
                                                @endif
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                    @endif
                    <div class="modal-img mt-3">
                        <img src="/assets/images/gif/online-shopping.gif" alt="online-shopping">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
