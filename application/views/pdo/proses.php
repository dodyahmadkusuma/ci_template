<?php 
include'database.php' ;



	$judul_content 	=@$_POST['judul_content'];
	$tgl_content 	=@$_POST['tgl_content'];
	$isi_content 	=@$_POST['isi_content'];
	$id 			=@$_POST['id'];


if (@$_GET['page'] == 'tambah') {
	$sql = "INSERT INTO content(judul_content,tgl_content,isi_content) VALUES('$judul_content','$tgl_content','$isi_content')";
	mysql_query($sql);
	echo "sukses";	
}else if (@$_GET['page'] == 'edit'){
	$edit = mysql_query("UPDATE content SET judul_content = '$judul_content', tgl_content = '$tgl_content', isi_content = '$isi_content'  WHERE id = $id" );
	echo "sukses";
}
else if (@$_GET['page'] == 'hapus'){
	$delete = mysql_query("DELETE FROM content WHERE id = $id" );
	echo "sukses";
}




			
?>