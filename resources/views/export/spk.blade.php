<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{{ $persyaratan->petani->name }}</title>
	<meta name="author" content="My Acer" />
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			text-indent: 0;
		}

		h3 {
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: bold;
			text-decoration: none;
			font-size: 12pt;
		}

		h1 {
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: bold;
			text-decoration: none;
			font-size: 18pt;
		}

		h2 {
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: bold;
			text-decoration: none;
			font-size: 17pt;
		}

		.s1 {
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 8pt;
		}

		p {
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 12pt;
			margin: 0pt;
		}

		.s2 {
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 12pt;
		}

		.s3 {
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: bold;
			text-decoration: none;
			font-size: 11pt;
		}

		.s4 {
			color: black;
			font-family: "Times New Roman", serif;
			font-style: italic;
			font-weight: bold;
			text-decoration: none;
			font-size: 11pt;
		}

		.s5 {
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 11pt;
		}

		.s6 {
			color: black;
			font-family: Cambria, serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 11pt;
		}

		.s7 {
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: bold;
			text-decoration: none;
			font-size: 12pt;
		}

		li {
			display: block;
		}

		#l1 {
			padding-left: 0pt;
			counter-reset: c1 1;
		}

		#l1>li>*:first-child:before {
			counter-increment: c1;
			content: "(" counter(c1, decimal)") ";
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 12pt;
		}

		#l1>li:first-child>*:first-child:before {
			counter-increment: c1 0;
		}

		li {
			display: block;
		}

		#l2 {
			padding-left: 0pt;
			counter-reset: d1 1;
		}

		#l2>li>*:first-child:before {
			counter-increment: d1;
			content: "(" counter(d1, decimal)") ";
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 12pt;
		}

		#l2>li:first-child>*:first-child:before {
			counter-increment: d1 0;
		}

		li {
			display: block;
		}

		#l3 {
			padding-left: 0pt;
			counter-reset: e1 1;
		}

		#l3>li>*:first-child:before {
			counter-increment: e1;
			content: "(" counter(e1, decimal)") ";
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 12pt;
		}

		#l3>li:first-child>*:first-child:before {
			counter-increment: e1 0;
		}

		li {
			display: block;
		}

		#l4 {
			padding-left: 0pt;
			counter-reset: f1 1;
		}

		#l4>li>*:first-child:before {
			counter-increment: f1;
			content: "(" counter(f1, decimal)") ";
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 12pt;
		}

		#l4>li:first-child>*:first-child:before {
			counter-increment: f1 0;
		}

		#l5 {
			padding-left: 0pt;
			counter-reset: f2 1;
		}

		#l5>li>*:first-child:before {
			counter-increment: f2;
			content: "(" counter(f2, decimal)") ";
			color: black;
			font-family: "Times New Roman", serif;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			font-size: 12pt;
		}

		#l5>li:first-child>*:first-child:before {
			counter-increment: f2 0;
		}

		table,
		tbody {
			vertical-align: top;
			overflow: visible;
		}
	</style>
</head>

<body>
	<div style="display: flex;align-items: center;justify-content: center">
		<p style="text-indent: 0pt;text-align: left;"><span><img height="88" alt="Seruyan" title="Seruyan" src="{{ asset('seruyan.png') }}" /></span></p>
		<div style="margin-left: 20px">
			<h3 style="padding-top: 3pt;text-indent: 0pt;text-align: center;">PEMERINTAH KABUPATEN SERUYAN</h3>
			<h1 style="text-indent: 0pt;text-align: center;">DINAS KETAHANAN PANGAN DAN PERTANIAN</h1>
			<h2 style="text-indent: 0pt;line-height: 20pt;text-align: center;">KABUPATEN SERUYAN</h2>
			<p class="s1" style="padding-bottom: 4pt;text-indent: 0pt;line-height: 9pt;text-align: center;">Jalan Jenderal A. Yani No. Kuala PembuangProvinsi Kalimantan TengahTelpon/fax. (0538) 2022340 Kode Pos (74212)</p>
		</div>
	</div>
	<p style="padding-left: 10pt;text-indent: 0pt;line-height: 5pt;text-align: center;"><span><img width="696" height="6" alt="image" src="{{ asset('border.png') }}" /></span></p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="text-indent: 22pt;text-align: center;">PERJANJIAN SEWA ALAT DAN MESIN PERTANIAN ( ALSINTAN )</p>
	<p style="text-indent: 22pt;text-align: center;">DINAS KETAHANAN PANGAN DAN PERTANIAN KABUPATEN SERUYAN</p>
	<p style="padding-left: 149pt;text-indent: 0pt;text-align: left; display: flex;align-items: center;justify-content: space-evenly"><span>NOMOR : 520.31 /</span> <span>/ DKPP/ TU/V/2023</span></p>
	<p style="padding-left: 50pt;text-indent: 0pt;text-align: center;">antara</p>
	<p style="padding-left: 49pt;text-indent: 0pt;text-align: center;">DINAS KETAHANAN PANGAN DAN PERTANIAN KABUPATEN SERUYAN</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 50pt;text-indent: 0pt;text-align: center;">Dengan</p>
	<p style="padding-left: 50pt;text-indent: 0pt;text-align: center;">Tn. <b>{{ $persyaratan->petani->name }}</b></p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-top: 4pt;padding-left: 26pt;text-indent: 0pt;text-align: left;">Pada hari [tanggal dalam bahasa] :</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<table style="border-collapse:collapse;margin-left:16.425pt" cellspacing="0">
		<tr style="height:14pt">
			<td style="width:118pt">
				<p class="s2" style="padding-left: 8pt;padding-right: 9pt;text-indent: 0pt;line-height: 13pt;text-align: center;">PIHAK PERTAMA</p>
			</td>
			<td style="width:20pt">
				<p class="s2" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: right;">:</p>
			</td>
			<td style="width:79pt">
				<p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Nama</p>
			</td>
			<td style="width:262pt">
				<p class="s2" style="padding-left: 25pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ALBIDINNOR, SP</p>
			</td>
		</tr>
		<tr style="height:14pt">
			<td style="width:118pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
			</td>
			<td style="width:20pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
			</td>
			<td style="width:79pt">
				<p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">NIP</p>
			</td>
			<td style="width:262pt">
				<p class="s2" style="padding-left: 25pt;text-indent: 0pt;line-height: 13pt;text-align: left;">19771112 200604 1 016</p>
			</td>
		</tr>
		<tr style="height:28pt">
			<td style="width:118pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
			</td>
			<td style="width:20pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
			</td>
			<td style="width:79pt">
				<p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 14pt;text-align: left;">Jabatan</p>
			</td>
			<td style="width:262pt">
				<p class="s2" style="padding-left: 25pt;text-indent: 0pt;line-height: 14pt;text-align: left;">Kepala Dinas Ketahanan Pangan dan Pertanian</p>
				<p class="s2" style="padding-left: 25pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Kabupaten Seruyan</p>
			</td>
		</tr>
		<tr style="height:35pt">
			<td style="width:118pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
			</td>
			<td style="width:20pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
			</td>
			<td style="width:79pt">
				<p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 14pt;text-align: left;">Alamat</p>
			</td>
			<td style="width:262pt">
				<p class="s2" style="padding-left: 25pt;padding-right: 19pt;text-indent: 0pt;text-align: left;">Jl. A. Yani Kuala Pembuang II Seruyan Hilir Kabupaten Seruyan</p>
			</td>
		</tr>
		<tr style="height:21pt">
			<td style="width:118pt">
				<p class="s2" style="padding-top: 6pt;padding-left: 4pt;padding-right: 9pt;text-indent: 0pt;line-height: 13pt;text-align: center;">PIHAK KEDUA</p>
			</td>
			<td style="width:20pt">
				<p class="s2" style="padding-top: 6pt;padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: right;">:</p>
			</td>
			<td style="width:79pt">
				<p class="s2" style="padding-top: 6pt;padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Nama</p>
			</td>
			<td style="width:262pt">
				<p class="s2" style="padding-top: 6pt;padding-left: 25pt;text-indent: 0pt;line-height: 13pt;text-align: left;">{{ $persyaratan->petani->name }}</p>
			</td>
		</tr>
		<tr style="height:14pt">
			<td style="width:118pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
			</td>
			<td style="width:20pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
			</td>
			<td style="width:79pt">
				<p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Pekerjaan</p>
			</td>
			<td style="width:262pt">
				<p class="s2" style="padding-left: 25pt;text-indent: 0pt;line-height: 13pt;text-align: left;">{{ $persyaratan->petani->job }}</p>
			</td>
		</tr>
		<tr style="height:14pt">
			<td style="width:118pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
			</td>
			<td style="width:20pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
			</td>
			<td style="width:79pt">
				<p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Alamat</p>
			</td>
			<td style="width:262pt">
				<p class="s2" style="padding-left: 25pt;text-indent: 0pt;line-height: 13pt;text-align: left;">{{ $persyaratan->petani->alamat }}</p>
			</td>
		</tr>
	</table>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 26pt;text-indent: 0pt;text-align: left;">KEDUA BELAH PIHAK sepakat untuk mengadakan perjanjian sewa Alsintan yang diatur sebagai berikut :</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<h3 style="padding-left: 49pt;text-indent: 0pt;text-align: center;">PASAL 1</h3>
	<h3 style="padding-left: 49pt;text-indent: 0pt;text-align: center;">JENIS, JUMLAH, JANGKA WAKTU, DAN BIAYA PENGGUNAAN ALSINTAN</h3>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: justify;">( 1 ) PIHAK KEDUA menggunakan Alsintan dari PIHAK PERTAMA dan PIHAK PERTAMA menyerahkan Alsintan yang digunakan kepada PIHAK KEDUA, Alsintan dengan Jenis, Jumlah, Jangka Waktu dan Biaya penggunaan sebagai berikut :</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<table style="border-collapse:collapse;margin-left:5.25pt" cellspacing="0">
		<tr style="height:51pt">
			<td style="width:29pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="2">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s3" style="padding-left: 7pt;text-indent: 0pt;text-align: left;">No</p>
			</td>
			<td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="2">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s3" style="padding-left: 37pt;padding-right: 10pt;text-indent: -26pt;text-align: left;">Jenis, Merk dan Type</p>
			</td>
			<td style="width:42pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="2">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s3" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Tahun</p>
			</td>
			<td style="width:77pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="2">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s3" style="padding-left: 18pt;padding-right: 12pt;text-indent: -4pt;text-align: left;">Kode Unit Alsintan</p>
			</td>
			<td style="width:112pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
				<p class="s3" style="padding-left: 27pt;padding-right: 20pt;text-indent: -5pt;text-align: left;">Jangka Waktu Penggunaan</p>
			</td>
			<td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s3" style="padding-top: 10pt;padding-left: 13pt;padding-right: 6pt;text-indent: -6pt;line-height: 13pt;text-align: left;">Jumlah Hari</p>
			</td>
			<td style="width:135pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="2">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s3" style="padding-left: 23pt;text-indent: 0pt;text-align: left;">Biaya Penggunaan</p>
			</td>
		</tr>
		<tr style="height:51pt">
			<td style="width:54pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s3" style="padding-left: 5pt;padding-right: 19pt;text-indent: 0pt;text-align: left;">Tgl. Mulai</p>
			</td>
			<td style="width:58pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s3" style="padding-left: 5pt;padding-right: 20pt;text-indent: 0pt;text-align: left;">Tgl. Selesai</p>
			</td>
			<td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
			</td>
			<td style="width:54pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s3" style="padding-left: 16pt;padding-right: 16pt;text-indent: 1pt;text-align: left;">Per hari</p>
			</td>
			<td style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s3" style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;text-align: center;">Jumlah 7 x 8</p>
			</td>
		</tr>
		<tr style="height:13pt">
			<td style="width:29pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p class="s4" style="text-indent: 0pt;line-height: 12pt;text-align: center;">1</p>
			</td>
			<td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p class="s4" style="text-indent: 0pt;line-height: 12pt;text-align: center;">2</p>
			</td>
			<td style="width:42pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p class="s4" style="text-indent: 0pt;line-height: 12pt;text-align: center;">3</p>
			</td>
			<td style="width:77pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p class="s4" style="text-indent: 0pt;line-height: 12pt;text-align: center;">4</p>
			</td>
			<td style="width:54pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p class="s4" style="text-indent: 0pt;line-height: 12pt;text-align: center;">5</p>
			</td>
			<td style="width:58pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p class="s4" style="text-indent: 0pt;line-height: 12pt;text-align: center;">6</p>
			</td>
			<td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p class="s4" style="text-indent: 0pt;line-height: 12pt;text-align: center;">7</p>
			</td>
			<td style="width:54pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p class="s4" style="text-indent: 0pt;line-height: 12pt;text-align: center;">8</p>
			</td>
			<td style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p class="s4" style="text-indent: 0pt;line-height: 12pt;text-align: center;">9</p>
			</td>
		</tr>
		<tr style="height:64pt">
			<td style="width:29pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s5" style="text-indent: 0pt;text-align: center;">1</p>
			</td>
			<td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s6" style="padding-left: 5pt;padding-right: 5pt;text-indent: 2pt;line-height: 149%;text-align: left;">{{ $persyaratan->alsitan->name . ' ' . $persyaratan->alsitan->merek . ' ' . $persyaratan->alsitan->tipe }}</p>
			</td>
			<td style="width:42pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s5" style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;text-align: center;">{{ $persyaratan->alsitan->tahun }}</p>
			</td>
			<td style="width:77pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s5" style="padding-left: 13pt;padding-right: 13pt;text-indent: 1pt;text-align: justify;">{{ $persyaratan->alsitan->kode }}</p>
			</td>
			<td style="width:54pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s5" style="padding-left: 11pt;text-indent: 0pt;line-height: 13pt;text-align: left;">{{ $persyaratan->mulai->isoFormat('D MMMM Y') }}</p>
			</td>
			<td style="width:58pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s5" style="padding-left: 5pt;padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: center;">{{ $persyaratan->sampai_dengan->isoFormat('D MMMM Y') }}</p>
			</td>
			<td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s5" style="padding-left: 16pt;text-indent: 0pt;line-height: 13pt;text-align: left;">{{ $persyaratan->mulai->diffInDays($persyaratan->sampai_dengan) + 1 }}</p>
				<p class="s5" style="padding-left: 14pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Hari</p>
			</td>
			<td style="width:54pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s5" style="padding-left: 7pt;padding-right: 7pt;text-indent: 0pt;text-align: center;">{{ number_format($persyaratan->biaya_perhari, 0, '.', '.') }},-</p>
			</td>
			<td style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s3" style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;text-align: center;">{{ number_format($persyaratan->pembayaran, 0, '.', '.') }},-</p>
			</td>
		</tr>
		<tr style="height:13pt">
			<td style="width:463pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="8">
				<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 12pt;text-align: left;">Jumlah = {{ $persyaratan->pembayaran_dalam_bahasa }}</p>
			</td>
			<td style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
			</td>
		</tr>
	</table>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: justify;">( 2 ) Perubahan jangka waktu penggunaan, perubahan dalam jumlah, jenis, merk dan type alsintan serta perubahan lainnya pada Surat Perjanjian ini hanya dapat dilakukan dengan Amandemen/adendum terhadap Surat Perjanjian ini</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: justify;">( 3 ) Apabila Pihak Kedua dalam pelaksanaannya sesuai dengan surat perjanjian sewa ternyata masih mengunakan alsintan, maka akan membuat permohonan perpanjangan sewa yang disepakati oleh kedua belah pihak (Pihak Pertama dan Pihak Kedua)..</p>
	<h3 style="text-indent: 0pt;text-align: center;">PASAL 2</h3>
	<h3 style="text-indent: 0pt;text-align: center;">DASAR PELAKSANAAN</h3>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 26pt;text-indent: 0pt;text-align: left;">Dalam hal pengunaan alsintan, kedua belah pihak berpedoman pada :</p>
	<p style="padding-left: 47pt;text-indent: -18pt;text-align: left;">a. Peraturan Bupati Seruyan Nomor 58 Tahun 2022 tentang Tata Cara Sewa Barang Milik Daerah Kabupaten Seruyan Selain Tanah dan Bangunan.</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<h3 style="text-indent: 0pt;text-align: center;">PASAL 3</h3>
	<h3 style="text-indent: 0pt;text-align: center;">PENYERAHAN DAN PENGEMBALIAN ALSINTAN</h3>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: justify;">( 1 ) PIHAK PERTAMA menyerahkan alsintan tersebut dalam Pasal 1 kepada PIHAK KEDUA dan PIHAK KEDUA menerima alsintan tersebut dari PIHAK PERTAMA dalam keadaan baik, lengkap dan siap pakai seperti yang tercantum dalam Beriata Acara Serah Terima Alsintan.</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: justify;">( 2 ) Setelah habis jangka waktu penggunan alsintan PIHAK KEDUA harus mengembalikan alsintan yang bersangkutan kepada PIHAK PERTAMA dalam keadaan baik, lengkap dan siap pakai ke Gudang Alsintan PIHAK PERTAMA.</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: justify;">( 3 ) Setiap kali dilakukan penyerahan dan atau pengembalian alsintan tersebut dalam ayat ( 1 ) dan ayat ( 2 ) harus dibuatkan Berita Acara Serah Terima Alsintan;</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: justify;">( 4 ) Apabila PIHAK KEDUA mengembalikan alsintan dalam keadaan rusak ke Gudang PIHAK PERTAMA, maka harus dibuatkan Berita Acara Pengembalian Alsintan di Gudang, selanjutnya PIHAK KEDUA berkewajiban melaksanakan perbaikan alsintan dalam jangka waktu 30 ( Tiga Puluh) Hari.</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: justify;">( 5 ) Sejak ditandatangani Berita Acara Pengembalian Alsintan di Gudang oleh PIHAK PERTAMA dan PIHAK KEDUA maka perhitungan penggunaan alsintan diakhiri.</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<h3 style="text-indent: 0pt;text-align: center;">PASAL 4</h3>
	<h3 style="text-indent: 0pt;text-align: center;">BIAYA PENGANGKUTAN</h3>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: justify;">( 1 ) Semua biaya bongkar-pasang Alsintan dalam proses pengangkutan termasuk uji coba di tanggung PIHAK KEDUA</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: justify;">( 2 ) Biaya Pengangkutan Alsintan dari Gudang PIHAK PERTAMA ke lokasi PIHAK KEDUA dan dari lokasi PIHAK KEDUA ke Gudang PIHAK PERTAMA di tanggung oleh PIHAK KEDUA</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<h3 style="text-indent: 0pt;text-align: center;">PASAL 5</h3>
	<h3 style="text-indent: 0pt;text-align: center;">BIAYA OPERASI DAN BIAYA PEMELIHARAAN</h3>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: left;">( 1 ) Selama jangka waktu penggunaan alsintan, biaya operasi dan biaya pemeliharaan ( perewatan dan perbaikan ) menjadi tanggung jawab PIHAK KEDUA</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: left;">( 2 ) Ketentuan pemeliharaan ( perewatan dan perbaikan ), pemakaian bahan bakar, bahan pelumas, dan minyak hidrolik harus sesuai dengan petunjuk PIHAK PERTAMA</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: left;">( 3 ) Biaya perbaikan terhadap kerusakan berat ataupun kehilangan yang diakibatkan oleh kelalaian PIHAK KEDUA, seluruhnya ditanggung eleh PIHAK KEDUA.</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<h3 style="text-indent: 0pt;text-align: center;">PASAL 6</h3>
	<h3 style="text-indent: 0pt;text-align: center;">PEMBAYARAN PENGGUNAAN ALSINTAN</h3>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: justify;">( 1 ) Pembayaran penggunaan alsintan oleh PIHAK KEDUA sebesar Rp. 1.920.000,- ( Satu Juta Sembilan Ratus Dua Puluh Ribu Rupiah ) seperti tersebut dalam pasal ( 1 ) dilakukan dengan menyetor ke Bendahara Penerimaan Dinas Ketahanan Pangan dan Pertanian Kabupaten Seruyan dan menyerahkan bukti setor ke PIHAK PERTAMA</p>
	<p style="padding-left: 26pt;text-indent: 0pt;line-height: 28pt;text-align: left;">( 2 ) Seluruh biaya penggunaan alsintan tersebut dalam pasal ( 1 ) harus sudah lunas sebelum berakhir. ( 3 ) Pembayaran biaya penggunaan alsintan tersebut pada ayat ( 1 ) pasal ini dibukukan pada Satua</p>
	<p style="padding-left: 62pt;text-indent: 0pt;text-align: left;">Kerja Dinas Ketahanan Pangan dan Pertanian Kabupaten Seruyan</p>
	<h3 style="text-indent: 0pt;line-height: 13pt;text-align: center;">PASAL 7</h3>
	<h3 style="text-indent: 0pt;text-align: center;">PENGGUNAAN DAN PEMELIHARAAN ALSINTAN</h3>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: left;">( 1 ) Dalam penggunaan alsintan PIHAK PERTAMA, maka PIHAK KEDUA wajib mematuhi petunjuk PIHAK PERTAMA</p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: left;">( 2 ) PIHAK KEDUA dilarang menggunakan alsintan tersebut dalam pasal ( 1 ) untuk pekerjaan diluar ketentuan yang dibuat dalam perjanjian ini</p>
	<p style="padding-left: 62pt;text-indent: -36pt;text-align: left;">( 3 ) PIHAK KEDUA dilarang memindahtangankan hak penggunaan alsintan tersebut dalam pasal ( 1) kepada PIHAK lain.</p>
	<p style="padding-left: 26pt;text-indent: 0pt;text-align: left;">( 4 ) PIHAK KEDUA dilarang merubah bentuk alsintan atau fungsi alsintan tersebut dalam pasal ( 1) ( 5 ) PIHAK KEDUA wajib melakukan pemeliharaan alsintan sesuai petunjuk PIHAK PERTAMA</p>
	<h3 style="text-indent: 0pt;line-height: 13pt;text-align: center;">PASAL 8</h3>
	<h3 style="padding-top: 7pt;text-indent: 0pt;text-align: center;">OPERATOR DAN MEKANIK</h3>
	<ol id="l1">
		<li>
			<p style="padding-left: 55pt;text-indent: -28pt;line-height: 151%;text-align: justify;">Operator dan Mekanik yang disediakan oleh PIHAK KEDUA harus memiliki kemampuan mengoperasikan alsintan dengan baik</p>
		</li>
		<li>
			<p style="padding-left: 55pt;text-indent: -28pt;line-height: 150%;text-align: justify;">PIHAK PERTAMA berhak membatalkan persetujuan tersebut dalam pasal (1) apabila terbukti bahwa operator dan mekanik PIHAK KEDUA melakukan kesalahan prosedur yang menurut PIHAK PERTAMA merusak/ mengurangi nilai alsintan tersebut.</p>
		</li>
		<li>
			<p style="padding-left: 55pt;text-indent: -28pt;text-align: justify;">Biaya Operator dan Mekanik tersebut ditanggung sepenuhnya oleh PIHAK KEDUA.</p>
		</li>
	</ol>
	<h3 style="text-indent: 0pt;line-height: 13pt;text-align: center;">PASAL 9</h3>
	<h3 style="padding-top: 7pt;text-indent: 0pt;text-align: center;">BIAYA MATERAI</h3>
	<p style="padding-left: 26pt;text-indent: 0pt;line-height: 151%;text-align: left;">Meterai sebesar Rp 10.000; (Sepuluh Ribu Rupiah) atas surat perjanjian ini menjadi tanggungjawab PIHAK KEDUA.</p>
	<h3 style="text-indent: 0pt;line-height: 13pt;text-align: center;">PASAL 10</h3>
	<h3 style="padding-top: 7pt;text-indent: 0pt;text-align: center;">DENDA</h3>
	<p style="padding-left: 26pt;text-indent: 0pt;line-height: 150%;text-align: justify;">Keterlambatan pengembalian alsintan oleh PIHAK KEDUA kepada PIHAK PERTAMA melampaui batas jangka waktu penggunaan seperti tersebut dalam pasal (1), maka untuk keterlambatan setiap hari kalender, PIHAK KEDUA dikenakan denda sebesar tarif penggunaan perhari dari alsintan yang belum dikembalikan.</p>
	<h3 style="text-indent: 0pt;line-height: 13pt;text-align: center;">PASAL 11</h3>
	<h3 style="padding-top: 7pt;text-indent: 0pt;text-align: center;">SANKSI</h3>
	<p style="padding-top: 6pt;padding-left: 26pt;text-indent: 0pt;line-height: 150%;text-align: justify;">Apabila ternyata PIHAK KEDUA mengembalikan alsintan tersebut dalam pasal (1) kepada PIHAK PERTAMA dalam keadaan tidak sesuai dengan pasal 3 ayat (2), maka PIHAK PERTAMA berhak untuk melaksanakan perbaikan alsintan dimaksud tanpa meminta persetujuan terlebih dahulu dari PIHAK KEDUA, dan segala biaya yang diperlukan untuk perbaikan alsintan dimaksud sepenuhnya menjadi beban PIHAK KEDUA.</p>
	<h3 style="text-indent: 0pt;line-height: 13pt;text-align: center;">PASAL 12</h3>
	<h3 style="padding-top: 7pt;text-indent: 0pt;text-align: center;">FORCE MAJEURE</h3>
	<ol id="l2">
		<li>
			<p style="padding-left: 55pt;text-indent: -28pt;line-height: 149%;text-align: justify;">Yang dimaksud dengan Force Majeure adalah, peperangan, blokade, pemberontakan, pemogokan, kebakaran, epidemic dan bencana alam seperti tsunami, banjir, dan gempa bumi.</p>
		</li>
		<li>
			<p style="padding-left: 55pt;text-indent: -28pt;line-height: 150%;text-align: justify;">Jika terjadi Force Majeure maka PIHAK KEDUA harus memberitahukan secara tertulis kepada PIHAK PERTAMA paling lambat 7 (tujuh) hari terhitung sejak terjadinya Force Majeure, demikian pula bila Force Majeure telah berakhir.</p>
		</li>
		<li>
			<p style="padding-left: 55pt;text-indent: -28pt;line-height: 151%;text-align: justify;">Apabila terjadi Bencana Alam dan PIHAK PERTAMA membutuhkan alsintan tersebut pada pasal (1), PIHAK KEDUA segera mengembalikan alsintan tesebut kepada PIHAK PERTAMA tanpa</p>
		</li>
	</ol>
	<p style="padding-top: 3pt;padding-left: 55pt;text-indent: 0pt;line-height: 149%;text-align: left;">mengajukan tuntutan ganti rugi, sedangkan biaya penggunaan alsintan diperhitungkan sejumlah hari penggunaan Alsintan oleh PIHAK KEDUA.</p>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<h3 style="text-indent: 0pt;line-height: 13pt;text-align: center;">PASAL 13</h3>
	<h3 style="padding-top: 7pt;text-indent: 0pt;text-align: center;">PERSELISIHAN</h3>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<ol id="l3">
		<li>
			<p style="padding-left: 55pt;text-indent: -28pt;line-height: 149%;text-align: justify;">Perselisihan yang timbul antara kedua belah PIHAK akan diselesaikan secara musyawarah untuk memperoleh mufakat.</p>
		</li>
		<li>
			<p style="padding-left: 55pt;text-indent: -28pt;line-height: 150%;text-align: justify;">Bila tidak tercapai mufakat persetujuan bersama dalam penyelesaian secara musyawarah maka untuk hal-hal yang bersifat teknis, pihak yang dirugikan dapat mengajukan persoalannya kepada Panitia Arbitrase yang terdiri dari seorang yang ditunjuk oleh PIHAK PERTAMA, seorang anggota yang ditunjuk oleh PIHAK KEDUA, dan seorang anggota lain yang merangkap Ketua yang ditunjuk oleh kedua anggota tersebut.</p>
		</li>
		<li>
			<p style="padding-left: 55pt;text-indent: -28pt;line-height: 14pt;text-align: justify;">Hal-hal lain dari tersebut pada ayat (2) akan diselesaikan melalui Pengadilan Negeri.</p>
		</li>
	</ol>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<h3 style="text-indent: 0pt;line-height: 13pt;text-align: center;">PASAL 14</h3>
	<h3 style="padding-top: 7pt;text-indent: 0pt;text-align: center;">PENUTUP</h3>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<ol id="l4">
		<li>
			<p style="padding-left: 62pt;text-indent: -35pt;line-height: 150%;text-align: justify;">Dengan ditandatanganinya Surat Perjanjian ini oleh PIHAK PERTAMA dan PIHAK KEDUA, maka seluruh ketentuan yang tercantum dalam Pasal-pasal Perjanjian ini dan seluruh ketentuan di dalam dokumen-dokumen yang merupakan satu kesatuan serta bagian yang tidak terpisahkan dengan perjajian ini, termasuk segala sanksinya mempunyai kekuatan mengikat dan berlaku sebagai undang-undang bagi kedua belah PIHAK,
				berdasarkan ketentuan dalam pasal 1338 ayat</p>
			<ol id="l5">
				<li>
					<p style="padding-left: 79pt;text-indent: -17pt;line-height: 14pt;text-align: justify;">Kitab Undang-Undang Hukum Perdata.</p>
				</li>
				<li>
					<p style="padding-top: 7pt;padding-left: 62pt;text-indent: -35pt;line-height: 149%;text-align: justify;">Surat Perjanjian penggunaan Alsintan ini berlaku mulai berlaku sejak di tandatangani oleh PIHAK PERTAMA dan PIHAK KEDUA;</p>
				</li>
				<li>
					<p style="padding-left: 62pt;text-indent: -35pt;line-height: 150%;text-align: justify;">Surat Perjanjian penggunaan Alsintan ini di buat dan di tandatangani oleh kedua belah PIHAK yang masing-masing mempunyai kekuatan hukum yang sama 2 (dua) diantaranya di tandatangani di atas materai.</p>
				</li>
			</ol>
		</li>
	</ol>
	<p style="text-indent: 0pt;text-align: left;"><br /></p>
	<table style="border-collapse:collapse;margin-left:92.05pt" cellspacing="0">
		<tr style="height:90pt">
			<td style="width:161pt">
				<p class="s7" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: left;">PIHAK KEDUA,</p>
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s7" style="padding-left: 11pt;text-indent: 0pt;text-align: left;">{{ $persyaratan->petani->name }}</p>
			</td>
			<td style="width:214pt">
				<p class="s7" style="padding-left: 61pt;padding-right: 8pt;text-indent: 0pt;line-height: 13pt;text-align: center;">PIHAK PERTAMA,</p>
				<p style="text-indent: 0pt;text-align: left;"><br /></p>
				<p class="s7" style="padding-left: 61pt;padding-right: 8pt;text-indent: 0pt;text-align: center;">ALBIDINNOR, S.P</p>
				<p class="s2" style="padding-left: 61pt;padding-right: 8pt;text-indent: 0pt;line-height: 13pt;text-align: center;">NIP. 19771117 200604 1 016</p>
			</td>
		</tr>
	</table>

	<script>
		window.onload = function() {
			window.print();
		}
	</script>
</body>

</html>
