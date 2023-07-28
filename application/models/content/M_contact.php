<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_contact extends CI_Model {
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
		<div class="page-wrapper contact-us">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title-set">
							<label>Get in</label>
							<h2>Touch with us</h2>
							<p>Fill up the form and our team will get in touch with you.</p>
						</div>
					</div>

					<div class="col-lg-5 col-sm-12 col-12">
						<div class="col-lg-12">
							<div class="aboutus-content abou1">
								<div class="aboutus-content-img">
									<label><i class="fas fa-phone-alt"></i></label>
								</div>
								<div class="aboutus-contents">
									<label> 021 6985426351</label>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="aboutus-content abou2">
								<div class="aboutus-content-img">
									<label><i class="fas fa-map-marker-alt"></i></label>
								</div>
								<div class="aboutus-contents">
									<label> Jakarta </label>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="aboutus-content abou3">
								<div class="aboutus-content-img">
									<label><i class="fas fa-envelope"></i></label>
								</div>
								<div class="aboutus-contents">
									<label>
										<a
											href="../cdn-cgi/l/email-protection.html"
											class="__cf_email__"
											data-cfemail="3e575058517e4c5b5f525b4d4a5f4a5b105d5153"
											>cbr_property@gmail.com</a
										>
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-7 col-sm-12 col-12">
						<div class="row">
							<form>
								<div class="col-md-12">
									<div class="white-box">
										<h2 class="sub-title">Contact Information</h2>
										<div class="row">
											<div class="form-group col-md-12">
												<label>Name</label>
												<input type="text" class="form-control" />
											</div>
											<div class="form-group col-md-12">
												<label>Email</label>
												<input type="email" class="form-control" />
											</div>
											<div class="form-group col-md-12">
												<label>Contact Number</label>
												<input type="text" class="form-control" />
											</div>
											<div class="form-group col-md-12">
												<label>Message</label>
												<textarea class="form-control" rows="4"></textarea>
											</div>
										</div>
										<button class="btn price-btns mb-2 mt-3">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="map-section">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d374245.9406154019!2d-83.66430526491041!3d42.87714108114742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88247e7d2eaff837%3A0x582fe80c5f61f31c!2s300%20S%20Main%20St%20%23208%2C%20Davison%2C%20MI%2048423%2C%20USA!5e0!3m2!1sen!2sin!4v1634188405768!5m2!1sen!2sin"
				aria-hidden="false"
				tabindex="0"
			></iframe>
		</div>';

		$data['CONTENT'] = $body;
		return $data;
	}
}