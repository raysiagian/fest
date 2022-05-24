
@extends('layouts.main')


@section('container')
<h6>News</h6>
<h2>Seputar Festival</h2>
@endsection

@section('container3')
<div class="container p-4">
    <h2 class="section-heading">News</h2>

</div>
@endsection

@section('cardsrow')
<article>
    @foreach ($data as $item)
    <h3> {{$item['item']}}</h3>
    <p>{{$item['description']}} </p>

</article>
@endsection

@section('buttonback')
<div class="container p-4">
    <div class="d-flex justify-content-center">
        <a href="/" class="btn btn-light light" role="button" style="color:white;background-color: #a12c2f;">Kembali</a>
    </div>
</div>

@endsection

