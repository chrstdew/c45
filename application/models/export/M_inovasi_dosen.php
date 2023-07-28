<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_inovasi_dosen extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = $this->start();

		$data['title'][1] = 'Tanggal '.date_id($data['date1']).' s/d '.date_id($data['date2']);
		$data['file_name'] = 'Inovasi_Dosen_Tetap';

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

		$condition = "";

		$data['date1'] = date('Y-m-d');
		$data['date2'] = date('Y-m-d');
		if(isset($_POST['date1']) && isset($_POST['date2'])){
			$data['date1'] = date_en($_POST['date1']);
			$data['date2'] = date_en($_POST['date2']);

			$condition .= " AND tgl_mulai BETWEEN '$data[date1]' AND '$data[date2]'";
		}

		$data['id_prodi'] = '';
		if(isset($_POST['id_prodi'])){
			$id_prodi = $_POST['id_prodi'];

			if($id_prodi!=''){
				$condition .= " AND id_prodi='$id_prodi'";
			}
		}

		$data['table'] = "inovasi_dosen";
		$data['field'] = "
		tgl_mulai,
		nama_inventor,
		(SELECT nama FROM prodi WHERE $data[table].id_prodi=prodi.id_prodi) as prodi,
		judul_inovasi,
		status_komersialisasi";
		$data['condition'] = "WHERE flag_aktif='1' $condition ORDER BY created DESC";
		$data['fn'] = array('Tgl Mulai','Nama Inventor','Prodi','Judul Inovasi','Status Komersialisasi');
		$data['width'] = array('5%','12%','25%','18%','25%','15% ');
		$data['start'] = 0;
		
		$data['orientation'] = 'P';
		$data['format'] = 'A4';
		$data['font_size'] = 10;

		$data['title'][0] = '
		Inovasi Dosen Tetap';

		return $data;
	}
}