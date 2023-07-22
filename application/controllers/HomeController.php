<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

  
   public function index()
   {
      $this->load->view('Userinterface/frontend/index');
   }

   public function about()
   {
      $this->load->view('Userinterface/frontend/about');
   }

   public function product()
   {
      $this->load->view('Userinterface/frontend/product');
   }

   public function contact()
   {
      $this->load->view('Userinterface/frontend/contacts');
   }
}
