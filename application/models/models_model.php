<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*Original Code : 
 - https://mbahcoding.com/tutorial/php/codeigniter/codeigniter-simple-server-side-datatable-example.html
*/
class Models_Model extends CI_Model 
{
    var $table = 'txz_models';
    var $column_order = array(null,null,'models_name','models_status','models_updatedate'); //set column field database for datatable orderable
    var $column_search = array('models_name'); //set column field database for datatable searchable 
    var $order = array('models_updatedate' => 'desc'); // default order 
	
	public function __construct() 
	{
		parent::__construct();
	}
    private function _get_datatables_query()
    {
		$this->db->select('models_name,models_status,DATE_FORMAT(models_updatedate,"%d-%b-%Y %H:%i:%s") as models_updatedate,models_id,models_key');
        $this->db->from($this->table);
        $i = 0;     
        foreach ($this->column_search as $item) // loop column 
        {
            if(isset($_POST['search']['value'])) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }	
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
	public function getmodels() 
	{
		$length=isset($_POST['length']) ? $_POST['length'] : "15";
		$start=isset($_POST['start']) ? $_POST['start'] : "0";

		//$this->db->where('models_status=', 'ACTIVE');		
        $this->_get_datatables_query();
        if($length != -1){
			$this->db->limit($length,$start);
		}

        $query = $this->db->get();
        return $query->result();		
	}
	public function getmodelsbykey($key) 
	{
		$query=$this->db->get_where($this->table,array('models_key'=>$key));
		if ($query->num_rows() > 0) 
		{
			return $query->row_array();
		}else{
			return '88'; 
		}
	}	
	public function addmodels($data) 
	{
		$datainsert = array(
			'models_key' => random_string('alnum',16),
			'models_name' => $data['modelsname'],
			'models_desc' => $data['modelsdesc'],
			'models_status' => $data['modelsstatus'],			
			'models_createby' => $data['createby'],
			'models_createdate' => date('Y-m-d H:i:s'),
			'models_updateby' => $data['updateby'],
			'models_updatedate' => date('Y-m-d H:i:s')
		);    
		$this->db->insert($this->table, $datainsert);	
	}
	public function updatemodels($data) 
	{	
		$dataupdate = array(				
			'models_name' => $data['modelsname'],
			'models_desc' => $data['modelsdesc'],			
			'models_updatedate' => date('Y-m-d H:i:s'),
			'models_updateby' => $data['updateby']
		);
		$this->db->where('models_key',$data['modelskey']);
		$this->db->update($this->table, $dataupdate);
		return '0';		
	}
	public function deletemodels($key) 
	{
		$this->db->where('models_key',$key);
		$this->db->delete($this->table);	
		return '0';
	}		
}

?>