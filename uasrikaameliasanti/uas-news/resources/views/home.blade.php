<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('template/dist/img/E-NEWS.png') }}">
  <title>202053056 | Nabiilah Arlita Putriyana</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  @stack('css')
  
    <!-- NAVBAR -->
  <nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <img src="{{ asset('template/dist/img/E-NEWS.png') }}" alt="ICONRW" width="50px">Portal Berita Berbasis Web
    <a href="/login" class="btn btn-info">Login</a>
  </div>
  </nav>

</head>

<body>
  <br>
  <br>
  <!-- Kotak Deskripsi E-NEWS -->
<div class="container">

<div class="d-flex flex-row mb-3">
  <div class="p-2">Deskripsi</div>
</div>


<div class="card text-bg-light">
  <img src="{{ asset('template/dist/img/BG.png') }}" class="card-img" alt="Background Kapal">
  <div class="card-img-overlay">
    <img src="{{ asset('template/dist/img/E-NEWS.png') }}" alt="ICONRW" width="100px"> 
    <h2 class="display" style="color:white; font-size:500%; font-family:Berlin Sans FB Demi;">E-NEWS</h2>
    <p class="text-break" style="color:white; ">Artikel/berita yang bersumber dari media elektronik adalah artikel/berita dalam bentuk digital yang mana memerlukan media/alat elektronik (PC, Laptop, Handphone, Tablet, dll) untuk dapat mengakses/ membaca artikel/berita tersebut.</p>
    <p class="text-light" ><small>Dibuat oleh : Nabiilah Arlita Putriyana | 202053056</small></p>
  </div>
</div>


<!--  QUOTES -->
<div class="card">
  <div class="card-body">
          <figure class="text-center">
          <blockquote class="blockquote">
            <p>"Yakinlah dari sekian banyak mendung, akan ada titik bahagia yang tak mampu kau hitung"</p>
          </blockquote>
          <figcaption class="blockquote-footer">
          Nabiilah Arlita Putriyana<cite title="Source Title"></cite>
          </figcaption>
        </figure>
  </div>
</div>
<div class="col-12">
                <div class="row">
                @foreach ($data as $item)
                  <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                            <img src="{{ asset('fotoberita/'.$item->foto) }}" alt="" width="220" height="200" align="center" style="align:justify">
                            <br>
                            <br>
                                <h5 class="card-title" style="text-align:justify">{{ $item->judul }}</h5>
                                <p class="card-text" style="text-align:justify"><small>{{ $item->penulis }}</small></p>
                                <p class="card-text" style="text-align:justify"><small>{{ substr($item->deskripsi, 0, 100) }}</small></p>
                            </div>
                        </div>
                        <br>
                    </div>
                    @endforeach
                    </div>
            </div>
        </div>

        
</div>





























<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('template/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('template/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('template/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('template/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('template/dist/js/pages/dashboard2.js') }}"></script>

@stack('scripts')
</body>
</html>
