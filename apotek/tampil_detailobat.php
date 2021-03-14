<!DOCTYPE html>
<html>
<head>
	<title>DETAIL OBAT</title>
</head>
<body>

	<table border="1">
		<tr>
			<td>Kode Obat</td>
			<td>Harga</td>
			<td>Dosis</td>
			<td>Sub Total</td>
		</tr>
		<tr>
			<?php
			include "koneksi.php";
			$query="SELECT * FROM t_detailobat";
			$tampil=mysql_query($query);
			while ($data=mysql_fetch_array($tampil)){
		?>
			<tr>
				<td><?php echo $data['Kode_Obat'];?></td>
				<td><?php echo $data['Harga'];?></td>
				<td><?php echo $data['Dosis'];?></td>
				<td><?php echo $data['Sub_Total'];?></td>
				<td>
					<a href="ubah.php?Kode_Obat=<?php echo $data['Kode_Obat'];?>"
						onclick="return confirm('Apakah anda yakin untuk mengupdate data ini ?')">Ubah</a>
					<a href="hapus.php?Kode_Obat=<?php echo $data['Kode_Obat'];?>"
						onclick="return confirm('Apakah anda yakin untuk menghapus data ini ?')">Hapus</a>
				</td>
			</tr>
<?php
} 
?>
		</tr>