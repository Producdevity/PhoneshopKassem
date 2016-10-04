<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['id', 'name'];

  /**
   * Get the devices for the type
   */
  public function devices()
  {
      return $this->hasMany('App\Models\Device');
  }

}
