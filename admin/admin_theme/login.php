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
        <link rel="stylesheet" type="text/css" href="admin_theme/_resources/jquery-ui/css/smoothness/jquery-ui-1.10.1.custom.min.css" />
        
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
        				<a href="login.php">Home</a>
        			</li>
        		</ul>
        	</div>
        </div>
        
        <div class="clearfix"></div>
        
        <div id="wrap">
        	<div id="login">
        		<form>
					<fieldset>
						<legend>L2JStore - Painel administrativo</legend>
							<div class="control-group">
							  <label class="control-label" for="email">Entre com seu E-mail</label>
							  <div class="controls input-prepend">
							  	<span class="add-on"><i class="icon-envelope"></i></span>
							    <input type="text" id="email" name="email">
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="password">Entre com sua senha</label>
							  <div class="controls input-prepend">
							  	<span class="add-on"><i class="icon-key"></i></span>
							    <input type="password" id="password" name="password">
							  </div>
							</div>
							
							<label></label>
							<a class="botao login" href="#"><i class="icon-ok"></i> Fazer login</a>
					</fieldset>
        		</form>
       			<hr />
	        	<div class="alert"></div>
        	</div>
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
        
        <!-- Login JS -->
        <script type="text/javascript" src="admin_theme/js/login.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
