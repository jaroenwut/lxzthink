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
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top effectnav" role="navigation">
	<?php include 'navbar.php';?>
	</nav>
	<div class="container">
		<div class="row">	
			<div class="col-sm-8 col-md-4 col-md-offset-4 col-sm-offset-2">
				<div class="panel-login panel panel-default">
					<div class="panel-body">
						<form id="frmlogin" role="form" action="<?php echo base_url("verify");?>" method="post" accept-charset="utf-8">
							<fieldset>
								<div class="row">
									<div class="col-lg-12 text-center"><p class="font-panel-login-head"><?=lang('panel_login_head_title')?></p></div>
								</div>
								<hr>
								<div class="form-group">
									<label for="tbxusername" class="control-label signin"><?=lang('panel_login_user_label');?></label>
									<input class="form-control" id="tbxusername" name="tbxusername" type="text" autofocus maxlength="50">
								</div>
								<div class="form-group">
									<label for="tbxpwd" class="control-label signin"><?=lang('panel_login_pwd_label');?></label>
									<input class="form-control" id="tbxpwd" name="tbxpwd" type="password" autofocus maxlength="12">
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12 text-right">
										<button id="btnlogin" name="btnlogin" type="submit" class="btn btn-primary btn-sm" value="login"><i class="fa fa-key"></i> <b><?=lang('panel_login_submit_btn')?></b></button>
									</div>
								</div>								
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php include 'footer.php';?>