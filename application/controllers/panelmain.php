<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PanelMain extends CI_Controller
{
	public $currentpanel = null;
	public $assetversion = null;
    public function __construct()
    {
        parent::__construct();					
		if($this->session->userdata('userprofile'))  
		{		
			if($this->session->userdata['userprofile']['username']==''){
				$this->logout();
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
		$tmpuserid="";
		$tmpusername="";
		if($this->session->userdata('userprofile'))  
		{	
			$tmpuserid=$this->session->userdata['userprofile']['userid'];		
			$tmpusername=$this->session->userdata['userprofile']['username'];			
		}	
		$data = array(		
			'currentpanel' => $this->currentpanel,
			'assetversion' => $this->assetversion,
			'usernamesess' => $tmpusername,
			'useridsess' => $tmpuserid			
		);	
		$this->load->view('apppanel/main',$data);
	}
	public function logout()
    {		
		$sess_array = array();
		$sess_array = array(
			'userid' => '',
			'username' => ''
		);
		$this->session->set_userdata('userprofile',$sess_array);
		$this->session->unset_userdata('userprofile');
		session_destroy();
		redirect(base_url());
	}	
}
?>