<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Dashboard - Ace Admin</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?=base_url('dashboard/assets/') ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url('dashboard/assets/') ?>font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="<?=base_url('dashboard/assets/') ?>css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?=base_url('dashboard/assets/') ?>css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="<?=base_url('dashboard/assets/') ?>css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="<?=base_url('dashboard/assets/') ?>css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?=base_url('dashboard/assets/') ?>css/ace-rtl.min.css" />
    <link rel="stylesheet" href="<?=base_url('dashboard/assets/')?>css/jquery.dataTables.min.css" />

    

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?=base_url('dashboard/assets/') ?>js/ace-extra.min.js"></script>
    <script src="<?=base_url('dashboard/assets/')?>js/Chart.min.js"></script>
    <!-- DATA TABLES -->
   
  


    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
    <style type="text/css">
    .hilang{
        display: none;
    }


        body{
    background: #ecf0f1;
    font-family: sans-serif;
    font-size: 11pt;
}
#modal-kotak{
    /*margin:5% 30% 30% 30%;*/
    width: 500px;   
    height: 200px;
    position: absolute;
    position:fixed;
    z-index:1002;
    display: none;
    background: white;  
}
#atas{
    font-size: 15pt;
    padding: 20px;  
    height: 80%;
}
#bawah{
    background: #fff;
}

#tombol-tutup{  
    background: #e74c3c;
}
#tombol-tutup,#tombol{
    height: 30px;
    width: 100px;
    color: #fff;
    border: 0px;
}
#bg{
    opacity:.80;
    position: absolute;
    display: none;
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: #000;
    z-index:1001;
    opacity: 0.8;
}
#tombol{
    background: #e74c3c;        
}
    </style>

 
  </head>