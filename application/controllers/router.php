<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Router extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}
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
	 
	function index(){
		if(isset($_GET['route'])){
			$get_options =$this->db->select()->from('dynamic_funnels')->where('hash',$_GET['route'])->get()->result_array();
			$this->data=array();
			//check if route exist $_GET['route']
			if(count($get_options) > 0){
				$this->data['options']=$get_options;
				$view = 'router/'.$get_options[0]['view'].'/'.$get_options[0]['language'].'/index';
				$this->load->view($view,$this->data);
			}else{
				die();
			}
		}else{
			die();
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */