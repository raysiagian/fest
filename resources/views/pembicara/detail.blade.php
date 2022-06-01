@extends('template')
@section('content')
<div class="container">
    <div class="jumbotron mt-3">
        <h1 class="display-4">Detail Content</h1>
        <p>Detail Content Post</p>
    </div>
</div>
<div class="container">
  Back To Data Pembicara
  <a href="/admin/pembicara" class="btn btn-primary">Click Here</a>
</div>
<div class="container">
    <h2>{{$pembicara->name}}</h2>
    <p>Pembicara id: {{$pembicara->id}}</p>
       <div class="table-responsive">
            <div class="div my-2">
             <a href="/admin/post/{{$pembicara->id}}/edit" class="btn btn-warning">Edit</a>
             <form action="/admin/post/{{$pembicara->id}}" class="d-inline " method="POST">
             @method('delete')
             @csrf
             <button class="btn btn-danger" onclick="return confirm('Are You Sure Deleting the pembicara?')">Delete</button>
             </form>
            </div>
             @if ($pembicara->image)
             <img src="{{asset('storage/' . $pembicara->image)}}">
             @endif
             <div class="container">
          </div>
             <p>{!! $pembicara->description !!}</p>
           </div>
       </div>
     </div>
   </div>
@endsection

