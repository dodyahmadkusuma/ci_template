
<table border="1" class="table table-hover" style="font-family: sans-serif;">
	<thead style="background-color: salmon">
		<tr>
			<td style="width: 100px;">
				NO
			</td>
			<td>
				Judul
			</td>
			<td>
				Tanggal Post
			</td>
			<td>
				Isi Post
			</td>
			<td colspan="2" align="center" >
				Aksi
			</td>
		</tr>
	</thead>
	<tbody>
<?php 
 try {

	
	foreach ($data_content as $key => $data) {
	
	 ?>
		<tr>
			<td>
				<?= $data->id ?>
			</td>
			<td>
				<?= $data->judul_content ?>
			</td>
			<td>
				<?= $data->tgl_content ?>
			</td>
			<td>
				<?= $data->isi_content ?>
			</td>
			<td align="center" style="width: 150px;">
				<button class="btn btn-default edit" id="<?= $data->id?>" data-toggle="modal" data-target="#myModal">Edit</button>
			</td>
			<td align="center" style="width: 150px;">
				<button class="btn btn-danger hapus" id="<?= $data->id?>">Hapus</button>
			</td>
		</tr>
<?php
}
} catch (Exception $e) {
	echo $e->getMessage();
} ?>
	</tbody>
</table>