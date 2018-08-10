<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">	
<!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>frontend/css/bootstrap/<?=$assetversion['css_version_bootstrap']?>/bootstrap.min.css" rel="stylesheet">	
<!-- CSS -->
    <link href="<?php echo base_url();?>theme/panel/<?php echo $currentpanel;?>/css/style.css" rel="stylesheet">	
<!-- Fonts -->
	<link href="<?php echo base_url();?>frontend/fonts/font-awesome/<?=$assetversion['font_version_fontawesome']?>/css/all.min.css" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo base_url();?>frontend/js/html5shiv/<?=$assetversion['js_version_html5shiv']?>/html5shiv.min.js"></script>
        <script src="<?php echo base_url();?>frontend/js/responsejs/<?=$assetversion['js_version_responsejs']?>/respond.min.js"></script>
    <![endif]-->
	<title><?=lang('panel_browser_title');?></title>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top effectnav" role="navigation">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="brand">            
					<a href="<?php echo base_url();?>">
						<img src="<?php echo base_url();?>theme/shared/images/logo.png" alt="" />
					</a>				
				</div>		
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" id="ddnav">
				</div>
			</div>
		</div>
	</nav>

</div>
</body>
</html>
<!-- jQuery -->
    <script src="<?php echo base_url();?>frontend/js/jquery/<?=$assetversion['js_version_jquery']?>/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>frontend/js/bootstrap/<?=$assetversion['js_version_bootstrap']?>/bootstrap.min.js"></script>