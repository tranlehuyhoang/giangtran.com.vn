<div class="pricing-content">
    <div class="row g-sm-4 g-3">

        <div class="col-md-8">
            <div class="card title-line">
                <div class="card-header card-no-border">
                    <h2> Đăng Ký Dịch Vụ </h2>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <label> Phương Thức Thanh Toán </label>






                        <div class="card-wrapper border rounded-3 checkbox-checked">
                            <div class="radio-form">
                                <div class="form-check">
                                    <input class="form-check-input" id="radio14" type="radio" name="radio-stacked" disabled onchange="Method_payment()">
                                    <label class="form-check-label" for="radio14"> Số Dư Tài Khoản (0<sup>đ</sup>) </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="radio13" type="radio" name="radio-stacked" checked="" onchange="Method_payment()">
                                    <label class="form-check-label" for="radio13"> Chuyển Khoản Ngân Hàng </label>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="payment_method" name="payment_method" value="">

                        <script>
                            function Method_payment() {
                                var payment_balance = document.getElementById("radio14");
                                var payment_bank = document.getElementById("radio13");

                                if (payment_balance.checked) {
                                    document.getElementById("payment_method").value = 'payment_balance';
                                }

                                if (payment_bank.checked) {
                                    document.getElementById("payment_method").value = 'payment_bank';
                                }
                            }

                            function amountIsMoney(price, vpstype = false) {
                                var mn = document.getElementById("mn").value;
                                if (price <= mn) {
                                    document.getElementById("radio14").disabled = false;
                                    !vpstype ? document.getElementById("radio14").checked = true : null;

                                    Method_payment();
                                } else if (price > mn) {
                                    document.getElementById("radio14").disabled = true;
                                    document.getElementById("radio13").checked = true;

                                    Method_payment();
                                }
                            }

                            setTimeout(() => {
                                Method_payment();
                            }, 100)
                        </script>


                    </div>

                    <div class="mt-3"></div>



                    <div class="form-group">
                        <label for="categories">Danh Mục  
                            <img id="selected-category-image" src="" alt="" style="width: 20px; height: 20px;">
                        </label>
                        <input type="hidden" id="cycle_max" value="12">
                        
                        <select class="form-control" id="categories" wire:model.live="selectedCategory">
                            <option value="">--Chọn Danh Mục--</option>
                            @foreach($categories as $category)
                                <option value="{{ $category['id'] }}" data-image="{{ Storage::url($category['image']) }}">
                                    {{ $category['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const categorySelect = document.getElementById('categories');
                        const categoryImage = document.getElementById('selected-category-image');
                        
                        categorySelect.addEventListener('change', function() {
                            const selectedOption = categorySelect.options[categorySelect.selectedIndex];
                            const imageUrl = selectedOption.getAttribute('data-image');
                    
                            // Cập nhật hình ảnh
                            categoryImage.src = imageUrl;
                        });
                    });
                    </script>
                    
                    <div class="form-group mt-3">
                        <label>Dịch Vụ</label>
                        <select class="form-control" wire:model.live="selectedService">
                            <option value="">--Chọn Dịch Vụ--</option>
                            @foreach($services as $service)
                                    <option {{ $service->smmcategory_id == $selectedCategory ? 'disabled hidden' : '' }} value="{{ $service->id }}">{{ $service->name }} - {{ $service->price }} VNĐ</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label> Link </label>
                        <input type="hidden" id="cycle_max" value="12">
                        <input class="form-control" id="domain" placeholder="Link" wire:model="link">
                    </div>
                    <div class="form-group mt-3">
                        <label> Số Lượng </label>

                        <div class="touchspin-wrapper">
                            <button class="decrement-touchspin btn-touchspin touchspin-dark" onclick="Cong();"><i class="fa fa-minus"></i></button>
                            <input class="input-touchspin spin-outline-dark" id="chuky" type="number" value="2" onchange="checkPrice();" wire:model="quantity">
                            <button class="increment-touchspin btn-touchspin touchspin-dark" onclick="Tru();"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>


                    <input type="hidden" id="price" value="6000">

                    <div class="form-group mt-3">

                        <div class="checkbox p-0">
                            <input id="dieuKhoan" type="checkbox" checked>
                            <label class="text-muted" for="dieuKhoan"> Đồng Ý Với </label> <a href="/dieu-khoan" class="txt-primary"> Điều Khoản Sử Dụng Dịch Vụ </a>
                        </div>
                        <button class="btn btn-primary mt-2" wire:click="submitOrder" id="payment"><i class="fa fa-shopping-cart me-1"></i> Thanh Toán </span></button>
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card title-line">
                <div class="card-header card-no-border">
                    <h2> Thông Tin Dịch Vụ </h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive custom-scrollbar">
                        <table class="col-12">

                            <tfoot>
                                <tr>
                                    <td> Dịch Vụ:</td>
                                    <td colspan="2" class="txt-primary"> VIETNAM #STARTUP </td>
                                </tr>
                                <tr>
                                    <td> Chu Kỳ Đăng Ký :</td>
                                    <td colspan="2" id="chuky-show">0 Tháng</td>
                                </tr>
                                <tr>
                                    <td>Khuyến Mãi:</td>
                                    <td colspan="2" id="discount-show"> Không </td>
                                </tr>
                                <tr>
                                    <td> Tổng Thanh Toán (VND) :</td>
                                    <td colspan="2" id="amount-total">0</td>
                                </tr>
                            </tfoot>



                        </table>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="input-group">
                            <input class="form-control me-2" type="text" id="discount" placeholder="Mã Khuyến Mãi (Nếu Có)"><button onclick="appyDiscount('btnApply', 'Áp Dụng', 'startup');" class="btn btn-primary" id="btnApply"> Áp Dụng </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <input type="hidden" id="id" value="19">
        <input type="hidden" id="idPresent" value="">

    </div>
</div>