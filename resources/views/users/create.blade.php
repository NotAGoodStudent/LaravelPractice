@extends('layouts.layout')
@section('content')
    <div class="wrapper create-user">
    <h1>Register</h1>
        <form action="/users" method="post">
            @csrf
            <label for="name" >Name: </label>
            <input type="text" id="name" name="name" required>
            <label for="surname">Surname: </label>
            <input type="text" id="surname" name="surname" required>
            <label for="email">E-Mail: </label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" required>
            <label for="password2">Re-enter Password: </label>
            <input type="password" id="password2" name="password2" required>
            <input type="submit" name="signup" value="signup">
        </form>
    </div>
@endsection
