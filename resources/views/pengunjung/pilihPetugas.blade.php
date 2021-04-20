@extends('layouts/main')

@section('title', 'PTSP')
@section('container')

    <!-- card -->
    <div class="d-flex justify-content-center mt-5 mb-5">
      <div class="card text-center " style="width: 50rem;">
        <div class="card-body">
          <h5 class="card-title">PELAYANAN TERPADU SATU PINTU (PTSP)</h5>
          <hr>
          <div class="row">
            <div class="col-sm-6">
              <div class="card m-4 bg-success" >
                <div class="card-body">
                  <h5 class="card-title text-white">Petugas 1</h5>
                  <a href="/adminA1" class="btn btn-warning">Masuk <i class=" text-white fas fa-angle-double-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card m-4 bg-success" >
                <div class="card-body">
                  <h5 class="card-title text-white">Petugas 2</h5>
                  <a href="/adminA2" class="btn btn-warning">Masuk <i class="text-white fas fa-angle-double-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection