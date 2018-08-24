<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">	
	<?php include 'header.php';?>
<!-- Datatable CSS -->
    <link href="<?php echo base_url();?>frontend/css/datatable/<?=$assetversion['css_version_datatable']?>/datatables.min.css" rel="stylesheet">	
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
							<div class="col-lg-6 padding-bottom-10">
								<ol class="breadcrumb">
									<li><a href="<?php echo base_url('panel/main');?>"><i class="fa fa-home"></i></a></li>
									<li><i class="fa fa-square"></i> <b><?=lang('panel_models_panel_header');?></b></li>						
								</ol>								
							</div>	
							<div class="col-lg-6 text-right">						
								<a href="<?php echo base_url('panel/models/create');?>" class="btn btn-primary btn-circle-min" data-toggle="tooltip" data-placement="bottom" role="button">
									<i class="fa fa-plus"></i>
								</a>														
							</div>								
						</div>
						<div class="hr_title"></div>
						<br>
						<div class="row padding-bottom-10">
							<div class="col-lg-12">	
								<table id="tblmodel" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th></th>
											<th>#</th>
											<th><?=lang('panel_models_tb_col1');?></th>
											<th><?=lang('panel_models_tb_col2');?></th>
											<th><?=lang('panel_models_tb_col3');?></th>
										</tr>
									</thead>								
								</table>
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
<!-- Data Table -->	
    <script src="<?php echo base_url();?>frontend/js/datatable/<?=$assetversion['js_version_datatable']?>/datatables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#tblmodel').DataTable(
			{
				"scrollX":true,			
				"columnDefs": 
				[
					{"targets":[0],"orderable": false,"width":"10%","className": "text-center"},
					{"targets":[1],"orderable": false,"width":"5%","className": "text-center"},				
				],
				"processing": true,
				"serverSide": true,
				"order": [],
				"ajax": {
					"url": "<?php echo site_url('panel/models/show')?>",
					"type": "POST",
					"dataSrc": function (jsonData) {
					  for ( var i=0, len=jsonData.data.length ; i<len ; i++ ) 
					  {
						jsonData.data[i][0] = '<a href="<?php echo base_url('panel/models/edit/');?>'+jsonData.data[i][6]
												+'"><i class="fa fa-pen"></i></a>&nbsp;&nbsp;&nbsp;'
												+'<a href="#"><i class="fa fa-sliders-h"></i></a>&nbsp;&nbsp;&nbsp;';
					  }
					  
					  return jsonData.data;
					}					
				}			
			}
		);		
	} );
	</script>
