<nav class="navbar">
    <div class="navbar-container">
        <a href="#" class="navbar-brand">{{ $brand }}</a>
        <div class="container-links">
            <ul class="navbar-links">
                @foreach ($links as $link)
                    <li><a href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
                @endforeach
            </ul>

            <ul class="btn-action">
                <li>
                    <button onclick="showSearch()"><i class="fa-solid fa-magnifying-glass"></i></button>
                </li>
                <li class="menu-user">
                    @auth
                        <!-- Jika pengguna sudah login -->
                        <button class="user-initial" onclick="HandleMenuAdmin()">
                            {{ strtoupper(auth()->user()->name[0]) }}
                        </button>

                        <div class="container-menu-user" style="display: none">
                            @if (auth()->check() && auth()->user()->role == 'Admin')
                                <a href="admin"> <i class="fa-solid fa-user-tie"></i> Login Admin</a>
                            @endif
                            <a href="{{ route('logout') }}">
                                <i class="fa-solid fa-person-walking-dashed-line-arrow-right"></i> Logout
                            </a>
                        </div>
                    @else
                        <!-- Jika pengguna belum login -->
                        @csrf
                        <button onclick="window.location.href='/admin/login'"><i class="fa-regular fa-user"></i></button>
                    @endauth
                </li>
            </ul>
            <div class="bars"><i class="fa-solid fa-bars"></i></div>
        </div>
    </div>
</nav>

<div class="search-container">
    <input type="text" placeholder="Search..." onblur="hideSearch()">
</div>
