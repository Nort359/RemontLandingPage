<?php
	session_start();
	
	include 'controller/controller.php';
?>
<html>
<head>

<title>Ремонтная компания</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700&amp;subset=cyrillic" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


    <header>
    	<div class="start-background">
       	  <div class="section-table">
            	<div class="section-row">
                	<div class="section-cell">
                    	<div class="section-center">
                        	<p>
                            	<img src="img/logo.png" alt="logo">
                            </p>
                            <a href="#record" id="goto-record" class="btn btn-primary">Заказать осмотр</a>
                        </div> <!-- /. section-center -->
                    </div> <!-- /. section-cell -->
                </div> <!-- /. section-row -->
            </div> <!-- /. section-table -->
      </div> <!-- /. start-background -->
    </header>
    
    <section class="examples">
    	
        <div class="container">
        	<div class="row row-margin-top">
           	  <div class="col-md-6">
                	<h2 class="text-justified">Чем мы отличаемся от других компаний по ремонту квартир</h2>
                    <p class="large-text text-justified">
                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        At, harum, modi, amet commodi porro consequatur dicta id
                    </p>
                    <p class="text-justified">
                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        At, harum, modi, amet commodi porro consequatur dicta id
                        voluptatum natus molestias esse ad repellat omnis consectetur
                        praesentium debitis optio neque enim.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        At, harum, modi, amet commodi porro consequatur dicta id
                        voluptatum natus molestias esse ad repellat omnis consectetur
                        praesentium debitis optio neque enim.
                    </p>
                </div>
           	  	<div class="col-md-6 col-margin-top examples-gallery">
               	  <div id="carousel1" class="carousel slide" data-ride="carousel">
               	  	<ol class="carousel-indicators text-left">
                            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel1" data-slide-to="1"></li>
                            <li data-target="#carousel1" data-slide-to="2"></li>
              	    </ol>
                	<div class="carousel-inner" role="listbox">
                	    <div class="item active">
                            <img src="img/Gallary-example-1.jpg" alt="First slide image" class="center-block">
              	      	</div>
                      <div class="item">
                          <img src="img/Gallary-example-2.jpeg" alt="First slide image" class="center-block">
              	      	</div>
                        <div class="item">
                            <img src="img/Gallary-example-3.jpeg" alt="First slide image" class="center-block">
              	      	</div>
              	    </div>
                  </div>
            	</div>
        </div>
    	</div>
	</section> <!-- /. examples -->  
    
    <section class="reports">
    	<div class="container">
        	<div class="row row-margin-top">
            	<div class="col-md-12 text-center">
                	<h2>Отзывы от нас</h2>
           	  </div>
            </div>
            <div class="row">
            	<div class="col-md-6 report col-margin-top">
                	<div class="card">
                    	<img class="img-circle" src="img/Marina.jpg" alt="Marina">
                        <a href="#">Марина Дарова</a>
                        <div class="message">
                          <p><span>Сообщение:</span></p>
                            <p class="text-justified">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                At, harum, modi, amet commodi porro consequatur dicta id
                                voluptatum natus molestias esse ad repellat omnis consectetur
                                praesentium debitis optio neque enim.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
           	  <div class="col-md-6 report col-margin-top">
           		<div class="card">
                        <img class="img-circle" src="img/Stas.jpg" alt="Marina">
                        <a href="#">Станислав Рубцов</a>
                        <div class="message">
                            <p><span>Сообщение:</span></p>
                            <p class="text-justified">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                At, harum, modi, amet commodi porro consequatur dicta id
                                voluptatum natus molestias esse ad repellat omnis consectetur
                                praesentium debitis optio neque enim.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                   	</div>
              </div>
           	  <div class="col-md-6 report col-margin-top">
           		<div class="card">
                        <img class="img-circle" src="img/Egor.jpg" alt="Marina">
                        <a href="#">Егор Румянцев</a>
                        <div class="message">
                            <p><span>Сообщение:</span></p>
                            <p class="text-justified">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                At, harum, modi, amet commodi porro consequatur dicta id
                                voluptatum natus molestias esse ad repellat omnis consectetur
                                praesentium debitis optio neque enim.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
            	<div class="col-md-6 report col-margin-top">
                	<div class="card">
                        <img class="img-circle" src="img/Oksana.jpg" alt="Marina">
                        <a href="#">Оксана Ракова</a>
                        <div class="message">
                            <p><span>Сообщение:</span></p>
                            <p class="text-justified">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                At, harum, modi, amet commodi porro consequatur dicta id
                                voluptatum natus molestias esse ad repellat omnis consectetur
                                praesentium debitis optio neque enim.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="reasons">
      <div class="container">
        <div class="row row-margin-top text-center col-margin-top">
                <h2>Причины заказать ремонт у нас</h2>
            </div>
            <div class="row text-center">
              <div class="col-md-3 col-margin-top">
                    <div class="reason"><span class="glyphicon glyphicon-ok"></span></div>
                    <h3>Высокий уровень качества производства всех видов работ</h3>
                </div>
              <div class="col-md-3 col-margin-top">
                <div class="reason"><span class="glyphicon glyphicon-certificate"></span></div>
                    <h3>Работы выполняются экспертами, высококвалифицированными специалистами и их помощниками с минимальным опытом работы от 10 лет</h3>
                </div>
              <div class="col-md-3 col-margin-top">
                    <div class="reason"><span class="glyphicon glyphicon-pencil"></span></div>
                    <h3>Работа по договору</h3>
                </div>
                <div class="col-md-3 col-margin-top">
                    <div class="reason"><span class="glyphicon glyphicon-check"></span></div>
                    <h3>Вы получаете строительные материалы из крупнейших торговых сетей  по самым выгодным ценамбот</h3>
                </div>
            </div>
      </div>
    </section>
    
    <section class="objects">
    	<div class="container">
       	  <div class="row row-margin-top text-center">
            	<h2>Примеры наших выполненых объектов</h2>
            </div>
            
            <div class="row">
                
                <?php if($objects) : ?>
                	
                    <?php foreach($objects as $object) : ?>
                    
                    	<div class="col-md-<?= $grid; ?> col-margin-top">
                        	<div class="card-object">
                            	<img class="img-thumbnail" src="<?= $object['img']; ?>" alt="<?= $object['Header']; ?>" width="50%" height="330">
                                <h3 class="text-right"><?= $object['Header']; ?></h3>
                                <p class="text-right"><?= $object['Description']; ?></p>
                                <p class="date-object text-right"><?= $object['Date_object']; ?></p>
                            </div>
                        </div>
                    
                    <?php endforeach; ?>
                    
                    <a href="#" class="large-text col-md-12 text-center more-objects col-margin-top">Посмотреть больше объектов...</a>
            	
                <?php else : ?>
                
                	<p class="large-text col-md-12 text-center more-objects col-margin-top">Здесь пока что нет ни одного одбъекта</p>
                
                <?php endif; ?>
            </div>
        </div>
    </section>
    
    <section class="algorithm">
    	<div class="row row-margin-top text-center">
        	<h2>Алгоритм нашей работы</h2>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-margin-top">
                    <div id="carouselAlgorithm" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators text-left">
                          <li data-target="#carouselAlgorithm" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselAlgorithm" data-slide-to="1"></li>
                          <li data-target="#carouselAlgorithm" data-slide-to="2"></li>
                                <li data-target="#carouselAlgorithm" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                              <img src="img/algorithm-1.jpeg" alt="First slide image" class="center-block">
                            </div>
                          <div class="item">
                            <img src="img/algorithm-2.jpeg" alt="First slide image" class="center-block">
                          </div>
                            <div class="item">
                              <img src="img/algorithm-3.jpg" alt="First slide image" class="center-block">
                            </div>
                            <div class="item">
                              <img src="img/algorithm-4.jpeg" alt="First slide image" class="center-block">
                            </div>
                        </div>
                  </div>
                </div>
                
                <div class="col-md-6 col-margin-top">
                  <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">1. Осмотр объекта, консультация</a></h4>
                      </div>
                        <div id="collapseOne1" class="panel-collapse collapse in">
                          <div class="panel-body text-justified">
                          	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, autem,
                            beatae, necessitatibus non quisquam ipsum aliquam assumenda rerum fuga quia
                            laborum odio omnis suscipit eaque et obcaecati minima similique maxime.
                          </div>
                      </div>
                    </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">2. Составление сметы, составление договора</a></h4>
                      </div>
                        <div id="collapseTwo1" class="panel-collapse collapse">
                          <div class="panel-body text-justified">
                          	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, autem,
                            beatae, necessitatibus non quisquam ipsum aliquam assumenda rerum fuga quia
                            laborum odio omnis suscipit eaque et obcaecati minima similique maxime.
                          </div>
                      </div>
                    </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">3. Содействие в закупке материалов и выполнение работ</a></h4>
                      </div>
                        <div id="collapseThree1" class="panel-collapse collapse">
                          <div class="panel-body text-justified">
                          	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, autem,
                            beatae, necessitatibus non quisquam ipsum aliquam assumenda rerum fuga quia
                            laborum odio omnis suscipit eaque et obcaecati minima similique maxime.
                          </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">4. Подписание акта сдачи объекта, завершение работ</a></h4>
                      </div>
                        <div id="collapseFour1" class="panel-collapse collapse">
                          <div class="panel-body text-justified">
                          	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, autem,
                            beatae, necessitatibus non quisquam ipsum aliquam assumenda rerum fuga quia
                            laborum odio omnis suscipit eaque et obcaecati minima similique maxime.
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="action">
    	<div class="container">
        	<div class="row row-margin-top text-center">
            	<h2><?= $action['TextAction']; ?></h2>
                <div class="col-sm-12 prices"><span>Цена до акции:</span><p class="price-old"></p><span>Цена после акции:</span><p class="price-new"></p></div>
                <p class="large-text">Торопитесь воспользоваться акцией могут только первые <span class="count-users"><?= $action['count_users']; ?></span> клиентов</p>
                <h2>До конца акции осталось:</h2>
                <div class="col-xs-12">
                    <div class="timer">
                        <p class="timer-days"><?= $action['days']; ?></p><span>дней</span>
                        <p class="timer-hours"><?= $action['hours']; ?></p><span>часов</span>
                        <p class="timer-minutes"><?= $action['minutes']; ?></p><span>минут</span>
                        <p class="timer-seconds">0</p><span>секунд</span>
                    </div>
                </div>
                <p class="large-text end-action"></p>
            </div>
        </div>
    </section>
    
    <section class="record">
    	<div class="container">
        	
            <div class="row row-margin-top text-center">
            	<h2>Запишитесь на осмотр квартиры пямо сейчас</h2>
            </div>
        	
        	<div class="row row-margin-top text-center">
           	  <form method="POST">
                  <div>
                  	<div id="record" class="groups-elements">
                        <div class="col-md-3 col-md-offset-0 col-xs-10 col-xs-offset-1 element-input">
                        	<div class="container-input">
                                <p class="input-placeholder">Ваше имя...</p>
                                <input type="text" class="form-control" placeholder="Ваше имя..." required="required" id="name-user" name="name-user">
                                <div class="input-undeline"></div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-md-offset-0 col-xs-10 col-xs-offset-1 element-input">
                        	<div class="container-input">
                                <p class="input-placeholder">Ваш email...</p>
                                <input type="email" class="form-control" placeholder="Ваш email..." required="required" id="email-user" name="email-user">
                                <div class="input-undeline"></div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-md-offset-0 col-xs-10 col-xs-offset-1 element-input">
                        	<div class="container-input">
                                <p class="input-placeholder">Ваш телефон...</p>
                                <input type="tel" class="form-control" placeholder="Ваш телефон..." required="required" id="phone-user" name="phone-user">
                                <div class="input-undeline"></div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-md-offset-0 col-xs-10 col-xs-offset-1 element-input">
                            <input type="button" class="form-control btn btn-primary make-statement" id="make-statement" placeholder="Ваш телефон..." value="Записаться" name="send-user">
                        </div>
                    </div>
                  </div>
           	          
       	      	</form>
                
                <p class="large-text query-is-success"></p>
                
            </div>
        </div>
    </section>
    
    <div class="section">
    	<div class="container text-center">
    		<div class="row row-margin-top">
    			<h2>Наши контакты</h2>
    		</div>
            <div class="row row-margin-top">
            	<div class="col-md-3 col-md-offset-1 phone-company">
                	<p>Наш телефон:</p>
                    <p class="large-text">+7 (967) 432-76-54</p>
                </div>
                <div class="col-md-3 email-company">
                	<p>Наш email:</p>
                    <p class="large-text">Remont@yandex.ru</p>
                </div>
                <div class="col-md-3 address-company">
                	<p>Наш адрес:</p>
                    <p class="large-text">г. Казань, ул. Ленина, д. 53</p>
                </div>
            </div>
    	</div>
    </div>
    
    <footer class="row-margin-top">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3 socian">
                	<div class="row">
                    	<div class="col-md-12 col-sm-4">
                        	<h3>Мы в соц-сетях:</h3>
                        </div>
                    </div> 
                	<a href="#"><img src="img/tw.jpg" alt="tw"></a>
                    <a href="#"><img src="img/fb.jpg" alt="fb"></a>
                    <a href="#"><img src="img/fl.jpg" alt="fl"></a>
                </div>

                <div class="payment col-md-4">
                    <div class="row">
                        <h3 class="col-md-12">Вы можете произвести оплату следующими способами</h3>
                        <a class="col-md-3" href="#"><img src="img/pay1.jpg" alt=""></a>
                        <a class="col-md-3" href="#"><img src="img/pay2.jpg" alt=""></a>
                        <a class="col-md-3" href="#"><img src="img/pay3.jpg" alt=""></a>
                        <a class="col-md-3" href="#"><img src="img/pay4.jpg" alt=""></a>
                        <a class="col-md-3" href="#"><img src="img/pay5.jpg" alt=""></a>
                        <a class="col-md-3" href="#"><img src="img/pay6.jpg" alt=""></a>
                        <a class="col-md-3" href="#"><img src="img/pay7.jpg" alt=""></a>
                        <a class="col-md-3" href="#"><img src="img/pay8.jpg" alt=""></a>
                    </div>
                </div>

                <div class="col-md-5 col-sm-6">
                	<h3>Остались вопросы?</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate iure commodi officia debitis tenetur ratione ea dolorem vero recusandae? Atque dolores adipisci eum veniam sapiente quasi iure distinctio quaerat perspiciatis.<br>Вы можете связаться с нами кликнув <a href="#">сюда</a>
                    </p>
                </div>
    		</div>
    	</div>
        <div class="container-fluid col-margin-top copy">
        	<div class="container">
                <div class="row copyright text-left">
                    <p>&copy; Copyright 2016 Ремонтная компания</p>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-1.11.3.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.malihu.PageScroll2id.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>