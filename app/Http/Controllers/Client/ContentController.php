<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Brand;
use App\Models\Device;
use App\Models\Type;
use App\Models\Repair;

class ContentController extends Controller
{
  /**
   * controller constructor
   *
   * @return void
   */
  public function __construct()
  {
      setlocale(LC_ALL, 'nld_nld');
      $page_title = 'Phoneshop Kassem';
      $brands = Brand::all();

      $data = array(
        "page_title"=> $page_title,
        "brands" => $brands
      );
      \View::share('data', $data);
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function homePage()
  {
      return view('client.home.home');
  }

  /**
   * Show the information page
   *
   * @return \Illuminate\Http\Response
   */
  public function infoPage()
  {
      return view('client.info.info');
  }

  /**
   * Show the contact page
   *
   * @return \Illuminate\Http\Response
   */
  public function contactPage()
  {
      return view('client.contact.contact');
  }

  /**
   * Show the brands of the url param
   * @param  Type  $type
   * @return \Illuminate\Http\Response
   */
  public function brandsOnType($typeID)
  {
    $page_title = 'Beschikbare Data';
    $type = Type::where('id', $typeID)->first();

    $data = array(
      // "page_title"=> $page_title,
      "type" => $type
    );

      return view('client.brands.brands', $data);
  }

  /**
   * Show the brands of the url param
   * @param  Brand  $brandID
   * @param  Type  $typeID
   * @return \Illuminate\Http\Response
   */
  public function devicesOnBrandAndType($brandID, $typeID)
  {
    $page_title = 'Beschikbare Data';
    $devices = Device::where(['brand_id' => $brandID, 'type_id' => $typeID])->get();
    $type = Type::where('id', $typeID)->first();

    $data = array(
      "page_title"=> $page_title,
      "devices" => $devices,
      "type" => $type
    );

      return view('client.devices.devices', $data);
  }

  /**
   * Show the brands of the url param
   * @param  Device  $id
   * @return \Illuminate\Http\Response
   */
  public function deviceDetails($deviceID)
  {
    $page_title = 'Beschikbare Data';
    $device = Device::where('id', $deviceID)->first();

    $data = array(
      "page_title"=> $page_title,
      "device" => $device
    );

      return view('client.details.details', $data);
  }

}
