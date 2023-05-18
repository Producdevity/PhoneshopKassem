<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['id', 'name', 'icon'];

  /**
   * The devices that belong to the repair.
   */
  public function devices()
  {
      // return $this->belongsToMany('App\Models\Device');
      return $this->belongsToMany('App\Models\Device', 'repair_device', 'repair_id', 'device_id');
  }

}
