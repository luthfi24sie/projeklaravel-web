<div class="sidebar-inner px-4 pt-3 d-flex flex-column" style="min-height: 100vh;">
    <ul class="nav flex-column pt-3 pt-md-0">
        <li class="nav-item mb-2">
            <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
                <span class="sidebar-icon">
                    <img src="{{ asset('assets-admin/img/brand/light.svg') }}" height="20" width="20" alt="Volt Logo">
                </span>
                <span class="mt-1 ms-1 sidebar-text">Volt Overview</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
                <span class="sidebar-icon">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                </span>
                <span class="sidebar-text">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('pelanggan.index') }}" class="nav-link d-flex align-items-center">
                <span class="sidebar-icon">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0z"/><path fill-rule="evenodd" d="M4 13a4 4 0 014-4h4a4 4 0 014 4v1a1 1 0 01-1 1H5a1 1 0 01-1-1v-1z" clip-rule="evenodd"/></svg>
                </span>
                <span class="sidebar-text">Pelanggan</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.index') }}" class="nav-link d-flex align-items-center">
                <span class="sidebar-icon">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a3 3 0 100-6 3 3 0 000 6z"/><path fill-rule="evenodd" d="M.458 17.042A10 10 0 0110 10a10 10 0 019.542 7.042A1 1 0 0118.588 19H1.412a1 1 0 01-.954-1.958z" clip-rule="evenodd"/></svg>
                </span>
                <span class="sidebar-text">User</span>
            </a>
        </li>
        <li class="nav-item mt-3">
            <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/overview/" target="_blank" class="nav-link d-flex justify-content-between align-items-center">
                <span class="d-flex align-items-center">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 1 11-16 0 8 8 0 0116 0zM9 4a1 1 0 012 0v5a1 1 0 01-.553.894l-3 1.5a1 1 0 11-.894-1.788L9 8.382V4z" clip-rule="evenodd"/></svg>
                    </span>
                    <span class="sidebar-text">Documentation</span>
                </span>
                <span class="badge badge-sm bg-secondary ms-1 text-gray-800">v1.4</span>
            </a>
        </li>
    </ul>
    <div class="d-flex mt-auto">
        <a href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard-pro" target="_blank" class="btn btn-secondary w-100 d-inline-flex align-items-center justify-content-center">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 17a1 1 0 01-2 0v-1H7a1 1 0 010-2h2v-1H7a1 1 0 010-2h2V9H7a1 1 0 010-2h2V6a1 1 0 112 0v1h2a1 1 0 110 2h-2v1h2a1 1 0 110 2h-2v1h2a1 1 0 110 2h-2v1z"/></svg>
            Upgrade to Pro
        </a>
    </div>
</div>


