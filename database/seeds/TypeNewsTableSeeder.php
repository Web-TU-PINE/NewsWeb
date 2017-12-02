<?php

use Illuminate\Database\Seeder;

class TypeNewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tn1 = new App\typenews();
      $tn1->name ='Soft';
      $tn1->save();

      $tn2 = new App\typenews();
      $tn2->name ='Auto';
      $tn2->save();

      $tn3 = new App\typenews();
      $tn3->name ='Teacher';
      $tn3->save();

      $tn4 = new App\typenews();
      $tn4->name ='Staff';
      $tn4->save();

      $tn5 = new App\typenews();
      $tn5->name ='Outsider';
      $tn5->save();
    }
}
