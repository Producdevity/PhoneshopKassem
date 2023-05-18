<?php

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $type_mobile = new Type();
      $type_mobile->name = "Telefoon";
      $type_mobile->save();

      $type_tablet = new Type();
      $type_tablet->name = "Tablet";
      $type_tablet->save();
    }
}
