<header class="header">
    <nav class="navbar container">
        <div class="">
            <ul class="menu">
                <li><a class="menu-link" href='/'>Bosh Sahifa</a></li>
                <li><a class="menu-link" href="/">Ovoz Berish</a></li>
            </ul>
        </div>
        <div>
            <h1>OpenBudjet</h1>
            <p>Ovoz Berish Tizimiga Xush Kelibsiz</p>
        </div>

        <ul class="menu">
            @auth
                <li>
                    <form class="menu-link" method="POST" action={{ route('logout') }}>
                        @csrf
                        <button class="menu-button" type="submit">Tizimdan Chiqish</button>
                    </form>
                </li>
            @else
                <li>
                    <a class="menu-link" href={{ route('login') }}>Tizimga Kirish</a>
                </li>
                <li>
                    <a class="menu-link" href={{ route('register') }}>Ro'yxatdan o'tish</a>
                </li>
            @endauth
        </ul>
    </nav>
</header>
