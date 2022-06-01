@extends('template')
@section('content')

<div class="container">
  <div class="jumbotron mt-3">
      <h1 class="display-4">Dashboard admin</h1>
      <p>Selamat datang di halaman admin FLB</p>
  </div>
</div>
<div class="container">
{{-- <div class="card" style="width: 18rem;">
  <img src="assets/images/course-01.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> --}}
<div class="card flex-row"><img class="card-img-left example-card-img-responsive" src="assets/images/course-01.jpg"/>
  <div class="card-body">
    <h4 class="card-title h5 h4-sm">Salam Hangat</h4>
    <p class="card-text">Tetap semangat dalam bekerja demi berlangsungnya festival</p>
  </div>
</div>
</div>
      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
@endsection