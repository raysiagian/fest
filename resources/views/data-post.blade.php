@extends('template')
@section('content')
<div class="container">
    <div class="jumbotron mt-3">
        <h1 class="display-4">Post Only Admin or Editor</h1>
    </div>
</div>
<div class="container">
  Create New Post
  <a href="/admin/post/create" class="btn btn-primary">create here</a>
</div>
<div class="container">
    <h2>Content</h2>
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
                   <th scope="col">Title</th>
                   <th scope="col" >Action</th>

                 </tr>
               </thead>
               <tbody>
                 @foreach ($contents as $content)
                 <tr>
                   <td>{{$loop->iteration}}</td>
                   <td>{{$content->title}}</td>
                   <td>
                      <a href="/admin/post/{{$content->id}}" class="btn btn-info">Detail</a>
                      <a href="/admin/post/{{$content->id}}/edit" class="btn btn-warning">Edit</a>
                      <form action="/admin/post/{{$content->id}}" class="d-inline" method="POST">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger" onclick="return confirm('Are You Sure Deleting the Content?')">Delete</button>
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