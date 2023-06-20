
@props(['post'])
        <article class="col-12 col-md-6 tm-post">
            <hr class="tm-hr-primary">
            <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
                <div class="tm-post-link-inner">
                    {{--TODO--}}
                    <img src="img/img-01.jpg" alt="Image" class="img-fluid">
                </div>

                <span class="position-absolute tm-new-badge">New</span>
                <a href="/posts/{{ $post->slug }}">
                <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$post->title}}</h2></a>
            </a>
            <span class="tm-color-primary">Published <time>{{$post->created_at->diffForHumans()}}</time></span>
            <p class="tm-pt-30">
                {{$post->excerpt}}
                <a href="/posts/{{$post->slug}}">Read more</a>
            </p>
            <div class="d-flex justify-content-between tm-pt-45">
                <a href="/categories/{{$post->category->slug}}"> <span class="tm-color-primary">{{$post->category->name}}</span></a>

            </div>
            <hr>
            <div class="d-flex justify-content-between">

                <span>by <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></span>
            </div>
        </article>
