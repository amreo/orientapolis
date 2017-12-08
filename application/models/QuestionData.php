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
    //test data
    $questions = array(
      "data" => array (
        "x" => array (
          "offset" => 0,
          "multiplier" => 1,
        ),
        "y" => array (
          "offset" => 0,
          "multiplier" => 1,
        ),
      ),
      "questions" => array (
        "domande_generali" => array (
          "text" => "Cultura generale",
          "questions" => array (
            "d1" => array (
              "text" => "È necessario essere liberi",
              "answers" => array (
                "r1" => array (
                  "text" => "fortemente d'accordo",
                  "y" => 0.8 ),
                "r2" => array (
                  "text" => "d'accordo",
                  "y" => 0.5 ),
                "r3" => array (
                  "text" => "disaccordo",
                  "y" => -0.5 ),
                "r4" => array (
                  "text" => "fortemnente disaccordo",
                  "y" => -1 )
                )
            ),
            "d2" => array (
              "text" => "Non dobbiamo accogliere i migranti",
              "answers" => array (
                "r1" => array (
                  "text" => "fortemente d'accordo",
                  "x" => 0.7 ),
                "r2" => array (
                  "text" => "d'accordo",
                  "x" => 0.3 ),
                "r3" => array (
                  "text" => "disaccordo",
                  "x" => -0.2 ),
                "r4" => array (
                  "text" => "fortemnente disaccordo",
                  "x" => -0.5 )
                )
              ),
            )
          ),
          "domande_sociali" => array (
            "text" => "Temi sociali",
            "questions" => array (
              "d1" => array (
                "text" => "In uno stato civile l’aborto dovrebbe essere sempre legale",
                "answers" => array (
                  "r1" => array (
                    "text" => "fortemente d'accordo",
                    "y" => 0.5 ),
                  "r2" => array (
                    "text" => "d'accordo",
                    "y" => 0.3 ),
                  "r3" => array (
                    "text" => "disaccordo",
                    "y" => 0 ),
                  "r4" => array (
                    "text" => "fortemnente disaccordo",
                    "y" => 0.7 )
                  )
              ),
              "d2" => array (
                "text" => "In Italia la situazione della donna è paritaria con quella degli uomini.",
                "answers" => array (
                  "r1" => array (
                    "text" => "fortemente d'accordo",
                    "x" => 0.8 ),
                  "r2" => array (
                    "text" => "d'accordo",
                    "x" => 0.3 ),
                  "r3" => array (
                    "text" => "disaccordo",
                    "x" => -0.2 ),
                  "r4" => array (
                    "text" => "fortemnente disaccordo",
                    "x" => 0.8 )
                )
              )
           )
        )
      )
    );

    return $questions;
  }
}
