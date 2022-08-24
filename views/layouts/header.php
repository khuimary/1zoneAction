<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;



AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="yii::$app->language">
    <head>
        <meta charset="utf-8">
        <meta charset="yii::$app->charset" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
         <link href="css/main.css" rel="stylesheet">
         <link href="css/style.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        
        <title>1 Zonemma-Mixed Marital Action</title>
         <link rel="shortcut icon" href="pictures/1zoneaction.png">
        <!-- Favicon-->
        <link rel="icon" type="pictures/1zoneaction.png" href="" />
        <!-- Bootstrap icons-->
        <link href="" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <?php echo $this->head()?>
    </head>
    <header id="header" style="color: black;"><!--header-->

      
         <div class="header_top m-0 p-0"><!--header_top-->
			<div class="container">
				<div class="row">
                                    <div class="col-md-4 clearfix">
						<div class="logo pull-left">
                                                    <a href="bheader.php"><img src="pictures/1zoneaction.png" style="height: 60px; width: 100px" alt="" /></a>
						</div>
					
					</div>
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills pull-left">
								<li><a href="#"><i class="fa fa-phone pull-left"></i> +254 740 278 716</a></li>
								<li><a href="#"><i class="fa fa-envelope pull-left"></i> marykamau@gmail.com</a></li>
							</ul>
                                                </div>
                                                <div class="col-sm-4">
	                                                <div class="search_box pull-right pull-left">
                                                            <input type="text" placeholder="Search"/>
		                                        </div>
	                                        </div>
                                            
					</div>
					
				</div>
			</div>
                      
		</div><!--/header_top-->
			
		
               
                
        <?php echo $this->beginBody()?>
        <!-- Navigation-->
        <div class="wrap m-0 p-0">
                        <?php
                        yii\bootstrap4\NavBar::begin([
                      //'brandLabel' => Yii::$app->name,
                      'brandUrl' => Yii::$app->homeUrl,
                      'options' => [
                          //'class' => 'NavBar-inverse navbar-fixed-top', 
                          'class' => 'NavBar navbar-expand-lg navbar-light bg-light',
                      ],
                  ]);
                  echo  Nav::widget([
                      'options' => ['class' => 'NavBar-nav NavBar-dark'],
                      'options' => ['class' => 'NavBar-nav mr-auto'],
                      'items' => [
                          ['label' => 'Home', 'url' => ['/site/index'], 'options' => ['class' => 'nav-item']],
                          ['label' => 'About', 'url' => ['/site/about'], 'options' => ['class' => 'nav-item']],
                          ['label' => 'Athletics', 'url' => ['/site/athletics'], 'options' => ['class' => 'nav-item']],
                          ['label' => 'Winners', 'url' => ['/site/winner'], 'options' => ['class' => 'nav-item']],
                           ['label' => 'Gallery', 'url' => ['/site/gallery'], 'options' => ['class' => 'nav-item']],
                           ['label' => 'Videos', 'url' => ['/site/videos'], 'options' => ['class' => 'nav-item']],
                           ['label' => 'News', 'url' => ['/site/news'], 'options' => ['class' => 'nav-item']],
                           ['label' => 'Blog', 'url' => ['/site/blog'], 'options' => ['class' => 'nav-item ']],
                          ['label' => 'Contact', 'url' => ['/site/contact'], 'options' => ['class' => 'nav-item']],
                          Yii::$app->user->isGuest ? (
                              ['label' => 'Login', 'url' => ['/site/login'], 'options' => ['class' => 'nav-item ']]
                          ) : (
                              '<li>'
                              . Html::beginForm(['/site/logout'], 'post')
                              . Html::submitButton(
                                  'Logout (' . Yii::$app->user->identity->username . ')',
                                  ['class' => 'btn btn-link logout']
                              )
                              . Html::endForm()
                              . '</li>'
                          )
                      ],
                  ]);
                  NavBar::end();
                  ?>
           
        </div> 
       
		
		
		
	
		
	
</header>
