<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_export_excel extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = $this->start();
		$field_info = field_info($data['table'],$data['field'],$data['condition']);

		$fil_field_info = array_filter($field_info, function($r){ 
			return $r->name != 'id_'.$r->table && $r->name != 'flag_aktif' && $r->name != 'created' && $r->name != 'modified';
		});

    	$sheet = array('Data');
    	foreach ($sheet as $i => $r) {
    		if($i>0){
    			$data['PHPExcel']->createSheet($i);
    		}
    		
			$data['PHPExcel']->setActiveSheetIndex($i)->setTitle($r);

			foreach ($fil_field_info as $j => $r2) {
				if(!isset($data['field_control'][$r2->name]['name'])){
					//$name = ucwords(str_replace(array('_','id_'),' ',$r2->name));
					$name = $r2->name;
				}
				else{
					$name = $data['field_control'][$r2->name]['name'];
				}
				$data['PHPExcel']->getActiveSheet()
				->setCellValueByColumnAndRow(($j-1), 1, $name);
			}

			$d = select($data['table'],$data['field'],$data['condition']);
			foreach ($d as $j => $r2) {
				$r2 = array_values($r2);
				foreach ($fil_field_info as $k => $r3) {
					if(isset($data['field_control'][$r3->name]['column']) && isset($data['field_control'][$r3->name]['width'])){
						$data['PHPExcel']->getActiveSheet()
						->getColumnDimension($data['field_control'][$r3->name]['column'])->setWidth($data['field_control'][$r3->name]['width']);
					}

					$data['PHPExcel']->getActiveSheet()
					->setCellValueByColumnAndRow(($k-1), ($j+2), $r2[$k]);
				}
			}
    	}
		$data['PHPExcel']->setActiveSheetIndex(0);
    	
		return $data;
	}

	public function start(){
		$data = array();
		$data = session_check();
		level_check($data['sLevel'],'1',1);

		$data['table'] = '';
		if(isset($_GET['table'])){
			$data['table'] = $_GET['table'];
		}

		require('themes/assets/PHPExcel/PHPExcel/IOFactory.php');
		$data['PHPExcel'] = new PHPExcel();

		$data['field'] = "*";
		$data['condition'] = "ORDER BY created DESC";
		$data['field_control'] = array(
			/* 'id_user'=>array(
				'name'=>'ID User',
				'column'=>'A',
				'width'=>'50',
			), */
		);
		$data['file_name'] = 'Excel_'.ucwords(str_replace(array('_','id_'),' ',$data['table']));

		return $data;
	}
}