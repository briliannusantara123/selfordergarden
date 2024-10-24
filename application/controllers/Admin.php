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

	public function icon()
	{
		$this->load->view('admin/icon');
	}
	
	
}
