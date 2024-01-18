<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SolutionService;
use App\Http\Requests\SolutionOnePhpRequest;
use App\Http\Requests\SolutionTwoPhpRequest;

class SolutionController extends Controller
{
  private $solutionService;

  public function __construct(SolutionService $solutionService){ $this->solutionService = $solutionService; }

  public function goToPhpProblemPage()
  {

    return view('content.pages.php-problem');
  }

  public function goToSqlProblemPage()
  {
    return view('content.pages.sql-problem');
  }

  public function generateAnswerOne(SolutionOnePhpRequest $request)
  {
    $data = [];
    $data['answer'] = $this->solutionService->problemOneSolution($request->validated());
    return response()->json($data);
  }

  public function generateAnswerTwo(SolutionTwoPhpRequest $request)
  {
    $data = [];
    $data['answer'] =  $this->solutionService->problemTwoSolution($request->validated());
    return response()->json($data);
  }

}
