<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Cetak Laporan Transaksi Hardware</title>
  </head>
  <body>
  <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
    </style>

    <h3> <center> Laporan Transaksi Hardware </center></h3>
    <table class="table table-hovermt-4 mt-2">
            <thead class="thead-light">
                <tr>
                    <th class="text-center" width="30px" scope="col"> No.</th>
                    <th class="text-center" width="50px" scope="col"> Kode Transaksi Hardware</th>
                    <th class="text-center" width="75px" scope="col"> Tanggal Pembelian</th>
                    <th class="text-center" width="90px" scope="col"> Nama Hardware</th>
                    <th class="text-center" width="50px" scope="col"> Vendor</th>
                    <th class="text-center" width="60px" scope="col"> Merk</th>
                    <th class="text-center" width="100px" scope="col"> Spesifikasi</th>
                    <th class="text-center" width="50px" scope="col"> Harga</th>
                </tr>
            </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($transaksi_hardware as $th)
            <tr>
                <td class="text-center"> {{$i++}} </td>
                <td class="text-center"> {{$th -> kodeth}} </td>
                <td class="text-center"> {{$th -> tgl_pembelian}}</td>
                <td class="text-center"> {{$th -> namahw}} </td>
                <td class="text-center"> {{$th -> namavd}}</td>
                <td class="text-center"> {{$th -> merk}}</td>
                <td class="text-center"> {{$th -> spesifikasi}}</td>
                <td class="text-center"> {{$th -> harga}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
