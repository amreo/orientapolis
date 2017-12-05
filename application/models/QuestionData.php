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
      "domande_generali" => array (
        "testo" => "Cultura generale",
        "variabili" => array (
          "x" => array (
            "offset" => 0,
            "multiplier" => 1,
          ),
          "y" => array (
            "offset" => 0,
            "multiplier" => 1,
          )
        ),
        "domande" => array (
          "d1" => array (
            "testo" => "È necessario essere liberi",
            "risposte" => array (
              "r1" => array (
                "testo" => "fortemente d'accordo",
                "y" => 0.8 ),
              "r2" => array (
                "testo" => "d'accordo",
                "y" => 0.5 ),
              "r3" => array (
                "testo" => "disaccordo",
                "y" => -0.5 ),
              "r4" => array (
                "testo" => "fortemnente disaccordo",
                "y" => -1 )
              )
          ),
          "d2" => array (
            "testo" => "Non dobbiamo accogliere i migranti",
            "risposte" => array (
              "r1" => array (
                "testo" => "fortemente d'accordo",
                "x" => 0.7 ),
              "r2" => array (
                "testo" => "d'accordo",
                "x" => 0.3 ),
              "r3" => array (
                "testo" => "disaccordo",
                "x" => -0.2 ),
              "r4" => array (
                "testo" => "fortemnente disaccordo",
                "x" => -0.5 )
              )
            ),
          )
        ),
        "domande_sociali" => array (
          "testo" => "Temi sociali",
          "domande" => array (
            "d1" => array (
              "testo" => "In uno stato civile l’aborto dovrebbe essere sempre legale",
              "risposte" => array (
                "r1" => array (
                  "testo" => "fortemente d'accordo",
                  "y" => 0.5 ),
                "r2" => array (
                  "testo" => "d'accordo",
                  "y" => 0.3 ),
                "r3" => array (
                  "testo" => "disaccordo",
                  "y" => 0 ),
                "r4" => array (
                  "testo" => "fortemnente disaccordo",
                  "y" => 0.7 )
                )
            ),
            "d2" => array (
              "testo" => "In Italia la situazione della donna è paritaria con quella degli uomini.",
              "risposte" => array (
                "r1" => array (
                  "testo" => "fortemente d'accordo",
                  "x" => 0.8 ),
                "r2" => array (
                  "testo" => "d'accordo",
                  "x" => 0.3 ),
                "r3" => array (
                  "testo" => "disaccordo",
                  "x" => -0.2 ),
                "r4" => array (
                  "testo" => "fortemnente disaccordo",
                  "x" => 0.8 )
                )
              ),
            )
          ),
      )
    );

    return questions;
  }
}
