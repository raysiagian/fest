
@extends('layouts.main')


@section('container')
<h6>Media</h6>
<h2>Media Festival</h2>
@endsection

@section('container4')
<section class="our-courses">
  <div class="container">
    <div class="container p-4">
      <h2 class="section-heading text-white">Media</h2>
    </div>
    <div class="col-lg-12">
      <div class="owl-courses-item owl-carousel">
        <div class="item">
          <img src="assets/images/del_fm.png">
          <div class="down-content">
            <h4>92,4 Del FM</h4>
          </div>
        </div>
        <div class="item">
          <img src="assets/images/tobasa_fm.png">
          <div class="down-content">
            <h4>100,4 Tobasa FM</h4>
          </div>
        </div>
        <div class="item">
          <img src="assets/images/toba_tv.png">
          <div class="down-content">
            <h4>Toba TV</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <div class="container p-4">
    <div class="d-flex justify-content-center">
        <a href="/" class="btn btn-light light" role="button" style="color:white;background-color: #a12c2f;">Kembali</a>
    </div>
</div>

@endsection

