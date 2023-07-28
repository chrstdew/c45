<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; */
class Pages extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent:: __construct();
		/* require APPPATH.'libraries/phpmailer/src/Exception.php';
		require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
		require APPPATH.'libraries/phpmailer/src/SMTP.php'; */

		$this->load->model('M_pages');
		$this->sLogin = $this->session->userdata('ei_login');
	    $this->sLevel = $this->session->userdata('ei_level');
		$this->themes_name = array();
		$this->themes_name = array('limitless','limitless_top','realmove');
		$this->themes = $this->themes_name[0];
		$this->sPublic = $this->session->userdata('ei_public');

		/* if($this->sLogin==FALSE || $this->sPublic==TRUE){
			$this->themes = $this->themes_name[2];
		} */

		/* $info = select2("info","*","");
		$this->app_name = $info['name']; */

		$this->app_name = 'SPK Kinerja Pegawai Metode Decision Tree C45';
		
		//$this->sSession = $this->session->userdata('ei_session');
	}

	public function index(){
		$this->login();
		// $this->content('home');
		// redirect('pages/content/home');
		//$this->register();
	}

	public function login(){
		$this->themes = $this->themes_name[0];
		if($this->sLogin==TRUE){
			redirect('pages/content/home');
		}
		$data = array();
		$data['BASE_URL'] = base_url();
		$data['THEMES'] = $this->themes;
		$data['TITLE'] = '';
		$data['APP_NAME'] = $this->app_name;
		$data['ASSETS'] = array(
			//'font_awesome',
			//'bootstrap',
			'form_validation',
			//'captcha',
			//'g-recaptcha',
		);
		$data['MESSAGE'] = '';
        if($this->input->post('btnLogin')=='login'){
			/* $captcha		= $_POST['g-recaptcha-response'];
			$secretKey		= "6Lf7WCUTAAAAAGJzZ-U_aPv5GiGLEOExXDFpI_PM";
			$ip 			= $_SERVER['REMOTE_ADDR'];
			$response		= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
			$responseKeys	= json_decode($response,true);

			if(intval($responseKeys["success"]) !== 1) {
				echo '
				<script>
					window.alert("Failed! Spam Detected !");
					window.location=("javascript:history.go(-1)");
				</script>';
				exit();
			} */
			
        	$user = string($this->input->post('user'));
			$pass = string($this->input->post('pass'));

			if(!empty($user) && !empty($pass)){
				$action = $this->M_pages->login($user,$pass);

				/* echo '
				<script>
					window.alert("Login Failed ! '.$action.'");
					window.location=("'.$data['BASE_URL'].'pages/login")
				</script>'; */

				if($action==TRUE){
					redirect('pages/content/home');
					/* echo '
					<script>
						window.location=("'.$data['BASE_URL'].'session.php?u='.$user.'");
					</script>'; */
				}
				else{
					/* $data['MESSAGE'] = '
					<script>
						window.alert("Login Gagal");
						window.location=("'.$data['BASE_URL'].'pages/login")
					</script>'; */

					echo '
					<script>
						window.alert("Login Failed !");
						window.location=("'.$data['BASE_URL'].'")
					</script>';
					exit();
				}
			}
		}
		
        $this->parser->parse('themes/'.$data['THEMES'].'/v_login',$data);
	}

	public function register(){
		//$this->session_clear();
		$this->themes = $this->themes_name[0];
		$data = array();
		$data['BASE_URL'] = base_url();
		$data['THEMES'] = $this->themes;
		$data['TITLE'] = '';
		$data['APP_NAME'] = $this->app_name;
		$data['ASSETS'] = array(
			//'font_awesome',
			//'bootstrap',
			'form_validation',
			'select2',
			//'datetimepicker',
			//'currency',
			//'captcha',
			'form_event',
			//'g-recaptcha',
			'api',
		);
		$data['MESSAGE'] = '';
        $this->parser->parse('themes/'.$data['THEMES'].'/v_register',$data);
	}

	public function forgot_password(){
		//$this->session_clear();
		$this->themes = $this->themes_name[0];
		$data = array();
		$data['BASE_URL'] = base_url();
		$data['THEMES'] = $this->themes;
		$data['TITLE'] = '';
		$data['APP_NAME'] = $this->app_name;
		$data['ASSETS'] = array(
			//'font_awesome',
			//'bootstrap',
			'form_validation',
			'select2',
			//'datetimepicker',
			//'captcha',
			//'form_event',
			//'g-recaptcha',
		);
		$data['MESSAGE'] = '';

		if($this->input->post('btnLogin')=='login'){
			$email = string($this->input->post('email'));
			$user = select2("user","*","WHERE email='$email'");

			if($user!=NULL){
				/* $pesan = 'Klik <a href="'.base_url().'pages/new_password/id/'.$user['id_user'].'"> link </a> ini untuk melakukan forgot password';
				$this->send_email($email,"Forgot Password",$pesan); */
	
				echo '
				<script>
					window.alert("Cek Email Anda untuk melakukan forgot password !!!");
					window.location=("'.base_url().'pages/login");
				</script>';
			}
			else{
				echo '
				<script>
					window.alert("Failed ! Email tidak ditemukan !!!");
					window.location=("'.base_url().'pages/login");
				</script>';
			}
			exit();
		}

        $this->parser->parse('themes/'.$data['THEMES'].'/v_forgot_password',$data);
	}

	public function new_password(){
		//$this->session_clear();
		$this->themes = $this->themes_name[0];
		$data = array();
		$data['BASE_URL'] = base_url();
		$data['THEMES'] = $this->themes;
		$data['TITLE'] = '';
		$data['APP_NAME'] = $this->app_name;
		$data['ASSETS'] = array(
			//'font_awesome',
			//'bootstrap',
			'form_validation',
			'select2',
			//'datetimepicker',
			//'captcha',
			//'form_event',
			//'g-recaptcha',
		);
		$data['MESSAGE'] = '';

		$data['id_user'] = string(urinext('id'));

		if($this->input->post('btnLogin')=='login'){
			$password = string($this->input->post('password'));
			$password2 = string($this->input->post('password2'));

			if($password!=$password2){
				echo '
				<script>
					window.alert("Failed! Password & Konfirmasi Password tidak sama !!!");
					window.location=("javascript:history.go(-1)");
				</script>';
				exit();
			}
			else{
				$id = string($this->input->post('id_user'));
				$options = [
					'cost' => 12,
				];
				$password_hash = password_hash($password, PASSWORD_BCRYPT, $options);

				$user = update("user","password='$password_hash'","WHERE id_user='$id'");

				echo '
				<script>
					window.alert("New Password Success !!!");
					window.location=("'.base_url().'pages/login");
				</script>';
				exit();
			}
		}

        $this->parser->parse('themes/'.$data['THEMES'].'/v_new_password',$data);
	}

	public function activate(){
		//$this->session_clear();
		$this->themes = $this->themes_name[0];
		$data = array();
		$data['BASE_URL'] = base_url();
		$data['THEMES'] = $this->themes;
		$data['TITLE'] = '';
		$data['APP_NAME'] = $this->app_name;
		$data['ASSETS'] = array(
			//'font_awesome',
			//'bootstrap',
			'form_validation',
			//'select2',
			//'datetimepicker',
			//'currency',
			//'captcha',
			'form_event',
			//'g-recaptcha',
			'api',
		);
		$data['MESSAGE'] = '';
        $this->parser->parse('themes/'.$data['THEMES'].'/v_activate',$data);
	}

	/* public function send_email($to,$subject,$message){
		$response = false;
		$mail = new PHPMailer();

		$r = select2("setting_email","*","WHERE id_setting_email='1'");

		// SMTP configuration
		$mail->isSMTP();
		$mail->Host     = $r['smtp_host'];
		$mail->SMTPAuth = true;
		$mail->Username = $r['smtp_user'];
		$mail->Password = $r['smtp_pass'];
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = $r['smtp_port'];

		$mail->setFrom($r['fromm'],$r['name']);
		$mail->addAddress($to);
		$mail->Subject = $subject;
		$mail->isHTML(true);
		$mail->Body = $message;

		if(!$mail->send()){
			return $mail->ErrorInfo;
		}
		else{
			return TRUE;
		}
	} */

	public function report($id=''){
		$data = array();
		$data['BASE_URL'] = base_url();
		$data['THEMES'] = $this->themes;
		$data['TITLE'] = '';
		$data['APP_NAME'] = $this->app_name;
		$data['ASSETS'] = array(
			//'font_awesome',
			//'bootstrap',
			'form_validation',
			//'select2',
			//'datetimepicker',
			//'captcha',
			'form_event',
			//'g-recaptcha',
		);
		$data['MESSAGE'] = '';
		
        $this->parser->parse('themes/'.$data['THEMES'].'/v_report',$data);
	}

	public function logout(){
		$this->M_pages->logout();
		redirect(base_url());
		//redirect('pages/login');
		//redirect('pages/content/home');

		/* echo '
		<script>
			window.location=("'.base_url().'session2.php");
		</script>'; */
	}

	public function content($content_next=''){
		session_check();
		$data = array();
		$content = str_replace('-','_',$content_next);
		$model = 'M_'.$content;
		$path = $model;
		if (strpos($content,':') == TRUE) {
			list($folder,$file) = explode(':',$content);
			$model = 'M_'.$file;
			$path = $folder.'/'.$model;
		}

		//$info = select2("info","*","WHERE flag_aktif='1'");

    	if(file_exists(APPPATH.'models/content/'.$path.'.php')){
			$action = urinext($content_next);
			if(empty($action)){
				$action = 'index';
			}
			$this->load->model('content/'.$path);
			if($content=='home'){
				$data = $this->$model->index($this->themes,$this->app_name);

				/* if($this->sLogin==FALSE){
					array_push($data['ASSETS'],
						// 'jquery',
						// 'font_awesome',
						// 'bootstrap',
						// 'disable_event',
						// 'whatsapp'
					);

					$data['whatsapp_no'] = $info['whatsapp'];
				} */

				$data['APP_NAME'] = $this->app_name;
				$data['MENU_HEADER'] = $this->M_pages->menu_header();
				$data['MENU_NAVIGATION'] = $this->M_pages->menu_navigation();
				$ct = '';
	    		if($this->themes==$this->themes_name[2]){
					$ct = '_home';
	    		}
	    		pages('content'.$ct,$data,$this->themes);
			}
		    elseif(!empty($content) && !empty($action) && in_array($action,get_class_methods($model))){
				$data = $this->$model->$action();

				/* if($this->sLogin==FALSE){
					array_push($data['ASSETS'],
						// 'jquery',
						// 'font_awesome',
						// 'bootstrap',
						// 'disable_event',
						// 'whatsapp'
					);

					$data['whatsapp_no'] = $info['whatsapp'];
				} */
	
	    		$data['APP_NAME'] = $this->app_name;
				$data['MENU_HEADER'] = $this->M_pages->menu_header();
				$data['MENU_NAVIGATION'] = $this->M_pages->menu_navigation();
				pages('content',$data,$this->themes);
		    }
		    else{
		    	$this->error_404();
		    }
    	}
    	else{
    		$this->error_404();
    	}
	}

	public function switch_lang($lang){
		$lang = ($lang != '') ? $lang : 'english';
		$data = array(
			'ei_lang' => $lang, 
		);
		$this->session->set_userdata($data);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function session(){
		$data = array(
			'ei_public' => TRUE, 
		);
		$this->session->set_userdata($data);
		redirect(base_url());
	}

	public function session_clear(){
		$data = array(
			'ei_public', 
		);
		$this->session->unset_userdata($data);
		redirect(base_url());
	}

	public function error_404(){
		$data = array();
		$data['heading'] = '404 Page Not Found';
		$data['message'] = '<p>The page you requested was not found.</p>';
		$this->load->view('errors/html/error_404',$data);
	}
}
