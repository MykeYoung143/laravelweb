@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Posts</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus
        value="{{ old('title') }}">
        @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required
        value="{{ old('slug') }}">
        @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id">
            @foreach ($categories as $category)
              @if(old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
            @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Choose Image</label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="caption" class="form-label">Enter Caption for Image</label>
        <input type="text" class="form-control @error('caption') is-invalid @enderror" id="caption" name="caption" autofocus
        value="{{ old('caption') }}">
        @error('caption')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>
      <div class="mb-3">
        <label for="links" class="form-label">Enter Links(For Previewable Media, Youtube and Vimeo)</label>
        <input type="text" class="form-control @error('links') is-invalid @enderror" id="links" name="links" autofocus
        value="{{ old('links') }}">
        @error('links')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <!-- <div id="toolbar-container"></div>
        <div class="form-control" id="body" name="body" rows="10" col="50"><p>{{ old('body') }}</p></div> -->
        <textarea class="form-control" id="body" name="body" rows="10" col="50">{{ old('body') }}</textarea>
        @error('body')
          <p class="text-danger">{{ $message }}</p>
        @enderror
        <!-- <input id="body" type="hidden" name="body" value="{{ old('body') }}">
        <trix-editor input="body"></trix-editor> -->
      </div>
      <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/decoupled-document/ckeditor.js"></script>
<script>
    DecoupledEditor
        .create( document.querySelector( '#body' ) )
        .then( editor => {
            const toolbarContainer = document.querySelector( '#toolbar-container' );

            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
        } )
        .catch( error => {
            console.error( error );
        } );
</script> -->
<script src={{ asset('/ckeditor/ckeditor.js') }}></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#body' ), )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
          .then(response=> response.json())
          .then(data => slug.value = data.slug)
    });


    // document.addEventListener('trix-file-accept', function(e) {
    //   e.preventDefault();
    // })

    function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      } 
    }
</script>
@endsection