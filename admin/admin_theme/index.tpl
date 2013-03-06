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

        <link rel="stylesheet" href="{$DIR_CSS}/normalize.css">
        <link rel="stylesheet" href="{$DIR_CSS}/main.css">
        <script src="{$DIR_JS}/vendor/modernizr-2.6.2.min.js"></script>
        
        <!-- Yahoo reset -->
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.8.1/build/cssreset/cssreset-min.css">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="{$DIR_RESOURCES}/bootstrap/css/bootstrap.min.css" />
        
        <!-- jQuery UI -->
        <link rel="stylesheet" type="text/css" href="{$DIR_RESOURCES}/jquery-ui/css/smoothness/jquery-ui-1.10.1.custom.min.css" />
        
        <!-- Font awesome -->
        <link rel="stylesheet" type="text/css" href="{$DIR_RESOURCES}/font-awesome/css/font-awesome-ie7.min.css" />
        <link rel="stylesheet" type="text/css" href="{$DIR_RESOURCES}/font-awesome/css/font-awesome.min.css" />
        
        <!-- Importando CSS do sistema -->
        <link rel="stylesheet" type="text/css" href="{$DIR_CSS}/stylesheet.css" />
        <link rel="stylesheet" type="text/css" href="{$DIR_CSS}/login.css" />
        
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
        				<a href="#">Items</a>
        			</li>
       			<li>
        			<i class="icon-caret-down"></i> <a href="#">Attributes</a>
        			<ul>
        				<li>
        					<i class="icon-plus-sign"></i> <a href="#">New attribute</a>
        				</li>
        				<li>
							<i class="icon-list"></i> <a href="#">List attribute</a>
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
        	
        </div>

        <!-- Add your site or application content here -->
        <p>Hello world! This is HTML5 Boilerplate.</p>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="{$DIR_JS}/plugins.js"></script>
        <script src="{$DIR_JS}/main.js"></script>
        
        <!-- Bootstrap -->
        <script type="text/javascript" src="{$DIR_RESOURCES}/bootstrap/js/bootstrap.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="{$DIR_RESOURCES}/jquery-ui/js/jquery-ui-1.10.1.custom.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        {literal}
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        {/literal}
    </body>
</html>
