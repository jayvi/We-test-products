<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Abtests extends CI_Controller {
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
	 function setCookie(){
	 	$this->load->helper('cookie');
		if(!get_cookie('wetest_uni_visit')){
				$cookie = array(
			    'name'   => 'uni_visit',
			    'value'  => rand(),
			    'expire' => '86500',
			    'domain' => '.wetestproducts.com',
			    'path'   => '/',
			    'prefix' => 'wetest_',
			    'secure' => FALSE
			);
			
			$this->input->set_cookie($cookie);
		}
		
	 	echo 'Cookie';
	 }
	 function regvisit(){
	 	$this->load->helper('cookie');
		if(!get_cookie('wetest_uni_visit')){
				$cookie = array(
			    'name'   => 'uni_visit',
			    'value'  => rand(),
			    'expire' => '86500',
			    'domain' => '.wetestproducts.com',
			    'path'   => '/',
			    'prefix' => 'wetest_',
			    'secure' => FALSE
			);
			
			$this->input->set_cookie($cookie);
		}
		$cookie= get_cookie('wetest_uni_visit');
		echo '<hr/>';
		foreach (getallheaders() as $name => $value) {
		echo '<hr/>';
			    echo "$name: $value\n";
				echo '<br/>';
		}
	 }
	function abtest(){
		$pageSess = NULL;
		$this->load->library('session');
		if(!$this->session->userdata('ubsess') && !$this->session->userdata('ab_uid')){
			if(isset($_GET['ubsess']) && isset($_GET['ab_uid'])){
				$this->session->set_userdata(array('ubsess'=>$_GET['ubsess'],'ab_uid'=>$_GET['ab_uid']));
				//set the page session if its not setuped and load the view so next time will pass the else
				$pageSess =$this->session->userdata('ubsess');
				$uniqueSess = $this->session->userdata('ab_uid');
				$allAB = $this->db->select()->from('custom_links')->where('ab_unique_id',$uniqueSess)->get()->result_array();
				
				if($pageSess === $allAB[0]['a_page_session']){
					$view = 'AAA VIEW';
					header ("Location ".$allAB[0]['target']);
					
				}elseif($pageSess === $allAB[0]['b_page_session']){
					$view = 'BBB VIEW';
					header ("Location ".$allAB[0]['ab_funnel_url']);					
				}
			}
		}else{
			$view= array();
			$pageSess =$this->session->userdata('ubsess');
			$uniqueSess = $this->session->userdata('ab_uid');
			$allAB = $this->db->select()->from('custom_links')->where('ab_unique_id',$uniqueSess)->get()->result_array();
			
			if($pageSess === $allAB[0]['a_page_session']){
				$view = 'AAA VIEW';
				header ("Location ".$allAB[0]['target']);
				// $message= 'AAA';
			}elseif($pageSess === $allAB[0]['b_page_session']){
				$view = 'BBB VIEW';
				header ("Location ".$allAB[0]['ab_funnel_url']);
			}
		}
		
		if($this->uri->segment(2) === 'fr'){
			$this->load->view('grey_white/fr/index');
			// print_r($allAB);
				// echo '<hr/>';
			// print_r($pageSess);
			// $checkWhichSess = explode('_', $pageSess);
			// echo '<hr/>';
			// print_r($checkWhichSess);
			// echo '<hr/>';
			// print_r($this->session->all_userdata());
	 		//echo '<hr/>';
			//	print_r($view) ;
				//$this->load->view('abtest/fr/index');
				}
elseif($this->uri->segment(2) === 'se'){
	$this->load->view('grey_white/se/index');
	// print_r($pageSess);
			// print_r($allAB);
				// echo '<hr/>';
			// print_r($pageSess);
			// $checkWhichSess = explode('_', $pageSess);
			// echo '<hr/>';
			// print_r($checkWhichSess);
			// echo '<hr/>';
			// print_r($this->session->all_userdata());
	 		//echo '<hr/>';
			//	print_r($view) ;
				//$this->load->view('abtest/fr/index');
				}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */