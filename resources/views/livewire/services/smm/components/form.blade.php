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
                                    <input class="form-check-input" id="radio14" type="radio" name="radio-stacked" wire:model.live="paymentMethod" value="account_balance" checked >
                                    <label class="form-check-label" for="radio14"> Số Dư Tài Khoản ({{ App\Helpers\FormatHelper::formatCurrency($balance) }}<sup>đ</sup>) </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="radio13" type="radio" name="radio-stacked" wire:model.live="paymentMethod" value="bank_transfer" >
                                    <label class="form-check-label" for="radio13"> Chuyển Khoản Ngân Hàng </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3"></div>



                    <div class="form-group">
                        <label for="categories">Danh Mục
                            <img id="selected-category-image" src="{{ Storage::url($image) }}" alt="" style="width: 20px; height: 20px;">
                        </label>
                        <input type="hidden" id="cycle_max" value="12">

                        <select class="form-control" id="categories" wire:model.live="selectedCategory">
                            @foreach($categories as $category)
                                <option value="{{ $category['id'] }}" data-image="{{ Storage::url($category['image']) }}">
                                    {{ $category['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label>Dịch Vụ</label>
                        <select class="form-control" wire:model.live="selectedService">
                            <option value="">--Chọn Dịch Vụ--</option>
                            @foreach($services as $service)
                                    <option   value="{{ $service->id }}">{{ $service->name }} - {{ $service->price }} VNĐ</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label> Link </label>
                        <input type="hidden" id="cycle_max" value="12">
                        <input class="form-control" id="domain" placeholder="Link" wire:model.live="link">
                    </div>
                    <div class="form-group mt-3">
                        <label> Số Lượng </label>

                        <div class="touchspin-wrapper">
                            <input class="input-touchspin spin-outline-dark" id="chuky" type="number" value="1000" wire:model.live="quantity">
                            <button class="increment-touchspin btn-touchspin touchspin-dark" wire:click="incrementQuantity(1000)"><i class="fa fa-plus"></i></button>

                            <!-- Thêm các nút tăng số lượng -->
                        </div>
                    </div>


                    <input type="hidden" id="price" value="6000">

                    <div class="form-group mt-3">

                        <div class="checkbox p-0">
                            <input id="dieuKhoan" type="checkbox" checked>
                            <label class="text-muted" for="dieuKhoan"> Đồng Ý Với </label> <a href="/dieu-khoan" class="txt-primary"> Điều Khoản Sử Dụng Dịch Vụ </a>
                        </div>
                        <button class="btn btn-primary mt-2" wire:click="submitOrder" id="payment" wire:loading.attr="disabled"><i class="fa fa-shopping-cart me-1" wire:loading.class="fa fa-spinner fa-spin"></i> Thanh Toán </span></button>
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
                                    <td colspan="2" class="txt-primary"> {{ $categories->where('id', $selectedCategory)->first()->name }} </td>
                                </tr>
                                <tr>
                                    <td> Giá Dịch Vụ :</td>
                                    <td colspan="2" id="chuky-show"> {{ App\Helpers\FormatHelper::formatCurrency(isset($services->where('id', $selectedService)->first()->price) ? $services->where('id', $selectedService)->first()->price : 0) }} VNĐ </td>
                                </tr>
                                <tr>
                                    <td>Số Lượng:</td>
                                    <td colspan="2" id="discount-show"> {{ $quantity }} </td>
                                </tr>
                                <tr>
                                    <td> Tổng Thanh Toán (VND) :</td>
                                    <td colspan="2" id="amount-total">
                                        {{
                                            App\Helpers\FormatHelper::formatCurrency(
                                                isset($services->where('id', $selectedService)->first()->price) ?
                                                floatval($services->where('id', $selectedService)->first()->price) * intval($quantity) :
                                                0
                                            )
                                        }} VNĐ
                                    </td>
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
