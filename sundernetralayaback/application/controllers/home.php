<?php defined('BASEPATH')OR exit('No direct script access allowed');
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
		$this->load->library('phpmailer_lib');
		$this->load->model('home_model');
		$this->load->helper('string');
		$this->load->helper('cookie');
		$this->tbl_services = 'rj_services';
		$this->tbl_service_utilities = 'rj_service_utilities';
		$this->tbl_testimonials = 'rj_testimonials';
		$this->tbl_slider = 'rj_slider';
		$this->tbl_blogs = 'rj_blogs';
		$this->tbl_doctors = 'rj_doctors';
		$this->tbl_lead_master = 'rj_lead_master';
		$this->tbl_appointments = 'rj_appointments';
		
	}

	public function index(){
		$data=array();
		
		$select_b='*';
		$where_b=''.$this->tbl_slider.'.status = 1';
		$join_b=array();
		$sliderResult=$this->home_model->fetch_data($this->tbl_slider,$select_b,$join_b,$where_b);
		$data['sliderResult']=$sliderResult;
		
		$select_b='*';
		$where_b=''.$this->tbl_services.'.status = 1';
		$join_b=array();
		$servicesResult=$this->home_model->fetch_data($this->tbl_services,$select_b,$join_b,$where_b);
		$data['servicesResult']=$servicesResult;
		
		$select_b='*';
		$where_b=''.$this->tbl_doctors.'.status = 1';
		$join_b=array();
		$doctorResult=$this->home_model->fetch_data($this->tbl_doctors,$select_b,$join_b,$where_b);
		$data['doctorResult']=$doctorResult;
		
		$select_b='*';
		$where_b=''.$this->tbl_blogs.'.status = 1';
		$join_b=array();
		$blogResult=$this->home_model->fetch_data($this->tbl_blogs,$select_b,$join_b,$where_b);
		$data['blogResult']=$blogResult;
		
		$select='*';
		$where=''.$this->tbl_testimonials.'.status = 1';
		$join=array();
		$clientsResult=$this->home_model->fetch_data($this->tbl_testimonials,$select,$join,$where);
	
		$data['clientsResult']=$clientsResult;
		
		$this->load->view('common/header',$data);
		$this->load->view('home',$data);
		$this->load->view('common/footer');
	    
	}
	
	public function aboutus(){
	    $data=array();
	    
	    $select_b='*';
		$where_b=''.$this->tbl_services.'.status = 1';
		$join_b=array();
		$servicesResult=$this->home_model->fetch_data($this->tbl_services,$select_b,$join_b,$where_b);
		$data['servicesResult']=$servicesResult;
	
		$this->load->view('common/header');
		$this->load->view('about',$data);
		$this->load->view('common/footer');
	    
	}
	
	public function patient_stories(){
	    $data=array();
	    
	    $select_b='*';
	    $NA = 'NA';
		$where_b=''.$this->tbl_testimonials.'.status = 1 AND video_link !="'.$NA.'"';
		$join_b=array();
		$patientVResult=$this->home_model->fetch_data($this->tbl_testimonials,$select_b,$join_b,$where_b);
		$data['patientVResult']=$patientVResult;
		
		$select_b='*';
		$where_b=''.$this->tbl_testimonials.'.status = 1';
		$join_b=array();
		$patientResult=$this->home_model->fetch_data($this->tbl_testimonials,$select_b,$join_b,$where_b);
	
		$data['patientResult']=$patientResult;
		
		$this->load->view('common/header');
		$this->load->view('patient_stories',$data);
		$this->load->view('common/footer');
	    
	}
		
	public function our_team(){
	    $data=array();
	   	$select='*';
		$where=''.$this->tbl_doctors.'.status = 1';
		$join=array();
		$doctorsList=$this->home_model->fetch_data($this->tbl_doctors,$select,$join,$where);
	
		$data['doctorsList']=$doctorsList;
		
		$this->load->view('common/header');
		$this->load->view('our_team',$data);
		$this->load->view('common/footer');
	    
	}
	
	public function services(){
	    $data=array();
	    $select_b='*';
		$where_b=''.$this->tbl_blogs.'.status = 1';
		$join_b=array();
		$blogResult=$this->home_model->fetch_data($this->tbl_blogs,$select_b,$join_b,$where_b,false, false,'blogID');
	
		$data['blogResult']=$blogResult;
		$this->load->view('common/header');
		$this->load->view('services',$data);
		$this->load->view('common/footer');
	    
	}
	
	public function blogs(){
	    $data=array();
	    $select_b='*';
		$where_b=''.$this->tbl_blogs.'.status = 1';
		$join_b=array();
		$blogResult=$this->home_model->fetch_data($this->tbl_blogs,$select_b,$join_b,$where_b);
	
		$data['blogResult']=$blogResult;
		$this->load->view('common/header');
		$this->load->view('blogs',$data);
		$this->load->view('common/footer');
	    
	}
	
	public function contactus(){
	    $data=array();
	    
		$this->load->view('common/header');
		$this->load->view('contact',$data);
		$this->load->view('common/footer');
	    
	}
	
	public function save_contact(){
        if(isset($_POST) && !empty($_POST['leadName'])){
	        $insert_data = array(
                    'leadName' => $this->input->post('leadName'),
                    'leadEmail' => $this->input->post('leadEmail'),
                    'leadMobile' => $this->input->post('leadMobile'),
                    'leadMessage' => $this->input->post('leadMessage')
                    );
                $this->db->insert('rj_lead_master',$insert_data);
         
           $email = 'jyotiwatpade1920@gmail.com';
           // send and email
    		$this->load->helper('email');
    		$subject = "New Lead";
    		$body = "Hello Admin, <br /><br />Below is the lead details come.<br /><br />
    						 Name: {$insert_data['leadName']}<br />
    						 Email: {$insert_data['leadEmail']}<br />
    						 Phone: {$insert_data['leadMobile']}<br />
    						 Message: {$insert_data['leadMessage']}<br /><br />
    						 From,<br /> Sunder Netralaya Hospital";
    	
    		$headers = "From:info@phytoelixir.in//\r\n";
            $headers .= "Reply-To: info@phytoelixir.in\r\n";
            $headers .= "Return-Path: info@phytoelixir.in//\r\n";
            $headers .= "Organization: Sender Organization\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $headers .= "X-Priority: 3\r\n";
            $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
             
            if ( mail($email,$subject,$body,$headers) ) {
               $send_result = true;
            } else {
               $send_result = false;
            }
           
          echo json_encode(array('success'=>TRUE, 'email_send'=>$send_result));exit;
	       
	    }
    }
	
    public function save_appointment(){
        if(isset($_POST) && !empty($_POST['name'])){
	        $insert_data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'mobile' => $this->input->post('mobile'),
                    'appointmentDate' => $this->input->post('appointmentDate'),
                    'content' => $this->input->post('content')
                    );
                $this->db->insert('rj_appointments',$insert_data);
         
           $email = 'jyotiwatpade1920@gmail.com';
           // send and email
    		$this->load->helper('email');
    		$subject = "New Lead";
    		$body = "Hello Admin, <br /><br />Below is the apointment lead details come.<br /><br />
    						 Name: {$insert_data['name']}<br />
    						 Email: {$insert_data['email']}<br />
    						 Phone: {$insert_data['mobile']}<br />
    						 Appointment Date: {$insert_data['appointmentDate']}<br />
    						 Message: {$insert_data['content']}<br /><br />
    						 From,<br /> Sunder Netralaya Hospital";
    	
    		$headers = "From:info@phytoelixir.in//\r\n";
            $headers .= "Reply-To: info@phytoelixir.in\r\n";
            $headers .= "Return-Path: info@phytoelixir.in//\r\n";
            $headers .= "Organization: Sender Organization\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $headers .= "X-Priority: 3\r\n";
            $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
             
            if ( mail($email,$subject,$body,$headers) ) {
               $send_result = true;
            } else {
               $send_result = false;
            }
           
          echo json_encode(array('success'=>TRUE, 'email_send'=>$send_result));exit;
	       
	    }
    }
    
    public function appointment(){
	    $data=array();
	    $this->load->view('common/header');
		$this->load->view('appointment',$data);
		$this->load->view('common/footer');
	    
	}
	
}