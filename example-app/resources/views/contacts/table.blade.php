@extends('layout.master')
@section('title')
    Все отзывы
@endsection
@section('content')
    <div class="col-md-8">
        <h2 class="pb-3 mb-4 fst-italic border-bottom">
            Таблица отзывов
        </h2>
        <table class="table data-table table-hover">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Отзыв</th>
                </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->message}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
