<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Validator;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ResponseController as ResponseController;

class AuthController extends ResponseController
{
   public function login(Request $request)
   {
      $validator = Validator::make($request->all(), [
         'email' => 'required|string|email|max:255',
         'password' => 'required|string|max:100'
      ]);

      if($validator->fails()) return $this->sendError($validator->errors());

      $credentials = request(['email', 'password']);

      if(!Auth::attempt($credentials)) {
         $error['others'] = ['UsernameとPasswordは間違いました'];
         return $this->sendError($error, 401);
      }

      $user             = Auth::user();
      $success['user']  = $user;
      $success['token'] = $user->createToken('token')->accessToken;

      return $this->sendResponse($success);
   }

   public function logout(Request $request)
   {
      $isUser = $request->user()->token()->revoke();

      if($isUser) {
         $success['message'] = 'Logout完了';

         return $this->sendResponse($success);
      }else{
         $error = 'エラーが発生しました。管理者にご連絡ください。';

         return $this->sendResponse($error);
      }
   }
}
