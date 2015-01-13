<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function csvreader()
	{
		/*
		$this->load->helper('file');

		$string = read_file('./application/components/data.csv');

		print_r($string);
		*/
	
		$this->load->helper('csv');

		$file 	  = './uploads/example.csv';
		$data['orang'] 		= csv_find_all($file);
		$data['total_orang']	= csv_count_all($file);
		$data['pria'] = csv_find_by($file,3,'pria');
		$data['total_pria'] = csv_count_by($file,3,'pria'); 

		$this->load->view('csv_view',$data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */