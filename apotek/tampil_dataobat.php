<!DOCTYPE html>
<html>
<head>
	<title>DATA OBAT</title>
</head>
<body>

	<table border="1">
		<tr>
			<td>Kode Obat</td>
			<td>Nama Obat</td>
			<td>Jenis Obat</td>
			<td>Kategori</td>
			<td>Harga</td>
			<td>Jumlah</td>

		</tr>
		<tr>
			<?php
			include "koneksi.php";
			$query="SELECT * FROM t_obat";
			$tampil=mysql_query($query);
			while ($data=mysql_fetch_array($tampil)){
		?>
			<tr>
				<td><?php echo $data['Kode_Obat'];?></td>
				<td><?php echo $data['Nama_Obat'];?></td>
				<td><?php echo $data['Jenis_Obat'];?></td>
				<td><?php echo $data['Kategori'];?></td>
				<td><?php echo $data['Harga'];?></td>
				<td><?php echo $data['Jumlah'];?></td>
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