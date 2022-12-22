<header>
    <nav class="navbar d-flex justify-content-center">
        <ul class="navbar-nav d-flex flex-row w-25 justify-content-between">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                    href="{{ route('home') }}">Home</a>
            </li>
            <li class=" nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}"
                    href="{{ route('comics.index') }}">Comics</a>
            </li>
        </ul>
    </nav>
</header>
