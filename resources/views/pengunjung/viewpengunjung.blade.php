@extends('layouts/main')

@section('title', 'PTSP')
@section('container')

    <!-- card -->
    <div class="d-flex justify-content-center mt-5 mb-5">
      <div class="card text-center " style="width: 50rem;">
        <!-- <div class="card-header">
          <h4>PELAYANAN TERPADU SATU PINTU</h4>
        </div> -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5 pt-5">
              <h3 class=" mt-5">Nomor Antrian:</h3>
              <h3 class="display-5  font-weight-bold" id="nomor"></h3>
              <h3 class=" mt-5">ke loket:</h3>
              <h3 class=" display-5 font-weight-bold" id="admin"></h3>
            </div>
            <div class="col-sm-7">
              <div class="embed-responsive embed-responsive-4by3 p-4">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GBnVNMZDQMM?autoplay=1&mute=1&loop=1&playlist=GBnVNMZDQMM" width="400" height="300"></iframe>
            </div>
          </div>
        </div>    
      </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.js') }}"></script>


<script type="text/javascript">
  $(document).ready(function() {
    selesai();
});
 
function selesai() {
  setTimeout(function() {
    update();
    selesai();
  }, 200);
}
 
function update() {
  $.getJSON("viewnomor", function(data) {
    $.each(data, function(result, nomor) {
      var nmr = nomor
      document.getElementById("nomor").innerHTML = nmr
    });
  });
  $.getJSON("viewadmin", function(data) {
    $.each(data, function(result, admin) {
      var adm = admin
      document.getElementById("admin").innerHTML = adm
    });
  });
}
 
</script>

@endsection