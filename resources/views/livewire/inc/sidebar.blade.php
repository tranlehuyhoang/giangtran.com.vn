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
                            class="sidebar-link sidebar-title link-nav" href="/home" wire:navigate>
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
                            </svg><span>Mã Nguồn </span></a>
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
                            </svg><span>Vps Hosting </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('products.hosting-vps') }}" wire:navigate>Đăng ký dịch vụ</a></li>
                            <li><a href="projects.html">Quản lý dịch vụ</a></li>
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
                            <h6>Công Cụ</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.imageToLink') ? 'active' : '' }}"
                            href="{{ route('tools.imageToLink') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Ảnh to link</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.getFbId') ? 'active' : '' }}"
                            href="{{ route('tools.getFbId') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Lấy ID Facebook</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.createAiImage') ? 'active' : '' }}"
                            href="{{ route('tools.createAiImage') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Tạo Hình Ảnh AI</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.checkDomain') ? 'active' : '' }}"
                            href="{{ route('tools.checkDomain') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Kiểm Tra Tên Miền</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.appotaPayment') ? 'active' : '' }}"
                            href="{{ route('tools.appotaPayment') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Thanh Toán Appota</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.textToSpeech') ? 'active' : '' }}"
                            href="{{ route('tools.textToSpeech') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Text to Speech</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.asciiConverter') ? 'active' : '' }}"
                            href="{{ route('tools.asciiConverter') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Bộ Chuyển Đổi ASCII</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.jsEncryption') ? 'active' : '' }}"
                            href="{{ route('tools.jsEncryption') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Mã Hóa JavaScript</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.phpEncryption') ? 'active' : '' }}"
                            href="{{ route('tools.phpEncryption') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Mã Hóa PHP</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.randomAvatar') ? 'active' : '' }}"
                            href="{{ route('tools.randomAvatar') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Avatar Ngẫu Nhiên</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.characterEncryption') ? 'active' : '' }}"
                            href="{{ route('tools.characterEncryption') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Mã Hóa Ký Tự</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.fontRemoval') ? 'active' : '' }}"
                            href="{{ route('tools.fontRemoval') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Xóa Phông Chữ</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.get2faCode') ? 'active' : '' }}"
                            href="{{ route('tools.get2faCode') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Lấy Mã 2FA</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.checkLiveFb') ? 'active' : '' }}"
                            href="{{ route('tools.checkLiveFb') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Check Facebook Live</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.downloadVideoWithoutLogo') ? 'active' : '' }}"
                            href="{{ route('tools.downloadVideoWithoutLogo') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Tải Video Không Logo</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.getColorCode') ? 'active' : '' }}"
                            href="{{ route('tools.getColorCode') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Lấy Mã Màu</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.createVideoFromImage') ? 'active' : '' }}"
                            href="{{ route('tools.createVideoFromImage') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Tạo Video Từ Hình Ảnh</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.fileFormatConverter') ? 'active' : '' }}"
                            href="{{ route('tools.fileFormatConverter') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Chuyển Đổi Tệp</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.urlShortener') ? 'active' : '' }}"
                            href="{{ route('tools.urlShortener') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Rút Ngắn URL</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.chartGenerator') ? 'active' : '' }}"
                            href="{{ route('tools.chartGenerator') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Thế Hệ Biểu Đồ</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.spellCheck') ? 'active' : '' }}"
                            href="{{ route('tools.spellCheck') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Kiểm Tra Chính Tả</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.extractAudioFromVideo') ? 'active' : '' }}"
                            href="{{ route('tools.extractAudioFromVideo') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Video to mp3</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.checkInternetSpeed') ? 'active' : '' }}"
                            href="{{ route('tools.checkInternetSpeed') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Kiểm Tra Tốc Độ Internet</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.ipTracking') ? 'active' : '' }}"
                            href="{{ route('tools.ipTracking') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Theo Dõi IP</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.passwordGenerator') ? 'active' : '' }}"
                            href="{{ route('tools.passwordGenerator') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Phát Sinh Mật Khẩu</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.videoToAudio') ? 'active' : '' }}"
                            href="{{ route('tools.videoToAudio') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Convert Video to Audio</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.createGreetingCard') ? 'active' : '' }}"
                            href="{{ route('tools.createGreetingCard') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Tạo Thiệp Chúc Mừng</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('tools.trafficFine') ? 'active' : '' }}"
                            href="{{ route('tools.trafficFine') }}" wire:navigate>
                            <svg class="stroke-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#stroke-faq"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="/mofi/assets/svg/icon-sprite.svg#fill-faq"></use>
                            </svg>
                            <span>Kiểm Tra Phạt Nguội</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>