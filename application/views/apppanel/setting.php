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
									<li><i class="fa fa-edit"></i> <b><?=lang('panel_setting_panel_header');?></b></li>						
								</ol>								
							</div>								
						</div>
						<div class="hr_title"></div>
						<br>
						<div class="row">	
							<div class="col-lg-12">	
								<p class="font-section padding-left-20"><i class="fa fa-window-restore"></i> System</p>
							</div>
						</div>
						<div class="row padding-left-30 padding-right-30 padding-bottom-20">
							<div class="col-lg-12 col-md-4">
								<div class="padding-btn">
									<a href="#" class="btn btn-circle btn-default">
									<p></p>
										<i class="fa fa-user-tie fa-2x icon-btn-circle"></i>
										<p class="font-btn-12">Staff</p>
									</a>							
								</div>
								<div class="padding-btn">
									<a href="#" class="btn btn-circle btn-default">
									<p></p>
										<i class="fa fa-envelope fa-2x icon-btn-circle"></i>
										<p class="font-btn-12">Email</p>
									</a>							
								</div>								
								<div class="padding-btn">
									<a href="#" class="btn btn-circle btn-default">
									<p></p>
										<i class="fa fa-file-alt fa-2x icon-btn-circle"></i>
										<p class="font-btn-12">Report</p>
									</a>							
								</div>								
							</div>
						</div>						
						<div class="row">	
							<div class="col-lg-12">	
								<p class="font-section padding-left-20"><i class="fa fa-window-restore"></i> Standard</p>
							</div>
						</div>
						<div class="row padding-left-30 padding-right-30 padding-bottom-20">
							<div class="col-lg-12 col-md-4">
								<div class="padding-btn">
									<a href="<?php echo base_url('panel/modelcv');?>" class="btn btn-circle btn-default">
									<p></p>
										<i class="fa fa-clone fa-2x icon-btn-circle"></i>
										<p class="font-btn-12">Model</p>
									</a>							
								</div>
								<div class="padding-btn">
									<a href="#" class="btn btn-circle btn-default">
									<p></p>
										<i class="fa fa-screwdriver fa-2x icon-btn-circle"></i>
										<p class="font-btn-12">Template</p>
									</a>							
								</div>								
							</div>
						</div>
						<div class="row">	
							<div class="col-lg-12">	
								<p class="font-section padding-left-20"><i class="fa fa-window-restore"></i> Monitoring</p>
							</div>
						</div>
						<div class="row padding-left-30 padding-right-30 padding-bottom-20">
							<div class="col-lg-12 col-md-4">
								<div class="padding-btn">
									<a href="#" class="btn btn-circle btn-default">
									<p></p>
										<i class="fa fa-user fa-2x icon-btn-circle"></i>
										<p class="font-btn-12">Member</p>
									</a>							
								</div>
								<div class="padding-btn">
									<a href="#" class="btn btn-circle btn-default">
									<p></p>
										<i class="fa fa-users fa-2x icon-btn-circle"></i>
										<p class="font-btn-12">Group</p>
									</a>							
								</div>
								<div class="padding-btn">
									<a href="#" class="btn btn-circle btn-default">
									<p></p>
										<i class="fa fa-chalkboard fa-2x icon-btn-circle"></i>
										<p class="font-btn-12">Board</p>
									</a>							
								</div>
								<div class="padding-btn">
									<a href="#" class="btn btn-circle btn-default">
									<p></p>
										<i class="fa fa-history fa-2x icon-btn-circle"></i>
										<p class="font-btn-12">Log</p>
									</a>							
								</div>								
							</div>
						</div>

						
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