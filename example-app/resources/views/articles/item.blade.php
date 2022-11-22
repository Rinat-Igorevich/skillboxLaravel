<div class="blog-post">
    <h5 class="blog-post-title"><a href="/articles/{{ $article->slug }}">{{ $article->title }}</a></h5>
    {{ $article->description }}
    <p class="blog-post-meta">Опубликовано {{ $article->updated_at->timezone('Europe/Moscow')->format('M.d.Y')}}</p>
</div>
