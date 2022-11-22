@extends('layout.master')
@section('title')Обратная Связь@endsection
@section('content')
    <div class="col-md-8">
        <h2 class="pb-3 mb-4 fst-italic border-bottom">
            Форма обратной связи
        </h2>
        @include('layout.errors')
        <form method="POST" action="/contacts">
            @csrf
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="text" class="form-control" name="email"
                       id="inputEmail"
                       placeholder="Введите название"
                       value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="inputMessage" class="form-label">Сообщение</label>
                <input type="text" class="form-control" name="message"
                       id="inputMessage"
                       placeholder="Введите описание"
                       value="{{ old('message') }}" >
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
@endsection
