<?php
	Yii::app()->clientscript
		// use it when you need it!
		
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
		->registerCoreScript( 'jquery' )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-transition.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-alert.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-modal.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-dropdown.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-scrollspy.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tab.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tooltip.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-popover.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-button.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-collapse.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-carousel.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-typeahead.js', CClientScript::POS_END )
		
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="language" content="id" />
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Le styles -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/img/ekatama.png" rel="shortcut icon" type="image/x-icon" />
<!-- Le fav and touch icons -->
<!-- <script>
function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = h+":"+m+":"+s;
    var t = setTimeout(function(){startTime()},500);
}

function checkTime(i) {
    if (i<10) {i = "0" + i}; 
    return i;
}
</script> -->
</head>

<body onLoad="startTime()">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#"><?php echo Yii::app()->name ?></a>
				<div class="nav-collapse">
					<?php $this->widget('zii.widgets.CMenu',array(
						'htmlOptions' => array( 'class' => 'nav' ),
						'activeCssClass'	=> 'active',
						'items'=>array(
							array('label'=>'Home', 'url'=>array('/site/index')),
							array('label'=>'Detail IKM', 'url'=>array('/ikm/detailikm/index'), 'visible'=>!Yii::app()->user->isGuest),
							/*array('label'=>'Sales', 'url'=>array('#'),'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Project', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Finance', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Accounting', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Asset Management', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'CRM', 'url'=>array('/site/contact'), 'visible'=>!Yii::app()->user->isGuest),
							*/array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
					)); ?>
					
				
				</div><div id='txt'></div><div id="muncul"><?php //echo date("l, d M Y").' | '.Yii::app()->user->name; ?> </div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	
	<div class="cont">
	<div class="container-fluid">
	  <?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
				'homeLink'=>false,
				'tagName'=>'ul',
				'separator'=>'',
				'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider">/</span></li>',
				'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
				'htmlOptions'=>array ('class'=>'breadcrumb')
			)); ?>
		<!-- breadcrumbs -->
	  <?php endif?>
	
	<?php echo $content ?>
	
	
	</div><!--/.fluid-container-->
	</div>
	<!--
	<div class="extra">
	  <div class="container">
		<div class="row">
			<div class="col-md-3">
				<h4>Heading 1</h4>
				<ul>
					<li><a href="#">Subheading 1.1</a></li>
					<li><a href="#">Subheading 1.2</a></li>
					<li><a href="#">Subheading 1.3</a></li>
					<li><a href="#">Subheading 1.4</a></li>
				</ul>
			</div> <!-- /span3 -->
	<!--		
			<div class="col-md-3">
				<h4>Heading 2</h4>
				<ul>
					<li><a href="#">Subheading 2.1</a></li>
					<li><a href="#">Subheading 2.2</a></li>
					<li><a href="#">Subheading 2.3</a></li>
					<li><a href="#">Subheading 2.4</a></li>
				</ul>
			</div> <!-- /span3 -->
	<!--		
			<div class="col-md-3">
				<h4>Heading 3</h4>	
				<ul>
					<li><a href="#">Subheading 3.1</a></li>
					<li><a href="#">Subheading 3.2</a></li>
					<li><a href="#">Subheading 3.3</a></li>
					<li><a href="#">Subheading 3.4</a></li>
				</ul>
			</div> <!-- /span3 -->
	<!--
			<div class="col-md-3">
				<h4>Heading 4</h4>
				<ul>
					<li><a href="#">Subheading 4.1</a></li>
					<li><a href="#">Subheading 4.2</a></li>
					<li><a href="#">Subheading 4.3</a></li>
					<li><a href="#">Subheading 4.4</a></li>
				</ul>
				</div> <!-- /span3 -->
	<!--		</div> <!-- /row -->
	<!--	</div> <!-- /container -->
	<!--</div>-->
	
	<div class="footer">
	  <div class="container">
		<div class="row">
			<div id="footer-copyright" class="col-md-6">
				<a href="http://ekatamagroup.com/" target="_blank">About us</a> | <a href="http://ekatamagroup.com/index.php/contact-us.html" target="_blank">Contact us</a> | <a href="#">Terms & Conditions</a>
			</div> <!-- /span6 -->
			<div id="footer-terms" class="col-md-6">
				© 2016 Developed by Programmer House</a>.
			</div> <!-- /.span6 -->
		 </div> <!-- /row -->
	  </div> <!-- /container -->
	</div>
</body>
</html>