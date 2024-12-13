<div class="pricing-content">

    <div class="row g-sm-4 g-3">

        <div class="col-md-8">
            <div class="card title-line">
                <div class="card-header card-no-border">
                    <h2> Đăng Ký Dịch Vụ </h2>
                </div>

                <div class="card-body">

                    @if (!empty($errors))
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        <label> Phương Thức Thanh Toán </label>
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                            <div class="radio-form">
                                <div class="form-check">
                                    <input class="form-check-input" id="radio14" type="radio" name="radio-stacked"
                                           wire:model="paymentMethod" value="account_balance" checked>
                                    <label class="form-check-label" for="radio14">
                                        Số Dư Tài Khoản ({{ App\Helpers\FormatHelper::formatCurrency($balance) }}<sup>đ</sup>)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="radio13" type="radio" name="radio-stacked"
                                           wire:model="paymentMethod" value="bank_transfer">
                                    <label class="form-check-label" for="radio13"> Chuyển Khoản Ngân Hàng </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3"></div>

                    <div class="form-group">
                        <label for="categories">Danh Mục</label>
                        <input type="hidden" id="cycle_max" value="12">
                        <select class="form-control" id="categories" wire:model="selectedCategory">
                            @foreach ($categories as $category)
                                <option value="{{ $category['id'] }}"
                                        data-image="{{ Storage::url($category->media->path) }}">
                                    {{ $category['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label>Gói Dịch Vụ</label>
                        <select class="form-control" id='services' wire:model="selectedService">
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">
                                    <strong>{{ $service->id }}</strong> - {{ $service->name }} - {{ $service->price }} VNĐ
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label>Link</label>
                        <input class="form-control" id="domain" placeholder="Link" wire:model="link">
                    </div>

                    <div class="form-group mt-3">
                        <label>Số Lượng</label>
                        <div class="input-group">
                            <input class="form-control" type="number" placeholder="Tối thiểu 1000 tối đa 10000"
                                   wire:model.live="quantity" min="{{ $selectedServiceMin }}"
                                   max="{{ $selectedServiceMax }}">
                                   <button class="btn btn-success" type="button">
                                    {{ number_format((float)$selectedServicePrice * (int)$quantity, 0, '.', '.') }} đ
                                </button>
                        </div>
                        <small class="form-text text-muted">
                            Tối thiểu: {{ number_format($selectedServiceMin, 0, '.', '.') }},
                            Tối đa: {{ number_format($selectedServiceMax, 0, '.', '.') }},
                            Thời gian dự kiến: {{ $selectedServiceTime }}/ 1000
                        </small>
                    </div>

                    <div class="form-group mt-3">
                        <div class="checkbox p-0">
                            <input id="dieuKhoan" type="checkbox" checked>
                            <label class="text-muted" for="dieuKhoan"> Đồng Ý Với </label>
                            <a href="/dieu-khoan" class="txt-primary"> Điều Khoản Sử Dụng Dịch Vụ </a>
                        </div>
                        <button class="btn btn-primary mt-2" wire:click="submitOrder" id="payment"
                                wire:loading.attr="disabled" wire:loading.class="disabled">
                            <i class="fa fa-shopping-cart me-1"></i>
                            <span wire:loading.remove>Thanh Toán</span>
                            <span wire:loading>Đang xử lý...</span>
                        </button>
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
                                    <td colspan="2" class="txt-primary">
                                        {{ $categories->where('id', $selectedCategory)->first()->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td> Giá Dịch Vụ :</td>
                                    <td colspan="2" id="chuky-show">
                                        {{ App\Helpers\FormatHelper::formatCurrency($selectedServicePrice) }}
                                        VNĐ
                                    </td>
                                </tr>
                                <tr>
                                    <td>Số Lượng:</td>
                                    <td colspan="2" id="discount-show">
                                        {{ number_format($quantity, 0, '.', '.') }} </td>
                                </tr>
                                <tr>
                                    <td> Tổng Thanh Toán (VND) :</td>
                                    <td colspan="2" id="amount-total">
                                        {{ number_format($selectedServicePrice * $quantity, 0, '.', '.') }}
                                        VNĐ
                                    </td>
                                </tr>
                            </tfoot>



                        </table>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="input-group">
                            <input class="form-control me-2" type="text" id="discount"
                                placeholder="Mã Khuyến Mãi (Nếu Có)"><button
                                onclick="appyDiscount('btnApply', 'Áp Dụng', 'startup');" class="btn btn-primary"
                                id="btnApply"> Áp Dụng </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @script
        <script>
            initializeSelect2()
            Livewire.on('select2:updated', () => {
                initializeSelect2();
            });

            $('#categories').on('change', function(e) {
                const selectedCategory = $(this).val(); // Lấy giá trị đã chọn
                console.log('Selected category:', selectedCategory); // Hiển thị trong console
                $wire.$set('selectedCategory', selectedCategory)
            });
            $('#services').on('change', function(e) {
                const selectedService = $(this).val(); // Lấy giá trị đã chọn
                console.log('Selected service:', selectedService); // Hiển thị trong console
                $wire.$set('selectedService', selectedService)
            });

            function formatState(state) {
                if (!state.id) {
                    return state.text;
                }
                const imageUrl = $(state.element).data('image');
                return $('<span><img src="' + imageUrl + '" class="img-flag" style="width: 20px; height: 20px;" /> ' + state
                    .text + '</span>');
            }

            function formatState1(state) {
                if (!state.id) {
                    return state.text;
                }
                return $('<span>  ' + state
                    .text + '</span>');
            }

            function initializeSelect2() {


                $(document).ready(function() {
                    $('#categories').select2({
                        templateResult: formatState,
                        templateSelection: formatState
                    });


                    $('#services').select2({
                        templateResult: formatState1,
                        templateSelection: formatState1
                    });
                });



            }
        </script>
    @endscript
</div>
