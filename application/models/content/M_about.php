<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_about extends CI_Model {
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
		//level_check($data['sLevel'],'1',1);

		# Tentukan assets yang akan digunakan
		$data['ASSETS'] = array(
			// 'datatables',
			// 'venobox',
			// 'form_validation',
			// 'select2',
			// 'datepicker',
			// 'timepicker',
			// 'datetimepicker',
			// 'currency',
			// 'ckeditor',
			// 'modal_detail',
			// 'form_event',
			// 'captcha',
			// 'addrow', 
		);

		$data['CONTENT_TITLE'] = str_uri(urinext('content'),1);
		$data['CONTENT'] = '';
		$data['component'] = 'card';
		$data['table'] = "info";
		$data['field'] = "*";
		$data['condition'] = "ORDER BY created DESC";
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
			'view'=>'',
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

		return $data;
	}

	public function data(){
		$data = array();
		$data = session_check();
		//level_check($data['sLevel'],'1',1);

		$data = $this->start();
		$data['ACTION'] = 'data';

		$body = '
		<div class="about-details ptb">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title-set">
							<label>About Realestate</label>
							<h2>We connect building with people</h2>
							<p>
								Congue commodo ipsum, risus urna nisi. Primis velit turpis
								sollicitudin. Felis aptent sagittis aliquet turpis et
								tristique montes vestibulum rutrum. Scelerisque viverra ac
								ridiculus enim.
							</p>
						</div>
						<div class="aboustusinfo">
							<div class="row justify-content-center">
								<div class="col-lg-4 col-sm-6 col-12">
									<div class="aboutus-content abou1">
										<div class="aboutus-content-img">
											<label><i class="far fa-smile"></i></label>
										</div>
										<div class="aboutus-contents">
											<h2>80,123</h2>
											<label> Happy Customers</label>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 col-12">
									<div class="aboutus-content abou2">
										<div class="aboutus-content-img">
											<label><i class="far fa-building"></i></label>
										</div>
										<div class="aboutus-contents">
											<h2>52 Million</h2>
											<label> Home Sales </label>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 col-12">
									<div class="aboutus-content abou3">
										<div class="aboutus-content-img">
											<label><i class="far fa-user"></i></label>
										</div>
										<div class="aboutus-contents">
											<h2>50003</h2>
											<label> Trusted Agents </label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="aboutusbannerimg">
				<img src="'.base_url().'themes/realmove/assets/img/about-img.jpg" alt="img" />
			</div>
		</div>';

		$data['CONTENT'] = $body;
		return $data;
	}
}