<html>
<head>
	<title>BUKTI LAPORAN KECELAKAAN KERJA ONLINE</title>
	<style type="text/css">
		.box{
			width: 100%;
			height: 88%;
			border: 1px solid;
		}
		.menu{
			width: 95%;
			height: 30px;
			border: 1px solid;
			margin-left: 20px;
			margin-top: 150px;
			background-color:#a3a375;
		}

		.footer{
			width: 95%;
			height: 30px;
			border: 1px solid;
			margin-left: 20px;
			margin-top: 50px;
			background-color:#a3a375;
		}
		P{
			margin-top: -0px;
		}
		table{
			margin-top: 10px;
			margin-left: 20px;
		}
	</style>
	
</head>
<body>
	
	<div class="box">
		<img src="{{asset('layout/images/binwasker.jpeg')}}" style="width: 30%; margin-top: 20px; ">
		<img src="{{asset('layout/images/bpjs.jpg')}}" style="width: 30%; margin-top: -70px; margin-left: 450px;">
		<center>
		<div class="menu" style="margin-top: -50px;">
			<p>BUKTI LAPORAN KECELAKAAN KERJA ONLINE</p>
		</div>
	
		</center>

		<table>
			<tr>
				<td>Nama Peserta</td>
				<td>:</td>
				<td>{{$cetak->nama_peserta}}</td>
			</tr>

			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td> 
				<td>{{$cetak->jk}}</td>
			</tr>

			<tr>
				<td>Tahun Lahir</td>
				 <td>:</td>
				<td>{{$cetak->thn_lahir}}</td>
			</tr>

			<tr>
				<td>Nama Perusahaan</td>
				<td>:</td>
				<td>{{$cetak->nama_perusahaan}}</td>
			</tr>

			<tr>
				<td>Wilayah</td>
				<td>:</td>
				<td>{{$cetak->wilayah}}</td>
			</tr>

			<tr>
				<td>No Telepon</td>
				<td>:</td> 
				<td>{{$cetak->no_tlp}}</td>
			</tr>

			<tr>
				<td>Tanggal Kecelakaan</td>
				<td>:</td> 
				<td>{{$cetak->tgl_kecelakaan}}</td>
			</tr>

			<tr>
				<td>Tempat Kejadian</td>
				<td>:</td>
				<td>{{$cetak->tempat_kejadian}}</td>
			</tr>

			<tr>
				<td>Unsur Penyebab</td> 
				<td>:</td>
				<td>{{$cetak->unsur_penyebab}}</td>
			</tr>

			<tr>
				<td>Uraian Kecelakaan</td>
				<td>:</td>
				<td>{{$cetak->uraian_kecelakaan}}</td>
			</tr>

			<tr>
				<td>SKD</td>
				<td>:</td>
				<td>{{$cetak->skd}}</td>
			</tr>
              <br><br><br>
		

			<tr>
				<td>Email Perusahaan</td>
				<td>:</td>
				<td>{{$cetak->email}}</td>
			</tr>
		</table>

		<table>

			   <tr>
			   	<td>Foto Bagian Tubuh Yang Terluka</td>
			   </tr>
				<tr>
				<td>

					<img src="{{asset('poto/' . $cetak->unggah_poto)}}" style="width: 100px;">
				</td>
			</tr>
		</table>

		<div class="footer" style="width: 100%; margin-left: -2px;">
			<center>
			<p>UPTD PENGAWASAN KETENAGAKERJAAN 2021</p>
			</center>
		</div>
	</div>

	
		</body>
		</html>