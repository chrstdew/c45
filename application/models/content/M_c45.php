<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Algorithm\C45\C45;
use Algorithm\C45\DataInput;

class M_c45 extends CI_Model {
	public function __construct(){
		parent::__construct();

		require APPPATH.'libraries/c45/src/DataInput/DataInput.php';	
		require APPPATH.'libraries/c45/src/C45.php';
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
			// 'venobox',
			'form_validation',
			'select2',
			/* 'datepicker',
			'timepicker', */
			//'datetimepicker',
			'currency',
			// 'ckeditor',
			//'modal_detail',
			'form_event',
			'captcha',
			// 'addrow', 
		);

		$data['CONTENT_TITLE'] = str_uri(urinext('content'),1);
		$data['CONTENT'] = '';
		$data['component'] = 'card';
		$data['table'] = "penilaian";
		$data['field'] = "*";
		$data['condition'] = "ORDER BY created";
		$data['field_control'] = array(
			/* 'flag_aktif'=>array(
				'replace'=>'',
			), */
		);
		$data['start'] = 1;
		$data['extra'] = array(
			0=>'',
			1=>'',
		);
		$data['flag'] = array(
			'flag_aktif'=>'1',
		);
		$data['action'] = array(
			//'modal_detail'=>'user/detail',
			'position'=>'right',
			//'report'=>'',
			//'view'=>'',
			'edit'=>'',
			'delete'=>'',
			/* 'extra'=>array(
				'name'=>'Extra',
				'link'=>base_url().'pages/content/'.urinext('content').'/view',
				'class'=>'primary',
				'event'=>'onClick="return confirm(\'You Sure ... ?\')"',
				'icon'=>'eye',
			), */
		);
		$data['url'] = base_url().'pages/content/'.urinext('content').'/';
		$data['add'] = 'Add <a href="'.$data['url'].'add" class="btn btn-primary"><i class="fa fa-plus"></i></a>';
		$data['back'] = 'Back <a href="javascript:history.go(-1)" class="btn btn-primary"><i class="fa fa-arrow-left"></i></a>';

		# load table kriteria
		$data['kr'] = select("kriteria","*","WHERE flag_aktif='1' ORDER BY created ASC");
		# load table alternatif
		$data['alt'] = select("pegawai","*","WHERE EXISTS (SELECT * FROM $data[table] WHERE pegawai.id_pegawai=$data[table].id_pegawai)");
		return $data;
	}

	public function data(){
		$data = array();
		$data = session_check();
		// level_check($data['sLevel'],'1',1);

		$data = $this->start();
		$data['ACTION'] = 'data';

		$ptitle = array('');

		$body = '
		<form action="'.base_url().'pages/content/'.urinext('content').'/result" method="post" id="commentForm" class="form-horizontal cmxform" enctype="multipart/form-data">
			<div class="form-group row">
				<label class="control-label col-md-5">Pegawai :</label>
				<div class="col-md-5">
					<select class="form-control select2" data-placeholder="Select ..." name="alt" id="alt" required>
						<option value="">Select ...</option>';
						# load table alternatif
						$sl = select("pegawai","*","WHERE NOT EXISTS (SELECT * FROM $data[table] WHERE pegawai.id_pegawai=$data[table].id_pegawai)");
						# Melakukan perulangan sebanyak data alternatif yang ada
						foreach ($sl as $i => $r) {
		                  	$body .= '<option value="'.$r['id_pegawai'].'">'.$r['nama'].'</option>';
		                }
	            		$body .= '
            		</select>
				</div>
			</div>
			<br><h4 style="font-weight: bold; color: red;">Kriteria</h4>';
			# Melakukan perulangan sebanyak data kriteria yang ada
			foreach ($data['kr'] as $i => $r) {
				if($r['id_kriteria']!='K06'){
					$body .= '
					<div class="form-group row">
						<label class="control-label col-md-5">'.$r['nama'].' :</label>
						<div class="col-md-5">
							<select class="form-control select2" data-placeholder="Select ..." name="k_'.$i.'" id="k_'.$i.'" required>
								<option value="">Select ...</option>';
								$sk = select("sub_kriteria","*","WHERE flag_aktif='1' AND id_kriteria='$r[id_kriteria]' ORDER BY created");
								foreach ($sk as $j => $r2) {
									$body .= '<option value="'.$r2['id_sub_kriteria'].'">'.$r2['nama'].' ('.$r2['keterangan'].')</option>';
								}
								$body .= '
							</select>
						</div>
					</div>';
				}
			}
		$body .= '
			<div class="form-group row">
				<label class="control-label col-sm-5"></label>
				<div class="col-sm-5">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>';

		$pbody = array($body);
		$data['CONTENT'] = content($ptitle,$pbody,$data['component']);
		return $data;
	}

	public function result(){
		$data = array();
		$data = session_check();
		// level_check($data['sLevel'],'1',1);

		$data = $this->start();
		$data['ACTION'] = 'result';

		$ptitle = array('');

		$body = '';

		$c45 = new Algorithm\C45();
		$input = new Algorithm\C45\DataInput;

		$database = array();
		foreach ($data['alt'] as $i => $r) {
			$kriteria = array();
			foreach ($data['kr'] as $j => $r2) {
				$p = select2($data['table'],"*","WHERE id_pegawai='$r[id_pegawai]' AND id_kriteria='$r2[id_kriteria]' ORDER BY created");
				$sk = select2("sub_kriteria","*","WHERE id_sub_kriteria='$p[id_sub_kriteria]'");
				$kriteria[$r2['nama']] = $sk['nama'];
			}

			array_push($database, $kriteria);
		}

		$attributes = array();
		foreach ($data['kr'] as $i => $r) {
			$attributes[] = $r['nama'];
		}

		$input->setData($database);
		$input->setAttributes($attributes);

		// Initialize C4.5
		$c45->c45 = $input; // Set input data
		$k = select2("kriteria","*","WHERE id_kriteria='K06'");
		$c45->setTargetAttribute($k['nama']);
		$initialize = $c45->initialize(); // initialize

		// Build Output
		$buildTree = $initialize->buildTree(); // Build tree
		$arrayTree = $buildTree->toArray(); // Set to array
		$jsonTree = $buildTree->toJson(); // Set to json
		$stringTree = $buildTree->toString(); // Set to string

		$arrayTreeString = print_r($arrayTree, true);

		$new_data = array();
		foreach ($data['kr'] as $i => $r) {
			if($r['id_kriteria']!='K06'){
				$id_sub_kriteria = $this->input->post('k_'.$i);
				$sk = select2("sub_kriteria","*","WHERE id_sub_kriteria='$id_sub_kriteria'");
				$new_data[$r['nama']] = $sk['nama'];
			}
		}

		$alt = $this->input->post('alt');
		$hasil = $c45->initialize()->buildTree()->classify($new_data);

		$body = '
		<span style="font-size: 30px;">
			Hasil Akhir : <b style="color: green;">'.$hasil.'</b>
		</span>';

		$values = "";
		foreach ($data['kr'] as $i => $r) {
			$id_new = generate_id($data['table']);
			$created = date('Y-m-d H:i:s');
			if($r['id_kriteria']!='K06'){
				$id_sub_kriteria = $this->input->post('k_'.$i);
			}
			else{
				$r2 = select2("sub_kriteria","*","WHERE id_kriteria='$r[id_kriteria]' AND nama='$hasil'");
				$id_sub_kriteria = $r2['id_sub_kriteria'];
			}

			$values .= "('$id_new','$alt','$r[id_kriteria]','$id_sub_kriteria','$created'),";
		}
		
		$cek = select2($data['table'],"*","WHERE id_pegawai='$alt'");

		if($cek!=NULL){
			delete($data['table'],"WHERE id_pegawai='$alt'");
		}

		insert($data['table'],"",rtrim($values,','));
		
		/* $body .= '
		<hr>
		<pre>
			'.$arrayTreeString.'
		</pre>'; */

		$pbody = array($body);
		$data['CONTENT'] = content($ptitle,$pbody,$data['component']);
		return $data;
	}

	public function result_c45(){
		$data = array();
		$data = session_check();
		// level_check($data['sLevel'],'1',1);

		$data = $this->start();
		$data['ACTION'] = 'result';

		$ptitle = array('');

		$body = '';

		$c45 = new Algorithm\C45();
		$input = new Algorithm\C45\DataInput;

		$database = array(
			array(
				"OUTLOOK" => "Sunny",
				"TEMPERATURE" => "Hot",
				"HUMIDITY" => "High",
				"WINDY" => "False",
				"PLAY" => "No"
			),
			array(
				"OUTLOOK" => "Sunny",
				"TEMPERATURE" => "Hot",
				"HUMIDITY" => "High",
				"WINDY" => "True",
				"PLAY" => "No"
			),
			array(
				"OUTLOOK" => "Cloudy",
				"TEMPERATURE" => "Hot",
				"HUMIDITY" => "High",
				"WINDY" => "False",
				"PLAY" => "Yes"
			),
			array(
				"OUTLOOK" => "Rainy",
				"TEMPERATURE" => "Mild",
				"HUMIDITY" => "High",
				"WINDY" => "False",
				"PLAY" => "Yes"
			),
			array(
				"OUTLOOK" => "Rainy",
				"TEMPERATURE" => "Cool",
				"HUMIDITY" => "Normal",
				"WINDY" => "False",
				"PLAY" => "Yes"
			),
			array(
				"OUTLOOK" => "Rainy",
				"TEMPERATURE" => "Cool",
				"HUMIDITY" => "Normal",
				"WINDY" => "True",
				"PLAY" => "No"
			),
			array(
				"OUTLOOK" => "Cloudy",
				"TEMPERATURE" => "Cool",
				"HUMIDITY" => "Normal",
				"WINDY" => "True",
				"PLAY" => "Yes"
			),
			array(
				"OUTLOOK" => "Sunny",
				"TEMPERATURE" => "Mild",
				"HUMIDITY" => "High",
				"WINDY" => "False",
				"PLAY" => "No"
			),
			array(
				"OUTLOOK" => "Sunny",
				"TEMPERATURE" => "Cool",
				"HUMIDITY" => "Normal",
				"WINDY" => "False",
				"PLAY" => "Yes"
			),
			array(
				"OUTLOOK" => "Rainy",
				"TEMPERATURE" => "Mild",
				"HUMIDITY" => "Normal",
				"WINDY" => "False",
				"PLAY" => "Yes"
			),
			array(
				"OUTLOOK" => "Sunny",
				"TEMPERATURE" => "Mild",
				"HUMIDITY" => "Normal",
				"WINDY" => "True",
				"PLAY" => "Yes"
			),
			array(
				"OUTLOOK" => "Cloudy",
				"TEMPERATURE" => "Mild",
				"HUMIDITY" => "High",
				"WINDY" => "True",
				"PLAY" => "Yes"
			),
			array(
				"OUTLOOK" => "Cloudy",
				"TEMPERATURE" => "Hot",
				"HUMIDITY" => "Normal",
				"WINDY" => "False",
				"PLAY" => "Yes"
			),
			array(
				"OUTLOOK" => "Rainy",
				"TEMPERATURE" => "Mild",
				"HUMIDITY" => "High",
				"WINDY" => "True",
				"PLAY" => "No"
			)
		);

		// Initialize Data
		$input->setData($database); // Set data from array
		$input->setAttributes(array('OUTLOOK', 'TEMPERATURE', 'HUMIDITY', 'WINDY', 'PLAY')); // Set attributes of data

		// Initialize C4.5
		$c45->c45 = $input; // Set input data
		// $c45->setTargetAttribute('PLAY'); // Set target attribute
		$c45->setTargetAttribute('Perilaku');
		$initialize = $c45->initialize(); // initialize

		// Build Output
		$buildTree = $initialize->buildTree(); // Build tree
		$arrayTree = $buildTree->toArray(); // Set to array
		$jsonTree = $buildTree->toJson(); // Set to json
		$stringTree = $buildTree->toString(); // Set to string

		echo "<pre>";
		print_r ($arrayTree);
		echo "</pre>";

		$new_data = array(
			'OUTLOOK' => 'Sunny',
			'TEMPERATURE' => 'Hot',
			'HUMIDITY' => 'High',
			'WINDY' => FALSE
		);
		$body = $stringTree;

		$body .= '<hr>'.$c45->initialize()->buildTree()->classify($new_data);

		$pbody = array($body);
		$data['CONTENT'] = content($ptitle,$pbody,$data['component']);
		return $data;
	}

	public function action(){
		$data = array();
		$data = session_check();
		//level_check($data['sLevel'],'1',1);
		
		$data = $this->start();
		$action = string(urinext('action'));
		if(!empty($action)){
			$act = urinext('action');
			$to = 'data';
			$id_new = auto_id($data['table']);
			// $id_new = generate_id($data['table']);

			$input = '';
			# Jika action adalah add atau edit
			if($act=='add' || $act=='edit'){
				$input = array();
				/* $input['id_user'] = $this->input->post('id_user');
				$input['username'] = $this->input->post('username');
				$input['password'] = $this->input->post('password'); */
			}

			$crud = action($data['table'],$data['field'],$id_new,$input,$data['start'],$act);
			$message[0] = 'Success';
			$message[1] = 'Failed';
			message($to,$crud,$type=0,$message);
		}
	}
}