@extends('layouts.main')


@section('container')
<h6>Pembicara</h6>
<h2>List Pembicara</h2>
@endsection


@section('section1')
@include('layouts.landingpage.section1')
@endsection

@section('container4')
<section class="our-courses">
<div class="container ">
  



<div class="div">
    
    
    <div class="row">
        @foreach ($pembicara as $key => $item)
        <div class="col-4">
         <div class="card-deck">
           <div class="card">
            <img class="card-img-top" src="{{asset('storage/' . $item->image)}}">
            <div class="card-body">
              <h5 class="card-title">{{$item['name']}}</h5>
              <p class="text mb-3">
                {!!$item['description']!!}
            </p>
            </div>
          </div>
         </div>
        </div>
        @endforeach 
    </div>
   
  
</div>
</section>
   <div class="div d-flex justify-content-center my-3">
   
   </div>
  
</div>
</div>
<div class="container p-4">
    <div class="d-flex justify-content-center">
        <a href="/" class="btn btn-light light" role="button" style="color:white;background-color: #a12c2f;">Kembali</a>
    </div>
</div>

@endsection

