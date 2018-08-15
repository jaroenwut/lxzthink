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
									<li><i class="fa fa-asterisk"></i> <b><?=lang('panel_chgpwd_panel_header');?></b></li>						
								</ol>								
							</div>								
						</div>
						<div class="hr_title"></div>
						<br>
									<div class="row">
										<div class="col-lg-12">								
											<form id="frm" method="post" action="#" role="form" class="form-horizontal">								
												<div class="row">									
													<div class="col-lg-12">
														<div class="form-group">
															<label for="tbxuser" class="col-sm-4 col-md-2 col-lg-2 control-label"><p class="font-label">Username</p></label>
															<div class="col-sm-6 col-md-4 col-lg-3">
																<p><?=$usernamesess;?></p>															
															</div>												
														</div>
														<div class="form-group">
															<label for="tbxpwd" class="col-sm-4 col-md-2 col-lg-2 control-label"><p class="font-label">Old Password</p></label>
															<div class="col-sm-6 col-md-4 col-lg-3">
																<input type="password" id="tbxpwd" name="tbxpwd" maxlength="12" class="form-control"/>
															</div>																							
														</div>
														<div class="form-group">
															<label for="tbxcfpwd" class="col-sm-4 col-md-2 col-lg-2 control-label"><p class="font-label">New Password</p></label>
															<div class="col-sm-6 col-md-4 col-lg-3">
																<input type="password" id="tbxcfpwd" name="tbxcfpwd" maxlength="12" class="form-control"/>
															</div>																							
														</div>
														<div class="form-group">
															<label for="tbxcfpwd" class="col-sm-4 col-md-2 col-lg-2 control-label"><p class="font-label">Confirm Password</p></label>
															<div class="col-sm-6 col-md-4 col-lg-3">
																<input type="password" id="tbxcfpwd" name="tbxcfpwd" maxlength="12" class="form-control"/>
															</div>																							
														</div>														
														<div class="form-group text-right">
															<label class="col-sm-4 col-md-2 col-lg-2 control-label"></label>
															<div class="col-sm-6 col-md-4 col-lg-3">
																<button id="btnupdatesecure" name="btnupdatesecure" type="submit" class="btn btn-primary btn-sm" value="secure">
																	<span class="glyphicon glyphicon-floppy-disk"></span> Save &nbsp;
																</button>	
																<a href="#" class="btn btn-primary btn-sm" role="button">
																	<span class="glyphicon glyphicon-remove-sign"></span> Cancel
																</a>													
															</div>																							
														</div>																												
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