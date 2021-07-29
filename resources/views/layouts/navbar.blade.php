<nav>
    <h3><a href="/">Home</a></h3>
    @guest
    <h3><a href="/register">Register</a></h3>
    <h3><a href="/login">Login</a></h3>
    @endguest
    @auth
    <h3>
        <form method="POST" action="/logout">
        @csrf
        <button class="btn btn-link nav-link" type="submit">Logout</button>
    </form>
    </h3>
    @endauth
</nav>