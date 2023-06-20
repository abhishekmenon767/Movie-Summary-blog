<!DOCTYPE html>
<html>
<x-layout>

{{--    <div ">--}}
{{--        <div class="relative flex items-center bg-gray-100 rounded-xl">--}}
            <x-dropdown>
                {{-- Trigger --}}
                <x-slot name="trigger">
                    <div style="text-align:center;">
                    <button class="button button3">
                        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
                        <svg class="transform-rotate-90 absolute pointer-events-none" width="22" height="22" viewBox="0 0 22 22">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path>
                                <path fill="#222" d="M13.854 7.224l-3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                            </g>
                        </svg>
                    </button>
                </x-slot>
                <div style="text-align:center;">
                 <x-dropdown-item href="/" class="block text-left px-3 text-xs leading-6 hover:bg-blue-500 hover:text-white">
                     All</x-dropdown-item>

                @foreach ($categories as $category)
                     <x-dropdown-item href="/categories/{{ $category->slug }}"
                       class="block text-left px-3 text-xs leading-6 hover:bg-blue-500 hover:text-white {{ isset($currentCategory) && $currentCategory->is($category) ? 'bg-blue-500 text-white' : '' }}">
                         {{ ucwords($category->name) }}</x-dropdown-item>

                @endforeach</div>
            </x-dropdown>

    <div class="row tm-row justify-content-between">
        @if ($posts->count())
            @foreach ($posts as $post)
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="/posts/{{ $post->slug }}" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            {{-- TODO --}}
                            <img src="/storage/{{$post->thumbnail}}" alt="Image" class="img-fluid">
                        </div>
                        <a href="/posts/{{ $post->slug }}">
                            <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{ $post->title }}</h2>
                        </a>
                    </a>
                    <span class="tm-color-primary">Published <time>{{ $post->created_at->diffForHumans() }}</time></span>
                    <p class="tm-pt-30">
                        {{ $post->excerpt }}
                        <a href="/posts/{{ $post->slug }}">Read more</a>
                    </p>
                    <x-category-button :category="$post->category" />
                    <hr>
                    <div class="d-flex justify-content-between">
{{--                        <span>by <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></span>--}}
                    </div>
                </article>
                @endforeach

    </div>
{{--{{ $posts->links() }}--}}
    @else
        <p class="text-center">No Posts yet. Please check back later</p>
    @endif


</x-layout>

</html>

