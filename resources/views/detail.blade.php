@extends('template')
@section('content')
<div class="container">
    <div class="jumbotron mt-3">
        <h1 class="display-4">Detail Content</h1>
        <p>Detail Content Post</p>
    </div>
</div>
<div class="container">
  Back To Data Post
  <a href="/admin/post" class="btn btn-primary">Click Here</a>
</div>
<div class="container">
    <h2>{{$content->title}}</h2>
    <p>Content id: {{$content->id}}</p>
       <div class="table-responsive">
           {{-- <table class="table table-striped table-sm">
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Image</th>
                   <th scope="col">Title</th>
                   <th scope="col">Description</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <td>{{$content->id}}</td>
                   <td>{{$content->image}}</td>
                   <td>{{$content->title}}</td>
                   <td>{!! $content->description !!}</td>
                    <td>
                      <a href="/admin/post/{{$content->id}}/edit" class="btn btn-warning">Edit</a>
                      <form action="/admin/post/{{$content->id}}" class="d-inline" method="POST">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger" onclick="return confirm('Are You Sure Deleting the Content?')">Delete</button>
                      </form>
                      @if ($content->image)
                      <img src="{{asset('storage/' . $content->image)}}">
                      @endif
                    </td>
                   
                 </tr>
               </tbody>

             </table> --}}
           {{--   <p>#</p>
             <p>Image</p>
             <p>Description</p>
             <p>Action</p> --}}
            <div class="div my-2">
             <a href="/admin/post/{{$content->id}}/edit" class="btn btn-warning">Edit</a>
             <form action="/admin/post/{{$content->id}}" class="d-inline " method="POST">
             @method('delete')
             @csrf
             <button class="btn btn-danger" onclick="return confirm('Are You Sure Deleting the Content?')">Delete</button>
             </form>
            </div>
             @if ($content->image)
             <img src="{{asset('storage/' . $content->image)}}">
             @endif
             <div class="container">
             <video width="320" height="240" controls>
              <source src="{{asset('storage/' . $content->video)}}">
                @if ($content->video)
                <video src="{{asset('storage/' . $content->video)}}">
                @endif
            </video>
          </div>
             <p>{!! $content->description !!}</p>
           </div>
       </div>
     </div>
   </div>
@endsection

