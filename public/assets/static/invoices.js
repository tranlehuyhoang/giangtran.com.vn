function ShowHoaDon(invoices, user_name) {
    // Nếu không có hóa đơn nào, hiển thị thông báo tương ứng
    const hasInvoices = invoices.length > 0;
    const invoiceList = hasInvoices ?
        invoices.map(invoice => `
            <div class="card">
                <div class="card-body faq-body">
                    <a href="/hoa-don/${invoice.invoice_code}">
                        <div class="d-flex updates-faq-main">
                            <div class="flex-grow-1 updates-bottom-time">
                                <p class="txt-dark"> Hóa Đơn <strong>#${invoice.invoice_code}</strong>, Số Tiền: <strong class="txt-danger">${ invoice.amount.toLocaleString()}<sup>đ</sup></strong></p>
                                <p> Thời Gian Tạo: ${new Date(invoice.invoice_date).toLocaleString()} </p>
                            </div>
                            <b class="text-warning"> Chờ Thanh Toán </b>
                        </div>
                    </a>
                </div>
            </div>
        `).join('') :
        `<p class="text-sm-center"> Bạn chưa có hóa đơn nào, hãy bắt đầu thực hiện giao dịch mới ngay nào! </p>`;

    const modalHoadon = `
    <div class="modal fade" id="modalHoaDon" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-toggle-wrapper">
                        <h4> ${user_name} ơi, Bạn Có <strong class="txt-danger"> ${invoices.length} Hóa Đơn </strong> Chờ Thanh Toán! </h4>
                        <div class="col-lg-12 mt-3" id="dmm_box">
                            ${invoiceList}
                        </div>
                        <div class="modal-img" style="margin-top: -55px;">
                            <img src="/assets/images/gif/online-shopping.gif" alt="online-shopping">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>`;

    document.body.insertAdjacentHTML('beforeend', modalHoadon);

    var myModal = new bootstrap.Modal(document.getElementById('modalHoaDon'), {
        keyboard: false
    });
    myModal.show();
}

// Cập nhật số lượng hóa đơn
document.getElementById("number_bill").innerHTML = "0"; // Bạn có thể cập nhật giá trị này từ dữ liệu thực tế
