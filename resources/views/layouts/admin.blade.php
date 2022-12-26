<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" type="image/png" sizes="16x16" href="storage/images/{{config('app.icon')}}">

  <title>BaanaBaana</title>

  @if (Auth()->user())

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="lib/css/datatables.min.css">
  <link rel="stylesheet" href="lib/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="lib/css/select.bootstrap4.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="lib/css/style.css">
  <link rel="stylesheet" href="lib/css/components.css">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" />
  @endif

  <link rel="stylesheet" href="lib/css/iziToast.min.css">
  @yield('css')
  @livewireStyles
</head>

<body>

@if (Auth()->user())
  <div id="app">

    <div class="main-wrapper">
        <div class="navbar-bg" style="background:#e96303;"></div>
        @include('layouts.header')

      @include('layouts.sidebar')

      <!-- Main Content -->
      <div class="main-content">
          <section class="section">
              <div class="section-header">
                  <h1 style="font-family: algerian;"><i class="{{$icon}}" style="font-size: 30px" aria-hidden="true"></i> {{$title}} </h1>
                </div>

                <div class="section-body">
                    @endif
            {{ $slot }}
            @if (Auth()->user())

        </div>
    </section>


</div>
@include('layouts.pied')
</div>
</div>
@endif

  @if (Auth()->user())

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="lib/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="lib/js/chart.min.js"></script>
  <script src="lib/js/datatables.min.js"></script>
  <script src="lib/js/dataTables.bootstrap4.min.js"></script>
  <script src="lib/js/dataTables.select.min.js"></script>

  <!-- Template JS File -->
  <script src="lib/js/scripts.js"></script>
  <script src="lib/js/sweetalert.min.js"></script>
  <script src="lib/js/custom.js"></script>
  {{-- <script src="lib/js/page/bootstrap-modal.js"></script> --}}


  <!-- Page Specific JS File -->
  <script src="lib/js/page/index.js"></script>
  <script src="lib/js/page/modules-datatables.js"></script>

  @endif
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
  <script src="lib/js/iziToast.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
   @yield('js')

<script>

window.addEventListener('swal:modal', event => {
    swal({
      title: event.detail.message,
      text: event.detail.text,
      icon: event.detail.type,
      confirmButtonText: "Oui"
    });
});

window.addEventListener('swal:confirm', event => {
    swal({
      title: event.detail.message,
      text: event.detail.text,
      icon: event.detail.type,
      buttons: true,
      dangerMode: true,
      confirmButtonText: 'Oui',
      cancelButtonText: 'Non',

    })
    .then((willDelete) => {
      if (willDelete) {
        window.livewire.emit('remove');
      }
    });
});


</script>

  <!-- Page Specific JS File -->
  @livewireScripts
</body>
</html>
