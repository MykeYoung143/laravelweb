@extends('layouts.main')

@section('container')
<!-- <h1 class="mb-3 text-center">{{ $title }}</h1> -->
<div class="col-lg-2 offset-lg-1">
        <img src="Img/Blog/Features.png" alt=""><strong> Featured</strong>
</div>
<div class="slider">
      <ul id="autoWidth" class="cs-hidden">
      @if ($posts->count())
      @foreach ($posts->skip(0) as $post)
          <div class="box">
            <div class="slide-card">
              @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}"
                alt="{{ $post->category->name }}">
              @else
                <img src="img/shiba.jpg" alt="{{ $post->category->name }}">
              @endif
              <div class="overlay">
                <div class="slide-card-details">
                  <a href="/posts/{{ $post->slug }}" style="text-decoration: none;"><p class="title">
                    {{ $post->title }}
                  </p></a>
                  <div class="content-card-details">

                    <div class="icon-text-details">
                      <span class="icon"><i class="fas fa-user"></i></span>
                      <a href="/posts?author={{ $post->author->username }}"><span class="text"> 
                          {{ $posts[0]->author->name }}
                      </span></a>
                    </div>
                    
                    <div class="icon-text-details">
                      <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                      <span class="text">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @else
          <p class="text-center fs-4">No post found.</p>
          @endif
      </ul>
    </div>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-12">
      <div class="title" data-aos="fade-down">
        <img src="img/Starter/Lounge.svg" alt="">
          <h1>Lounge</h1>
      </div>
      @if ($posts->count())
      @foreach ($posts->skip(0) as $post)
      <div class="card" data-aos="zoom-in">
        <div class="card-image">
        @if ($post->image)
          <img src="{{ asset('storage/' . $post->image) }}"
          alt="{{ $post->category->name }}">
        @else
          <img src="img/shiba.jpg" alt="{{ $post->category->name }}">
        @endif
        </div>
        <div class="card-content">
          <a href="/posts?category={{ $post->category->slug }}" class="tags">{{ $post->category->name }}</a>
          <a href="/posts/{{ $post->slug }}" class="link">
            <h2 class="blog-title">{{ $post->title }}</h2></a>
          <p class="synopsis">{{ $post->excerpt }}</p>
                          
            <div class="blog-details">
              <div class="icon-text">
                <span class="icon"><i class="fas fa-user"></i></span>
                <a href="/posts?author={{ $post->author->username }}"><span class="text">
                {{ $posts[0]->author->name }}
                </span></a>
              </div>

              <div class="icon-text">
                <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                <span class="text">{{ $post->created_at->diffForHumans() }}</span>
              </div>

              <div class="blog-action">
                <button class="share-buttton"><i class="fas fa-bookmark"></i></button>   
                <button class="more-button"><i class="fas fa-ellipsis-v"></i></button>   
              </div>
            </div>
          </div>
      </div>
      @endforeach
      @else
      <p class="text-center fs-4">No post found.</p>
      @endif
  </div>
  <div class="col-lg-4 ">
    <div class="title-2" data-aos="fade-down">
      <h1>Topic</h1>
    </div>
    <div class="categories">
      <a href="/posts?category=web-design" class="btn category" data-aos="zoom-in">Web Design</a>
      <a href="/posts?category=web-programming" class="btn category" data-aos="zoom-in">Web programming</a>
      <a href="/posts?category=personal" class="btn category" data-aos="zoom-in">Personal</a>
      <!-- <a href="#" class="btn category" data-aos="zoom-in" data-aos-delay="200">Technology</a>
      <a href="#" class="btn category" data-aos="zoom-in" data-aos-delay="400">Pet</a>
      <a href="#" class="btn category" data-aos="zoom-in" data-aos-delay="600">Hotel</a>
      <a href="#" class="btn category" data-aos="zoom-in" data-aos-delay="800">Groom</a>
      <a href="#" class="btn category" data-aos="zoom-in" data-aos-delay="1000">Adopt</a>
      <a href="#" class="btn category" data-aos="zoom-in" data-aos-delay="1200">Vaccine</a>
      <a href="#" class="btn category" data-aos="zoom-in" data-aos-delay="1400">Training</a>  -->
    </div>
  </div> 
  </div>
  </div>
<!-- <div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
          @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="card mb-3">
      @if ($posts[0]->image)
        <div style="max-height: 400px; overflow:hidden;" class="d-flex justify-content-center">
          <img src="{{ asset('storage/' . $posts[0]->image) }}"
          alt="{{ $posts[0]->category->name }}" class="img-fluid">
        </div>
      @else
        <img src="https://source.unsplash.com/1200x400? {{ $posts[0]->category->name }}" 
        class="card-img-top" alt="{{ $posts[0]->category->name }}">
      @endif
      
      <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" 
        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <p>
        <small class="text-muted">
            By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }} </a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
            {{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>

        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

     </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute py-3 px-2" style="background-color: rgba(0, 0, 0, 0.7)">
                        <a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}"
                            alt="{{ $post->category->name }}" class="img-fluid">
                        @else
                            <img src="https://source.unsplash.com/500x400? {{ $post->category->name }}" 
                            class="card-img-top" alt="{{ $post->category->name }}">
                        @endif
                        <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small class="text-muted">
                                By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a> {{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>

@else
    <p class="text-center fs-4">No post found.</p>
@endif
-->
<div class="d-flex justify-content-center">
{{ $posts->links() }}
</div> 

@endsection