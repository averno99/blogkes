<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ request()->is('dashboard*') ? '' : 'collapsed' }}" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-heading">Main</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-menu-button-wide"></i>
                <span>Components</span>
            </a>
        </li><!-- End Components Nav -->

        <li class="nav-heading">Administrator</li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('users*') ? '' : 'collapsed' }}" href="/users">
                <i class="bi bi-people"></i>
                <span>Kelola Data User</span>
            </a>
        </li>

    </ul>

</aside>
