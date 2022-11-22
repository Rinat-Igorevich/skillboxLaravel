@extends('layout.master')
@section('title')
    {{ $slug->title }}
@endsection
@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            {{ $slug->title }}
        </h3>
        {{ $slug->body }}
        <br>
        {{ $slug->created_at }}
        <br>
        <a href="/">Вернуться к списку</a>
    </div>
@endsection
