<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_report2 extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = $this->start();

		$data['title'][1] = '';
		$data['file_name'] = 'Report_PDF';

		$data['html'] = report(
			$data['table'],
			$data['field'],
			$data['condition'],
			$data['fn'],
			$data['start'],
			$data['width'],
			$data['title']
		); 

		return $data;
	}

	public function start(){
		$data = array();
		$data = session_check();
		//level_check($data['sLevel'],'1',1);

		$date1 = date_en($this->input->post('date1'));
		$date2 = date_en($this->input->post('date2'));
		$type = $this->input->post('type');

		$where = "";
		if($date1!="" && $date2!=""){
			$where .= " AND DATE(tanggal) BETWEEN '$date1' AND '$date2'";
		}

		$data['table'] = "keluar_ikan";
		$data['field'] = "
		tanggal,
		(SELECT nama FROM kolam WHERE $data[table].id_kolam=kolam.id_kolam) AS kolam,
		jumlah_ikan";
		$data['condition'] = "WHERE 1 $where ORDER BY created DESC";
		$data['fn'] = array('Tanggal','Kolam','Jumlah Ikan');
		$data['width'] = array('5%','15%','40%','40%');
		$data['start'] = 0;
		
		$data['orientation'] = 'P';
		$data['format'] = 'A4';
		$data['font_size'] = 12;

		$data['title'][0] = 'Laporan Keluar Ikan';

		return $data;
	}
}