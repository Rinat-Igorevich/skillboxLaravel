@extends('layout.master')

@section('content')
    <div class="col-md-8">
        <h2 class="pb-3 mb-4 fst-italic border-bottom">
            Список
        </h2>
        @foreach($tasks as $task)
            @include('tasks.item')

        @endforeach
    </div>
@endsection
