@extends('layouts.main')

@section('container')
<!-- <h1 class="mb-3 text-center">{{ $title }}</h1> -->
@if(request('search'))
<section class="content">
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-12">
      <div class="title" data-aos="fade-down">
        <img src="/img/Starter/Lounge.svg" alt="">
          <h1>Your Search Result</h1>
      </div>
		<div class="row">
      @if ($posts->count())
      @foreach ($posts->skip(0) as $post)
		
		<div class="card col-lg-12 col-md-5" data-aos="zoom-in">
        <div class="card-image">
        @if ($post->image)
			
          <img src="{{ asset('storage/' . $post->image) }}"
          alt="{{ $post->category->name }}">
        @else
          <img src="/img/shiba.jpg" alt="{{ $post->category->name }}">
			
        @endif
        </div>
        <div class="card-content">
          <a href="/posts?category={{ $post->category->slug }}" class="tags">{{ $post->category->name }}</a>
          <a href="/posts/{{ $post->slug }}" class="link">
            <h2 class="blog-title">{{ $post->title }}</h2>
          <p class="synopsis">{{ $post->excerpt }}</p></a>
                          
            <div class="blog-details">
              <div class="icon-text">
                <span class="icon"><i class="fas fa-user"></i></span>
                <a href="/posts?author={{ $post->author->username }}"><span class="text">
                {{ $post->author->name }}
                </span></a>
              </div>

              <div class="icon-text">
                <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                <span class="text-2">{{ $post->created_at}}</span>
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
</div>
</section>
@else
<section class="features">
	<div class="col-lg-12">
		<div class="title" data-aos="fade-down">
        	<img src="/img/Blog/Features.png" alt=""><p class="features-title">Featured</p>
      </div>
</div>
<div class="col-lg-11 offset-lg-1">
<div class="slider">
  <ul id="autoWidth" class="cs-hidden">
	 
      @if ($posts->count())
      @foreach ($posts->skip(0) as $post)
	  <li class="item-a" data-aos="zoom-in">
		 <div class="boxs">
          
			 <a class="blank" href="/posts/{{ $post->slug }}"></a>
            <div class="slide-card">
              @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}"
                alt="{{ $post->category->name }}" class="model">
              @else
                <img src="img/shiba.jpg" alt="{{ $post->category->name }}" class="model">
              @endif
              <div class="overlay">
                <div class="slide-details">
                  <h3 class="slide-title">
                    {{ $post->title }}
                  </h3>
                  <div class="upload">
                    <div class="upload-details">
                      <span class="icon"><i class="fas fa-user"></i></span>
                      <a href="/posts?author={{ $post->author->username }}"><span class="text"> 
                          {{ $post->author->name }}
                      </span></a>
                    </div>
                    
                    <div class="upload-details">
                      <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                      <span class="text">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
	  </li>
          @endforeach
          @else
          <p class="text-center fs-4">No post found.</p>
          @endif
	  </ul>
	</div>
	</div>
    </section>

<section class="content">
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-12">
      <div class="title" data-aos="fade-down">
        <img src="/img/Starter/Lounge.svg" alt="">
          <h1>Lounge</h1>
      </div>
		<div class="row">
      @if ($posts->count())
      @foreach ($posts->skip(0) as $post)
		
		<div class="card col-lg-12 col-md-5" data-aos="zoom-in">
        <div class="card-image">
        @if ($post->image)
			
          <img src="{{ asset('storage/' . $post->image) }}"
          alt="{{ $post->category->name }}">
        @else
          <img src="/img/shiba.jpg" alt="{{ $post->category->name }}">
			
        @endif
        </div>
        <div class="card-content">
          <a href="/posts?category={{ $post->category->slug }}" class="tags">{{ $post->category->name }}</a>
          <a href="/posts/{{ $post->slug }}" class="link">
            <h2 class="blog-title">{{ $post->title }}</h2>
          <p class="synopsis">{{ $post->excerpt }}</p></a>
                          
            <div class="blog-details">
              <div class="icon-text">
                <span class="icon"><i class="fas fa-user"></i></span>
                <a href="/posts?author={{ $post->author->username }}"><span class="text">
                {{ $post->author->name }}
                </span></a>
              </div>

              <div class="icon-text">
                <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                <span class="text-2">{{ $post->created_at}}</span>
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
</div>
  
  <div class="col-lg-4 col-md-12">
    <div class="title-2" data-aos="fade-down">
      <h1>Topic</h1>
    </div>
    <div class="categories">
      <a href="/posts?category=covid-19" class="btn category" data-aos="zoom-in" data-aos-delay="200">Covid 19</a>
      <a href="/posts?category=corona" class="btn category" data-aos="zoom-in" data-aos-delay="400">Corona</a>
      <a href="/posts?category=virus" class="btn category" data-aos="zoom-in" data-aos-delay="600">Virus</a>
      <a href="/posts?category=kesehatan" class="btn category" data-aos="zoom-in" data-aos-delay="800">Kesehatan</a>
      <a href="/posts?category=pets" class="btn category" data-aos="zoom-in" data-aos-delay="1000">Pets</a>
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
</section>
@endif
<!-- <div class="d-flex justify-content-center">
{{ $posts->links() }}
</div>  -->

@endsection