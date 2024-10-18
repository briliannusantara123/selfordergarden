<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir_waitress extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			// if($this->session->userdata('username') == ""){
   //         		$nomeja = $this->session->userdata('nomeja');
  	// 			redirect('index.php/login/logout/'.$nomeja);
   //      	}
			$this->load->model('Item_model');
			$this->load->model('cekstatus_model');
			$this->load->helper('cookie');
			$session = $this->cekstatus_model->cek();

  	// 	if ($session['status'] == 'Payment') {
  	// 		$nomeja = $this->session->userdata('nomeja');
  	// 		redirect('login/logout/'.$nomeja);
  	// 	}else if($session['status'] == 'Cleaning'){
  	// 		$nomeja = $this->session->userdata('nomeja');
  	// 		redirect('login/logout/'.$nomeja);
  	// 	}
  	// 	if($session['id_table'] != $this->session->userdata('nomeja')){
  	// 		$nomeja = $this->session->userdata('nomeja');
  	// 		redirect('index.php/login/log_out/'.$nomeja);
  	// 	}
			
		}
		public function testing($value='')
		{
			echo "testing";exit();
		}
	public function memanggil($nomeja)
	{
		$name = $this->session->userdata('username');
		$id_customer = $this->session->userdata('id');
		$date = date('Y-m-d');
		$this->load->database();
		$cabang = $this->db->order_by('id',"desc")
	  	->limit(1)
	  	->get('sh_m_cabang')
	  	->row('id');
	  	$query = "select R.* from sh_notification R where R.id_table = '$nomeja' and left(R.created_date,10) = left(sysdate(),10) and R.customer_name = '$name' and R.tipe = 'Waitress' ORDER BY id DESC limit 1";
	  	$panggil = $this->db->query($query)->row();

	  	 // var_dump($panggil);exit();
			$data = [
					'id_table' => $nomeja,
					'customer_name' => $name,
					'tipe' => 'waitress',
					'cabang' => $cabang,
					'created_date' => date('Y-m-d H:i:s')
				];
				if ($panggil == NULL) {
					$this->db->insert('sh_notification',$data);
					$this->session->set_flashdata('success','Please wait a moment, the waitress will come to serve you');
					$curl = curl_init();
					  curl_setopt_array($curl, array(
					  CURLOPT_URL => 'localhost:5082/hachi_api_v1/notif/req_notif.php',
					  CURLOPT_RETURNTRANSFER => true,
					  CURLOPT_ENCODING => '',
					  CURLOPT_MAXREDIRS => 10,
					  CURLOPT_TIMEOUT => 0,
					  CURLOPT_FOLLOWLOCATION => true,
					  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					  CURLOPT_CUSTOMREQUEST => 'POST',
					  CURLOPT_POSTFIELDS =>'{
					    "server_key":"MjUxMzU4OTctYTlmNy00ZTRlLTkzOWQtYjAyNmZlNjhjMDAw",
					    "app_id":"f92b3e61-6e8a-40a0-9a4d-d82ac2d4ee57",
					    "outlet_id":"16",
					    "message":"Kamu Memiliki Panggilan Baru",
					    "channel_id":"d6262f78-25ff-4102-afd9-6fb9283799d4"
					}',
					  CURLOPT_HTTPHEADER => array(
					    'Content-Type: application/json'
					  ),
					));

					$response = curl_exec($curl);
					// var_dump($response);exit();

					curl_close($curl);
					// echo $response;
				redirect($_SERVER['HTTP_REFERER']);
				}elseif($panggil != NULL){
					if ($panggil->is_accepted == 0) {
					$this->session->set_flashdata('error','Please wait a moment, the waitress is on the way');
				redirect($_SERVER['HTTP_REFERER']);
				}else{
				$this->db->insert('sh_notification',$data);
				$this->session->set_flashdata('success','Please wait a moment, the waitress will come to serve you');
				$curl = curl_init();
					  curl_setopt_array($curl, array(
					  CURLOPT_URL => 'localhost:5082/hachi_api_v1/notif/req_notif.php',
					  CURLOPT_RETURNTRANSFER => true,
					  CURLOPT_ENCODING => '',
					  CURLOPT_MAXREDIRS => 10,
					  CURLOPT_TIMEOUT => 0,
					  CURLOPT_FOLLOWLOCATION => true,
					  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					  CURLOPT_CUSTOMREQUEST => 'POST',
					  CURLOPT_POSTFIELDS =>'{
					    "server_key":"MjUxMzU4OTctYTlmNy00ZTRlLTkzOWQtYjAyNmZlNjhjMDAw",
					    "app_id":"f92b3e61-6e8a-40a0-9a4d-d82ac2d4ee57",
					    "outlet_id":"16",
					    "message":"Kamu Memiliki Panggilan Baru",
					    "channel_id":"d6262f78-25ff-4102-afd9-6fb9283799d4"
					}',
					  CURLOPT_HTTPHEADER => array(
					    'Content-Type: application/json'
					  ),
					));

					$response = curl_exec($curl);
					// var_dump($response);exit();

					curl_close($curl);
				redirect($_SERVER['HTTP_REFERER']);
				}
			}
			
			
	}
	public function panggil_ulang($value='')
	{
		$query = $this->db->get('sh_notification');
		$lastRow = $query->last_row();
		if ($lastRow->is_accepted == 0) {
			$curl = curl_init();
				  curl_setopt_array($curl, array(
				  CURLOPT_URL => 'localhost:5082/hachi_api_v1/notif/req_notif.php',
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => '',
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 0,
				  CURLOPT_FOLLOWLOCATION => true,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => 'POST',
				  CURLOPT_POSTFIELDS =>'{
				    "server_key":"MjUxMzU4OTctYTlmNy00ZTRlLTkzOWQtYjAyNmZlNjhjMDAw",
				    "app_id":"f92b3e61-6e8a-40a0-9a4d-d82ac2d4ee57",
				    "outlet_id":"16",
				    "message":"Beberapa Panggilan Masih Menunggu Respon",
				    "channel_id":"d6262f78-25ff-4102-afd9-6fb9283799d4"
				}',
				  CURLOPT_HTTPHEADER => array(
				    'Content-Type: application/json'
				  ),
				));

				$response = curl_exec($curl);
				// var_dump($response);exit();

				curl_close($curl);
		}
		echo  "<script type='text/javascript'>";
    	echo "window.close();";
    	echo "</script>";
		
	}
	public function meminta($nomeja)
	{
		$name = $this->session->userdata('username');
		$id_customer = $this->session->userdata('id');
		$this->load->database();
		$cabang = $this->db->order_by('id',"desc")
	  	->limit(1)
	  	->get('sh_m_cabang')
	  	->row('id');
	  	$cekorder = $this->Item_model->billsementara($id_customer)->result();
	  	$query = "select R.* from sh_notification R where R.id_table = '$nomeja' and left(R.created_date,10) = left(sysdate(),10) and R.customer_name = '$name' and R.tipe = 'Kasir' ORDER BY id DESC limit 1";
  	$panggil = $this->db->query($query)->row();
  	
		$data = [
				'id_table' => $nomeja,
				'customer_name' => $name,
				'tipe' => 'kasir',
				'cabang' => $cabang,
				'created_date' => date('Y-m-d H:i:s')
			];
			if ($cekorder == NULL) {
				$this->session->set_flashdata('error','Please Place Your Order Before Requesting the Bill, Thank You');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				if ($panggil == NULL) {
					$this->db->insert('sh_notification',$data);
					$this->session->set_flashdata('success','Bill Requested Successfully, Please Wait a Moment');
					redirect($_SERVER['HTTP_REFERER']);
				}elseif($panggil != NULL){
					if ($panggil->is_accepted == 0) {
						$this->session->set_flashdata('error','Bill request has been received, please wait. Thank you');
						redirect($_SERVER['HTTP_REFERER']);
					}else{
						$this->db->insert('sh_notification',$data);
						$this->session->set_flashdata('success','Bill Requested Successfully, Please Wait a Moment');
						redirect($_SERVER['HTTP_REFERER']);
					}
				}
			}
	}
	
}
