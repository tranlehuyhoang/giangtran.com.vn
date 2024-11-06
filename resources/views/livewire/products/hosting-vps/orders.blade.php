<div>
    <div>
        <div>

            <head>

            </head>

            <body>
                <!-- loader ends-->
                <!-- tap on top starts-->
                <div class="tap-top"><i data-feather="chevrons-up"></i></div>
                <!-- tap on tap ends-->
                <!-- page-wrapper Start-->
                <div class="page-wrapper compact-wrapper" id="pageWrapper">
                    @livewire('inc.header')

                    <!-- Page Body Start-->
                    <div class="page-body-wrapper">
                        <!-- Page Sidebar Start-->
                        @livewire('inc.sidebar')
                        <!-- Page Sidebar Ends-->
                        <div class="page-body">
                            <!-- Container-fluid starts-->
                            <div class="container-fluid">
                                <div class="row">
                                    {{-- --}}
                                    <div class="container-fluid">
                                        <div class="row">
                                   
                                    
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Sản phẩm đã chọn </h4>
                                                        <p class="f-m-light mt-1">
                                                            PREMIUM  1</p>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="vertical-main-wizard">
                                                            <div class="row g-3">
                                                                <div class="col-xxl-3 col-xl-4 col-12">
                                                                    <div class="nav flex-column header-vertical-wizard"
                                                                        id="wizard-tab" role="tablist"
                                                                        aria-orientation="vertical"><a
                                                                            class="nav-link active"
                                                                            id="wizard-contact-tab"
                                                                            data-bs-toggle="pill" href="#wizard-contact"
                                                                            role="tab" aria-controls="wizard-contact"
                                                                            aria-selected="true">
                                                                            <div class="vertical-wizard">
                                                                                <div class="stroke-icon-wizard"><i
                                                                                        class="fa fa-user"></i></div>
                                                                                <div class="vertical-wizard-content">
                                                                                    <h6>Thông tin gói</h6>
                                                                                    <p>PREMIUM 1 </p>
                                                                                </div>
                                                                            </div>
                                                                        </a><a class="nav-link" id="wizard-cart-tab"
                                                                            data-bs-toggle="pill" href="#wizard-cart"
                                                                            role="tab" aria-controls="wizard-cart"
                                                                            aria-selected="false">
                                                                            <div class="vertical-wizard">
                                                                                <div class="stroke-icon-wizard"><i
                                                                                        class="fa fa-chain-broken"></i>
                                                                                </div>
                                                                                <div class="vertical-wizard-content">
                                                                                    <h6>Chu kỳ thanh toán</h6>
                                                                                    <p>Chọn chu kì thanh toán</p>
                                                                                </div>
                                                                            </div>
                                                                        </a><a class="nav-link" id="wizard-banking-tab"
                                                                            data-bs-toggle="pill" href="#wizard-banking"
                                                                            role="tab" aria-controls="wizard-banking"
                                                                            aria-selected="false">
                                                                            <div class="vertical-wizard">
                                                                                <div class="stroke-icon-wizard"><i
                                                                                        class="fa fa-group"></i></div>
                                                                                <div class="vertical-wizard-content">
                                                                                    <h6>Thanh toán</h6>
                                                                                    <p>Số tiền: 1000.000đ</p>
                                                                                </div>
                                                                            </div>
                                                                        </a></div>
                                                                </div>
                                                                <div class="col-xxl-9 col-xl-8 col-12">
                                                                    <div class="tab-content" id="wizard-tabContent">
                                                                        <div class="tab-pane fade show active"
                                                                            id="wizard-contact" role="tabpanel"
                                                                            aria-labelledby="wizard-contact-tab">
                                                                            <form class="row g-3 needs-validation custom-input" novalidate="">
                                                                                <div class="col-xxl-6 col-sm-6">
                                                                                    <label class="form-label">Miền Con: <span class="form-control-plaintext">Không Giới Hạn</span></label>
                                                                                </div>
                                                                                <div class="col-xxl-6 col-sm-6">
                                                                                    <label class="form-label">Miền Phụ: <span class="form-control-plaintext">Không Giới Hạn</span></label>
                                                                                </div>
                                                                                <div class="col-xxl-6 col-sm-6">
                                                                                    <label class="form-label">Băng Thông: <span class="form-control-plaintext">Không Giới Hạn</span></label>
                                                                                </div>
                                                                                <div class="col-xxl-6 col-sm-6">
                                                                                    <label class="form-label">SQL: <span class="form-control-plaintext">Giới hạn</span></label>
                                                                                </div>
                                                                                <div class="col-xxl-6 col-sm-6">
                                                                                    <label class="form-label">Tốc độ: <span class="form-control-plaintext">Không giới hạn</span></label>
                                                                                </div>
                                                                                <div class="col-xxl-6 col-sm-6">
                                                                                    <label class="form-label">Ngôn ngữ: <span class="form-control-plaintext">Việt Nam</span></label>
                                                                                </div>
                                                                                <div class="col-xxl-6 col-sm-6">
                                                                                    <label class="form-label">Địa chỉ máy chủ: <span class="form-control-plaintext">Việt Nam</span></label>
                                                                                </div>
                                                                                <div class="col-12 text-end">
                                                                                    <button class="btn btn-primary">Next</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="wizard-cart"
                                                                            role="tabpanel"
                                                                            aria-labelledby="wizard-cart-tab">
                                                                            <form
                                                                                class="row g-3 needs-validation custom-input"
                                                                                novalidate="">
                                                                                <div class="col-xxl-6">
                                                                                    <div class="card-wrapper border rounded-3">
                                                                                        <h6 class="sub-title">Chọn chu kỳ thanh toán</h6>
                                                                                        <div class="radio-form">
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input" id="paymentCycle1" type="radio" name="paymentCycle" value="1-month" checked>
                                                                                                <label class="form-check-label" for="paymentCycle1">1 Tháng - 5.000</label>
                                                                                            </div>
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input" id="paymentCycle2" type="radio" name="paymentCycle" value="2-month">
                                                                                                <label class="form-check-label" for="paymentCycle2">2 Tháng - 10.000</label>
                                                                                            </div>
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input" id="paymentCycle3" type="radio" name="paymentCycle" value="3-month">
                                                                                                <label class="form-check-label" for="paymentCycle3">3 Tháng - 15.000</label>
                                                                                            </div>
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input" id="paymentCycle4" type="radio" name="paymentCycle" value="6-month">
                                                                                                <label class="form-check-label" for="paymentCycle4">6 Tháng - 30.000</label>
                                                                                            </div>
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input" id="paymentCycle5" type="radio" name="paymentCycle" value="9-month">
                                                                                                <label class="form-check-label" for="paymentCycle5">9 Tháng - 45.000</label>
                                                                                            </div>
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input" id="paymentCycle6" type="radio" name="paymentCycle" value="12-month">
                                                                                                <label class="form-check-label" for="paymentCycle6">12 Tháng - 60.000</label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                             
                                                                                <div class="col-12 text-end">
                                                                                    <button
                                                                                        class="btn btn-primary">Previous</button>
                                                                                    <button
                                                                                        class="btn btn-primary">Next</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="tab-pane fade custom-input"
                                                                            id="wizard-banking" role="tabpanel"
                                                                            aria-labelledby="wizard-banking-tab">
                                                                            <form class="row g-3 mb-3 needs-validation"
                                                                                novalidate="">
                                                                                <div class="col-md-12">
                                                                                    <div class="accordion dark-accordion"
                                                                                        id="accordionExample-a">
                                                                                        <div class="accordion-item">
                                                                                            <h2 class="accordion-header"
                                                                                                id="headingOne-a">
                                                                                                <button
                                                                                                    class="accordion-button collapsed accordion-light-primary txt-primary"
                                                                                                    type="button"
                                                                                                    data-bs-toggle="collapse"
                                                                                                    data-bs-target="#collapseOne-a"
                                                                                                    aria-expanded="true"
                                                                                                    aria-controls="collapseOne-a">NET
                                                                                                    BANKING<i
                                                                                                        class="svg-color"
                                                                                                        data-feather="chevron-down"></i></button>
                                                                                            </h2>
                                                                                            <div class="accordion-collapse collapse"
                                                                                                id="collapseOne-a"
                                                                                                aria-labelledby="headingOne-a"
                                                                                                data-bs-parent="#accordionExample-a">
                                                                                                <div
                                                                                                    class="accordion-body weight-title card-wrapper">
                                                                                                    <h6
                                                                                                        class="sub-title f-14">
                                                                                                        SELECT YOUR BANK
                                                                                                    </h6>
                                                                                                    <div
                                                                                                        class="row choose-bank">
                                                                                                        <div
                                                                                                            class="col-sm-6">
                                                                                                            <div
                                                                                                                class="form-check radio radio-primary">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    id="flexRadioDefault-z"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault-v">
                                                                                                                <label
                                                                                                                    class="form-check-label"
                                                                                                                    for="flexRadioDefault-z">Industrial
                                                                                                                    &
                                                                                                                    Commercial
                                                                                                                    Bank</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="form-check radio radio-primary">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    id="flexRadioDefault-y"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault-v">
                                                                                                                <label
                                                                                                                    class="form-check-label"
                                                                                                                    for="flexRadioDefault-y">Agricultural
                                                                                                                    Bank</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="form-check radio radio-primary">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    id="flexRadioDefault-x"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault-v"
                                                                                                                    checked="">
                                                                                                                <label
                                                                                                                    class="form-check-label"
                                                                                                                    for="flexRadioDefault-x">JPMorgan
                                                                                                                    Chase
                                                                                                                    &
                                                                                                                    Co.</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-sm-6">
                                                                                                            <div
                                                                                                                class="form-check radio radio-primary">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    id="flexRadioDefault-w"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault-v">
                                                                                                                <label
                                                                                                                    class="form-check-label"
                                                                                                                    for="flexRadioDefault-w">Construction
                                                                                                                    Bank
                                                                                                                    Corp.</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="form-check radio radio-primary">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    id="flexRadioDefault-v"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault-v">
                                                                                                                <label
                                                                                                                    class="form-check-label"
                                                                                                                    for="flexRadioDefault-v">Bank
                                                                                                                    of
                                                                                                                    America</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="form-check radio radio-primary">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    id="flexRadioDefault-u"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault-v">
                                                                                                                <label
                                                                                                                    class="form-check-label"
                                                                                                                    for="flexRadioDefault-u">HDFC
                                                                                                                    Bank</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <textarea class="form-control"
                                                                                        id="validationTextarea24"
                                                                                        placeholder="Your Feedback"
                                                                                        required=""></textarea>
                                                                                    <div class="invalid-feedback">Please
                                                                                        enter a message in the textarea.
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-check mb-0">
                                                                                        <input class="form-check-input"
                                                                                            id="invalidCheck67"
                                                                                            type="checkbox" value=""
                                                                                            required="">
                                                                                        <label
                                                                                            class="form-check-label mb-0"
                                                                                            for="invalidCheck67">Agree
                                                                                            to terms and
                                                                                            conditions</label>
                                                                                        <div class="invalid-feedback">
                                                                                            You must agree before
                                                                                            submitting.</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 text-end">
                                                                                    <button
                                                                                        class="btn btn-success">Finish</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Container-fluid Ends-->
                        </div>

                        <!-- footer start-->
                        @livewire('inc.footer')
                    </div>
                </div>

        </div>
    </div>
    <script src="/mofi/assets/js/form-wizard/form-wizard.js"></script>
</div>