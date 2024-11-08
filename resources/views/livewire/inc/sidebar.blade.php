<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="/" wire:navigate><img class="img-fluid"
                    src="/mofi/assets/images/logo/logo_light.png" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                    <use href="/mofi/assets/svg/icon-sprite.svg#toggle-icon"></use>
                </svg>
                <svg class="fill-icon sidebar-toggle status_toggle middle">
                    <use href="/mofi/assets/svg/icon-sprite.svg#fill-toggle-icon"></use>
                </svg>
            </div>
        </div>
        <div class="logo-icon-wrapper"><a href="/" wire:navigate><img class="img-fluid"
                    src="/mofi/assets/images/logo/logo-icon.png" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="/" wire:navigate><img class="img-fluid"
                                src="/mofi/assets/images/logo/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i>
                        </div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                        </div>
                    </li>


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="/dashboard" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-home"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-task"> </use>
                            </svg><span>Dashboard</span>
                            <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                        </a></li>


                    <li class="sidebar-main-title">
                        <div>
                            <h6>Sản Phẩm</h6>
                        </div>
                    </li>


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-project"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-project"></use>
                            </svg><span>Source code </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="/sources-code/home" wire:navigate>Danh sách Mã nguồn</a></li>

                            <li><a href="/sources-code/orders" wire:navigate>Mã nguồn đã mua</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-project"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-project"></use>
                            </svg><span>Dịch vụ MXH </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="/interaction/create" wire:navigate >Tạo đơn hàng</a></li>
                            <li><a href="/interaction/orders" wire:navigate >Quản lý đơn hàng</a></li>
                            <li><a href="/interaction/price-lists" wire:navigate >Bảng giá dịch vụ</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-project"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-project"></use>
                            </svg><span>Khóa Học </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="projects.html">Wordpress</a></li>
                            <li><a href="projectcreate.html">Laravel</a></li>
                            <li><a href="projectcreate.html">Codeigniter</a></li>
                            <li><a href="projectcreate.html">PHP</a></li>
                            <li><a href="projectcreate.html">Python</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-project"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-project"></use>
                            </svg><span>Tài Khoản </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="/account/list" wire:navigate>Danh sách tài khoản</a></li>
                            <li><a href="/account/orders" wire:navigate>Tài khoản đã mua</a></li>
                        </ul>
                    </li>


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-project"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-project"></use>
                            </svg><span>Vps Hosting </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="/hosting-vps/home" wire:navigate>Đăng ký dịch vụ</a></li>
                            <li><a href="/hosting-vps/orders" wire:navigate>Quản lý dịch vụ</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-project"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-project"></use>
                            </svg><span>Cron Job </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="projects.html">Wordpress</a></li>
                            <li><a href="projectcreate.html">Laravel</a></li>
                            <li><a href="projectcreate.html">Codeigniter</a></li>
                            <li><a href="projectcreate.html">PHP</a></li>
                            <li><a href="projectcreate.html">Python</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-project"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-project"></use>
                            </svg><span>Tut Trick </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="projects.html">Wordpress</a></li>
                            <li><a href="projectcreate.html">Laravel</a></li>
                            <li><a href="projectcreate.html">Codeigniter</a></li>
                            <li><a href="projectcreate.html">PHP</a></li>
                            <li><a href="projectcreate.html">Python</a></li>
                        </ul>
                    </li>


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-project"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-project"></use>
                            </svg><span>Mạng 5g </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="projects.html">Wordpress</a></li>
                            <li><a href="projectcreate.html">Laravel</a></li>
                            <li><a href="projectcreate.html">Codeigniter</a></li>
                            <li><a href="projectcreate.html">PHP</a></li>
                            <li><a href="projectcreate.html">Python</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-project"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-project"></use>
                            </svg><span>Đổi thẻ cào </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="projects.html">Wordpress</a></li>
                            <li><a href="projectcreate.html">Laravel</a></li>
                            <li><a href="projectcreate.html">Codeigniter</a></li>
                            <li><a href="projectcreate.html">PHP</a></li>
                            <li><a href="projectcreate.html">Python</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-project"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-project"></use>
                            </svg><span>Api Bank </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="projects.html">Wordpress</a></li>
                            <li><a href="projectcreate.html">Laravel</a></li>
                            <li><a href="projectcreate.html">Codeigniter</a></li>
                            <li><a href="projectcreate.html">PHP</a></li>
                            <li><a href="projectcreate.html">Python</a></li>
                        </ul>
                    </li>




                    <li class="sidebar-main-title">
                        <div>
                            <h6>Khác</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                        href="javascript:void(0)">
                        <svg class="stroke-icon">
                            <use href="/mofi/assets/svg/icon-sprite.svg#stroke-project"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="/mofi/assets/svg/icon-sprite.svg#fill-project"></use>
                        </svg><span>Tools </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="projects.html">Wordpress</a></li>
                        <li><a href="projectcreate.html">Laravel</a></li>
                        <li><a href="projectcreate.html">Codeigniter</a></li>
                        <li><a href="projectcreate.html">PHP</a></li>
                        <li><a href="projectcreate.html">Python</a></li>
                    </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                    class="sidebar-link sidebar-title link-nav" href="/blogs" wire:navigate>
                    <svg class="stroke-icon">
                        <use href="/mofi/assets/svg/icon-sprite.svg#stroke-project"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="/mofi/assets/svg/icon-sprite.svg#fill-project"></use>
                    </svg><span>Bài viết </span>
                    <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                </a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                    class="sidebar-link sidebar-title link-nav" href="/messenger" wire:navigate>
                    <svg class="stroke-icon">
                        <use href="/mofi/assets/svg/icon-sprite.svg#stroke-project"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="/mofi/assets/svg/icon-sprite.svg#fill-project"></use>
                    </svg><span>Nhắn tin </span>
                    <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                </a></li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>