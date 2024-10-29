<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_model {
		
	public function verify($id_customer,$nomeja)
	{
		$q = "select R.*,C.customer_name from sh_rel_table R inner join sh_m_customer C on C.id = R.id_customer where R.id_table = '".$nomeja."' and C.id = '".$id_customer."' and left(C.create_date,10) = left(sysdate(),10) limit 1";
		return $this->db->query($q);
	}

	public function countOption() {
	    return $this->db->where('type', 'option')->count_all_results('sh_m_item_option');
	}

	public function get_option($limit, $start)
	{   
        $this->db->select('o.*, i.description as dsc');
        $this->db->from('sh_m_item_option o');
        $this->db->join('sh_m_item i', 'o.item_code = i.no');
        $this->db->where('type', 'option');
        $this->db->limit($limit, $start);
        $this->db->order_by('o.id','desc');
        $query = $this->db->get();
        return $query->result();
	}
	public function countAddon() {
	    return $this->db->where('type', 'addon')->count_all_results('sh_m_item_option');
	}

	public function get_Addon($limit, $start)
	{   
	    $this->db->select('o.*, i1.description as dsc,i2.description as adsc');
	    $this->db->from('sh_m_item_option o');
	    $this->db->join('sh_m_item i1', 'o.item_code = i1.no', 'left');
	    $this->db->join('sh_m_item i2', 'o.description = i2.no', 'left');
	    
	    $this->db->where('o.type', 'addon');
	    $this->db->limit($limit, $start);
	    $this->db->order_by('o.id', 'desc');
	    
	    $query = $this->db->get();
	    return $query->result();
	}

	public function get_item()
	{   
        $this->db->select('o.*');
        $this->db->from('sh_m_item o');
        $this->db->where('is_active', 1);
        $this->db->order_by('o.id','asc');
        $query = $this->db->get();
        return $query->result();
	}
	public function getIcon($type)
		{
		    $this->db->select('d.*');
		    $this->db->from('sh_m_setup_so d');
		    $this->db->where('d.type', $type);
		    $this->db->where('d.is_active', 1);
		    
		    $query = $this->db->get()->result();
		    return $query; 
		}

		
	public function save($data, $where='') {
		if ($where == '') {
			$this->db->insert('sh_kritik_saran', $data);
			return $this->db->insert_id();
		}
		return $this->db->update('sh_kritik_saran', $data, $where);			
	}
}