<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Binary extends CI_Controller {
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
	 
	function aussie(){
		$pageSess = NULL;
		$allAB =array();
		$this->load->library('session');
		if(!$this->session->userdata('ubsess') && !$this->session->userdata('ab_uid')){
			if(isset($_GET['ubsess']) && isset($_GET['ab_uid'])){
				$this->session->set_userdata(array('ubsess'=>$_GET['ubsess'],'ab_uid'=>$_GET['ab_uid']));
				//set the page session if its not setuped and load the view so next time will pass the else
				$pageSess =$this->session->userdata('ubsess');
				$uniqueSess = $this->session->userdata('ab_uid');
				$allAB = $this->db->select()->from('custom_links')->where('ab_unique_id',$uniqueSess)->get()->result_array();
				if($pageSess === $allAB[0]['a_page_session']){
					//$view = 'AAA VIEW';
					header ("Location ".$allAB[0]['target']);
					
				}elseif($pageSess === $allAB[0]['b_page_session']){
					//$view = 'BBB VIEW';
					header ("Location ".$allAB[0]['ab_funnel_url']);					
				}
			}
		}else{
			$view= array();
			$pageSess =$this->session->userdata('ubsess');
			$uniqueSess = $this->session->userdata('ab_uid');
			$allAB = $this->db->select()->from('custom_links')->where('ab_unique_id',$uniqueSess)->get()->result_array();
			
			if($pageSess == $allAB[0]['a_page_session']){
				//$view = 'AAA VIEW';
				header ("Location ".$allAB[0]['target']);
				// $message= 'AAA';
			}elseif($pageSess == $allAB[0]['b_page_session']){
				//$view = 'BBB VIEW';
				header ("Location ".$allAB[0]['ab_funnel_url']);
			}
		}
		if($this->uri->segment(3) === 'au'){
			//print_r($this->session->userdata('ubsess'));
			$this->load->view('binary/assie/au/index');
		}
		elseif($this->uri->segment(3) === 'p_maximizer'){
			//print_r($this->session->userdata('ubsess'));
			$this->load->view('binary/p_maximizer/au/index');
	
		}
elseif($this->uri->segment(3) === 'uk'){
			//print_r($this->session->userdata('ubsess'));
			$this->load->view('binary/assie/uk/index');
	
		}
		
		else{
			show_404();
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
					//$view = 'AAA VIEW';
					header ("Location ".$allAB[0]['target']);
					
				}elseif($pageSess === $allAB[0]['b_page_session']){
					//$view = 'BBB VIEW';
					header ("Location ".$allAB[0]['ab_funnel_url']);					
				}
			}
		}else{
			$view= array();
			$pageSess =$this->session->userdata('ubsess');
			$uniqueSess = $this->session->userdata('ab_uid');
			$allAB = $this->db->select()->from('custom_links')->where('ab_unique_id',$uniqueSess)->get()->result_array();
			
			if($pageSess === $allAB[0]['a_page_session']){
				//$view = 'AAA VIEW';
				header ("Location ".$allAB[0]['target']);
				// $message= 'AAA';
			}elseif($pageSess === $allAB[0]['b_page_session']){
				//$view = 'BBB VIEW';
				header ("Location ".$allAB[0]['ab_funnel_url']);
			}
		}
		if($this->uri->segment(3) === 'au'){
			$this->load->view('binary/assie/au/index');
		}
		elseif($this->uri->segment(3) === 'p_maximizer'){
			$this->load->view('binary/p_maximizer/au/index');
	
		}
	}
	
	function grey_white(){
		if($this->uri->segment(2) === 'en'){
			$this->load->view('grey_white/en/index');
		}
		if($this->uri->segment(2) === 'fi'){
					$this->load->view('grey_white/fi/index');
				}
		if($this->uri->segment(2) === 'fr'){
					$this->load->view('grey_white/fr/index');
				}
		if($this->uri->segment(2) === 'se'){
					$this->load->view('grey_white/se/index');
				}
	}
	
	function aussie_cr(){
		if($this->uri->segment(3) === 'au'){
			$this->load->view('binary/aussie_cr/au/index');
		}
	}
	function brit_cr(){
		if($this->uri->segment(3) === 'uk'){
			$this->load->view('binary/brith_cr/uk/index');
		}
	}
	function reward_qn(){
		if($this->uri->segment(2) === 'se'){
			$this->load->view('binary/reward_qn/se/index');
		}elseif($this->uri->segment(2) === 'fi'){
			$this->load->view('binary/reward_qn/fi/index');
		}elseif($this->uri->segment(2) === 'fr'){
			$this->load->view('binary/reward_qn/fr/index');
		}elseif($this->uri->segment(2) === 'no'){
			$this->load->view('binary/reward_qn/no/index');
		}else{
			show_404();
		}		
	}
	function reward_qn_terms (){
	if($this->uri->segment(2) === 'no'){
			$this->load->view('binary/reward_qn/no/terms');
	}
	if($this->uri->segment(2) === 'se'){
			$this->load->view('binary/reward_qn/se/terms');
	}
	if($this->uri->segment(2) === 'fi'){
			$this->load->view('binary/reward_qn/fi/terms');
	}
	if($this->uri->segment(2) === 'fr'){
			$this->load->view('binary/reward_qn/fr/terms');
	}
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */