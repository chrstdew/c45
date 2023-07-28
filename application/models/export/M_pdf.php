<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pdf extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = $this->start();
		//$periode = $this->input->post('prd');
		$data['title'][1] = 'Tahun ';
		$data['file_name'] = 'REPORT';

		/*$data['html'] = report($data['table'],
						$data['field'],
						$data['condition'],
						$data['fn'],$data['start'],$data['width'],$data['title']);*/

		$r = select2($data['table'],$data['field'],"WHERE id_$data[table]='$data[id]'");
		$k = select2("kapasitas","*","WHERE id_kapasitas='$r[id_kapasitas]'");
		$u = select2("umpan","*","WHERE id_umpan='$r[id_umpan]'");
		$klm = select2("kolam","*","WHERE id_kolam='$k[id_kolam]'");
		$user = select2("user","*","WHERE id_user='$r[id_user]'");

		$data['html'] = '
		<table width="100%" style="border: 2px solid black; width: 14cm; font-family: arial; font-size: 12pt; " border="0" cellpadding="1">
			<tr>
				<td style="font-size: 14pt; font-weight: bold; text-align: center; padding-top: 15px">
					<img src="'.base_url().'img/logo.png" width="100" height="100">
				</td>
			</tr>
			<tr>
				<td style="font-size: 14pt; font-weight: bold; text-align: center">
					BUKTI PENYEWAAN
					<hr style="border: 1px solid black">
				</td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td>
					<table width="100%" cellspacing="0" cellpadding="2" border="0">
						<tr>
							<td width="20%"></td>
							<td width="30%">ID Penyewaan</td>
							<td width="5%">:</td>
							<td width="45%">'.$r['id_penyewaan'].'</td>
						</tr>
						<tr>
							<td></td>
							<td>Nama</td>
							<td>:</td>
							<td>'.$user['fullname'].'</td>
						</tr>
						<tr>
							<td></td>
							<td>No. HP</td>
							<td>:</td>
							<td>'.$user['no_hp'].'</td>
						</tr>
						<tr>
							<td></td>
							<td>Tgl Penyewaan</td>
							<td>:</td>
							<td>'.date_id2($r['tgl_penyewaan']).'</td>
						</tr>
						<tr>
							<td></td>
							<td>Jam Datang</td>
							<td>:</td>
							<td>'.$r['jam_datang'].'</td>
						</tr>
						<tr>
							<td></td>
							<td>No. Kursi</td>
							<td>:</td>
							<td>'.$k['nama'].'</td>
						</tr>
						<tr>
							<td></td>
							<td>Umpan</td>
							<td>:</td>
							<td>'.$u['nama'].'</td>
						</tr>
						<tr>
							<td></td>
							<td>Jumlah</td>
							<td>:</td>
							<td>'.$r['jumlah'].'</td>
						</tr>
						<tr>
							<td></td>
							<td>Harga Umpan</td>
							<td>:</td>
							<td>'.currency($r['harga_umpan']).'</td>
						</tr>
						<tr>
							<td></td>
							<td>Harga Tiket</td>
							<td>:</td>
							<td>'.currency($r['harga_tiket']).'</td>
						</tr>
						<tr>
							<td></td>
							<td>Total</td>
							<td>:</td>
							<td>'.currency($r['total']).'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
		</table>';

		$data['file_name'] = 'No Antrian';
    	
		return $data;
	}

	public function start(){
		$data = array();
		$data = session_check();
		//level_check($data['sLevel'],'1',1);

		$data['id'] = '';
		if(isset($_GET['id'])){
			$data['id'] = $_GET['id'];
		}

		$data['table'] = "penyewaan";
		$data['field'] = "*";
		$data['condition'] = "";
		$data['fn'] = array('Username','Password','Fullname');
		$data['width'] = array('5%','30%','35%','30%');
		$data['start'] = 0;
		
		$data['orientation'] = 'P';
		$data['format'] = 'A4';
		$data['font_size'] = 10;

		$data['title'][0] = '
		Bukti Penyewaan';

		return $data;
	}
}