<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="admin_theme/css/normalize.css">
        <link rel="stylesheet" href="admin_theme/css/main.css">
        <script src="admin_theme/js/vendor/modernizr-2.6.2.min.js"></script>
        
        <!-- Yahoo reset -->
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.8.1/build/cssreset/cssreset-min.css">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="admin_theme/_resources/bootstrap/css/bootstrap.min.css" />
        
        <!-- jQuery UI -->
        <link rel="stylesheet" type="text/css" href="admin_theme/_resources/bootstrap-ui/css/custom-theme/jquery-ui-1.10.0.custom.css" />
        
        <!-- Font awesome -->
        <link rel="stylesheet" type="text/css" href="admin_theme/_resources/font-awesome/css/font-awesome-ie7.min.css" />
        <link rel="stylesheet" type="text/css" href="admin_theme/_resources/font-awesome/css/font-awesome.min.css" />
        
        <!-- Importando CSS do sistema -->
        <link rel="stylesheet" type="text/css" href="admin_theme/css/stylesheet.css" />
        <link rel="stylesheet" type="text/css" href="admin_theme/css/login.css" />
        
        <link href='http://fonts.googleapis.com/css?family=Sintony' rel='stylesheet' type='text/css'>
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        <div id="header">
        	<div id="nav">
        		<ul>
        			<li class="active">
        				<a href="#">Home</a>
        			</li>
	       			<li>
	        			<i class="icon-caret-down"></i> <a href="#">Items</a>
	        			<ul>
	        				<li>
	        					<i class="icon-plus-sign"></i> <a href="index.php?page=item/add">Novo item</a>
	        				</li>
	        				<li>
								<i class="icon-list"></i> <a href="#">Lista de items</a>
							</li>
						</ul>
					</li>
	       			<li>
	        			<i class="icon-caret-down"></i> <a href="#">Atributos</a>
	        			<ul>
	        				<li>
	        					<i class="icon-plus-sign"></i> <a href="#">Novo atributo</a>
	        				</li>
	        				<li>
								<i class="icon-list"></i> <a href="#">Lista de atributos</a>
							</li>
						</ul>
					</li>
	       			<li>
	        			<i class="icon-caret-down"></i> <a href="#">Pagamentos</a>
	        			<ul>
	        				<li>
	        					<i class="icon-money"></i> <a href="#">Pagseguro</a>
	        				</li>
						</ul>
					</li>
	       			<li>
	        			<i class="icon-caret-down"></i> <a href="#">Settings</a>
	        			<ul>
	        				<li>
	        					<i class="icon-cog"></i> <a href="#">My Store</a>
	        				</li>
						</ul>
					</li>
        		</ul>
        	</div>
        </div>
        
        <div id="wrap">
        	<?php
        	switch ($page) {
				case $page == 'dashboard':
					include 'dashboard.php';
					break;

				case $page == 'item/add':
					include 'item_add.php';
					break;
			}
        	
        	?>
        </div>
        
        <div class="clearfix"></div>
        
        <div id="footer">
        	<p>L2JStore © 2013 - Todos os direitos reservados</p>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="admin_theme/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="admin_theme/js/plugins.js"></script>
        <script src="admin_theme/js/main.js"></script>
        
        <!-- Bootstrap -->
        <script type="text/javascript" src="admin_theme/_resources/bootstrap/js/bootstrap.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="admin_theme/_resources/jquery-ui/js/jquery-ui-1.10.1.custom.min.js"></script>

        <?php if($page == 'item/add') : ?>
        <!-- items JS -->
        <script type="text/javascript" src="admin_theme/js/items.js"></script>
         <script type="text/javascript" src="admin_theme/_resources/jquery-ui/ui/i18n/jquery.ui.datepicker-<?php echo $config['l2jstore']['language']; ?>.js"></script>
        <script type="text/javascript">$(function(){ $.datepicker.setDefaults( $.datepicker.regional[ "<?php echo $config['l2jstore']['language']; ?>" ] ); })</script>
        
        <?php endif; ?>
        
    </body>
</html>
