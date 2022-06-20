@extends('template')
@section('content')
<div class="container">
  <div class="jumbotron mt-3">
      <h1 class="display-4">Create New Jadwal</h1>
      <p>Create Jadwal</p>
  </div>
</div>
<div class="container">
    <form method="POST" action="/admin/jadwal" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="date" class="form-label">Tanggal dan Waktu</label>
          <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('name') }}">
          @error('date')
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
        </div>
        <button type="submit" class="btn btn-primary">Create Jadwal</button>
    </form>
</div>
@endsection