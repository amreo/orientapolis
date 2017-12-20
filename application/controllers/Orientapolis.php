<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orientapolis extends CI_Controller {

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
    $this->load->model("QuestionData");
    $postdata = array();
    $modelData = $this->QuestionData->getQuestions();
    //build the postData array
    foreach ($this->QuestionData->getQuestions()["questions"] as $section => $item)
    {
      foreach ($item["questions"] as $key => $item) {
        $postdata[$section][$key] = $this->input->post($section . "_" . $key);
      }
    }

    //build the result array
    $result = array();
    foreach ($modelData["data"] as $key => $item)
    {
      $result[$key] = array (
          "count" => 0,
          "value" => 0,
          "multiplier" => $item["multiplier"],
          "offset" => $item["offset"]
        );
    }

    //sum all response
    foreach ($postdata as $sect => $sectItem)
    {
      foreach ($sectItem as $quest => $ans)
      {
          foreach ($modelData["questions"][$sect]["questions"][$quest]["answers"][$ans] as $key => $value)
          {
            if ($key != "text")
            {
              $result[$key]["value"] += $value;
              $result[$key]["count"] += 1;
            }
          }
      }
    }

    foreach ($result as $key => $item)
      $result[$key]["value"] = $item["value"] / $item["count"] * $item["multiplier"] + $item["offset"];


    //apply the medium, multiplier and offset
    $data2 = array (
      "positions" => $result
    );

    $this->load->view("result", $data2);
  }
}
