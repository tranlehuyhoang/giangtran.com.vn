<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="/home"><img loading="lazy" class="img-fluid" src="/logo/giangtran.com.vn.png"
                    style="height: 40px;" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="/home"><img loading="lazy" class="img-fluid" src="/logo/icon.png"
                    width="35px;" alt=""></a></div>
        <div class="profile-section sidebar-search">


            <div class="profile-wrapper">
                <div class="active-profile"> <img loading="lazy" class="img-fluid" src="/logo/avatar.png" alt="user">
                    <div class="status bg-success"> </div>
                </div>
                <div>
                    <h4> {{ $name }} </h4><span> Số Dư:
                        {{ App\Helpers\FormatHelper::formatCurrency($balance) }}
                        <sup>đ</sup> </span>
                </div>
            </div>

            <div>
                <a href="/profile" wire:navigate>
                    <svg>
                        <use href="/assets/assets/svg/icon-sprite.svg#profile-setting"></use>
                    </svg>
                </a>
            </div>


        </div>

        <div class="sidebar-search">
            <div class="input-group"><span class="input-group-text" id="sidebar-search">
                    <svg>
                        <use href="/assets/assets/svg/icon-sprite.svg#search"></use>
                    </svg></span>
                <input class="form-control" type="text" placeholder="Tìm Kiếm" aria-label="search"
                    aria-describedby="sidebar-search">
            </div>
        </div>

        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="/home"><img loading="lazy" class="img-fluid" src="/logo/icon.png"
                                width="35px;" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>- Pinned</h6>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" id="homeHref" wire:navigate href="/home">
                            <svg class="stroke-icon">
                                <use href="/assets/assets/svg/icon-sprite.svg#stroke-home"></use>
                            </svg>
                            <span> Trang Chủ </span>
                        </a>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                            href="#">
                            <svg class="stroke-icon">
                                <use href="/assets/assets/svg/icon-sprite.svg#stroke-social"></use>
                            </svg>

                            <span class="lan-6"> Tăng Tương Tác </span></a>
                        <ul class="sidebar-submenu">



                            <li><a wire:navigate href="/smm/create"> Danh sách dịch vụ </a></li>



                            <li><a wire:navigate href="/smm/manager"> Quản Lý </a></li>



                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                            href="#">
                            <svg class="stroke-icon">
                                <use href="/assets/assets/svg/icon-sprite.svg#stroke-social"></use>
                            </svg>

                            <span class="lan-6"> Mã Nguồn  </span></a>
                        <ul class="sidebar-submenu">



                            <li><a wire:navigate href="/source-code/list"> Danh sách mã nguồn </a></li>



                            <li><a wire:navigate href="/source-code/manager"> Quản Lý </a></li>



                        </ul>
                    </li>
                    {{-- <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="/assets/assets/svg/icon-sprite.svg#stroke-table"></use>
                            </svg>

                            <span class="lan-6"> Hosting Lưu Trữ </span></a>
                        <ul class="sidebar-submenu">

                            <li><a href="/hosting/vn-premium"> Máy Chủ VN NVMe </a></li>


                            <li><a href="/hosting/ca"> Máy Chủ Canada </a></li>



                            <li><a href="/manage/hosting"> Quản Lý </a></li>



                        </ul>
                    </li>





                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="/assets/assets/svg/icon-sprite.svg#stroke-icons"></use>
                            </svg>
                            <span> Cloud VPS </span>
                            <div class="according-menu">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </a>

                        <ul class="sidebar-submenu" style="display: none;">
                            <li><a class="submenu-title submenu-wrapper" href="#"> VPS VN <span
                                        class="sub-arrow"><i
                                            class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-su submenu-content">
                                    <li><a href="/vps-store/cloud-vps-viet-nam/cloud-vps-pro">CLOUD
                                            VPS PRO</a></li>
                                </ul>
                            </li>


                            <li><a href="/manage/vps"> Quản Lý </a></li>
                        </ul>
                    </li>


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="/assets/assets/svg/icon-sprite.svg#stroke-maps"></use>
                            </svg>

                            <span class="lan-7"> Mã Nguồn </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="/kho-ma-nguon"> Mua Mã Nguồn </a></li>


                            <li><a href="/manage/code"> Code Đã Mua </a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="/assets/assets/svg/icon-sprite.svg#stroke-animation"></use>
                            </svg>

                            <span class="lan-7"> Cronjob </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="/thue-cron"> Thuê Cronjob </a></li>
                            <li><a href="/manage/cronjob"> Quản Lý </a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="/assets/assets/svg/icon-sprite.svg#stroke-user"></use>
                            </svg>
                            <span> Tài Khoản </span>
                        </a>

                        <ul class="sidebar-submenu">
                            <li><a href="/profile"> Hồ Sơ </a></li>
                            <li><a href="/login"> Đăng Xuất </a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="/assets/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <span> Tiếp Thị Liên Kết </span>
                        </a>

                        <ul class="sidebar-submenu">
                            <li><a href="/tiep-thi-lien-ket"> Thống Kê </a></li>
                            <li><a href="/rut-tien"> Rút Tiền </a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="/nap-card">
                            <svg class="stroke-icon">
                                <use href="/assets/assets/svg/icon-sprite.svg#stroke-sample-page"></use>
                            </svg>
                            <span> Nạp Thẻ </span>
                        </a>
                    </li> --}}

                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" wire:navigate href="/chuyen-khoan">
                            <svg class="stroke-icon">
                                <use href="/assets/assets/svg/icon-sprite.svg#stroke-starter-kit"></use>
                            </svg>
                            <span> Nạp Ngân Hàng </span>
                        </a>
                    </li>

                    {{-- <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="/api-client">
                            <svg class="stroke-icon">
                                <use href="/assets/assets/svg/icon-sprite.svg#stroke-knowledgebase"></use>
                            </svg>
                            <span> Kết Nối API </span>
                        </a>
                    </li> --}}

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
