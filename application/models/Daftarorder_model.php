<?php 
	class Daftarorder_model extends CI_model {
		public function getOrderCustomer()
		{
			$date = date('Y-m-d');
			$query = "select t.id,c.customer_name,d.id_trans,r.id_table,r.status,count(d.id) as jml_item,d.* from sh_t_transactions t 
			inner join sh_t_transaction_details d on d.id_trans = t.id 
			inner join sh_m_customer c on c.id = t.id_customer 
			inner join sh_rel_table r on r.id_customer = c.id 
			inner join sh_m_item i on i.no = d.item_code 
			where d.selforder = 1
			and d.is_cancel = 0
			and d.is_printed_so = 0
			and left(d.created_date,10) ='".$date."'
			group by d.cekdata
			order by d.id desc";
			
			return $this->db->query($query);
		}
		public function getOrderCustomerLine($id,$datake,$table)
		{
			$date = date('Y-m-d');
			$query = "select i.image_path,i.description,d.* from sh_t_transactions t 
			inner join sh_t_transaction_details d on d.id_trans = t.id
			inner join sh_m_item i on i.no = d.item_code 
			where d.selforder = 1
			and d.is_cancel = 0
			and d.is_printed_so = 0
			and d.id_trans = '".$id."'
			and d.cekdata = '".$datake."'
			and d.selected_table_no = '".$table."'
			and left(d.created_date,10) ='".$date."'
			order by d.item_code desc";
			return $this->db->query($query);
		}
		public function getCustomer($id,$table)
		{
			$date = date('Y-m-d');
			$query = "select i.image_path,d.entry_by,d.selected_table_no,i.description,d.* from sh_t_transactions t 
			inner join sh_t_transaction_details d on d.id_trans = t.id
			inner join sh_m_item i on i.no = d.item_code 
			where d.selforder = 1
			and d.is_cancel = 0 
			/*and d.id = '".$id."'*/
			and t.id = '".$id."'
			and d.selected_table_no = '".$table."'
			and left(d.created_date,10) ='".$date."'
			LIMIT 1";
			return $this->db->query($query);
			
		}

		public function getHistoryprints()
		{
			$date = date('Y-m-d');
			$query = "select t.id,c.customer_name,d.id_trans,r.id_table,r.status,count(d.id) as jml_item from sh_t_transactions t 
				inner join sh_t_transaction_details d on d.id_trans = t.id 
				inner join sh_m_customer c on c.id = t.id_customer 
				inner join sh_rel_table r on r.id_customer = c.id 
				inner join sh_m_item i on i.no = d.item_code 
				where d.selforder = 1

				and d.is_cancel = 0 
				and d.is_printed_so = 1
				and r.status = 'Dining'
				and left(d.created_date,10) ='".$date."'
				group by d.id_trans,d.selected_table_no 
				order by d.id_trans desc";
				return $this->db->query($query);
			
			
		}
		public function getHistoryprint()
		{
			$date = date('Y-m-d');
			$query = "select d.id,c.customer_name,d.id_trans,r.id_table,r.status,d.* from sh_t_transactions t 
			inner join sh_t_transaction_details d on d.id_trans = t.id 
			inner join sh_m_customer c on c.id = t.id_customer 
			inner join sh_rel_table r on r.id_customer = c.id 
			inner join sh_m_item i on i.no = d.item_code 
			where d.selforder = 1
			and d.is_cancel = 0
			and d.is_printed_so = 1
			and left(d.created_date,10) ='".$date."'
			group by d.cekdata,d.selected_table_no
			order by d.id desc";

			return $this->db->query($query);
		}
		public function cekprint($id_trans,$table)
		{
			$date = date('Y-m-d');
			$query = "select t.id,c.customer_name,d.id_trans,r.id_table,r.status,d.* from sh_t_transactions t 
			inner join sh_t_transaction_details d on d.id_trans = t.id
			inner join sh_m_customer c on c.id = t.id_customer 
			inner join sh_rel_table r on r.id_customer = c.id 
			inner join sh_m_item i on i.no = d.item_code  
			where d.selforder = 1
			and d.is_cancel = 0
			and d.is_printed_so = 0
			and d.id_trans = '".$id_trans."'
			and d.selected_table_no = '".$table."'
			and left(d.created_date,10) ='".$date."'
			order by d.item_code desc";
			
			return $this->db->query($query);
		}
		public function getHistoryprintLine($id_trans,$datake,$table)
		{
			$date = date('Y-m-d');
			$query = "select i.image_path,i.description,d.* from sh_t_transactions t 
			inner join sh_t_transaction_details d on d.id_trans = t.id
			inner join sh_m_item i on i.no = d.item_code 
			where d.selforder = 1
			and d.is_cancel = 0
			and d.is_printed_so = 1
			and d.id_trans = '".$id_trans."'
			and d.cekdata = '".$datake."'
			and d.selected_table_no = '".$table."'
			and left(d.created_date,10) ='".$date."'
			order by d.item_code desc";
			
			return $this->db->query($query);
			
		}
	}