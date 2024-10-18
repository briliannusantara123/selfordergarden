<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarorder extends CI_Controller {
function __construct()
		{
			parent::__construct();
		
			$this->load->model('Item_model');
			$this->load->model('Daftarorder_model');
		}
	public function index()
	{
		$date = date('Y-m-d');
		$data['item'] = $this->Daftarorder_model->getOrderCustomer()->result();
		
		$this->load->view('daftarorder/header_order',$data);

		//AUTO PRINT

		// $q = "select * from sh_t_transaction_details d 
		// 		where d.selforder = 1
		// 		and d.is_paid = 0 
		// 		and d.is_cancel = 0 
				
		// 		and left(d.created_date,10) ='".$date."'
		// 		and d.is_printed = 0";
		// $query = $this->db->query($q);
		// $get = $this->db->query($q)->row();
		// // var_dump($get);exit();
		// // Mengecek jumlah baris data yang dikembalikan oleh query
		// if ($query->num_rows() > 0) {
		//   $this->cetak($get->id_trans);
		// } else {
		//   $data['item'] = $this->Daftarorder_model->getOrderCustomer()->result();
		
		// $this->load->view('daftarorder/header_order',$data);
		// }
		

	}
	
	public function line($id,$datake)
	{
		$data['item'] = $this->Daftarorder_model->getOrderCustomerLine($id,$datake)->result();
		
		$this->load->view('daftarorder/lines_order',$data);
	}
	public function history()
	{
		$data['item'] = $this->Daftarorder_model->getHistoryprint()->result();
		
		$this->load->view('daftarorder/history',$data);
	}
	public function historyline($datake,$id_trans,$table=NULL)
	{
		$data['item'] = $this->Daftarorder_model->getHistoryprintLine($datake,$id_trans,$table)->result();
		
		$this->load->view('daftarorder/history_line',$data);
	}
	public function cetak($id,$type=NULL,$cekdata=NULL,$table=NULL)
	{	
  	 if ($type == "printulang") {
  	 	$d = $this->Daftarorder_model->getCustomer($id,$table)->row();
  	 	$data['table'] = $d->selected_table_no;
  		$data['customer'] = $d->entry_by;
  	 	$data['item'] = $this->Daftarorder_model->getHistoryprintLine($id,$cekdata,$table)->result();
		
		$this->load->view('daftarorder/printulang',$data);
  	 }else{
  	 	$d = $this->Daftarorder_model->getCustomer($id,$table)->row();
  	 	$data['table'] = $d->selected_table_no;
  		$data['customer'] = $d->entry_by;

  		
  		$data['item'] = $this->Daftarorder_model->getOrderCustomerLine($id,$cekdata,$table)->result();
		
		$this->load->view('daftarorder/print',$data);
		// if ($item->cekdata >= 1) {
		// 	$cd = $item->cekdata + 1;
		// }else{
		// 	$cd = 1;
		// }
		foreach($data['item'] as $detail){
			$data = array(
				'is_printed_so' => 1,
			);
		 
			$where = array(
				'id' => $detail->id
			);
		 	
		 	$this->db->where($where);
			$this->db->update('sh_t_transaction_details',$data);	
		}
			/*$data = array(
				'is_printed_so' => 1,
			);
		 
			$where = array(
				'id' => $id
			);
		 	
		 	$this->db->where($where);
			$this->db->update('sh_t_transaction_details',$data);*/
  		
  	}
	}
	
	
}
