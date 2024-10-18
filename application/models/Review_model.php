<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Review_model extends CI_model {
		
	public function verify($id_customer,$nomeja)
	{
		$q = "select R.*,C.customer_name from sh_rel_table R inner join sh_m_customer C on C.id = R.id_customer where R.id_table = '".$nomeja."' and C.id = '".$id_customer."' and left(C.create_date,10) = left(sysdate(),10) limit 1";
		return $this->db->query($q);
	}

	public function get_category()
	{
		$this->db->where('is_active', 1);
		$this->db->order_by('id asc');
		return $this->db->get('sh_m_category');
	}
		
	public function save($data, $where='') {
		if ($where == '') {
			$this->db->insert('sh_kritik_saran', $data);
			return $this->db->insert_id();
		}
		return $this->db->update('sh_kritik_saran', $data, $where);			
	}
}