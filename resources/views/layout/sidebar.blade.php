<div class="container-fluid">

    <div id="two-column-menu">
    </div>
    @if(auth()->guard('admin')->check())
    <ul class="navbar-nav" id="navbar-nav">
        {{-- <i class="ph-layout"> --}}
        <li class="menu-title"><span data-key="t-menu">Menu</span></li>

        <li class="nav-item">
            <a href="{{ route('dashboard.index') }}" class="nav-link menu-link"> <i class="ph-gauge"></i> <span data-key="t-calendar">Dashboards</span> </a>
        </li>

        <li class="nav-item">
            <a class="nav-link menu-link collapsed" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Forms</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarForms">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{ route('santri.index') }}" class="nav-link" data-key="t-basic-elements">Santri</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('wali_santri.index') }}" class="nav-link" data-key="t-basic-elements">Wali Santri</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pengurus.index') }}" class="nav-link" data-key="t-form-select">Pengurus</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="{{ route('tabungan.index') }}" class="nav-link menu-link"><i class="ph ph-wallet"></i> <span data-key="t-chat">Tabungan</span> </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('laporan.index') }}" class="nav-link menu-link"> <i class="bx bxs-report"></i> <span data-key="t-email">Laporan</span> </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('presensi.index') }}" class="nav-link menu-link"> <i class=" ph-users-four-thin"></i> <span data-key="t-email">Presensi</span> </a>
        </li>
    </ul>
    @else()
    <ul class="navbar-nav" id="navbar-nav">
        <li class="nav-item">
            <a href="{{ route('tabungan.index') }}" class="nav-link menu-link"><i class="ph ph-wallet"></i> <span data-key="t-chat">Tabungan Anak Saya</span> </a>
        </li>
    </ul>
    @endif
</div>
