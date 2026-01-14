<nav>
    <a href="{{ url('/') }}">Početna</a>

    @auth
        @if(auth()->user()->role === 'admin')
            <a href="{{ route('admin.index') }}">Admin Panel</a>
        @elseif(auth()->user()->role === 'trener')
            <a href="{{ route('trener.dashboard') }}">Trener Panel</a>
        @elseif(auth()->user()->role === 'kandidat')
            <a href="{{ route('kandidat.profile') }}">Moj Profil</a>
        @endif

        <span>{{ auth()->user()->korisnicko_ime ?? auth()->user()->ime_trenera ?? auth()->user()->ime_kandidata }}</span>

        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}">Login</a>
    @endauth
</nav>
<hr>
