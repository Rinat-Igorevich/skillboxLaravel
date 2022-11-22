<div class="blog-post">
    <h5 class="blog-post-title"><a href="/tasks/{{ $task->id }}">{{ $task->title }}</a></h5>
    <p class="blog-post-meta">{{ $task->created_at->format('M.d.Y')}}</p>
    {{--                <p class="blog-post-meta">{{ $task->created_at->toFormattedDateString() }}</p>--}}
    {{ $task->body }}
</div>
