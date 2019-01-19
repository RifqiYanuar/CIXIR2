<?php
  defined('BASEPATH') OR exits('No direct script acces allowed');
  class User extend CI_Controller {
    public function index()
    {
      $data['konten']="home";
      $this->load->view('template',$data);
    }
  }

  /* End of file Template.php */
  /* Location: ./application/controllers/Template.php */
?>
