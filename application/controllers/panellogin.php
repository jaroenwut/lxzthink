<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PanelLogin extends CI_Controller
{
	public $currentpanel = null;
	public $assetversion = null;
    public function __construct()
    {
        parent::__construct();		
		if($this->session->userdata('userprofile'))  
		{		
			if($this->session->userdata['userprofile']['username']==''){
				redirect(base_url());				
			}else{			
				redirect('panel/main');
			}	
		}
		{
			$this->currentpanel = $this->config->item('theme_panel');
			$this->assetversion = $this->config->item('asset_version');		
			$this->lang->load('eng_panel','english');			
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
		$this->load->view('apppanel/login',$data);
	}
    public function check()
    {
		if(isset($_POST) && $this->input->post('btnlogin'))
		{
			if($this->input->post('tbxpwd')!=''){
				$data['username'] = $this->input->post('tbxusername');	
				$data['userpwd'] = $this->input->post('tbxpwd');

						$sess_array = array();
						$sess_array = array(
								'userid' => '1',
								'username' => 'Admin'								
							);
						$this->session->set_userdata('userprofile',$sess_array);						
						redirect('panel/main');
		
			}else{
				redirect('panel/login');	
			}				
		}else{
			redirect('panel/login');			
		}
	}
}
?>