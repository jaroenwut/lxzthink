<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">	
	<?php include 'header.php';?>
<!-- Chart -->
    <script src="<?php echo base_url();?>frontend/js/chartjs/2.7.1/Chart.bundle.min.js"></script>	
    <script src="<?php echo base_url();?>frontend/js/chartjs/2.7.1/utils.js"></script>	
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
						<div class="row padding-top-10">
							<div class="col-lg-3 font-label">
								<b><?=lang('panel_main_section_title');?></b>
							</div>
							<div class="col-lg-9 text-right">
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
						<hr>						
						<div class="row padding-top-10">	
							<div class="col-lg-3">
								<div class="panel panel-default">
									<div class="panel-body panel-min-bg">
										<div class="row">
											<div class="col-lg-12">
												<i class="fa fa-square"></i> Total Model
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 text-center">
												<p class="font-40-bold">30</p>
											</div>
										</div>											
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="panel panel-default">
									<div class="panel-body panel-min-bg">
										<div class="row">
											<div class="col-lg-12">
												<i class="fa fa-edit"></i> Total Think
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 text-center">
												<p class="font-40-bold">3,505</p>
											</div>
										</div>											
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="panel panel-default">
									<div class="panel-body panel-min-bg">
										<div class="row">
											<div class="col-lg-12">
												<i class="fa fa-archway"></i> Total Visited
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 text-center">
												<p class="font-40-bold">5,060</p>
											</div>
										</div>											
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="panel panel-default">
									<div class="panel-body panel-min-bg">
										<div class="row">
											<div class="col-lg-12">
												<i class="fa fa-star"></i> Total Rated
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 text-center">
												<p class="font-40-bold">90</p>
											</div>
										</div>											
									</div>
								</div>
							</div>							
						</div>
						<div class="row">	
							<div class="col-lg-12">		
								<div class="panel panel-default">
									<div class="panel-body panel-min-bg">
										<canvas id="chartcanvas3" name="chartcanvas3"></canvas>
									</div>
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
<!-- Calendar -->	
<script src="<?php echo base_url();?>frontend/js/moment/<?=$assetversion['js_version_moment']?>/moment.min.js"></script>	
<link href="<?php echo base_url();?>frontend/css/bootstrap-datetimepicker/<?=$assetversion['css_version_bootstrap_datepicker']?>/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script src="<?php echo base_url();?>frontend/js/bootstrap-datetimepicker/<?=$assetversion['js_version_bootstrap_datepicker']?>/js/bootstrap-datetimepicker.min.js"></script>

<script>
	var data3 = {
		labels: ["27 Jan", "28 Jan", "29 Jan","30 Jan","31 Jan","1 Feb", "2 Feb", "3 Feb","4 Feb","5 Feb"],
		datasets: [{label: "Think",data:[10,20,5,10,7,90,58,39,87,119],backgroundColor: "rgba(200,250,80,5)"}]					
	};
	var options3 = {legend:{display: false},	
	responsive: true, 
	maintainAspectRatio: false,
	title: {display: true,text: 'Think by Date'},
    scales: {
        yAxes: [{display: true,ticks:{suggestedMin: 0,beginAtZero: true},scaleLabel:{display: true,labelString: 'Think'}}],
		xAxes: [{scaleLabel:{display: true,labelString: 'Date'}}]
	}
	};	
	var myBarChart = new Chart('chartcanvas3', 
	{
		type: 'line',
		data: data3,
		options:options3
	});
	
	$(function () {
		$('#datetimepicker1').datetimepicker({format:'DD/MM/YYYY'});
		$('#datetimepicker2').datetimepicker({format:'DD/MM/YYYY'});		
	});	
</script>