@extends('layout.master')
@section('title')
    Создание статьи
@endsection
@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Создание
        </h3>
        @include('layout.errors')
        <form method="POST" action="/articles">
            @csrf
            <div class="mb-3">
                <label for="inputSlug" class="form-label">Символьный код</label>
                <input type="text" class="form-control" name="slug"
                       id="inputSlug"
                       placeholder="код для адресной строки"
                       value="{{ old('slug', '') }}">
            </div>
            <div class="mb-3">
                <label for="inputTitle" class="form-label">Название</label>
                <input type="text" class="form-control" name="title"
                       id="inputTitle"
                       placeholder="Введите название"
                       value="{{ old('title', '') }}">
            </div>
            <div class="mb-3">
                <label for="inputDescription" class="form-label">Краткое описание (видно в списке)</label>
                <input type="text" class="form-control" name="description"
                       id="inputDescription"
                       placeholder="Введите описание"
                       value="{{ old('description', '') }}">
            </div>
            <div class="mb-3">
                <label for="inputBody" class="form-label">Текст статьи (видно в самой статье)</label>
                <input type="text" class="form-control" name="body" id="inputBody" placeholder="Введите текст">
            </div>
            <div class="mb-3">
                <label for="isPublished" class="form-label">Опубликовать</label>
                <input type="checkbox" class="" name="isPublished"
                       id="isPublished"
                       {{ old('isPublished') == 'on'? 'checked':'' }}
                       >
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>

    </div>
@endsection
