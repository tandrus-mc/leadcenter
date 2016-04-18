<!-- logged user and the menu -->
<div class="logged-user">
    <div class="btn-group">
        <a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
            <span class="name">{{ $user->name }}</span> <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span class="text">Profile</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/logout') }}">
                    <i class="fa fa-power-off"></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- end logged user and the menu -->