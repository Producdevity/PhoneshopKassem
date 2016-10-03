<?php

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $brand_apple = new Brand();
      $brand_apple->name = "Apple";
      $brand_apple->logo = "apple_logo.png";
      $brand_apple->save();

      $brand_samsung = new Brand();
      $brand_samsung->name = "Samsung";
      $brand_samsung->logo = "samsung_logo.png";
      $brand_samsung->save();

      $brand_htc = new Brand();
      $brand_htc->name = "HTC";
      $brand_htc->logo = "htc_logo.png";
      $brand_htc->save();

      $brand_huawei = new Brand();
      $brand_huawei->name = "Huawei";
      $brand_huawei->logo = "huawei_logo.png";
      $brand_huawei->save();

      $brand_sony = new Brand();
      $brand_sony->name = "Sony";
      $brand_sony->logo = "sony_logo.png";
      $brand_sony->save();

      $brand_nokie = new Brand();
      $brand_nokie->name = "Nokia";
      $brand_nokie->logo = "nokia_logo.png";
      $brand_nokie->save();

      $brand_blackberry = new Brand();
      $brand_blackberry->name = "Blackberry";
      $brand_blackberry->logo = "blackberry_logo.png";
      $brand_blackberry->save();

      $brand_oneplus = new Brand();
      $brand_oneplus->name = "OnePlus";
      $brand_oneplus->logo = "oneplus_logo.png";
      $brand_oneplus->save();
    }
}
