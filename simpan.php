<?php
include "koneksi.php";
	
$simpan = mysqli_query($koneksi,"INSERT INTO product_edit(id_barang,warna_barang,harga,gambar,kategori)
VALUES('$_POST[id_barang]', '$_POST[warna_barang]','$_POST[harga]','$_POST[gambar]','$_POST[kategori]')");


if ($simpan == true){
?>
<script>
alert('Save Success...');
</script>
<?php
}else {
?>
<script>
alert('Again....');
</script>
<?php
}
?>
<meta http-equiv="refresh" content="0; url=index2.php?isi=product" />