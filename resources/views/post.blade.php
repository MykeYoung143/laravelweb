@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-4 mt-4">{{ $post->title }}</h1>

                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                {{ $post->category->name }}</a></p>
                <p>MiaraO.com - {{ $post->created_at }}</p>
                <!-- <a href="/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to Home</a> -->
                
                <div class="socials">
                    <span class="social-text">Bagikan :</span>
                    <div class="social-box">
                    @foreach($shareComponent as $key => $value)
                    <div class="social"><a href="{{$value}}" target="_blank" class="btn"><img src="/img/{{$key}}.svg" class="social img"></a></div>
                    @endforeach
                    </div>
                </div>
                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400? {{ $post->category->name }}" 
                    class="card-img-top mt-3" alt="{{ $post->category->name }}">
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

    <!-- script iframely untuk media embed otomatis, tetapi tidak digunakan
<script charset="utf-8" src="//cdn.iframe.ly/embed.js?api_key=2f8cdcfd13060132051d62"></script>
<script>
    document.querySelectorAll( 'oembed[url]' ).forEach( element => {
        iframely.load( element, element.attributes.url.value );
    } );
</script> -->

@endsection