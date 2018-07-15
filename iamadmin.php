<?php
	session_start();
	
	include 'controller/controller.php';
	
	if(isset($_POST['send'])) {
		
		if(md5($_POST['login']) == $admin['Login'] && md5($_POST['password']) == $admin['Password']) {
			$_SESSION['admin_login'] = $_POST['login'];
			$_SESSION['admin_pass'] = $_POST['password'];

			header("Location: iamadmin.php");
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Панель администратора</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700&amp;subset=cyrillic" rel="stylesheet">
<link rel="stylesheet" href="css/stylesAdmin.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    
</head>
	
<body>

	<?php if(!isset($_SESSION['admin_login']) && !isset($_SESSION['admin_pass'])) : ?>
    
    	<section>
            <div class="container text-center">
                <div class="row row-margin-top">
                    <h3>Пожалуйста, подтвердите свою личность</h3>
                </div>
                
                <div class="row row-margin-top">
                	<form action="" method="POST">
                        <div class="groups-elements">
                        
                            <div class="col-md-3 col-md-offset-1 col-xs-10 col-xs-offset-1 element-input">
                            	<div class="container-input">
                                    <p class="input-placeholder">Ваш логин...</p>
                                    <input type="text" class="form-control" placeholder="Ваш логин..." name="login">
                                    <div class="input-undeline"></div>
                                </div>
                            </div>
                            
                        	<div class="col-md-3 col-md-offset-0 col-xs-10 col-xs-offset-1 element-input">
                            	<div class="container-input">
                                    <p class="input-placeholder">Ваш пароль...</p>
                                    <input type="password" class="form-control" placeholder="Ваш пароль..." name="password">
                                    <div class="input-undeline"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-md-offset-0 col-xs-10 col-xs-offset-1 element-input">
                            	<input type="submit" class="form-control btn btn-primary" placeholder="Ваш телефон..." name="send">
                        	</div>
                        
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
    <?php else : ?>
    
<header>
            <div class="container text-center">
                <div class="row row-margin-top">
                    <h1>Админская панель</h1>
                </div>
            </div>
        </header>
        
<section>
        	<div class="container-fluid">
                <div class="row row-margin-top">
                  <div class="col-md-3 side-bar">
                   	<h3 class="text-center">Управление:</h3>
                        <h4>Акции</h4>
                        <ul>
                       	  <a href="?view=action" class="large-text"><li>Управление / обновление акций</li></a>
                        </ul>
                        
                        <h4>Объекты</h4>
                        <ul>
                   	  	    <a href="?view=objects" class="large-text"><li>Управление объектами</li></a>
                        	<a href="?view=grid" class="large-text"><li>Управление сеткой объектов</li></a>
                            <a href="" class="large-text"><li>Управление фильтрами</li></a>
                        </ul>
                        
                        <h4>Заказчики</h4>
                        <ul>
                   	  	  <a href="?view=objects" class="large-text"><li>Управление заказчиками</li></a>
                        </ul>
                  </div>
                    <div class="col-md-8 content">
                       <?php include "views/" . $view . ".php"; ?>
                    </div>
                </div>
            </div>
</section>
        
    <?php endif; ?>
    


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script src="js/admin-scripts.js"></script>
    
</body>
</html>