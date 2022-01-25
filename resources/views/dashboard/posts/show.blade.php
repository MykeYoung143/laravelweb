@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-4">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit Post</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></span>
                    Delete Post</button>
                </form>
                
                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400? {{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif
                @if ($post->caption !== NULL)
                    <div class="caption">
                        <p>© {{$post->caption}}<p>
                    </div>
                @endif
                @if ($post->links !== NULL)
                    @if (strpos($post->links, 'youtube') !== false)
                        <?php
                        $embedURL = str_replace("watch?v=", "embed/", $post->links);?>
                    @endif
                    @if (strpos($post->links, 'vimeo') !== false)
                        <?php
                        $embedURL = str_replace("vimeo.com", "player.vimeo.com/video", $post->links);?>
                    @endif 
                    
                    <div style="position: relative; padding-bottom: 100%; height: 0; padding-bottom: 56.2493%;">
                    <iframe src='{{ $embedURL }}'
                    style="position: absolute; width: 100%; height: 100%; top: 0; left: 0;"
                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                @endif 
                <article class="my-3 fs-5">
                {!! $post->body !!}
                </article>
                
            </div>
        </div>
    </div>
<!-- <script charset="utf-8" src="//cdn.iframe.ly/embed.js?api_key=2f8cdcfd13060132051d62"></script>
<script>
    document.querySelectorAll( 'oembed[url]' ).forEach( element => {
        iframely.load( element, element.attributes.url.value );
    } );
</script> -->
@endsection