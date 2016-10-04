<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['id', 'name', 'brand_id', 'type_id', 'img'];

  /**
   * The repairs that belong to the device.
   */
  public function repairs()
  {
      // return $this->belongsToMany('App\Models\Repair');
      return $this->belongsToMany('App\Models\Repair', 'repair_device', 'device_id', 'repair_id')->withPivot('price', 'id');
  }

  /**
   * Get the brand record associated with the device
   */
  public function brand()
  {
      return $this->belongsTo('App\Models\Brand');
  }

  /**
   * Get the type record associated with the device
   */
  public function type()
  {
      return $this->belongsTo('App\Models\Type');
  }

  /**
   * Device full_name Attribute
   */
  public function getFullNameAttribute() {
      return ucfirst($this->brand->name) . " " . ucfirst($this->name);
  }

}
