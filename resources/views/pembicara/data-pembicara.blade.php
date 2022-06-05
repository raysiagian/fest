@extends('template')
@section('content')
<div class="container">
    <div class="jumbotron mt-3">
        <h1 class="display-4">Data Pembicara</h1>
    </div>
</div>
<div class="container">
  Create New Post
  <a href="/admin/pembicara/create" class="btn btn-primary">create here</a>
</div>
<div class="container">
    <h2>Pembicara</h2>
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    </div>
    @endif
       <div class="table-responsive">
           <table class="table table-striped table-sm">
               <thead>
                 <tr>
                   <th scope="col">Id</th>
                   <th scope="col">nama</th>
                   <th scope="col" >Action</th>

                 </tr>
               </thead>
               <tbody>
                 @foreach ($pembicaras as $pembicara)
                 <tr>
                   <td>{{$loop->iteration}}</td>
                   <td>{{$pembicara->name}}</td>
                   <td>
                      <a href="/admin/pembicara/{{$pembicara->id}}" class="btn btn-info">Detail</a>
                      <a href="/admin/pembicara/{{$pembicara->id}}/edit" class="btn btn-warning">Edit</a>
                      <form action="/admin/pembicara/{{$pembicara->id}}" class="d-inline" method="POST">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger" onclick="return confirm('Are You Sure Deleting the Pembicara?')">Delete</button>
                      </form>
                     </td>
                 </tr>
                 @endforeach
               </tbody>

             </table>
           </div>
       </div>
     </div>
   </div>
@endsection