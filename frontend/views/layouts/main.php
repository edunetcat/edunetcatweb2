<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register ( $this );
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="">

<title><?= Html::encode($this->title) ?></title>
    <?php $this->head()?>

    <!-- Custom CSS -->
<link href="css/panell.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/angular-bootstrap-calendar.css" rel="stylesheet" type="text/css">

</head>
<body ng-app="panellApp">



<?php $this->beginBody()?>
    <div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">Edunet.cat - Panell Alumnes</a>
			</div>
			<!-- /.navbar-header -->



			<ul class="nav navbar-top-links navbar-right">
				<!--<li>
                    <a>AuthKey: <?php $session = Yii::$app->session; echo $session['authKey'] ?></a>
                </li> -->
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""> <!-- <span class="badge important" style="background-color: #d9534f;">1</span>-->
						<i class="fa fa-envelope fa-fw"></i> Missatges <i class="fa fa-caret-down"></i>
				</a>
					<ul class="dropdown-menu dropdown-messages">
						<li><a href="/#/missatges-read">
								<div>
									<strong>Professor sistemes</strong> <span class="pull-right text-muted"> <em>09:10</em>
									</span>
								</div>
								<div>RE: Dubtes amb ex3 EAC4?</div>
						</a></li>
						<li class="divider"></li>
						<li><a class="text-center" href="/#/missatges"> <strong>Llegir la resta de missatges</strong> <i
								class="fa fa-angle-right"></i>
						</a></li>
					</ul> <!-- /.dropdown-messages --></li>


				<!-- /.dropdown -->
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""> <i class="fa fa-user fa-fw"></i>
						Biel Conde <i class="fa fa-caret-down"></i>
				</a>
					<ul class="dropdown-menu dropdown-user">
						<li><a href="/#/perfil"><i class="fa fa-user fa-fw"></i> Perfil</a></li>
						<li class="divider"></li>
						<li><a href="#/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
					</ul> <!-- /.dropdown-user --></li>
				<!-- /.dropdown -->
			</ul>
			<!-- /.navbar-top-links -->

			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">
						<li class="sidebar-search">
							<div class="input-group custom-search-form">
								<input type="text" class="form-control" placeholder="Búsqueda..."> <span class="input-group-btn">
									<button class="btn btn-default" type="button">
										<i class="fa fa-search"></i>
									</button>
								</span>
							</div> <!-- /input-group -->
						</li>
						<li><a href="/#/"><i class="fa fa-dashboard fa-fw"></i> Panell Alumnes</a></li>
						<li><a href="/#/centres"><i class="fa fa-building fa-fw"></i> Administrar Centres</a></li>
						<li><a href="/#/usuaris"><i class="fa fa-building fa-fw"></i> Administrar Usuaris</a></li>
						<li><a href="/#/tramits"><i class="fa fa-sign-in fa-fw"></i> Tràmits</a></li>
						<li><a href="/#/missatges"><i class="fa fa-envelope-o fa-fw"></i> Missatges</a></li>
						<li><a href="/#/calendari"><i class="fa fa-calendar-o fa-fw"></i> Calendari</a></li>
						<li><a href="/#/expedient"><i class="fa fa-bar-chart-o fa-fw"></i> Expedient acadèmic</a></li>
						<li><a href=""><i class="fa fa-edit fa-fw"></i> Avaluació <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<!-- <li><a href="/#/avaluacio-gestor">M02 - Base de Dades</a></li> -->
                                <li><a href="/#/avaluacio-dam-m02">M02 - Base de Dades</a></li>
								<li><a href="/#/avaluacio-dam-m03">M03 - Sistemes</a></li>
								<li><a href="/#/avaluacio-dam-m06">M06 - Accés a dades</a></li>
							</ul> <!-- /.nav-second-level --></li>
					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>


        <?= $content?>

    </div>
	<!-- /wrapper -->

	<!-- jQuery -->
	<script src="/js/vendor/jquery-1.11.1.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="/js/vendor/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="/js/vendor/metisMenu.min.js"></script>
    

    <!-- angular 1.4.0-rc.0 -->
    <script src="/js/vendor/angular.min.js"></script>
    <script src="/js/vendor/angular-route.min.js"></script>
    <script src="/js/vendor/angular-resource.min.js"></script>

    <!-- Underscore -->
    <script src="/js/vendor/underscore-min.js"></script>
    <script src="/js/vendor/angular-underscore-module.js"></script>

	<script src="/js/vendor/ui-bootstrap-0.13.0.min.js"></script>
	<script src="/js/vendor/moment.min.js"></script>
	<script src="/js/vendor/moment-ca.js"></script>
	<script src="/js/vendor/ui-bootstrap-tpls.min.js"></script>
	<script src="/js/vendor/angular-bootstrap-calendar-tpls.min.js"></script>

	<!-- Custom JavaScript -->
	<script src="/js/panellapp.js"></script>
	<script src="/js/controllers.js"></script>
	<script src="/js/services.js"></script>



<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage() ?>