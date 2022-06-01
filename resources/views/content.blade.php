@extends('layouts.main')


@section('container')
<h6>Content</h6>
<h2>Seputar Festival</h2>
@endsection

@section('container4')
<div class="container p-4">
  



<div class="div">
    @foreach ($content as $key => $item
    )
    <div class="div my-4">
    
    {{-- 
      <h2 class="text">
          {{$item['title']}}
      </h2> --}}
      <h2 class=" mb-3">{{$item['title']}}</h2>
      <section class="section main-banner" id="top" data-section="section1">
        @if ($item->image)
        <img class="my-2" autoplay muted loop id="bg-images" src="{{asset('storage/' . $item->image)}}"/>
        @endif
       
     </section>
    <div class="container">
   {{--  <div class="card text-bg-dark mb-3" style="max-width: 1000px;">
        <div class="row g-0">
          <div class="col-lg-4">
            @if ($item->image)
            <img src="{{asset('storage/' . $item->image)}}" class="img-fluid rounded-start">
            @endif
          </div>
          <div class="col-lg-8">
            <div class="card-body">
              <h5 class="card-title text-center"> {{$item['title']}}</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div> --}}
     {{--  <div class="image my-2" >
        @if ($item->image)
        <img style="width: 80rem;height: 40rem" src="{{asset('storage/' . $item->image)}}">
        @endif
      </div> --}}
      <div class=" d-flex justify-content-center my-2" >
        @if ($item->video)
        <video width="600" height="300" controls>
            <source src="{{asset('storage/' . $item->video)}}" type="video/mp4">
          </video>
        @endif
      </div>
      <div class="container">
        <p class="text mb-3">
            {!!$item['description']!!}
        </p>
      </div>
      
      
    </div>
   @endforeach 
</div>
   <div class="div d-flex justify-content-center">
    {{$content->links()}}
   </div>
  
</div>
</div>
<div class="container p-4">
    <div class="d-flex justify-content-center">
        <a href="/" class="btn btn-light light" role="button" style="color:white;background-color: #a12c2f;">Kembali</a>
    </div>
</div>

@endsection