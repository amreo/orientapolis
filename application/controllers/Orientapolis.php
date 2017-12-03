<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orientapolis extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $data["domande"]["d1"]["testo"] = "La libertà è una necessità";
    $data["domande"]["d1"]["r1"] = "Fortemente d'accordo";
    $data["domande"]["d1"]["r2"] = "D'accordo";
    $data["domande"]["d1"]["r3"] = "Disaccordo";
    $data["domande"]["d1"]["r4"] = "Fortemente disaccordo";

    $data["domande"]["d2"]["testo"] = "È necessario censurare le notizie scomode al governo";
    $data["domande"]["d2"]["r1"] = "Fortemente d'accordo";
    $data["domande"]["d2"]["r2"] = "D'accordo";
    $data["domande"]["d2"]["r3"] = "Disaccordo";
    $data["domande"]["d2"]["r4"] = "Fortemente disaccordo";

    $this->load->view("orientapolis", $data);
  }

}
