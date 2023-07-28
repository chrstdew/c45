<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->sLogin = $this->session->userdata('ei_login');
		$this->sId = $this->session->userdata('ei_id');
		$this->sLevel = $this->session->userdata('ei_level');
		$this->sUserTable = $this->session->userdata('ei_user_table');
		$this->sPublic = $this->session->userdata('ei_public');
	}

	public function index($themes,$app_name){
		$data = array();
		$data = session_check();
		//level_check($data['sLevel'],'1,2,3',1);

		# Tentukan assets yang akan digunakan
		$data['ASSETS'] = array(
			'datatables',
			//'form_validation',
			//'select2',
			//'datepicker',
			//'timepicker',
			//'datetimepicker',
			// 'currency',
			// 'ckeditor',
			// 'modal_detail',
			'form_event',
			// 'captcha',
			// 'addrow',
			//'countdown',
			//'venobox',
			//'grafik',
		);
		//$data['CONTENT_TITLE'] = str_uri(urinext('content'),1);
		$data['CONTENT_TITLE'] = 'Home';
	    $data['ACTION'] = '';
		$ptitle = array('');

		if($themes=='limitless'){
			/* $body = '
			<center>
				<img src="'.base_url().''.base_url().'themes/'.$themes.'/img/logo.png" class="img-responsive" alt="Logo" width="200px" height="200px"><br><br>
				<h2>
					'.$app_name.'
				</h2>
				<br>
				<br>
			</center>'; */
	
			# Tampilan halaman home
			$body = '
			<div class="row">
				<div class="col-lg-12">
					<center>';
	
						$body .= '
						<h2 style="font-size: 25px; font-weight: bold; background-color: #c7c3c3; padding: 12px; width: 300px; border-radius: 25px;">
							<marquee1>WELCOME</marquee1>
						</h2>';
	
						$body .= '
						<h2 style="font-size: 25px; font-weight: bold;">
							'.$app_name.'
						</h2>
						<br>';

						$body .= '
						<img src="'.base_url().'img/logo.png" class="img-responsive" alt="Logo" width="250px" height="250px">';

						$body .= '
					</center>
				</div>
			</div>';
	
			/* if($this->sLogin==TRUE && in_array($this->sLevel,array('1','2'))){
				$r1 = select2("kolam","COUNT(*) as jml","");
				$r2 = select2("umpan","COUNT(*) as jml","");
				$r3 = select2("penyewaan","COUNT(*) as jml","");
	
				if($this->sLevel==1){
					$body .= '
					<div class="row">
						<div class="col-lg-4">
							<div class="card bg-teal-400">
								<div class="card-body">
									<div class="d-flex">
										<h3 class="font-weight-semibold mb-0">
											<i class="fa fa-table"></i> <span id="card_1">'.$r1['jml'].'</span>
										</h3>
									</div>
									
									<div>
										Total Kolam
										<div class="font-size-sm opacity-75"></div>
									</div>
								</div>
								<div class="card-footer text-center">
									<a href="'.base_url().'pages/content/kolam/data" class="btn btn-default">KLIK <i class="fa fa-arrow-right"></i></a>  
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card bg-pink-400">
								<div class="card-body">
									<div class="d-flex">
										<h3 class="font-weight-semibold mb-0">
										<i class="fa fa-table"></i> <span id="card_2">'.$r2['jml'].'</span>
									</h3>
									</div>
									
									<div>
										Total Umpan
										<div class="font-size-sm opacity-75"></div>
									</div>
								</div>
								<div class="card-footer text-center">
									<a href="'.base_url().'pages/content/umpan/data" class="btn btn-default">KLIK <i class="fa fa-arrow-right"></i></a>  
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card bg-purple-400">
								<div class="card-body">
									<div class="d-flex">
										<h3 class="font-weight-semibold mb-0">
											<i class="fa fa-edit"></i> <span id="card_3">'.$r3['jml'].'</span>
										</h3>
									</div>
									
									<div>
										Total Penyewaan
										<div class="font-size-sm opacity-75"></div>
									</div>
								</div>
								<div class="card-footer text-center">
									<a href="'.base_url().'pages/content/penyewaan/data" class="btn btn-default">KLIK <i class="fa fa-arrow-right"></i></a>  
								</div>
							</div>
						</div>
					</div>';
				}
			} */
		}
		else{
			$data['CONTENT_TITLE'] = '';
		    $data['ACTION'] = '';
			$ptitle = array('');

			$row = select("property","*","WHERE flag_aktif='1' ORDER BY created DESC");

			$count = 0;
			if($row!=NULL){
				$count = count($row);
			}

			$config = array();
			$config['base_url'] = base_url().'pages/content/home/p';
			$config['total_rows'] = $count/8;
			$config['per_page'] = 1;
			$config['cur_page'] = 0;

			$config['cur_tag_open'] = '<li class="page-item  active"><span class="page-link">';
			$config['cur_tag_close'] = '</span></li>';

			$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
			$config['prev_tag_close'] = '</span></li>';

			$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close'] = '</span></li>';

			$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
			$config['next_tag_close'] = '</span></li>';

			$config['first_link'] = '<li class="page-item page-link">First</li>';
			$config['last_link'] = '<li class="page-item page-link">Last</li>';

			$config['reuse_query_string'] = TRUE;

			// $config['page_query_string'] = TRUE;
			$config['use_page_numbers'] = TRUE;

			$this->pagination->initialize($config);

			
			$page = urinext('p');
			// $page = $this->input->get('per_page');
			if(empty($page)){
				$page = 1;
			}

			$items_per_page = 8;
			$offset = ($page - 0) * $items_per_page;

			$body = '
			<div class="location-set">
				<div class="container1">
					<div class="title-set pt-0">
						<label>Find Our Property</label>
						<h2>Our Properties</h2>
						<p>
							Congue commodo ipsum, risus urna nisi. Primis velit turpis
							sollicitudin. Felis aptent sagittis aliquet turpis et tristique
						</p>
					</div>
					<div class="col-md-12">
						<div class="row justify-content-center">';
							// $property = select("property","*","WHERE flag_aktif='1' ORDER BY created DESC LIMIT $offset,$items_per_page");

							$property = select("property","*","WHERE flag_aktif='1' ORDER BY created DESC");
							$nk = cbr($property);
							$start = ($page - 1) * $items_per_page;
							$pagination = array_slice($nk, $start, $items_per_page, true);

							foreach($pagination as $i => $p){
								$r = select2("property","*","WHERE id_property='$i'");
								$body .= '
								<div class="col-lg-3 col-sm-6 col-12 d-flex">
									<div class="location-sets flex-fill">
										<div class="location-img-content">
											<a href="'.base_url().'pages/content/property/detail/id/'.$r['id_property'].'" target="_blank">
												<img
													src="'.base_url().'upload/property/img_property/'.$r['img_property'].'"
													class="propertimg"
													alt="Image"
												/>
											</a>';
											if(isset($_GET['search'])){
												$body .= '
												<div class="location-label2">
													<label>'.number_format($p,2).'</label>
												</div>';
											}
											$body .= '
											<div class="location-label">
												<label>'.$r['jenis'].'</label>
											</div>
										</div>
										<div class="location-details-content">
											<div class="propert-con" style="min-height: 180px">
												<label>'.$r['lokasi'].'</label>
												<span class="set-valu">'.$r['nama'].'</span>
												<p><span>Rp. </span>'.currency($r['harga']).'</p>
											</div>
											<div class="property-price">
												<ul>
													<li>
														<img src="'.base_url().'themes/'.$themes.'/assets/img/bed.png" alt="img" />
														<label>'.$r['kamar_tidur'].' Bed</label>
													</li>
													<li>
														<img src="'.base_url().'themes/'.$themes.'/assets/img/bath.png" alt="img" />
														<label>'.$r['kamar_mandi'].' Bath</label>
													</li>
													<li>
														<img src="'.base_url().'themes/'.$themes.'/assets/img/set.png" alt="img" />
														<label>'.$r['luas_tanah'].' m2</label>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>';
							}
						$body .= '
						</div>
						<div>
							<nav aria-label="Page navigation">
								<ul class="pagination">';

									/* $body .= '
									<li class="page-item disabled">
										<a class="page-link" href="#" aria-label="Previous">
											<i class="fas fa-chevron-left"></i>
										</a>
									</li>
									<li class="page-item active">
										<a class="page-link" href="#">1</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">2</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">3</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#" aria-label="Next">
											<i class="fas fa-chevron-right"></i>
										</a>
									</li>'; */

									$body .= '
									'.$this->pagination->create_links().'
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			
			<div class="choose-set">
				<div class="container">
					<div class="title-set pt-0">
						<label>Why Choose</label>
						<p>
							Lorem Ipsum is simply dummy text printing and type setting
							industry Lorem Ipsum been industry
						</p>
					</div>
					<div class="row">
						<div class="col-lg-3 col-sm-6 col-12 d-flex">
							<div class="choose-view flex-fill">
								<div class="choose-view-img">
									<img src="'.base_url().'themes/'.$themes.'/assets/img/choose1.png" alt="img" />
								</div>
								<div class="choose-view-content">
									<label>Trusted</label>
									<p>
										Lorem Ipsum is simply dummy text printing and type setting
										industry Lorem Ipsum been industry standard dummy text ever
										a galley.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12 d-flex">
							<div class="choose-view flex-fill">
								<div class="choose-view-img">
									<img src="'.base_url().'themes/'.$themes.'/assets/img/choose2.png" alt="img" />
								</div>
								<div class="choose-view-content">
									<label>Easy Finance</label>
									<p>
										Lorem Ipsum is simply dummy text printing and type setting
										industry Lorem Ipsum been industry standard dummy text ever
										a galley.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12 d-flex">
							<div class="choose-view flex-fill">
								<div class="choose-view-img">
									<img src="'.base_url().'themes/'.$themes.'/assets/img/choose3.png" alt="img" />
								</div>
								<div class="choose-view-content">
									<label>Support</label>
									<p>
										Lorem Ipsum is simply dummy text printing and type setting
										industry Lorem Ipsum been industry standard dummy text ever
										a galley.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12 d-flex">
							<div class="choose-view flex-fill">
								<div class="choose-view-img">
									<img src="'.base_url().'themes/'.$themes.'/assets/img/choose4.png" alt="img" />
								</div>
								<div class="choose-view-content">
									<label>Satisfaction </label>
									<p>
										Lorem Ipsum is simply dummy text printing and type setting
										industry Lorem Ipsum been industry standard dummy text ever
										a galley.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="why-choose-us">
				<div class="choose-bg">
					<div class="container">
						<div class="section-top-title text-center">
							<h2 class="section-title text-center">
								Be the first to see new properties
							</h2>
							<p class="text-center">
								Register with us to get instant property alerts as soon as a
								property hits Rightmove, save properties and searches,
								personalise content, and more...
							</p>
						</div>
					</div>
				</div>
			</div>';
		}

		// $pbody = array($body);
		// $data['CONTENT'] = content($ptitle,$pbody,'card');
		$data['CONTENT'] = $body;
		return $data;
	}
}