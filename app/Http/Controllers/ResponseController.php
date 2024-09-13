<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
   public function sendResponse($response)
   {
      return response()->json($response, 200);
   }

   public function sendError($errors, $code = 404)
   {
      $response = ['errors' => $errors];

      return response()->json($response, $code);
   }
}
