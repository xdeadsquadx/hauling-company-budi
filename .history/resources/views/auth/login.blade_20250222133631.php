<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
<a href="{{ route('register') }}">Daftar</a>
