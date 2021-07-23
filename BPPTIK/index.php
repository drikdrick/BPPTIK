<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Distributor Kecap</title>
	<link rel="stylesheet" type="text/css" href="library/lib.css">
</head>
<body>
	<img src="">
<?php

// Prosedur tampilkan_ikon_vip()
// digunakan untuk ........
// Kompleksitas penggunaan resources: ......

function tampilkan_ikon_vip() {

	echo "<img src='gambar/vip.png'>";
}

// Fungsi tampilkan_total_penjualan()
// digunakan untuk mengembalikan jumlah total penjualan
// masing-masing jenis kecap.
// Kompleksitas penggunaan resources: ....

function tampilkan_total_penjualan() {

	$file = file_get_contents("data/data.json");
	$data = json_decode($file);

	$Manis = 0;
	$Asin = 0;
	$Ikan = 0;
	$Sambal = 0;
	$Jamur = 0;

	foreach ($data as $key => $total) {
		if ($total->jenis=="Kecap Manis") {
			$Manis += $total->jumlah  ;
		}
		if ($total->jenis=="Kecap Asin") {
			$Asin += $total->jumlah;
		}
		if ($total->jenis=="Kecap Ikan") {
			$Ikan += $total->jumlah;
		}
		if ($total->jenis=="Kecap Sambal") {
			$Sambal += $total->jumlah;
		}
		if ($total->jenis=="Kecap Jamur") {
			$Jamur += $total->jumlah;
		}
	}


	echo "<td>" . $Manis . "</td>";
	echo "<td>" . $Asin . "</td>";
	echo "<td>" . $Ikan . "</td>";
	echo "<td>" . $Sambal . "</td>";
	echo "<td>" . $Jamur . "</td>";

}

// menyimpan input data penjualan ke file "data.json"
if (isset($_POST['simpan'])) {
		$file = file_get_contents("data/data.json");
	$data = json_decode($file);

	$namaPembeli = $_POST['nama'];
	$jenisKecap = $_POST['jenis'];
	$jumlahPembelian = (int)$_POST['jumlah'];

	$data[] = array('nama'=>$namaPembeli, 'jenis'=>$jenisKecap, 'jumlah'=>$jumlahPembelian);

// Mengubah Menjadi Json


// Menyimpan data ke dalam anggota.json

	file_put_contents('data/data.json', json_encode($data, JSON_PRETTY_PRINT));

}
?>
	<table>
		<tr>
			<td class="td-top td-border">
				<h3>Data Penjualan Kecap Botol:</h3>
				<table class="tbl">
					<tr>
						<th>Nama Pembeli</th>
						<th>Jenis Kecap</th>
						<th>Jumlah Botol</th>
					</tr>
				<?php			

				// menampilkan data penjualan
				$file = file_get_contents("data/data.json");
				$data = json_decode($file);

				foreach ($data as $value) {
					
				
				?>
					<tr>
						<td>
						<?php
						echo $value->nama;

						// menampilkan nama pembeli dan ikon VIP
						// dengan memanggil Prosedur tampilkan_ikon_vip()

						if ($value->jenis=="Kecap Asin" && $value->jumlah >50 or $value->jenis=="Kecap Ikan" && $value->jumlah >50 or $value->jenis=="Kecap Jamur" && $value->jumlah >50) {
							tampilkan_ikon_vip();
						}
						
						
							
						?>
						</td>
						<td><?php echo $value->jenis ?></td>
						<td><?php echo $value->jumlah ?></td>
					</tr>
					<?php
				}
					?>
				</table>
				<br /><br />
				<table class="tbl">
					<tr>
						<th colspan="5">Jumlah Penjualan Kecap Tiap Jenis:</th>
					</tr>
					<tr>
						<td>Manis
						</td>
						<td>Asin
						</td>
						<td>Ikan
						</td>
						<td>Sambal
						</td>
						<td>Jamur
						</td>
					</tr>
					<tr class="tr-yel">
						<?php
							
							// menampilkan total penjualan
							// untuk masing-masing jenis kecap
							// dengan memanggil Fungsi tampilkan_total_penjualan()
						tampilkan_total_penjualan();
						?>						
					</tr>					
				</table>
			</td>
			<td class="td-space">
				&nbsp;
			</td>
			<td class="td-top">
				<h3>Tambah Data Penjualan:</h3>
				<form action="index.php" method="POST">
				<label for="nama"><strong>Nama Pembeli:</strong> </label><br />
				<input type="text" name="nama" id="nama" size="30"><br />
				<br />
				<strong>Jenis Kecap:</strong> <br />
				<input type="radio" name="jenis" value="Kecap Manis" />Kecap Manis
				<br />
				<input type="radio" name="jenis" value="Kecap Asin" />Kecap Asin
				<br />
				<input type="radio" name="jenis" value="Kecap Ikan" />Kecap Ikan
				<br />
				<input type="radio" name="jenis" value="Kecap Sambal" />Kecap Sambal
				<br />
				<input type="radio" name="jenis" value="Kecap Jamur" />Kecap Jamur
				<br />
				<label for="jumlah"><strong>Jumlah Pembelian:</strong> </label><br />
				<input type="text" name="jumlah" id="jumlah" size="5">Botol<br /><br />
				<input id="tombol" type="submit" name="simpan" value="SIMPAN" class="tombol" />
				</form>
			</td>
		</tr>
	</table>
</body>
</html>