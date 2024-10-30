<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('username') == ""){
            redirect('login/logout');
        }
        $this->load->model('Review_model');
        $this->load->model('Item_model');
        $this->load->model('Admin_model');
        
  		$id_customer = $this->session->userdata('id');
  		$nomeja = $this->session->userdata('nomeja');
		$count = $this->Review_model->verify($id_customer,$nomeja)->num_rows();
		$status = $this->Review_model->verify($id_customer,$nomeja)->row();
  		if ($count > 0) {
  			$this->load->model('cekstatus_model');
			$this->load->helper('cookie');
			$session = $this->cekstatus_model->cek();

  		if ($session['status'] == 'Payment') {
  			$nomeja = $this->session->userdata('nomeja');
  			redirect('login/logout/'.$nomeja);
  		}else if($session['status'] == 'Cleaning'){
  			$nomeja = $this->session->userdata('nomeja');
  			redirect('login/logout/'.$nomeja);
  		}
  		}
	}

	public function form($nomeja)
	{
		$id_customer = $this->session->userdata('id');
		$count = $this->Review_model->verify($id_customer,$nomeja)->num_rows();
		$status = $this->Review_model->verify($id_customer,$nomeja)->row();
		$data['color'] = $this->Admin_model->getColor();
  		if ($count > 0) {
  			if ($status->status == 'Payment') {
  				redirect('index.php/login/logout');
  			} 
		    $data['category'] = $this->Review_model->get_category()->result();
		    $data['nomeja'] = $nomeja;
			$this->load->view('review',$data);
		}else{
			redirect('index.php/selforder/home/'.$nomeja);
		}
	}

	public function save($nomeja) 
	{
		$username = $this->session->userdata('username') ? $this->session->userdata('username') : 'none';
		$post = $this->input->post(); 
		$saved = 0;
		$tanggal = date('Y-m-d H:i:s');
		for($num = 0; $num < 5; $num++){
			if($post['kritik'][$num] != '' || $post['pujian'][$num] != ''){
				$data = [
					'category_id' => $post['cat_id'][$num],
					'category_desc' => $post['desc'][$num],
					'table_no' => $nomeja,
					'customer_name' => $username,
					'kritik_saran' => $post['kritik'][$num],
					'pujian' => $post['pujian'][$num],
					'cabang' => 8,
					'tanggal' => $tanggal,
					'entry_by' => $username,
				]; 
				$this->Review_model->Save($data);
				$saved++;	
			} 
		}
		if($saved > 0){
			$this->session->set_flashdata('success','Terima kasih atas review anda');
			redirect('selforder/home/'.$nomeja);
		}else{
			$this->session->set_flashdata('error','Belum ada review yang anda masukkan');
			redirect('index.php/review/form/'.$nomeja);
		}
	}
}
?>