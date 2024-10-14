<?php

namespace App\Http\Controllers;

use App\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Validation\Rule;

class ContactFormController extends Controller
{
   public function index()
   {
      $contacts  = ContactForm::orderBy('id', 'DESC')->get();
      $notReaded = ContactForm::where('is_readed', 0)->count();

      return response()->json(['contacts' => $contacts, 'notReaded' => $notReaded], 200);
   }

   public function updateReaded(Request $request)
   {
      $contact = ContactForm::find($request->id);

      if(!$contact) return abort(404);

      $contact->is_readed = 1;
      $contact->save();

      return response()->json(['message' => 'Success update status'], 200);
   }

   public function store(Request $request) {
      $attributes = [

         'company'            => '会社名',
         'email'              => 'メールアドレス',
         'body'               => '内容'
      ];

      $validator = Validator::make($request->all(), [

         'company'            => 'required|string|max:255',
         'email'              => 'required|email|max:255',
         // 'file'               => 'required|max:102400',
         'body'               => 'required|min:5'
      ], [], $attributes);

      if($validator->fails()) return response()->json(['errors' => $validator->messages()], 422);


      // save to DB
      $contact                   = new ContactForm;

      $contact->company          = $request->company;
      $contact->email            = $request->email;
      $contact->body             = $request->body;

      $contact->save();

      // Send mail here;
      $data = [
         'company'            => $request->company,
         'email'              => $request->email,
         'body'               => $request->body
      ];

      // Change to and bcc target if this launched to live server
      // to this nice-support@nice.co.jp
      // Mail::to('nice-support@nice.co.jp')->bcc(['fordwarder@nice-cg.com', 'onr.marumori@gmail.com', 'yasir139jhy@gmail.com'])->send(new SendMail($data));
      // dd("test");
      Mail::to('yasir139jhy@gmail.com')->bcc(['humanoidgg@gmail.com'])->send(new SendMail($data));

      return response()->json([$contact], 200);
   }

   public function delete(Request $request)
   {
      $contact = ContactForm::find($request->id);

      if(!$contact) return abort(404);

      $contact->delete();

      return $this->index();
   }
}