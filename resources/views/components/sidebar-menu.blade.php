<div class="sidebars open max-sm:left-[-100%]" id="sidebars">
    <div class="sidebar-nav">
        <div class="sidebar-logo">
            <img src="{{ asset('image/logo-myrajamobil.png') }}" class="h-10 logo-img" alt="Logo"/>
            <!-- <div class="logo-text">MY</div> -->

            <i class="bx bx-menu-alt-right text-4xl cursor-pointer max-sm:hidden dark:text-gray-300" id="btn-menu"></i>
            <i class='bx bx-x text-3xl cursor-pointer hidden max-sm:block dark:text-gray-300' id="btn-close"></i>
        </div>
        <div class="sidebar-menu">
            <ul class="sidebar-navlink">
                <li>
                    <div class="relative">
                        <div class="group-icon">
                            <i class='bx bx-search text-2xl dark:text-gray-300'></i>
                        </div>
                        <input type="text" name="search" id="search" class="form-sidebar group shadow-sm" placeholder="Search...">
                    </div>
                </li>
                <li>
                    <div class="sidebar-text">
                        <div class="title">Beranda</div>
                        <div class="menus">
                            <ul>
                                <li>
                                    <a href="{{ route('dashboard', app()->getLocale()) }}">
                                        <i class='bx bxs-grid-alt'></i>
                                        <span class="menu_name">{{ __('language.m_dashboard') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="sidebar-text">
                        <div class="title">Notifikasi</div>
                        <div class="menus">
                            <ul>
                                <li>
                                    <a href="{{ route('requestservice', app()->getLocale()) }}">
                                        <i class='bx bx-wrench'></i>
                                        <span class="menu_name">{{ __('language.m_service') }}</span>
                                        <span class="badge">12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('requestservice.sa', app()->getLocale()) }}">
                                        <i class='bx bx-wrench'></i>
                                        <span class="menu_name">{{ __('language.m_service') }} imora</span>
                                        <span class="badge">12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('requesttestdrive', app()->getLocale()) }}">
                                        <i class='bx bxs-car' ></i>
                                        <span class="menu_name">{{ __('language.m_testdrive') }}</span>
                                        <span class="badge">5</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="sidebar-text">
                        <div class="title">Workshop</div>
                        <div class="menus">
                            <ul>
                                <li>
                                    <a href="{{ route('kelolaservice', app()->getLocale()) }}">
                                        <i class='bx bx-wrench'></i>
                                        <span class="menu_name">{{ __('language.m_kelolas') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('operasional', app()->getLocale()) }}">
                                        <i class='bx bx-time'></i>
                                        <span class="menu_name">{{ __('language.m_operasional') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('about.workshop', app()->getLocale()) }}">
                                        <i class='bx bx-store-alt'></i>
                                        <span class="menu_name">{{ __('language.m_about_workshop') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('salesadvisor', app()->getLocale()) }}">
                                        <i class='bx bxs-user-detail'></i>
                                        <span class="menu_name">{{ __('language.m_salesadvisor') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('voucher.inputvoucher', app()->getLocale()) }}">
                                        <i class='bx bx-purchase-tag'></i>
                                        <span class="menu_name">{{ __('language.m_inputvoucher') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('voucher.listclaim', app()->getLocale()) }}">
                                        <i class='bx bxs-offer'></i>
                                        <span class="menu_name">{{ __('language.m_claimvoucher') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="sidebar-text">
                        <div class="title">Customer</div>
                        <div class="menus">
                            <ul>
                                <li>
                                    <a href="{{ route('addprospect', app()->getLocale()) }}">
                                        <i class='bx bxs-message-alt-add'></i>
                                        <span class="menu_name">{{ __('language.m_addprospect') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('myprospect', ['language' => app()->getLocale(), 'slug' => 'baru']) }}">
                                        <i class='bx bxs-message-alt-detail'></i>
                                        <span class="menu_name">{{ __('language.m_myprospect') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('arsipdo', ['language' => app()->getLocale(), 'slug' => 'do']) }}">
                                        <i class='bx bxs-message-alt-edit'></i>
                                        <span class="menu_name">{{ __('language.m_arsipdo') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="sidebar-text">
                        <div class="title">Promo</div>
                        <div class="menus">
                            <ul>
                                <li>
                                    <a href="{{ route('promo.add', app()->getLocale()) }}">
                                        <i class='bx bx-purchase-tag-alt'></i>
                                        <span class="menu_name">{{ __('language.m_addpromo') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('promo', app()->getLocale()) }}">
                                        <i class='bx bxs-purchase-tag-alt'></i>
                                        <span class="menu_name">{{ __('language.m_promo') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="sidebar-text">
                        <div class="title">Product</div>
                        <div class="menus">
                            <ul>
                                <li>
                                    <a href="{{ route('product.category', app()->getLocale()) }}">
                                        <i class='bx bxs-component'></i>
                                        <span class="menu_name">{{ __('language.m_category') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('product.list', app()->getLocale()) }}">
                                        <i class='bx bx-spreadsheet'></i>
                                        <span class="menu_name">{{ __('language.m_listproduct') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="sidebar-text">
                        <div class="title">Posting Halaman</div>
                        <div class="menus">
                            <ul>
                                <li>
                                    <a href="{{ route('posting.banner', app()->getLocale()) }}">
                                        <i class='bx bx-carousel'></i>
                                        <span class="menu_name">{{ __('language.m_banner') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>