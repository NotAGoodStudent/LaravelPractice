@extends('layouts.layout')
@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a new pizza</h1>
        <form action="" class="" method="POST">
            <label for="type">Choose pizza type: </label>
            <select name="type" id="type">
                <option value="margarita">Margarita</option>
                <option value="quatroformaggi">Quatro Formaggi</option>
                <option value="bbq">BBQ</option>
            </select>
            <label for="base">Choose base type: </label>
            <select name="base" id="base">
                <option value="classic">Classic</option>
                <option value="cheesy crust">Cheesy crust</option>
                <option value="thin">Thin crust</option>
            </select>
            <input type="submit" value="Order!">
        </form>
    </div>
@endsection
