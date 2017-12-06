<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orientapolis extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->model("QuestionData");
    $data = $this->QuestionData->getQuestions();
    $this->load->view("orientapolis", $data);
  }

}
