

<!DOCTYPE html>
<html>
<head>
	<title>PDO</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/') ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/') ?>css/bootstrap-theme.min.css">
</head>
<body>

	<div>
		<button id="tambahdata" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Tambah</button>
	</div>
	<div id="tampildata">
		<?php include'tampil.php' ?>
	</div>
	<div id="proses"> </div>


		

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
    
      
	<div id="cruddata">
         

        <!-- footer modal -->
        
	</div>
        </div>
      </div>
    </div>
  </div>

	<script type="text/javascript" src="<?=base_url('asset/js/') ?>jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url('assets/') ?>js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$("#tambahdata").click(function() {
			$("#cruddata").hide().load("tambah.php").fadeIn(10);
		});
		$('#cruddata').on('click','#simpantambah',function(){
			var judul_content = $('#judul_content').val();
			var tgl_content = $('#tgl_content').val();
			var isi_content = $('#isi_content').val();
			if (judul_content =='' || isi_content == '' || tgl_content == '') {
				alert('inputan tak boleh kosong');
			}else{
				$.ajax({
					url : 'proses.php?page=tambah',
					type : 'post',
					data : 'judul_content='+judul_content+'&isi_content='+isi_content+'&tgl_content='+tgl_content,
					success : function(msg){
						if (msg == 'sukses') {
							$('#tampildata').load('tampil.php');
						}else{
							alert('inputan gagal');
						}
					}
				});
			}
		});


		$('#tampildata').on('click','.edit',function(){
			var id = $(this).attr('id');
			$.ajax({
				url : 'edit.php',
				type : 'post',
				data : 'id='+id,
				success : function(msg){
					$('#cruddata').hide().fadeIn(10).html(msg);
				}
			});
		});
		$('#cruddata').on('click','#simpanedit',function(){
			var judul_content = $('#judul_content').val();
			var tgl_content = $('#tgl_content').val();
			var isi_content = $('#isi_content').val();
			var id = $('#id').val();
			if (judul_content =='' || isi_content == '' ) {
				alert('inputan tak boleh kosong');
			}else{
				$.ajax({
					url : 'proses.php?page=edit',
					type : 'post',
					data : 'judul_content='+judul_content+'&isi_content='+isi_content+'&id='+id+'&tgl_content='+tgl_content,
					success : function(msg){
						if (msg == 'sukses') {
							$('#tampildata').load('tampil.php');
						}else{
							alert('inputan gagal');
						}
					}
				});
			}
		});
		$('#tampildata').on('click','.hapus',function(){
			var id = $(this).attr('id');
			var conf =confirm('Yakin Menghapus Data Ini ?');
			if (conf == true) {
				
			$.ajax({
				url : 'proses.php?page=hapus',
				type : 'post',
				data : 'id='+id,
				success : function(msg){
					if(msg == 'sukses'){
					$('#tampildata').load('tampil.php');
					$('#cruddata').hide();
					} else{
						alert('gagal menghapus')
					}
				}
			});
			}
		});
	</script>
</body>
</html>

