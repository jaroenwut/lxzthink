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
								<option>Sort by Lasted</option>
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
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6">
				<p class="font-pag">All Thinks</p>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6 text-right">
				<p class="font-pag">Page 1 of 30</p>
			</div>			
		</div>
	</div>		
	<div class="container padding-top-10">	
		<div class="flex-row row">
			<div class="col-sm-4 col-lg-3">				
				<div class="thumbnail">
					<a href="<?=site_url('detail'); ?>" class="athumbnail">
						<img src="<?php echo base_url();?>theme/shared/images/1.png">
						<div class="caption">
							<div class="row">
								<div class="col-xs-6 col-lg-6">
									<i class="fa fa-star icon-orange" data-rating="1"></i>
									<i class="fa fa-star icon-orange" data-rating="2"></i>
									<i class="far fa-star icon-orange" data-rating="3"></i>
									<i class="far fa-star icon-orange" data-rating="4"></i>
									<i class="far fa-star icon-orange" data-rating="5"></i>	
								</div>		
								<div class="col-xs-6 col-lg-6 text-right">
									<p class="font-flexmin">1 Rated</p>
								</div>							
							</div>
							<div>
								<p class="font-flexhead">SWOT with P1</p>
								<p class="font-flexowner">By Admin : 25 Aug 2018</p>
								<p class="flex-text text-muted font-flexdetail">
								SWOT of P1 Project when to use them, a brief history, and even tips so you can get started making your own.
								</p>
							</div>
						</div>
					</a>
				</div>					
			</div>				
			<div class="col-sm-4 col-lg-3">				
				<div class="thumbnail">
					<a href="<?=site_url('detail'); ?>" class="athumbnail">
						<img src="<?php echo base_url();?>theme/shared/images/2.png">
						<div class="caption">
							<div class="row">
								<div class="col-xs-6 col-lg-6">
									<i class="fa fa-star icon-orange" data-rating="1"></i>
									<i class="fa fa-star icon-orange" data-rating="2"></i>
									<i class="far fa-star icon-orange" data-rating="3"></i>
									<i class="far fa-star icon-orange" data-rating="4"></i>
									<i class="far fa-star icon-orange" data-rating="5"></i>	
								</div>		
								<div class="col-xs-6 col-lg-6 text-right">
									<p class="font-flexmin">200 Rated</p>
								</div>							
							</div>
							<div>
								<p class="font-flexhead">Business Model Canvas</p>
								<p class="font-flexowner">By Owner : 9 Dec 2018</p>
								<p class="flex-text text-muted font-flexdetail">
								Business model of new product on Q2/2019. The Business Model Canvas was proposed by Alexander Osterwalder based on his earlier book: Business Model Ontology.
								</p>							
							</div>
						</div>
					</a>
				</div>					
			</div>			
			<div class="col-sm-4 col-lg-3">				
				<div class="thumbnail">
					<a href="<?=site_url('detail'); ?>" class="athumbnail">
						<img src="<?php echo base_url();?>theme/shared/images/3.png">
						<div class="caption">
							<div class="row">
								<div class="col-xs-6 col-lg-6">
									<i class="fa fa-star icon-orange" data-rating="1"></i>
									<i class="fa fa-star icon-orange" data-rating="2"></i>
									<i class="far fa-star icon-orange" data-rating="3"></i>
									<i class="far fa-star icon-orange" data-rating="4"></i>
									<i class="far fa-star icon-orange" data-rating="5"></i>	
								</div>		
								<div class="col-xs-6 col-lg-6 text-right">
									<p class="font-flexmin">1 Rated</p>
								</div>							
							</div>
							<div>
								<p class="font-flexhead">4P example</p>
								<p class="font-flexowner">By Admin : 25 Aug 2018</p>
								<p class="flex-text text-muted font-flexdetail">
								The marketing mix along with 4Ps is the basic concept we should know when learning about the market. In marketing different products, this strategy works as a business tool.
								</p>
							</div>
						</div>
					</a>
				</div>					
			</div>				
			<div class="col-sm-4 col-lg-3">				
				<div class="thumbnail">
					<a href="<?=site_url('detail'); ?>" class="athumbnail">
						<img src="<?php echo base_url();?>theme/shared/images/4.png">
						<div class="caption">
							<div class="row">
								<div class="col-xs-6 col-lg-6">
									<i class="fa fa-star icon-orange" data-rating="1"></i>
									<i class="fa fa-star icon-orange" data-rating="2"></i>
									<i class="fa fa-star icon-orange" data-rating="3"></i>
									<i class="fa fa-star icon-orange" data-rating="4"></i>
									<i class="fa fa-star icon-orange" data-rating="5"></i>	
								</div>		
								<div class="col-xs-6 col-lg-6 text-right">
									<p class="font-flexmin">200 Rated</p>
								</div>							
							</div>
							<div>
								<p class="font-flexhead">4C Marketing Model</p>
								<p class="font-flexowner">By Owner : 9 Dec 2018</p>
								<p class="flex-text text-muted font-flexdetail">
								This model is similar to the 4 Ps Model, except this version turns things and looks at them more so from the perspective of the customer. In this model
								</p>							
							</div>
						</div>
					</a>
				</div>					
			</div>
			<div class="col-sm-4 col-lg-3">				
				<div class="thumbnail">
					<a href="<?=site_url('detail'); ?>" class="athumbnail">
						<img src="<?php echo base_url();?>theme/shared/images/5.png">
						<div class="caption">
							<div class="row">
								<div class="col-xs-6 col-lg-6">
									<i class="fa fa-star icon-orange" data-rating="1"></i>
									<i class="fa fa-star icon-orange" data-rating="2"></i>
									<i class="fa fa-star icon-orange" data-rating="3"></i>
									<i class="fa fa-star icon-orange" data-rating="4"></i>
									<i class="fa fa-star icon-orange" data-rating="5"></i>	
								</div>		
								<div class="col-xs-6 col-lg-6 text-right">
									<p class="font-flexmin">1 Rated</p>
								</div>							
							</div>
							<div>
								<p class="font-flexhead">ACOR Model</p>
								<p class="font-flexowner">By Admin : 25 Aug 2018</p>
								<p class="flex-text text-muted font-flexdetail">
								Great insurance marketing has four stages. That is the most effective marketing model for insurance marketing – and it’s making thousands of brokers more money. It looks like this.
								</p>
							</div>
						</div>
					</a>
				</div>					
			</div>				
			<div class="col-sm-4 col-lg-3">				
				<div class="thumbnail">
					<a href="<?=site_url('detail'); ?>" class="athumbnail">
						<img src="<?php echo base_url();?>theme/shared/images/6.png">
						<div class="caption">
							<div class="row">
								<div class="col-xs-6 col-lg-6">
									<i class="fa fa-star icon-orange" data-rating="1"></i>
									<i class="fa fa-star icon-orange" data-rating="2"></i>
									<i class="fa fa-star icon-orange" data-rating="3"></i>
									<i class="fa fa-star icon-orange" data-rating="4"></i>
									<i class="fa fa-star icon-orange" data-rating="5"></i>	
								</div>		
								<div class="col-xs-6 col-lg-6 text-right">
									<p class="font-flexmin">200 Rated</p>
								</div>							
							</div>
							<div>
								<p class="font-flexhead">PDCA</p>
								<p class="font-flexowner">By Owner : 9 Dec 2018</p>
								<p class="flex-text text-muted font-flexdetail">
								Project management, change leadership and re-engineering skills are leveraged to drive the implementation of these improvement initiatives to completion.
								</p>							
							</div>
						</div>
					</a>
				</div>					
			</div>			
		</div>
	</div>
	<div class="container padding-top-10">
		<div class="row">	
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				<p class="font-pag">1 &nbsp;&nbsp; 2 &nbsp;&nbsp; 3 &nbsp;&nbsp;  4 &nbsp;&nbsp; 5 &nbsp;&nbsp; ... 30</p>
			</div>
		</div>
	</div>
	<div class="push"></div>
</div>
<?php include 'footerbar.php';?>
</body>
</html>
<?php include 'footer.php';?>