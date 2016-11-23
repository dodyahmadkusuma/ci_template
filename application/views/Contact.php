<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="col-md-8" style="text-align: center;">

<?= form_open_multipart('contact/proses'); ?>
		<input type="file" name="gambar">
		<input type="submit" value="Upload">


<?= form_close();  ?>


</div>
</body>
</html>