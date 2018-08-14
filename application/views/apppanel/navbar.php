		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="brand">            
					<a href="<?php echo base_url("panel/main");?>">
						<img src="<?php echo base_url();?>theme/shared/images/logo.png" alt="" />
					</a>				
				</div>		
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" id="ddnav">
				<?
				if(!empty($usernamesess))
				{
				?>
					<ul class="nav navbar-top-links navbar-right text-right" id="ddnav">					
						<li class="dropdown active">
							<a class="dropdown-toggle" data-toggle="dropdown" id="display-user" href="#">
								<p class="font-navbar clear-border">
									<?=empty($usernamesess) ? "" : "<i class=\"fa fa-user-circle\"></i> ".$usernamesess." <i class=\"fa fa-caret-down\"></i>";?>
								</p> 
							</a>						
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url("panel/models");?>"><i class="fa fa-square"></i> <?=lang('panel_navbar_menu_model');?></a></li>
								<li><a href="<?php echo base_url("panel/think");?>"><i class="fa fa-edit"></i> <?=lang('panel_navbar_menu_think');?></a></li>
								<li role="separator" class="divider"></li>
								<li><a href="<?php echo base_url("panel/setting");?>"><i class="fa fa-cog"></i> <?=lang('panel_navbar_menu_setting');?></a></li>
								<li role="separator" class="divider"></li>
								<li><a href="<?php echo base_url("panel/chgpwd");?>"><i class="fa fa-asterisk"></i> <?=lang('panel_navbar_menu_changepwd');?></a></li>
								<li><a href="#" data-toggle="modal" data-target="#LogoutModal" role="button"><i class="fa fa-sign-out-alt"></i> <?=lang('panel_navbar_menu_logout');?></a></li>
							</ul>
						</li>
					</ul>
				<?
				}
				?>
				</div>
			</div>
		</div>
