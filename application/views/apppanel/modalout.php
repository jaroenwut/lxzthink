		<div id="LogoutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">			
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<p class="font-modal-title"><?=lang('panel_modal_logout_title');?></p>
					</div>
					<div class="modal-body">
						<p class="font-modal-content"><?=lang('panel_modal_logout_content');?></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> <?=lang('panel_modal_logout_btn_cancel')?></button>
						<a href="<?=site_url('logout'); ?>" id="btnlogout" name="btnlogout" role="button" class="btn btn-primary btn-sm" value="logout"><span class="glyphicon glyphicon-log-out"></span> <?=lang('panel_modal_logout_btn_logout')?></a>
					</div>			
				</div>
			</div>
		</div>