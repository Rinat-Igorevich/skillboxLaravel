@extends('layout.master')
@section('content')

            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    Название статьи
                </h3>
                    Детальная страница статьи
                <article class="blog-post">
                    <h5 class="blog-post-title mb-1">Название</h5>
                    <p>text</p>
                </article>

                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                    <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
                </nav>

            </div>
@endsection
