<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orientapolis extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model("QuestionData");
    $data = $this->QuestionData->getQuestions();
    $this->load->view("orientapolis", $data);
  }

  function result()
  {
    
  }
}
