<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Analytics extends CI_Controller {
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
	 function click(){
	 	$this->load->view('click');
	 }
	 function check_au(){
	 	$q = 'SELECT DISTINCT `link_tool`.`fb_leads`.`email` 
				FROM  `link_tool`.`fb_leads` 
				WHERE  `link_tool`.`fb_leads`.`source` =  "au"';
		$au =$this->db->query($q);
		$q2 = 'SELECT`jay_tests`.`TABLE 1`.`COL 3` 
				FROM  `jay_tests`.`TABLE 1` ';
		$gr =$this->db->query($q2);
		$gr->result_array();
		echo '<table style="    width: 300px; float: left; border: 2px solid #ccc;" >
			  <tr>
			    <td>Email</td>
			  </tr>';
			  echo count($gr->result_array() );
			   echo count($au->result_array() );
			 foreach($gr->result_array() as $grr){ 
			 echo' <tr>
			    <td>'.$grr['COL 3'].'</td>			    
			  </tr>';
			  }
			echo '</table>';	
				echo '<table style="width:40%" >
			  <tr>
			    <td>Email</td>
			  </tr>';
			 foreach($au->result_array() as $grr){ 
			 echo' <tr>
			    <td>'.$grr['email'].'</td>			    
			  </tr>';
			  }
			echo '</table>';	
	 }
	 public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}else{
				$lang= isset($_GET['lang'])?$_GET['lang']:NULL;
				$this->data= array();
				$q= 'SELECT DISTINCT `email` FROM `fb_leads` WHERE `source`= "'.$lang.'"';
				$uniq= $this->db->query($q)->result_array();	
				$this->data['unique']=count($uniq); 
				$this->data['fb_users']=$this->db->select()->from('fb_leads')->where('source',$lang)->get()->result_array();	
				$this->load->view('fb_leads',$this->data);	
		
		}
	}
	public function call()
	{
		$status= FALSE;
		$id= NULL;
		if(isset($_POST) && isset($_POST['email']) && $_POST['email'] != '' ){
			$ref= isset($_POST['ref'])? $_POST['ref'] : NULL;
			
			if($this->db->insert('adreee_analytics',array('email'=>$_POST['email'],'ref_source'=>$ref,'url'=>$_POST['url']))){
				$status= TRUE;
				$id =$this->db->insert_id();	
			}
			
		}
		echo json_encode(array('status'=>$status,'id'=>$id));
	}
	public function call_up()
	{
		$status= FALSE;
		if(isset($_POST) && isset($_POST['email']) && $_POST['email'] != '' ){
			$ref= isset($_POST['ref'])? $_POST['ref'] : NULL;
			
			if($this->db->update('adreee_analytics',array('is_lp'=>'1'),array('id'=>$_POST['id']))){
				$status= TRUE;	
			}
			
		}
		echo json_encode($status);
	}
	function fb_call(){
		$status= FALSE;
		$userID = NULL;
		if(isset($_POST) && isset($_POST['email']) &&  isset($_POST['firstname']) && isset($_POST['lastname'])){
			$ref= isset($_POST['ref'])? $_POST['ref'] : NULL;
			$this->db->insert('fb_leads',array('email'=>$_POST['email'],'f_name'=>$_POST['firstname'],'l_name'=>$_POST['lastname'],'source'=>$_POST['lang']));
			$status= TRUE;	
			$lang=$_POST['lang'];
			$this->saveToAutoresponder($_POST,$lang);
			$userID = $this->db->insert_id();
		//	$this->session->set_userdata(array('userID'=>$userID));
			
		}
		echo json_encode(array('status'=>$status,'userID'=>$userID));
	}
	
	public static function saveToAutoresponder($sess,$lang){		
		$confName = $sess['firstname'].' '.$sess['lastname'];
		$name = !empty($confName)?$confName:null;
		$email = !empty($sess['email'])?$sess['email']:null;
		$lang = $lang;
		//default campaign
		if($lang === 'uk') {
				$campaign = 'p2ye4';	
		}elseif($lang === 'au') {			
				$campaign =	'p2y2v';
		}elseif($lang === 'se') {			
				$campaign =	'pDZLx';
		}elseif($lang === 'fi') {			
				$campaign =	'pDZ9n';
		}
		
		$camp =array('campaignId'=>$campaign);                                                 
		$data_string = json_encode(array('name'=>$name,'email'=>$email,'campaign'=>$camp));   
	
		$ch = curl_init('https://api.getresponse.com/v3/contacts');                                                                      
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
			    'Content-Type: application/json',                                                                                
			    'X-Auth-Token: api-key 16353d4af2c859710487855f3c416e53' ));                                                     
			                                                                                                                     
			$result = curl_exec($ch);
	        //close connection
	        curl_close($ch);
			return $result;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */