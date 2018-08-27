<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PanelSetting extends CI_Controller
{
	public $currentpanel = null;
	public $assetversion = null;
    public function __construct()
    {
        parent::__construct();		
		if($this->session->userdata('userprofile'))  
		{		
			if($this->session->userdata['userprofile']['username']==''){
				redirect('logout');
			}else{			
				$this->currentpanel = $this->config->item('theme_panel');
				$this->assetversion = $this->config->item('asset_version');		
				$this->lang->load('eng_panel','english');			
			}	
		}else{
			redirect(base_url());
		}	
	}
    public function index()
    {	
		$data = array(		
			'currentpanel' => $this->currentpanel,
			'assetversion' => $this->assetversion,
			'usernamesess' => $this->session->userdata['userprofile']['username'],
			'useridsess' => $this->session->userdata['userprofile']['userid']			
		);	
		$this->load->view('apppanel/setting',$data);
	}
}
?>