<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
        <link rel="stylesheet" href="<?=base_url('dashboard/assets/') ?>css/bootstrap.min.css" />
	<style type="text/css">
		li.menu {display: inline;}
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html {
  background: #95a5a6;
  font-family: 'Helvetica Neue', Arial, Sans-Serif;
}
html .login-wrap {
  position: relative;
  margin: 0 auto;
  background: #ecf0f1;
  width: 350px;
  border-radius: 5px;
  box-shadow: 3px 3px 10px #333;
  padding: 15px;
}
html .login-wrap h2 {
  text-align: center;
  font-weight: 200;
  font-size: 2em;
  margin-top: 10px;
  color: #34495e;
}
html .login-wrap .form {
  padding-top: 20px;
}
html .login-wrap .form input[type="text"],
html .login-wrap .form input[type="password"],
html .login-wrap .form button {
  width: 80%;
  margin-left: 10%;
  margin-bottom: 25px;
  height: 40px;
  border-radius: 5px;
  outline: 0;
  -moz-outline-style: none;
}
html .login-wrap .form input[type="text"],
html .login-wrap .form input[type="password"] {
  border: 1px solid #bbb;
  padding: 0 0 0 10px;
  font-size: 14px;
}
html .login-wrap .form input[type="text"]:focus,
html .login-wrap .form input[type="password"]:focus {
  border: 1px solid #3498db;
}
html .login-wrap .form a {
  text-align: center;
  font-size: 10px;
  color: #3498db;
}
html .login-wrap .form a p {
  padding-bottom: 10px;
}
html .login-wrap .form button {
  background: #e74c3c;
  border: none;
  color: white;
  font-size: 18px;
  font-weight: 200;
  cursor: pointer;
  transition: box-shadow .4s ease;
}
html .login-wrap .form button:hover {
  box-shadow: 1px 1px 5px #555;
}
html .login-wrap .form button:active {
  box-shadow: 1px 1px 7px #222;
}
html .login-wrap:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  background: -webkit-linear-gradient(left, #27ae60 0%, #27ae60 20%, #8e44ad 20%, #8e44ad 40%, #3498db 40%, #3498db 60%, #e74c3c 60%, #e74c3c 80%, #f1c40f 80%, #f1c40f 100%);
  background: -moz-linear-gradient(left, #27ae60 0%, #27ae60 20%, #8e44ad 20%, #8e44ad 40%, #3498db 40%, #3498db 60%, #e74c3c 60%, #e74c3c 80%, #f1c40f 80%, #f1c40f 100%);
  height: 5px;
  border-radius: 5px 5px 0 0;
}
img{display: none;}

		
	</style>
  </head>

  <body>
<div class="col-md-8" style="padding-top: 100px;">
  
    <div class="login-wrap">
  
  <h2>Login</h2>
  <?php echo $this->session->flashdata('alert_msg'); ?>
  <div class="form">
  <form action="<?= base_url('Login/act_login') ?>" method="POST">
    
    <input type="text" placeholder="Username" name="user" >
    <input type="password" placeholder="Password" name="pass" >
    <button> Sign in </button>
  </div>
<center>
  <a class=" btn btn-default" href="<?=base_url('home') ?>">Kembali</a>
  <a class=" btn btn-danger" href="<?=base_url('forgot')  ?>">Forgot Password</a>
</center>
  </form>
</div>
</div>
  </body>
</html>
