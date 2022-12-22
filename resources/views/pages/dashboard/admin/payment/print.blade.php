<!DOCTYPE html>
<html>
<head>
	<title>Laporan Tabungan Siswa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Pembayaran Siswa</h4>
	</center>
 
	<div class="table-responsive table-responsive-data2">
		<table class="table table-data2">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Hari</th>
					<th>Jumlah</th>
					<th>Jenis Pembayaran</th>
					<th>Status</th>
				</tr>
			</thead>
			@foreach ($payments as $payment)
				<tr>
					<td>{{ $payment->name }}</td>
					<td>{{  \Carbon\Carbon::parse($payment->created_at)->translatedFormat('l, d F Y'); }}</td>
					<td>Rp. {{ number_format($payment->sum, 2) }}</td>
					<td>{{ $payment->category }}</td>
					<td>{{ $payment->status }}</td>
				</tr>
				<tr class="spacer"></tr>
			</tbody> 
			@endforeach
		</table>
	</div>
 
</body>
</html>