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
									<li><i class="fa fa-home"></i> <b><?=lang('panel_main_panel_header');?></b></li>						
								</ol>								
							</div>								
						</div>
						<div class="hr_title"></div>
						<br>
						<div class="row">
							<div class="col-lg-3 font-label">
								<b><?=lang('panel_main_section_title');?></b>
							</div>
							<div class="col-lg-9 text-right padding-top-10">
								<form id="frm" name="frm" class="form-horizontal" role="form" action="#">
										<div class="form-inline">
											<div class="input-group date padding-top-5" id="datetimepicker1">
												<input type="text" class="form-control" placeholder="From" />
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
											<div class="input-group date padding-top-5" id="datetimepicker2">
												<input type="text" class="form-control" placeholder="To"/>
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>											
										</div>
								</form>
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
<!-- Calendar -->	
<script src="<?php echo base_url();?>frontend/js/moment/<?=$assetversion['js_version_moment']?>/moment.min.js"></script>	
<link href="<?php echo base_url();?>frontend/css/bootstrap-datetimepicker/<?=$assetversion['css_version_bootstrap_datepicker']?>/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script src="<?php echo base_url();?>frontend/js/bootstrap-datetimepicker/<?=$assetversion['js_version_bootstrap_datepicker']?>/js/bootstrap-datetimepicker.min.js"></script>

<script>
	$(function () {
		$('#datetimepicker1').datetimepicker({format:'DD/MM/YYYY'});
		$('#datetimepicker2').datetimepicker({format:'DD/MM/YYYY'});		
	});	
</script>