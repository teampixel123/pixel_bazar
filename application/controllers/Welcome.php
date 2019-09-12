<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
    $this->load->helper('string');
		$this->load->library('form_validation');
		$this->load->Model('Pixel_Model');
	}

	public function index()
	{
		// $this->output->cache(60);
		// $this->load->view('pages/home');
		$this->load->view('pages/index');
	}

	public function home()
	{
		// $this->output->cache(60);
		$this->load->view('pages/index');
	}

	public function demo_page()
	{
		// $this->output->cache(60);
		$this->load->view('pages/demo_page');
	}

	public function contact()
	{
		// $this->output->cache(60);
		$this->load->view('pages/contact');
	}
	public function logo_design()
	{
		// $this->output->cache(60);
		$this->load->view('pages/logo_design');
	}

	public function graphic_design()
	{
		// $this->output->cache(60);
		$this->load->view('pages/graphic_design');
	}
	public function website_design()
	{
		// $this->output->cache(60);
		$this->load->view('pages/website_design');
	}
	public function digital_marketing()
	{
		// $this->output->cache(60);
		$this->load->view('pages/digital');
	}
	public function signage()
	{
		// $this->output->cache(60);
		$this->load->view('pages/signage');
	}
	public function branding()
	{
		// $this->output->cache(60);
		$this->load->view('pages/branding');
	}
	public function printing_services()
	{
		// $this->output->cache(60);
		$this->load->view('pages/printing_services');
	}
	public function corporate_event()
	{
		// $this->output->cache(60);
		$this->load->view('pages/corporate_event');
	}
	public function acadamy_web()
	{
		// $this->output->cache(60);
		$this->load->view('pages/acadamy_web');
	}
	public function acadamy_dmark()
	{
		// $this->output->cache(60);
		$this->load->view('pages/acadamy_dmark');
	}
	public function portfolio()
	{
		// $this->output->cache(60);
		$portfolio_data = $this->Pixel_Model->get_portfolio();
		$this->load->view('pages/portfolio',['portfolio_data'=>$portfolio_data]);
	}
	public function testimonials()
	{
		// $this->output->cache(60);
		$this->load->view('pages/testimonials');
	}
	public function portfolio_detail() //Portfolio-Details
	{
		// $this->output->cache(60);
		$portfolio_id = $this->uri->segment(2);
		$portfolio_details = $this->Pixel_Model->portfolio_detail($portfolio_id);
		$get_next_id = $this->Pixel_Model->portfolio_next_id($portfolio_id);
		$get_prev_id = $this->Pixel_Model->portfolio_prev_id($portfolio_id);
		if($get_next_id){
			$next_id = $get_next_id[0]['id'];
		}
		else{
			$next_id = '0';
		}
		if($get_prev_id){
			$prev_id = $get_prev_id[0]['id'];
		}
		else{
			$prev_id = '0';
		}
		if($portfolio_details){
			$this->load->view('pages/portfolio_detail',['portfolio_details'=>$portfolio_details,'next_id'=>$next_id,'prev_id'=>$prev_id]);
		}
		else{
			header('location:'.base_url().'Creative-Design-Portfolio');
		}
	}
	public function add_portfolio()
	{
		// $this->output->cache(60);
		$this->load->view('pages/add_portfolio.php');
	}
	public function save_portfolio(){
		$date = date('d-m-Y');
		$img_id = random_string('nozero',3);
		$type = $this->input->post('type');
		$logo_name = $img_id.'_'.$type;
    $config['upload_path'] = 'assets/images/portfolio/';
    $config['allowed_types'] = 'gif|jpg|png|webp';
    $config['max_size'] = '1024';
    $config['file_name'] = $logo_name;
    $filename = $_FILES['photo']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $this->load->library('upload', $config);

		if ($this->upload->do_upload('photo')){
      $data = array(
        'type'=>$this->input->post('type'),
        'title'=>$this->input->post('title'),
        'short_info'=>$this->input->post('short_info'),
        'descroption'=>$this->input->post('descroption'),
        'date'=>$date,
        'photo'=>$logo_name.'.'.$ext,
      );
      $this->Pixel_Model->save_portfolio($data);
    }
    else{
		echo $error = $this->upload->display_errors();
    }
	}

	public function send_portfolio_email(){
	    $page_url = $this->input->post('page_url');
		$photo = $this->input->post('photo');
		$title = $this->input->post('title');
		$short_info = $this->input->post('short_info');
		$name = $this->input->post('name');
		$sender_email = $this->input->post('sender_email');
		$rec_email = $this->input->post('rec_email');
		$id = $this->input->post('id');
		 $message = '
			 <p style="text-align:center; color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 20px;font-family: Georgia, serif; ">
			 Welcome to Pixel Bazar
			 </p><br>
			 <p style="text-align:center; color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 Pixelbazar is the #1 place in kolhapur for graphic design, logo design, web design and brand identity
			 </p><br>
			 <p style="text-align:center; color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
			 <img src="'.base_url().'assets/images/portfolio/'.$photo.'">
			 </p>
			 <p style="text-align:center; color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
			 '.$title.'
			 </p>
			 <p style="text-align:center; color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 '.$short_info.'
			 </p>
			 <p style="text-align:center; color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 <a href='.$page_url.'>Details</a> | <a href='.base_url().'Creative-Design-Portfolio>See More Work</a>
			 </p>
			  <hr>
			 <br>
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 Sender: '.$name.'
			 </p>
		 ';

	     $subject = 'Pixel Bazar Portfolio';

	     $headers  = 'MIME-Version: 1.0' . "\r\n";
	     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	     $headers .= 'From: '.$sender_email."\r\n".
	                 'Reply-To: '.$sender_email."\r\n" .
	                 'X-Mailer: PHP/' . phpversion();

	     if(mail($rec_email, $subject, $message, $headers)){
	 			$this->session->set_flashdata("email_msg","email_success");
	     }
	     else{
	 			$this->session->set_flashdata("email_msg","email_error");
	     }
	}

	public function send_service_email(){
		$page_url = $this->input->post('page_url');
		$title = $this->input->post('title');
		$name = $this->input->post('name');
		$sender_email = 'info@pixelbazar.com';
		$rec_email = $this->input->post('rec_email');
		 $message = '
		 	 <p style="text-align:center;">
			 	<img height="100px" width="100px" src="'.base_url().'assets/images/site/Pixel_Bazar_Logo-01.png">
			 <p>
			 <p style="text-align:center; color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 20px;font-family: Georgia, serif; ">
			 Welcome to Pixel Bazar
			 </p><br>
			 <p style="text-align:center; color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 Pixelbazar is the #1 place in kolhapur for graphic design, logo design, web design and brand identity
			 </p><br>
			 <p style="text-align:center; color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
			 '.$title.'
			 </p><br>

			 <p style="text-align:center; color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 <a href='.$page_url.'>Details</a> | <a href='.base_url().'Creative-Design-Portfolio>See Our Work</a>
			 </p>
				<hr>
			 <br>
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 Sender: '.$name.'
			 </p>
		 ';

			 $subject = 'Pixel Bazar Service';

			 $headers  = 'MIME-Version: 1.0' . "\r\n";
			 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			 $headers .= 'From: '.$sender_email."\r\n".
									 'Reply-To: '.$sender_email."\r\n" .
									 'X-Mailer: PHP/' . phpversion();

			 if(mail($rec_email, $subject, $message, $headers)){
				$this->session->set_flashdata("email_msg","email_success");
			 }
			 else{
				$this->session->set_flashdata("email_msg","email_error");
			 }
			 header('location:'.$page_url.'');
		 }

	public function send_feedback(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$message1 = $this->input->post('message');
			 $message = '
				 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
				 Massege: <br>'.$message1.'
				 </p>
				 <hr>
				 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
				 Sender Information:
				 </p>
				 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
				 Name: '.$name.'
				 </p>
				 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
				 Mobile No: '.$mobile.'
				 </p>
				 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
				 Email: <a href="mailto:'.$email.'">'.$email.'</a>
				 </p>
			 ';

			 $recipient = "info@pixelbazar.com";
       $subject = "Mail From Pixel Bazar Web Contact";

       $headers  = 'MIME-Version: 1.0' . "\r\n";
       $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
       $headers .= 'From: '.$email."\r\n".
                   'Reply-To: '.$email."\r\n" .
                   'X-Mailer: PHP/' . phpversion();

       if(mail($recipient, $subject, $message, $headers)){
   			$this->session->set_flashdata("contact_status","email_success");
       }
       else{
   			$this->session->set_flashdata("contact_status","email_error");
       }
       header('location:'.base_url().'Contact');
	 }

	 public function send_enquiry(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');

     $formcontent='
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 20px;font-family: Georgia, serif; ">
			 Enquiry From PixelBazar Website.
			 </p>
			 <hr>
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
			 Sender Information:
			 </p>
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 Name: '.$name.'
			 </p>
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 Mobile No: '.$mobile.'
			 </p>
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 Email: <a href="mailto:'.$email.'">'.$email.'</a>
			 </p>
		 ';
      $recipient = "info@pixelbazar.com";
      $subject = "Enquiry From Pixel Bazar Web";

      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: '.$email."\r\n".
                  'Reply-To: '.$email."\r\n" .
                  'X-Mailer: PHP/' . phpversion();

      if(mail($recipient, $subject, $formcontent, $headers)){
  			$this->session->set_flashdata("enquiry_status","email_success");
      }
      else{
  			$this->session->set_flashdata("enquiry_status","email_error");
      }
      header('location:'.base_url());
	 }

}
