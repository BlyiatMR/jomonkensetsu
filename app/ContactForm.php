<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
   protected $fillable = [
      'company',
      'code',
      'name',
      'phone',
      'email',
      'subject',
      'content',
      'is_readed'
   ];

   public function getCreatedAtAttribute()
   {
      setlocale(LC_TIME, 'ja_JP');
      \Carbon\Carbon::setLocale('ja');
      return \Carbon\Carbon::parse($this->attributes['created_at'])->translatedFormat('Y年FjS（D）- H:i');
      // return $this->created_at->translatedFormat('l jS F Y');
      // $date = \Carbon\Carbon::parse($this->attributes['created_at'])->format('Y/n/j/D');
      // return \Carbon\Carbon::setLocale('ja')->now()->format('Y/n/j/D/d');
   }

   public function getUpdatedAtAttribute()
   {
      setlocale(LC_TIME, 'ja_JP');
      \Carbon\Carbon::setLocale('ja');
      return \Carbon\Carbon::parse($this->attributes['updated_at'])->translatedFormat('Y年FjS（D）- H:i');
   }
}
