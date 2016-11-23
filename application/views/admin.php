<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <!-- INCLUDE CSS -->
  <?php echo $_css; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- INCLUDE HEADER -->
  <?php echo $_header; ?>
  <!-- Left side column. contains the logo and sidebar -->
 <!--INCLUDE SIDE BAR -->
 <?php echo $_sidebar; ?>

  <!-- Content Wrapper. Contains page content -->
  <!-- INCLUDE VIEW -->
  <?php echo $_body; ?>
  <!-- /.content-wrapper -->
<!-- INCLUDE FOOTE -->
<?php echo $_footer; ?>
<!-- ./wrapper -->


<!-- INCLUDE JS -->
<?php echo $_js; ?>

</body>
</html>

  

