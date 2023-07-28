<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_report extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = $this->start();
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
			$where .= " AND DATE(date) BETWEEN '$date1' AND '$date2'";
		}

		$data['table'] = "orders";
		$data['field'] = "
		(SELECT name FROM customer WHERE $data[table].id_customer=customer.id_customer) as customer,
		date,
		(SELECT name FROM service WHERE $data[table].id_service=service.id_service) as service,
		(SELECT name FROM day WHERE $data[table].id_day=day.id_day) as day,
		kg,
		total";
		$data['condition'] = "WHERE 1 $where ORDER BY created DESC";
		$data['fn'] = array('Customer','Date','Service','Day','Kg','Total');
		$data['width'] = array('7%','20%','13%','20%','10%','10%','20%');
		$data['start'] = 0;
		
		$data['orientation'] = 'P';
		$data['format'] = 'A4';
		$data['font_size'] = 12;

		$data['title'][0] = 'Report Income';
		$data['title'][1] = date_id2($date1).' s/d '.date_id2($date2);

		return $data;
	}
}