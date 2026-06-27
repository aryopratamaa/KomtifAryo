<aside class="left-sidebar">
    @php
        $isDashboard = request()->routeIs('dashboard');
        $isProdukMenuOpen = request()->routeIs('kategori.*') || request()->routeIs('produk.*');
        $isBahanStokMenuOpen = request()->routeIs('bahan.*') || request()->routeIs('stok.*');
        $isUsersMenuOpen = request()->routeIs('user.*');
        $isEventActive = request()->routeIs('event.*');
        $isSettingActive = request()->routeIs('setting.*');
    @endphp
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="text-nowrap logo-img">
                <img src="{{ asset('template/assets/images/logos/logo.svg') }}" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-6"></i>
            </div>
        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item {{ $isDashboard ? 'selected' : '' }}">
                    <a class="sidebar-link {{ $isDashboard ? 'active' : '' }}" href="{{ url('/') }}"
                        aria-expanded="{{ $isDashboard ? 'true' : 'false' }}">
                        <i class="ti ti-layout-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">MANAGEMENT</span>
                </li>


                <li class="sidebar-item {{ $isProdukMenuOpen ? 'selected' : '' }}">
                    <a class="sidebar-link justify-content-between has-arrow {{ $isProdukMenuOpen ? 'active' : '' }}"
                        href="javascript:void(0)" aria-expanded="{{ $isProdukMenuOpen ? 'true' : 'false' }}">
                        <div class="d-flex align-items-center gap-3">
                            <span class="d-flex">
                                <i class="ti ti-packages"></i>
                            </span>
                            <span class="hide-menu">Produk</span>
                        </div>

                    </a>
                    <ul aria-expanded="{{ $isProdukMenuOpen ? 'true' : 'false' }}"
                        class="collapse first-level {{ $isProdukMenuOpen ? 'in' : '' }}">
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between {{ request()->routeIs('kategori.*') ? 'active' : '' }}"
                                href="{{ route('kategori.index') }}">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-category"></i>
                                    </div>
                                    <span class="hide-menu">Kategori</span>
                                </div>

                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between {{ request()->routeIs('produk.*') ? 'active' : '' }}"
                                href="{{ route('produk.index') }}">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-list-details"></i>
                                    </div>
                                    <span class="hide-menu">List Produk</span>
                                </div>

                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <span class="sidebar-divider lg"></span>
                </li>

                <li class="sidebar-item {{ $isBahanStokMenuOpen ? 'selected' : '' }}">
                    <a class="sidebar-link justify-content-between has-arrow {{ $isBahanStokMenuOpen ? 'active' : '' }}"
                        href="javascript:void(0)" aria-expanded="{{ $isBahanStokMenuOpen ? 'true' : 'false' }}">
                        <div class="d-flex align-items-center gap-3">
                            <span class="d-flex">
                                <i class="ti ti-building-warehouse"></i>
                            </span>
                            <span class="hide-menu">Bahan Baku & Stok</span>
                        </div>

                    </a>
                    <ul aria-expanded="{{ $isBahanStokMenuOpen ? 'true' : 'false' }}"
                        class="collapse first-level {{ $isBahanStokMenuOpen ? 'in' : '' }}">
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between {{ request()->routeIs('bahan.*') ? 'active' : '' }}"
                                href="{{ route('bahan.index') }}">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-components"></i>
                                    </div>
                                    <span class="hide-menu">Bahan Baku</span>
                                </div>

                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between {{ request()->routeIs('stok.*') ? 'active' : '' }}"
                                href="{{ route('stok.index') }}">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-clipboard-list"></i>
                                    </div>
                                    <span class="hide-menu">Stok Bahan Baku</span>
                                </div>

                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between" href="#">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-alert-triangle"></i>
                                    </div>
                                    <span class="hide-menu">Pengingat Batas Min Stok</span>
                                </div>

                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                        aria-expanded="false">
                        <div class="d-flex align-items-center gap-3">
                            <span class="d-flex">
                                <i class="ti ti-shopping-cart"></i>
                            </span>
                            <span class="hide-menu">Orders</span>
                        </div>

                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between" href="#">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-shopping-cart-plus"></i>
                                    </div>
                                    <span class="hide-menu">Direct Orders</span>
                                </div>

                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between" href="#">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-calendar-time"></i>
                                    </div>
                                    <span class="hide-menu">Pre Orders</span>
                                </div>

                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item {{ $isUsersMenuOpen ? 'selected' : '' }}">
                    <a class="sidebar-link justify-content-between has-arrow {{ $isUsersMenuOpen ? 'active' : '' }}"
                        href="javascript:void(0)" aria-expanded="{{ $isUsersMenuOpen ? 'true' : 'false' }}">
                        <div class="d-flex align-items-center gap-3">
                            <span class="d-flex">
                                <i class="ti ti-users"></i>
                            </span>
                            <span class="hide-menu">Users</span>
                        </div>

                    </a>
                    <ul aria-expanded="{{ $isUsersMenuOpen ? 'true' : 'false' }}"
                        class="collapse first-level {{ $isUsersMenuOpen ? 'in' : '' }}">
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between {{ request()->routeIs('user.*') ? 'active' : '' }}"
                                href="{{ route('user.index') }}">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-user-search"></i>
                                    </div>
                                    <span class="hide-menu">List Users</span>
                                </div>

                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between" href="#">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-calendar-event"></i>
                                    </div>
                                    <span class="hide-menu">Jadwal Bertugas</span>
                                </div>

                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between" href="#">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-shield-lock"></i>
                                    </div>
                                    <span class="hide-menu">Hak Akses</span>
                                </div>

                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ $isEventActive ? 'selected' : '' }}">
                    <a class="sidebar-link justify-content-between {{ $isEventActive ? 'active' : '' }}"
                        href="{{ route('event.index') }}" aria-expanded="{{ $isEventActive ? 'true' : 'false' }}">
                        <div class="d-flex align-items-center gap-3">
                            <span class="d-flex">
                                <i class="ti ti-calendar"></i>
                            </span>
                            <span class="hide-menu">Events</span>
                        </div>

                    </a>
                </li>


                <li>
                    <span class="sidebar-divider lg"></span>
                </li>
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">APPS</span>
                </li>
                <li class="sidebar-item {{ $isSettingActive ? 'selected' : '' }}">
                    <a class="sidebar-link justify-content-between {{ $isSettingActive ? 'active' : '' }}"
                        href="{{ route('setting.index') }}"
                        aria-expanded="{{ $isSettingActive ? 'true' : 'false' }}">
                        <div class="d-flex align-items-center gap-3">
                            <span class="d-flex">
                                <i class="ti ti-settings"></i>
                            </span>
                            <span class="hide-menu">Setting</span>
                        </div>

                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link justify-content-between" href="#" aria-expanded="false">
                        <div class="d-flex align-items-center gap-3">
                            <span class="d-flex">
                                <i class="ti ti-photo"></i>
                            </span>
                            <span class="hide-menu">Gallery</span>
                        </div>

                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
