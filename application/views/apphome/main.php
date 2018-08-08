<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">	
	<?php include 'header.php';?>
	<title><?=lang('home_browser_title');?></title>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top effectnav" role="navigation">
	<?php include 'navbar.php';?>
	</nav>
	<div class="container-fluid">

		<div class="row">	
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				<form class="form-inline">				
					<div class="row padding-5">
						<div class="form-group">
							<select class="form-control" id="sel-order">
								<option>Sort by Date</option>
								<option>Sort by Rate</option>
							</select>
							<div class="input-group" id="search-control">				
								<input type="text" class="form-control" placeholder="Explorer your script..."/> 
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
								</span>
							</div>
						</div>
					</div>																
				</form>						
			</div>			
		</div>
		
	</div>	
	
	
	
	
	
	<div class="push"></div>
</div>
<?php include 'footerbar.php';?>
</body>
</html>
<?php include 'footer.php';?>