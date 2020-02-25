<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampilkan Data</title>
    <link rel="stylesheet" href="{{ asset('css/tess.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/getdata.js') }}"></script>
</head>
<body>
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Data pembelian</h1>
				<table class="table table-bordered" border="1" >
					<thead class="thead-dark">
					    <tr>
                          <th>Tanggal Beli</th>
                          <th>Nama Pembeli</th>
                          <th>Nama Penjual</th>
                          <th>Nama Produk</th>
                          <th>Jumlah</th>
                          <th>Harga</th>
                          <th>SubTotal</th>
					    </tr>
					 </thead>
					 <tbody id="data">
					 	
					 </tbody>
				</table>
			</div>
        </div>
    </div>
</body>
</html>