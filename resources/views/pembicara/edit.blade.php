@extends('template')
@section('content')
<div class="container">
  <div class="jumbotron mt-3">
      <h1 class="display-4">Edit {{$pembicara->nama}}</h1>
      <p>Edit Pembicara</p>
  </div>
</div>
<div class="container">
    <form method="POST" action="/admin/pembicara/{{$pembicara->id}} ">
        @method('PUT')
      @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $pembicara->name }}">
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label" >Description</label>
          <input id="description" type="hidden" name="description" value="{{$pembicara->description}}">
          <trix-editor input="description"></trix-editor>
          @error('description')
          <p class="text-danger">
            {{$message}}
          </p>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
@endsection
