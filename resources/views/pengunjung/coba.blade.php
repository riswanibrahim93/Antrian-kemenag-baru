@extends('layouts/main')

@section('title', 'PTSP')
@section('container')

<!-- card -->
  <div class="d-flex justify-content-center mt-5 mb-5">
    <div class="card text-center " style="width: 50rem;">
      <div class="card-header">
        <h2>SELAMAT DATANG DI
        <br>PELAYANAN TERPADU SATU PINTU (PTSP)
        </h2>
      </div>
      <div class="card-body">
        <h3>Nomor Antrian Anda:</h3>
        <h3 class="display-4 font-weight-bold" >{{ $nomor }}</h3>
      </div>
      <div class="card-footer">
        <form action="/antrian" method="post" class="d-inline">
          @csrf
          <button type="submit"class="btn btn-success mr-3">Print</button>
        </form>
        <!-- <input class="btn btn-submit mr-3" type="submit" name="submit" value="Print"> -->
      </div>
    </div>
  </div>

@endsection