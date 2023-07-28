<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_inovasi_perusahaan extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = $this->start();

		$data['title'][1] = 'Tanggal '.date_id($data['date1']).' s/d '.date_id($data['date2']);
		$data['file_name'] = 'Perusahaan_Spin_Off';

		$data['html'] = report($data['table'],
						$data['field'],
						$data['condition'],
						$data['fn'],$data['start'],$data['width'],$data['title']);

		return $data;
	}

	public function start(){
		$data = array();
		$data = session_check();
		//level_check($data['sLevel'],'1',1);

		$data['date1'] = date('Y-m-d');
		$data['date2'] = date('Y-m-d');
		if(isset($_POST['date1']) && isset($_POST['date2'])){
			$data['date1'] = date_en($_POST['date1']);
			$data['date2'] = date_en($_POST['date2']);
		}

		$data['table'] = "inovasi_perusahaan";
		$data['field'] = "
		tanggal_mou,
		masa_berlaku,
		nama_perusahaan,
		nama_pemilik,
		bidang_usaha";
		$data['condition'] = "WHERE flag_aktif='1' AND tanggal_mou BETWEEN '$data[date1]' AND '$data[date2]' ORDER BY created DESC";
		$data['fn'] = array('Tgl MOU','Masa Berlaku','Nama Perusahaan','Nama Pemilik','Bidang Usaha');
		$data['width'] = array('5%','12%','25%','18%','25%','15% ');
		$data['start'] = 0;
		
		$data['orientation'] = 'P';
		$data['format'] = 'A4';
		$data['font_size'] = 10;

		$data['title'][0] = '
		Perusahaan Spin Off';

		return $data;
	}
}