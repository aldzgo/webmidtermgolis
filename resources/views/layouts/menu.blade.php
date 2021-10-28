<li class="nav-item">
    <a href="{{ route('animelists.index') }}"
       class="nav-link {{ Request::is('animelists*') ? 'active' : '' }}">
        <p>Animelists</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('animecharacters.index') }}"
       class="nav-link {{ Request::is('animecharacters*') ? 'active' : '' }}">
        <p>Animecharacters</p>
    </a>
</li>


