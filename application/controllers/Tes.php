<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent:: __construct();
		
	}

	public function index(){
		/* $user = select("user","*","");

		foreach ($user as $i => $r) {
			echo '
			ID user = '.$r['id_user'].'<br>
			username = '.$r['username'].'<br>
			password = '.$r['password'].'<br><br>';
		} */
		//echo 'Tes';

		/* for($i=10; $i<=30; $i++){
			$id = generate_id("kolam");
			$name = 'Kolam '.$i;
			$stok = $i*10000;
			$created = date('Y-m-d H:i:s');
			insert("kolam","","('$id','$name','$stok','1','$created','$created')");
		}

		$kolam = select("kolam","*","ORDER BY id_kolam");
		foreach ($kolam as $i => $r) {
			$id = generate_id("kapasitas");
			$name = 'Kursi '.($i+1);
			$created = date('Y-m-d H:i:s');
			insert("kapasitas","","('$id','$name','$r[id_kolam]','Kosong','1','$created','$created')");
		} */
	}
}
