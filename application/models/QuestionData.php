<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuestionData extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getQuestions()
  {
    //read data from file
    $filename = "data/questions.json";
    $handle = fopen($filename, "r");
    $json = fread($handle, filesize($filename));
    $questions = json_decode($json, true);
    return $questions;
  }
}
