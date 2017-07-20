<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 //local
include_once APPPATH.'libraries\third_party\mpdf\mpdf.php';

 //servidor
 // include_once APPPATH.'libraries/third_party/mpdf/mpdf.php';

class M_pdf {

	public $param;
	public $pdf;

	//public function __construct($param = '"en-GB-x","Legal","","",10,10,10,10,6,3,')
	// {
	// 	$this->param = $param;
	// 	$this->pdf = new mPDF($this->param);
	// }

	public function __construct(){
		//$this->param = $param;
		$this->pdf = new mPDF('utf-8', 'A4-P');
	}
}