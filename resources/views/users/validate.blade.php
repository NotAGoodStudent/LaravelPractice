@extends('layouts.layout')
@section('content')
<div class="wrapper validate-user">
    <h1>Login</h1>
    <form action="/users/getUser" method="get">
        @csrf
        <label for="email">E-Mail: </label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="login!">
    </form>
</div>
@endsection
