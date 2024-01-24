<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Inventory</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('../assets/images/logos/betesda.png') }}" />
  <link rel="stylesheet" href="{{asset('../assets/css/styles.min.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @include('layouts.navbar')
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            @include('layouts.sidebar')
        </div>
        <div class="col-lg-10">
            <div class="card-body">
                    @yield('tabel')
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('../assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{asset('../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('../assets/js/sidebarmenu.js') }}"></script>
    <script src="{{asset('../assets/js/app.min.js') }}"></script>
    <script src="{{asset('../assets/libs/simplebar/dist/simplebar.js') }}"></script>
</body>
</html>

