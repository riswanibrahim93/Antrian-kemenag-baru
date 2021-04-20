<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

    <title>@yield('title')</title>
  </head>
  <body>

    <section class=" bg-success">
      <div class="container pt-2">
          <div class="row text-white  text-center">
            <div class="col-sm-2">
              <img src="{{ asset('img/Logo_kemenag.png') }}" alt="" width="80" class="d-inline-block align-text-top">
            </div>
            <div class="col-sm-10">
              <h3>KANTOR KEMENTERIAN AGAMA KABUPATEN TRENGGALEK</h3>
              <P>Jl. Soekarno Hatta, Gg. Apel, Kelutan, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66313</P>
            </div>
          </div>  
        </div>
    </section>
    
    @yield('container')
    
    <!--  footer -->
  <footer class="bg-success ">
      <div class="text-center p-2 text-white" style="background-color: rgba(0, 0, 0, 0.2); ">
      © 2021 Copyright:
      <a class="text-white" href="https://www.uin-malang.ac.id/">UIN Maulana Malik Ibrahim Malang</a>
      </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>