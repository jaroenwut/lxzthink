<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PanelModelcv extends CI_Controller
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
				$this->load->model('modelcv_model','modelcvmodel');	
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
		$this->load->view('apppanel/modelcv',$data);
	}
	public function show()
    {
        $list = $this->modelcvmodel->getmodels();
        $data = array();
        $no = isset($_POST['start']) ? $_POST['start'] : 0;
        foreach ($list as $models) {
            $no++;
            $row = array();
			$row[] = "";
            $row[] = $no;
            $row[] = $models->models_name;
            $row[] = $models->models_status;
			$row[] = $models->models_updatedate;
            $row[] = $models->models_id;
			$row[] = $models->models_key;			
            $data[] = $row;
        }
        $output = array(
                        "draw" => isset($_POST['draw']) ? $_POST['draw'] : "",
                        "recordsTotal" => $this->modelcvmodel->count_all(),
                        "recordsFiltered" => $this->modelcvmodel->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);		
	}
    public function create()
    {	
		$data = array(		
			'currentpanel' => $this->currentpanel,
			'assetversion' => $this->assetversion,
			'usernamesess' => $this->session->userdata['userprofile']['username'],
			'useridsess' => $this->session->userdata['userprofile']['userid'],			
			'operation' => 'add',
			'id' => '',
			'key' => '',
			'modelsname'=>'',
			'modelsdesc'=>''			
		);		
		$this->load->view('apppanel/modelcvform',$data);	
	}
    public function add()
    {	
		if(isset($_POST) && $this->input->post('btnsave'))
		{
			$data['modelsname'] = $this->input->post('tbxmodelsname',TRUE);
			$data['modelsdesc']= $this->input->post('tbxmodelsdesc',TRUE);
			$data['modelsstatus'] = 'ACTIVE';			
			$data['createby'] = $this->session->userdata['userprofile']['username'];	
			$data['updateby'] = $this->session->userdata['userprofile']['username'];			
			$result = $this->modelcvmodel->addmodels($this->security->xss_clean($data));					
			redirect('panel/modelcv');
			
		}else{
			redirect('panel/modelcv');			
		}
	}
	public function edit($key="")
	{	
		if($key=="")
		{
			redirect('panel/modelcv');
		}else{		
			$result = $this->modelcvmodel->getmodelsbykey($key);
			switch ($result) 
			{
				case "88":
					redirect('panel/modelcv');
				break;
				default:
					$data = array(		
						'currentpanel' => $this->currentpanel,
						'assetversion' => $this->assetversion,
						'usernamesess' => $this->session->userdata['userprofile']['username'],
						'useridsess' => $this->session->userdata['userprofile']['userid'],			
						'operation' => 'update',
						'id' => $result['models_id'],
						'key' => $result['models_key'],
						'modelsname'=>$result['models_name'],
						'modelsdesc'=>$result['models_desc']
					);	
					$this->load->view('apppanel/modelcvform',$data);	
				break;
			}			
		}			
	}
	public function update()
	{
		if(isset($_POST) && $this->input->post('btnupdate'))
		{		
			$data['modelskey'] = $this->input->post('hidkey');
			$data['modelsname'] = $this->input->post('tbxmodelsname');	
			$data['modelsdesc'] = $this->input->post('tbxmodelsdesc');
			$data['updateby'] = $this->session->userdata['userprofile']['username'];	
			$result = $this->modelcvmodel->updatemodels($data);
			switch ($result) 
			{
				case "0":
					redirect('panel/modelcv');
				break;
				default:
					redirect('panel/modelcv');
				break;
			}			
		}else{
			redirect('panel/modelcv');
		}
	}	
	public function delete()
	{
		if(isset($_POST) && $this->input->post('btndel'))
		{		
			$key = $this->input->post('hididdel');
			$result = $this->modelcvmodel->deletemodels($key);
			switch ($result) 
			{
				case "0":
					redirect('panel/modelcv');
				break;
				default:
					redirect('panel/modelcv');
				break;
			}			
		}else{
			redirect('panel/modelcv');		
		}
	}
}
?>