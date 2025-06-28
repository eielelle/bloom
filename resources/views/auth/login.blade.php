<x-global-layout>
    <form action="#" method="post">
        @csrf

        <h1>Login</h1>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" />

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <button type="submit">Login</button>
    </form>
</x-global-layout>