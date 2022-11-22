@extends('layout.master')

@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Создание
        </h3>
        @include('layout.errors')
        <form method="POST" action="/tasks">
            @csrf
            <div class="mb-3">
                <label for="inputTitle" class="form-label">Название</label>
                <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Введите название">
            </div>
            <div class="mb-3">
                <label for="inputBody" class="form-label">Описание</label>
                <input type="text" class="form-control" name="body" id="inputBody" placeholder="Введите описание">
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>

    </div>
@endsection
