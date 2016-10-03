<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Brand;

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

}
