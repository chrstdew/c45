<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendaftaran_berobat extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function index(){

	}

	public function start(){
		$data = array();
		$data = session_check();
		$data['table'] = str_uri(urinext('html'),2);
		$data['field'] = "*";
		$data['condition'] = "ORDER BY created DESC";
		$data['field_control'] = '';
		$data['start'] = 1;
		$data['extra'] = array(
			0=>'',
			1=>'',
		);
		return $data;
	}

	public function detail(){
		if($_POST){
			$data = $this->start();
			$id = $_POST['id'];

	        $values = select2($data['table'],$data['field'],"WHERE id_$data[table]='$id'");
			$body = view(
				$data['table'],
				$data['field'],
				$data['condition'],
				$data['field_control'],
				$data['start'],
				$values,
				$data['extra']
			);

			$output = '
			<div class="modal-body">
				'.$body.'
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>';
			return $output;
		}
	}

	public function select_list(){
		if($_POST){
			$data = $this->start();
			$id = date_en($_POST['id']);
			$val = $_POST['val'];

			$output = '<option value="">Select ...</option>';
			$select_list = select("jadwal_dokter","*","WHERE tanggal='$id' GROUP BY id_dokter");

			foreach ($select_list as $i => $r) {
				$r2 = select2("dokter","*","WHERE id_dokter='$r[id_dokter]'");

				$output .= '<option value="'.$r['id_dokter'].'">'.$r2['nama'].'</option>';
			}

			return $output;
		}
	}

	public function select_list2(){
		if($_POST){
			$data = $this->start();
			$id = date_en($_POST['id']);
			$val = $_POST['val'];

			$output = '<option value="">Select ...</option>';
			$select_list = select("jadwal_dokter","*","WHERE tanggal='$id' AND id_dokter='$val'");

			foreach ($select_list as $i => $r) {
				$output .= '<option value="'.$r['jam_mulai'].' - '.$r['jam_selesai'].'">'.$r['jam_mulai'].' - '.$r['jam_selesai'].'</option>';
			}

			return $output;
		}
	}

	public function unique(){
		if($_POST){
			$data = $this->start();
			$val = $_POST['val'];

			$r = select2(strtolower($data['table']),$data['field'],"WHERE username='$val'");
			$output = '';
			if($r!=NULL){
				$output = 'This has already been used';
			}

			return $output;
		}
	}

	public function append(){
		if($_POST){
			$output = '
			<div class="form-group row">
				<label class="control-label col-lg-3">Metadata :</label>
				<div class="col-lg-3">
					<input type="text" class="form-control" name="metadata[]" id="metadata[]" maxlength="200" value="" onkeypress="return string(event)" required>
				</div>
				<label class="control-label col-lg-2">Type :</label>
				<div class="col-lg-3">
					<select class="form-control select2" data-placeholder="Select ..." name="type[]" id="type[]"  required>
						<option value="">Select ...</option>';
						$type = array('text','number','date','select','file');
						foreach($type as $i => $r){
							$output .= '
							<option value="'.$r.'" >'.$r.'</option>';
						}
					$output .= '
					</select>
				</div>
				<div class="col-lg-1">
					<a href="javascript:void(0)" class="btn btn-danger remove"><span class="fa fa-trash" aria-hidden="true"></span></a>
				</div>
			</div>';

			return $output;
		}
	}

	public function html(){
		if($_POST){
			$id = $_POST['id'];

			$output = '';
			if($id==2){
				$output .= '
				<div class="form-group">
					<input type="text" class="form-control" name="name" id="name" placeholder="Name" onkeypress="return string(event)" required>
				</div>';
			}
			elseif($id==5){
				$output .= '
				<div class="form-group">
					<input type="text" class="form-control" name="name" id="name" placeholder="Name" onkeypress="return string(event)" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="type" id="type" placeholder="Type" onkeypress="return string(event)" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="symptoms" id="symptoms" placeholder="Symptoms" onkeypress="return string(event)" required>
				</div>';
			}

			return $output;
		}
	}
}