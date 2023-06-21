<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>
            Hardeep <b class="font-black">Singh</b>
        </div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
            <li class="{{ request()->is('*/dashboard') ? 'active' : '' }}">
                <a href="dashboard">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-label">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Data</p>
        <ul class="menu-list">
            <li class="--set-active-tables-html {{ request()->is('*/users') ? 'active' : '' }}">
                <a href="users">
                    <span class="icon"><i class="mdi mdi-table"></i></span>
                    <span class="menu-item-label">Users</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Settings</p>
        <ul class="menu-list">
            <li class="--set-active-profile-html {{ request()->is('*/profile') ? 'active' : '' }}">
                <a href="profile">
                    <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                    <span class="menu-item-label">Profile</span>
                </a>
            </li>
            <li class="--set-active-profile-html {{ request()->is('*/change_password') ? 'active' : '' }}">
                <a href="change_password">
                    <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                    <span class="menu-item-label">Change Password</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
