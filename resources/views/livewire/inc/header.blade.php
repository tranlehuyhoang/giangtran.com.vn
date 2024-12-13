<div>

    <div class="page-header row">

        <div class="col-auto header-left-wrapper">
            <div class="header-logo-wrapper p-0 left-header">
                <div class="logo-wrapper"><a href="/"><img loading="lazy" class="img-fluid"
                            src="/logo/giangtran.com.vn.png" style="height: 35px;"
                            alt=""></a></div>
            </div>
            <div class="toggle-sidebar">
                <svg class="status_toggle sidebar-toggle">
                    <use href="/assets/assets/svg/icon-sprite.svg#collapse-sidebar"></use>
                </svg>
            </div>
        </div>

        <div class="col-auto header-right-wrapper page-title">
            <div>
                <h2>{{ $title }} </h2>
                <nav>
                    <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                        <li class="breadcrumb-item"><a href="/"> {{ $description }} </a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="col header-wrapper m-0 header-right-wrapper">
            <div class="row m-0">
                <div class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100"
                                    type="text" placeholder="Search anything .." name="q" title=""
                                    autofocus="">
                                <div class="spinner-border Typeahead-spinner" role="status"><span
                                        class="sr-only">Loading...</span></div><i class="close-search"
                                    data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </div>

                <div class="header-logo-wrapper col-auto p-0 left-header"></div>

                <div class="nav-right col-auto pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus">
                        <li>
                            <span class="header-search">
                                <svg>
                                    <use href="/assets/assets/svg/icon-sprite.svg#search"></use>
                                </svg>
                            </span>
                        </li>

                        <li>
                            <div class="mode">
                                <svg class="moon-icon">
                                    <use href="/assets/assets/svg/icon-sprite.svg#moon"></use>
                                </svg>
                                <svg class="sun-icon">
                                    <use href="/assets/assets/svg/icon-sprite.svg#sun"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="cart-nav onhover-dropdown" data-bs-toggle="modal" data-bs-target="#modalHoaDon"   >
                            <div class="cart-box onhover-click">
                                <svg>
                                    <use href="/assets/assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                                </svg><span class="badge rounded-pill badge-primary"
                                    id="number_bill">{{ $countInvoices  }}</span>
                            </div>
                        </li>


                        <li class="profile-nav onhover-dropdown">


                            <div class="onhover-click">
                                <div class="sidebar-image"> <img loading="lazy" src="/logo/avatar.png"
                                        alt="profile"><span class="status status-success"></span></div>
                                <div class="sidebar-content">
                                    <h4>
                                        {{ $name }}
                                    </h4>
                                    <span class="f-12 f-w-600 f-light"> Số Dư:
                                        {{ App\Helpers\FormatHelper::formatCurrency($balance) }} <sup>đ</sup> </span>
                                </div>
                            </div>




                            <ul class="profile-dropdown onhover-show-div">

                                <li class="text-center d-block d-md-none">
                                    <span> Số Dư:    {{ App\Helpers\FormatHelper::formatCurrency($balance) }}<sup>đ</sup> </span>
                                </li>

                                @if (Auth::check())
                                <li>
                                    <a href="/profile" wire:navigate>
                                        <div class="profile-icon">
                                            <svg>
                                                <use href="/assets/assets/svg/icon-sprite.svg#user"></use>
                                            </svg>
                                        </div>
                                        <span> Hồ Sơ </span>
                                    </a>
                                </li>

                                <li>
                                    <a wire:click="showModalLogout" >
                                        <div class="profile-icon">
                                            <svg>
                                                <use href="/assets/assets/svg/icon-sprite.svg#login"></use>
                                            </svg>
                                        </div>
                                        <span> Đăng Xuất </span>
                                    </a>

                                </li>
                            @else
                                <li>
                                    <a href="/register">
                                        <div class="profile-icon">
                                            <svg>
                                                <use href="/assets/assets/svg/icon-sprite.svg#login"></use>
                                            </svg>
                                        </div>
                                        <span> Đăng Ký </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="/login">
                                        <div class="profile-icon">
                                            <svg>
                                                <use href="/assets/assets/svg/icon-sprite.svg#login"></use>
                                            </svg>
                                        </div>
                                        <span> Đăng Nhập </span>
                                    </a>
                                </li>
                            @endif


                            </ul>


                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
