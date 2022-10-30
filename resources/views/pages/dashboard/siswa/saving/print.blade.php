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
		<h5>Laporan Tabungan Siswa</h4>
		<h6>{{ Auth::user()->name }}</h5>
	</center>
 
	<table class="table table-data2">
		<thead>
			<tr>
				<th>Hari</th>
				<th>Jumlah</th>
				<th></th>
			</tr>
		</thead>
		@foreach ($savings as $saving)
			<tr>
				<td>{{  \Carbon\Carbon::parse($saving->created_at)->translatedFormat('l, d F Y'); }}</td>
				<td>Rp. {{ number_format($saving->paid, 2) }}</td>
			</tr>
			<tr class="spacer"></tr>
		@endforeach
			<td>Total Tabungan </td>
			<td></td>
			<td>Rp. {{ number_format($totalSavings, 2) }}</td>
	</table>
 
</body>
</html>