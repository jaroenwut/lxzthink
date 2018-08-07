<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class HomeMain extends CI_Controller
{
	public $currenthome = null;
	public $assetversion = null;	
    public function __construct()
    {
        parent::__construct();		
		$this->currenthome = $this->config->item('theme_home');
		$this->assetversion = $this->config->item('asset_version');		
		$this->lang->load('eng_home','english');
	}
    public function index()
    {	
		$data = array(		
			'currenthome' => $this->currenthome,
			'assetversion' => $this->assetversion			
		);	
		$this->load->view('apphome/main',$data);
	}
}
?>