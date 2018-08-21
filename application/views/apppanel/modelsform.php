<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">	
	<?php include 'header.php';?>
	<title><?=lang('panel_browser_title');?></title>
</head>
<body>
<div id="preloader">
    <div id="status"><span class="glyphicon glyphicon-refresh glyphicon-spin" aria-hidden="true"></span></div>
</div>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top effectnav" role="navigation">
		<?php include 'navbar.php';?>
	</nav>
	<div class="container-fluid">	
		<div class="row padding-top-10">
			<div class="col-lg-12">		
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12 padding-bottom-10">
								<ol class="breadcrumb">
									<li><a href="<?php echo base_url('panel/main');?>"><i class="fa fa-home"></i></a></li>
									<li><a href="<?php echo base_url('panel/models');?>"><i class="fa fa-square"></i> <?=lang('panel_model_panel_header');?></a></li>		
									<li>Create</li>									
								</ol>								
							</div>									
						</div>
						<div class="hr_title"></div>
						<br>


					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
<?php include 'modalout.php';?>
</body>
</html>
<?php include 'footer.php';?>


