<?php

namespace App\Services;
use App\Interfaces\CanSolveProblems;

class SolutionService implements CanSolveProblems
{

  //  logic solution
  public function problemOneSolution($payload)
  {
    $array_3d = array();
    for ($i = 0; $i < $payload['input1']; $i++)
    {
        $array_3d[$i] = array();
        for ($j = 0; $j < $payload['input2']; $j++)
        {
            $array_3d[$i][$j] = array();
            for ($k = 0; $k < $payload['input3']; $k++)
            {
                $array_3d[$i][$j][$k] = $i * $j * $k;
            }
        }
    }
    $array_3d = json_encode($array_3d);
    $html = "<div class='card'>
              <div class='alert alert-primary alert-dismissible' role='alert'>
                <h4 class='alert-heading d-flex align-items-center'>&#128591; Answer:</h4>
                <hr>
                <p class='mb-0'>
                  $array_3d
                </p>
              </div>
            </div>";
    return $html;

  }

  //  logic solution
  public function problemTwoSolution($payload)
  {
      $sentences = [];
      $resultString =  '';
      // Split the input string into paragraphs and sentences
      $paragraphs = explode("\n", $payload['sentence']);
      foreach ($paragraphs as $paragraph)
      {
          $sentences = array_merge($sentences, preg_split('/[.?!]/', $paragraph, -1, PREG_SPLIT_NO_EMPTY));
      }

      // Iterate through sentences and include those with word count <= maxCount
      $currentWordCount = 0;
      foreach ($sentences as $sentence)
      {
          $words = str_word_count($sentence);
          $currentWordCount += $words;

          if ($currentWordCount <= $payload['maxCount'])
          {
              $resultString .= $sentence . ' ';
          } else {
              break;
          }
      }
      return $resultString;
  }

}
