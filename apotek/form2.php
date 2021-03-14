<?php
include "koneksi.php";


if(isset($POST['simpan'])){

$Kode_Obat=$POST['Kode_Obat'];
$Nama_Obat=$POST['Nama_Obat'];
$Jenis_Obat=$POST['Jenis_Obat'];
$Kategori=$POST['Kategori'];
$Harga=$POST['Harga'];
$Dosis=$POST['Dosis'];
$Jumlah=$POST['Jumlah'];
$Sub_Total=$POST['Sub_Total'];

	$query= mysql_query("insert into t_obat values('$Kode_Obat','$Nama_Obat','$Jenis_Obat','$Kategori','$Harga','$Jumlah')") or die (mysql_error());
	if($query){
		echo "Data Tersimpan";
		}else{
			echo "Gagal Tersimpan";
	}	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>FORM DATA OBAT APOTIK ANDA</title>
</head>
<body>
	<fieldset>
		<legend>FORM OBAT</legend>
		<form method="post" name="input">
			<table border="0">
			<tr>
				<td>Kode Obat</td>
				<td><input type="text" name="Kode_Obat"></td>
			</tr>
			<tr>
				<td>Nama Obat</td>
				<td><input type="text" name="Nama_Obat"></td>
			</tr>
			<tr>
				<td>Jenis Obat</td>
				<td><select name="Jenis_Obat">
				<option value="Obat Tablet" >Obat Tablet</option>
				<option value="Obat Pil" >Obat Pil</option>
				<option value="Obat Serbuk" >Obat Serbuk</option>
				<option value="Obat Cair" >Obat Cair</option>
				<option value="Obat Salep" >Obat Salep</option>
				<option value="Obat Tetes" >Obat Tetes</option>
				</select></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><select name="Kategori">
				<option value="Obat Bebas" >Obat Bebas</option>
				<option value="Obat Bebas Terbatas" >Obat Bebas Terbatas</option>
				<option value="Obat Keras" >Obat Keras</option>
				</select></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>Rp.<input type="text" name="Harga"></td>
			</tr>
			<tr>
				<td>Dosis</td>
				<td><select name="Dosis">
				<option value="Dosis Terapi" >Dosis Terapi</option>
				<option value="Dosis Minimum" >Dosis Minimum</option>
				<option value="Dosis Maksimum" >Dosis Maksimum</option>
				<option value="Dosis Terapeutik" >Dosis Terapeutik</option>
				</select></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="Jumlah"></td>
			</tr>
			<tr>
				<td>Sub Total</td>
				<td><input type="text" name="Sub_Total"></td>
			</tr>
			<tr>
  				<td colspan="2"><input type="submit" name="simpan" value="Simpan"></td>
  			</tr>
		</table>
	</form>

	</fieldset>
</body>
</html>

