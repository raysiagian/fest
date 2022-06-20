@extends('template')
@section('content')
<div class="container">
    <div class="jumbotron mt-3">
        <h1 class="display-4">Detail Content</h1>
        <p>Detail Content Jadwal</p>
    </div>
</div>
<div class="container">
  Back To Data Jadwal
  <a href="/admin/jadwal" class="btn btn-primary">Click Here</a>
</div>
<div class="container">
    <h2>{{$jadwal->name}}</h2>
    <p>Jadwal id: {{$jadwal->id}}</p>
       <div class="table-responsive">
            <div class="div my-2">
             <a href="/admin/post/{{$jadwal->id}}/edit" class="btn btn-warning">Edit</a>
             <form action="/admin/post/{{$jadwal->id}}" class="d-inline " method="POST">
             @method('delete')
             @csrf
             <button class="btn btn-danger" onclick="return confirm('Are You Sure Deleting the Jadwal?')">Delete</button>
             </form>
            </div>
             <div class="container">
          </div>
             <p>{!! $jadwal->description !!}</p>
           </div>
       </div>
     </div>
   </div>
@endsection

