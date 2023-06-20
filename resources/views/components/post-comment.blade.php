@props(['comment'])

<article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/u?={{ $comment->id }}" alt="" width="60" height="60" class="rounded-xl">
    </div>
    <div>
        <header class="mb-4">
            @if ($comment->author())
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            @else
                <h3 class="font-bold">Unknown Author</h3>
            @endif
            <p class="text-xs">
                Posted
                <time datetime="2022-01-01">{{ $comment->created_at }}</time>
            </p>
        </header>
        <p>{{ $comment->body }}</p>
    </div>
</article>
