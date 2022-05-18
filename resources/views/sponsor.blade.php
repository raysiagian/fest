
@extends('layouts.main')


@section('container')
<h6>Sponsor</h6>
<h2>Sponsor Festival</h2>
@endsection

@section('container3')
<div class="container p-4">
    <h2 class="section-heading">Sponsor</h2>

</div>
@endsection

@section('cardsrow')
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
        @yield('container3')
        </div>
      </div>
   
            <div class="col-lg-12">
                <div class="owl-courses-item owl-carousel">
                    <div class="item">
                            <img src="assets/images/kabupaten_toba.png">
                            <div class="down-content">
                            <h4>Kabupaten Toba</h4>
                            <div class="info">
                                <div class="row">
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/inalum.png">
                            <div class="down-content">
                            <h4>Inalum</h4>
                            <div class="info">
                                <div class="row">
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/kemendikbud.png">
                            <div class="down-content">
                            <h4>kemendikbud</h4>
                            <div class="info">
                                <div class="row">
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/kemenparekraf.png">
                            <div class="down-content">
                            <h4>kemenparekraf</h4>
                            <div class="info">
                                <div class="row">
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/bank_sumut.png">
                            <div class="down-content">
                            <h4>Bank Sumut</h4>
                            <div class="info">
                                <div class="row">
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/perpustakaan_nasional.png">
                            <div class="down-content">
                            <h4>Perpustakaan Nasional</h4>
                            <div class="info">
                                <div class="row">
                                </div>
                            </div>
                            </div>
                        </div>
                        </div> 
                    </div>
                    </div>
                </div>
      


@endsection

@section('buttonback')
<div class="container p-4">
    <div class="d-flex justify-content-center">
        <a href="/" class="btn btn-light light" role="button" style="color:white;background-color: #a12c2f;">Kembali</a>
    </div>
</div>

@endsection

