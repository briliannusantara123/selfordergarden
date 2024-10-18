<?php 
	class cekstatus_model extends CI_model {
		public function cek()
		{
			$date = date('Y-m-d');
			$ic = $this->session->userdata('id');
			$nomeja = $this->session->userdata('nomeja');
			$where = "sh_rel_table.id_table = '".$nomeja."' and left(created_date,10) ='".$date."' and sh_rel_table.id_customer = '".$ic."' ";
		$this->db->select('*');
		$this->db->from('sh_rel_table');
		$this->db->join('sh_m_customer', 'sh_m_customer.id = sh_rel_table.id_customer');
		$this->db->where($where);
		$query = $this->db->get()->row_array();

		return $query;
		}
	}