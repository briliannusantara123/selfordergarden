<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('username') == "" || 
			    !in_array($this->session->userdata('role'), ['admin', 'marketing', 'operation'])) {
			    redirect('login/admin');
			}

			$this->load->model('Admin_model');
			$this->load->library('pagination');
			
		}
	public function index()
	{
		$config1['base_url'] = base_url('index.php/Admin');
	    $config1['total_rows'] = $this->Admin_model->countEvent(); 
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
    	
		$data = [
			'color' => $this->Admin_model->getColor(),
			'optionA' => $this->db->where('is_active',1)->where('type','option')->count_all_results('sh_m_item_option'),
			'optionI' => $this->db->where('is_active',0)->where('type','option')->count_all_results('sh_m_item_option'),
			'addonA' => $this->db->where('is_active',1)->where('type','addon')->count_all_results('sh_m_item_option'),
			'addonI' => $this->db->where('is_active',0)->where('type','addon')->count_all_results('sh_m_item_option'),
			'usersA' => $this->db->where('is_active',1)->count_all_results('sh_user_so'),
			'usersI' => $this->db->where('is_active',0)->count_all_results('sh_user_so'),
			'ichA' => $this->db->where('is_active',1)->where('type','home')->count_all_results('sh_m_setup_so'),
			'ichI' => $this->db->where('is_active',0)->where('type','home')->count_all_results('sh_m_setup_so'),
			'icfA' => $this->db->where('is_active',1)->where('type','footer')->count_all_results('sh_m_setup_so'),
			'icfI' => $this->db->where('is_active',0)->where('type','footer')->count_all_results('sh_m_setup_so'),
			'event' => $this->Admin_model->getEvent($config1['per_page'], $page1),
			'links' => $this->pagination->create_links(),
			'count' => $this->Admin_model->countEvent(),
		];
		
		$this->load->view('admin/index',$data);
	}
	public function option()
	{
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin', 'operation'])) {
			   redirect('login/admin');
		}
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
    	$data['color'] = $this->Admin_model->getColor();

    	$data['item'] = $this->Admin_model->get_item();
	    $this->load->view('admin/option', $data);
	}
	public function addon()
	{
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin', 'operation'])) {
			   redirect('login/admin');
		}
		$config2['base_url'] = base_url('index.php/Admin/addon');
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

	    $data['addon'] = $this->Admin_model->get_addon($config2['per_page'], $page2);
    	$data['links2'] = $this->pagination->create_links();
    	$data['item'] = $this->Admin_model->get_item();
    	$data['color'] = $this->Admin_model->getColor();
	    $this->load->view('admin/addon', $data);
	}

	public function create_option()
	{
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin', 'operation'])) {
			   redirect('login/admin');
		}
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
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin', 'operation'])) {
			   redirect('login/admin');
		}
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
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin', 'operation'])) {
			   redirect('login/admin');
		}
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
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin', 'operation'])) {
			   redirect('login/admin');
		}
		$this->db->where('id', $id);
		$this->db->delete('sh_m_item_option');
		$this->session->set_flashdata('success','Data add on has been successfully deleted');
		redirect('Admin/option/');
	}

	public function icon()
	{
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin', 'marketing'])) {
			   redirect('login/admin');
		}
		$data = [
			'home' => $this->Admin_model->getIconSet('home'),
			'footer' => $this->Admin_model->getIconSet('footer'),
			'color' => $this->Admin_model->getColor(),
		];
		$this->load->view('admin/icon',$data);
	}
	public function create_icon($type)
	{
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin', 'marketing'])) {
			   redirect('login/admin');
		}
		$upload_path = 'C:/xampp7/htdocs/selfordergarden/assets/icon/menu/';

		$max_file_size = 1 * 1024 * 1024;
		$allowed_types = ['image/png', 'image/jpeg', 'image/jpg'];

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
		    $file_type = $_FILES['icon']['type'];
		    $file_size = $_FILES['icon']['size'];
		    
		    // Generate a new file name
		    $file_name = date('Ymd') . '_' . basename($file_name);

		    // Validate file type
		    if (!in_array($file_type, $allowed_types)) {
		        $this->session->set_flashdata('error', 'File type not allowed. Please upload a PNG or JPG image.');
		        redirect('Admin/icon/');
		        return; // Stop execution if the file type is not allowed
		    }

		    // Validate file size
		    if ($file_size > $max_file_size) {
		        $this->session->set_flashdata('error', 'File size exceeds the maximum limit of 1 MB.');
		        redirect('Admin/icon/');
		        return; // Stop execution if the file size is too large
		    }

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

		$this->db->insert('sh_m_setup_so', $data);
		$this->session->set_flashdata('success', 'Data icon home has been successfully saved');
		redirect('Admin/icon/');
	}
	public function update_icon($id)
	{
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin', 'marketing'])) {
			   redirect('login/admin');
		}
	    $upload_path = 'C:/xampp7/htdocs/selfordergarden/assets/icon/menu/';
		$max_file_size = 1 * 1024 * 1024; // 1 MB
		$allowed_types = ['image/png', 'image/jpeg', 'image/jpg'];

		// Prepare the data array
		$data = [
		    'title' => $this->input->post('title'),
		    // 'link' => $this->input->post('link'),
		    'is_active' => $this->input->post('is_active'),
		];

		if (isset($_FILES['icon']) && $_FILES['icon']['error'] == UPLOAD_ERR_OK) {
		    $file_name = $_FILES['icon']['name'];
		    $file_tmp = $_FILES['icon']['tmp_name'];
		    $file_type = $_FILES['icon']['type'];
		    $file_size = $_FILES['icon']['size'];
		    
		    $file_name = date('Ymd') . '_' . basename($file_name);

		    if (!in_array($file_type, $allowed_types)) {
		        $this->session->set_flashdata('error', 'File type not allowed. Please upload a PNG or JPG image.');
		        redirect('Admin/icon/');
		        return; 
		    }

		    if ($file_size > $max_file_size) {
		        $this->session->set_flashdata('error', 'File size exceeds the maximum limit of 1 MB.');
		        redirect('Admin/icon/');
		        return; 
		    }

		    if (move_uploaded_file($file_tmp, $upload_path . $file_name)) {
		        $data['image_path'] = base_url('assets/icon/menu/' . $file_name); 
		        $this->db->where('id', $id);
				$this->db->update('sh_m_setup_so', $data);
		    } else {
		        $this->session->set_flashdata('error', 'Failed to move uploaded file.');
		        redirect('Admin/icon/');
		        return; 
		    }
		}

		$this->session->set_flashdata('success', 'Icon has been successfully updated.');
		redirect('Admin/icon/');

	}
	public function color()
	{
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin', 'marketing'])) {
			   redirect('login/admin');
		}
		$data = [
			'color' => $this->Admin_model->getColor(),
		];
		$this->load->view('admin/color',$data);
	}
	public function savecolor($id)
	{
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin', 'marketing'])) {
			   redirect('login/admin');
		}
		$this->load->helper('color_helper');
		$color = $this->input->post('color');
		$rgb = hex_to_rgb($color);
		$rgb_value = $rgb['r'] . ',' . $rgb['g'] . ',' . $rgb['b'];
		function lighten_hex($hex, $percent = 20) {
	        $hex = str_replace('#', '', $hex); // Menghapus simbol # jika ada

	        // Mengonversi HEX ke RGB
	        $r = hexdec(substr($hex, 0, 2));
	        $g = hexdec(substr($hex, 2, 2));
	        $b = hexdec(substr($hex, 4, 2));

	        // Meningkatkan kecerahan RGB
	        $r = min(255, $r + ($r * $percent / 100));
	        $g = min(255, $g + ($g * $percent / 100));
	        $b = min(255, $b + ($b * $percent / 100));

	        // Mengonversi kembali ke HEX
	        $new_hex = sprintf("#%02x%02x%02x", $r, $g, $b);

	        return $new_hex;
	    }
	    function dark_hex($hex, $percent = 20) {
		    // Menghapus simbol # jika ada
		    $hex = str_replace('#', '', $hex);

		    // Mengonversi HEX ke RGB
		    $r = hexdec(substr($hex, 0, 2));
		    $g = hexdec(substr($hex, 2, 2));
		    $b = hexdec(substr($hex, 4, 2));

		    // Menghitung nilai yang lebih gelap
		    $r = max(0, $r - ($r * $percent / 100));
		    $g = max(0, $g - ($g * $percent / 100));
		    $b = max(0, $b - ($b * $percent / 100));

		    // Mengonversi kembali ke HEX
		    $new_hex = sprintf("#%02x%02x%02x", $r, $g, $b);

		    return $new_hex;
		}
		$lighterColor = lighten_hex($color, 30);
		$darkColor = dark_hex($color, 30);
		$data = [
			'color' => $color,
			'lightcolor' => $lighterColor,
			'darkcolor' => $darkColor,
			'rgb' => $rgb_value,
		];
		$this->db->where('id',$id);
		$this->db->update('sh_m_setup_color_so',$data);
		$this->session->set_flashdata('success','Successfully Changed the Self-Order Display Color');
		redirect('Admin/color/');
	}
	
	public function users()
	{
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin'])) {
			   redirect('login/admin');
		}
		$config2['base_url'] = base_url('index.php/Admin/users');
	    $config2['total_rows'] = $this->Admin_model->countUsers(); 
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

	    $data['users'] = $this->Admin_model->get_users($config2['per_page'], $page2);
    	$data['links2'] = $this->pagination->create_links();
    	$data['color'] = $this->Admin_model->getColor();
	    $this->load->view('admin/users', $data);
	}
	public function deleteuser($id)
	{
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin'])) {
			   redirect('login/admin');
		}
		$this->db->where('id', $id);
		$this->db->delete('sh_user_so');
		$this->session->set_flashdata('success','Data user has been successfully deleted');
		redirect('Admin/users/');
	}
	public function create_users()
	{
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin'])) {
			   redirect('login/admin');
		}
		$data = [
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'role' => $this->input->post('role'),
			'is_active' => 1,
		];
		$this->db->insert('sh_user_so',$data);
		$this->session->set_flashdata('success','Data user has been successfully saved');
		redirect('Admin/users/');
	}
	public function update_user($id)
	{
		if ($this->session->userdata('username') == "" || 
			   !in_array($this->session->userdata('role'), ['admin'])) {
			   redirect('login/admin');
		}
		$id = $this->input->post('id'); // Pastikan id dikirim dari form

		$data = [
	        'username' => $this->input->post('username'),
	        'role' => $this->input->post('role'),
	        'is_active' => $this->input->post('status'),
	    ];

	    $pw = $this->input->post('password');
	    if (!empty($pw)) {
	        $data['password'] = md5($pw);
	    }

		$this->db->where('id', $id);
		$this->db->update('sh_user_so', $data);

		// Set flashdata untuk menampilkan pesan sukses
		$this->session->set_flashdata('success', 'Data user has been successfully updated');

		// Redirect ke halaman option
		redirect('Admin/users/');

	}
	
	
}
