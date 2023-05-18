<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['id', 'name', 'logo'];

  /**
   * Get the devices for the brand
   */
  public function devices()
  {
      return $this->hasMany('App\Models\Device');
  }
}
