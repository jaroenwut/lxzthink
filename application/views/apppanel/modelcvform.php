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
<?php
$valuebtn='';
$namebtn='';
if($operation=='add')
{		
	$operation='add';
	$bc=lang('panel_bc_create');
	$valuebtn='save';
	$textbtn=lang('panel_btn_save');
	$namebtn='btnsave';
}else{
	$operation='update';
	$bc=lang('panel_bc_edit');
	$valuebtn='update';
	$textbtn=lang('panel_btn_update');
	$namebtn='btnupdate';
}
?>
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
							<div class="col-lg-9 padding-bottom-10">
								<ol class="breadcrumb">
									<li><a href="<?php echo base_url('panel/main');?>"><i class="fa fa-home"></i></a></li>
									<li><a href="<?php echo base_url('panel/modelcv');?>"><i class="fa fa-clone"></i> <?=lang('panel_modelcv_panel_header');?></a></li>		
									<li><?=$bc?></li>									
								</ol>								
							</div>
							<div class="col-lg-3 padding-bottom-10 text-right">
							<?if($operation=='update'){?>
								<a href="#" class="btn btn-primary btn-circle-min" data-toggle="modal" data-target="#DeleteModal" data-toggle="tooltip" data-placement="bottom" role="button">
									<i class="fa fa-trash-alt"></i>
								</a>
							<?}?>
							</div>
						</div>
						<div class="hr_title"></div>
						<br>
						<div class="row">
							<div class="col-lg-12">								
								<form id="frm" method="post" action="<?=site_url('panel/modelcv/'.$operation); ?>" role="form" class="form-horizontal">	
									<div class="row">									
										<div class="col-lg-12">								
											<div class="form-group">
												<input type="hidden" name="hidkey" id="hidkey" value="<?=$key?>"/>											
												<label for="tbxmodelsname" class="col-sm-4 col-md-2 col-lg-2 control-label"><p class="font-label"><?=lang('panel_modelcv_label_name');?></p></label>
												<div class="col-sm-6 col-md-4 col-lg-3 required">
													<input type="text" id="tbxmodelsname" name="tbxmodelsname" maxlength="12" class="form-control" value="<?=$modelsname?>"/>
												</div>													
											</div>
											<div class="form-group">		
												<label for="tbxmodelsdesc" class="col-sm-4 col-md-2 col-lg-2 control-label"><p class="font-label"><?=lang('panel_modelcv_label_desc');?></p></label>
												<div class="col-sm-6 col-md-4 col-lg-3">
													<textarea class="form-control" rows="5" id="tbxmodelsdesc" name="tbxmodelsdesc" maxlength="200"><?=$modelsdesc?></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group text-right">
										<label class="col-sm-4 col-md-2 col-lg-2 control-label"></label>
										<div class="col-sm-6 col-md-4 col-lg-3">
											<button type="submit" class="btn btn-primary" id="<?=$namebtn?>" name="<?=$namebtn?>" value="<?=$valuebtn?>"><i class="fa fa-save"></i> <?=$textbtn?></button>
											<a href="<?php echo site_url('panel/modelcv')?>" class="btn btn-primary" role="button"><i class="fa fa-times-circle"></i> <?=lang('panel_btn_cancel');?></a>													
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

    <div id="DeleteModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
			<form id="frmdel" method="post" action="<?=site_url('panel/modelcv/delete'); ?>" role="form" class="form-horizontal">			
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <p class="modal-title font-modal-title"><?=lang('panel_modal_delete_title');?></p>
                </div>
                <div class="modal-body">
					<input type="hidden" name="hididdel" id="hididdel" value="<?=$key?>"/>
                    <p class="modal-title font-modal-content"><?=lang('panel_modal_delete_content');?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> <?=lang('panel_btn_cancel')?></button>
                    <button id="btndel" name="btndel" type="submit" class="btn btn-primary btn-sm" value="delete"><span class="glyphicon glyphicon-trash"></span> <?=lang('panel_btn_delete')?></button>
                </div>
			</form>				
            </div>
        </div>
    </div>

</body>
</html>
<?php include 'footer.php';?>
<!-- Validate Plugin JavaScript -->
    <script src="<?php echo base_url();?>frontend/js/validate/<?=$assetversion['js_version_validate']?>/jquery.validate.min.js"></script>
<!-- Custom Validate -->
    <script src="<?php echo base_url();?>frontend/js/custom/lang/en/valid-models.js"></script>
	<script>
	$(window).bind("pageshow", function() {
		var form = $('form'); 
		form[0].reset();
	});
	</script>
