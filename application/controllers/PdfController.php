<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

//require APPPATH . '/libraries/BaseController.php';
 require APPPATH . '/libraries/Pdf.php';

/**
 * Class : Task (TaskController)
 * Task Class to control task related operations.
 * @author : Kishor Mali
 * @version : 1.5
 * @since : 19 Jun 2022
 */
class PdfController extends CI_Controller
{
	public function print_rcp()
	{
	$this->load->library('pdf');
	 $html = $this->load->view('payment/GeneratePdfView', [], true);
	   $this->pdf->createPDF($html, 'mypdf', true);
	}
 
}

?>