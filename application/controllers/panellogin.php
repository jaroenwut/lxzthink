<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PanelLogin extends CI_Controller
{
	public $currentpanel = null;
	public $assetversion = null;
    public function __construct()
    {
        parent::__construct();		
		$this->currentpanel = $this->config->item('theme_panel');
		$this->assetversion = $this->config->item('asset_version');		
		$this->lang->load('eng_panel','english');
	}
    public function index()
    {	
		$data = array(		
			'currentpanel' => $this->currentpanel,
			'assetversion' => $this->assetversion			
		);	
		$this->load->view('apppanel/main',$data);
	}
}
?>