<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\ContactForm;
use Carbon\Carbon;

class ContactFormSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      ContactForm::truncate();

      $faker = Faker::create('ja_JP');

      for ($x = 1; $x <= 50; $x++) {
         $contact            = new ContactForm;
         $contact->company   = $faker->company;
         $contact->code      = $faker->creditCardNumber;
         $contact->name      = $faker->name;
         $contact->phone     = $faker->phoneNumber;
         $contact->email     = $faker->email;
         $contact->subject   = $faker->sentence(5);
         $contact->content   = $faker->paragraph(5);
         $contact->is_readed = 0;

         $contact->save();
      }
   }
}
