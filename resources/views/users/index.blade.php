@extends('layouts.layout')
@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Users
            </div>
{{--            @foreach($users as $u)
                <div>
                    {{$u->id}} - {{$u->name}} - {{$u->surname}} - {{$u->title}}
                </div>
            @endforeach--}}
        </div>
    </div>
@endsection
