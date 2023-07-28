<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_database extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		/* $data['CONTENT'] = '';
		return $data; */
		return $this->data();
	}

	public function start(){
		$data = array();
		$data = session_check();
		# Cek level login
		level_check($data['sLevel'],'1',1);

		# Tentukan assets yang akan digunakan
		$data['ASSETS'] = array(
			'datatables',
			//'venobox',
			'form_validation',
			'select2',
			/* 'datepicker',
			'timepicker', */
			//'datetimepicker',
			//'currency',
			//'ckeditor',
			//'modal_detail',
			'form_event',
			'captcha',
			// 'addrow', 
		);

		$data['CONTENT_TITLE'] = str_uri(urinext('content'),1);
		$data['CONTENT'] = '';
		$data['component'] = 'card';
		
		$data['url'] = base_url().'pages/content/'.urinext('content').'/';
		$data['add'] = 'Add <a href="'.$data['url'].'add" class="btn btn-primary"><i class="fa fa-plus"></i></a>';
		$data['back'] = 'Back <a href="javascript:history.go(-1)" class="btn btn-primary"><i class="fa fa-arrow-left"></i></a>';

		return $data;
	}

	public function data(){
		$data = array();
		$data = session_check();
		//level_check($data['sLevel'],'1',1);

		$data = $this->start();
		$data['ACTION'] = 'data';

		$ptitle = array('Backup','Restore');

		$head = '
		<a href="'.$data['url'].'backup" class="btn btn-primary"><i class="fa fa-database"></i> Download Database</a>';

		$body = '
		<form action="'.$data['url'].'restore" method="post" id="commentForm" class="form-horizontal cmxform" enctype="multipart/form-data">
			<div class="form-group row">
				<label class="control-label col-sm-3">File SQL Database <span style="color: red;">*</span></label>
				<div class="col-sm-9"><input type="file" class="form-control" name="file_database" id="file_database" accept=".sql" required>
					<span id="file_database_message" style="color: #A00;"><span>
				</div>
			</div><br><br>
			<div class="form-group row">
				<label class="control-label col-sm-3"></label>
				<div class="col-sm-9">
					<button type="submit" class="btn btn-primary" id="btnSubmit" name="btnSubmit">Submit</button>
				</div>
			</div>
		</form>';

		$pbody = array($head,$body);
		$data['CONTENT'] = content($ptitle,$pbody,$data['component']);
		return $data;
	}

	public function backup(){
		$datetime = date('Y-m-d-H-i-s');

		$prefs = array(
			'tables'        => array(),   								// Array of tables to backup.
			'ignore'        => array(),                     			// List of tables to omit from the backup
			'format'        => 'txt',                       			// gzip, zip, txt
			'filename'      => 'int_transaction_'.$datetime.'.sql',     // File name - NEEDED ONLY WITH ZIP FILES
			'add_drop'      => TRUE,                        			// Whether to add DROP TABLE statements to backup file
			'add_insert'    => TRUE,                        			// Whether to add INSERT data to backup file
			'newline'       => "\n"                         			// Newline character used in backup file
		);
		$this->load->dbutil();
		$backup = $this->dbutil->backup($prefs);


		$this->load->helper('file');
		write_file('./database/backup/int_transaction_'.$datetime.'.sql', $backup);

		$this->load->helper('download');
		force_download('int_transaction_'.$datetime.'.sql', $backup);

	}

	public function restore(){
		$file = basename($_FILES['file_database']['name']);

		$explode = explode('.', $file);
		$ext = end($explode);

		if($ext=='sql'){
			$name = 'int_transaction.'.strtolower($ext);
			$tmpname = $_FILES['file_database']['tmp_name'];
			$path = 'database/restore/'.$name;
			$extension = array('sql');
			if(in_array(strtolower($ext), $extension)){
				$upload = move_uploaded_file($tmpname, $path);

				if($upload){
					$isi_file = file_get_contents($path);
					$string_query = rtrim($isi_file,'\n');
					$array_query = explode(';', $string_query);
			
					$tables = $this->db->list_tables();
			
					foreach ($tables as $i => $r){
						$this->db->query('DROP TABLE IF EXISTS '.$r);
					}
			
					foreach($array_query as $i => $r){
						if($i != array_key_last($array_query)){
							$this->db->query($r);
						}
					}

					echo '
					<script>
						window.alert("Success !!!");
						window.location=("'.base_url().'pages/content/database");
					</script>';
					exit();
				}
			}
		}

		redirect(base_url().'pages/content/database/');
	}
}