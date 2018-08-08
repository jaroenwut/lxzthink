	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="brand">            
				<a href="<?php echo base_url();?>">
					<img src="<?php echo base_url();?>theme/shared/images/logo.png" alt="" />
				</a>				
			</div>		
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" id="ddnav">	
				<ul class="nav navbar-top-links navbar-right">						
                    <li>
                        <a href="<?=base_url();?>"><p class="font-navbar"><?=lang('home_navbar_menu_home');?></p></a>
                    </li>					
                    <li>
                        <a href="#"><p class="font-navbar"><i class="fas fa-key"></i> <?=lang('home_navbar_menu_signin');?></p></a>
                    </li>					
				</ul>		
			</div>
		</div>
	</div>