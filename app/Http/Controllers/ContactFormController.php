<?php

namespace App\Http\Controllers;

use App\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

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
         'company' => '会社名',
         'code'    => '加盟店コード',
         'name'    => '氏名',
         'phone'   => '電話番号',
         'email'   => 'メールアドレス',
         'subject' => '件名',
         'content' => 'お問い合わせ内容'
      ];

      $validator = Validator::make($request->all(), [
         'company' => 'required|string|max:255',
         'code'    => 'required|string|max:100',
         'name'    => 'required|string|max:255',
         'phone'   => 'required|digits_between:7,17',
         'email'   => 'required|email|max:255',
         // 'email'   => 'required|email:rfc,dns',
         'subject' => 'required|string|max:510',
         'content' => 'required|string'
      ], [], $attributes);

      if($validator->fails()) return response()->json(['errors' => $validator->messages()], 422);
      
      // save to DB
      $contact            = new ContactForm;
      $contact->company   = $request->company;
      $contact->code      = $request->code;
      $contact->name      = $request->name;
      $contact->phone     = $request->phone;
      $contact->email     = $request->email;
      $contact->subject   = $request->subject;
      $contact->content   = $request->content;
      $contact->is_readed = 0;

      $contact->save();

      // Send mail here;
      $data = [
         'company' => $request->company,
         'code'    => $request->code,
         'name'    => $request->name,
         'phone'   => $request->phone,
         'email'   => $request->email,
         'subject' => $request->subject,
         'content' => $request->content
      ];

      Mail::to('mori@marumori-c.com')->cc(['inoue@marumori-c.com', 'teraoka@marumori-c.com'])->send(new SendMail($data));

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
