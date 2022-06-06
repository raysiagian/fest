@extends('template')
@section('content')
<div class="container">
  <div class="jumbotron mt-3">
      <h1 class="display-4">Create New Content</h1>
      <p>Create content post</p>
  </div>
</div>
<div class="container">
    <form method="POST" action="/admin/post" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Content Image</label>
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="video" class="form-label">Content Video</label>
          <input class="form-control @error('video') is-invalid @enderror" type="file" id="video" name="video">
          @error('video')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label" >Description</label>
          <input id="description" type="hidden" name="description" value="{{old('description')}}">
          <trix-editor input="description"></trix-editor>
          @error('description')
          <p class="text-danger">
            {{$message}}
          </p>
          @enderror
          {{-- <label for="description">Description</label>
          @csrf
          <textarea id="description" name="description"></textarea>
          @error('description')
          <p class="text-danger">
            {{$message}}
          </p>
          @enderror --}}
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
@endsection
