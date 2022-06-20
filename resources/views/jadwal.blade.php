@extends('layouts.main')


@section('container')
<h6>Jadwal</h6>
<h2>List jadwal Event</h2>
@endsection


@section('container4')
<div class="container my-5 ">
<div class="div">
            <div class="row ">
                @foreach ($jadwal as $key => $item)
            <table class="table">
            <thead>
              <tr>
                <th scope="col">Nama Kegiatan </th>
                <th scope="col">Tanggal dan Waktu</th>
                <th scope="col">Deskripsi Kegiatan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> {{$item['name']}}</td>
                <td> {{$item['date']}}</td>
                <td> {!!$item['description']!!}</td>
              </tr>
            </tbody>
          </table>
	@endforeach
</div>

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

