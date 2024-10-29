<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
function __construct()
		{
			parent::__construct();
			if($this->session->userdata('username') == "" || $this->session->userdata('level') != "1"){
  				redirect('login/admin');
        	}
			$this->load->model('Admin_model');
			$this->load->library('pagination');
			
		}
	public function index()
	{
		$id_customer = $this->session->userdata('id');
		
		$this->load->view('admin/index');
	}
	public function option()
	{
	    $config1['base_url'] = base_url('index.php/Admin/option');
	    $config1['total_rows'] = $this->Admin_model->countOption(); 
	    $config1['per_page'] = 10; 
	    $config1['uri_segment'] = 3;
	    $config1['full_tag_open'] = '<nav aria-label="Page navigation"><ul class="pagination justify-content-center">';
	    $config1['full_tag_close'] = '</ul></nav>';
	    $config1['first_link'] = 'First';
	    $config1['last_link'] = 'Last';
	    $config1['first_tag_open'] = '<li class="page-item">';
	    $config1['first_tag_close'] = '</li>';
	    $config1['prev_link'] = '&laquo';
	    $config1['prev_tag_open'] = '<li class="page-item">';
	    $config1['prev_tag_close'] = '</li>';
	    $config1['next_link'] = '&raquo';
	    $config1['next_tag_open'] = '<li class="page-item">';
	    $config1['next_tag_close'] = '</li>';
	    $config1['last_tag_open'] = '<li class="page-item">';
	    $config1['last_tag_close'] = '</li>';
	    $config1['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	    $config1['cur_tag_close'] = '</a></li>';
	    $config1['num_tag_open'] = '<li class="page-item">';
	    $config1['num_tag_close'] = '</li>';
	    $config1['attributes'] = array('class' => 'page-link');

	    $this->pagination->initialize($config1);

	    $page1 = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

	    $data['option'] = $this->Admin_model->get_option($config1['per_page'], $page1);
    	$data['links1'] = $this->pagination->create_links();

    	$config2['base_url'] = base_url('index.php/Admin/option');
	    $config2['total_rows'] = $this->Admin_model->countAddon(); 
	    $config2['per_page'] = 10; 
	    $config2['uri_segment'] = 3;
	    $config2['full_tag_open'] = '<nav aria-label="Page navigation"><ul class="pagination justify-content-center">';
	    $config2['full_tag_close'] = '</ul></nav>';
	    $config2['first_link'] = 'First';
	    $config2['last_link'] = 'Last';
	    $config2['first_tag_open'] = '<li class="page-item">';
	    $config2['first_tag_close'] = '</li>';
	    $config2['prev_link'] = '&laquo';
	    $config2['prev_tag_open'] = '<li class="page-item">';
	    $config2['prev_tag_close'] = '</li>';
	    $config2['next_link'] = '&raquo';
	    $config2['next_tag_open'] = '<li class="page-item">';
	    $config2['next_tag_close'] = '</li>';
	    $config2['last_tag_open'] = '<li class="page-item">';
	    $config2['last_tag_close'] = '</li>';
	    $config2['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	    $config2['cur_tag_close'] = '</a></li>';
	    $config2['num_tag_open'] = '<li class="page-item">';
	    $config2['num_tag_close'] = '</li>';
	    $config2['attributes'] = array('class' => 'page-link');

	    $this->pagination->initialize($config2);

	    $page2 = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

	    $data['addon'] = $this->Admin_model->get_addon($config2['per_page'], $page1);
    	$data['links2'] = $this->pagination->create_links();
    	$data['item'] = $this->Admin_model->get_item();
	    $this->load->view('admin/option', $data);
	}

	public function create_option()
	{
		$data = [
			'item_code' => $this->input->post('no'),
			'description' => $this->input->post('option'),
			'is_active' => $this->input->post('is_active'),
			'option' => 1,
			'type' => 'option',
		];
		$this->db->insert('sh_m_item_option',$data);
		$this->session->set_flashdata('success','Data option has been successfully saved');
		redirect('Admin/option/');
	}

	public function create_addon()
	{
		$data = [
			'item_code' => $this->input->post('no'),
			'description' => $this->input->post('addon'),
			'is_active' => $this->input->post('is_active'),
			'option' => 1,
			'type' => 'addon',
		];
		$this->db->insert('sh_m_item_option',$data);
		$this->session->set_flashdata('success','Data add on has been successfully saved');
		redirect('Admin/option/');
	}
	public function update($id)
	{
		$id = $this->input->post('id'); // Pastikan id dikirim dari form

		$data = [
			'item_code' => $this->input->post('no'),
			'description' => $this->input->post('option'),
			'is_active' => $this->input->post('is_active'),
		];

		$this->db->where('id', $id);
		$this->db->update('sh_m_item_option', $data);

		// Set flashdata untuk menampilkan pesan sukses
		$this->session->set_flashdata('success', 'Data option has been successfully updated');

		// Redirect ke halaman option
		redirect('Admin/option/');

	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('sh_m_item_option');
		$this->session->set_flashdata('success','Data add on has been successfully deleted');
		redirect('Admin/option/');
	}

	public function icon()
	{
		$data = [
			'home' => $this->Admin_model->getIcon('home'),
			'footer' => $this->Admin_model->getIcon('footer'),
		];
		$this->load->view('admin/icon',$data);
	}
	public function create_icon($type)
	{
		$upload_path = 'C:/xampp7/htdocs/selfordergarden/assets/icon/menu/'; // Ensure this path is correct and writable

	    // Prepare the data array
	    $data = [
	    	'type' => $type,
	        'title' => $this->input->post('title'),
	        // 'link' => $this->input->post('link'),
	        'is_active' => $this->input->post('is_active'),
	    ];

	    // Check if a file is uploaded
	    if (isset($_FILES['icon']) && $_FILES['icon']['error'] == UPLOAD_ERR_OK) {
	        $file_name = $_FILES['icon']['name'];
	        $file_tmp = $_FILES['icon']['tmp_name'];
	        $file_name = date('Ymd') . '_' . basename($file_name);

	        // Attempt to move the uploaded file
	        if (move_uploaded_file($file_tmp, $upload_path . $file_name)) {
	            // If successful, update the image_path in the data array
	            $data['image_path'] = base_url('assets/icon/menu/' . $file_name); // Save the relative URL
	        } else {
	            $this->session->set_flashdata('error', 'Failed to move uploaded file.');
	            redirect('Admin/icon/');
	            return; // Stop execution if the file move failed
	        }
	    }
		$this->db->insert('sh_m_setup_so',$data);
		$this->session->set_flashdata('success','Data icon home has been successfully saved');
		redirect('Admin/icon/');
	}
	public function update_icon($id)
	{
	    $upload_path = 'C:/xampp7/htdocs/selfordergarden/assets/icon/menu/'; // Ensure this path is correct and writable

	    // Prepare the data array
	    $data = [
	        'title' => $this->input->post('title'),
	        // 'link' => $this->input->post('link'),
	        'is_active' => $this->input->post('is_active'),
	    ];

	    // Check if a file is uploaded
	    if (isset($_FILES['icon']) && $_FILES['icon']['error'] == UPLOAD_ERR_OK) {
	        $file_name = $_FILES['icon']['name'];
	        $file_tmp = $_FILES['icon']['tmp_name'];
	        $file_name = date('Ymd') . '_' . basename($file_name);

	        // Attempt to move the uploaded file
	        if (move_uploaded_file($file_tmp, $upload_path . $file_name)) {
	            // If successful, update the image_path in the data array
	            $data['image_path'] = base_url('assets/icon/menu/' . $file_name); // Save the relative URL
	        } else {
	            $this->session->set_flashdata('error', 'Failed to move uploaded file.');
	            redirect('Admin/icon/');
	            return; // Stop execution if the file move failed
	        }
	    }

	    // Update the database record
	    $this->db->where('id', $id);
	    $this->db->update('sh_m_setup_so', $data);

	    // Set a success message
	    $this->session->set_flashdata('success', 'Icon data has been successfully updated.');
	    redirect('Admin/icon/');
	}
	public function color()
	{
		$this->load->view('admin/color');
	}


	
	
}
