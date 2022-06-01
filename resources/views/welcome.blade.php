@extends('layouts.main')


@section('container')
<h6>Horas</h6>
<h2>Selamat datang di Festival Literasi Balige</h2>
@endsection


@section('section1')
@include('layouts.landingpage.section1')


<div class="div">
    <section class="upcoming-meetings" id="meetings">
      <div class="container">
        <div class="row ">
          <div class="col-lg-12">
            <div class="section-heading">
              <h2>Festival Literasi Balige</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="categories">
              @foreach ($home as $home)
              <h4>{{ $home ["tittle"] }}</h4>
              <h5>{{  $home ["author"] }}</h5>
              <p>{{  $home ["body"] }}</p>
              @endforeach
              <div class="main-button-red">
                <a href="/content">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-6">
                <div class="meeting-item">
                  <div class="thumb">
                    <img src="assets/images/IMG_20220327_133050.jpg">
                  </div>
                  <div class="down-content">
                    <h4>Danau Toba Pusat kebudayaan Batak</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="meeting-item">
                  <div class="thumb">
                   <img src="assets/images/balige1.jpg" >
                  </div>
                  <div class="down-content">
                    <h4>Kehidupan Masyarakat sekitar</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="meeting-item">
                  <div class="thumb">
                   <img src="assets/images/landingpage.jpg">
                  </div>
                  <div class="down-content">
                   <h4>Kebudayaan Masyarakat</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="meeting-item">
                  <div class="thumb">
                    <img src="assets/images/literasi.jpg">
                  </div>
                  <div class="down-content">
                 
                    <h4>Literasi Masyarakat</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 
    <section  id="meetings">
        <div class="container py-4">
            <div class="row">
            <div class="col-lg-12">
                <div>
                
                <article class="accordion">
                    <h1>
                        Festival Literasi Balige
                    </h1>
                    <p class="mb-4">
                        Dari Balige untuk Indonesia
                    </p>
                    <h3 class="text-center p-3">Sponsor</h3>
                    <div class="row mb-4">
                        <div class="col-sm-2">
                        <div class="card">
                            <img src="assets/images/kabupaten_toba.png"class="card-img-top" alt="...">
                        </div>
                        </div>
                        <div class="col-sm-2">
                        <div class="card">
                            <img src="assets/images/inalum.png" class="card-img-top" alt="...">
                        </div>
                        </div>
                        <div class="col-sm-2">
                        <div class="card">
                            <img src="assets/images/kemendikbud.png"class="card-img-top" alt="...">
                        </div>
                        </div>
                        <div class="col-sm-2">
                        <div class="card">
                            <img  src="assets/images/kemenparekraf.png"class="card-img-top" alt="...">
                        </div>
                        </div>
                        <div class="col-sm-2">
                        <div class="card">
                            <img  src="assets/images/bank_sumut.png"class="card-img-top" alt="...">
                        </div>
                        </div>
                        <div class="col-sm-2">
                        <div class="card">
                            <img  src="assets/images/perpustakaan_nasional.png"class="card-img-top" alt="...">
                        </div>
                        </div>
                    </div>
                </article>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>
@endsection
