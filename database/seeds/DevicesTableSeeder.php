<?php

use Illuminate\Database\Seeder;

use App\Models\Device;

class DevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      $img = array("samsung-galaxy-S4-9505.jpg", "samsung-galaxy-S3-mini-i8190.jpg", "samsung-galaxy-tab-2-70-p3100.jpg");
      foreach(range(1,20) as $index)
      {
        Device::create([
          'brand_id' => $faker->numberBetween($min = 1, $max = 9),
          'name' => $faker->userName,
          'type_id' => $faker->numberBetween($min = 1, $max = 2),
          'img' => $img[array_rand($img)]
        ]);
      }
    }
}
